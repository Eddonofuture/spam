<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowned' );
class Model_Correo extends CI_Model {
	function __construct() {
		parent::__construct ();
	}
	function all() {
		$query = $this->db->get ( 'correo' );
		return $query->result ();
	}
	function find_any($nombre) {
		// $this->db->where ( 'estado', 'ok' );
		$this->db->like ( 'nombres', $nombre );
		$query = $this->db->get ( 'correo' );
		return $query->result ();
	}
	function find_id($id) {
		$this->db->where ( 'idcorreo', $id );
		return $this->db->get ( 'correo' )->row ();
	}
	// ***********
	function insert($registro) {
		$this->db->set ( $registro );
		$this->db->insert ( 'correo' );
	}
	function selected($idcorreo) {
		$this->db->where ( 'idcorreo', $idcorreo );
		return $this->db->get ( 'correo' )->row ();
	}
	
	// **********
	function update($id, $registro) {
		$this->db->set ( $registro );
		$this->db->where ( 'idcorreo', $id );
		$this->db->update ( 'correo' );
	}
	function delete($id) {
		$this->db->where ( 'id', $id );
		$this->db->delete ( 'correo' );
	}
}
