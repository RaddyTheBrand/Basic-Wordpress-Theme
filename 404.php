<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div class="container error404">
        <h1 class="page-title"><?php _e( 'Not Found', 'twentythirteen' ); ?></h1>
        <h2><?php _e( 'This is somewhat embarrassing, isn`t it?', 'twentythirteen' ); ?></h2>
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentythirteen' ); ?></p>

					<?php get_search_form(); ?>
    </div>

<?php get_footer(); ?>