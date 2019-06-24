<?php
/*
Template Name: Search Page
*/

get_header();
?>


<?php
    global $query_string;
    $query_args = explode("&", $query_string);
    $search_query = array();

    foreach($query_args as $key => $string) {
      $query_split = explode("=", $string);
      $search_query[$query_split[0]] = urldecode($query_split[1]);
    } // foreach

    $the_query = new WP_Query($search_query);
    if ( $the_query->have_posts() ) : 
    ?>
    <!-- the loop -->

	<div class="container search__results">
    <h1 class="heading">Search Results...</h1>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<article>
		<a href="<?php the_permalink();?>">
		<div class="thumbnail">
			<?php the_post_thumbnail('medium'); ?>
		</div>
		<div class="content">
			<h2><?php the_title(); ?></h2>
			<p><?php the_excerpt(); ?></p>
			<a class="button" href="<?php the_permalink();?>">More +</a>
		</div>
		</a>
		</article>
    <?php endwhile; ?>

	</div>
    <!-- end of the loop -->

    <?php wp_reset_postdata(); ?>

	<?php else : ?>
		<h1><?php _e( 'Sorry, no posts matched your criteria.' ); ?></h1>
	<?php endif; ?>


<?php get_footer();