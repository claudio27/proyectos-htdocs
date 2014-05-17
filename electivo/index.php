<!DOCTYPE html>
<html >
<head>

	<meta charset="utf-8"/>
	<title>Reportes Electivo Especialidad 3, Laboratorio</title>



	
 <link href='http://fonts.googleapis.com/css?family=Montserrat+Alternates' rel='stylesheet' type='text/css'>
	<link href="css/estilos.css" rel="stylesheet" type="text/css"/>
         <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
   <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css" />
    <script>
    $(function() {
        $( "#accordion" ).accordion();
    });
    </script>


</head>
<body>

   <div id="contenido">
   <div id="imagen">
   <img src="modelo.png" height="902" width="1000">
   
   
   </div>
   <div id="consulta">

   <form action="index.php" method="post">


  <label for="query" >Consulta</label>
  
 <textarea id="query" name="query" rows="5" cols="50"></textarea>

  <input type="submit"  value="Consultar BD" id="submit" name="submit" />
 
 </form>
 </div>
 

        <?php
       //select en base de datos
       //luego imprimir base de datos 
           
       
    $con = mysql_connect("localhost","root","nube123");
if (!$con)
  {
  die('No pudo conectar: ' . mysql_error());
  }

mysql_select_db("a7770290_topicos", $con);


/*
$name= @htmlspecialchars($_POST['nombre']);
$lastname = @htmlspecialchars($_POST['apellido']);
$phone = @htmlspecialchars($_POST['telefono']); */

$query = @htmlspecialchars($_POST['query']);

//echo $query."<br>";



if($result = mysql_query($query)){

$fields=mysql_num_fields($result);

//$result = mysql_query("select * from estudiantes"); 
echo "<table>\n<thead><tr>";
for ($i = 0; $i < mysql_num_fields($result); $i++) { 
    print "<th>".mysql_field_name($result, $i)."</th>\n"; 
}
echo "</tr></thead>\n";
while ($row = mysql_fetch_row($result)) { //Table body
echo "<tr>";
    for ($f=0; $f < $fields; $f++) {
    echo "<td>$row[$f]</td>"; }
echo "</tr>\n";}
echo "</table>";


}



mysql_close($con);
       ?>
       <div id="accordion">
    <h3>Reporte 1</h3>
    <div>
        <p>
       -- lista una sala en especifico cambiando la condicion en el where
-- se puede preguntar por salas  201, 202, 203, 205, 211 <br>

select <br>
    s.nombre_sala, <br>
case<br>
when r.idreserva is null <br>
    then 'disponible'<br>
    else 'ocupada'<br>
end disponibilidad<br>

from<br>
    salas s<br>
left join<br>
    reserva r<br>
on <br>
    s.idsalas = r.salas_idsalas<br> 
where<br>
    s.nombre_sala = '211'<br>
group by<br>
    s.nombre_sala;<br>
    <br>
    <br>

-- lista todas las salas disponibles y ocupadas<br>
select<br>
    s.nombre_sala,<br>
    case<br>
    when r.idreserva is null <br>
    then 'disponible'<br>
    else 'ocupada'<br>
    end disponibilidad<br>
from<br>
    salas s<br>
left join<br>
    reserva r<br>
on <br>
    s.idsalas = r.salas_idsalas<br>
;<br>

        </p>
    </div>
    <h3>Reporte 2</h3>
    <div>
        <p>
       select <br>
    a.nombre_asignatura,<br>
    s.idsecciones seccion,<br>
    g.tipo grupo,<br>
    pf.nombre nombre_profesor,<br>
    pf.apellidos apellidos_profesor,<br>
    al.nombre nombre_alumno,<br>
    al.apellidos apellidos_alumno,<br>
    h.hora_inicio,<br>
    h.hora_fin<br>
from<br>
    reserva r<br>
inner join<br>
    horario h<br>
on<br>
    r.horario_idhorario = h.idhorario and<br>
    h.idhorario = 3 -- los que tienen reserva en horario 1, de las 8:00 - 9:45<br>
inner join          -- probar con 1 y 3, para obtener resultados<br>
    curso c<br>
on<br>
    c.idcurso = r.curso_idcurso<br>
inner join<br>
    grupos g<br>
on<br>
    c.grupos_idgrupos = g.idgrupos<br>
inner join<br>
    secciones s<br>
on<br>
    c.secciones_idsecciones = s.idsecciones<br>
inner join<br>
    asignaturas a<br>
on<br>
    s.asignaturas_idasignaturas = a.idasignaturas<br>
inner join  -- unir con profesores<br>
(<br>

select<br>
    sp.secciones_idsecciones idseccion,<br>
    sp.profesores_idprofesores id,    <br>
    p.nombre,<br>
    p.apellidos<br>
from<br>
    secciones_profesores sp<br>
inner join<br>
    profesores p<br>
on<br>
    sp.profesores_idprofesores = p.idprofesores<br>
   
) pf<br>
on<br>
    pf.idseccion = s.idsecciones<br>
inner join -- unir con alumnos<br>
(<br>
select<br>
    se.secciones_idsecciones idseccion,<br>
    se.estudiantes_idestudiantes id,<br>
    e.nombre,<br>
    e.apellidos<br>
from<br>
    secciones_estudiantes se<br>
inner join<br>
    estudiantes e<br>
on<br>
  se.estudiantes_idestudiantes = e.idestudiantes<br>

) al<br>
on<br>
    al.idseccion = s.idsecciones<br>
group by <br>
    nombre_alumno<br>
;<br>

        </p>
    </div>
    <h3>Reporte 3</h3>
    <div>
        <p>
   
select<br>
    r.salas_idsalas,<br>
    min(cant_reserv.cantidad_reservada) menor_ocupacion<br>
from<br>
    curso c<br>
inner join<br>
    secciones s<br>
on<br>
    s.idsecciones = c.secciones_idsecciones and<br>
    s.semestre = 2<br>
inner join<br>
    reserva r<br>
on<br>
    r.curso_idcurso = c.idcurso<br>
inner join<br>
    (<br>
select<br>
    s.idsalas,<br>
    count(s.idsalas) cantidad_reservada<br>
from<br>
    salas s<br>
inner join<br>
    reserva r<br>
on <br>
   s.idsalas  = r.salas_idsalas<br>
group by<br>
    s.idsalas<br>
<br>

) cant_reserv<br>
on <br>
cant_reserv.idsalas = r.salas_idsalas<br>
group by<br>
    r.salas_idsalas<br>
order by<br>
    menor_ocupacion asc<br>
    ;<br>
        </p>
      
    </div>
 
   
</div>
		<footer>
			<p> Claudio Serrano, Santiago 2012. |<a href="mailto:claudio.serrano@alumnos.ucentral.cl">claudio.serrano@alumnos.ucentral.cl</a> | Cel: 90958345</p>
		</footer>
	</div>




</body>
</html>

