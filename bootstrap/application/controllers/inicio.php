<?php


class Inicio extends CI_Controller
{	


 
	function __construct()
	{
		parent::__construct();
	}

	function index(){

		echo "Hola Mundi";
	}





		function datos(){

		$ip = $_SERVER['REMOTE_ADDR'];
		$navegador = $_SERVER['HTTP_USER_AGENT'];
		$fecha = date('d/m/y-H:i:s');


			echo "$ip -- $navegador -- $fecha";
		}


}





?>