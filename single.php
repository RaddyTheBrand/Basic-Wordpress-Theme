<?php get_header(); ?>
<?php
    if(have_posts()) {
        while(have_posts()) : the_post();
?>
<!-- <h1 style="color:red;">Single.php</h1> -->
<main class="row single-page">
    <?php if ( has_post_thumbnail() ) { ?>
    <div class="hero-image">
        <?php the_post_thumbnail('large', ['class' => 'objFit'], array('title' => get_the_title() )); ?>
    </div>
    <?php } ?>
    <h1 class="heading"><?php the_title(); ?></h1>
    <?php the_content();?>

    <?php 
    
    if(has_tag()) {
       ?><div class="post-tags"><?php the_tags(); ?> </div>
       <?php
    } else {
        //Article untagged
    }
    
    ?>

    <?php
 	$defaults = array(
		'before'           => '<p>' . __( 'Pages:', 'theminimalist' ),
		'after'            => '</p>',
		'link_before'      => '',
		'link_after'       => '',
		'next_or_number'   => 'number',
		'separator'        => ' ',
		'nextpagelink'     => __( 'Next page', 'theminimalist'),
		'previouspagelink' => __( 'Previous page', 'theminimalist' ),
		'pagelink'         => '%',
		'echo'             => 1
	);
 
        wp_link_pages( $defaults );

    ?>

    <?php comments_template(); ?> 
    <?php 
        endwhile; }
        get_template_part( '/inc/social.php', 'social' );
    ?>
</main>
<?php get_footer(); ?>
