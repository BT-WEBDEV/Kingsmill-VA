<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gka_theme
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
                <?php get_template_part( 'template-parts/content', get_post_type() ); ?>
            </div>
        </section>
        <?php endwhile; // End of the loop. ?>
        <!-- #Main Content -->

        <!-- Additional Content -->
        <?php if(get_field("package_info_packages", $post->ID)) { ?>
        <section class="single-package-info py-default">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="d-flex flex-wrap justify-content-right">
                            <div class="left-col image-wrap">
                                <div class="image view">
                                    <img src="<?php echo (get_the_post_thumbnail_url($post->ID, 'large')) ? : get_template_directory_uri()."/images/placeholder.jpg"; ?>"
                                        alt="<?php the_title(); ?>" class="img-fit img-fluid">
                                    <div class="mask d-flex rgba-black-light">
                                        <div class="align-self-end">
                                            <h5><?php the_title(); ?></h5>
                                            <div>
                                                <?php if(get_field("link_packages", $post->ID)) { ?>
                                                <a target="_blank" href="<?php the_field("link_packages", $post->ID) ?>"
                                                    class="btn custom-btn bg-d-yellow">BOOK NOW</a>
                                                <?php } ?>
                                            </div>
                                            <div class="or-call">
                                                Or Call: <a class="text-white font-weight-normal"
                                                    href="tel:+1-844-738-5784">844-738-5784</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content right-col">
                                <div>
                                    <?php the_field("package_info_packages", $post->ID); ?>
                                </div>
                                <div>
                                    <a class="links" href="">
                                        View Limited Services <br>
                                        & COVID-19 Procedures <img
                                            src="<?php echo get_template_directory_uri()."/images/icons/arrow-square.svg" ?>"
                                            alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap disclaimer-wrap">
                            <div class="logo d-flex justify-content-md-end align-items-center left-col">
                                <img class="img-fluid"
                                    src="<?php echo get_template_directory_uri()."/images/packages/safe-stay.png" ?>"
                                    alt="">
                                <img class="img-fluid"
                                    src="<?php echo get_template_directory_uri()."/images/packages/tripadvisor.png" ?>"
                                    alt="">
                            </div>
                            <div class="disclaimer right-col">
                                <i><?php the_field("disclaimer_packages", $post->ID); ?></i>
                            </div>
                        </div>
                        <div class="text-center my-3">
                            <a href="" class="btn custom-btn">VIEW MORE PACKAGES</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php } ?>
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
// get_sidebar();
get_footer();