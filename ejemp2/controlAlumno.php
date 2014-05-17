<?php

require("modeloAlumno.php");

   
   $nom=$_POST['txtNombre'];
   $ape=$_POST['txtApellido'];
   $rut=$_POST['txtRut'];
   $dig=$_POST['digito'];
   $tel=$_POST['txtTelefono'];
   $fec=$_POST['txtFecha'];
   $car=$_POST['carrera'];
   $ing=$_POST['ingreso'];
   $bec=$_POST['beca'];
   $des=$_POST['txtDesarrollo'];
   $sex=$_POST['rdSexo'];
   
   $alum=new Alumno();
   $id=$alum->agrega($nom,$ape,$tel,$sex,$rut,$dig,$fec,$car,$ing,$des);
   
   $idAlumno = $_GET['id'];
   
   
   if(isset($idAlumno)){
   
   $alum->eliminar($idAlumno);
   
   }else{
   
   foreach($bec as $una)
    { $alum->agrega_beca($id,$una);}
	
	$datos=$alum->getTabla();
	include("pagina3.php");
	
	}
?>
   
   
