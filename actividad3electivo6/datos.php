<?php
$nombre = $_POST['txtNombre'];
$apellido = $_POST['txtApellido'];
$carrera = $_POST['carrera'];
$beca = $_POST['beca'];

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link type="text/css" rel="stylesheet" href="css/estilo.css" >
        <script type="text/javascript" src="js/funciones.js"></script>
        <title>Muestra de datos</title>
    </head>
    <body>
        <div>
            <img src="img/logo-ucentral.png" style="width: 400px; margin-left: 30px;"/>
            <div>
                <h1> ALUMNO REGISTRADO </h1>
                <p>RESUMEN:</p>
                <p>Nombre: <?php echo $nombre." ".$apellido; ?></p>
                <p>Carrera: <?php echo $carrera; ?></p>
                <p>Beca: <ul>
                    <?php
                    
                    foreach ($beca as $be){           
                    ?>
                    <li> <?php echo $be;?></li>
                    <?php } ?>
                </ul></p>
            </div>
        </div>

    </body>
</html>
