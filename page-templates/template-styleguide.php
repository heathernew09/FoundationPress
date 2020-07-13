<?php
/*
	Template Name: Flexible Styleguide
*/
get_header('styleguide'); ?>
<!--Load Font-->
<?php if ( $font_embed_code = get_field( 'font_embed_code' ) ) : ?>
	<?php echo $font_embed_code; ?>
<?php endif; ?>

<div class="row">
    <div class="small-12 large-3 dashboard-sidebar all-pad">
    	<?php
		$logo = get_field( 'logo' );
		if ( $logo ) : ?>
			<a href="<?php echo get_site_url(); ?>"><img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>" /></a>
        <?php else:?>
        	<a href="<?php echo get_site_url(); ?>"><?php echo get_bloginfo(); ?></a>
		<?php endif; ?>
    </div>
</div>

<?php get_template_part('inc/pages/pageHero');?>
<div class="row skinnied">
	<div class="small-12 medium-12 large-12 column">
    	<?php if ( $page_title = get_field( 'page_title' ) ) : ?>
			<h1><?php echo esc_html( $page_title ); ?></h1>
        <?php endif; ?>
        <?php if ( $intro_text = get_field( 'intro_text' ) ) : ?>
			<?php echo $intro_text; ?>
        <?php endif; ?>
    </div>
</div>
<div class="row">
	<div class="small-12 medium-12 large-12 sm-top-pad md-top-pad lg-top-pad column">
    <?php if( have_rows('sections')): ?>
        <ul class="tabs" data-responsive-accordion-tabs="tabs medium-accordion large-accordion" data-allow-all-closed="true" id="style-guide-accordion">
             
		<?php $count = 1; while ( have_rows('sections')) : the_row();?>
        <li class="tabs-title <?php if($count==1):?>is-active<?php endif;?>">
            <a href="#panel<?php echo $count;?>" aria-selected="true">
				<?php if( get_row_layout() == 'colors' ) { ?>
                    <?php if ( $section_title = get_sub_field( 'section_title' ) ) : ?>
                        <h4><?php echo esc_html( $section_title ); ?></h4>
                    <?php endif; ?>
                <?php };?>
                <?php if( get_row_layout() == 'typography' ) { ?>
                    <?php if ( $section_title = get_sub_field( 'section_title' ) ) : ?>
                        <h4><?php echo esc_html( $section_title ); ?></h4>
                    <?php endif; ?>
                <?php };?>
                <?php if( get_row_layout() == 'buttons' ) { ?>
                    <?php if ( $section_title = get_sub_field( 'section_title' ) ) : ?>
                        <h4><?php echo esc_html( $section_title ); ?></h4>
                    <?php endif; ?>
                <?php };?>
                <?php if( get_row_layout() == 'forms' ) { ?>
                    <?php if ( $section_title = get_sub_field( 'section_title' ) ) : ?>
                        <h4><?php echo esc_html( $section_title ); ?></h4>
                    <?php endif; ?>
                <?php };?>
                <?php if( get_row_layout() == 'navigation' ) { ?>
                    <?php if ( $section_title = get_sub_field( 'section_title' ) ) : ?>
                        <h4><?php echo esc_html( $section_title ); ?></h4>
                    <?php endif; ?>
                <?php };?>
                <?php if( get_row_layout() == 'container' ) { ?>
                    <?php if ( $section_title = get_sub_field( 'section_title' ) ) : ?>
                        <h4><?php echo esc_html( $section_title ); ?></h4>
                    <?php endif; ?>
                <?php };?>
             </a>
         </li>
		<?php $count++; endwhile; ?>
        </ul>
    
    
        <?php
			if( have_rows('sections')): // Check if any content exists
			$panelcount = 1; while ( have_rows('sections')) : the_row(); // Loop through content rows
		?>
        	<div class="tabs-content" data-tabs-content="style-guide-accordion">
            	<div class="tabs-panel <?php if($panelcount==1):?>is-active<?php endif;?>" id="panel<?php echo $panelcount;?>">
					<?php get_template_part('template-parts/styleguide/elements/colors');?>
                    <?php get_template_part('template-parts/styleguide/elements/typography');?>
                    <?php get_template_part('template-parts/styleguide/elements/buttons');?>
                    <?php get_template_part('template-parts/styleguide/elements/forms');?>
                    <?php get_template_part('template-parts/styleguide/elements/navigation');?>
                    <?php get_template_part('template-parts/styleguide/elements/container');?>
                </div>
            </div>
		
		<?php
			$panelcount++;
				endwhile; // While has flexible content
			endif; // If has content
		?>
    <?php endif;?>
	</div>
</div>

<?php wp_reset_query(); ?>

<?php get_footer(); ?>