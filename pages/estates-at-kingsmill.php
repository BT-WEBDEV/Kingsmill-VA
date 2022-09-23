<?php
/**
 * Template Name: Estates at Kingsmill
 *
 * Description: Estates at Kingsmill
 *
 * @package WordPress
 * @subpackage REDI
 * @since REDI 1.0
 */
get_header(); 
?>
<div id="primary" class="content-area nav-space">
	<main id="main" class="site-main">

		<!-- Main Slider -->
		<section>

			<div class="gka-theme-slider">
				<!-- Swiper -->
				<div class="swiper-container gka-theme-swiper-container" aria-label="carousel">
					<div class="swiper-wrapper" aria-label="carousel">
						<div class="swiper-slide" aria-label="carousel">
							<div class="image view">
								<img src="https://kingsmillva.com/wp-content/gallery/resort-estate-at-kingsmill/1-DJI_0321.jpg"
									alt="" class="img-fit img-fluid w-100">
								<div class="mask">
									<div class="slider-caption mt-0" style="max-width: 100%;">
										<div class="text-white text-center mt-4">
											<h1 class="font-reem font-weight-normal">THE ESTATE AT KINGSMILL</h1>
											<a data-fancybox class="play-btn"
												href="https://kingsmillva.com/wp-content/uploads/2022/03/SOCIAL-EXPERIENCE-The-Estate-at-Kingsmill.mp4">
												<img src="<?php echo get_template_directory_uri() . "/images/icons/play_icon.png" ?>"
													class="mx-auto mt-3" width="70" alt="Play Button">
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Pagination -->
					<div class="swiper-pagination"></div>

					<!-- Navigation -->
					<div class="swiper-button-prev">
						<img src="<?php echo get_template_directory_uri()."/images/icons/swiper-arrow-left.svg" ?>"
							alt="" class="">
					</div>
					<div class="swiper-button-next">
						<img src="<?php echo get_template_directory_uri()."/images/icons/swiper-arrow-right.svg" ?>"
							alt="" class="">
					</div>
				</div>
			</div>
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
			<?php get_template_part( 'template-parts/content', 'page' ); ?>
		</section>
		<?php endwhile; // End of the loop. ?>
		<!-- #Main Content -->

		<!-- Additional Content -->

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
get_footer();