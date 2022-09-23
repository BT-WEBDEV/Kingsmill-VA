<?php
/**
 * Template Name: Meeting Space
 *
 * Description: Meeting Space
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
        <section>
            <div class="container-fluid px-0 pt-default">
                <div class="text-center mb-header">
                    <h1>Meeting Space</h1>
                </div>
                <div class="krr-tab-pills">
                    <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-1-tab" data-toggle="pill" href="#pills-1" role="tab"
                                aria-controls="pills-1" aria-selected="true"><span>INTERACTIVE FLOOR PLANS</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-2-tab" data-toggle="pill" href="#pills-2" role="tab"
                                aria-controls="pills-2" aria-selected="false"><span>RESORT MAP</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container-fluid">
                <div class="">
                    <div class="tab-content pt-3 px-0" id="pills-wedding-menu-content">

                        <div class="tab-pane fade show active" id="pills-1" role="tabpanel"
                            aria-labelledby="pills-1-tab">
                            <div class="container">
                                <div class="py-default">
                                    <div id="interactive-floor-plan">
                                        <?php require get_template_directory() . '/images/meeting-events/krr-meetings-floor-plans.svg'; ?>
                                    </div>

                                    <div id="specs">
                                        <h5 id="room_name" class="w-100 name">Room Specs:</h5>
                                        <div id="Dimensions" class="item">
                                            <img src="<?php echo get_template_directory_uri() . '/images/meeting-events/dimensions.svg'; ?>"
                                                alt="">
                                            <div>
                                                <div class="title">
                                                    Dimensions
                                                </div>
                                                <div class="spec">
                                                    --
                                                </div>
                                            </div>
                                        </div>

                                        <div id="Height" class="item">
                                            <img src="<?php echo get_template_directory_uri() . '/images/meeting-events/dimensions.svg'; ?>"
                                                alt="">
                                            <div>
                                                <div class="title">
                                                    Ceiling & Coffer Height
                                                </div>
                                                <div class="spec">
                                                    --
                                                </div>
                                            </div>
                                        </div>

                                        <div id="SqFt" class="item">
                                            <img src="<?php echo get_template_directory_uri() . '/images/meeting-events/size.svg'; ?>"
                                                alt="">
                                            <div>
                                                <div class="title">
                                                    Sq. Ft.
                                                </div>
                                                <div class="spec">
                                                    --
                                                </div>
                                            </div>
                                        </div>

                                        <div id="Reception" class="item">
                                            <img src="<?php echo get_template_directory_uri() . '/images/meeting-events/reception.svg'; ?>"
                                                alt="">
                                            <div>
                                                <div class="title">
                                                    Reception
                                                </div>
                                                <div class="spec">
                                                    --
                                                </div>
                                            </div>
                                        </div>

                                        <div id="Banquet" class="item">
                                            <img src="<?php echo get_template_directory_uri() . '/images/meeting-events/banquet.svg'; ?>"
                                                alt="">
                                            <div>
                                                <div class="title">
                                                    Banquet
                                                </div>
                                                <div class="spec">
                                                    --
                                                </div>
                                            </div>
                                        </div>

                                        <div id="Theater" class="item">
                                            <img src="<?php echo get_template_directory_uri() . '/images/meeting-events/theatre.svg'; ?>"
                                                alt="">
                                            <div>
                                                <div class="title">
                                                    Theater
                                                </div>
                                                <div class="spec">
                                                    --
                                                </div>
                                            </div>
                                        </div>

                                        <div id="Classroom" class="item">
                                            <img src="<?php echo get_template_directory_uri() . '/images/meeting-events/classroom.svg'; ?>"
                                                alt="">
                                            <div>
                                                <div class="title">
                                                    Classroom
                                                </div>
                                                <div class="spec">
                                                    --
                                                </div>
                                            </div>
                                        </div>

                                        <div id="HollowSquare" class="item">
                                            <img src="<?php echo get_template_directory_uri() . '/images/meeting-events/hollow-square.svg'; ?>"
                                                alt="">
                                            <div>
                                                <div class="title">
                                                    Hollow Square
                                                </div>
                                                <div class="spec">
                                                    --
                                                </div>
                                            </div>
                                        </div>

                                        <div id="U-Shape" class="item">
                                            <img src="<?php echo get_template_directory_uri() . '/images/meeting-events/u-shape.svg'; ?>"
                                                alt="">
                                            <div>
                                                <div class="title">
                                                    U-Shape
                                                </div>
                                                <div class="spec">
                                                    --
                                                </div>
                                            </div>
                                        </div>

                                        <div id="Conference" class="item">
                                            <img src="<?php echo get_template_directory_uri() . '/images/meeting-events/conference.svg'; ?>"
                                                alt="">
                                            <div>
                                                <div class="title">
                                                    Conference
                                                </div>
                                                <div class="spec">
                                                    --
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="text-center">
                                            <a data-fancybox
                                                href="<?php echo get_template_directory_uri() . '/images/meeting-events/Resort-Map-Kingsmill-Resort-Williamsburg-VA.jpg'; ?>">
                                                <img src="<?php echo get_template_directory_uri() . '/images/meeting-events/Resort-Map-Kingsmill-Resort-Williamsburg-VA.jpg'; ?>"
                                                    alt="" class="img-fluid">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section>
            <div class="container-fluid px-0 pt-default">
                <div class="text-center mb-header">
                    <h1>Meeting Spaces Table</h1>
                </div>
                <div class="krr-tab-pills">
                    <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-3-tab" data-toggle="pill" href="#pills-3" role="tab"
                                aria-controls="pills-3" aria-selected="true"><span>CONFERENCE LEVEL</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-4-tab" data-toggle="pill" href="#pills-4" role="tab"
                                aria-controls="pills-4" aria-selected="false"><span>LOBBY LEVEL</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container-fluid">
                <div class="">
                    <div class="tab-content pt-3 px-0" id="pills-wedding-menu-content">

                        <div class="tab-pane fade show active" id="pills-3" role="tabpanel"
                            aria-labelledby="pills-3-tab">
                            3
                        </div>
                        <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab">Ad
                            4
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
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