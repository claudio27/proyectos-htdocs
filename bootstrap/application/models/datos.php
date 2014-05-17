<?php


class datos extends CI_Model{

	public function __construct(){

		$this->load->database();
	}

	public function getDatos(){
		$q = "select * from `datos` order by id desc limit 10";

		$query = $this->db->query($q);

		return $query->result();
		// $query = $this->db->get('datos');
		// return $query->result();
	}

	public function setDatos($hora,$cliente,$navegador){

		$sql = "insert into datos (hora,cliente_ip,navegador) values ('$hora','$cliente','$navegador')";

		$this->db->query($sql);
	}


}

?>