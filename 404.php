<?php
/**
 * La plantilla para la visualización de las páginas 404 (no encontrado).
 *
 * @package WordPress
 * @subpackage Junio
 * @since Junio 1.0.0
 */

get_header(); ?>

	<div class="container">
		<div class="row" role="main">
			<div class="col-md-12 text-center">
				<header>
					<h1><?php _e( '404', 'junio' ); ?></h1>
				</header>

				<div class="page-content">
					<p><?php _e( 'Parece que no se encontró nada en este lugar.', 'junio' ); ?></p>
				</div><!-- .page-content -->
			</div>
		</div><!-- .row -->
	</div><!-- .container -->

<?php
get_footer();
