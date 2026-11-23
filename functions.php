<?php
/**
 * Funciones del tema hijo aleser-hijo.
 *
 * @package aleser-hijo
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Carga la hoja de estilos del tema hijo.
 */
function aleser_cargar_estilos() {
	wp_enqueue_style(
		'aleser-hijo-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'aleser_cargar_estilos' );

