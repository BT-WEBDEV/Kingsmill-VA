<?php
/**
 * Template Name: Culinary Services
 *
 * Description: Culinary Services
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
        <section>
            <div class="container-fluid px-0 pt-default">
                <div class="text-center mb-header">
                    <h1>Wedding Menu</h1>
                </div>
                <div class="krr-tab-pills">
                    <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-1-tab" data-toggle="pill" href="#pills-1" role="tab"
                                aria-controls="pills-1" aria-selected="true"><span>RECEPTION ITEMS</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-2-tab" data-toggle="pill" href="#pills-2" role="tab"
                                aria-controls="pills-2" aria-selected="false"><span>KINGSMILL PLATED</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-3-tab" data-toggle="pill" href="#pills-3" role="tab"
                                aria-controls="pills-3" aria-selected="false"><span>JAMES RIVER BUFFET</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-4-tab" data-toggle="pill" href="#pills-4" role="tab"
                                aria-controls="pills-4" aria-selected="false"><span>RIVERVIEW ACTION STATIONS</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container-fluid bg-l-green">
                <div class="wedding-menu-tab-content">
                    <div class="tab-content pt-3 px-0" id="pills-wedding-menu-content">

                        <div class="tab-pane fade show active" id="pills-1" role="tabpanel"
                            aria-labelledby="pills-1-tab">
                            <div class="gka-theme-2cols-slider-text">
                                <div class="row">
                                    <div class="col-lg-6 p-0 align-self-center">
                                        <div class="slider">
                                            <!-- Slider main container -->
                                            <div class="swiper-container gka-theme-gallery-swiper">
                                                <!-- Additional required wrapper -->
                                                <div class="swiper-wrapper">

                                                    <!-- Slides -->
                                                    <div class="swiper-slide">
                                                        <div class="image">
                                                            <img src="<?php echo get_template_directory_uri()."/images/culinary-services/Kingsmill-Hors-d'oeuvre.jpg" ?>"
                                                                alt="" class="img-fluid img-fit w-100">
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="control-wrap pr-default">
                                                    <div class="swiper-button-prev">
                                                        <img src="<?php echo get_template_directory_uri()."/images/icons/arrow-left.svg" ?>"
                                                            alt="" class="">
                                                    </div>

                                                    <div class="swiper-pagination"></div>

                                                    <div class="swiper-button-next">
                                                        <img src="<?php echo get_template_directory_uri()."/images/icons/arrow-right.svg" ?>"
                                                            alt="" class="">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="content p-3">
                                            <h6 class="font-weight-bold">Cold Hors D’Oeuvres*</h6>
                                            <ul>
                                                <li>Pulled BBQ Chicken Salad on Crispy Toast with Charred Pineapple
                                                    Jalapeno Relish</li>
                                                <li>Feta and Hummus on Pita Crisps with Cucumber Bruschetta</li>
                                                <li>Local Crab Salad on a Crostini with Lemon Dijon Sauce</li>
                                                <li>Pesto Marinated Mozzarella, Tomato and Olive Skewer</li>
                                                <li>Devilled Virginia Ham Salad on Cheddar Biscuit</li>
                                                <li>Brie Cheese and Raspberry on Savory Crostini</li>
                                                <li>Saffron Lobster Salad on Melba Toast</li>
                                            </ul>
                                            <h6 class="font-weight-bold">Hot Hors D’Oeuvres*</h6>
                                            <ul>
                                                <li>Chesapeake Crab Cake with Whole Grain Mustard Remoulade</li>
                                                <li>Shrimp and Crab Spring Roll with Chili Soy Vinaigrette</li>
                                                <li>Pesto Marinated Chicken Skewers with Garlic Aioli</li>
                                                <li>Manchego and Chorizo Skewers with Chimichurri</li>
                                                <li>Vegetarian Spring Rolls with Chili Soy Vinaigrette </li>
                                                <li>Asian BBQ Pork Steamed Buns with Scallions</li>
                                                <li>Fried Coconut Shrimp with Mango Chutney</li>
                                                <li>Za’atar Lamb Lolli’s </li>
                                            </ul>
                                            <i class="small">*Packages include a total of 3 passed hors d’oeuvres: Hot,
                                                Cold or
                                                Combined.
                                                *More appetizers may be ordered at the per piece price with a minimum of
                                                50 per order.
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                            <div class="gka-theme-2cols-slider-text">
                                <div class="row">
                                    <div class="col-lg-6 p-0 align-self-center">
                                        <div class="slider">
                                            <!-- Slider main container -->
                                            <div class="swiper-container gka-theme-gallery-swiper">
                                                <!-- Additional required wrapper -->
                                                <div class="swiper-wrapper">

                                                    <!-- Slides -->
                                                    <div class="swiper-slide">
                                                        <div class="image">
                                                            <img src="<?php echo get_template_directory_uri()."/images/culinary-services/Kingsmill-Culinary-Course.jpg" ?>"
                                                                alt="" class="img-fluid img-fit w-100">
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="control-wrap pr-default">
                                                    <div class="swiper-button-prev">
                                                        <img src="<?php echo get_template_directory_uri()."/images/icons/arrow-left.svg" ?>"
                                                            alt="" class="">
                                                    </div>

                                                    <div class="swiper-pagination"></div>

                                                    <div class="swiper-button-next">
                                                        <img src="<?php echo get_template_directory_uri()."/images/icons/arrow-right.svg" ?>"
                                                            alt="" class="">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="content p-3">
                                            <h6 class="font-weight-bold">First Course</h6>
                                            <ul>
                                                <li>Baby Arugula and Romaine, English Cucumber, Kalamata Olives, Grape
                                                    Tomatoes, Feta Cheese with Lemon Vinaigrette </li>
                                                <li>Baby Romaine, Shaved Asiago, Marinated Tomatoes, Garlic Croutons and
                                                    a Pancetta Crisp with Caesar Dressing</li>
                                                <li>Baby Spinach, Cabernet Poached Pear and Goat Cheese Crostini with
                                                    Maple Balsamic Vinaigrette</li>
                                                <li>Kingsmill’s Signature Corn and Crab Chowder with Cornbread Croutons
                                                </li>
                                                <li>Rustic Tomato Basil Bisque</li>
                                                <li>Seasonal Gazpacho</li>
                                            </ul>
                                            <h6 class="font-weight-bold">Main Course</h6>
                                            <ul>
                                                <li>Lemon and Thyme Seared Country Chicken</li>
                                                <li>Herb Roasted Rack of Lamb</li>
                                                <li>Roasted Salmon Provencal</li>
                                                <li>Chef’s Vegetarian Creation</li>
                                                <li>Grilled New York Strip</li>
                                                <li>Miso Glazed Grouper</li>
                                            </ul>
                                            <i class="small">*Served with fresh baked dinner rolls and freshly brewed
                                                coffee.
                                                **Dietary restrictions and preferences can be accommodated with
                                                additional options, if needed.
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab">
                            <div class="gka-theme-2cols-slider-text">
                                <div class="row">
                                    <div class="col-lg-6 p-0 align-self-center">
                                        <div class="slider">
                                            <!-- Slider main container -->
                                            <div class="swiper-container gka-theme-gallery-swiper">
                                                <!-- Additional required wrapper -->
                                                <div class="swiper-wrapper">

                                                    <!-- Slides -->
                                                    <div class="swiper-slide">
                                                        <div class="image">
                                                            <img src="<?php echo get_template_directory_uri()."/images/culinary-services/GettyImages-650655146.jpg" ?>"
                                                                alt="" class="img-fluid img-fit w-100">
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="control-wrap pr-default">
                                                    <div class="swiper-button-prev">
                                                        <img src="<?php echo get_template_directory_uri()."/images/icons/arrow-left.svg" ?>"
                                                            alt="" class="">
                                                    </div>

                                                    <div class="swiper-pagination"></div>

                                                    <div class="swiper-button-next">
                                                        <img src="<?php echo get_template_directory_uri()."/images/icons/arrow-right.svg" ?>"
                                                            alt="" class="">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="content p-3">
                                            <h6 class="font-weight-bold">Soup</h6>
                                            <ul>
                                                <li>Kingsmill’s Signature Corn and Crab Chowder</li>
                                                <li>Rustic Tomato Basil Bisque</li>
                                                <li>Seasonal Gazpacho</li>
                                                <li>Minestrone Soup</li>
                                            </ul>
                                            <h6 class="font-weight-bold">Salad</h6>
                                            <div>Mixed Garden Greens & Assorted Seasonal Toppings with Variety of
                                                Dressings - Choice of one of the following:</div>
                                            <ul>
                                                <li>Prosciutto Ham and Melon Salad</li>
                                                <li>Roasted Vegetable Salad</li>
                                                <li>Tuscan Tortellini Salad</li>
                                                <li>Artichoke Greek Salad</li>
                                            </ul>
                                            <h6 class="font-weight-bold">Entrés</h6>
                                            <div>Your Choice of Three</div>
                                            <ul>
                                                <li>Blackened Mahi Mahi with Pineapple Salsa</li>
                                                <li>Brown Sugar and Cayenne Crusted Salmon</li>
                                                <li>Chesapeake Crab Cakes with Mango Salsa</li>
                                                <li>Marinated and Grilled Breast of Chicken</li>
                                                <li>Charcoal Grilled Rib Eye Steak</li>
                                                <li>Spiced Pork Loin</li>
                                                <li>Chicken Tuscany</li>
                                            </ul>
                                            <h6 class="font-weight-bold">Vegetables</h6>
                                            <div>Select One</div>
                                            <ul>
                                                <li>Haricots Verts with Roasted Shallots and Almonds</li>
                                                <li>Blistered Lemon Roasted Asparagus</li>
                                                <li>Roasted Seasonal Vegetables</li>
                                                <li>Maple Glazed Carrots</li>
                                            </ul>
                                            <h6 class="font-weight-bold">Starch</h6>
                                            <div>Select One</div>
                                            <ul>
                                                <li>Roasted Baby Sweet Potatoes with Candied Pecans</li>
                                                <li>Caramelized Onion Whipped Yukon Gold Potatoes</li>
                                                <li>Roasted Garlic Yukon Gold Potatoes</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab">
                            <div class="gka-theme-2cols-slider-text">
                                <div class="row">
                                    <div class="col-lg-6 p-0 align-self-center">
                                        <div class="slider">
                                            <!-- Slider main container -->
                                            <div class="swiper-container gka-theme-gallery-swiper">
                                                <!-- Additional required wrapper -->
                                                <div class="swiper-wrapper">

                                                    <!-- Slides -->
                                                    <div class="swiper-slide">
                                                        <div class="image">
                                                            <img src="<?php echo get_template_directory_uri()."/images/culinary-services/Kingsmill_Buffet.jpg" ?>"
                                                                alt="" class="img-fluid img-fit w-100">
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="control-wrap pr-default">
                                                    <div class="swiper-button-prev">
                                                        <img src="<?php echo get_template_directory_uri()."/images/icons/arrow-left.svg" ?>"
                                                            alt="" class="">
                                                    </div>

                                                    <div class="swiper-pagination"></div>

                                                    <div class="swiper-button-next">
                                                        <img src="<?php echo get_template_directory_uri()."/images/icons/arrow-right.svg" ?>"
                                                            alt="" class="">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="content p-3">
                                            <h6 class="font-weight-bold">Charcuterie & Antipasti Display</h6>
                                            <p>Selection of Italian Meats and Imported Cheeses with Balsamic Grilled
                                                Veggies, Rosemary Focaccia and Garlic Rubbed Ciabatta </p>

                                            <h6 class="font-weight-bold">Chesapeake Crab Cake Station</h6>
                                            <p>Signature Lump Crab Cakes with Pineapple Salsa, Dijon Remoulade and
                                                Wild Berry Couli</p>

                                            <h6 class="font-weight-bold">Bourbon Glazed Virginia Ham Station</h6>
                                            <p>Mini Corn Muffins & Biscuits with Apple Butter, Peach Butter and
                                                Jalapeno Glaze</p>

                                            <h6 class="font-weight-bold">Grilled Seafood Display*</h6>
                                            <div>Seven (7) Pieces Per Person</div>
                                            <ul>
                                                <li>Chilled Colossal Shrimp</li>
                                                <li>Clams on Half Shell</li>
                                                <li>York River Oysters</li>
                                                <li>Stone Crab Claws</li>
                                                <i class="small">*Lobster Tails may be added at $10.00++ per tail.</i>
                                            </ul>

                                            <h6 class="font-weight-bold">Shrimp & Grits Station</h6>
                                            <div>Seven (7) Pieces Per Person</div>
                                            <ul>
                                                <li>Marinated Rock Shrimp with Creole BBQ Sauce</li>
                                                <li>Aged Chorizo with Garlic Chimichurri</li>
                                                <li>Buttered Cheddar Stone Grits</li>
                                            </ul>

                                            <h6 class="font-weight-bold">Roasted Beef Tenderloin Station</h6>
                                            <p>Horseradish Cream, Cabernet Onions & Mini Buns</p>

                                            <h6 class="font-weight-bold">Pasta Station</h6>
                                            <div>Penne Pasta, Cheese Tortellini, Wild Mushrooms Ravioli, Seasonal
                                                Vegetables, Fresh Garlic Bread Basket</div>

                                            <i class="small">*Served with Mixed Garden Greens Salad Bar, Fresh Baked
                                                Rolls, Iced Tea and Freshly Brewed Coffee. Each action station selected
                                                requires one Chef Attendant at $125.00 plus tax per attendant.</i>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="wedding-package-pricing py-default">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="d-flex flex-wrap justify-content-right">
                            <div class="left-col image-wrap">
                                <div class="image view">
                                    <img src="<?php echo (get_the_post_thumbnail_url($post->ID, 'large')) ? : get_template_directory_uri()."/images/culinary-services/Pettus-House-Terrace-Dinner-1.jpg"; ?>"
                                        alt="<?php the_title(); ?>" class="img-fit img-fluid">
                                </div>
                            </div>
                            <div class="content right-col">
                                <div>
                                    <h3>Dining Packages</h3>
                                    <div>
                                        <!--Accordion wrapper-->
                                        <div class="accordion md-accordion" id="wedding-price-accordion" role="tablist"
                                            aria-multiselectable="true">

                                            <!-- Accordion card -->
                                            <div class="card">

                                                <!-- Card header -->
                                                <div class="card-header" role="tab" id="headingOne1">
                                                    <a data-toggle="collapse" data-parent="#wedding-price-accordion"
                                                        href="#collapseOne1" aria-expanded="true"
                                                        aria-controls="collapseOne1">
                                                        <h5 class="mb-0">
                                                            Kingsmill Plated <i
                                                                class="fas fa-angle-down rotate-icon"></i>
                                                        </h5>
                                                    </a>
                                                </div>

                                                <!-- Card body -->
                                                <div id="collapseOne1" class="collapse show" role="tabpanel"
                                                    aria-labelledby="headingOne1"
                                                    data-parent="#wedding-price-accordion">
                                                    <div class="card-body">
                                                        <div>
                                                            3 Passed Hors d'oeuvres <br>
                                                            Artisan Cheese or a Fresh Vegetable Display
                                                            Soup or Salad <br>
                                                            Choice of 2 Plated Entrées.**
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- Accordion card -->

                                            <!-- Accordion card -->
                                            <div class="card">

                                                <!-- Card header -->
                                                <div class="card-header" role="tab" id="headingTwo2">
                                                    <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#wedding-price-accordion" href="#collapseTwo2"
                                                        aria-expanded="false" aria-controls="collapseTwo2">
                                                        <h5 class="mb-0">
                                                            James River Buffet <i
                                                                class="fas fa-angle-down rotate-icon"></i>
                                                        </h5>
                                                    </a>
                                                </div>

                                                <!-- Card body -->
                                                <div id="collapseTwo2" class="collapse" role="tabpanel"
                                                    aria-labelledby="headingTwo2"
                                                    data-parent="#wedding-price-accordion">
                                                    <div class="card-body">
                                                        <div>
                                                            3 Passed Hors d'oeuvres <br>
                                                            Artisan Cheese or a Fresh Vegetable Display <br>
                                                            Choice of Buffet Entrées.**
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- Accordion card -->

                                            <!-- Accordion card -->
                                            <div class="card">

                                                <!-- Card header -->
                                                <div class="card-header" role="tab" id="headingThree3">
                                                    <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#wedding-price-accordion" href="#collapseThree3"
                                                        aria-expanded="false" aria-controls="collapseThree3">
                                                        <h5 class="mb-0">
                                                            Riverview Action Stations <i
                                                                class="fas fa-angle-down rotate-icon"></i>
                                                        </h5>
                                                    </a>
                                                </div>

                                                <!-- Card body -->
                                                <div id="collapseThree3" class="collapse" role="tabpanel"
                                                    aria-labelledby="headingThree3"
                                                    data-parent="#wedding-price-accordion">
                                                    <div class="card-body">
                                                        <div>
                                                            3 Passed Hors d'oeuvres <br>
                                                            Artisan Cheese or a Fresh Vegetable Display <br>
                                                            4 Dinner Stations <br>
                                                            <br>
                                                            Custom Menus Priced by Request <br>
                                                            <i class="small">
                                                                *Menu prices are subject to 11% tax and 24% gratuity.
                                                                Package pricing does include alcoholic beverages. <br>
                                                                **Served with chef’s starch and fresh vegetables. Plated
                                                                Entrée can be made a Duo Plate at an additional
                                                                charge.</i>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- Accordion card -->

                                        </div>
                                        <!-- Accordion wrapper -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container-fluid px-0 pt-default">
                <div class="text-center mb-header">
                    <img class="mb-2" src="<?php echo get_template_directory_uri()."/images/icons/drinks.png" ?>"
                        alt="Drinks">
                    <h1>Bar Selections</h1>
                </div>
                <div class="krr-tab-pills">
                    <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-5-tab" data-toggle="pill" href="#pills-5" role="tab"
                                aria-controls="pills-5" aria-selected="true"><span>HOST BAR</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-6-tab" data-toggle="pill" href="#pills-6" role="tab"
                                aria-controls="pills-6" aria-selected="false"><span>CASH BAR</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container-fluid">
                <div class="wedding-menu-tab-content">
                    <div class="tab-content pt-3 px-0" id="pills-bar-content">
                        <div class="tab-pane fade show active" id="pills-5" role="tabpanel"
                            aria-labelledby="pills-5-tab">
                            <div>
                                <div class="text-center mb-3">
                                    All prices are subject to 11% tax and a 24% gratuity.
                                </div>
                                <div>
                                    <!--Accordion wrapper-->
                                    <div class="accordion md-accordion bar-accordion" id="bar-accordion1" role="tablist"
                                        aria-multiselectable="true">

                                        <div class="row">

                                            <!-- Accordion card -->
                                            <div class="col-md-6 card-col">
                                                <div class="card">
                                                    <!-- Card header -->
                                                    <div class="card-header" role="tab" id="heading1">
                                                        <a class="collapsed" data-toggle="collapse"
                                                            data-parent="#bar-accordion1" href="#collapse1"
                                                            aria-controls="collapse1">

                                                            <div class="header">
                                                                <h6 class="mb-0 col-6">
                                                                    HOUSE WINE
                                                                </h6>
                                                                <i class="fas fa-caret-down rotate-icon col-3"></i>
                                                                <div class="type col-3 text-right">
                                                                    Tier 1
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <!-- Card body -->
                                                    <div id="collapse1" class="collapse" role="tabpanel"
                                                        aria-labelledby="heading1" data-parent="#bar-accordion1">
                                                        <div class="card-body">
                                                            <ul>
                                                                <li>Chardonnay</li>
                                                                <li>Cabernet</li>
                                                                <li>Pinot Grigio</li>
                                                                <li>Merlot</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Accordion card -->

                                            <!-- Accordion card -->
                                            <div class="col-md-6 card-col">
                                                <div class="card">
                                                    <!-- Card header -->
                                                    <div class="card-header" role="tab" id="heading2">
                                                        <a class="collapsed" data-toggle="collapse"
                                                            data-parent="#bar-accordion1" href="#collapse2"
                                                            aria-controls="collapse2">

                                                            <div class="header">
                                                                <h6 class="mb-0 col-6">
                                                                    PREMIUM WINE
                                                                </h6>
                                                                <i class="fas fa-caret-down rotate-icon col-3"></i>
                                                                <div class="type col-3 text-right">
                                                                    Tier 2
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <!-- Card body -->
                                                    <div id="collapse2" class="collapse" role="tabpanel"
                                                        aria-labelledby="heading2" data-parent="#bar-accordion1">
                                                        <div class="card-body">
                                                            <ul>
                                                                <li>Kris, Pinot Grigio</li>
                                                                <li>Kendall-Jackson, Chardonnay</li>
                                                                <li>A to Z, Pinot Noir</li>
                                                                <li>Chateau Souverain, Merlot</li>
                                                                <li>Hass Select, Cabernet</li>
                                                                <li>Rodney Strong, Cabernet Sauvignon</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Accordion card -->

                                            <!-- Accordion card -->
                                            <div class="col-md-6 card-col">
                                                <div class="card">
                                                    <!-- Card header -->
                                                    <div class="card-header" role="tab" id="heading3">
                                                        <a class="collapsed" data-toggle="collapse"
                                                            data-parent="#bar-accordion1" href="#collapse3"
                                                            aria-controls="collapse3">

                                                            <div class="header">
                                                                <h6 class="mb-0 col-6">
                                                                    ULTRA-PREMIUM WINE
                                                                </h6>
                                                                <i class="fas fa-caret-down rotate-icon col-3"></i>
                                                                <div class="type col-3 text-right">
                                                                    Tier 3
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <!-- Card body -->
                                                    <div id="collapse3" class="collapse" role="tabpanel"
                                                        aria-labelledby="heading3" data-parent="#bar-accordion1">
                                                        <div class="card-body">
                                                            <ul>
                                                                <li>King Estate, Pinot Gris</li>
                                                                <li>Whitehaven, Sauvignon Blanc</li>
                                                                <li>Sonoma-Cutrer, Chardonnay</li>
                                                                <li>Franciscan, Merlot</li>
                                                                <li>Robert Mondavi, Pinot Noir</li>
                                                                <li>Louis Martini, Cabernet Sauvignon</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Accordion card -->

                                            <!-- Accordion card -->
                                            <div class="col-md-6 card-col">
                                                <div class="card">
                                                    <!-- Card header -->
                                                    <div class="card-header" role="tab" id="heading4">
                                                        <a class="collapsed" data-toggle="collapse"
                                                            data-parent="#bar-accordion1" href="#collapse4"
                                                            aria-controls="collapse4">

                                                            <div class="header">
                                                                <h6 class="mb-0 col-6">
                                                                    ULTRA-PREMIUM WINE
                                                                </h6>
                                                                <i class="fas fa-caret-down rotate-icon col-3"></i>
                                                                <div class="type col-3 text-right">
                                                                    Tier 3
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <!-- Card body -->
                                                    <div id="collapse4" class="collapse" role="tabpanel"
                                                        aria-labelledby="heading4" data-parent="#bar-accordion1">
                                                        <div class="card-body">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Accordion card -->

                                            <!-- Accordion card -->
                                            <div class="col-md-6 card-col">
                                                <div class="card">
                                                    <!-- Card header -->
                                                    <div class="card-header" role="tab" id="heading5">
                                                        <a class="collapsed" data-toggle="collapse"
                                                            data-parent="#bar-accordion1" href="#collapse5"
                                                            aria-controls="collapse5">

                                                            <div class="header">
                                                                <h6 class="mb-0 col-6">
                                                                    DOMESTIC BEER
                                                                </h6>
                                                                <i class="fas fa-caret-down rotate-icon col-3"></i>
                                                                <div class="type col-3 text-right">
                                                                    Tier 3
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <!-- Card body -->
                                                    <div id="collapse5" class="collapse" role="tabpanel"
                                                        aria-labelledby="heading5" data-parent="#bar-accordion1">
                                                        <div class="card-body">
                                                            <ul>
                                                                <li>Bud Light</li>
                                                                <li>Michelob Ultra</li>
                                                                <li>Yuengling</li>
                                                                <li>Goose Island IPA</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Accordion card -->

                                            <!-- Accordion card -->
                                            <div class="col-md-6 card-col">
                                                <div class="card">
                                                    <!-- Card header -->
                                                    <div class="card-header" role="tab" id="heading6">
                                                        <a class="collapsed" data-toggle="collapse"
                                                            data-parent="#bar-accordion1" href="#collapse6"
                                                            aria-controls="collapse6">

                                                            <div class="header">
                                                                <h6 class="mb-0 col-6">
                                                                    PREMIUM BEER
                                                                </h6>
                                                                <i class="fas fa-caret-down rotate-icon col-3"></i>
                                                                <div class="type col-3 text-right">
                                                                    Tier 3
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <!-- Card body -->
                                                    <div id="collapse6" class="collapse" role="tabpanel"
                                                        aria-labelledby="heading6" data-parent="#bar-accordion1">
                                                        <div class="card-body">
                                                            <ul>
                                                                <li>Sam Adams</li>
                                                                <li>Devil’s Backbone</li>
                                                                <li>Stella Artois</li>
                                                                <li>Williamsburg Alewerks Super IPA</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Accordion card -->

                                            <!-- Accordion card -->
                                            <div class="col-md-6 card-col">
                                                <div class="card">
                                                    <!-- Card header -->
                                                    <div class="card-header" role="tab" id="heading7">
                                                        <a class="collapsed" data-toggle="collapse"
                                                            data-parent="#bar-accordion1" href="#collapse7"
                                                            aria-controls="collapse7">

                                                            <div class="header">
                                                                <h6 class="mb-0 col-6">
                                                                    HOUSE LIQUOR
                                                                </h6>
                                                                <i class="fas fa-caret-down rotate-icon col-3"></i>
                                                                <div class="type col-3 text-right">
                                                                    Tier 3
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <!-- Card body -->
                                                    <div id="collapse7" class="collapse" role="tabpanel"
                                                        aria-labelledby="heading7" data-parent="#bar-accordion1">
                                                        <div class="card-body">
                                                            <ul>
                                                                <li>Svedka Vodka</li>
                                                                <li>Jim Beam Bourbon</li>
                                                                <li>Beefeater Gin</li>
                                                                <li>Bacardi Silver Rum</li>
                                                                <li>Cutty Sark Scotch</li>
                                                                <li>Pepe Lopez Tequila</li>
                                                                <li>Canadian Club Whiskey</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Accordion card -->

                                            <!-- Accordion card -->
                                            <div class="col-md-6 card-col">
                                                <div class="card">
                                                    <!-- Card header -->
                                                    <div class="card-header" role="tab" id="heading8">
                                                        <a class="collapsed" data-toggle="collapse"
                                                            data-parent="#bar-accordion1" href="#collapse8"
                                                            aria-controls="collapse8">

                                                            <div class="header">
                                                                <h6 class="mb-0 col-6">
                                                                    PREMIUM LIQUOR
                                                                </h6>
                                                                <i class="fas fa-caret-down rotate-icon col-3"></i>
                                                                <div class="type col-3 text-right">
                                                                    Tier 2
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <!-- Card body -->
                                                    <div id="collapse8" class="collapse" role="tabpanel"
                                                        aria-labelledby="heading8" data-parent="#bar-accordion1">
                                                        <div class="card-body">
                                                            <ul>
                                                                <li>Tito’s Vodka</li>
                                                                <li>Makers Mark Bourbon</li>
                                                                <li>Tanqueray Gin</li>
                                                                <li>Captain Morgan’s Rum</li>
                                                                <li>Dewar’s White Label Scotch</li>
                                                                <li>Jose Cuervo Tequila</li>
                                                                <li>Jamerson’s Irish Whiskey</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Accordion card -->

                                            <!-- Accordion card -->
                                            <div class="col-md-6 card-col">
                                                <div class="card">
                                                    <!-- Card header -->
                                                    <div class="card-header" role="tab" id="heading9">
                                                        <a class="collapsed" data-toggle="collapse"
                                                            data-parent="#bar-accordion1" href="#collapse9"
                                                            aria-controls="collapse9">
                                                            <div class="header">
                                                                <h6 class="mb-0 col-6">
                                                                    ULTRA-PREMIUM
                                                                </h6>
                                                                <i class="fas fa-caret-down rotate-icon col-3"></i>
                                                                <div class="type col-3 text-right">
                                                                    Tier 3
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <!-- Card body -->
                                                    <div id="collapse9" class="collapse" role="tabpanel"
                                                        aria-labelledby="heading9" data-parent="#bar-accordion1">
                                                        <div class="card-body">
                                                            <ul>
                                                                <li>Grey Goose Vodka</li>
                                                                <li>Knob Creek Bourbon</li>
                                                                <li>Bombay Sapphire Gin</li>
                                                                <li>Mount Gay Black Barrel Rum</li>
                                                                <li>Johnny Walker Black Scotch</li>
                                                                <li>1800 Tequila Reposado</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Accordion card -->

                                        </div>
                                    </div>
                                    <!-- Accordion wrapper -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-6" role="tabpanel" aria-labelledby="pills-6-tab">
                            <div class="text-center mb-3">
                                Subject to a bartender fee of $125.00 per bartender, per 100 guests plus tax.
                            </div>
                            <div>
                                <!--Accordion wrapper-->
                                <div class="accordion md-accordion bar-accordion" id="bar-accordion2" role="tablist"
                                    aria-multiselectable="true">

                                    <div class="row">

                                        <!-- Accordion card -->
                                        <div class="col-md-6 card-col">
                                            <div class="card">
                                                <!-- Card header -->
                                                <div class="card-header" role="tab" id="heading10">
                                                    <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#bar-accordion2" href="#collapse10"
                                                        aria-controls="collapse10">

                                                        <div class="header">
                                                            <h6 class="mb-0 col-6">
                                                                HOUSE WINE
                                                            </h6>
                                                            <i class="fas fa-caret-down rotate-icon col-3"></i>
                                                            <div class="type col-3 text-right">
                                                                By the glass
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- Card body -->
                                                <div id="collapse10" class="collapse" role="tabpanel"
                                                    aria-labelledby="heading10" data-parent="#bar-accordion2">
                                                    <div class="card-body">
                                                        <ul>
                                                            <li>Prosecco - $10</li>
                                                            <li>Cabernet - $9</li>
                                                            <li>Pinot Grigio - $9</li>
                                                            <li>Merlot - $9</li>
                                                            <li>Pinot Noir - $9</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Accordion card -->

                                        <!-- Accordion card -->
                                        <div class="col-md-6 card-col">
                                            <div class="card">
                                                <!-- Card header -->
                                                <div class="card-header" role="tab" id="heading11">
                                                    <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#bar-accordion2" href="#collapse11"
                                                        aria-controls="collapse11">

                                                        <div class="header">
                                                            <h6 class="mb-0 col-6">
                                                                DOMESTIC BEER
                                                            </h6>
                                                            <i class="fas fa-caret-down rotate-icon col-3"></i>
                                                            <div class="type col-3 text-right">
                                                                $8 each
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- Card body -->
                                                <div id="collapse11" class="collapse" role="tabpanel"
                                                    aria-labelledby="heading11" data-parent="#bar-accordion2">
                                                    <div class="card-body">
                                                        <ul>
                                                            <li>Bud Light</li>
                                                            <li>Michelob Ultra</li>
                                                            <li>Yuengling</li>
                                                            <li>Goose Island IPA</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Accordion card -->

                                        <!-- Accordion card -->
                                        <div class="col-md-6 card-col">
                                            <div class="card">
                                                <!-- Card header -->
                                                <div class="card-header" role="tab" id="heading12">
                                                    <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#bar-accordion2" href="#collapse12"
                                                        aria-controls="collapse12">

                                                        <div class="header">
                                                            <h6 class="mb-0 col-6">
                                                                HOUSE LIQUOR
                                                            </h6>
                                                            <i class="fas fa-caret-down rotate-icon col-3"></i>
                                                            <div class="type col-3 text-right">
                                                                $11 per drink
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- Card body -->
                                                <div id="collapse12" class="collapse" role="tabpanel"
                                                    aria-labelledby="heading12" data-parent="#bar-accordion2">
                                                    <div class="card-body">
                                                        <ul>
                                                            <li>SSvedka Vodka</li>
                                                            <li>Jim Beam Bourbon</li>
                                                            <li>Beefeater Gin</li>
                                                            <li>Bacardi Silver Rum</li>
                                                            <li>Cutty Sark Scotch</li>
                                                            <li>Pepe Lopez Tequila</li>
                                                            <li>Canadian Club Whiskey</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Accordion card -->

                                        <!-- Accordion card -->
                                        <div class="col-md-6 card-col">
                                            <div class="card">
                                                <!-- Card header -->
                                                <div class="card-header" role="tab" id="heading13">
                                                    <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#bar-accordion2" href="#collapse13"
                                                        aria-controls="collapse13">

                                                        <div class="header">
                                                            <h6 class="mb-0 col-6">
                                                                PREMIUM WINE
                                                            </h6>
                                                            <i class="fas fa-caret-down rotate-icon col-3"></i>
                                                            <div class="type col-3 text-right">
                                                                By the glass
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- Card body -->
                                                <div id="collapse13" class="collapse" role="tabpanel"
                                                    aria-labelledby="heading13" data-parent="#bar-accordion2">
                                                    <div class="card-body">
                                                        <ul>
                                                            <li>Kris, Pinot Grigio - $10</li>
                                                            <li>Kendall-Jackson, Chardonnay - $11</li>
                                                            <li>A to Z, Pinot Noir, Willamette Valley - $11</li>
                                                            <li>Chateau Souverain, Merlot, Alexander Valley - $12</li>
                                                            <li>Hess Select, Cabernet - $11</li>
                                                            <li>Rodney Strong, Cabernet Sauvignon - $13</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Accordion card -->

                                        <!-- Accordion card -->
                                        <div class="col-md-6 card-col">
                                            <div class="card">
                                                <!-- Card header -->
                                                <div class="card-header" role="tab" id="heading14">
                                                    <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#bar-accordion2" href="#collapse14"
                                                        aria-controls="collapse14">

                                                        <div class="header">
                                                            <h6 class="mb-0 col-6">
                                                                PREMIUM BEER
                                                            </h6>
                                                            <i class="fas fa-caret-down rotate-icon col-3"></i>
                                                            <div class="type col-3 text-right">
                                                                $9 each
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- Card body -->
                                                <div id="collapse14" class="collapse" role="tabpanel"
                                                    aria-labelledby="heading14" data-parent="#bar-accordion2">
                                                    <div class="card-body">
                                                        <ul>
                                                            <li>Sam Adams</li>
                                                            <li>Devil’s Backbone</li>
                                                            <li>Stella Artois</li>
                                                            <li>Williamsburg Alwerks Super IPA</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Accordion card -->

                                        <!-- Accordion card -->
                                        <div class="col-md-6 card-col">
                                            <div class="card">
                                                <!-- Card header -->
                                                <div class="card-header" role="tab" id="heading15">
                                                    <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#bar-accordion2" href="#collapse15"
                                                        aria-controls="collapse15">

                                                        <div class="header">
                                                            <h6 class="mb-0 col-6">
                                                                PREMIUM LIQUOR
                                                            </h6>
                                                            <i class="fas fa-caret-down rotate-icon col-3"></i>
                                                            <div class="type col-3 text-right">
                                                                $13 per drink
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- Card body -->
                                                <div id="collapse15" class="collapse" role="tabpanel"
                                                    aria-labelledby="heading15" data-parent="#bar-accordion2">
                                                    <div class="card-body">
                                                        <ul>
                                                            <li>Tito’s Vodka</li>
                                                            <li>Makers Mark Bourbon</li>
                                                            <li>Tanqueray Gin</li>
                                                            <li>Captain Morgan’s Rum</li>
                                                            <li>Dewar’s White Label Scotch</li>
                                                            <li>Jose Cuervo Tequila</li>
                                                            <li>Jameson’s Irish Whiskey</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Accordion card -->

                                        <!-- Accordion card -->
                                        <div class="col-md-6 card-col">
                                            <div class="card">
                                                <!-- Card header -->
                                                <div class="card-header" role="tab" id="heading16">
                                                    <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#bar-accordion2" href="#collapse16"
                                                        aria-controls="collapse16">

                                                        <div class="header">
                                                            <h6 class="mb-0 col-6">
                                                                ULTRA-PREMIUM WINE
                                                            </h6>
                                                            <i class="fas fa-caret-down rotate-icon col-3"></i>
                                                            <div class="type col-3 text-right">
                                                                By the glass
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- Card body -->
                                                <div id="collapse16" class="collapse" role="tabpanel"
                                                    aria-labelledby="heading16" data-parent="#bar-accordion2">
                                                    <div class="card-body">
                                                        <ul>
                                                            <li>King Estate, Pinot Gris - $13 </li>
                                                            <li>Whitehaven, Sauvignon Blanc, Marlborough - $12</li>
                                                            <li>Sonoma-Cutrer, Chardonnay - $14 </li>
                                                            <li>Franciscan, Merlot - $14 </li>
                                                            <li>Robert Mondovi, Pinot Noir - $14 </li>
                                                            <li>Louis Martini, Cabernet Sauvignon - $16 </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Accordion card -->

                                        <!-- Accordion card -->
                                        <div class="col-md-6 card-col">
                                            <div class="card">
                                                <!-- Card header -->
                                                <div class="card-header" role="tab" id="heading17">
                                                    <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#bar-accordion2" href="#collapse17"
                                                        aria-controls="collapse17">

                                                        <div class="header">
                                                            <h6 class="mb-0 col-6">
                                                                ULTRA-PREMIUM
                                                            </h6>
                                                            <i class="fas fa-caret-down rotate-icon col-3"></i>
                                                            <div class="type col-3 text-right">
                                                                $15 per drink
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- Card body -->
                                                <div id="collapse17" class="collapse" role="tabpanel"
                                                    aria-labelledby="heading17" data-parent="#bar-accordion2">
                                                    <div class="card-body">
                                                        <ul>
                                                            <li>Grey Goose Vodka</li>
                                                            <li>Knob Creek Bourbon</li>
                                                            <li>Bombay Sapphire Gin</li>
                                                            <li>Mount Gay Black Barrel Rum</li>
                                                            <li>Johnny Walker Black Scotch</li>
                                                            <li>1800 Tequila Reposado</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Accordion card -->

                                    </div>
                                </div>
                                <!-- Accordion wrapper -->
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6 text-center py-3">
                            Additional wines available upon request. Check with your planner on a wide variety of local
                            craft beers featuring several exclusive Williamsburg breweries.
                        </div>
                    </div>
                </div>
        </section>

        <section>
            <div class="container-fluid px-0 pt-default">
                <div class="text-center mb-header">
                    <h1>Guidelines</h1>
                </div>
                <div class="krr-tab-pills">
                    <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-7-tab" data-toggle="pill" href="#pills-7" role="tab"
                                aria-controls="pills-7" aria-selected="true"><span>WEDDING</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-8-tab" data-toggle="pill" href="#pills-8" role="tab"
                                aria-controls="pills-8" aria-selected="false"><span>VENUE</span></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="container-fluid p-default">
                <div class="wedding-menu-tab-content">
                    <div class="tab-content pt-3 px-0" id="pills-bar-content">
                        <div class="tab-pane fade show active" id="pills-7" role="tabpanel"
                            aria-labelledby="pills-7-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <h6 class="text-green font-weight-bold">OUTDOOR CEREMONIES AT KINGSMILL</h6>
                                        <p>Depending on your reception location, have your ceremony on an event lawn
                                            with a natural tree altar; a lawn with a walk-out view of the River or an
                                            island paradise surrounded by turtles!</p>
                                        <h6 class="text-green font-weight-bold">INCLEMENT WEATHER</h6>
                                        <p>Kingsmill has the right to initiate a weather plan due to extenuating
                                            circumstances in regards to weather and temperature.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <h6 class="text-green font-weight-bold">OUTDOOR CEREMONIES AT KINGSMILL</h6>
                                        <p>Depending on your reception location, have your ceremony on an event lawn
                                            with a natural tree altar; a lawn with a walk-out view of the River or an
                                            island paradise surrounded by turtles!</p>
                                        <h6 class="text-green font-weight-bold">INCLEMENT WEATHER</h6>
                                        <p>Kingsmill has the right to initiate a weather plan due to extenuating
                                            circumstances in regards to weather and temperature.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-8" role="tabpanel" aria-labelledby="pills-8-tab">
                            <div>
                                <p>
                                    Program Specification to include menu selections and audio visual needs are due to
                                    your
                                    Catering Manager no later than 30 days prior to the program.
                                    Any program details received after that point cannot be guaranteed. Before any
                                    function/meeting can take place, your Catering Manager must have a
                                    signed copy of the Banquet Event Orders.
                                </p>
                                <p>
                                    FOOD & BEVERAGE - This offering is a guide and by no means a limit of our abilities
                                    to
                                    create and produce exceptional presentations. If there is
                                    something you do not see on our wedding menus but would like to have served at your
                                    wedding, our team will be happy to propose customized menus
                                    to meet your specific needs. Please allow adequate time for your Catering Manager to
                                    confirm custom menus and pricing with our Executive Chef. Any
                                    special dietary needs must be communicated to the Catering Manager at least seven
                                    days
                                    prior to the event to ensure the chef can accommodate these
                                    needs.
                                </p>
                                <p>
                                    It is our policy not to permit food and beverage to be brought into or removed from
                                    our
                                    function rooms or hospitality suites. If alcoholic beverages are to
                                    be served on the resort premises the resort will require that only our trained
                                    servers
                                    and bartenders dispense beverages. The Resort’s alcoholic beverage
                                    license requires the resort to request proper identification (photo id) of any
                                    person of
                                    questionable age and refuse alcoholic beverage service of the
                                    person if under age or proper identification cannot be produced.
                                </p>
                                <p>
                                    GUARANTEES - A meal guarantee is required no later than 11:00 AM three working days
                                    prior to your function. If your guarantee is not received, the guarantee
                                    number indicated on the Banquet Event Order will serve as the final guarantee. If
                                    attendance falls below the guarantee, the host/group will be responsible
                                    for the number guaranteed. Food and beverage events which have menus priced per
                                    person
                                    must have a guarantee that is no less than 75% of your meeting
                                    attendance. The Resort cannot be responsible for the service of more than 3% over
                                    the
                                    guarantee or functions below 300 people and 3% over the guarantee
                                    of functions 300 guest or above.
                                </p>
                                <p>
                                    SEATING - 60” round tables seat 8 - 10 guests each, 72” round tables seat 10 - 12
                                    guests
                                    each. Other seating arrangements are available where equipment
                                    permits. Please advise your Catering Manager of your table requirements and other
                                    seating needs.
                                </p>
                                <p>
                                    DECORATIONS, ENTERTAINMENT AND OTHER SERVICES - Your Catering Manager will be happy
                                    to
                                    coordinate specialized centerpieces, decorations, music,
                                    entertainment, photographic services and transportation to meet your needs.
                                </p>
                                <p>
                                    STAFFING & SERVICES
                                    <ul>
                                        <li>Bars – One bar per 75-100 guests</li>
                                        <li>Buffets – One buffet per 100 guests (lunch)</li>
                                        <li>Buffets – One buffet per 100 guests (breakfast & dinner)</li>
                                    </ul>

                                </p>
                                <p>
                                    On-site Chefs are required for some menus. Chefs will be charged at $125 per chef,
                                    $75
                                    per buffet attendant
                                </p>
                                <p>
                                    SERVICE CHARGE - A 24% service charge and 11% sales tax will apply to all food and
                                    beverage.
                                </p>
                                <p>
                                    VENDOR MEALS - Upon Request, Kingsmill will provide vendors a meal priced at
                                    $40.00++. A
                                    menu will be provided by Kingsmill Resort (choices must be sent
                                    to the Kingsmill Representative one week before the wedding date.)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="gka-theme-form">
            <div class="contact-bg">
                <div class="container py-default">
                    <div class="welcome pb-0">
                        <span class="sub-header">Weddings</span>
                        <h1 class="text-black font-weight-normal">Contact Us</h1>
                    </div>
                    <?php echo do_shortcode('[wpforms id="576"]'); ?>
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