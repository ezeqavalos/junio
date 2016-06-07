<?php
/**
 * La pagina principal del sitio web.
 *
 * @package WordPress
 * @subpackage Junio
 * @since Junio 0.0.0
 */
get_header(); ?>
	<section class="about-us">
		<div class="container">
			<div class="row" style="margin-bottom: 60px;">
				<div class="col-md-6">
					<img src="http://somosuno.tk/ar/wp-content/uploads/2016/05/323232.jpg" alt="" class="img-responsive">
				</div>
				<div class="col-md-6">
					<h2>Red Solidaria</h2>
					<p class="lead">Somos Uno es una organización sin fines de lucro integrada por jóvenes estudiantes y trabajadores que mediante el trabajo voluntariado busca llevar ayuda a los sectores vulnerables mediante acciones concretas que permitan mejorar su calidad de vida. Creemos que si todos aportamos un poco de nuestro tiempo, conocimientos, y/o voluntad podemos mejorar el mundo en cual vivimos.</p>
				</div>
			</div>
		</div>
		<div class="objectives">
			<div class="container">
				<div class="row text-center" role="main">
					<div class="col-md-4 heart">
						<i class="fa fa-heart" aria-hidden="true"></i>
						<h3><?php _e( 'Voluntariado', 'junio' ); ?></h3>
						<p>Formar equipos de trabajo sólidos abocados a diferentes áreas.</p>
					</div>
					<div class="col-md-4 share-alt">
						<i class="fa fa-share-alt" aria-hidden="true"></i>
						<h3><?php _e( 'Colaboración', 'junio' ); ?></h3>
						<p>Establecer un nexo entre ONGs y Fundaciones para sumar fuerzas.</p>
					</div>
					<div class="col-md-4 users">
						<i class="fa fa-users" aria-hidden="true"></i>
						<h3><?php _e( 'Conciencia', 'junio' ); ?></h3>
						<p>Ser un espacio de formación y capacitación de líderes voluntarios socialmente responsables.</p>
					</div>
				</div><!-- .row -->
			</div><!-- .container -->
		</div><!-- .objectives -->
		
		<div class="sumate text-center">
			<div class="container">
				<span>Actualmente somos más de <strong>50</strong> voluntarios. <em><?php _e( '¿Quieres formar parte?', 'junio' ); ?></em> <a href="http://bit.ly/SumateComoVoluntario" target="_blank">Sumate <i class="fa fa-arrow-right" aria-hidden="true"></i></a></span>
			</div><!-- .container -->
		</div><!-- .sumate -->
	</section><!-- .about-us-->
	
	<section class="container articles">
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
	</section><!-- .articles -->

	<hr />

	<aside class="container partners">
		<h3><?php _e( 'Ellos se sumaron', 'junio' ); ?></h3>
		<ul class="list-inline">
			<li><a href="http://www.isdel.com.ar/" rel="nofollow" target="_blank"><img src="http://somosuno.tk/ar/wp-content/uploads/2016/04/logo-2-300x91.png"></a></li>
			<li><a href="https://www.facebook.com/ConsultoraGEM/?fref=ts" rel="nofollow" target="_blank"><img src="http://somosuno.tk/ar/wp-content/uploads/2016/04/logo-1-1-300x90.png"></a></li>
			<li><a href="https://www.facebook.com/cliik.informatica/?fref=ts" rel="nofollow" target="_blank"><img src="http://somosuno.tk/ar/wp-content/uploads/2016/04/12439392_986543351425104_6067708240625994156_n-300x300.png"></a></li>
			<li><a href="https://www.facebook.com/ConsultoraGEM/?fref=ts" rel="nofollow" target="_blank"><img src="http://somosuno.tk/ar/wp-content/uploads/2016/04/554477_109140542599175_727973376_n-300x75.jpg"></a></li>
			<li><a href="https://www.facebook.com/Club-de-Leones-de-Barranqueras-Rossi-de-Fazio-446604272028421/?fref=ts" rel="nofollow" target="_blank"><img src="http://somosuno.tk/ar/wp-content/uploads/2016/04/255271_446604328695082_421214107_n-300x281.jpg"></a></li>
		</ul>
	</aside><!-- .partners -->
	
<?php
get_footer();
