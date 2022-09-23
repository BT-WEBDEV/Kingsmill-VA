<?php
$shortcode = "[wpforms id=" . $wpforms . "]";
?>
<div class="gka-theme-form">
    <div>
        <div class="container py-default">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="welcome mb-header pb-0">
                        <?php if($eye_brow) { ?>
                        <span class="sub-header"><?php echo $eye_brow; ?></span>
                        <?php } ?>
                        <h1 class="text-black font-weight-normal"><?php echo $title; ?></h1>
                        <div>
                            <?php echo $text; ?>
                        </div>
                    </div>
                    <?php echo do_shortcode($shortcode); ?>
                </div>
            </div>
        </div>
    </div>
</div>