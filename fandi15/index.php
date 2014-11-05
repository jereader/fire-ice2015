<?php get_header(); 




// WP_Query arguments
$args = array (
	'post_status'            => 'publish',
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post(); ?>
		<div class="post-hero-image" style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>')">
			<?php //the_post_thumbnail(); ?></div>
		<article class="post-container">
		
			<div class="post-content">
				<div class="post-title"><?php the_title(); ?></div>
				<div class="post-entry"><?php the_content(); ?></div>
				<div class="post-media"></div>
			</div>

	    </article>


	    <?php
	}
} else {
	// no posts found
}

// Restore original Post Data
wp_reset_postdata();




get_footer(); ?>



