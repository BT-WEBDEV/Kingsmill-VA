<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gka_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="GKA Theme | GKA Web Department" />
	<meta name="Owner" content="GKA Theme" />
	<meta name="Copyright" content="Copyright &copy; GKA Theme" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png"
		sizes="300x300">
	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;600;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500;600;700&display=swap"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;600;700&display=swap"
		rel="stylesheet">

	<!-- Flip.to - Website Integration -->
	<script async src="https://integration.flip.to/KSV2M8K"></script>
	<!-- Flip.to - End Website Integration -->

	<!-- Flip.to - Discovery Integration -->
	<script src="https://components.flip.to/discovery/kingsmill"></script>
	<!-- Flip.to - End Discovery Integration -->

	<!-- Pinterest Pixel Base Code -->
	<script type="text/javascript">
		! function (e) {
			if (!window.pintrk) {
				window.pintrk = function () {
					window.pintrk.queue.push(
						Array.prototype.slice.call(arguments))
				};
				var
					n = window.pintrk;
				n.queue = [], n.version = "3.0";
				var
					t = document.createElement("script");
				t.async = !0, t.src = e;
				var
					r = document.getElementsByTagName("script")[0];
				r.parentNode.insertBefore(t, r)
			}
		}("https://s.pinimg.com/ct/core.js");
		pintrk('load', '2613278023162');
		pintrk('page');
	</script>
	<noscript>
		<img height="1" width="1" style="display:none;" alt=""
			src="https://ct.pinterest.com/v3/?tid=2613278023162&noscript=1" />
	</noscript>
	<!-- Pinterest Pixel Base Code -->
</head>


<!-- Header Color -->
<?php
if($post->post_parent == 183 || $post->ID == 183 || $post->ID == 226) {
	$header_color = "header-blue";
}
?>

<body <?php body_class(); ?>>
	<h1 class="outline">Header</h1>
	<a class="skip-main" href="#primary">Skip to main content</a>
	<div id="page" class="site">
		<header id="masthead" class="site-header <?php echo $header_color; ?>">
			<nav class="navbar fixed-top navbar-expand-lg custom-navbar">
				<h1 class="outline">Main Navigation</h1>
				<div id="secondary-nav">
					<div class="d-flex align-items-center justify-content-end justify-content-md-between">
						<div id="parent-nav">
							<?php 
							$post_categories = get_post_primary_category($post->ID, 'category'); 
							$primary_category = $post_categories['primary_category']; 
							?>
							<ul
								class="navbar-nav <?php echo 	(($post->post_parent == 17 || wp_get_post_parent_id($post->post_parent) == 17 || $post->ID == 17) 
																|| ($post->post_parent == 19 || wp_get_post_parent_id($post->post_parent) == 19 || $post->ID == 19) 
																|| ($post->post_parent == 183 || wp_get_post_parent_id($post->post_parent) == 183 || $post->ID == 183) 
																|| ($post->post_parent == 226 || wp_get_post_parent_id($post->post_parent) == 226 || $post->ID == 226) 
																|| ($post->post_parent == 23 || wp_get_post_parent_id($post->post_parent) == 23 || $post->ID == 23)
																|| ($post->post_parent == 21 || wp_get_post_parent_id($post->post_parent) == 21 || $post->ID == 21)
																|| ($post->post_parent == 25 || wp_get_post_parent_id($post->post_parent) == 25 || $post->ID == 25 || $primary_category == 'kingsmill-realty')) ? "" : "d-none"; ?>">
								<?php 
								$nav_id = 2;

								$primary_nav = wp_get_nav_menu_items($nav_id); 

								foreach ($primary_nav as $key => $item) {
									$dropdownmenu = '';
									if ($item->menu_item_parent == "0") {
										foreach ($primary_nav as $subitem) {
											if($item->ID == $subitem->menu_item_parent) {
												$dropdownmenu .= '<a class="dropdown-item" href="' . $subitem->url . '">' . $subitem->title . '</a>';
											}
										}
										if($dropdownmenu) { ?>
								<li
									class="nav-item dropdown <?php echo ($post->ID == $item->object_id) ? "active" : ""; ?>">
									<a href="<?php echo $item->url; ?>" class="nav-link dropdown-toggle"
										id="dropdown-<?php echo $post->ID; ?>" data-toggle="dropdown"
										aria-haspopup="true"
										aria-expanded="false"><span><?php echo $item->title; ?></span></a>
									<div class="dropdown-menu dropdown-primary"
										aria-labelledby="dropdown-<?php echo $post->ID; ?>">
										<?php echo $dropdownmenu ?>
									</div>
								</li>

								<?php } else { ?>
								<li class="nav-item <?php echo ($post->ID == $item->object_id) ? "active" : ""; ?>">
									<a class="nav-link"
										href="<?php echo $item->url; ?>"><span><?php echo $item->title; ?></span></a>
								</li>
								<?php } } } ?>
							</ul>
						</div>
						<div>
							<a href="/member-portal" class="custom-link">Membership</a>
							<a href="" class="font-weight-medium custom-link phone"><img
									src="<?php echo get_template_directory_uri()."/images/icons/phone.svg" ?>" alt="">
								800.392.0026</a>
						</div>
					</div>
				</div>
				<div class="container-fluid">
					<!-- Navbar brand -->
					<a class="navbar-brand order-2 order-lg-1 mobile-col" href="/">
						<?php if(($post->post_parent == 17 || $post->ID == 17) 
								|| ($post->post_parent == 19 || $post->ID == 19) 
								|| ($post->post_parent == 183 || $post->ID == 183) 
								|| ($post->post_parent == 226 || $post->ID == 226)) { ?>
						<img id="logo" class="logo resort_logo"
							src="<?php echo (get_header_image()) ? get_header_image() : get_template_directory_uri()."/images/Kingsmill_logo.svg"; ?>"
							alt="Logo">
						<?php } else { ?>
						<img id="logo" class="logo"
							src="<?php echo (get_header_image()) ? get_header_image() : get_template_directory_uri()."/images/Kingsmill_logo.svg"; ?>"
							alt="Logo">
						<?php } ?>
					</a>


					<!-- Collapse button -->
					<button class="navbar-toggler third-button order-1 order-lg-2 mobile-col" type="button"
						data-toggle="collapse" data-target="#main-nav" aria-controls="main-nav" aria-expanded="false"
						aria-label="Toggle navigation">
						<div class="hamburger-wrap">
							<div class="animated-icon3"><span></span><span></span><span></span></div>
						</div>
					</button>

					<!-- Main navigation -->
					<div class="collapse navbar-collapse order-4" id="main-nav">
						<ul class="navbar-nav mx-auto">
							<?php 
								$nav_id = 2;
								if($post->post_parent == 17 || wp_get_post_parent_id($post->post_parent) == 17 || $post->ID == 17) {
									$nav_id = 4;
								} else if($post->post_parent == 19 || wp_get_post_parent_id($post->post_parent) == 19 || $post->ID == 19) {
									$nav_id = 5;
								} else if(($post->post_parent == 183 || wp_get_post_parent_id($post->post_parent) == 183 || $post->ID == 183) || ($post->post_parent == 226 || wp_get_post_parent_id($post->post_parent) == 226 || $post->ID == 226)) {
									$nav_id = 6;
								} else if(($post->post_parent == 23 || wp_get_post_parent_id($post->post_parent) == 23 || $post->ID == 23)) {
									$nav_id = 11;
								} else if(($post->post_parent == 21 || wp_get_post_parent_id($post->post_parent) == 21 || $post->ID == 21)) {
									$nav_id = 12;
								} else if(($post->post_parent == 25 || wp_get_post_parent_id($post->post_parent) == 25 || $post->ID == 25) || $primary_category == 'kingsmill-realty') {
									$nav_id = 13;
								}
								$primary_nav = wp_get_nav_menu_items($nav_id); 
									foreach ($primary_nav as $key => $item) {
										$dropdownmenu = '';
										if ($item->menu_item_parent == "0") {
											foreach ($primary_nav as $subitem) {
												if($item->ID == $subitem->menu_item_parent) {
													$dropdownmenu .= '<a class="dropdown-item" href="' . $subitem->url . '">' . $subitem->title . '</a>';
												}
											}
											if($dropdownmenu) { ?>
							<li
								class="nav-item dropdown hover-dropdown <?php echo ($post->ID == $item->object_id) ? "active" : ""; ?>">
								<a href="<?php echo $item->url; ?>" class="nav-link dropdown-toggle"
									id="dropdown-<?php echo $post->ID; ?>" data-toggle="dropdown" aria-haspopup="true"
									aria-expanded="false"><span><?php echo $item->title; ?></span></a>
								<div class="dropdown-menu dropdown-primary"
									aria-labelledby="dropdown-<?php echo $post->ID; ?>">
									<?php echo $dropdownmenu ?>
								</div>
							</li>

							<?php } else { ?>
							<li
								class="nav-item <?php echo ($post->ID == $item->object_id || wp_get_post_parent_id($post->ID) == $item->object_id) ? "active" : ""; ?>">
								<a class="nav-link"
									href="<?php echo $item->url; ?>"><span><?php echo $item->title; ?></span></a>
							</li>
							<?php } } } ?>
						</ul>
						<ul id="secondary-nav-mobile" class="navbar-nav <?php 	echo (
															   ($post->post_parent == 17 || wp_get_post_parent_id($post->post_parent) == 17 || $post->ID == 17)
															|| ($post->post_parent == 19 ||  wp_get_post_parent_id($post->post_parent) == 19 || $post->ID == 19) 
															|| ($post->post_parent == 183 || wp_get_post_parent_id($post->post_parent) == 183 || $post->ID == 183) 
															|| ($post->post_parent == 23 ||  wp_get_post_parent_id($post->post_parent) == 23 || $post->ID == 23) 
															|| ($post->post_parent == 21 || wp_get_post_parent_id($post->post_parent) == 21 || $post->ID == 21)  
															|| ($post->post_parent == 25 || wp_get_post_parent_id($post->post_parent) == 25 || $post->ID == 25) 
															|| ($post->post_parent == 226 || wp_get_post_parent_id($post->post_parent) == 226 || $post->ID == 226) ) ? "" : "d-none"; ?>">
							<?php 
								$nav_id = 2;

								$primary_nav = wp_get_nav_menu_items($nav_id); 

								foreach ($primary_nav as $key => $item) {
									$dropdownmenu = '';
									if ($item->menu_item_parent == "0") {
										foreach ($primary_nav as $subitem) {
											if($item->ID == $subitem->menu_item_parent) {
												$dropdownmenu .= '<a class="dropdown-item" href="' . $subitem->url . '">' . $subitem->title . '</a>';
											}
										} ?>
							<li class="nav-item <?php echo ($post->ID == $item->object_id) ? "active" : ""; ?>">
								<a class="nav-link" href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a>
							</li>
							<?php } } ?>
						</ul>
					</div>
					<!-- If /member-portal/ is in the url, show the login/logout button, else the book now button --> 
					<?php if (strpos($_SERVER['REQUEST_URI'], "member-portal") !== false){ ?>
						
						<?php if (is_user_logged_in()) : ?>
							<div id ="login" class ="order-3 mobile-col"> 
    							<a href="<?php echo wp_logout_url(get_permalink()); ?>" class="btn custom-btn">LOGOUT</a>
							</div>
						
						<?php elseif(strpos($_SERVER['REQUEST_URI'], "member-portal/login") !== false) : ?> 
							<div id="login" class="order-3 mobile-col" style="display:none;">
								<a href="/login" class="btn custom-btn">LOGIN</a>
							</div>
						<?php else : ?>
    						<div id="login" class="order-3 mobile-col">
								<a href="/login" class="btn custom-btn">LOGIN</a>
							</div>
						<?php endif;?>

	
					<?php } else { ?> 
					
						<div id="book-now" class="reservations-toggle order-3 mobile-col">
							<a href="#" class="btn custom-btn">Book<span>NOW</span></a>
						</div>
					
					<?php } ?> 	
					
				

					<!-- <div id="book-now" class="order-3 mobile-col">
						<a href="#" class="btn custom-btn">BOOK <span>NOW</span></a>
					</div> -->
				</div>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->

		<div id="content" class="site-content">