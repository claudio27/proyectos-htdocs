<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/estilo.css" >
    <script src="<?php echo base_url(); ?>js/jquery_1.4.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>js/jquery_validate.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>js/script.js" type="text/javascript"></script>  
    <title>Actividad 4 - Modificar archivos codeIgniter - Claudio Serrano</title>
</head>
<body>
    <h1>Actividad 4 - Modificar code igniter de ejemplo - Claudio Serrano</h1>
    <h2>Inicie sesión para ingresar como administrador o visita</h2>
    <h3> usuario: administrador / pass: administrador </h3>
    <h3> usuario: visita / pass: visita </h3>
<?php echo validation_errors(); ?>
<?php echo form_open('Login/index');  //esto reemplaza a la etiqueta de inicio del form ?>
 <!--form method="post" accept-charset="utf-8" action="/miCI/Login/index"   -->
<label>Usuario</label><br>
<input type="text" id="username" name="username"><br><br>
<label>Password</label><br>
<input type="password" id="password" name="password">
<br><br>
<input type="submit" value="Enviar">
<!--/form--> 
<?php 
echo form_close();    //esto reemplaza al </form>?>
</body>
</html>