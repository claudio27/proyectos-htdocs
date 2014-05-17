<?php 


class Inicio extends CI_Controller{
    
    function __construct() {
        
        parent::__construct();
   
        
    }

    /**
     *  inicia el controlador, se llama sola,
     *  pero si se le pone un parametro se puede llamar
     *  localhost/CI/inicio/index/parametro
     *
     */
    function index() {
        
        echo "Partiendo con codeIgniter :-)";
        $this->load->view('miVista');
        
    }
    
    /**
     * funcion usada desde el controlador, saluda dependiendo
     * del parametro que se le ingrese
     * localhost/CI/index.php/inicio/saludo/nombre
     */
    function saludo($nom) {
        
        echo "<h1> Hola ".$nom."</h1>";
        
    }
    
 
    
}



