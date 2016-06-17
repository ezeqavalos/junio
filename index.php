<?php
/**
 * La pagina principal del sitio web.
 *
 * @package WordPress
 * @subpackage Junio
 * @since Junio 1.0.0
 */
get_header(); ?>
	
	<div class="jumbotron jumbotron-home jumbotron-inverse">
		<div class="container">
			<div class="row">
				<div class="homepage-hero-intro text-center col-md-6 col-md-offset-3">
					<!--<h1 class="jumbotron-title">Red Solidaria</h1>
					<p class="display-intro lead">Somos Uno es una organización sin fines de lucro integrada por jóvenes estudiantes y trabajadores que mediante el trabajo voluntariado busca llevar ayuda a los sectores vulnerables mediante acciones concretas que permitan mejorar su calidad de vida.</p>-->
				</div>
			</div>
		</div>
	</div><!-- .jumbotron -->

	<div class="intro container">
		<div class="row">
			<div class="col-md-2 text-right">
				<h2>Red Solidaria</h2>
			</div>
			<div class="col-md-10">
				<p>Somos Uno es una organización sin fines de lucro integrada por jóvenes estudiantes y trabajadores que mediante el trabajo voluntariado busca llevar ayuda a los sectores vulnerables mediante acciones concretas que permitan mejorar su calidad de vida.</p>
			</div>
		</div><!-- .row -->
	</div><!-- .container -->

	<section class="about-us">
		<div class="objectives">
			<div class="container">
				<div class="row text-center">
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
	</section><!-- .about-us-->
	
	<section class="container articles">
		<main role="main">
		<?php if ( have_posts() ) : ?>
			<h2><?php _e( 'Últimas noticias', 'junio' ); ?></h2>
			<?php
			while ( have_posts() ) : the_post();
			?>
			<article class="row">
				<div class="col-md-2">
					<?php if ( has_post_thumbnail() ) : ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark">
					<?php the_post_thumbnail( 'thumbnail', array( 'class' => 'img-responsive img-circle', 'alt' => get_the_title() ) ); ?>
					</a>
					<?php endif; ?>
				</div>
				<div class="col-md-10">
					<?php the_title( sprintf( '<h3><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
					<?php
					$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
					$time_string = sprintf( $time_string,
						esc_attr( get_the_date( 'c' ) ),
						get_the_date(),
						esc_attr( get_the_modified_date( 'c' ) ),
						get_the_modified_date()
					);

					printf( '<em>%1$s</em>', $time_string);
					?>
					<p><?php the_excerpt(); ?></p>
				</div>
			</article>
			<?php
			endwhile;

		endif;
		?>
		</main>
	</section><!-- .articles -->

	<hr />

	<aside class="container partners">
		<h2><?php _e( 'Ellos se sumaron', 'junio' ); ?></h2>
		<ul class="list-inline">
			<li><a href="http://www.isdel.com.ar/" rel="nofollow" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/partners/logo-2-300x91.png"></a></li>
			<li><a href="https://www.facebook.com/ConsultoraGEM" rel="nofollow" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/partners/logo-1-1-300x90.png"></a></li>
			<li><a href="https://www.facebook.com/cliik.informatica/" rel="nofollow" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/partners/12439392_986543351425104_6067708240625994156_n-300x300.png"></a></li>
			<li><a href="https://www.facebook.com/ConsultoraGEM/" rel="nofollow" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/partners/554477_109140542599175_727973376_n-300x75.jpg"></a></li>
			<li><a href="https://www.facebook.com/Club-de-Leones-de-Barranqueras-Rossi-de-Fazio-446604272028421/" rel="nofollow" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/partners/255271_446604328695082_421214107_n-300x281.jpg"></a></li>
		</ul>
	</aside><!-- .partners -->
	
<?php
get_footer();
