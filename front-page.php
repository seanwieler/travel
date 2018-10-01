<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Travel_Blog
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			$image = get_field('hero_image');
			$size = '50%'; // (thumbnail, medium, large, full or custom size)
			
			if( $image ) {
			
				echo wp_get_attachment_image( $image, $size );
			
			}
			// echo get_post_meta(get_the_ID(), "hero_image", true);
			echo get_post_meta(get_the_ID(), "hero_quote", true);?>
			<h2 class="decorated"><span><?php echo get_post_meta(get_the_ID(), "section_1_title", true);?></span></h2> 
			<div class="section-one-content"> <?php echo get_post_meta(get_the_ID(), "section_1_content", true); ?> </div> <?php
			get_template_part( 'template-parts/content', 'page' ); ?>
			<h2 class="decorated"><span><?php echo get_post_meta(get_the_ID(), "section_2_title", true);?></span></h2> 
			<div class="section-one-content"> <?php echo get_post_meta(get_the_ID(), "section_2_content", true); ?> </div> <?php

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>