<?php
/**
 * La cabecera para nuestro tema.
 *
 * @package WordPress
 * @subpackage Junio
 * @since Junio 0.0.0
 */
?><!DOCTYPE html>
<html lang="es-AR">
<head>
	<title>Somos Uno</title>
	<meta name='description' content='Organización sin fines de lucro integrada por jóvenes estudiantes y trabajadores'>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicon.ico" type="image/x-icon">
	<link href='https://fonts.googleapis.com/css?family=Cabin:400,600|Open+Sans:400,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css">
</head>

<body>

	<header role="banner">
		<div class="very-top-header">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<p><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> <em>03731 51-6903</em></p>
					</div>

					<div class="col-md-6 text-right">
						<a href="https://www.facebook.com/redsomosuno" rel="new-window" target="_blank">Síganos en Facebook <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span></a>
					</div>
				</div><!-- .row -->
			</div><!-- .container -->
		</div><!-- .very-top-header -->

		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<h1 class="logo"><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				</div><!-- .navbar-header -->

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Inicio</a></li>
						<li><a href="#">Novedades</a></li>
						<li><a href="#">Quiero ser voluntario</a></li>
						<li><a href="#">Contactar</a></li>
						<li><a href="#">Perchero Solidario</a></li>
					</ul>
				</div><!-- .collapse -->
			</div><!-- .container -->
		</nav>
	</header>

	<div class="container">
