<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8">

<title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="description" content="">

<meta name="author" content="">



<!-- Le styles -->

<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">




<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->

<!--[if lt IE 9]>

<script src="../assets/js/html5shiv.js"></script>

<![endif]-->

  <?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>

<!-- Fav and touch icons -->

<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">

<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">

<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">

<link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">

<link rel="shortcut icon" href="../assets/ico/favicon.png">

</head>



<body>


<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>


<div class="container">
