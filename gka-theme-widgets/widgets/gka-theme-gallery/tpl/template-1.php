<?php
$slider = gka_theme_get_gallery($slider_id);
?>
<div class="gka-theme-gallery gka-theme-gallery-template-1">
    <div class="container-fluid px-0 py-default">
        <div>
            <h1 class="text-center mb-header font-weight-medium"><?php echo $title; ?></h1>
        </div>
        <!-- Slider main container -->
        <div class="swiper-container gka-theme-video-swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <?php foreach ($slider as $key => $image) { ?>
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="image">
                        <img src="<?php echo $image->path, $image->filename; ?>" alt="<?php echo $image->alttext; ?>"
                            class="img-fluid img-fit w-100">
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