<?php
/**
 * @package WordPress
 * @subpackage DailyLit
 */

get_header(); ?>


	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>

				<ul class="postmedatada">
                	<li class="byline"><a href="<?php the_author_url(); ?>"><img src="http://images.dailylit.com/avatars/<?php the_author(); ?>" alt="<?php the_author(); ?>" /></a>Posted on <?php the_time('j F, Y') ?> <br />by <span class="author"><a href="<?php the_author_url(); ?>"><?php the_author(); ?></a></span></li>
                    <li><?php comments_number('0', '1', '%' );?><br /><?php comments_popup_link('Comments', 'Comment', 'Comments'); ?></li>
                    <li class="categories">Category<br /><?php the_category(', ') ?></li>
                </ul>
			</div>

		<?php endwhile; ?>
        
        <div class="navigation">
         <div class="alignleft"><?php next_posts_link('Previous posts') ?></div>
         <div class="alignright"><?php previous_posts_link('Earlier posts') ?></div>
        </div>
        
        <!--<p class="pagenav"><a class="previous on"><?php next_posts_link('Previous posts') ?></a><a class="next on alignright"><?php previous_posts_link('Earlier posts') ?></a></p>-->
        

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>

	<?php endif; ?>

<?php get_footer(); ?>
