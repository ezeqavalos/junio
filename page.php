<?php
/**
 * La plantilla para la visualización de páginas
 *
 * @package WordPress
 * @subpackage Junio
 * @since Junio 0.0
 */

get_header(); ?>

	<div class="container">
		<div class="row">
			<main class="col-md-8" role="main">

			<?php
			// Iniciar el bucle.
			while ( have_posts() ) : the_post();

				// Incluya la plantilla de contenido de la página.
				get_template_part( 'content', 'page' );

			// Terminar el bucle.
			endwhile;
			?>

			</main>

			<div class="col-md-4">

				<?php get_sidebar(); ?>

			</div>
		</div><!-- .row -->
	</div><!-- .container -->

<?php
get_footer();