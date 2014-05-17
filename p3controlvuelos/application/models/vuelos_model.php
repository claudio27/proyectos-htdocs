<?php

class vuelos_model extends CI_Model {

    public function __construct() {
        $this->load->library('session');
        $this->load->database();
    }

    public function fechas() {

        $this->db->select('Fecha');

        $query = $this->db->get('vuelo');
        return $query->result_array();
    }

    public function horas() {

        $this->db->select('Hora');

        $query = $this->db->get('vuelo');
        return $query->result_array();
    }

    public function destinos() {

        $this->db->select('Destino');

        $query = $this->db->get('vuelo');
        return $query->result_array();
    }

    public function ruts() {

        $this->db->select('Rut');

        $query = $this->db->get('usuario');
        return $query->result_array();
    }

    public function listaVuelo($fecha, $hora, $destino) {

        $sql = "select 
    u.Nombre , uv.Asiento, v.Id_vuelo, u.Id_usuario
from
    usuario u
join
    usuario_vuelo uv
on
    u.Id_usuario = uv.Id_usuario
join
    vuelo v
on 
    v.Id_vuelo = uv.Id_viaje and
     v.Fecha = '$fecha'and
     v.Hora = '$hora'and 
     v.Destino = '$destino'
order by uv.Asiento";

        $query = $this->db->query($sql);

        $row = $query->result_array();
        return $row;
    }

    public function busquedaPasajero($rut) {

        $sql = "select 
    v.Destino,uv.Asiento, u.Nombre, u.Rut, u.Direccion
from
    usuario u
join
    usuario_vuelo uv
on
    u.Id_usuario = uv.Id_usuario
join
    vuelo v
on 
    v.Id_vuelo = uv.Id_viaje and 
    u.Rut = '$rut'";

        $query = $this->db->query($sql);

        $row = $query->result_array();
        return $row;
    }
    
    public function borrar($idvuelo, $idusuario,$idasiento) {
        $sql = "delete from usuario_vuelo where Id_viaje = '$idvuelo' and Id_usuario = '$idusuario'
                and Asiento ='$idasiento'";

            $this->db->query($sql);

     
    }

}

?>