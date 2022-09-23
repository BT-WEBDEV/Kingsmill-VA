<?php
/**
 * Template Name: Meeting Events
 *
 * Description: Meeting Events
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
        <section class="bg-l-yellow">
            <div class="container-fluid p-default">
                <div>
                    <h1 class="text-center mb-header font-weight-medium">Meeting Venues</h1>
                </div>
                <div class="row meeting-venues-image">
                    <div class="col-md-6 mb-3">
                        <div class="">
                            <h5 class="text-center text-green mb-2 font-weight-bold">MEETING SPACE</h5>
                        </div>
                        <a data-fancybox="meeting-venues-image"
                            href="<?php echo get_template_directory_uri()."/images/meeting-events/Floor-Plans-2017.jpg" ?>">
                            <div class="image view overlay">
                                <img src="<?php echo get_template_directory_uri()."/images/meeting-events/Floor-Plans-2017.jpg" ?>"
                                    alt="" class="img-fluid img-fit w-100">
                                <div class="mask rgba-black-strong flex-center cursor-pointer">
                                    <img src="<?php echo get_template_directory_uri()."/images/icons/full-screen-white.svg" ?>"
                                        alt="" class="img-fluid" width="50px" height="50px">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="">
                            <h5 class="text-center text-green mb-2 font-weight-bold">PROPERTY MAP</h5>
                        </div>
                        <a data-fancybox="meeting-venues-image"
                            href="<?php echo get_template_directory_uri()."/images/meeting-events/Resort-Map-Kingsmill-Resort-Williamsburg-VA.jpg" ?>">
                            <div class="image view overlay">
                                <img src="<?php echo get_template_directory_uri()."/images/meeting-events/Resort-Map-Kingsmill-Resort-Williamsburg-VA.jpg" ?>"
                                    alt="" class="img-fluid img-fit w-100">
                                <div class="mask rgba-black-strong flex-center cursor-pointer">
                                    <img src="<?php echo get_template_directory_uri()."/images/icons/full-screen-white.svg" ?>"
                                        alt="" class="img-fluid" width="50px" height="50px">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <p>It’s one thing to have a 16,000 square foot conference center. It’s another to have that center
                        overlooking the historic James River. There’s no such thing as an ordinary meeting at Kingsmill
                        Resort.</p>
                </div>
                <div class="text-center">
                    <a href="/meeting-space" class="custom-btn btn">LEARN MORE</a>
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
get_footer();