<?php
/**
 * Template Name: Contact Page
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
			}?>

			<?php if(get_field('section_1_title')): ?>
			    <h2 class="decorated black-bg"><span><?php the_field('section_1_title');?></span></h2> 
			<?php endif;?>

			<?php if(get_field('section_1_content')): ?>
			    <div class="section-content-blackbg"> <?php echo get_post_meta(get_the_ID(), "section_1_content", true); ?> </div> 
			<?php endif; ?>
			
			<?php echo do_shortcode('[wpforms id="271" title="false" description="false"]');

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