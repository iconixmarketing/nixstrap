<?php
/**
 * Single post partial template.
 *
 * @package nixstrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

    <header class="entry-header">

		<?php the_title( '<h1 class="entry-title mb-3">', '</h1>' ); ?>

        <div class="entry-meta">

			<?php nixstrap_posted_on(); ?>

        </div><!-- .entry-meta -->

    </header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

    <div class="entry-content">

		<?php the_content(); ?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'nixstrap' ),
			'after'  => '</div>',
		) );
		?>

    </div><!-- .entry-content -->

    <footer class="entry-footer">

		<?php nixstrap_entry_footer(); ?>

    </footer><!-- .entry-footer -->

</article><!-- #post-## -->