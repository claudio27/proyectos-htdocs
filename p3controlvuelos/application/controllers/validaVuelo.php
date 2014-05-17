<?php

class ValidaVuelo extends CI_Controller{
    
     
    public function __construct() {
        parent:: __construct();
        $this->load->model('login_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
    }



    public function index() {
        
       
        if(isset($_POST['asiento'])){
            
            
            $datos = array(
                'Id_viaje' => $_POST['idvuelo'],
                'Id_usuario' => $_POST['idusuario'],
                'Asiento' => $_POST['asiento']
            );     
            
            $this->login_model->insertaVuelo($datos);
            
            echo "Reserva Realizada <a href='".base_url()."'>Volver</a>";
            
        }
        
        
    }
    
  

  

}
?>
