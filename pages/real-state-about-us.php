<?php
/**
 * Template Name: Real State About Us
 *
 * Description: Real State About Us
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
        <section class="bg-l-green">
            <div class="container-fluid p-default">
                <div class="text-center mb-header">
                    <h1>Meet Our Team</h1>
                </div>
                <div class="row">
                    <?php 

                    $args = array(  
                        'post_type' => 'employees',
                        'post_status' => 'publish',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'posts_per_page' => 10
                    ); 
                    
                    $employees = new WP_Query($args);

                    while ( $employees->have_posts() ) : $employees->the_post(); ?>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="team-member">
                            <div class="image">
                                <img src="<?php echo (get_the_post_thumbnail_url($post->ID, 'large')) ? : get_template_directory_uri()."/images/placeholder.jpg"; ?>"
                                    alt="" class="img-fluid img-fit">
                            </div>
                            <div class="mt-2">
                                <div class="d-flex justify-content-between">
                                    <h5 class="text-green mb-0"><?php the_title(); ?></h5>
                                    <a href="" class="d-none">
                                        <img src="<?php echo get_template_directory_uri()."/images/icons/link-arrow.svg" ?>"
                                            alt="Learn More" width="28px">
                                    </a>
                                </div>

                                <div class="title">Position: <?php the_field("employee_title", $post->ID); ?></div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>
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