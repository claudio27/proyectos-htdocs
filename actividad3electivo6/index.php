<!DOCTYPE html>
<!--
    CLAUDIO SERRANO - ACTIVIDAD MUESTRA DE DATOS CON $_POST PHP ELECTIVO VI
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <title>ACTIVIDAD 3 - CLAUDIO SERRANO</title>
        <link type="text/css" rel="stylesheet" href="css/estilo.css" >
        <script type="text/javascript" src="js/funciones.js"></script>
    </head>
    <body>
<h1>Actividad 3 - Mostrar datos enviados - Claudio Serrano</h1>
        <div id="registro">
            <div id="header">
             <span id="titulo"> Formulario de Registro </span> 
            </div>
            <form  name="fregistro"  action="datos.php" method="post" onSubmit="return valida();">
                <div id="contenido">    
                    <div id="borde1">
                        <p>
                            <label for="idNombre">Nombre:</label> 
                            <input  type="text" id="idNombre" name="txtNombre" size="30" required autofocus pattern=(.{3,15}) title="El rango debe estar entre 3 y 15" />
                            <br/>
                            <label for="idApellido">Apellido:</label> 
                            <input  type="text" id="idApellido" name="txtApellido" size="30" required autofocus pattern=(.{3,15}) title="El rango debe estar entre 3 y 15" />
                        </p>
                        <hr/>
                        <p>
                            <label for="idRut">Rut: </label><input type="number" id="idRut" name="txtRut" required autofocus max="99999999" title="Valor maximo 99999999"   /><span>-</span>
                            <select name="digito">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="K">K</option>
                            </select>
                        </p>


                        <p>
                            <label for="idTelefono">Telefono: </label>
                            <label class="col2" for="idMasculino">Masc.  Feme.</label>
                            <br/>
                            <input type="tel" class="col1" id="idTelefono" name="txtTelefono" size="30" required autofocus />
                            
                            [  <input type="radio" id="idMasculino" name="rdSexo" checked="checked" />  ]
                            [  <input type="radio" id="idFemenino" name="rdSexo" />  ]
                        </p>

                        <p>
                            <label for="idFecha">Fecha Nac.:</label> <input type="date" id="idFecha" name="txtFecha" required />
                        </p>

                    </div>
                    <div id="borde2">	  

                        <p>
                            <label for="idCarrera">Carrera </label><label for="idIngreso" class="col2">Año de Ingreso </label> <br />
                            <select name="carrera" id="idCarrera" class="col1">
                                <option value="Ing. en Computación">IC</option>
                                <option value="Ing. de Ejec. en Comp.">IEC</option>
                                <option value="Ing. Civil">ICCI</option>
                            </select>
                            <select name="ingreso" id="idIngreso" class="col2">
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                            </select>

                        </p>

                        <p id="marcoBecas" class="noError">
                            <label>Becas</label> <br />
                            <input class="col1" type="checkbox" name="beca[]" value="Deporte" />Deporte
                            <input type="checkbox" name="beca[]" value="Exelencia" />Exelencia
                            <input type="checkbox" name="beca[]" value="Presidente" />Presidente
                            <input type="checkbox" name="beca[]" value="Ingreso" checked="checked" />Ingreso
                            <br />
                            <span id="spBecas" class="noError"></span>
                        </p>

                        <p>
                            <label for="idDesarrollo">Observaciones: </label><br />
                            <textarea class="col1" cols="40" rows="7" id="idDesarrollo" name="txtDesarrollo" required autofocus ></textarea>
                        </p>
                    </div>

                    <input id="envio" type="submit" value="ENVIAR" />

                </div>
                <div id="footer">
                    
                </div>
            </form>




        </div>



    </body>
</html>