<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/estilo.css" >
        <script src="<?php echo base_url(); ?>js/jquery_1.4.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>js/jquery_validate.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>js/script.js" type="text/javascript"></script>  

        <title>Ingreso Clientes</title>
    </head>
    <body>
        <h1>Acceso Pasajeros</h1>
        <div>

            <?php //echo form_open('Login/index');  //esto reemplaza a la etiqueta de inicio del form ?>
            <form id="login" method="post" accept-charset="utf-8" action="login" >
                <label>Usuario</label>
                <input type="text" id="username" name="username"  /><br><br>
                <label>Password</label> 
                <input type="password" id="password" name="password" />
                <br /><br />
                <input type="submit" value="Enviar">
            </form> 
            <?php //echo form_close();    //esto reemplaza al </form> ?>
            <p><a href="<?php echo base_url(); ?>">Volver</a></p>
            <p><a href="<?php echo base_url(); ?>login/registro">Registrarse</a></p>
        </div>
    </body>
</html>
