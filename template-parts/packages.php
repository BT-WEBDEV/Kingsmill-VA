<section>
    <div class="container py-default">
        <div class="row justify-content-center">
            <?php
            $args = array(  
                'post_type' => 'packages',
                'post_status' => 'publish',
                'orderby' => 'date',
                'order' => 'DESC',
                'posts_per_page' => 10,
                'packages_cat' => $packages_cat
            ); 
            $featured_blog = new WP_Query($args);
            
            while ( $featured_blog->have_posts() ) : $featured_blog->the_post();
            ?>
            <div class="col-6 col-md-4 col-lg-3 golf-package-list">
                <div class="image view">
                    <img src="<?php echo (get_the_post_thumbnail_url($post->ID, 'large')) ? : get_template_directory_uri()."/images/placeholder.jpg"; ?>"
                        class="img-fluid img-fit" alt="<?php the_title(); ?>">
                    <div class="mask rgba-black-light content d-flex">
                        <div class="align-self-end">
                            <h4 class="mb-2 font-weight-light"><?php the_title(); ?></h4>
                            <p class="mb-0"><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink($post->ID); ?>"
                                class="text-white underline learn-more mb-2 d-inline-block">Learn More</a>
                            <div>
                                <?php if(get_field("link_packages", $post->ID)) { ?>
                                <a target="_blank" href="<?php the_field("link_packages", $post->ID) ?>" class="btn custom-btn bg-d-yellow">BOOK NOW</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</section>