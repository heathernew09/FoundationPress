<?php
/*
	Template Name: Flexible Clone
*/
get_header(); ?>

<!--IF is home page-->
<?php if( is_front_page()):?>
	<?php get_template_part('inc/home/homeHero');?>

<!--Else this-->
<?php else:?>
	<?php get_template_part('inc/pages/pageHero');?>

<?php endif;?>
<?php
	if( have_rows('layout_options')): // Check if any content exists
	while ( have_rows('layout_options')) : the_row(); // Loop through content rows
?>
<?php get_template_part('template-parts/cloneTemplate/one' , 'clone');?>
<?php get_template_part('template-parts/cloneTemplate/two' , 'clone');?>
<?php get_template_part('template-parts/cloneTemplate/three' , 'clone');?>
<?php get_template_part('template-parts/cloneTemplate/four' , 'clone');?>

<?php
		endwhile; // While has flexible content
	endif; // If has content
?>

<?php get_footer(); ?>