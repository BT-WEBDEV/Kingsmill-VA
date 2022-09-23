<?php
/**
 * Template Name: Site Map
 *
 * Description: Site Map
 *
 * @package WordPress
 * @subpackage REDI
 * @since REDI 1.0
 */
get_header();
?>
<div id="primary" class="content-area nav-space">
    <main id="main" class="site-main">
        <h1 class="outline">Main</h1>

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

        <section>
            <div class="container py-default">
                <div>
                    <h1 class="mb-header text-blue font-weight-bold">SITE MAP</h1>
                </div>
                <div class="row">
                    <?php $pages = get_pages(); ?>
                    <!-- Resort -->
                    <ul class="col-md-3 list-unstyled">
                        <?php
                        foreach ( $pages as $page ) {
                            if($page->ID == 17) {
                           
                            
                            if($page->post_parent == 0) {
                                $child_navs = [];
                                foreach ( $pages as $child_page ) {
                                    if($page->ID == $child_page->post_parent) {
                                        $child_navs[$child_page->ID]['parent'] = ' <li class="my-1 mb-2">
                                                                            <a href="' . get_page_link( $child_page->ID ) . '" class="text-blue font-weight-normal">' . $child_page->post_title . '</a>
                                                                        </li>';
                                        foreach ( $pages as $child_child_page ) {
                                            if($child_page->ID == $child_child_page->post_parent) {
                                                $child_navs[$child_page->ID]['child'] .= '  <li class="my-1 mb-2">
                                                                                                <a href="' . get_page_link( $child_child_page->ID ) . '" class="text-blue font-weight-normal">' . $child_child_page->post_title . '</a>
                                                                                            </li>';
                                            }
                                        }
                                    }
                                }
                        ?>
                        <?php if($child_navs) { ?>
                        <li class="ml-3 my-1">
                            <a href="<?php echo get_page_link( $page->ID ); ?> " class="text-blue font-weight-normal">
                                <h5 class="font-weight-medium"><?php echo $page->post_title; ?>:</h5>
                            </a>
                            <ul>
                                <?php foreach ($child_navs as $child_nav) {
                                    echo $child_nav['parent'];
                                    if($child_nav['child']) {
                                        echo '<ul>' . $child_nav['child'] . '</ul>';
                                    }
                                } ?>
                            </ul>
                        </li>
                        <?php } } } } ?>
                    </ul>

                    <!-- Golf -->
                    <ul class="col-md-3 list-unstyled">
                        <?php
                        foreach ( $pages as $page ) {
                            if($page->ID == 19) {
                           
                            
                            if($page->post_parent == 0) {
                                $child_navs = [];
                                foreach ( $pages as $child_page ) {
                                    if($page->ID == $child_page->post_parent) {
                                        $child_navs[$child_page->ID]['parent'] = ' <li class="my-1 mb-2">
                                                                            <a href="' . get_page_link( $child_page->ID ) . '" class="text-blue font-weight-normal">' . $child_page->post_title . '</a>
                                                                        </li>';
                                        foreach ( $pages as $child_child_page ) {
                                            if($child_page->ID == $child_child_page->post_parent) {
                                                $child_navs[$child_page->ID]['child'] .= '  <li class="my-1 mb-2">
                                                                                                <a href="' . get_page_link( $child_child_page->ID ) . '" class="text-blue font-weight-normal">' . $child_child_page->post_title . '</a>
                                                                                            </li>';
                                            }
                                        }
                                    }
                                }
                        ?>
                        <?php if($child_navs) { ?>
                        <li class="ml-3 my-1">
                            <a href="<?php echo get_page_link( $page->ID ); ?> " class="text-blue font-weight-normal">
                                <h5 class="font-weight-medium"><?php echo $page->post_title; ?>:</h5>
                            </a>
                            <ul>
                                <?php foreach ($child_navs as $child_nav) {
                                    echo $child_nav['parent'];
                                    if($child_nav['child']) {
                                        echo '<ul>' . $child_nav['child'] . '</ul>';
                                    }
                                } ?>
                            </ul>
                        </li>
                        <?php } } } } ?>
                    </ul>

                    <!-- Meeting & Events -->
                    <ul class="col-md-3 list-unstyled">
                        <?php
                        foreach ( $pages as $page ) {
                            if($page->ID == 21) {
                           
                            
                            if($page->post_parent == 0) {
                                $child_navs = [];
                                foreach ( $pages as $child_page ) {
                                    if($page->ID == $child_page->post_parent) {
                                        $child_navs[$child_page->ID]['parent'] = ' <li class="my-1 mb-2">
                                                                            <a href="' . get_page_link( $child_page->ID ) . '" class="text-blue font-weight-normal">' . $child_page->post_title . '</a>
                                                                        </li>';
                                        foreach ( $pages as $child_child_page ) {
                                            if($child_page->ID == $child_child_page->post_parent) {
                                                $child_navs[$child_page->ID]['child'] .= '  <li class="my-1 mb-2">
                                                                                                <a href="' . get_page_link( $child_child_page->ID ) . '" class="text-blue font-weight-normal">' . $child_child_page->post_title . '</a>
                                                                                            </li>';
                                            }
                                        }
                                    }
                                }
                        ?>
                        <?php if($child_navs) { ?>
                        <li class="ml-3 my-1">
                            <a href="<?php echo get_page_link( $page->ID ); ?> " class="text-blue font-weight-normal">
                                <h5 class="font-weight-medium"><?php echo $page->post_title; ?>:</h5>
                            </a>
                            <ul>
                                <?php foreach ($child_navs as $child_nav) {
                                    echo $child_nav['parent'];
                                    if($child_nav['child']) {
                                        echo '<ul>' . $child_nav['child'] . '</ul>';
                                    }
                                } ?>
                            </ul>
                        </li>
                        <?php } } } } ?>
                    </ul>

                    <!-- Wedding -->
                    <ul class="col-md-3 list-unstyled">
                        <?php
                        foreach ( $pages as $page ) {
                            if($page->ID == 23) {
                           
                            
                            if($page->post_parent == 0) {
                                $child_navs = [];
                                foreach ( $pages as $child_page ) {
                                    if($page->ID == $child_page->post_parent) {
                                        $child_navs[$child_page->ID]['parent'] = ' <li class="my-1 mb-2">
                                                                            <a href="' . get_page_link( $child_page->ID ) . '" class="text-blue font-weight-normal">' . $child_page->post_title . '</a>
                                                                        </li>';
                                        foreach ( $pages as $child_child_page ) {
                                            if($child_page->ID == $child_child_page->post_parent) {
                                                $child_navs[$child_page->ID]['child'] .= '  <li class="my-1 mb-2">
                                                                                                <a href="' . get_page_link( $child_child_page->ID ) . '" class="text-blue font-weight-normal">' . $child_child_page->post_title . '</a>
                                                                                            </li>';
                                            }
                                        }
                                    }
                                }
                        ?>
                        <?php if($child_navs) { ?>
                        <li class="ml-3 my-1">
                            <a href="<?php echo get_page_link( $page->ID ); ?> " class="text-blue font-weight-normal">
                                <h5 class="font-weight-medium"><?php echo $page->post_title; ?>:</h5>
                            </a>
                            <ul>
                                <?php foreach ($child_navs as $child_nav) {
                                    echo $child_nav['parent'];
                                    if($child_nav['child']) {
                                        echo '<ul>' . $child_nav['child'] . '</ul>';
                                    }
                                } ?>
                            </ul>
                        </li>
                        <?php } } } } ?>
                    </ul>

                    <!-- Real State -->
                    <ul class="col-md-3 list-unstyled">
                        <?php
                        foreach ( $pages as $page ) {
                            if($page->ID == 25) {
                           
                            
                            if($page->post_parent == 0) {
                                $child_navs = [];
                                foreach ( $pages as $child_page ) {
                                    if($page->ID == $child_page->post_parent) {
                                        $child_navs[$child_page->ID]['parent'] = ' <li class="my-1 mb-2">
                                                                            <a href="' . get_page_link( $child_page->ID ) . '" class="text-blue font-weight-normal">' . $child_page->post_title . '</a>
                                                                        </li>';
                                        foreach ( $pages as $child_child_page ) {
                                            if($child_page->ID == $child_child_page->post_parent) {
                                                $child_navs[$child_page->ID]['child'] .= '  <li class="my-1 mb-2">
                                                                                                <a href="' . get_page_link( $child_child_page->ID ) . '" class="text-blue font-weight-normal">' . $child_child_page->post_title . '</a>
                                                                                            </li>';
                                            }
                                        }
                                    }
                                }
                        ?>
                        <?php if($child_navs) { ?>
                        <li class="ml-3 my-1">
                            <a href="<?php echo get_page_link( $page->ID ); ?> " class="text-blue font-weight-normal">
                                <h5 class="font-weight-medium"><?php echo $page->post_title; ?>:</h5>
                            </a>
                            <ul>
                                <?php foreach ($child_navs as $child_nav) {
                                    echo $child_nav['parent'];
                                    if($child_nav['child']) {
                                        echo '<ul>' . $child_nav['child'] . '</ul>';
                                    }
                                } ?>
                            </ul>
                        </li>
                        <?php } } } } ?>
                    </ul>

                    <!-- Membership -->
                    <ul class="col-md-3 list-unstyled">
                        <?php
                        foreach ( $pages as $page ) {
                            if($page->ID == 183) {
                           
                            
                            if($page->post_parent == 0) {
                                $child_navs = [];
                                foreach ( $pages as $child_page ) {
                                    if($page->ID == $child_page->post_parent) {
                                        $child_navs[$child_page->ID]['parent'] = ' <li class="my-1 mb-2">
                                                                            <a href="' . get_page_link( $child_page->ID ) . '" class="text-blue font-weight-normal">' . $child_page->post_title . '</a>
                                                                        </li>';
                                        foreach ( $pages as $child_child_page ) {
                                            if($child_page->ID == $child_child_page->post_parent) {
                                                $child_navs[$child_page->ID]['child'] .= '  <li class="my-1 mb-2">
                                                                                                <a href="' . get_page_link( $child_child_page->ID ) . '" class="text-blue font-weight-normal">' . $child_child_page->post_title . '</a>
                                                                                            </li>';
                                            }
                                        }
                                    }
                                }
                        ?>
                        <?php if($child_navs) { ?>
                        <li class="ml-3 my-1">
                            <a href="<?php echo get_page_link( $page->ID ); ?> " class="text-blue font-weight-normal">
                                <h5 class="font-weight-medium"><?php echo $page->post_title; ?>:</h5>
                            </a>
                            <ul>
                                <?php foreach ($child_navs as $child_nav) {
                                    echo $child_nav['parent'];
                                    if($child_nav['child']) {
                                        echo '<ul>' . $child_nav['child'] . '</ul>';
                                    }
                                } ?>
                            </ul>
                        </li>
                        <?php } } } } ?>
                    </ul>

                    <!-- Pages -->
                    <ul class="col-md-3 list-unstyled">
                        <h5 class="font-weight-medium text-blue">Pages:</h5>
                        <?php
                        $pages = get_pages();
                        foreach ( $pages as $page ) {
                            if($page->ID != 17 && $page->ID != 19 && $page->ID != 21 && $page->ID != 23 && $page->ID != 25 && $page->ID != 183) {
                            $child_nav = '';
                            if($page->post_parent == 0) {
                                foreach ( $pages as $child_page ) {
                                    if($page->ID == $child_page->post_parent) {
                                    $child_nav .= ' <li class="my-1 mb-2">
                                                        <a href="' . get_page_link( $child_page->ID ) . '" class="text-blue font-weight-normal">' . $child_page->post_title . '</a>
                                                    </li>';
                                    }
                                }
                        ?>
                        <?php if($child_nav) { ?>
                        <li class="ml-3 my-1">
                            <a href="<?php echo get_page_link( $page->ID ); ?> "
                                class="text-blue font-weight-normal"><?php echo $page->post_title; ?></a>
                            <ul>
                                <?php echo $child_nav; ?>
                            </ul>
                        </li>
                        <?php } else { ?>
                        <li class="ml-3 my-1">
                            <a href="<?php echo get_page_link( $page->ID ); ?> "
                                class="text-blue font-weight-normal"><?php echo $page->post_title; ?></a>
                        </li>
                        <?php } } } } ?>
                    </ul>

                    <!-- Packages -->
                    <ul class="col-md-3 list-unstyled">
                        <li class="ml-3 my-1">
                            <h5 class="font-weight-medium text-blue">Packages:</h5>
                        </li>
                        <ul>
                            <?php
                            $args = array(  
                                'post_type' => 'packages',
                                'post_status' => 'publish',
                                'orderby' => 'title',
                                'order' => 'ASC'
                            ); 

                            $post_type = new WP_Query($args);

                            while ( $post_type->have_posts() ) : $post_type->the_post();
                            ?>
                            <li class="ml-3 my-1">
                                <a href="<?php echo get_page_link( $post->ID ); ?> "
                                    class="text-blue font-weight-normal"><?php echo $post->post_title; ?></a>
                            </li>
                            <?php endwhile; wp_reset_postdata(); ?>
                        </ul>
                    </ul>

                    <!-- News -->
                    <ul class="col-md-3 list-unstyled">
                        <li class="ml-3 my-1">
                            <h5 class="font-weight-medium text-blue">News & Events:</h5>
                        </li>
                        <ul>
                            <?php
                            $posts = get_posts();
                            foreach ( $posts as $post ) {
                            ?>
                            <li class="ml-3 my-1">
                                <a href="<?php echo get_page_link( $post->ID ); ?> "
                                    class="text-blue font-weight-normal"><?php echo $post->post_title; ?>
                                </a>
                            </li>
                            <?php } ?>
                        </ul>
                    </ul>

                    <!-- Custom Post Type -->
                    <ul class="col-md-3 list-unstyled d-none">
                        <li class="ml-3 my-1">
                            <h5 class="font-weight-medium text-blue">Custom Post Type:</h5>
                        </li>
                        <ul>
                            <?php
                            $args = array(  
                                'post_type' => 'custom_post_type',
                                'post_status' => 'publish',
                                'orderby' => 'title',
                                'order' => 'ASC'
                            ); 

                            $post_type = new WP_Query($args);

                            while ( $post_type->have_posts() ) : $post_type->the_post();
                            ?>
                            <li class="ml-3 my-1">
                                <a href="<?php echo get_page_link( $post->ID ); ?> "
                                    class="text-blue font-weight-normal"><?php echo $post->post_title; ?></a>
                            </li>
                            <?php endwhile; wp_reset_postdata(); ?>
                        </ul>
                    </ul>

                </div>
            </div>
        </section>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();