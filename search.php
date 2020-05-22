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

	<main class="container search__results">
    <h1 class="heading">Search Results...</h1>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	
<article class="row row-padding"  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="col-6 thumbnail">
        <a href="<?php the_permalink();?>">
        <?php
            // Check If Post is New
            if( strtotime( $post->post_date ) > strtotime('-20 days') ) {
                echo "<div class='newpost'>NEW</div>";
            }
        ?>
        <?php  
            if ( has_post_thumbnail() ) {
                the_post_thumbnail('medium_large', ['class' => 'objFit', 'loading' => 'lazy'], array('title' => get_the_title() ));
            } else {
            echo '<img src="' . get_stylesheet_directory_uri( 'stylesheet_directory' ) 
            . '/images/thumbnail-default.jpg" alt="Missing Image"/>';
            }
        ?>
        </a>
    </div> 
    <div class="col-6 content">
        <a href="<?php the_permalink(); ?>">
        <h2><?php the_title(); ?></h2>
        <p>
        <?php
            // Making an excerpt of the blog post content
            $excerpt = strip_tags($post->post_content);
            if (strlen($excerpt) > 198) {
                $excerpt = substr($excerpt, 0, 198);
                $excerpt = substr($excerpt, 0, strrpos($excerpt, ' '));
                $excerpt .= '...';
            }
            echo $excerpt;
        ?>
        </p>
        </a>
    </div>
</article>
    <?php endwhile; ?>

    <!-- end of the loop -->
    <?php wp_reset_postdata(); ?>

	<?php else : ?>
		<h1><?php _e( 'Sorry, no posts matched your criteria.', 'theminimalist'); ?></h1>
	<?php endif; ?>
	</main>

<?php get_footer();