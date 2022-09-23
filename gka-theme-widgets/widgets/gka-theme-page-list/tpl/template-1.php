<div id="<?php echo $section_id ?>" class="gka-theme-page-list pt-default" style="background-color: <?php echo $container_color; ?>">
    <?php if($show_title) { ?>
    <div class="text-center">
        <h1 class="mb-header"><?php echo $title; ?></h1>
    </div>
    <?php } ?>
    <div class="gka-theme-page-list-template-1 container-fluid pr-0 pl-default">
        <!-- Slider main container -->
        <div class="swiper-container gka-theme-page-list-swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <?php foreach ($pages as $key => $page) { ?>
                <div class="swiper-slide">
                    <div class="page-list z-depth-1">
                        <div class="view image zoom">

                            <?php if($page['link']) { ?>
                            <a href="<?php echo sow_esc_url($page['link']); ?>">
                                <img src="<?php echo ($page['image']) ? wp_get_attachment_image_src($page['image'], "full")[0] : get_template_directory_uri()."/images/placeholder.jpg" ?>"
                                    alt="<?php echo $page['header'] ?>" class="img-fluid img-fit w-100">
                            </a>
                            <?php } else { ?>
                            <img src="<?php echo ($page['image']) ? wp_get_attachment_image_src($page['image'], "full")[0] : get_template_directory_uri()."/images/placeholder.jpg" ?>"
                                alt="<?php echo $page['header'] ?>" class="img-fluid img-fit w-100">
                            <?php } ?>

                            <div class="mask caption">
                                <div class="content d-flex">
                                    <div class="pr-1 pr-md-3">

                                        <?php if($page['link']) { ?>
                                        <a href="<?php echo sow_esc_url($page['link']); ?>"
                                            class="text-white hover-yellow">
                                            <h3><?php echo $page['header'] ?></h3>
                                        </a>
                                        <?php } else { ?>
                                        <h3><?php echo $page['header'] ?></h3>
                                        <?php } ?>

                                        <p class="mb-0"><?php echo $page['description']; ?></p>
                                    </div>

                                    <?php if($page['link']) { ?>
                                    <div class="align-self-center px-0 px-md-3">
                                        <a href="<?php echo sow_esc_url($page['link']); ?>">
                                            <img class="arrow" src="<?php echo get_template_directory_uri()."/images/icons/link-arrow-yellow.svg" ?>"
                                                alt="Arrow right icon" class="">
                                        </a>
                                    </div>
                                    <?php } ?>
                                    
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
</div>