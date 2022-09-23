<?php

// Resort Accommodations
function gka_resort_accommodations_rooms() {
    $html = get_template_part( 'shortcodes/sections/resort-accommodations-rooms' );
    return $html;
} 
add_shortcode('resort-accommodations-rooms', 'gka_resort_accommodations_rooms');

// Our Wedding Venue
function our_wedding_venue_floorplan() { 
    $html = get_template_part( 'shortcodes/sections/our-wedding-venue-floorplan' );
    return $html;
} 
// register shortcode
add_shortcode('our-wedding-venue-floorplan', 'our_wedding_venue_floorplan');


// Plantations
function plantations_course() { 
    $html = get_template_part( 'shortcodes/sections/plantation-course' );
    return $html;
} 
add_shortcode('plantation-course', 'plantations_course');

// River Course
function river_course() { 
    $html = get_template_part( 'shortcodes/sections/river-course' );
    return $html;
} 
add_shortcode('river-course', 'river_course');

// Woods Course
function woods_course() { 
    $html = get_template_part( 'shortcodes/sections/woods-course' );
    return $html;
} 
add_shortcode('woods-course', 'woods_course');