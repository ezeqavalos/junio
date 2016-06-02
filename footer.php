<?php
/**
 * La plantilla para mostrar el pie de página.
 *
 * @package WordPress
 * @subpackage Junio
 * @since Junio 0.0.0
 */
?>
		<footer role="contentinfo" class="text-center">
			<div class="row">
				<div class="col-md-12">
					<ul class="list-inline">
						<li><a href="#">Inicio</a></li>
						<li><a href="#">Novedades</a></li>
						<li><a href="#">Quiero ser voluntario</a></li>
						<li><a href="#">Contactar</a></li>
						<li><a href="#">Perchero Solidario</a></li>
					</ul>
				</div>

				<hr />
				
				<div class="col-md-12">
					<p class="copyright">&copy; <?php echo date('Y'); ?> Somos Uno. Todos los derechos reservados.</p>
				</div>
			</div><!-- .row -->
		</footer>

	</div><!-- .container -->

	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-1.12.4.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.js"></script>

</body>
</html>