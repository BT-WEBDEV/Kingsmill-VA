<?php
/**
 * Template Name: Real State
 *
 * Description: Real State
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

        <!-- Additional Content -->
        <section id="real-state-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d101638.33583416024!2d-76.72883744305956!3d37.24300957985969!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b08814b30c7dad%3A0xf34d6930872a8d1b!2s100%20Kingsmill%20Rd%2C%20Williamsburg%2C%20VA%2023185!5e0!3m2!1sen!2sus!4v1627678459251!5m2!1sen!2sus"
                class="w-100" height="550" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section>
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

    </main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();