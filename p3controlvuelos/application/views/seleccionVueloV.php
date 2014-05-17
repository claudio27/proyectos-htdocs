<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/estilo.css" >
        <script src="<?php echo base_url(); ?>js/jquery_1.4.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>js/jquery_validate.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>js/script.js" type="text/javascript"></script>  

        <title>Selección de Vuelos</title>
    </head>
    <body>
        
        <h1>Selección de Vuelos</h1>
        <h3>Bienvenido/a <?php echo $Nombre;?></h3>
    <div>
         <form id="seleccion" method="post" accept-charset="utf-8" action="<?php echo base_url(); ?>seleccion" >
                <?php echo validation_errors(); ?>
             
             <input type="hidden" name="idusuario" value="<?php echo $idUsuario?>"/>
             
                <label for="fecha">Fecha</label>
                <input type="date" id="fecha" name="fecha"/><br>
                
                <label for="destino">Destino</label>
                <select name="destino">
                    <?php foreach ($destinos as $dest) {?>
                    <option> <?php echo $dest['Destino']; ?></option>
                    <?php }?>
                </select>
                
             <label for="hora">Hora</label>
                <select name="hora">
                    <option>08:00:00</option>
                    <option>09:00:00</option>
                    <option>10:00:00</option>
                    <option>11:00:00</option>
                    <option>12:00:00</option>
                    <option>13:00:00</option>
                    <option>14:00:00</option>
                    <option>15:00:00</option>
                    <option>16:00:00</option>
                    <option>17:00:00</option>
                    <option>18:00:00</option>
                    <option>19:00:00</option>
                    <option>20:00:00</option>
                    <option>21:00:00</option>
                    <option>22:00:00</option>
                    
                </select>

                <input type="submit" value="Consultar Disponibilidad">
            </form>
            <a href="<?php echo base_url()?>login">Volver</a>
        
        
    </div>
        
        
        
        
    </body>
</html>
