<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/estilo.css" >
        <script src="<?php echo base_url(); ?>js/jquery_1.4.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>js/jquery_validate.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>js/script.js" type="text/javascript"></script>  

        <title>Registro Clientes</title>
    </head>
    <body>
        <h1>Registro Usuarios</h1>
        <div>
            <form id="registro" method="post" accept-charset="utf-8" action="<?php echo base_url(); ?>registroControl" >
                <?php echo validation_errors(); ?>
                <label for="username">Nombre Usuario</label>
                <input type="text" id="username" name="username"/><br>
                <label for="password">Password</label> 
                <input type="password" id="password" name="password" /><br>
                <label for="nombre">Nombre</label> 
                <input type="text" id="nombre" name="nombre" /><br>
                <label for="rut">Rut (sin guión)</label> 
                <input type="text" id="rut" name="rut"/><br>
                <label for="direccion">Dirección</label> 
                <input type="text" id="direccion" name="direccion" /><br>

                <input type="submit" value="Registrarse">
            </form>
            <a href="<?php echo base_url()?>login">Volver</a>
        </div>
        <?php //@todo poner cierre de sesion?>
    </body>
</html>
