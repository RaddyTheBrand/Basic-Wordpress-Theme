<?php get_header(); ?>

<div class="author grid">
    <div class="author-image col1"><img class="objFit" src="<?php echo get_template_directory_uri(); ?>/images/author.jpg" alt="Author Name"/></div>
    <div class="author-content col2">
        <?php 
            $optionAuthor = get_option('author');
            if($optionAuthor == "" || $optionAuthor == null) {
                $optionAuthor = "Hey, you need to edit this by going to your Dashboard -> Theme Options. Change the Author field and save.";
            }
            echo $optionAuthor;
        ?>
    </div>
</div> 

<?php


preg_match('/MSIE (.*?);/', $_SERVER['HTTP_USER_AGENT'], $matches);
if(count($matches)<2){
  preg_match('/Trident\/\d{1,2}.\d{1,2}; rv:([0-9]*)/', $_SERVER['HTTP_USER_AGENT'], $matches);
}

if (count($matches)>1){
  //Then we're using IE
  $version = $matches[1];

  switch(true){
    case ($version<=8):
      //IE 8 or under!
      echo "Wow";
      break;

    case ($version==9 || $version==10):
      //IE9 & IE10!
      break;

    case ($version==11):
      //Version 11!
      echo "this is IE11";
      break;

    default:
      //You get the idea
  }
}

?>
<?php
    require_once( get_template_directory() . '/include/social.php' );

    if(have_posts()) {
        while(have_posts()) : the_post();
?>
    <h1 style="color:red;">Home.php</h1>
<article class="grid">
        <div class="col1">
            <a href="<?php the_permalink();?>">
                <?php the_post_thumbnail('medium'); ?>
            </a>
        </div> 
        <div class="col2">
            <a href="<?php the_permalink();?>">
                <h2><?php the_title(); ?></h2>
                <p><?php echo get_excerpt(186); ?></p>
                <span class="button" href="#">More +</span>
            </a>
        </div>
</article>

<?php endwhile; } ?>
<nav class="pagination"><?php echo paginate_links(); ?></nav>
<?php get_footer(); ?>