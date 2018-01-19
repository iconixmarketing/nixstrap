<?php
/**
 * Check and setup theme's default settings
 *
 * @package nixstrap
 *
 */

if ( ! function_exists( 'nixstrap_setup_theme_default_settings' ) ) :
	function nixstrap_setup_theme_default_settings() {

		// check if settings are set, if not set defaults.
		// Caution: DO NOT check existence using === always check with == .
		// Latest blog posts style.
		$nixstrap_posts_index_style = get_theme_mod( 'nixstrap_posts_index_style' );
		if ( '' == $nixstrap_posts_index_style ) {
			set_theme_mod( 'nixstrap_posts_index_style', 'default' );
		}

		// Sidebar position.
		$nixstrap_sidebar_position = get_theme_mod( 'nixstrap_sidebar_position' );
		if ( '' == $nixstrap_sidebar_position ) {
			set_theme_mod( 'nixstrap_sidebar_position', 'right' );
		}

		// Container width.
		$nixstrap_container_type = get_theme_mod( 'nixstrap_container_type' );
		if ( '' == $nixstrap_container_type ) {
			set_theme_mod( 'nixstrap_container_type', 'container' );
		}
	}
endif;
