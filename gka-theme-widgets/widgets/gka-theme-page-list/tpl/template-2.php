<div id="<?php echo $section_id ?>" class="bg-l-green gka-theme-page-list" style="background-color: <?php echo $container_color; ?>">
    <div class="gka-theme-page-list-template-2 container-fluid p-default">
        <?php if($show_title) { ?>
        <div class="text-center mb-header">
            <h1><?php echo $title; ?></h1>
        </div>
        <?php } ?>
        <div class="row justify-content-center">
            <?php foreach ($pages as $key => $page) { ?>
            <div class="col-sm-6 col-md-4 col-xl-3">
                <div class="page-list">
                    <div class="image view">
                        <?php if($page['link']) { ?>
                        <a href="<?php echo sow_esc_url($page['link']); ?>">
                            <img src="<?php echo ($page['image']) ? wp_get_attachment_image_src($page['image'], "full")[0] : get_template_directory_uri()."/images/placeholder.jpg" ?>"
                                alt="<?php echo $page['header'] ?>" class="img-fluid img-fit w-100">
                        </a>
                        <?php } else { ?>
                        <img src="<?php echo ($page['image']) ? wp_get_attachment_image_src($page['image'], "full")[0] : get_template_directory_uri()."/images/placeholder.jpg" ?>"
                            alt="<?php echo $page['header'] ?>" class="img-fluid img-fit w-100">
                        <?php } ?>
                    </div>
                    <div class="content">
                        <div class="d-flex justify-content-between align-items-center mb-1 mb-md-2">
                            <?php if($page['link']) { ?>
                            <a href="<?php echo sow_esc_url($page['link']); ?>">
                                <h5 class="mb-0 text-green font-weight-medium">
                                    <?php echo $page['header'] ?>
                                </h5>
                            </a>
                            <a href="<?php echo sow_esc_url($page['link']); ?>">
                                <img src="<?php echo get_template_directory_uri()."/images/icons/link-arrow.svg" ?>"
                                    alt="Arrow right icon" width="28px">
                            </a>
                            <?php } else { ?>
                            <h5 class="mb-0 text-green font-weight-medium">
                                <?php echo $page['header'] ?>
                            </h5>
                            <?php } ?>
                        </div>

                        <p class="mb-0"><?php echo $page['description']; ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>