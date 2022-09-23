<?php
/**
 * Template Name: Real State Blog
 *
 * Description: Real State Blog
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
            <div class="container-fluid p-default">
                <div class="row">
                    <?php 

                    function pagination_bar( $custom_query ) {

                        $total_pages = $custom_query->max_num_pages;
                        $big = 999999999; // need an unlikely integer

                        if ($total_pages > 1){
                            $current_page = max(1, get_query_var('paged'));

                            echo paginate_links(array(
                                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                'format' => '?paged=%#%',
                                'current' => $current_page,
                                'total' => $total_pages,
                                'prev_text' => '<span><img class="left" src="'.get_template_directory_uri().'/images/icons/arrow-square.svg" alt="Prev Page"></span>',
                                'next_text' => '<span><img class="right" src="'.get_template_directory_uri().'/images/icons/arrow-square.svg" alt="Next Page"></span>'
                            ));
                        }
                    }

                    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

                    $args = array(  
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'posts_per_page' => 6,
                        'category_name' => 'kingsmill-realty'
                    ); 

                    $blog = new WP_Query($args);

                    while ( $blog->have_posts() ) : $blog->the_post(); ?>
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="blog-list2">
                            <div class="image">
                                <a href="<?php the_permalink()?>">
                                    <img src="<?php echo (get_the_post_thumbnail_url($post->ID, 'large')) ? : get_template_directory_uri()."/images/placeholder.jpg"; ?>"
                                        alt="<?php the_title(); ?>" class="img-fluid img-fit w-100">
                                </a>
                            </div>
                            <div class="content">
                                <div class="text-green category"></div>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <a href="<?php the_permalink()?>">
                                        <h6 class="font-weight-medium text-black mb-0"><?php the_title(); ?></h6>
                                    </a>
                                    <a href="<?php the_permalink()?>">
                                        <img src="<?php echo get_template_directory_uri()."/images/icons/arrow-square.svg" ?>"
                                            alt="Read More" class="" width="24">
                                    </a>
                                </div>
                                <div class="date">BY <b>Kingsmill Realty</b> ON <?php echo get_the_date('M d, Y'); ?>
                                </div>
                                <div class="desc">
                                    <?php echo wp_trim_words(get_the_content(), 15, '...'); ?>
                                    <a class="font-weight-bold" href="<?php the_permalink()?>"> (Read&nbsp;More)</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                    <?php if(!$blog->have_posts()) { ?>
                    <div class="col-12">
                        <hr>
                        <h5>There are currently no post yet!</h5>
                        <hr>
                    </div>
                    <?php } ?>
                </div>
                <div class="row">
                    <div class="col-12">
                        <nav id="blog-pagination" class="pagination justify-content-center align-items-center">
                            <h1 class="outline">Pagination</h1>
                            <?php pagination_bar( $blog ); ?>
                        </nav>
                    </div>
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