<?php
$plantation = [
    ["Hole 1", "PAR 4 | 365 YARDS", "A narrow, undulated green is protected by bunkers on both sides. An approach played from the left side of the fairway provides the best opportunity to score."],
    ["Hole 2", "Par 5 | 494 Yards", "This par five requires a drive and approach favoring the right side to avoid a hazard running on the left. A large green will entice the longer hitter, but the bunkers surrounding can lead to bigger problems."],
    ["Hole 3", "Par 4 | 378 Yards", "Accuracy from the tee is a priority on this tight par four.  Tee shots should favor the left center of the fairway.  A large, sloped green will leave putts breaking from every direction."],
    ["Hole 4", "Par 4 | 403 Yards", "The most difficult hole on the front nine, this hole requires complete precision off the tee.  A hazard running on the left and OB on the right make this hole visually intimidating.  A well placed tee ball leaves a mid-iron into a reasonably flat green."],
    ["Hole 5", "Par 3 | 179 Yards", "A par three where short is not a bad miss.  With bunkers right and a steep embankment left, this tee shot demands precision into likely the smallest green on the course.  Par is a great score here."],
    ["Hole 6", "Par 4 | 369 Yards", "Tee shots should favor the left center of this fairway, leaving a mid-iron into a large green.  A multi-tiered green makes an accurate approach a must for the best chance at birdie."],
    ["Hole 7", "Par 4 | 369 Yards", "This short par four rewards a left to right shaped tee shot, which will leave a short-iron for the approach.  Favor the left side of the green, as a bunker on the right makes a back pin nearly untouchable."],
    ["Hole 8", "Par 5 | 501 Yards", "The epitome of a risk-reward par five.  Most players should hit a long-iron or fairway wood off the tee, leaving the same club in hand for the second shot.  Longer hitters can attempt to cut the corner, enabling its reach in two.  Favor the right side on approaches into the green."],
    ["Hole 9", "Par 3 | 117 Yards", "Pinpoint accuracy serves best on the shortest of the courses par threes.  A multi-tiered, undulating green is protected by two bunkers and a hazard running along the right"],
    ["Hole 10", "Par 4 | 421 Yards", "Pinpoint accuracy serves best on the shortest of the courses par fours.  A multi-tiered, undulating green is protected by two bunkers and a hazard running along the right."],
    ["Hole 11", "Par 4 | 434 Yards", "Not to be outdone, this grueling par four requires an accurate tee shot leaving a long-iron in hand for the approach.  The large but undulating green is surrounded by hazards on the right and the rear.  Pars are few and far between."],
    ["Hole 12", "Par 5 | 460 Yards", "This par five is a reprieve from its two predecessors.  A tee ball down the middle will allow reaching this hole in two possible. A hazard fronting the green splits the hole in half, requiring those laying up to be frugal in gauging the proper distance."],
    ["Hole 13", "Par 4 | 387 Yards", "This par four is a reprieve from its two predecessors.  A tee ball down the middle will allow reaching this hole in two possible. A hazard fronting the green splits the hole in half, requiring those laying up to be frugal in gauging the proper distance.  "],
    ["Hole 14", "Par 3 | 143 Yards", "Another short but well protected par three, this hole requires an accurate tee ball to avoid moguls left and long, and a hazard to the front and right of the green.  Putting will be extremely determinant on the hole location."],
    ["Hole 15", "Par 5 | 566 Yards", "Unreachable by all but the longest of hitters, this is likely the only true three shot par five on the course.  Tee balls should favor the left side, as well as second shots and approaches into the green.  Two bunkers and a hazard on the right guard a relatively flat green."],
    ["Hole 16", "Par 4 | 349 Yards", "An accurate tee ball is a must, as strategically placed bunkers make approaches from them extremely difficult.  Bunkers surround this multi-tiered, undulating green.  Do not take this short hole lightly."],
    ["Hole 17", "Par 3 | 177 Yards", "Protected by a large marsh in front, the tee shot into this hole can range from downhill to uphill depending on the chosen tee."],
    ["Hole 18", "Par 4 | 353 Yards", "A hard dogleg right par four requires a long-iron or fairway wood first shot aiming at the bunker directly in front of the tee.  A short-iron approach favoring the front of the green is a must to avoid a hazard running immediately over the back.  This hole can make or break your round."],
];
?>
<section>
    <div class="gka-theme-gallery gka-theme-gallery-template-3">
        <div class="gka-theme-gallery-section py-default">
            <h1 class="text-center mb-header">The Plantation Course</h1>
            <div class="container position-relative">
                <!-- Slider main container -->
                <div class="swiper-container gka-theme-gallery-swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <?php foreach ($plantation as $key => $item) { 
								$img_num = $key+1;
								?>
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="row mx-0">
                                <div class="image text-center col-md-6">
                                    <img src="<?php echo get_template_directory_uri()."/images/golf-courses/the-plantation-course/KMP_Hole_". $img_num .".png" ?>"
                                        alt="The Plantation Course" class="img-fluid img-fit">
                                </div>
                                <div class="col-md-5 d-flex align-items-center bg-l-green">
                                    <div class="content">
                                        <h3><?php echo $item[0] ?></h3>
                                        <div class="text-green"><?php echo $item[1] ?></div>
                                        <p class="mt-4"><?php echo $item[2] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="control-wrap justify-content-center">
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="swiper-button-prev">
                    <img src="<?php echo get_template_directory_uri()."/images/icons/swiper-arrow-left.svg" ?>" alt=""
                        class="">
                </div>
                <div class="swiper-button-next">
                    <img src="<?php echo get_template_directory_uri()."/images/icons/swiper-arrow-right.svg" ?>" alt=""
                        class="">
                </div>
            </div>
        </div>
    </div>
</section>