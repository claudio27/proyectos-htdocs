<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/estilo.css" >
        <script src="<?php echo base_url(); ?>js/jquery_1.4.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>js/jquery_validate.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>js/script.js" type="text/javascript"></script>  

        <title>Informes</title>
    </head>
    <body>
        <h1>Informes de Administración</h1>
        <h3>Bienvenido/a <?php echo $Nombre;?></h3>
        <h4>Lista de Vuelo</h4>
        <div>
            <form id="lista" method="post" accept-charset="utf-8" action="<?php echo base_url(); ?>informes" >
                <input type="hidden" value="1" name="lista">
                
                <label for="fecha"> Fecha </label>
                <select name="fecha" id="fecha">
                    <?php foreach ($fechas as $value) {?>
                    <option> <?php 
                    // en $value['valor bd']
                    echo $value['Fecha']; ?></option>
                    <?php }?>
                </select>
                
                <label for="destino"> Destino</label>
                <select name="destino" id="destino">
                      <?php foreach ($destinos as $value) {?>
                    <option> <?php  echo $value['Destino']; ?></option>
                    <?php }?>
                </select>
                
                <label for="Hora"> Hora </label>
                <select name="hora" id="hora">
                      <?php foreach ($horas as $value) {?>
                    <option> <?php  echo $value['Hora']; ?></option>
                    <?php }?>                
                </select>
                
                
                
                
                <input type="submit" value="Buscar Vuelo">
            </form>
  
        </div>
        
        
        
  
 <a href="<?php echo base_url()?>login/destroy">Cerrar Sesión</a>
    </body>
</html>
