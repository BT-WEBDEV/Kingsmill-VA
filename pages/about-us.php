<?php
/**
 * Template Name: About Us
 *
 * Description: About Us
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
        <style> 
            /* TESTIMONIAL STYLING  */
            .swiper-slide {
                height: auto;
                align-self: stretch;  
            }
            .gka-theme-testimonials .testimonials-list {
                background-color: #ECC35D41;  
            }
            .gka-theme-testimonials .testimonials-list .content {
                display: flex; 
                flex-direction: column; 
                padding: 55px 50px; 
            }
            .testimonial-content {
                margin-top: 20px; 
                margin-bottom: 20px;
                font-size: 14px;
                font-style: italic;  
            }
            .testimonial-name {
                font-size: 14px; 
                font-style: italic; 
            }
            .empty-box {
                margin-top: auto; 
            }

            /* SLIDER|CONTENT WIDGET STYLING  */
            .gka-theme-2cols-slider-text {
                background-color: #0356441A; 
            }

            .smooth-scroll {
                margin-top: 20px; 
            }

        </style> 
            <div>
                <div class="gka-theme-testimonials container-fluid p-default">
                    <h1 class="text-center mb-header">Guest Comments</h1>
                    <!-- Slider main container -->
                    <div class="swiper-container gka-theme-testimonials-swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper align-items-center">
                            
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="testimonials-list z-depth-1 h-100">
                                    <div class="content">
                                        <h6 class="mb-0 font-weight-medium"> RIVER AND WOODS GOLF COURSES WERE “STUNNING” </h6>
                                        <div class="testimonial-content">
                                            “The resort is absolutely beautiful. The River and Woods course where stunning. 
                                            We had a great weekend at Kingsmill and would definitely recommend it as a
                                            destination for relaxation and fun!”
                                        </div>
                                        <div class="testimonial-name">
                                            ~ M. Sellers
                                        </div>    
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonials-list z-depth-1 h-100">
                                    <div class="content">
                                        <h6 class="mb-0 font-weight-medium"> WEEK AT THE ESTATE AT KINGSMILL – “BEST EXPERIENCE WE HAVE EVER HAD” </h6>
                                        <div class="testimonial-content">
                                            “We stayed at the Estate House for a week. Laura and Chef Justin, without a doubt, 
                                            gave us the best service and best experience we have ever had. 
                                            We were blown away from the start. Laura even brought me breakfast on the golf course 
                                            because she knew my tee time was too early to eat. 
                                            We had a great time. It was breathtaking to say the least.”
                                        </div>
                                        <div class="testimonial-name">
                                            ~ S. Richardson
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonials-list z-depth-1 h-100">
                                    <div class="content">
                                        <h6 class="mb-0 font-weight-medium"> WCOTTAGES ON THE JAMES – TOP NOTCH ACCOMMODATIONS </h6>
                                        <div class="testimonial-content">
                                            “The accommodations at Kingsmill really are top notch. As a large family, 
                                            we appreciate the spacious Cottages on the James and the complimentary 
                                            transportation services to nearby attractions. 
                                            We can’t wait for our next visit.”
                                        </div>
                                        <div class="testimonial-name">
                                            ~ D. Ryan
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                        </div>

                        <div class="control-wrap">
                            <div class="swiper-button-prev">
                                <img src="<?php echo get_template_directory_uri()."/images/icons/arrow-left.svg" ?>" alt=""
                                    class="">
                            </div>

                            <div class="swiper-pagination"></div>

                            <div class="swiper-button-next">
                                <img src="<?php echo get_template_directory_uri()."/images/icons/arrow-right.svg" ?>" alt=""
                                    class="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

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