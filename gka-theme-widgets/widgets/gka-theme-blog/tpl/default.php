<?php
// Blog | Post WP Query
$args = array(  
    'post_type' => 'post',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => $total_post,
    'cat' => $category
); 
$blog = new WP_Query($args);
?>

<div class="gka-theme-blog blog">
    <div class="container-fluid p-default">
        <h1 class="text-center mb-header"><?php echo $title; ?></h1>
        <div class="row justify-content-center">
            <?php while ( $blog->have_posts() ) : $blog->the_post(); ?>
            <div class="col-md-10 col-lg-6">
                <?php if($i < 2) { ?>
                <hr class="divider">
                <?php } ?>
                <div class="blog-list d-flex">
                    <div class="image">
                        <img src="<?php echo (get_the_post_thumbnail_url($post->ID, 'large')) ? : get_template_directory_uri()."/images/placeholder.jpg"; ?>"
                            alt="<?php the_title(); ?>" class="img-fluid img-fit w-100">
                    </div>
                    <div class="content d-flex flex-column justify-content-between">
                        <div>
                            <a href="<?php the_permalink()?>" class="text-black">
                                <h5 class="font-weight-medium"><?php the_title(); ?></h5>
                            </a>
                            <div>
                                <?php echo wp_trim_words(get_the_content(), 10, '...'); ?>
                                <a class="text-yellow" href="<?php the_permalink()?>"> (Read&nbsp;More)</a>
                            </div>
                        </div>
                        <div class="d-flex author-date justify-content-between">
                            <div class="font-weight-medium">
                                by Lorem Ipsum
                            </div>
                            <div class="date">
                                <?php echo get_the_date('M d, Y'); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="divider">
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
        <div class="text-center d-none">
            <a href="" class="btn custom-btn">SEE ALL</a>
        </div>
    </div>
</div>