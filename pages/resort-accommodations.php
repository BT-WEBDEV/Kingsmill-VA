<?php
/**
 * Template Name: Resort Accommodations Page Template
 *
 * Description: Resort Accommodations Page Template
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
            <div class="container">
                <?php get_template_part( 'template-parts/content', 'page' ); ?>
            </div>
        </section>
        <?php endwhile; // End of the loop. ?>
        <!-- #Main Content -->

        <!-- Additional Content -->
        <section class="accommodation-list-section">
            <div class="container">
                <div class="accommodation-list">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-lg-5 p-0 image-wrap">
                            <div class="image z-depth-1">
                                <img src="<?php echo get_template_directory_uri()."/images/placeholder.jpg" ?>" alt=""
                                    class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 p-0">
                            <div class="content">
                                <h2 class="text-green">Guest Rooms & Condos</h2>
                                <div>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                        euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                        minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                                        aliquip ex ea commodo consequat. </p>
                                </div>
                                <div class="pt-2">
                                    <a href=""
                                        class="text-green font-weight-bold underline d-flex align-items-center">LEARN
                                        MORE <img class="ml-2" width="22"
                                            src="<?php echo get_template_directory_uri()."/images/icons/arrow-square.svg" ?>"
                                            alt="Arrow"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accommodation-list">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-lg-5 p-0 image-wrap image-wrap-reverse order-md-2">
                            <div class="image z-depth-1">
                                <img src="<?php echo get_template_directory_uri()."/images/placeholder.jpg" ?>" alt=""
                                    class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 p-0 order-md-1">
                            <div class="content">
                                <h2 class="text-green">Guest Rooms & Condos</h2>
                                <div>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                        euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                        minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                                        aliquip ex ea commodo consequat. </p>
                                </div>
                                <div class="pt-2">
                                    <a href=""
                                        class="text-green font-weight-bold underline d-flex align-items-center">LEARN
                                        MORE <img class="ml-2" width="22"
                                            src="<?php echo get_template_directory_uri()."/images/icons/arrow-square.svg" ?>"
                                            alt="Arrow"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accommodation-list">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-lg-5 p-0 image-wrap">
                            <div class="image z-depth-1">
                                <img src="<?php echo get_template_directory_uri()."/images/placeholder.jpg" ?>" alt=""
                                    class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 p-0">
                            <div class="content">
                                <h2 class="text-green">Guest Rooms & Condos</h2>
                                <div>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                        euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                        minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                                        aliquip ex ea commodo consequat. </p>
                                </div>
                                <div class="pt-2">
                                    <a href=""
                                        class="text-green font-weight-bold underline d-flex align-items-center">LEARN
                                        MORE <img class="ml-2" width="22"
                                            src="<?php echo get_template_directory_uri()."/images/icons/arrow-square.svg" ?>"
                                            alt="Arrow"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container py-default">
                <div class="text-center">
                    <img class="mb-2" width="90"
                        src="<?php echo get_template_directory_uri()."/images/accommodations/dog-paw.png" ?>" alt="Arrow">
                    <h1>Pet Friendly Rooms</h1>
                    <p>At Kingsmill Resort, we’re thrilled to welcome you and your furry friends with open arms and
                        paws. As a pet-friendly property, we cater to your pets with the same level of care as any of
                        our guests. We’ve designated a selection of guest rooms that are available for you to bring up
                        to two dogs or cats when you stay with us. Plus, with a resort layout that offers plenty of
                        areas to stretch all four legs, Kingsmill provides the perfect atmosphere for your travel
                        partner.</p>
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