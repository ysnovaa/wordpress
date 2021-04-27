<?php
/**
 * The template for displaying services posts on the front page
 *
 * @package SimClick
 */

$number     = get_theme_mod( 'simclick_service_number', 6 );
$post_list  = array();
$no_of_post = 0;

$args = array(
	'post_type'           => 'post',
	'ignore_sticky_posts' => 1, // ignore sticky posts.
);

// Get valid number of posts.
$args['post_type'] = 'ect-service';

for ( $i = 1; $i <= $number; $i++ ) {
	$simclick_post_id = '';

	$simclick_post_id = get_theme_mod( 'simclick_service_cpt_' . $i );

	if ( $simclick_post_id ) {
		$post_list = array_merge( $post_list, array( $simclick_post_id ) );

		$no_of_post++;
	}
}

$args['post__in'] = $post_list;
$args['orderby']  = 'post__in';

$args['posts_per_page'] = $no_of_post;

if ( ! $no_of_post ) {
	return;
}

$loop = new WP_Query( $args );

while ( $loop->have_posts() ) :

	$loop->the_post();
	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="hentry-inner">
			<div class="post-thumbnail">
				<a href="<?php the_permalink(); ?>">
					<?php

					// Default value if there is no first image
					$image = '';

					if ( has_post_thumbnail() ) {
						the_post_thumbnail( 'simclick-testimonial' );
					} else {
						echo simclick_get_no_thumb_image( 'simclick-testimonial' );
					}
					?>
				</a>
			</div>

			<div class="entry-container">
				<header class="entry-header">
					<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">','</a></h2>' ); ?>
				</header>

				<?php
					$excerpt = get_the_excerpt();
					echo '<div class="entry-summary"><p>' . $excerpt . '</p></div><!-- .entry-summary -->';
				?>
			</div><!-- .entry-container -->
		</div> <!-- .hentry-inner -->
	</article> <!-- .article -->
	<?php
endwhile;

wp_reset_postdata();


