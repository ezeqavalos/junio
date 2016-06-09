<?php
/**
 * La plantilla para mostrar el pie de página.
 *
 * @package WordPress
 * @subpackage Junio
 * @since Junio 1.0.0
 */
?>
	</div><!-- .wrapper -->

	<footer role="contentinfo" class="footer-junio text-center">
		<div class="container">

			<?php
			wp_nav_menu( array(
				'container'      => 'ul',
				'menu_class'     => 'list-inline',
				'theme_location' => 'secondary'
			) );
			?>
			
			<div class="powered-by">
				<p><?php _e( 'Desarrollado con <span title="Amor">&#10084;</span> por el equipo Somos Uno.', 'junio' ); ?></p>
				<span><a href="https://github.com/Somos-Uno/Junio" rel="nofollow" target="_blank"><i class="fa fa-github-alt" aria-hidden="true"></i></a></span>
			</div>
		</div><!-- .container -->
	</footer>

	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-1.12.4.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.js"></script>

</body>
</html>