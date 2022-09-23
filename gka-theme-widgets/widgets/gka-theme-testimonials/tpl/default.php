<?php
// Testimonials | Post WP Query
$args = array(  
    'post_type' => 'testimonials',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => $total_post
); 
$testimonials = new WP_Query($args);
?>
<div>
    <div class="gka-theme-testimonials container-fluid p-default">
        <h1 class="text-center mb-header">Testimonials</h1>
        <!-- Slider main container -->
        <div class="swiper-container gka-theme-testimonials-swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper align-items-center">
                <?php while ( $testimonials->have_posts() ) : $testimonials->the_post(); ?>
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="testimonials-list bg-l-green z-depth-1">
                        <div class="content">
                            <h6 class="mb-0 font-weight-medium"><?php the_title(); ?></h6>
                            <div class="font-weight-medium title">Excepteur occacat cupidata</div>
                            <div>
                                <?php echo the_content(); ?>
                            </div>
                            <div class="star">
                                <img src="<?php echo get_template_directory_uri()."/images/icons/star.svg" ?>" alt=""
                                    class="">
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; wp_reset_postdata(); ?>
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