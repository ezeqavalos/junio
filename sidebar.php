<?php
/**
 * La barra lateral que contiene el widget de área principal.
 *
 * @package WordPress
 * @subpackage Junio
 * @since Junio 1.0.0
 */

if ( is_active_sidebar( 'sidebar-1' )  ) : ?>

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div class="widget-area" role="complementary">

			<?php dynamic_sidebar( 'sidebar-1' ); ?>

		</div><!-- .widget-area -->
	<?php endif; ?>

<?php endif;
