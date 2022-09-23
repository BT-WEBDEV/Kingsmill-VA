<?php
/**
 * Template Name: Home
 *
 * Description: Home
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
        <section id="share-experience" class="d-none">
            <div class="center-align">
                <h2><?php // My Kingsmill Moments ?>Kingsmill Resort Photo Contest</h2>
                <p>Show us your favorite moment from your trip to Kingsmill Resort for a chance to win 2 Nights in a
                    Resort
                    Guest Room Plus Complimentary Breakfast for Two and more.</p>
                <?php // <a href="https://kingsmill.stories.travel/invite?contest=My-Kingsmill-Moments-2018-11-01&lang=en" target="_blank" class="btn orange btngold view-more-articles">Submit your photo</a> ?>
                <a href="https://go.flip.to/KingsmillResortStorytellers" target="_blank"
                    class="btn orange btngold view-more-articles">Submit your photo</a>
            </div>
        </section>
        <!-- #Additional Content -->
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();