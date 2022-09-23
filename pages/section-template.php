<?php
/**
 * Template Name: Section
 *
 * Description: Section
 *
 * @package WordPress
 * @subpackage REDI
 * @since REDI 1.0
 */
get_header(); 
?>
<div id="primary" class="content-area nav-space">
    <main id="main" class="site-main">

        <!-- Additional Content -->

        <!-- Page List Template 1 -->
        <section class="gka-theme-page-list">
            <div class="gka-theme-page-list-template-1 container-fluid pr-0 pl-default">
                <!-- Slider main container -->
                <div class="swiper-container gka-theme-page-list-swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <?php for ($i=0; $i < 6; $i++) { ?>
                        <div class="swiper-slide">
                            <div class="page-list z-depth-1">
                                <div class="view image zoom">
                                    <img src="<?php echo get_template_directory_uri()."/images/placeholder.jpg" ?>"
                                        alt="" class="img-fluid img-fit w-100">
                                    <div class="mask caption">
                                        <div class="content d-flex">
                                            <div class="pr-1 pr-md-3">
                                                <a href="" class="text-white hover-yellow">
                                                    <h3>Resort</h3>
                                                </a>
                                                <p class="mb-0">Excepteur sint occaecat cupidatat non proident, laoreet
                                                    dolore magna
                                                    aliquam erat volutpat.</p>
                                            </div>
                                            <div class="align-self-center px-0 px-md-3">
                                                <a href="">
                                                    <img src="<?php echo get_template_directory_uri()."/images/icons/link-arrow-yellow.svg" ?>"
                                                        alt="" class="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
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
        </section>
        <!-- #Page List Template 1 -->

        <!-- Page List Template 2 -->
        <section class="bg-l-green gka-theme-page-list">
            <div class="gka-theme-page-list-template-2 container-fluid p-default">
                <div class="row justify-content-center">
                    <?php for ($i=0; $i < 4; $i++) { ?>
                    <div class="col-sm-6 col-md-4 col-xl-3">
                        <div class="page-list">
                            <div class="image view">
                                <img src="<?php echo get_template_directory_uri()."/images/placeholder.jpg" ?>" alt=""
                                    class="img-fluid img-fit w-100">
                            </div>
                            <div class="content">
                                <div class="d-flex justify-content-between align-items-center mb-1 mb-md-2">
                                    <h5 class="mb-0 text-green font-weight-medium">Accommodations</h5>
                                    <a href=""><img
                                            src="<?php echo get_template_directory_uri()."/images/icons/link-arrow.svg" ?>"
                                            alt="" width="28px"></a>
                                </div>

                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                    nonummy nibh</p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <!-- #Page List Template 2 -->

        <!-- Page List Template 3 -->
        <section class="gka-theme-page-list">
            <div class="gka-theme-page-list-template-3 container-fluid p-default">
                <h1 class="text-center mb-header">Golf Packages</h1>
                <div class="row">
                    <?php for ($i=0; $i < 7; $i++) { ?>
                    <div class="col-sm-6 col-md-4 col-xl-3">
                        <div class="page-list">
                            <div class="image view">
                                <img src="<?php echo get_template_directory_uri()."/images/placeholder.jpg" ?>" alt=""
                                    class="img-fluid img-fit w-100">
                                <div class="mask caption">
                                    <div class="content flex-fill">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h6 class="mb-0">Package #1</h6>
                                            <a href=""><img
                                                    src="<?php echo get_template_directory_uri()."/images/icons/link-arrow-white.svg" ?>"
                                                    alt="" width="28px"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <!-- #Page List Template 3 -->

        <!-- Page List Template 4 -->
        <section class="gka-theme-page-list">
            <div class="gka-theme-page-list-template-4 container-fluid p-default">
                <div class="row justify-content-center">
                    <?php for ($i=0; $i < 7; $i++) { ?>
                    <div class="col-sm-6 col-lg-4">
                        <div class="page-list">
                            <div class="content">
                                <h2 class="mb-0 font-weight-normal">Greens Fees</h2>
                                <p>Excepteur sint occaecat cupidatat non proident.</p>
                                <div>
                                    <a href="" class="btn custom-btn bg-d-yellow">LEARN MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <!-- #Page List Template 4 -->

        <!-- Page List Template 5 -->
        <section class="gka-theme-page-list">
            <div class="gka-theme-page-list-template-5 container-fluid p-default">
                <h1 class="text-center mb-header">Our Wedding Venues</h1>
                <div class="row justify-content-center">
                    <?php for ($i=0; $i < 2; $i++) { ?>
                    <div class="col-sm-6 col-lg-5">
                        <div class="page-list">
                            <div class="view image zoom">
                                <img src="<?php echo get_template_directory_uri()."/images/placeholder.jpg" ?>" alt=""
                                    class="img-fluid img-fit w-100">
                                <div class="mask caption">
                                    <div class="content d-flex">
                                        <div class="pr-0 pr-md-3">
                                            <h3>Resort</h3>
                                            <p class="mb-0">Excepteur sint occaecat cupidatat non proident, laoreet
                                                dolore magna
                                                aliquam erat volutpat.</p>
                                        </div>
                                        <div class="align-self-center px-0 px-md-3">
                                            <a href="">
                                                <img src="<?php echo get_template_directory_uri()."/images/icons/link-arrow-yellow.svg" ?>"
                                                    alt="" class="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <!-- #Page List Template 5 -->

        <!-- Blog List -->
        <section class="blog">
            <div class="container-fluid p-default">
                <h1 class="text-center mb-header">Blog Listings</h1>
                <div class="row justify-content-center">
                    <?php for ($i=0; $i < 6; $i++) { ?>
                    <div class="col-md-10 col-lg-6">
                        <?php if($i < 2) { ?>
                        <hr class="divider">
                        <?php } ?>
                        <div class="blog-list d-flex">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri()."/images/placeholder.jpg" ?>" alt=""
                                    class="img-fluid img-fit w-100">
                            </div>
                            <div class="content d-flex flex-column justify-content-between">
                                <div>
                                    <h5 class="font-weight-medium">Lorem ipsum dolor sit amet, con</h5>
                                    <div>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,</div>
                                </div>
                                <div class="d-flex author-date justify-content-between">
                                    <div class="font-weight-medium">
                                        by Lorem Ipsum
                                    </div>
                                    <div class="date">
                                        April 23, 2021
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr class="divider">
                    </div>
                    <?php } ?>
                </div>
                <div class="text-center">
                    <a href="" class="btn custom-btn">READ MORE</a>
                </div>
            </div>
        </section>
        <!-- #Blog List -->

        <!-- Testimonials -->
        <section>
            <div class="gka-theme-testimonials container-fluid p-default">
                <h1 class="text-center mb-header">Testimonials</h1>
                <!-- Slider main container -->
                <div class="swiper-container gka-theme-testimonials-swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <?php for ($i=0; $i < 7; $i++) { ?>
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="testimonials-list bg-l-green z-depth-1">
                                <div class="content">
                                    <h6 class="mb-0 font-weight-medium">Name Lastname</h6>
                                    <div class="font-weight-medium title">Excepteur occacat cupidata</div>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                        nonummy nibh euismod
                                        tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                                        veniam,
                                        quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
                                        commodo
                                        consequat. </p>
                                    <div class="star">
                                        <img src="<?php echo get_template_directory_uri()."/images/icons/star.svg" ?>"
                                            alt="" class="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
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
        </section>
        <!-- #Testimonials -->

        <!-- Newsletter -->
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
        <!-- #Newsletter -->

        <!-- Contact Us -->
        <section class="gka-theme-form">
            <div class="contact-bg">
                <div class="container py-default">
                    <div class="welcome pb-0">
                        <span class="sub-header">LOREM IPSUM DOLOR</span>
                        <h1 class="text-black font-weight-normal">CONTACT FORM</h1>
                    </div>
                    <?php echo do_shortcode('[wpforms id="83"]'); ?>
                </div>
            </div>
        </section>
        <!-- #Contact Us -->

        <!-- Welcome text -->
        <section>
            <div class="container">
                <div class="welcome">
                    <div class="sub-header">LOREM IPSUM DOLOR</div>
                    <h1>INTRO TEXT</h1>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                        ut laoreet dolore magna aliquam erat volutpat. Tation ullamcorper suscipit lobortis nisl ut
                        aliquip. </p>
                </div>
            </div>
        </section>
        <!-- #Welcome text -->

        <!-- 2 Cols text -->
        <div class="sub-header" style="text-align: left;">Lorem ipsum dolor</div>
        <h1 style="text-align: left;">Lorem Ipsum</h1>
        <p style="text-align: left;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
            exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
        <!-- #2 Cols text -->

        <!-- Slider | Content -->
        <section>
            <div class="gka-theme-2cols-slider-text">
                <div class="container-fluid py-default">
                    <div class="row align-items-center">
                        <div class="col-md-6 px-default">
                            <div class="content">
                                <h1>Resort Amenities</h1>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod
                                    tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            </div>
                        </div>
                        <div class="col-md-6 p-0">
                            <div class="slider">
                                <!-- Slider main container -->
                                <div class="swiper-container gka-theme-gallery-swiper">
                                    <!-- Additional required wrapper -->
                                    <div class="swiper-wrapper">
                                        <?php for ($i=0; $i < 6; $i++) { ?>
                                        <!-- Slides -->
                                        <div class="swiper-slide">
                                            <div class="image">
                                                <img src="<?php echo get_template_directory_uri()."/images/placeholder.jpg" ?>"
                                                    alt="" class="img-fluid img-fit w-100">
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>

                                    <div class="control-wrap pr-default">
                                        <div class="swiper-button-prev">
                                            <img src="<?php echo get_template_directory_uri()."/images/icons/arrow-left.svg" ?>"
                                                alt="" class="">
                                        </div>

                                        <div class="swiper-pagination"></div>

                                        <div class="swiper-button-next">
                                            <img src="<?php echo get_template_directory_uri()."/images/icons/arrow-right.svg" ?>"
                                                alt="" class="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- #Slider | Content -->

        <!-- Events -->
        <section class="bg-l-yellow">
            <div class="container py-default">
                <div class="text-center mb-header">
                    <h1 class="">Event Calendar</h1>
                    <div class="text-green font-weight-bold">MAY 2021</div>
                </div>
                <div class="row">
                    <?php 
                    
                    // Blog | Post WP Query
                    $args = array(  
                        'post_type' => 'tribe_events',
                        'post_status' => 'publish',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'posts_per_page' => $total_post,
                        'cat' => $category
                    ); 
                    $blog = new WP_Query($args);

                    while ( $blog->have_posts() ) : $blog->the_post(); ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="event-list">
                            <div class="content">
                                <div class="date text-right"><i
                                        class="far fa-clock"></i><?php echo date_format(date_create(get_field("_EventStartDate", $post->ID)), 'm/d/Y G:iA'); ?>
                                </div>
                                <h6><?php the_title(); ?></h6>
                                <div class="details d-flex">
                                    <div class="mr-3"><i class="fal fa-map-marker-alt"></i> Lorem Ipsum</div>
                                    <div><i class="fal fa-user"></i> 29 members</div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>
        </section>
        <!-- #Events -->

        <!-- Gallery -->
        <section>
            <div class="container-fluid px-0 py-default">
                <!-- Slider main container -->
                <div class="swiper-container gka-theme-video-swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <?php for ($i=0; $i < 6; $i++) { ?>
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri()."/images/placeholder.jpg" ?>" alt=""
                                    class="img-fluid img-fit w-100">
                            </div>
                        </div>
                        <?php } ?>
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
        </section>

        <section class="gka-theme-gallery-section py-default">
            <h1 class="text-center mb-header">Photo Gallery</h1>
            <div class="container position-relative">
                <!-- Slider main container -->
                <div class="swiper-container gka-theme-gallery-swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <?php for ($i=0; $i < 6; $i++) { ?>
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri()."/images/placeholder.jpg" ?>" alt=""
                                    class="img-fluid img-fit w-100">
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="control-wrap justify-content-center">
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="swiper-button-prev">
                    <img src="<?php echo get_template_directory_uri()."/images/icons/swiper-arrow-left.svg" ?>" alt=""
                        class="">
                </div>
                <div class="swiper-button-next">
                    <img src="<?php echo get_template_directory_uri()."/images/icons/swiper-arrow-right.svg" ?>" alt=""
                        class="">
                </div>
            </div>
        </section>
        <!-- #Gallery -->

        <!-- #Additional Content -->

    </main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();