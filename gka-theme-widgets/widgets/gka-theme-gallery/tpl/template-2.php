<?php
$slider = gka_theme_get_gallery($slider_id);
?>
<div class="gka-theme-gallery gka-theme-gallery-template-2">
    <div class="gka-theme-gallery-section py-default">
        <h1 class="text-center mb-header"><?php echo $title; ?></h1>
        <div class="container position-relative">
            <!-- Slider main container -->
            <div class="swiper-container gka-theme-gallery-swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <?php foreach ($slider as $key => $image) { ?>
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="image">
                            <a data-fancybox="gallery" href="<?php echo $image->path, $image->filename; ?>">
                                <img src="<?php echo $image->path, $image->filename; ?>"
                                    alt="<?php echo $image->alttext; ?>" class="img-fluid img-fit w-100">
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="control-wrap justify-content-center">
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="swiper-button-prev">
                <img src="<?php echo get_template_directory_uri()."/images/icons/swiper-arrow-left.svg" ?>" alt=""
                    class="">
            </div>
            <div class="swiper-button-next">
                <img src="<?php echo get_template_directory_uri()."/images/icons/swiper-arrow-right.svg" ?>" alt=""
                    class="">
            </div>
        </div>
    </div>
</div>