<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gka_theme
 */

get_header();
?>

<div id="primary" class="content-area nav-space">
	<main id="main" class="site-main">

		<!-- Main Slider -->
		<section>
			<h1 class="outline">Slider</h1>
			<?php 
			$slider_id = get_field("gka_theme_slider", $post->ID);
			if($slider_id) {
				$slider = gka_theme_get_gallery($slider_id);
				if($slider) { 
					include get_template_directory() . '/template-parts/main-slider.php'; 
				} 
			}
			else {
				include get_template_directory() . '/template-parts/no-slider.php'; 
			}
        ?>
		</section>
		<!-- #Main Slider -->

		<!-- Widget Area Before -->
		<?php
		if ( is_active_sidebar( 'gka_theme_widget_before' ) ) {
			dynamic_sidebar( 'gka_theme_widget_before' ); 
		}
		?>
		<!-- #Widget Area Before -->

		<!-- Main Content -->
		<?php while ( have_posts() ) : the_post(); ?>
		<section class="main-section">
			<div class="container p-default single-blog">
				<h1><?php echo the_title(); ?></h1>
				<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
			</div>
		</section>
		<?php endwhile; // End of the loop. ?>
		<!-- #Main Content -->

		<!-- Additional Content -->
		<section class="gka-theme-form">
			<div class="contact-yellow-bg">
				<div class="container py-default">
					<div class="row justify-content-center">
						<div class="col-md-10">
							<div class="welcome pb-3">
								<h1 class="text-black mb-0">SIGN UP</h1>
								<div>STAY UP TO DATE WITH KINGSMILL REALTY</div>
							</div>
							<?php echo do_shortcode('[wpforms id="85"]'); ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- #Additional Content -->

		<!-- Widget Area After -->
		<?php
		if ( is_active_sidebar( 'gka_theme_widget_after' ) ) {
			dynamic_sidebar( 'gka_theme_widget_after' ); 
		}
		?>
		<!-- #Widget Area After -->

	</main><!-- #main -->
</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();