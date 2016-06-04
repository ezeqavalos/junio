<?php
/**
 * Template Name: Página completa
 *
 * @package WordPress
 * @subpackage Junio
 * @since Junio 0.0
 */

get_header(); ?>

<div class="container">

	<div class="row">
		<div class="col-md-12" role="main">
			<?php
				// Iniciar el bucle.
				while ( have_posts() ) : the_post();

					// Incluya la plantilla de contenido de la página.
					get_template_part( 'content', 'page' );
			
				endwhile;
			?>
		</div>
	</div><!-- .row -->

</div><!-- .container -->

<?php get_footer();
