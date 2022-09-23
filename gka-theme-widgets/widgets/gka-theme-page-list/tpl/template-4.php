<div id="<?php echo $section_id ?>" class="gka-theme-page-list bg-l-yellow" style="background-color: <?php echo $container_color; ?>">
    <div class="gka-theme-page-list-template-4 container-fluid p-default">
        <div class="row justify-content-center">
            <?php foreach ($pages as $key => $page) { ?>
            <div class="col-sm-6 col-lg-4">
                <div class="page-list">
                    <div class="content">
                        <?php if($page['link']) { ?>
                        <a href="<?php echo sow_esc_url($page['link']); ?>" class="text-white">
                            <h2 class="mb-0 font-weight-normal"><?php echo $page['header'] ?></h2>
                        </a>
                        <?php } else { ?>
                        <h2 class="mb-0 font-weight-normal"><?php echo $page['header'] ?></h2>
                        <?php } ?>
                        <p><?php echo $page['description']; ?></p>

                        <?php if($page['link']) { ?>
                        <div>
                            <a href="<?php echo sow_esc_url($page['link']); ?>" class="btn custom-btn bg-d-yellow">LEARN
                                MORE</a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>