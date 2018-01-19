<?php
/**
 * Search results partial template.
 *
 * @package nixstrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

    <header class="entry-header">

		<?php the_title( sprintf( '<h2 class="entry-title mb-3"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
			'</a></h2>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>

            <div class="entry-meta">

				<?php nixstrap_posted_on(); ?>

            </div><!-- .entry-meta -->

		<?php endif; ?>

    </header><!-- .entry-header -->

    <div class="entry-summary">

		<?php the_excerpt(); ?>

    </div><!-- .entry-summary -->

    <footer class="entry-footer">

		<?php nixstrap_entry_footer(); ?>

    </footer><!-- .entry-footer -->

</article><!-- #post-## -->
