<?php get_header(); ?>
<?php
    if(have_posts()) { while(have_posts()) : the_post();
?>

<main class="row single-page">

    <h1 class="heading"><?php the_title(); ?></h1>
    <p class="meta">
        By <?php the_author(); ?> in <?php the_category( ' ' ); ?> &middot;
        <time class="date"><?php the_date( get_option( 'date_format' ) ); ?></time>
    </p>

    <?php the_content();?>

    <?php 
    if(has_tag()) {
       ?><div class="post-tags"><?php the_tags(); ?> </div>
       <?php
    } else { /* Article untagged */ } ?>
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

    <?php 
        endwhile; }
        get_template_part( '/inc/social.php', 'social' );
    ?>

    <?php comments_template() ?>


</main>
<?php get_footer(); ?>
