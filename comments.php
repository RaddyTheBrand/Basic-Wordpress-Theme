<div class="minimalist_comments">
	<ol class="commentlist">
	<?php wp_list_comments( 'type=comment&callback=mytheme_comment&avatar_size=62&max_depth=2' ); ?>
	</ol>
</div>

<?php
function mytheme_comment($comment, $args, $depth) {
    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
	}?>
	
	<<?php echo $tag; ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID() ?>">
	
	<?php 
    if ( 'div' != $args['style'] ) { ?>
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body"><?php
	} ?>
	
	<div class="comment-author vcard">
		<?php if ( $args['avatar_size'] != 0 ) {
			echo get_avatar( $comment, $args['avatar_size'] ); 
		} 
		printf( 
			__( '<cite class="fn">%s</cite> &middot; <div class="comment-meta">%s %s</div> ' ), 
			get_comment_author_link(),
			get_comment_date(),
			get_comment_time() 
		); 
		?>
	</div>
	
	<?php if ( $comment->comment_approved == '0' ) { ?>
		<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em><br/>
	<?php } ?>

	<?php echo "<p class='comment-text'>" . get_comment_text() . "</p>"; ?>

	<div class="reply">
	&rarr;
		<?php 
			comment_reply_link( 
				array_merge( 
					$args, 
					array( 
						'add_below' => $add_below, 
						'depth'     => $depth, 
						'max_depth' => $args['max_depth'] 
					) 
				) 
		); ?>
	</div>

	<?php 
		if ( 'div' != $args['style'] ) : ?>
	</div>

	<?php endif; }
?>

<?php if(comments_open()) : ?>
	<?php if(get_option('comment_registration') && !$user_ID) : ?>
		<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
		<?php else : ?>

		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
			<?php if($user_ID) : ?>

				<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. 
	<a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>

			<?php else : ?>

				<p>
					<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
					<label for="author"><small>Name <?php if($req) echo "(required)"; ?></small></label>
				</p>
				<p>
					<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
					<label for="email"><small>Mail (will not be published) <?php if($req) echo "(required)"; ?></small></label>
				</p>

				<p>
					<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
					<label for="url"><small>Website</small></label>
				</p>

			<?php endif; ?>
			<p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>

			<p>
				<input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
				<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
			</p>

			<?php do_action('comment_form', $post->ID); ?>
		</form>

	<?php endif; ?>
<?php else : ?>
	<p>The comments are closed.</p>
<?php endif; ?>