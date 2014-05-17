<?php

require("conecxionClass.php");


$idAlumno = $_GET['id'];

function eliminar($id){

$sql = "delete from alumno where id_Alumno = $id";

   $res=mysql_query($sql,miConexion::alumno());

	if($res == 1){
		
		echo "Borrado exitosamente";
	
	}

}



eliminar($idAlumno);

?>
