<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Managment extends CI_Controller {
	public function index() {
		$data ['pagina'] = 'managment/index';
		$this->load->view ( 'template/index', $data );
	}
	public function user() {
		$data ['pagina'] = 'managment/user';
		$this->load->view ( 'template/index', $data );
	}
	public function create_user() {
		$this->load->model ( 'Model_User' );
		$this->form_validation->set_rules ( 'email', 'Email', 'required|is_unique[usuario.email]' );
		
		$registro ['nombre'] = $this->input->post ( 'nombre' );
		$registro ['apellido'] = $this->input->post ( 'apellido' );
		$registro ['email'] = $this->input->post ( 'email' );
		$registro ['enviado'] = 'no';
		
		if ($this->form_validation->run () == FALSE) {
			
			redirect ( 'managment/index' );
		} else {
			
			$this->Model_User->insert ( $registro );
			redirect ( 'managment/user' );
		}
	}
	public function create() {
		$this->load->model ( 'Model_User' );
		$data ['pagina'] = 'managment/create';
		// $data ['busqueda'] = $this->Model_User->search ( $this->input->post ( $email ) );
		$this->load->view ( 'template/index', $data );
	}
	public function create_email() {
		$this->load->model ( 'Model_Correo' );
		// $this->form_validation->set_rules ( 'nombre_correo', 'Nombre Correo', 'required|is_unique[correo.nombre_correo]' );
		$this->form_validation->set_rules ( 'sender', 'Sender', 'required' );
		$this->form_validation->set_rules ( 'header', 'header', 'required' );
		$this->form_validation->set_rules ( 'body', 'body', 'required' );
		$this->form_validation->set_rules ( 'imagen', 'imagen', 'required' );
		
		$registro ['nombre_correo'] = $this->input->post ( 'nombre_correo' );
		$registro ['sender'] = $this->input->post ( 'sender' );
		$registro ['header'] = $this->input->post ( 'header' );
		$registro ['body'] = $this->input->post ( 'body' );
		$registro ['imagen'] = $this->input->post ( 'imagen' );
		
		if ($this->form_validation->run () == FALSE) {
			
			redirect ( 'managment/index' );
		} else {
			
			$this->Model_Correo->insert ( $registro );
			redirect ( 'managment/create' );
		}
	}
	public function send() {
		$this->load->model ( 'Model_Correo' );
		$data ['pagina'] = 'managment/send';
		$data ['correos'] = $this->Model_Correo->all ();
		$this->load->view ( 'template/index', $data );
	}
	public function send_email($idcorreo) {
		$this->load->model ( 'Model_Correo' );
		$this->load->model ( 'Model_User' );
		$correos = $this->Model_User->all ();
		$build = $this->Model_Correo->selected ( $idcorreo );
		$this->email->attach ( $build->imagen, 'inline' );
		
		foreach ( $correos as $correo ) {
			$config = array (
					'protocol' => 'smtp',
					'smtp_host' => 'host',
					'smtp_user' => 'correo',
					'smtp_pass' => 'clave',
					'smtp_port' => '587',
					'smtp_crypto' => 'tls',
					'mailtype' => 'html',
					'wordwrap' => TRUE,
					'charset' => 'utf-8' 
			);
			$this->email->initialize ( $config );
			$this->email->from ( $build->sender, '' );
			$this->email->to ( $correo->correo );
			$this->email->subject ( $build->header );
			$this->email->message ( $build->body );
			
			$this->email->send ();
		}
		redirect ( 'managment/send' );
	}
}
