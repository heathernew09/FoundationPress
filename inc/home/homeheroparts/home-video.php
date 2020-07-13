<?php $whatHeroOverlay = get_field('item_over_hero');?>
<?php $video_mobile_fallback = get_field('video_mobile_fallback');?>
<?php $video_large_fallback = get_field('video_large_fallback');?>
<div class="row expanded video-wrapper">

    <video autoplay loop autobuffer muted playsinline id="headervid" class="w100" poster="<?php echo esc_url($video_large_fallback['url']); ?>">
        <source src="<?php bloginfo('template_directory'); ?>/assets/video/<?php the_field('video_webm_format'); ?>" type="video/webm">
        <source src="<?php bloginfo('template_directory'); ?>/assets/video/<?php the_field('video_ogg_format'); ?>" type="video/ogg">
        <source src="<?php bloginfo('template_directory'); ?>/assets/video/<?php the_field('video_mp4_format'); ?>" type="video/mp4">
        
        <?php    if( $video_mobile_fallback ): ?>
                <img src="<?php echo esc_url($video_mobile_fallback['url']); ?>" alt="<?php echo esc_attr($video_mobile_fallback['alt']); ?>" title="Your browser does not support the <video> tag" class="show-for-small-only"/>
        <?php else:?>
                <img src="<?php echo esc_url($video_large_fallback['url']);?>" class="show-for-small-only" alt="">
        <?php endif; ?>
        
        <?php    if( $video_large_fallback ): ?>
                <img src="<?php echo esc_url($video_large_fallback['url']); ?>" alt="<?php echo esc_attr($video_large_fallback['alt']); ?>" title="Your browser does not support the <video> tag" class="hide-for-small-only">
        <?php else:?>
                <img src="<?php echo esc_url($video_large_fallback['url']);?>" class="show-for-small-only" alt=""><strong></strong>
        <?php endif; ?>
    </video>
    
    <div class="hero-overlay">
        <?php if ($whatHeroOverlay != '0'): ?>
		<?php endif;?>
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
    </div>
    <div id="controls">
         <button id="pause" onclick="control()" class="visible">Stop Video</button>
         <!--<button id="play" onclick="control()" class="hidden">Play video</button>-->
    </div>
</div>
<script>
   var vid = document.getElementById("headervid"); 
var count=0;
function control()
{
count++;
if(count%2==1)
pauseVid();
else
playVid();
}
        function playVid() { 
            vid.play();
        } 
        function pauseVid() { 
            vid.pause();
            var x = document.getElementById("pause");
            if (x.innerHTML === "Stop Video") {
                x.innerHTML = "Play Video";
              } else {
                x.innerHTML = "Stop Video";
              }
        } 
vid.autoplay = true;
vid.load();
</script>
<style>
    .hidden{display:none;}
    .visible{display:block;}
div#controls {
    position: absolute;
    bottom: 0;
}

div#controls button {
    background-color: #000000a8;
    padding: 10px;
    color: #fff;
    font-size: 10px;
}
@media (max-width: 1024px) {
    .video-wrapper {position: relative;height: 420px;overflow: hidden;}
    .video-wrapper video{object-fit:cover;min-height:300px;}
    }
	.video-wrapper {
    position: relative;
}
</style>