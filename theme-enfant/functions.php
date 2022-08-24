<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

/* Modifier le nom des bloc d'informations WooCommerce */

add_filter( 'woocommerce_product_tabs', 'wpm_rename_tabs', 98 );
function wpm_rename_tabs( $tabs ) {

	$tabs['description']['title'] = __( 'Fiche technique' );		// Renomme le bloc "Description"

	return $tabs;

}