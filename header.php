<?php
/**
 * La cabecera para nuestro tema.
 *
 * @package WordPress
 * @subpackage Junio
 * @since Junio 1.0.0
 */
?><!DOCTYPE html>
<html lang="es-AR">
<head>
	<title><?php wp_title( '-', true, 'right' ); ?></title>
	<meta name='description' content='<?php echo get_bloginfo( 'description' ); ?>'>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="alternate" type="application/rss+xml" href="<?php echo esc_url( home_url( '/feed/' ) ); ?>">
	<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicon.ico" type="image/x-icon">
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,600|Open+Sans:400,600'>
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css">
</head>

<body>

	<header class="header-junio clearfix" role="banner">
		<nav class="navbar navbar-junio" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only"><?php _e( 'Navegación', 'junio' ); ?></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>"></a></h1>
				</div><!-- .navbar-header -->

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				
					<?php
					wp_nav_menu( array(
						'container'      => 'ul',
						'menu_class'     => 'nav navbar-nav navbar-right',
						'theme_location' => 'primary'
					) );
					?>

				</div><!-- .collapse -->
			</div><!-- .container -->
		</nav>
	</header>

	<div class="wrapper">

	<?php
	if (!is_home()) :
	?>
	<div class="container">
	<?php junio_breadcrumb(); ?>
	</div>
	<?php endif; ?>
