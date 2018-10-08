<?php
/**
 * Template Name: General Page
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
			<?php endif;
			
			$image2 = get_field('section_2_image');
			$size2 = '50%'; // (thumbnail, medium, large, full or custom size)
			if( $image2 ) {
				echo wp_get_attachment_image( $image2, $size2 );
            } ?>

            <?php if(get_field('section_2_title')): ?>
                <div class="rp-background">
                    <h2 class="decorated white-bg"><span><?php echo get_post_meta(get_the_ID(), "section_2_title", true);?></span></h2>
                    <?php if(get_field('section_2_content')): ?>
                        <div class="section-content-whitebg"> <?php the_field('section_2_content'); ?> </div>
					<?php endif;?>
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d10585.543283908559!2d-123.5460096!3d48.4491264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sca!4v1538974560271" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div> 
        <?php endif; ?>
			
			<?php if(get_field('section_3_title')): ?>
			<div class="rp-background">
				<h2 class="decorated white-bg"><span><?php echo get_post_meta(get_the_ID(), "section_3_title", true);?></span></h2> 
			<?php endif; ?>

			<?php if(get_field('section_3_content')): ?>
				<div class="section-content-whitebg"> <?php echo get_post_meta(get_the_ID(), "section_3_content", true); ?> </div>
			</div> 
			<?php endif;


			$image3 = get_field('contact_image');
			$size3 = '50%'; // (thumbnail, medium, large, full or custom size)
			if( $image3 ) {
				echo wp_get_attachment_image( $image3, $size3 );
			}?>

			<?php if(get_field('contact_content')): ?>
			<div class="section-content-blackbg"> <?php echo get_post_meta(get_the_ID(), "contact_content", true); ?> </div> 
			<?php endif;

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