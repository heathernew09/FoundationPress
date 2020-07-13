<?php
/**
 * Header Styleguide template
 *
 * @package SKY
 * @since SKY 1.0.0
 */
?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <?php if ( $font_embed_code = get_field( 'font_embed_code', 'option' ) ) : ?>
			<?php echo $font_embed_code; ?>
		<?php endif; ?>
		 <?php if ( get_field( 'view_mode', 'option' ) ) : ?>
 			<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/flexible-styleguide.css">
		<?php else: ?>
 			<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/flexible-styleguide-dark.css">
		<?php endif; ?>
        
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>