<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
                      "http://www.w3.org/TR/html401/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <title>Multi-dimensional arrays</title>
</head>
<body bgcolor="#ffffff">
<h2>A two dimensional array</h2>
<?php

  // A two dimensional array using integer indexes
  $planets = array(array("Mercury", 0.39, 0.38),
                   array("Venus", 0.72, 0.95),
                   array("Earth", 1.0, 1.0),
                   array("Mars", 1.52, 0.53) );

  // prints "Earth"
  print $planets[2][0]
?>

<h2>More sophisticated multi-dimensional array</h2>
<?php

  // More sophisticated multi-dimensional array
  $planets2 = array(
    "Mercury"=> array("dist"=>0.39, "dia"=>0.38),
    "Venus"  => array("dist"=>0.72, "dia"=>0.95),
    "Earth"  => array("dist"=>1.0,  "dia"=>1.0,
                  "moons"=>array("Moon")),
    "Mars"   => array("dist"=>0.39, "dia"=>0.53,
                  "moons"=>array("Phobos", "Deimos")),
  );

  // prints "Moon"
  print $planets2["Earth"]["moons"][0];
?>
</body>
</html>
