<?php
/**
 * The template for displaying search forms in Underscores.me
 *
 * @package nixstrap
 */

?>

<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
    <div class="input-group mb-3">
        <input class="field form-control" id="s" name="s" type="text" placeholder="<?php esc_attr_e( 'Search &hellip;', 'nixstrap' ); ?>" value="<?php the_search_query(); ?>">
        <span class="input-group-append">
			<input class="submit btn btn-outline-secondary" id="searchsubmit" name="submit" type="submit" value="<?php esc_attr_e( 'Search', 'nixstrap' ); ?>">
	</span>
    </div>
</form>