<?php
/**
 * @package WordPress
 * @subpackage DailyLit
 */

get_header();

$search_term = "";
$search_term_heading = "";
if(isset($_GET["s"])){
	$search_term = trim(stripslashes(strip_tags($_GET["s"])));
	$search_term_heading = "for <b>$search_term</b>";
}
 

?>

	<?php if (have_posts()) : ?>

		<h2 class="pagetitle">Search Results <?php echo $search_term_heading; ?></h2>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>


		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?>>
				<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
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

        <p class="pagenav"><a class="previous on"><?php next_posts_link('Previous posts') ?></a><a class="next on alignright"><?php previous_posts_link('Earlier posts') ?></a></p>

	<?php else : ?>

		<h2 class="center">No posts found <?php echo $search_term_heading; ?>.</h2>

	<?php endif; ?>


<?php get_footer(); ?>