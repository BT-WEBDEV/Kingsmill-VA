<?php
$shortcode = "[wpforms id=" . $wpforms . "]";
?>
<div class="gka-theme-form">
    <div class="<?php echo $background_color; ?>">
        <div class="container py-default">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="welcome pb-3">
                        <h1 class="text-black mb-0"><?php echo $title; ?></h1>
                        <div>STAY UP TO DATE WITH KINGSMILL REALTY</div>
                    </div>
                    <?php echo do_shortcode($shortcode); ?>
                </div>
            </div>
        </div>
    </div>
</div>