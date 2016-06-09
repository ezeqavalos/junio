<?php
/**
 * La plantilla por defecto para mostrar contenido.
 *
 * @package WordPress
 * @subpackage Junio
 * @since Junio 1.0.0
 */
?>

<article id="post-<?php the_ID(); ?>">

	<?php junio_post_thumbnail(); ?>

	<header class="entry-header">

		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		endif;
		?>

	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php
		if ( is_single() ) :
			the_content( sprintf(
				__( 'Sigue leyendo %s', 'junio' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );
		else :
			the_excerpt();
		endif;
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php edit_post_link( __( 'Editar', 'junio' ), '<span class="edit-link">', '</span>' ); ?>
		
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
