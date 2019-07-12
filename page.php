<?php get_header(); ?>
<?php
    if(have_posts()) {
    while(have_posts()) : the_post();
?>
<div class="container single__page">
    <?php the_post_thumbnail('medium'); ?>
    <h1 class="heading"><?php the_title(); ?></h1>
    <?php the_content();?>

<?php 
    endwhile; } 
    require_once( get_template_directory() . '/include/social.php' );
?>
</div>
<?php get_footer(); ?>