 
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Demo extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();
 
        $this->load->database();
 
    }
 
    public function index()
    {
 
    }
 
    public function employees_example()
    {
        $crud = new grocery_CRUD();
 
        $crud->set_table('vuelos');
        $output = $crud->render();
 
        $this->_example_output($output);                
    }
 
    function _example_output($output = null)
 
    {
        $this->load->view('demo_vista.php',$output);    
    }    
}
 
/* End of file main.php */
/* Location: ./application/controllers/main.php */?>
 