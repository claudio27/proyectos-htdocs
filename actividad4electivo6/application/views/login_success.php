<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/estilo.css" >
    <script src="<?php echo base_url(); ?>js/jquery_1.4.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>js/jquery_validate.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>js/script.js" type="text/javascript"></script>  

</head>

<body>
    <h1><img src="<?php echo base_url(); ?>images/logo.jpg" width="100px"></h1>
    Logueado con éxito
    
    Bienvenido <?php echo $nombre ?>   <!--  es lo mismo que echo $nombre;  -->  

    <?php if ($tipo == 1) {?>
    <h1>Bienvendo Administrador</h1>
        <table>
        <tr><th>ID</th><th>NOMBRE</th><th>BORRAR</th></tr>
        <?php
        
        foreach ($datos as $reg) {
            echo "<tr> <td>" . $reg['id'] . "</td><td>" . $reg['nombre'] . "</td>
                <td><a href=\"borrar/".$reg['id']."\">Borrar</a></td></tr>";
            
        }
        ?>
    </table>
    <?php }else{
        echo "<h1>Bienvenido Visita</h1>";
        
    }?>
    
    
    <a href="<?php echo base_url();?>Login/destroy">Salir de la Sesión</a>
 
</body>
</html>