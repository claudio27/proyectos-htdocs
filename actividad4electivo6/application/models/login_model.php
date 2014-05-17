<?php 
class login_model extends CI_Model
{
 
    public function __construct()
    {
    $this->load->library('session');
    $this->load->database();
    }
   
   
    public function getLogin($username,$password)
    {
    //comprobamos que el nombre de usuario y contraseña coinciden
    $data = array(
    'username' => $username,
    'password' => $password
    );
   
    $query = $this->db->get_where('usuarios',$data);
    return $query->result_array();
    }
   
   
    public function isLogged()
    {
    //Comprobamos si existe la variable de sesión username. En caso de no existir,
    // le impediremos el paso a la página para usuarios registrados
   
        if(isset($this->session->userdata['username']))
        {
        return TRUE;
        }
        else
        {
        return FALSE;
        }
       
    }
   
   
   
    public function close()
    {
    //cerrar sesión
    return $this->session->sess_destroy();
    }
    
    /**
     *  Muestra informacion de la bd 
     */
    
    public function showDb(){
        
        $query = $this->db->get('usuarios');
        
        return $query->result_array();
//        
//        foreach ($query->result_array() as $row)
//{
//    echo $row['id'];
//    echo $row['nombre'];
//    
//}
//        
        
    }
    
    public function borrarUsuario($id)
            {
        
            $query = $this->db->query('delete from usuarios where id='.$id);
               
        
            }
}
?>