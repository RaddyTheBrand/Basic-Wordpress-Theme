<?php get_header(); ?>

<?php
    if(have_posts()) {
        while(have_posts()) : the_post();
?>

<main class="container single__page">
    <div class="hero__image"><?php the_post_thumbnail('large'); ?></div>
    <h1 class="heading"><?php the_title(); ?></h1>
    <?php the_content();?>
<?php 
    endwhile; }
    require_once( get_template_directory() . '/include/social.php' );
?>
</main>
<?php get_footer(); ?>
