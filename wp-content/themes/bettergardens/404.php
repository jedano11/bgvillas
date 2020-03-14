<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#404
 *
 * @package WordPress
 * @subpackage no
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<section class="sec-padding">
	<div class="mtpx-80 clearfix"></div>
	<div class="container">
		<h3>This is somewhat embarrassing, isn’t it?</h3>
		<p class="mbpx-20"> It looks like nothing was found at this location. Maybe try a search?</p>
		<?php get_search_form(); ?>
	</div>
</section>
	

<?php get_footer(); ?>
