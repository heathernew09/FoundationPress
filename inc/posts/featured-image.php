<div class="sky-featured-image bot-pad">
	<?php
		$featured_posts = get_field('featured_posts');
		if( $featured_posts ): ?>
		<ul>
			<?php foreach( $featured_posts as $featured_post ): 
				$permalink = get_permalink( $featured_post->ID );
				$title = get_the_title( $featured_post->ID );
				$custom_field = get_field( 'field_name', $featured_post->ID );
				?>
				<li>
					<a href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $title ); ?></a>
					<span>A custom field from this post: <?php echo esc_html( $custom_field ); ?></span>
				</li>
			<?php endforeach; ?>
		</ul>
    <?php else:?>
	<?php
		$default_post_image = get_field( 'default_post_image' , get_option('page_for_posts'));
		if ( $default_post_image ) : ?>
			<img src="<?php echo esc_url( $default_post_image['url'] ); ?>" alt="<?php echo esc_attr( $default_post_image['alt'] ); ?>" />
		<?php endif; ?>
	<?php endif; ?>
</div>