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
        <tr>
            <th>DESTINO</th><th>ASIENTO</th><th>NOMBRE</th>
            <th>RUT</th><th>DIRECCION</th>
        </tr>
        <?php
        
        foreach ($datos as $reg) {
            echo "<tr>
                <td>". $reg['Destino']."</td><td>" . $reg['Asiento'] . "</td>
                <td>" . $reg['Nombre'] . "</td><td>" . $reg['Rut'] . "</td>
                <td>" . $reg['Direccion'] . "</td>    
           </tr>";
            
        }
        ?>
    </table>
            <p>Nota: si no aparecen resultados es porque el usuario no 
            está asociado a ningún vuelo</p>
        </div>
     <a href="<?php echo base_url()?>login/destroy">Cerrar Sesión</a>
        
        
    </body>
</html>
