<div class="gka-theme-events bg-l-yellow">
    <div class="container py-default">
        <div class="text-center mb-header">
            <h1 class=""><?php echo $title; ?></h1>
            <div><?php echo $text; ?></div>

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
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'tribe_events_cat',
                                'field' => 'slug',
                                'terms' => 'members-only',
                            ),
                        ) 
                        //'cat' => $categories, 
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
</div>