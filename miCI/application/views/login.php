<!-- CONSIDERACIONES EN ESTE ARCHIVO:  se creó una carpeta en la raiz del proyecto llamada 'js' y ahí se guardan los script que usaremos
                                       la sentencia base_url() retorna la raiz registrada en la configuración ($config['base_url']	= 'http://localhost/miCI/';)
                                                                           esto nos ahorra escribirlo varias veces y nos sirve en caso de cambiar el proyecto, esto es aplicable 
                                                                           a cada elemento que necesite de direcciones, por ejemplo imagenes, estilos-->

<!DOCTYPE HTML>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<html>
    <head>
        <title>Ingreso a Sistema</title>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/estilo.css" >
        <script src="<?php echo base_url(); ?>js/jquery_1.4.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>js/jquery_validate.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>js/script.js" type="text/javascript"></script>  
    </head>
    <body>
        <div id="marco">

            <?php //echo form_open('Login/index');  //esto reemplaza a la etiqueta de inicio del form ?>
            <form id="login" method="post" accept-charset="utf-8" action="/miCI/Login/index" >
                <label>Usuario</label>
                <input type="text" id="username" name="username"  /><br><br>
                <label>Password</label> 
                <input type="password" id="password" name="password" />
                <br /><br />
                <input type="submit" value="Enviar">
            </form> 
            <?php //echo form_close();    //esto reemplaza al </form> ?>
        </div>
    </body>
</html>