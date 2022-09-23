<?php
$river = [
    ["Hole 1", "Par 4 | 369 Yards", "A properly placed tee shot to the left side of the fairway will leave a short iron approach into the green. Beware of the fairway bunkers on the right side, as they do come into play from the tee box."],
    ["Hole 2", "Par 3 | 198 Yards", "A demanding hole requiring an accurate mid to long iron shot into a well-guarded green.  The conservative play is to aim for the front-left portion of the green allowing the terrain to feed the ball toward the center."],
    ["Hole 3", "Par 5 | 518 Yards", "Longer hitters may go for this green in two but will be hitting into a small, elevated target. Others may lay-up on the left side of the fairway at the bottom of the hill, leaving a comfortable short iron shot into the green."],
    ["Hole 4", "Par 4 | 439 Yards", "The key here is taking the left side out of play with a well placed tee ball down the right side.  A more aggressive line down the left provides a risk which far outweighs the reward."],
    ["Hole 5", "Par 3 | 173 Yards", "Aiming for the center or left side of the green is the smart play.  Beware of the hazard and bunker that guard the right side of this green.  Better scores will come from shots hit to the left side of this hole."],
    ["Hole 6", "Par 4 | 369 Yards", "This undulated and well-bunkered green requires accuracy and good distance control on the approach shot.  Landing the ball on the wrong level creates a difficult two putt."],
    ["Hole 7", "Par 5 | 525 Yards", "A true three shot par five requiring length and accuracy off the tee.  The second shot should favor the right side in order to set up a level lie for the approach shot into the green."],
    ["Hole 8", "Par 4 | 419 Yards", "Accuracy off the tee is the top priority on this difficult par four.  Tee shots should favor the left center of the fairway.  A narrow green requires a precise second shot as well."],
    ["Hole 9", "Par 4 | 467 Yards", "This long par four requires two good shots to get on in regulation.  Several bunkers guard the right side of this kidney shaped green making the front left portion of the green a safe play."],
    ["Hole 10", "Par 4 | 413 Yards", "Placing the drive in the fairway is crucial to setting up the second shot.  A relatively flat green is heavily bunkered making the safe zone just short and left of the green."],
    ["Hole 11", "Par 4 | 408 Yards", "Tee shots should favor the right side of the hole.  A long, narrow green makes an accurate second shot essential.  Near misses may feed into one of the collection areas ending up several yards from the green."],
    ["Hole 12", "Par 4 | 396 Yards", "Landing the tee shot on the right side of the fairway will create an open approach shot to an elevated green. Second shots should miss long rather than short.  This hole places a premium on accuracy rather than length."],
    ["Hole 13", "Par 3 | 175 Yards", "Taking the right side bunkering out of play is the main goal on this par three.  Aiming for the left-center of the green is the smart play."],
    ["Hole 14", "Par 4 | 374 Yards", "Taking the fairway bunker on the left side of the fairway out of play on the tee shot is the key to setting up the second shot.  A shallow green makes for a difficult target requiring good distance control on the approach shot to the green."],
    ["Hole 15", "Par 5 | 503 Yards", "A solid drive to the left side of the fairway is the play from the tee.  The longer hitter may be tempted to go for the green in two, however all players would do well to play down the left side taking the trouble in front of the green out of play."],
    ["Hole 16", "Par 4 | 458 Yards", "A long tee shot to the left side of the fairway provides the best angle of approach.  Two deep bunkers guard the back portion of the green making an accurate second shot essential.  Playing short provides the best opportunity to score."],
    ["Hole 17", "Par 3 | 177 Yards", "Kingsmill’s signature hole features an extremely deep green making proper club selection on the tee shot the highest priority.  The right side poses a lot of danger making the safety zone just short and left of the green."],
    ["Hole 18", "Par 4 | 450 Yards", "This hole requires length and accuracy off the tee in order to negotiate the large water hazard in front of the back tee boxes.  The longer hitter may take a more aggressive line while others should aim well to the right, which provides the shortest carry distance to the fairway.  The water hazard behind and to the left of the green requires a precise mid to long iron approach."],
];
?>
<section>
    <div class="gka-theme-gallery gka-theme-gallery-template-3">
        <div class="gka-theme-gallery-section py-default">
            <h1 class="text-center mb-header">The River Course</h1>
            <div class="container position-relative">
                <!-- Slider main container -->
                <div class="swiper-container gka-theme-gallery-swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <?php foreach ($river as $key => $item) { 
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