<?php
/*
 * Template Name: Home
 */


// REMOVE SIDEBAR & POST CONTENT //
//remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );
//remove_action( 'genesis_entry_content', 'genesis_do_post_content' );
//remove_action( 'genesis_loop', 'genesis_do_loop' );



// HOME INTRO WIDGET AREA //
add_action( 'genesis_before_content', 'rena_home_intro' );
function rena_home_intro() {

    genesis_widget_area( 'home-intro' );
    
} // rena_home_intro()



//-- LOAD FRAMEWORK --//
genesis();