<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {


public function __construct() {
        parent:: __construct();
        $this->load->model('datos');
      
    }


	public function index()
	{
		$this->load->view('inicio');
		$this->datos->setDatos(date('d/m/y-H:i:s'), $_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_USER_AGENT']);
	}

	function saludo(){

		echo "<h1>Hola Claudio, ¿cómo estas?</h1>";
	}

	function registros(){

		$data['datos'] = $this->datos->getDatos();
		$this->load->view('registro',$data);
	}
}

