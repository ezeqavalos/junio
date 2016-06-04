<?php

if ( ! function_exists( 'junio_setup' ) ) :
/**
 * Configuración.
 * 
 * @since Junio 0.0
 */
function junio_setup() {

	// Este tema utiliza wp_nav_menu() en dos lugares.
	register_nav_menus( array(
		'primary'   => __( 'Menú primario de la cabecera', 'junio' ),
		'secondary' => __( 'Menú secundario del pie', 'junio' ),
	) );

}
endif; // junio_setup
add_action( 'after_setup_theme', 'junio_setup' );

/**
 * Register área de widget.
 *
 * @since Junio 0.0
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function junio_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Área Widget', 'junio' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Añadir widgets aquí para aparecer en la barra lateral.', 'junio' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'junio_widgets_init' );

/**
 * Crear un texto elemento de título con un formato agradable y más específica para la salida
 * en la cabeza del documento, basado en la vista actual.
 *
 * @since Junio 0.0
 *
 * @global int $paged WordPress archive pagination page count.
 * @global int $page  WordPress paginated post page count.
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */
function junio_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() ) {
		return $title;
	}

	// Añadir el nombre del sitio.
	$title .= get_bloginfo( 'name', 'display' );

	// Añadir la descripción del sitio para la página de home/front.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}

	// Añadir un número de página si es necesario.
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
		$title = "$title $sep " . sprintf( __( 'Página %s', 'junio' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'junio_wp_title', 10, 2 );
