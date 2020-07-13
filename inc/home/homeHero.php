<?php
  $whatHero = get_field("home_page_hero"); 
?>
  <?php if ($whatHero == "1") { //Image?>
      <?php get_template_part('inc/home/homeheroparts/home' , 'image');?>
  <?php } elseif ($whatHero == "2") { // Slider ?>
      <?php get_template_part('inc/home/homeheroparts/home' , 'slider');?>
  <?php } elseif ($whatHero == "3") { // HTML 5 Video?>
      <?php get_template_part('inc/home/homeheroparts/home' , 'video');?>
  <?php } elseif ($whatHero == "4") { // Custom Blank ?>
     <?php get_template_part('inc/home/homeheroparts/home' , 'custom');?>
  <?php } ?>