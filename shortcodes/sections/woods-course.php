<?php
$woods = [
    ["Hole 1", "Par 4 | 385 Yards", "This fair opening hole requires a tee shot favoring the left side of the fairway to avoid a fairway bunker on the right.  A well placed tee ball leaves a mid to short iron into a well bunkered green.  Putts demand caution as the green tilts from back to front."],
    ["Hole 2", "Par 4 | 387 Yards", "Be ready to hit a perfect approach into this par four.  A tee shot directed just left of the fairway bunker will be met with an extremely intimidating approach.  This green is guarded by water short, left, and long and demands distance control."],
    ["Hole 3", "Par 4 | 457 Yards", "The longest of the par fours on the golf course, do not be fooled into challenging the water. A tee shot favoring the left center will leave a long iron into a large undulating green protected by bunkers. Par comes rarely."],
    ["Hole 4", "Par 4 | 316 Yards", "Try and pick a stroke back up on this hole.  Hit a long-iron or fairway wood down the left center of this fairway to avoid the water short and right of the green.  A short iron will be the selection but a tiered green makes club choice difficult."],
    ["Hole 5", "Par 5 | 525 Yards", "Only the longest hitters can reach this par five in two, so choose a conservative club for a tee shot with trees left and a bunker right.  A layup down the right side of the fairway will leave an approach up the bulk of the green. "],
    ["Hole 6", "Par 3 | 188 Yards", "A tee shot to the right side of this green is a must.  Deep bunkers fronting this green make any shots just short and left pay the price.  A relatively flat green makes putting fair, so take two putts and run."],
    ["Hole 7", "Par 4 | 278 Yards", "Many players may find this green reachable on the tee shot, as it plays shorter than its depicted yardage.  Favor the right side as a woods line the left.  This green is well-guarded by bunkers but plays fair once the surface is reached."],
    ["Hole 8", "Par 3 | 145 Yards", "Proper club selection is a must on this par three.  A gully fronted by a large embankment makes poorly struck shots feed back into the hazard.  A green inundated with undulations makes putting a difficult task.  Do not underestimate this hole."],
    ["Hole 9", "Par 5 | 572 Yards", "Plans of going for this hole in two?  Not likely.  This long par five requires a tee shot in the fairway to avoid trees on the left and a large hill on the right.  Hitting a layup favoring the right is a must with a water short and left.  A swale on the rear of this green makes distance control on a front pin a must."],
    ["Hole 10", "Par 4 | 400 Yards", "Tee shots down the left center will leave a clear path into an uphill approach shot.  Shots into the green should veer left as an embankment on the right kicks wary approaches into the hazard.  Putts from behind the hole will be fast."],
    ["Hole 11", "Par 4 | 412 Yards", "Choosing the proper line for the tee shot is necessary on this difficult par four.  Aiming toward the pinnacle of the hill on the left will feed back into this sloping fairway.  Downhill approaches into this large green will require proper club selection."],
    ["Hole 12", "Par 3 | 184 Yards", "Take one extra club on this par three.  Water fronting the green will snatch any balls left short of the surface.  Also take notice to the bunker separating the adjoining green.  Putts will veer toward the water’s edge."],
    ["Hole 13", "Par 5 | 478 Yards", "Aim to rally on this reachable par five.  Tee shots favoring the right side will avoid the fairway bunker, but get too ambitious and you’ll find yourself in the woods that line the right side.  Favor the left side of the green as bunkers and a hazard guard the right."],
    ["Hole 14", "Par 4 | 430 Yards", "A risk/reward par four.  A large fairway bunker protects the corner as well as trees down the left side.  Tee shots along the left side will leave the flattest lie for an approach into a large green.  Proper club choice is needed throughout the hole."],
    ["Hole 15", "Par 4 | 384 Yards", "A risk/reward par four.  A large fairway bunker protects the corner as well as trees down the left side.  Tee shots along the left side will leave the flattest lie for an approach into a large green.  Proper club choice is needed throughout the hole."],
    ["Hole 16", "Par 5 | 514 Yards", "This par five requires a solid struck tee shot down the right side of the fairway to avoid a hazard on the left.  Layups should favor the right side of the fairway for a look at the majority of the green.  A front pin plays the most break."],
    ["Hole 17", "Par 3 | 151 Yards", "Short, but don’t be fooled.  A tee shot not finding this green will undoubtedly be in trouble.  Thick woods surrounding the green require precision on this difficult par three.  Take par and run."],
    ["Hole 18", "Par 4 | 453 Yards", "Two well-placed shots are necessary on this fantastic finishing hole.  Tee shots down the left side leave shorter approaches and avoid fairway bunkers right.  Make a confident swing into this dangerously guarded, multi-tiered green."],
];
?>
<section>
    <div class="gka-theme-gallery gka-theme-gallery-template-3">
        <div class="gka-theme-gallery-section py-default">
            <h1 class="text-center mb-header">The Woods Course</h1>
            <div class="container position-relative">
                <!-- Slider main container -->
                <div class="swiper-container gka-theme-gallery-swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <?php foreach ($woods as $key => $item) { 
								$img_num = $key+1;
								?>
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="row mx-0">
                                <div class="image text-center col-md-6">
                                    <img src="<?php echo get_template_directory_uri()."/images/golf-courses/the-woods-course/Woods_Hole_". $img_num .".png" ?>"
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