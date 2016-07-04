<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowned' );
class Model_User extends CI_Model {
	function __construct() {
		parent::__construct ();
	}
	function all() {
		$query = $this->db->get ( 'usuario' );
		return $query->result ();
	}
	function find($rut) {
		$this->db->where ( 'rut', $rut );
		return $this->db->get ( 'usuario' )->row ();
	}
	function find_any($nombre) {
		// $this->db->where ( 'estado', 'ok' );
		$this->db->like ( 'nombres', $nombre );
		$query = $this->db->get ( 'usuario' );
		return $query->result ();
	}
	function find_id($id) {
		$this->db->where ( 'idusuario', $id );
		return $this->db->get ( 'usuario' )->row ();
	}
	// ***********
	function insert($registro) {
		$this->db->set ( $registro );
		$this->db->insert ( 'usuario' );
	}
	
	// **********
	function update($id, $registro) {
		$this->db->set ( $registro );
		$this->db->where ( 'idusuario', $id );
		$this->db->update ( 'usuario' );
	}
	function delete($id) {
		$this->db->where ( 'id', $id );
		$this->db->delete ( 'usuario' );
	}
}
