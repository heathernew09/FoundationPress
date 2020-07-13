<?php
    $whatHeroOverlay = get_field('item_over_hero');
        $imgSmall = get_field('hero_image_small');
		$imgMedium = get_field('hero_image_medium');
		$imgLarge = get_field('hero_image_large');
?>
<div class="row expanded bot-marr sky-heroCont">
    <div class="small-12 medium-12 large-12">
        <img class="w100 img-responsive" data-interchange="
                  <?php if ( get_field('hero_image_small') ) : 
                    echo '['.$imgSmall["url"].', small],'; 
                  else:
                    echo '['.$imgLarge["url"].', small],';
                  endif;
                  if ( get_field('hero_image_medium') ) : 
                    echo '['.$imgMedium["url"].', medium],'; 
                  else:
                    echo '['.$imgLarge["url"].', medium],';
                  endif;
                    echo '['.$imgLarge["url"].', large] "'; 
                  echo 'alt="'.$imgLarge["title"].''?>">
        
        <?php if ($whatHeroOverlay != '0'): ?>
		<div class="sky-heroOverlayCont">
			<!-- type -->
			<?php if ($whatHeroOverlay == '1') :
				echo the_field('hero_overlay_type');
			endif; ?>
			<!-- CTA -->
			<?php if ($whatHeroOverlay == '2') :
                include(ABSPATH . 'wp-content/themes/Sky/inc/home/homeheroparts/home-overimagecta.php');
            endif;?>
            <!-- Custom -->
			<?php if ($whatHeroOverlay == '3') :
				include(ABSPATH . 'wp-content/themes/Sky/inc/home/homeheroparts/home-overimagecustom.php');
			endif; ?>
		</div> <!-- /sky-heroOverlayCont -->
	    <?php endif; ?> <!-- /show Overlay -->
    </div>
</div>