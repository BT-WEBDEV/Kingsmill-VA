<?php
$shortcode = "[wpforms id=" . $wpforms . "]";
?>
<div class="gka-theme-form">
    <div class="contact-bg">
        <div class="container py-default">
            <div class="welcome pb-0">
                <?php if($eye_brow) { ?>
                <span class="sub-header"><?php echo $eye_brow; ?></span>
                <?php } ?>
                <h1 class="text-black font-weight-normal"><?php echo $title; ?></h1>
            </div>
            <?php echo do_shortcode($shortcode); ?>
        </div>
    </div>
</div>