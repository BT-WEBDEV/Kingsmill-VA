<?php
$slider = gka_theme_get_gallery($slider_id);
?>
<div class="gka-theme-2cols-slider-text" style="background-color: <?php echo $container_color; ?>">
    <div class="container-fluid py-default">
        <div class="row align-items-center">
            <div class="col-md-6 p-0 order-md-<?php echo $order; ?>">
                <div class="slider">
                    <!-- Slider main container -->
                    <div class="swiper-container gka-theme-gallery-swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <?php foreach ($slider as $key => $image) { ?>
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="image">
                                    <img src="<?php echo $image->path, $image->filename; ?>"
                                        alt="<?php echo $image->alttext; ?>" class="img-fluid img-fit w-100">
                                </div>
                            </div>
                            <?php } ?>
                        </div>

                        <div class="control-wrap pr-default">
                            <div class="swiper-button-prev">
                                <img src="<?php echo get_template_directory_uri()."/images/icons/arrow-left.svg" ?>"
                                    alt="Arrow left" class="">
                            </div>

                            <div class="swiper-pagination"></div>

                            <div class="swiper-button-next">
                                <img src="<?php echo get_template_directory_uri()."/images/icons/arrow-right.svg" ?>"
                                    alt="Arrow right" class="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6 px-default order-md-1">
                <div class="content">
                    <div>
                        <?php echo $text ?>
                    </div>
                    <!-- Button -->
                    <?php if($button['button_text'] | $button['link']) { ?>
                    <div class="text-<?php echo $button['button_alignment']; ?> smooth-scroll">
                        <a target="<?php echo (!$button['new_window']) ? "" : "_blank";  ?>"
                            href="<?php echo sow_esc_url($button['link']) ?>"
                            class="btn custom-btn"><?php echo ($button['button_text']) ? : "Learn More"; ?></a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>