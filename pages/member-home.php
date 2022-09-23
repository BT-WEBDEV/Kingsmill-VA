<?php
/**
 * Template Name: Member Home
 *
 * Description: Member Home
 *
 * @package WordPress
 * @subpackage REDI
 * @since REDI 1.0
 */
get_header(); 
?>
<div id="primary" class="content-area nav-space">
    <main id="main" class="site-main">

        <!-- Main Slider -->
        <section>
            <h1 class="outline">Slider</h1>
            <?php 
			$slider_id = get_field("gka_theme_slider", $post->ID);
			if($slider_id) {
				$slider = gka_theme_get_gallery($slider_id);
				if($slider) { 
					include get_template_directory() . '/template-parts/main-slider.php'; 
				} 
			}
			else {
				include get_template_directory() . '/template-parts/no-slider.php'; 
			}
        ?>
        </section>
        <!-- #Main Slider -->

        <!-- Widget Area Before -->
        <?php
		if ( is_active_sidebar( 'gka_theme_widget_before' ) ) {
			dynamic_sidebar( 'gka_theme_widget_before' ); 
		}
		?>
        <!-- #Widget Area Before -->

        <!-- Main Content -->
        <?php while ( have_posts() ) : the_post(); ?>
        <section class="main-section">
            <?php get_template_part( 'template-parts/content', 'page' ); ?>
        </section>
        <?php endwhile; // End of the loop. ?>
        <!-- #Main Content -->

        <!-- Additional Content -->
        <section>
            <div class="container-fluid p-default">
                <div class="text-center">
                    <h1 class="mb-header">Membership Comparison Chart</h1>
                </div>
                <div class="row">

                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="membership-list bg-l-yellow">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri()."/images/memberpress/full-golf.jpg" ?>"
                                    alt="" class="img-fluid img-fit w-100">
                            </div>
                            <div class="header text-center bg-yellow">
                                <div class="border">
                                    <h4 class="mb-0">Full Golf Membership</h4>
                                    <!-- <div>small description</div> -->
                                </div>
                            </div>
                            <div class="desc bg-l-yellow">
                                <div class="text-center">
                                    <!-- <div class="price">$XXX</div> -->
                                    <div>If everyday worries slip away the moment you step foot in the tee box and your
                                        spirit soars with each swing of your driver, then our Golf Membership is your
                                        perfect fit. It is the only membership to grant you full and exclusive access to
                                        all three resort golf courses (including the private Woods Course) in addition
                                        to every available club amenity. The Golf Membership also delivers the fullest
                                        club benefits package available, as detailed in the list below.</div>
                                    <!-- <a href="" class="btn custom-btn">LEARN MORE</a> -->
                                </div>
                                <div class="info">
                                    <h6 class="font-weight-bold">Your Membership Includes:</h6>
                                    <ul>
                                        <li>Seven-day advance tee-times</li>
                                        <li>Unlimited play on Woods, River and Plantation Courses</li>
                                        <li>Unlimited use of practice facilities: driving range, short game chip & putt
                                            area</li>
                                        <li>Eligible to join Kingsmill Golf Associations - club tournaments and events
                                        </li>
                                        <li>Use of tennis, pickleball, fitness center and all pools and Kingsmill Spa
                                        </li>
                                        <li>Access to Marina and beach area (watersport equipment rental fees not
                                            included)</li>
                                        <li>Access to all Kingsmill Resort dining venues</li>
                                        <li>20% retail, spa and dining discounts</li>
                                        <li>Includes sports and social programming</li>
                                    </ul>
                                    <div>
                                        For more information, contact Chris Rucker, Director of Membership Sales, at
                                        <a
                                            href="mailto:Christopher.Rucker@Kingsmill.com">Christopher.Rucker@Kingsmill.com</a>
                                        or call <a href="tel:760-815-1034">760-815-1034</a>.
                                    </div>
                                </div>
                                <a href="#" class="member-open">
                                    <div class="open-button">
                                        <i class="fas fa-caret-down"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="membership-list bg-l-yellow">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri()."/images/memberpress/youth-executive-golf.jpg" ?>"
                                    alt="" class="img-fluid img-fit w-100">
                            </div>
                            <div class="header text-center bg-yellow">
                                <div class="border">
                                    <h4 class="mb-0">Young Executive Golf Membership</h4>
                                    <!-- <div>small description</div> -->
                                </div>
                            </div>
                            <div class="desc bg-l-yellow">
                                <div class="text-center">
                                    <!-- <div class="price">$XXX</div> -->
                                    <div>The Young Executive Golf Membership is designed for anyone between the ages of
                                        18-45. You'll enjoy all the privileges mentioned in the Full Golf membership,
                                        and no additional initiation fee will be required on your 46th birthday, you
                                        simply begin paying your Full Golf membership dues.</div>
                                    <!-- <a href="" class="btn custom-btn">LEARN MORE</a> -->
                                </div>
                                <div class="info">
                                    <h6 class="font-weight-bold">Your Membership Includes:</h6>
                                    <ul>
                                        <li>Available for Ages 18 - 45</li>
                                        <li>Seven-day advance tee-times</li>
                                        <li>Unlimited play on Woods, River and Plantation Courses</li>
                                        <li>Unlimited use of practice facilities: driving range, short game chip & putt
                                            area</li>
                                        <li>Eligible to join Kingsmill Golf Associations - club tournaments and events
                                        </li>
                                        <li>Use of tennis, pickleball, fitness center and all pools and Kingsmill Spa
                                        </li>
                                        <li>Access to Marina and beach area (watersport equipment rental fees not
                                            included)</li>
                                        <li>Access to all Kingsmill Resort dining venues</li>
                                        <li>20% retail, spa and dining discounts</li>
                                        <li>Includes sports and social programming</li>
                                    </ul>
                                    <div>
                                        For more information, contact Chris Rucker, Director of Membership Sales, at
                                        <a
                                            href="mailto:Christopher.Rucker@Kingsmill.com">Christopher.Rucker@Kingsmill.com</a>
                                        or call <a href="tel:760-815-1034">760-815-1034</a>.
                                    </div>
                                </div>
                                <a href="#" class="member-open">
                                    <div class="open-button">
                                        <i class="fas fa-caret-down"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="membership-list bg-l-yellow">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri()."/images/memberpress/sports-golf.jpg" ?>"
                                    alt="" class="img-fluid img-fit w-100">
                            </div>
                            <div class="header text-center bg-yellow">
                                <div class="border">
                                    <h4 class="mb-0">Sports with Golf Membership</h4>
                                    <!-- <div>small description</div> -->
                                </div>
                            </div>
                            <div class="desc bg-l-yellow">
                                <div class="text-center">
                                    <!-- <div class="price">$XXX</div> -->
                                    <div>If you prefer to split your time evenly between Kingsmill's courts and courses,
                                        you'll enjoy our Sports with Golf Membership. You can work on your backhand
                                        unimpeded with advance tennis court booking privileges and still gain access to
                                        two of the resort's championship golf courses.</div>
                                    <!-- <a href="" class="btn custom-btn">LEARN MORE</a> -->
                                </div>
                                <div class="info">
                                    <h6 class="font-weight-bold">Your Membership Includes:</h6>
                                    <ul>
                                        <li>Two-day advanced tee times</li>
                                        <li>Access to River and Plantation Courses, green fees not included</li>
                                        <li>Unlimited use of practice facilities: driving range, short game chip & putt
                                            area on the day of play</li>
                                        <li>Access to practice facilities on days without tee times for a fee</li>
                                        <li>Use of tennis, pickleball, fitness center and all pools and Kingsmill Spa
                                        </li>
                                        <li>Access to Marina and beach area (watersport equipment rental fees not
                                            included)</li>
                                        <li>Access to all Kingsmill Resort dining venues</li>
                                        <li>20% retail, spa and dining discounts</li>
                                        <li>Includes sports and social programming</li>
                                    </ul>
                                    <div>
                                        For more information, contact Chris Rucker, Director of Membership Sales, at
                                        <a
                                            href="mailto:Christopher.Rucker@Kingsmill.com">Christopher.Rucker@Kingsmill.com</a>
                                        or call <a href="tel:760-815-1034">760-815-1034</a>.
                                    </div>
                                </div>
                                <a href="#" class="member-open">
                                    <div class="open-button">
                                        <i class="fas fa-caret-down"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="membership-list bg-l-yellow">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri()."/images/memberpress/health-racquet.jpg" ?>"
                                    alt="" class="img-fluid img-fit w-100">
                            </div>
                            <div class="header text-center bg-yellow">
                                <div class="border">
                                    <h4 class="mb-0">Health and Racquet Membership</h4>
                                    <!-- <div>small description</div> -->
                                </div>
                            </div>
                            <div class="desc bg-l-yellow">
                                <div class="text-center">
                                    <!-- <div class="price">$XXX</div> -->
                                    <div>Your well being is top of mind, and with our Health and Racquet membership,
                                        you'll be able to focus on getting or staying in shape with unlimited access to
                                        all the sports and fitness facilities at Kingsmill, including our Tennis Center.
                                        Plus soak up the sun or get those laps in at all of our pools, including The
                                        Lazy River. Then relax, recharge and revive with spa and salon treatments at The
                                        Kingsmill Spa. Of course, you won't want to miss all the sports and social
                                        events that happen throughout the year.</div>
                                    <!-- <a href="" class="btn custom-btn">LEARN MORE</a> -->
                                </div>
                                <div class="info">
                                    <h6 class="font-weight-bold">Your Membership Includes:</h6>
                                    <ul>
                                        <li>Unlimited use of tennis courts, pickleball, fitness center and all pools
                                        </li>
                                        <li>Access to all Kingsmill Resort dining venues and the Kingsmill Spa</li>
                                        <li>Access to Marina and beach area (watersport equipment rental fees not
                                            included)</li>
                                        <li>20% retail, spa and dining discounts</li>
                                        <li>Includes sports and social programming</li>
                                    </ul>
                                    <div>
                                        For more information, contact Chris Rucker, Director of Membership Sales, at
                                        <a
                                            href="mailto:Christopher.Rucker@Kingsmill.com">Christopher.Rucker@Kingsmill.com</a>
                                        or call <a href="tel:760-815-1034">760-815-1034</a>.
                                    </div>
                                </div>
                                <a href="#" class="member-open">
                                    <div class="open-button">
                                        <i class="fas fa-caret-down"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="membership-list bg-l-yellow">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri()."/images/memberpress/social.jpg" ?>"
                                    alt="" class="img-fluid img-fit w-100">
                            </div>
                            <div class="header text-center bg-yellow">
                                <div class="border">
                                    <h4 class="mb-0">Social Membership</h4>
                                    <!-- <div>small description</div> -->
                                </div>
                            </div>
                            <div class="desc bg-l-yellow">
                                <div class="text-center">
                                    <!-- <div class="price">$XXX</div> -->
                                    <div>If you are looking for a membership that's all about dining, relaxing and
                                        connecting with others, our Social Membership is perfect for you. You'll enjoy
                                        the benefits of dining at all of our restaurants and recharging at the Kingsmill
                                        Spa. Plus, seasonally you can ride the tide of the Lazy River pool. One of the
                                        best parts of this membership is the opportunity to mix and mingle at any number
                                        of year-round special events exclusively designed for club members.</div>
                                    <!-- <a href="" class="btn custom-btn">LEARN MORE</a> -->
                                </div>
                                <div class="info">
                                    <h6 class="font-weight-bold">Your Membership Includes:</h6>
                                    <ul>
                                        <li>Access to The Lazy River pool</li>
                                        <li>Access to all Kingsmill Resort dining venues and the Kingsmill Spa</li>
                                        <li>Access to Marina and beach area (watersport equipment rental fees not
                                            included)</li>
                                        <li>20% retail, spa and dining discounts</li>
                                        <li>Includes social programming</li>
                                    </ul>
                                    <div>
                                        For more information, contact Chris Rucker, Director of Membership Sales, at
                                        <a
                                            href="mailto:Christopher.Rucker@Kingsmill.com">Christopher.Rucker@Kingsmill.com</a>
                                        or call <a href="tel:760-815-1034">760-815-1034</a>.
                                    </div>
                                </div>
                                <a href="#" class="member-open">
                                    <div class="open-button">
                                        <i class="fas fa-caret-down"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- #Additional Content -->

        <!-- Widget Area After -->
        <?php
		if ( is_active_sidebar( 'gka_theme_widget_after' ) ) {
			dynamic_sidebar( 'gka_theme_widget_after' ); 
		}
		?>
        <!-- #Widget Area After -->

    </main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();