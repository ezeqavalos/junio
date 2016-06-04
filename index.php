<?php
/**
 * La pagina principal del sitio web.
 *
 * @package WordPress
 * @subpackage Junio
 * @since Junio 0.0.0
 */
get_header(); ?>

	<div class="container articles">
		<main class="row" role="main">
			<div class="col-md-12">
			<?php if ( have_posts() ) : ?>

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'content', get_post_format() );

				endwhile;

			endif;
			?>
			</div>
		</main>
	</div><!-- .articles -->

	<hr />

	<aside class="container partners">
		<h3>Ellos se sumaron</h3>
		<ul class="list-inline">
			<li><a href="http://www.isdel.com.ar/" rel="nofollow" target="blank"><img src="http://somosuno.tk/ar/wp-content/uploads/2016/04/logo-2-300x91.png"></a></li>
			<li><a href="https://www.facebook.com/ConsultoraGEM/?fref=ts" rel="nofollow" target="blank"><img src="http://somosuno.tk/ar/wp-content/uploads/2016/04/logo-1-1-300x90.png"></a></li>
			<li><a href="https://www.facebook.com/cliik.informatica/?fref=ts" rel="nofollow" target="blank"><img src="http://somosuno.tk/ar/wp-content/uploads/2016/04/12439392_986543351425104_6067708240625994156_n-300x300.png"></a></li>
			<li><a href="https://www.facebook.com/ConsultoraGEM/?fref=ts" rel="nofollow" target="blank"><img src="http://somosuno.tk/ar/wp-content/uploads/2016/04/554477_109140542599175_727973376_n-300x75.jpg"></a></li>
			<li><a href="https://www.facebook.com/Club-de-Leones-de-Barranqueras-Rossi-de-Fazio-446604272028421/?fref=ts" rel="nofollow" target="blank"><img src="http://somosuno.tk/ar/wp-content/uploads/2016/04/255271_446604328695082_421214107_n-300x281.jpg"></a></li>
		</ul>
	</aside><!-- .partners -->
	
<?php
get_footer();
