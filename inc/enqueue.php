<?php
/**
 * nixstrap enqueue scripts
 *
 * @package nixstrap
 */

if ( ! function_exists( 'nixstrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript sources.
	 */
	function nixstrap_scripts() {
		// Get the theme data.
		$the_theme = wp_get_theme();
		// wp_enqueue_style('nixstrap-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css', array(), $the_theme->get( 'Version' ), false );
		wp_enqueue_style( 'nixstrap-bootstrap', get_template_directory_uri() . '/css/custom-css-bootstrap.css', array(), $the_theme->get( 'Version' ), false );
		wp_enqueue_style( 'nixstrap-fontawesome', 'https://use.fontawesome.com/releases/v5.0.3/css/all.css', array( 'nixstrap-bootstrap' ), $the_theme->get( 'Version' ), false );
		wp_enqueue_style( 'nix-style-main', get_template_directory_uri() . '/css/main.css', array( 'nixstrap-fontawesome' ), $the_theme->get( 'Version' ), false );
		wp_enqueue_style( 'nix-style', get_stylesheet_uri(), array( 'nix-style-main' ), $the_theme->get( 'Version' ), false );
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), true );
		wp_enqueue_script( 'nixstrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $the_theme->get( 'Version' ), true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'nixstrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'nixstrap_scripts' );
