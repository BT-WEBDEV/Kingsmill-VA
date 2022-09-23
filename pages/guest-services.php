<?php
/**
 * Template Name: Guest Services
 *
 * Description: Guest Services
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
            <div class="container">
                <?php get_template_part( 'template-parts/content', 'page' ); ?>
            </div>
        </section>
        <?php endwhile; // End of the loop. ?>
        <!-- #Main Content -->

        <!-- Additional Content -->

        <!-- #Additional Content -->

        <!-- Additional Content -->
        <section>
            <div class="container py-default">
                <div class="text-center mb-header">
                    <h1>Guest Services</h1>
                </div>
                <!--Accordion wrapper-->
                <div class="accordion md-accordion bar-accordion" id="bar-accordion" role="tablist"
                    aria-multiselectable="true">
                    <div class="row">
                        <?php 
                        $faq = [
                            ["Charging StationsView", "Overnight guests of Kingsmill Resort may charge their electric vehicles at one of our two 80 amp Tesla fast chargers or one 40 amp universal charger located in our main parking lot.  Please see the front desk to have the stations unlocked."],
                            ["Check-in/Check-out", "Check-in starts at 4:00 p.m. Check-out is 11:00 a.m. If you anticipate a delay in your departure, please call the Front Desk. Dial 1200."],
                            ["Telephone Service & Rates", "Telephone operating instructions are printed directly on your telephone. For assistance, call the Resort Operator. Dial 0. Local, Directory Assistance, Credit Card Calls - Free 800, Collect, Third-Party Billing, Operator Assistance - Free Long-distance and international calls are billed at Sprint’s standard operator-assisted rates. Applicable charges will be billed to your room account."],
                            ["Security", "If you notice a suspicious activity, please report your observations to the management. Dial 0."],
                            ["Groups & Meetings Sales Office", "For group sales or catering arrangements, please call our Conference Sales Department. Dial 3948."],
                            ["Safe Deposit Boxes", "Do not leave money or valuables in your room. Please lock all valuables in the complimentary safe located in the closet of your room or in the safe deposit box at the Front Desk."],
                            ["Room Reservations", "We’ll be glad to help you with reservations for a future trip to Kingsmill Resort. Please call the Reservations Department. Dial 757-253-1703."],
                            ["Pet Friendly", "Select guest rooms are Pet friendly. Guests will be charged $75 per night, per reservation. Each room will be deep cleaned after each pet visit. Please contact Reservations for more information (800) 832-5665."],
                            ["ADA Accessible Rooms", "ADA accessible rooms are available upon request. Please contact our reservations center at (800) 832-5665."],
                            ["Resort Fee", "It is our mission to ensure our guests enjoy an exceptional experience that includes extraordinary services and amenities. These offerings are included as part of our daily resort fee. Resort guest rooms and one-bedroom condominiums resort fees are $23.99.* Two bedroom condominiums resort fees are $29.99.* Three bedroom condominiums, Cottages on The James and The Estate at Kingsmill resort fees are $34.99.* For additional information, please visit our Resort Fee Inclusions page or call 888-334-4856. *Plus tax, per night, per reservation."],
                            ["Playground", "The children’s playground area is adjacent to the Bike Rental Tent or across the street from the Sports Club."],
                            ["Marina", "The Kingsmill Marina features a protected harbor on the James River. Fuel service and slips for transient boaters are available. The Marina Shop offers marine supplies and signature Kìngsmill Resort items. The James Landing Grille features seafood and seasonal fare with indoor and outdoor seating, overlooking the James River."],
                            ["Mail & Packaging", "Outgoing mail may be left at the Front Desk or with the Conference Concierge. FedEx, DHL, and UPS services are also available. Dial 0."],
                            ["Luggage Storage", "Luggage storage is available at the Bell Stand. Dial 0."],
                            ["Lost & Found", "Please contact Housekeeping between the hours of 7:00 a.m. and 6:00 p.m. at extension 1576. After hours, contact the Night Manager. Dial 0."],
                            ["Ice", "Ice machines are provided throughout the villa areas. Ice delivery is available upon request. Dial 0."],
                            ["Housekeeping", "Kingsmill Resort rooms are stocked for a standard 2-night stay. Daily housekeeping is not administered. For amenity requests or any additional needs between 7:00 a.m. and 11:00 p.m., contact Housekeeping at extension 1574. After 11:00 p.m., call the Front Desk at extension 1200. "],
                            ["General Manager", "Our General Manager welcomes any comments you may have. Dial 8248."],
                            ["Fireplaces", "Woodburning fireplaces are available in almost all condo units.  Wood and lighting is provided with a call to the front desk, daily fee applies.  Fires are available November through March."],
                            ["Emergency", "All accommodations at Kìngsmill Resort are equipped with smoke detectors. Please familiarize yourself with the
                            location of the fire exit nearest to your room and read the following instructions. IN THE EVENT OF A FIRE
                            ALARM, OR ACTUAL FIRE, REMAIN CALM:
                            <ul>
                                <li>Quickly but carefully, exit the building</li>
                                <li>Do not exit in any direction leading to heat, flame or smoke</li>
                                <li>Once you have exited the building, proceed to the building parking lot and await further direction from
                                    a
                                    Kíngsmill representative or The James City County Fire Department.</li>
                            </ul>
                    
                            IF THE FIRE IS NOT IN YOUR ROOM:
                            <ul>
                                <li>Test the door with your hand for heat before opening.</li>
                            </ul>
                    
                            IF YOUR DOOR IS HOT:
                            <ul>
                                <li>Stay in your room</li>
                                <li>Phone the operator, dial 0 for help</li>
                                <li>Cover face with wet towels</li>
                                <li>Wait for further instructions</li>
                            </ul>
                    
                            IF DOOR IS COOL:
                            <ul>
                                <li>Take your room key</li>
                                <li>Open door slowly</li>
                                <li>Leave the building</li>
                                <li>If exiting is unsafe, return to room, notify operator by dialing 0 and wait for instructions.</li>
                                <li>Stay low</li>
                                <li>If you have a physical condition that might impair your ability to either detect an alarm or evacuate,
                                    please notify the operator by dialing 0.</li>
                            </ul>"],
                            ["Credit Cards", "We accept all major credit cards. If you have any questions regarding your credit, please call the Front Desk. Dial 1200."],
                            ["Business Center", "For your convenience, Kingsmill Resort offers secretarial services, fax transmittal and receipt, photocopying, in-room dataports, notary public, package handling, courier service, audiovisual equipment rental and other business services. Please direct in-bound guest faxes to 757.253.8246. For assistance, contact the Conference Concierge. Dial 1388. Need to check e-mail, access the Internet or print a document? Internet access is available in guestrooms, or stop by the Conference Concierge, Second Level, Resort Center, with your laptop and get plugged in. Dial 1388."],
                            ["Bike Rental", "Bicycles are available for children and adults. Helmets and baby carriers are available. Contact the Kingsmill Front Desk. "],
                            ["Air Conditioning & Heating", "Individually controlled air conditioning and heating thermostats are located in each guestroom and suite. Dial 0."],
                        ];
                        foreach ($faq as $key => $item) { ?>
                        <!-- Accordion card -->
                        <div class="col-md-6 card-col">
                            <div class="card">
                                <!-- Card header -->
                                <div class="card-header" role="tab" id="heading<?php echo $key ?>">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#bar-accordion"
                                        href="#collapse<?php echo $key ?>" aria-controls="collapse<?php echo $key ?>">

                                        <div class="header">
                                            <h6 class="mb-0">
                                                <?php echo $item[0]; ?>
                                            </h6>
                                            <i class="fas fa-caret-down rotate-icon"></i>
                                        </div>
                                    </a>
                                </div>
                                <!-- Card body -->
                                <div id="collapse<?php echo $key ?>" class="collapse" role="tabpanel"
                                    aria-labelledby="heading<?php echo $key ?>" data-parent="#bar-accordion">
                                    <div class="card-body">
                                        <?php echo $item[1]; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card -->
                        <?php }  ?>
                    </div>
                </div>
                <!-- Accordion wrapper -->
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