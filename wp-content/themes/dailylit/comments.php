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
	$oddcomment = 'class="alt" ';
?>

<!-- You can start editing here. -->

<?php if ($comments) : ?>
    <h3>Comments (<?php comments_number('0', '1', '%' );?>)</h3>
	<a href="#commentform" class="comment-btn">Add a Comment</a><a href="<?php bloginfo('comments_rss2_url'); ?>" class="feed-btn">Comments Feed</a><div class="clear"></div>
	<hr />
	<ul id="comment-listing">

	<?php foreach ($comments as $comment) : ?>

		<li>
        	<?php if ($comment->comment_approved == '0') : ?>
			<em>Your comment is awaiting moderation.</em>
			<?php endif; ?>
        	<div class="comment-text"><?php comment_text() ?></div>
        	<div class="byline"><span class="author"><?php comment_author_link() ?></span><br /><?php comment_date('F jS, Y') ?> <?php comment_time() ?></div>
            <div class="clear"></div>
		</li>


	<?php endforeach; /* end for each comment */ ?>

	</ul><div class="clear"></div>

<?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->
	    <h3>Comments (<?php comments_number('0', '1', '%' );?>)</h3>
		<a href="#commentform" class="comment-btn">Add a Comment</a><a href="<?php bloginfo('comments_rss2_url'); ?>" class="feed-btn">Comments Feed</a><div class="clear"></div>
		<hr />
		
	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Comments are closed.</p>

	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

			<div class="clear"></div>
			
			<div id="comments">

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>

<?php else : ?>

					<fieldset>
				
						<p><label for="author">Display Name <em> (Required)</em></label><input type="text" name="author" id="author" value="" tabindex="1" /></p>
						<p><label for="email">Email <em> (Required, hidden)</em></label><input type="text" name="email" id="email" value="" tabindex="2" /></p>
						<p><label for="url">URL</label><input type="text" name="url" id="url" value="" tabindex="3" /></p>
                    </fieldset>

<?php endif; ?>

<!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->
					<fieldset>
						<p><label for="comment">Comment</label><textarea name="comment" id="comment" cols="45" rows="10" tabindex="4"></textarea></p>
						<p><input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
						<input type="submit" name="submit" value="Add your Comment" class="button" tabindex="5" /></p>
			
					</fieldset>
					

<?php do_action('comment_form', $post->ID); ?>

</form>
				<p class="fineprint"><strong>Some HTML allowed:</strong><br/>&lt;a href=&quot;&quot; title=&quot;&quot;&gt; &lt;abbr title=&quot;&quot;&gt; &lt;acronym title=&quot;&quot;&gt; &lt;b&gt; &lt;blockquote cite=&quot;&quot;&gt; &lt;code&gt; &lt;em&gt; &lt;i&gt; &lt;strike&gt; &lt;strong&gt; </p>
	
			</div> <!-- end comments -->
<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>
