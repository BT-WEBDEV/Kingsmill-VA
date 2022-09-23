<?php
/**
 * Template Name: Golf FAQ
 *
 * Description: Golf FAQ
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
        <section class="bg-l-yellow">
            <div class="container-fluid p-default">
                <div class="text-center mb-header">
                    <h1>The Pro Knows</h1>
                    <p>To take your game to the next level, turn to one of the most accomplished coaches in the
                        Mid-Atlantic region, Chris George, PGA - the very professional that the Golf Channel tapped to
                        be one of the first 40 teachers to operate elite instructional facilities bearing their name.
                    </p>
                </div>
                <div class="row">
                    <?php 
                    $videos = [
                        ["Kingsmill Membership & Real Estate", "", "8o6mp4664nk"],
                        ["Putt Like Lexi", "Chris George, PGA—head of our Kingsmill Golf Academy—took note of some of Lexi Thompson's putting skills at the 2017 Kingsmill Championship, when she scored a record-setting 20 under for the win. These tips will help you determine proper set-up to make your putt every time.", "26ZwDYgfJFM"],
                        ["Score Wind", "Chris George, PGA, head of our Kingsmill Golf Academy, provides some tips when facing a long drive on a windy day.", "Jhyk31B_-OA"],
                        ["Uneven Lies", "Chris George, PGA, head of our Kingsmill Golf Academy, says to hit successfully off a slope, you must ensure your shoulders are level to that slope.", "dqu4SuMJO_w"],
                        ["Pick Your Club", "Now Chris George, PGA—our Golf Academy’s Head Instructor and Golf Digest’s #1 Instructor in Virginia—has made a brief instructional video to help you master the River Course. (Specifically, the challenging 17th hole!) So the next time you play this top course, you’ll have a pro’s competitive edge.", "WMTZv8-OjEk"],
                        ["Master the Putt", "Chris George, PGA—our Golf Academy's Head Instructor and Golf Digest's #1 Instructor in Virginia—created an instructional video to help you improve your setup and impact to execute the perfect putt. So the next time you play The River Course or The Plantation Course, you'll look like a pro.", "9psb5fIqjSE"],
                        ["Golf's Uneven Lies", "Learn the best way to tackle uneven lies with this instructional video by our Golf Academy’s Head Instructor, Chris George, PGA—rated the #1 Instructor in Virginia by Golf Digest. Get the lay of the land now, so the next time you play The River Course or The Plantation Course at Kingsmill, you’ll look (and play) like a pro.", "g4BtjOPWOkw"],
                        ["Putting Skills", "Chris George PGA, the head of our Golf Academy and #1 Golf Digest rated instructor in Virginia, shows you some simple exercises to help sharpen your putting skills.", "rh-eMahZQs4"],
                        ["Chipping Technique", "When it comes to your short game, practice makes perfect. And learning how to make a beautiful chip shot is easy with this instructional video by our Golf Academy’s Head Instructor, Chris George, PGA. Get the lay of the land now, so the next time you play The River Course or The Plantation Course at Kingsmill, you’ll look (and play) like a pro.", "IcpvjroeNk0"],
                        ["Secret to Great Putting", "THE PROBLEM | An inability to start the ball on the intended target line when putting.

                        THE SOLUTION | Effective and efficient practice is essential to improving your putting. Your start direction is influenced by the putter face at impact, so practice putting the ball straight down a ruler to ensure a square face at impact. For the right-handed player, if the ball exits the ruler to the right, the face was open. If the ball exits to the left, the face was closed. (The reverse of each is true for left-handed golfers.)
                        
                        THE RESULTS | This ruler drill will improve your ability to start the ball on line by consistently creating a square face at impact. Mastering this skill will ensure you some big moments of triumph on the green.", "RdAZeQcWLgM"],
                        ["Breaking Putt", "Chris George, PGA, head of our Kingsmill Golf Academy, shows a technique for calculating break and dropping the putt more reliably.", "0-11q3JPw84"],
                    ];
                    foreach ($videos as $key => $video) { ?>
                    <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                        <div class="page-list video-course-list">
                            <div class="image view">
                                <a data-fancybox="videos" href="https://www.youtube.com/watch?v=<?php echo $video[2] ?>"
                                    data-caption="<?php echo $video[1]; ?>">
                                    <img src="https://img.youtube.com/vi/<?php echo $video[2] ?>/0.jpg"
                                        alt="Placeholder" class="img-fluid img-fit w-100">
                                    <div class="mask flex-center">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/play_icon.png" alt="Play" width="50px">
                                    </div>
                                </a>
                            </div>
                            <div class="content">
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#">
                                        <h6 class="mb-1 text-green font-weight-medium">
                                            <?php echo $video[0]; ?>
                                        </h6>
                                    </a>
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri()."/images/icons/link-arrow.svg" ?>"
                                            alt="Arrow right icon" width="28px">
                                    </a>
                                </div>
                                <div class="desc"><?php echo wp_trim_words($video[1], 10, '...'); ?></div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <!-- <div class="text-center">
                    <a class="btn custom-btn" href="#">MORE VIDEOS</a>
                </div> -->
            </div>
        </section>

        <section>
            <div class="container py-default">
                <div class="text-center mb-header">
                    <h1>FAQ</h1>
                </div>
                <!--Accordion wrapper-->
                <div class="accordion md-accordion bar-accordion" id="faq" role="tablist" aria-multiselectable="true">
                    <div class="row">
                        <?php 
                        $faq = [
                            ["Who is eligible to play on Kingsmill's courses?", "The River and Plantation Courses are open to overnight resort guests and members only.  The Woods Course is open to Full Golf Members only."],
                            ["What phone number do I call for booking tee times?", "Please call 757.253.3906 for all golf reservations."],
                            ["What is the dress code?", "Bermuda length shorts or walking shorts allowed (no denim pants or shorts). Men's shirts must have a collar. Women’s shirts w/out sleeves must have collars; if without a collar then it must have sleeves. Halter-tops and bathing suits tops are not permitted."],
                            ["What is the cart path rule for the day?", "Each morning, the golf course Superintendent will determine whether or not we will be able to drive our golf carts out onto the fairways. Please call in the morning to determine our restrictions."],
                            ["How do you accommodate handicap players?", "And what does the handicap flag allow me to do? We require a written doctors note or disability card in order to obtain a handicap flag.  Golf cars with handicap flags will be allowed the following guidelines:
                            <ul>
                                <li>Players may drive carts inside cart paths but please return carts to the paths at the cart posts.</li>
                                <li>Players may not drive closer than 10 yards from any green or fairway bunker.</li>
                                <li>Carts must remain on the cart path in restricted areas. Such as par threes and holes designated “Cart Path Only”.</li>
                            </ul>
                            **Each morning the course superintendent will determine whether or not handicap flags will be allowed for the day."],
                            ["What is the pace of play for each course?", "Each course is paced in between 4 to 4 ½ hours. We also will add an additional 30 minutes to the round if we are cart path only."],
                            ["What is the cart fee per person?", "All fees listed on the website include the golf cart fee. Taxes are not included."],
                            ["Can someone ride along with me while I play my round?", "Depending on the availability of golf carts, you may have an additional person ride along while you play the round.  This person will need to pay our $30 + tax above golf cart fee. The availability of golf carts will be determined by the golf professional on duty."],
                            ["Can I bring a cooler onto the courses?", "No, Coolers and outside food and drinks are not permitted with the exception of bottled water."],
                            ["Can juniors drive golf carts?", "If two juniors, neither of which possess a valid driver’s license, are accompanying an adult during a round of golf then one junior will need to walk. It is our recommendation to alternate holes for each junior to walk, or find an additional adult to fill the fourth player in a group."],
                            ["May I leave my clubs at the golf course during my stay?", "Yes, we will be happy to store your clubs during the entire duration of your stay.  All clubs will be safely locked into our bag storage room at the end of each day. We will also gladly transport clubs to and from each course depending on your tee time schedule."],
                            ["May I rent golf clubs and shoes?", "Yes, we do offer both men’s and women’s Taylormade golf sets to rent.  The fee will be $65 for the rentals and will include a complimentary 6-pack of Taylormade golf balls. We also provide rental shoes for $15."],
                            ["How much do range balls cost in addition to my rounds?", "Driving range balls are included with the majority of our greens fees. Some promotional rounds do not include practice balls."],
                            ["When will you be overseeding and aerifying the golf courses?", "Below are the dates for 2019 course maintenance. Depending on the weather, it will usually take 10-14 days for the course to fully heal from the maintenance. Overseeding will also require golf cars to be on the path between 1-3 weeks following the actual dates. The schedules listed below are subject to change based on weather/business needs.
                            2020 Aeration Schedule"],
                            ["Why should I attend the Kingsmill Golf Academy?", "There are a variety of very important reasons. Our Lead Instructor, Chris George, was named #1 in Virginia by Golf Digest in 2013. It is our quality of instruction and experienced staff of instructors that allow us to be one of the best golf instruction destinations in the country."],
                            ["What is the student/teacher ratio?", "Our student/teacher ratio is 4:1. It is important to keep in mind that a student/teacher ratio can be miss-leading. For example: If one of our schools has six students then we would have two instructors. Therefore, the ratio for that particular school would be 3:1."],
                            ["What method of teaching is used at the Kingsmill Golf Academy?", "At the Kingsmill Golf Academy our instruction programs are designed to meet the needs of you as an individual player. Your skill level, learning style, and golf swing tendencies are all specific to you and we work with you as an individual applying specific drills and strategies to help improve your game. We do not teach a method. We do work with you as an individual player taking into account your strength and flexibility level, player style, learning style, and goals. We develop a plan together to help you reach your maximum potential as a golfer."],
                            ["Tell me about your instruction facility", "Our instruction facilities include a private teaching tee, two private short game areas, four private practice greens and an indoor video studio, which includes a launch monitor, two video systems and a putting green."],
                            ["Do you have courses to play?", "We have 36 holes of fantastic golf here at Kingsmill. The River Course served as a popular PGA Tour site for 22 years and is home to the LPGA Kingsmill Championship. Television viewers are familiar with the course’s signature 17th hole – a par 3 hole perched on the edge of the James River. In 2004, original architect Pete Dye returned to Kingsmill to oversee changes to the River Course layout and green complexes. The renovation included the addition of tees from which golfers of all abilities can enjoy, redesigned fairway bunkering on several holes presents new and exciting challenges, and resurfaced greens allow for faster and smoother putting on the recontoured surfaces.

                            Golf legend Arnold Palmer created a sister course to The River Course to appeal to golfers of all abilities. The Plantation Course recently named by Golf for Women as one of the top ten Best Courses based on course design, playability, aesthetics, practice facility, and amenities.  "],
                            ["What if I am a good player and my spouse is a beginner?", "Our instruction is designed to meet the needs of each player individually. Each player is unique and we give you presentations and information for your golf swing to help you become a more consistent player."],
                            ["What is Kingsmill's rain policy?", "In the event of rain we do continue on with the school. We have an indoor studio and a covered area in which we can continue our practice and instruction sessions. In the event of threatening weather the school may be suspended temporarily to accommodate Mother Nature. After all, we cannot control the weather."],
                        ];
                        foreach ($faq as $key => $item) { ?>
                        <!-- Accordion card -->
                        <div class="col-md-6 card-col">
                            <div class="card">
                                <!-- Card header -->
                                <div class="card-header" role="tab" id="heading<?php echo $key ?>">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#faq"
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
                                    aria-labelledby="heading<?php echo $key ?>" data-parent="#faq">
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

        <section class="single-package-info py-default" id="green-fees-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="d-flex flex-wrap justify-content-right">
                            <div class="left-col image-wrap">
                                <div class="image view">
                                    <img src="<?php echo get_template_directory_uri()."/images/faq/400_0427.jpg"; ?>"
                                        alt="<?php the_title(); ?>" class="img-fit img-fluid">
                                    <div class="mask d-flex rgba-black-light">
                                        <div class="align-self-end">
                                            <!-- <h5><?php the_title(); ?></h5> -->
                                            <div>
                                                <a href="" class="btn custom-btn bg-d-yellow">BOOK NOW</a>
                                            </div>
                                            <div class="or-call">
                                                Or Call: <a class="text-white font-weight-normal"
                                                    href="tel:+1-844-738-5784">844-738-5784</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content right-col">
                                <div>
                                    <h1>Green Fees</h1>
                                    <p>
                                        Includes greens and cart fees. Golfers must be resort guests or Club at
                                        Kingsmill members to play on Kingsmill courses.
                                    </p>
                                </div>
                                <!--Accordion wrapper-->
                                <div class="accordion md-accordion faq-accordion" id="green-fees" role="tablist"
                                    aria-multiselectable="true">

                                    <!-- Accordion card -->
                                    <div class="card-col">
                                        <div class="card bg-transparent">
                                            <!-- Card header -->
                                            <div class="card-header bg-transparent" role="tab" id="heading1">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#green-fees"
                                                    href="#collapse1" aria-controls="collapse1">

                                                    <div class="header">
                                                        <h6 class="mb-0 font-weight-bold">
                                                            18-Hole Golf Rates
                                                        </h6>
                                                        <i class="fas fa-caret-down rotate-icon"></i>
                                                    </div>
                                                </a>
                                            </div>
                                            <!-- Card body -->
                                            <div id="collapse1" class="collapse show" role="tabpanel"
                                                aria-labelledby="heading1" data-parent="#green-fees">
                                                <div class="card-body">
                                                    <table class="text-black">
                                                        <thead>
                                                            <tr>
                                                                <th class="p-2"></th>
                                                                <th class="p-2">RIVER COURSE</th>
                                                                <th class="p-2">PLANTATION COURSE</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="p-2">November - March</td>
                                                                <td class="p-2">$100</td>
                                                                <td class="p-2">$70</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="p-2">April - October</td>
                                                                <td class="p-2">$195</td>
                                                                <td class="p-2">$125</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion card -->

                                    <!-- Accordion card -->
                                    <div class="card-col">
                                        <div class="card bg-transparent">
                                            <!-- Card header -->
                                            <div class="card-header bg-transparent" role="tab" id="heading2">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#green-fees"
                                                    href="#collapse2" aria-controls="collapse2">

                                                    <div class="header">
                                                        <h6 class="mb-0 font-weight-bold">
                                                            9-Hole Golf Rates
                                                        </h6>
                                                        <i class="fas fa-caret-down rotate-icon"></i>
                                                    </div>
                                                </a>
                                            </div>
                                            <!-- Card body -->
                                            <div id="collapse2" class="collapse" role="tabpanel"
                                                aria-labelledby="heading2" data-parent="#green-fees">
                                                <div class="card-body">
                                                    <table class="text-black">
                                                        <thead>
                                                            <tr>
                                                                <th class="p-2"></th>
                                                                <th class="p-2">RIVER COURSE</th>
                                                                <th class="p-2">PLANTATION COURSE</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="p-2">November - March</td>
                                                                <td class="p-2">$60</td>
                                                                <td class="p-2">$45</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="p-2">April - October</td>
                                                                <td class="p-2">$110</td>
                                                                <td class="p-2">$70</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion card -->

                                    <!-- Accordion card -->
                                    <div class="card-col">
                                        <div class="card bg-transparent">
                                            <!-- Card header -->
                                            <div class="card-header bg-transparent" role="tab" id="heading3">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#green-fees"
                                                    href="#collapse3" aria-controls="collapse3">

                                                    <div class="header">
                                                        <h6 class="mb-0 font-weight-bold">
                                                            Twilight golf rates - 3:00 pm
                                                        </h6>
                                                        <i class="fas fa-caret-down rotate-icon"></i>
                                                    </div>
                                                </a>
                                            </div>
                                            <!-- Card body -->
                                            <div id="collapse3" class="collapse" role="tabpanel"
                                                aria-labelledby="heading3" data-parent="#green-fees">
                                                <div class="card-body">
                                                    <table class="text-black">
                                                        <thead>
                                                            <tr>
                                                                <th class="p-2"></th>
                                                                <th class="p-2">RIVER COURSE</th>
                                                                <th class="p-2">PLANTATION COURSE</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="p-2">April - October</td>
                                                                <td class="p-2">$125</td>
                                                                <td class="p-2">$85</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion card -->

                                    <!-- Accordion wrapper -->
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap disclaimer-wrap">
                            <div class="logo d-flex justify-content-md-end align-items-center left-col">
                            </div>
                            <div class="disclaimer right-col">
                                <p><a href="">Request a Tee Time online</a> or call <a
                                        href="tel:757.253.3906">757.253.3906.</a></p>
                                <i>*Rates are subject to change. Please contact the Pro Shop for the most current
                                    rates.</i>
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