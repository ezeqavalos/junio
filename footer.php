<?php
/**
 * La plantilla para mostrar el pie de página.
 *
 * @package WordPress
 * @subpackage Junio
 * @since Junio 0.0.0
 */
?>
	</div><!-- .wrapper -->

	<footer role="contentinfo" class="footer-junio text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<?php
					wp_nav_menu( array(
						'container'      => 'ul',
						'menu_class'     => 'list-inline',
						'theme_location' => 'secondary'
					) );
					?>
					
				</div>
				
				<div class="powered-by col-md-12">
					<p>Desarrollado con <span title="Amor">&#10084;</span> por el equipo Somos Uno.</p>
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
	</footer>

	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-1.12.4.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.js"></script>

</body>
</html>