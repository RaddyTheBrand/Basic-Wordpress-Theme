<?php get_header(); ?>
<?php
    if(have_posts()) {
    while(have_posts()) : the_post();
?>
<h1 style="color:red;">Page.php</h1>
<main class="row single-page">
    <?php if ( has_post_thumbnail() ) { ?>
    <div class="hero-image">
        <?php the_post_thumbnail('large', ['class' => 'objFit'], array('title' => get_the_title() )); ?>
    </div>
    <?php } ?>
    <h1 class="heading"><?php the_title(); ?></h1>
    <?php the_content();?>
    <?php 
        endwhile; } 
        require_once( get_template_directory() . '/include/social.php' );
    ?>
</main>
<?php get_footer(); ?>