<?php
/**
 * @package WordPress
 * @subpackage DailyLit
 */

get_header();
?>


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>

			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>

				<ul class="postmedatada">
                	<li class="byline"><a href="<?php the_author_url(); ?>"><img src="http://images.dailylit.com/avatars/<?php the_author(); ?>" alt="<?php the_author(); ?>" /></a>Posted on <?php the_time('j F, Y') ?> <br />by <span class="author"><a href="<?php the_author_url(); ?>"><?php the_author(); ?></a></span></li>
                    <li class="categories">Category<br /><?php the_category(', ') ?></li>
                </ul>
			</div>
		</div>
		<div id="comment-wrapper">
        <?php comments_template(); ?>
        </div>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>


<?php get_footer(); ?>
