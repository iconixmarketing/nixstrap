<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package nixstrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'nixstrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

