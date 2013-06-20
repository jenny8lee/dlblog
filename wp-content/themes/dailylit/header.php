<?php
/**
 * @package WordPress
 * @subpackage DailyLit
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?v=2" type="text/css" media="screen" />
	<!--[if IE]>
		<link rel="stylesheet" type="text/css" media="screen, projection" href="<?php bloginfo('stylesheet_directory'); ?>/ie.css" />
	<![endif]-->  
	<!--[if IE 6]>
		<link rel="stylesheet" type="text/css" media="screen, projection" href="<?php bloginfo('stylesheet_directory'); ?>/ie6.css" />
	<![endif]-->  
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>
</head>
<body id="blog">
<div class="container">

	<div id="header">
	<a href="<?php echo get_option('home'); ?>/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/blog-dailylit-logo.gif" alt="DailyLit | Blog" class="logo" /></a>
		<div id="subsearchbox">
        	<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
            	<label for="s">Search</label>
                <input type="text" name="s" id="s"  value="Enter search term(s)" class="searchtext" />
                <input type="image" src="http://www.dailylit.com/images/search-main-btn.gif"  id="searchsubmit" value="Search" />
            </form>
		</div><!-- end subsearchbox -->
	</div><!-- end header -->
	<div id="sidebar">
		<p class="homelink"><a href="http://www.dailylit.com" class="home"><em>back to</em> DailyLit.com</a></p>
        <?php get_sidebar(); ?>
    </div><!-- end sidebar -->
	<div id="main-content">
