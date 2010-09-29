<?php // Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

			<p class="nocomments">This post is password protected. Enter the password to view comments.</p>

			<?php
			return;
		}
	}

	/* This variable is for alternating comment background */
	$oddcomment = '';
?>

<!-- You can start editing here. -->
<div id="comments">

<?php if ($comments) : ?>

	<h3><?php comments_number('No Comments', 'One Comment', '% Comments' );?> on &#8220;<?php the_title(); ?>&#8221;</h3>

		<p style="text-align:right;padding-right:10px;"><a href="http://blog.bernatfarrero.com/comments/feed/">Follow comments feed</a></p>

	<?php $count_pings = 1; foreach ($comments as $comment) : ?>
		<div class="commentpost <?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">
			<div style="float:right;margin-right:10px;">
				<?php echo get_avatar( $comment, 60 ); ?>
			</div>
			<cite><?php comment_author_link() ?>&nbsp;said at <?php comment_time() ?> on <?php comment_date('F jS, Y') ?>:</cite>
			<?php comment_text() ?>
			<?php if ($comment->comment_approved == '0') : ?>
			<p><b>Your comment is awaiting moderation.</b></p>
			<?php endif; ?>
		</div>

	<?php
		/* Changes every other comment to a different class */
		$oddcomment = ( empty( $oddcomment ) ) ? 'odd_comment' : '';
	?>


	<?php endforeach; /* end for each comment */ ?>


 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Comments are closed.</p>

	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

<br /><br />

<div class="center" style="color:red;font-size:48px;font-weight:bold;">Say something!</div>

<br />

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">


<?php if ( $user_ID ) : ?>

<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>


<?php else : ?>

<input type="text" name="author" id="author" value="Name <?php if ($req) echo "(required)"; ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> onblur="if(this.value.length == 0) this.value='Name <?php if ($req) echo "(required)"; ?>';" onclick="if(this.value == 'Name <?php if ($req) echo "(required)"; ?>') this.value='';" />

<input type="text" name="email" id="email" value="Mail (will not be published) <?php if ($req) echo "(required)"; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> onblur="if(this.value.length == 0) this.value='Mail (will not be published) <?php if ($req) echo "(required)"; ?>';" onclick="if(this.value == 'Mail (will not be published) <?php if ($req) echo "(required)"; ?>') this.value='';" />

<input type="text" name="url" id="url" value="Website" size="22" tabindex="3" onblur="if(this.value.length == 0) this.value='Website';" onclick="if(this.value == 'Website') this.value='';" />

<?php endif; ?>

<!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->

<textarea name="comment" id="comment" cols="70%" rows="10" tabindex="4" value="Enter comment here."></textarea><br />

<span class="submitbutton"><input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" /></span>
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />

<?php do_action('comment_form', $post->ID); ?>


</form>

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>

</div>
