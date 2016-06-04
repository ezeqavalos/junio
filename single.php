<?php
/**
 * La plantilla para la visualización de todos los mensajes y archivos adjuntos individuales.
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

				get_template_part( 'content', get_post_format() );

			// Fin del bucle.
			endwhile;
			?>

			</main>

			<div class="col-md-4">

				<?php get_sidebar(); ?>

			</div>
		</div><!-- .row -->
	</div><!-- .content -->

<?php
get_footer();
