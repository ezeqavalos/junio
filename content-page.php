<?php
/**
 * La plantilla usada para la visualización de contenido de la página.
 *
 * @package WordPress
 * @subpackage Junio
 * @since Junio 0.0
 */
?>

<article id="post-<?php the_ID(); ?>">

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title page-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	
	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Editar', 'junio' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->

</article>