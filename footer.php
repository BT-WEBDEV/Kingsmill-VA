<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gka_theme
 */

?>
<!-- Footer Color -->
<?php
if($post->post_parent == 183 || $post->ID == 183 || $post->ID == 226) {
	$footer_color = "footer-blue";
}
?>
</div><!-- #content -->

<footer id="footer" class="site-footer <?php echo $footer_color; ?>">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3 align-self-center logos-wrap">
				<div class="text-center logo">
					<img src="<?php echo get_template_directory_uri()."/images/Kingsmill_logo.svg" ?>" alt="">
				</div>
				<div class="d-lg-flex justify-content-center partner-logo">
					<div>
						<img src="<?php echo get_template_directory_uri()."/images/alhi-logo.png" ?>" alt="">
					</div>
					<div>
						<img src="<?php echo get_template_directory_uri()."/images/pms-logo.png" ?>" alt="">
					</div>
				</div>
			</div>
			<div class="col-lg-9 bg-green right-content">
				<div class="row m-0 text-white">
					<div class="col-6">
						<div class="item">
							<hr>
							<h4>ADDRESS</h4>
							<a href="https://goo.gl/maps/KTpZjKxoaCYZkFs29" target="_blank" class="text-white">
								100 Kingsmill Road, <br>
								Williamsburg, VA 23185
							</a>
						</div>

						<div class="item">
							<hr>
							<h4>CONTACT</h4>
							<div>
								<span class="font-weight-medium mr-1">OFFICE:</span> <a href="tel:1-800-392-0026"
									class="text-white">800.392.0026</a>
							</div>
							<div>
								<span class="font-weight-medium mr-1">FAX:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> <a href="tel:1-757-345-0018"
									class="text-white">757.345.0018</a>
							</div>
						</div>

						<div class="item mb-0">
							<hr>
							<h4><u>PRIVACY POLICY</u></h4>
							<div class="footer-social">
								<a href="https://www.facebook.com/kingsmillresort.VA" target="_blank" class="text-white"><i class="fab fa-facebook-f"></i></a>
								<a href="https://twitter.com/KingsmillResort" target="_blank" class="text-white"><i class="fab fa-twitter"></i></a>
								<a href="https://www.instagram.com/kingsmillresort/" target="_blank" class="text-white"><i class="fab fa-instagram"></i></a>
								<a href="https://www.youtube.com/user/KingsmillResortVideo" target="_blank" class="text-white"><i class="fab fa-youtube"></i></a>
								<a href="https://www.linkedin.com/company/kingsmill-resort" target="_blank" class="text-white"><i class="fab fa-linkedin"></i></a>
							</div>
						</div>
					</div>
					<div class="col-6">
						<div>
							<hr>
							<h4>NAVIGATION</h4>
							<ul id="footer-menu" class="list-unstyled">
								<?php 
								$footer_nav = wp_get_nav_menu_items(3);
								foreach ($footer_nav as $key => $item) {    				        
								?>
								<li>
									<a href="<?php echo $item->url; ?>"
										class="text-white"><?php echo $item->title; ?></a>
								</li>
								<?php } ?>
							</ul>
						</div>
					</div>
					<div class="col-12 copyright">
						© <?php echo getdate()['year']; ?> Kingsmill Realty, Inc. All rights reserved.
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

</div><!-- #page -->
<?php wp_footer(); ?>
</body>

</html>