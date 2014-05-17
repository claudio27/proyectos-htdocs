<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/estilo.css" >
        <script src="<?php echo base_url(); ?>js/jquery_1.4.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>js/jquery_validate.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>js/script.js" type="text/javascript"></script>  

        <title>Detalles Administrador</title>
    </head>
    <body>
        <h1>Detalles Administrador</h1>
        <h3>Bienvenido/a <?php echo $nombre;?></h3>
        
      
        <div>
        <table style="text-align: center;">
        <tr><th>NOMBRE</th><th>ASIENTO</th><th></th></tr>
        <?php
        
        foreach ($datos as $reg) {
            echo "<tr> <td>". $reg['Nombre']."</td><td>" . $reg['Asiento'] . "</td>
                <td><a href=\" ".base_url()."informes/borrarVuelo/".$reg['Id_vuelo']."/".$reg['Id_usuario']
                    ."/".$reg['Asiento']."\">Borrar</a></td></tr>";
            
        }
        ?>
    </table>
        </div>
    <a href="<?php echo base_url()?>login/destroy">Cerrar Sesión</a>
        
        
    </body>
</html>
