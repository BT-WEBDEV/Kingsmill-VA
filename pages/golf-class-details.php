<?php
/**
 * Template Name: Class Details Template
 *
 * Description: Class Details Template
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

        <section class="single-package-info py-default">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="d-flex flex-wrap justify-content-right">
                            <div class="left-col image-wrap">
                                <div class="image view">
                                    <img src="<?php echo (get_the_post_thumbnail_url($post->ID, 'large')) ? : get_template_directory_uri()."/images/placeholder.jpg"; ?>"
                                        alt="<?php the_field("header", $post->ID) ?>" class="img-fit img-fluid">
                                    <div class="mask d-flex rgba-black-medium">
                                        <div class="align-self-end">
                                            <div class="line-height-small mb-3">For more information or to make
                                                reservations, please contact the Kingsmill Golf Academy at:</div>
                                            <div class="mb-2">
                                                <a href="mailto:golfacademy@kingsmill.com"
                                                    class="text-yellow">golfacademy@kingsmill.com</a>
                                            </div>
                                            <div class="or-call">
                                                Or Call: <a class="text-white font-weight-normal"
                                                    href="tel:+1-844-738-5784"><b>844-738-5784</b></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content right-col">
                                <div>
                                    <h3><?php the_field("header", $post->ID) ?></h3>
                                    <p>
                                        <?php the_field("description", $post->ID) ?>
                                    </p>
                                </div>
                                <!--Accordion wrapper-->
                                <div class="accordion md-accordion" id="faq-accordion" role="tablist"
                                    aria-multiselectable="true">
                                    <?php 
                                    $dropdown_menus = get_field("dropdown_menu", $post->ID);

                                    foreach ($dropdown_menus as $key => $menu) {
                                    ?>
                                    <!-- Accordion card -->
                                    <div class="card-col">
                                        <div class="card bg-transparent">
                                            <!-- Card header -->
                                            <div class="card-header bg-transparent" role="tab" id="heading<?php echo $key; ?>">
                                                <a class="collapsed" data-toggle="collapse"
                                                    href="#collapse<?php echo $key; ?>" aria-controls="collapse<?php echo $key; ?>">

                                                    <div class="header">
                                                        <h6 class="mb-0 font-weight-bold">
                                                            <?php echo $menu['header']; ?>
                                                        </h6>
                                                        <i class="fas fa-caret-down rotate-icon"></i>
                                                    </div>
                                                </a>
                                            </div>
                                            <!-- Card body -->
                                            <div id="collapse<?php echo $key; ?>" class="collapse <?php echo ($key == 0) ? "show" : ""; ?>" role="tabpanel"
                                                aria-labelledby="heading<?php echo $key; ?>">
                                                <div class="card-body text-black py-2">
                                                    <?php echo $menu['content']; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion card -->
                                    <?php } ?>

                                    <!-- Accordion wrapper -->
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap disclaimer-wrap">
                            <div class="logo d-flex justify-content-md-end align-items-center left-col">
                            </div>
                            <div class="disclaimer right-col">
                                <?php the_field("bottom_copy", $post->ID) ?>
                            </div>
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