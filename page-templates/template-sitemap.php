<?php
/*
	Template Name: Sitemap
*/
get_header(); ?>

<!-- HERO IMAGE -->
<?php get_template_part('template-parts/flexTemplate/hero' , 'image');?>


<!-- PAGE - FLEXIBLE CONTENT CHECK -->
<?php
	if( have_rows('flexible_content')): // Check if any content exists
	while ( have_rows('flexible_content') ) : the_row(); // Loop through content rows
?>

<!-- 1 COLUMN LAYOUT -->
<?php get_template_part('template-parts/flexTemplate/one' , 'column');?>


<!-- 2 COLUMN LAYOUT -->
<?php get_template_part('template-parts/flexTemplate/two' , 'column');?>


<!-- 3 COLUMN LAYOUT -->
<?php get_template_part('template-parts/flexTemplate/three' , 'column');?>

<?php
		endwhile; // While has flexible content
	endif; // If has content
?>

<!-- SITEMAP STUFF -->
<section>
<div class="row">
  	<div class="large-12 columns">
		<h1 class="textUpper text-center color1">Sitemap</h1>
 <?php if( have_rows('links') ): ?>

	<div class="large-6 column">

	<?php while( have_rows('links') ): the_row(); 

		// vars
		$main_link = get_sub_field('main_link');
		$main_link_title = get_sub_field('main_link_title');
		$sub_links = get_sub_field('sub_links');
		

		?>
		<?php if( $main_link ): ?>
				<a href="<?php echo $main_link; ?>">
			<?php endif; ?>

					<h3><?php echo $main_link_title;?></h3>

			<?php if( $main_link ): ?>
				</a>
			<?php endif; ?>

		    
		
	 	<?php if( have_rows('sub_links') ): ?>
 	 	<?php while( have_rows('sub_links') ): the_row(); 

		// vars
		$sublink = get_sub_field('sublink');
		$sublink_title = get_sub_field('sublink_title');

		?>
  	 
		<ul>
        <?php if( $sub_links ): ?>
        
				<a href="<?php echo $sublink; ?>">
			<?php endif; ?>

					<li><?php echo $sublink_title;?></li>

			<?php if( $sub_link ): ?>
				</a>
			<?php endif; ?>
		</ul>      
       <?php endwhile; ?>
       <?php endif;?>   
                  
       <?php endwhile; ?>

	</div>
	<div class="large-6 column">

	<?php while( have_rows('links_copy') ): the_row(); 

		// vars
		$main_link = get_sub_field('main_link');
		$main_link_title = get_sub_field('main_link_title');
		$sub_links = get_sub_field('sub_links');
		

		?>
		<?php if( $main_link ): ?>
				<a href="<?php echo $main_link; ?>">
			<?php endif; ?>

					<h3><?php echo $main_link_title;?></h3>

			<?php if( $main_link ): ?>
				</a>
			<?php endif; ?>

		    
		
	 	<?php if( have_rows('sub_links') ): ?>
 	 	<?php while( have_rows('sub_links') ): the_row(); 

		// vars
		$sublink = get_sub_field('sublink');
		$sublink_title = get_sub_field('sublink_title');

		?>
  	 
		<ul>
        <?php if( $sub_links ): ?>
        
				<a href="<?php echo $sublink; ?>">
			<?php endif; ?>

					<li><?php echo $sublink_title;?></li>

			<?php if( $sub_link ): ?>
				</a>
			<?php endif; ?>
		</ul>      
       <?php endwhile; ?>
       <?php endif;?>   
                  
       <?php endwhile; ?>

	</div>


<?php endif; ?> 
    </div>
	

    	
    </div>
</section>


<?php get_footer(); ?>