<div id="<?php echo $section_id ?>" class="gka-theme-page-list" style="background-color: <?php echo $container_color; ?>">
    <div class="gka-theme-page-list-template-3 container-fluid p-default">
        <h1 class="text-center mb-header">Kingsmill Resort Packages</h1>
        <div class="row">
            <?php foreach ($pages as $key => $page) { ?>
            <div class="col-sm-6 col-md-4 col-xl-3">
                <div class="page-list">
                    <div class="image view zoom">
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
                            <div class="content flex-fill">
                                <div class="d-flex justify-content-between align-items-center">
                                    <?php if($page['link']) { ?>
                                    <a href="<?php echo sow_esc_url($page['link']); ?>" class="text-white">
                                        <h6 class="mb-0"><?php echo $page['header'] ?></h6>
                                    </a>
                                    <a href="<?php echo sow_esc_url($page['link']); ?>">
                                        <img src="<?php echo get_template_directory_uri()."/images/icons/link-arrow-white.svg" ?>"
                                            alt="" width="28px">
                                    </a>
                                    <?php } else { ?>
                                    <h6 class="mb-0"><?php echo $page['header'] ?></h6>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>