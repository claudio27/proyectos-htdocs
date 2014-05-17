<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Claudio Serrano - Programación sitios web, Desarrollador Aplicaciones</title>
    <meta name="description" content="Estudiante Ingeniería en Computación, conocimientos en desarrollo de aplicaciones web, android, escritorio, uso de herramientas open source"/>
    <meta name="keywords"  content="JAVA JAVAEE MYSQL POSTGRE ORACLE PHP CODEIGNITER JQUERY JAVASCRIPT DESARROLLO PROGRAMACIÓN DISEÑO WEB INGENIERO"/>
    <meta name="author" content="Claudio Serrano">
    
     <!-- Poner favicon -->
    <link rel="shortcut icon"  href="images/favicon.png">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>css/jumbotron-narrow.css" rel="stylesheet">

    <link href="<?php echo base_url();?>css/sticky-footer-navbar.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->

      <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-32642730-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
  </head>

  <body>
    <div id="wrap">
        
    <div class="container">       
        <div class="page-header">
        <h1>Libro de Visitas</h1>
      </div>
      <table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Hora</th>
      <th>IP</th>
      <th>Navegador</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($datos as $row)
{ ?>
    <tr>
      <td> <?php echo $row->id ?></td>
      <td> <?php echo $row->hora?></td>
      <td> <?php echo $row->cliente_ip?></td>
      <td> <?php echo $row->navegador?></td>
    </tr>
  <?php } ?>
  </tbody>
  </table>
       

                

    </div> <!-- /container -->
    </div>
    <div id="footer">
      <div class="container">
        <p class="text-muted credit">&copy; Claudio Serrano 2013 - Santiago - <a href="mailto:claudio.serrano2@gmail.com">Contacto</a> - Realizada con : Bootstrap + CodeIgniter
   
        </p>        
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
