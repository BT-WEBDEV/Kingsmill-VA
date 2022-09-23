<div id="<?php echo $section_id ?>" class="gka-theme-page-list" style="background-color: <?php echo $container_color; ?>">
    <div class="gka-theme-page-list-template-5 container-fluid p-default">
        <h1 class="text-center mb-header"><?php echo $title; ?></h1>
        <div class="row justify-content-center">
            <?php foreach ($pages as $key => $page) { ?>
            <div class="col-sm-6 col-lg-5">
                <div class="page-list">
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
                            <div class="content d-flex justify-content-between">
                                <?php if($page['link']) { ?>
                                <div class="pr-0 pr-md-3">
                                    <a href="<?php echo sow_esc_url($page['link']); ?>" class="text-white">
                                        <h3><?php echo $page['header'] ?></h3>
                                    </a>
                                    <p class="mb-0"><?php echo $page['description']; ?></p>
                                </div>
                                <div class="align-self-center px-0 px-md-3">
                                    <a href="<?php echo sow_esc_url($page['link']); ?>">
                                        <img src="<?php echo get_template_directory_uri()."/images/icons/link-arrow-yellow.svg" ?>"
                                            alt="Arrow right icon" class="">
                                    </a>
                                </div>
                                <?php } else { ?>
                                <div class="pr-0 pr-md-3">
                                    <h3><?php echo $page['header'] ?></h3>
                                    <p class="mb-0"><?php echo $page['description']; ?></p>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>