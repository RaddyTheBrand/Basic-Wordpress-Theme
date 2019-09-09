<?php get_header(); ?>
<?php
    if(have_posts()) {
        while(have_posts()) : the_post();
?>
<!-- <h1 style="color:red;">Single.php</h1> -->
<main class="row single-page">
    <h1 class="heading"><?php the_title(); ?></h1>
    <?php the_content();?>
    <?php comments_template(); ?> 
    <?php 
        endwhile; }
        require_once( get_template_directory() . '/include/social.php' );
    ?>
</main>
<?php get_footer(); ?>
