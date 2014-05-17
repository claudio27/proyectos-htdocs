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
           
        
        <h4>Búsqueda de pasajero</h4>
        <div>
            <form id="busqueda" method="post" accept-charset="utf-8" action="<?php echo base_url(); ?>informes" >
                <input type="hidden" value="2" name="pasajero">
              
                  <label for="pasajeros"> Pasajeros </label>
                <select name="rut" id="pasajeros">
                     <?php foreach ($ruts as $value) {?>
                    <option> <?php  echo $value['Rut']; ?></option>
                    <?php }?>  
                </select>
              
                
                <input type="submit" value="Buscar pasajero">
            </form>
            
            
            
            
           
           
        </div>
 <a href="<?php echo base_url()?>login/destroy">Cerrar Sesión</a>
    </body>
</html>
