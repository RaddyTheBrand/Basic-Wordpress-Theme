<?php get_header(); ?>
<?php
    if(have_posts()) {
        while(have_posts()) : the_post();
?>
<!-- <h1 style="color:red;">Single.php</h1> -->
<main class="row single-page">
    <h1 class="heading"><?php the_title(); ?></h1>
    <?php the_content();?>
    <ol class="commentlist">
        <?php wp_list_comments(); paginate_comments_links(); ?>

    </ol>
    <?php comment_form(); ?>
    <?php 
        endwhile; }
        get_template_part('/include/social.php', 'page' );
    ?>
</main>
<?php get_footer(); ?>
