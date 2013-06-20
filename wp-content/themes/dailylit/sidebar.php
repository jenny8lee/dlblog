<?php
/**
 * @package WordPress
 * @subpackage DailyLit
 */
?>
		<ul>
			<?php 	/* Widgetized sidebar, if you have the plugin installed. */
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

			<!-- Author information is disabled per default. Uncomment and fill in your details if you want to use it.
			<li><h3>Author</h3>
			<p>A little something about you, the author. Nothing lengthy, just an overview.</p>
			</li>
			-->

			<li class="widget_recent_entries"><h3>Recent Posts</h3>
             <ul><?php get_archives('postbypost', 5); ?></ul>
            </li>

			<?php wp_list_categories('show_count=1&title_li=<h3>Categories</h3>'); ?>

			<li class="widget_archive"><h3>Archives</h3>
				<ul>
				<?php wp_get_archives('type=monthly&show_post_count=1'); ?>
				</ul>
			</li>

			<?php endif; ?>
		</ul>
        <h3>RSS Feeds</h3>
		<ul class="feeds">
			<li><a href="<?php bloginfo('rss2_url'); ?>">Entries</a></li>
			<li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments</a></li>
		</ul>

