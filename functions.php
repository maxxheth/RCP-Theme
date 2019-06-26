<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Set up menu area.

function register_rcp_menu() {

    register_nav_menus(array(

        'primary-menu' => __( 'Primary Menu' ),
        'secondary-menu' => __( 'Secondary Menu')

    ));

}

add_action('init', 'register_rcp_menu');

/*
 * Switch default core markup for search form, comment form, and comments
 * to output valid HTML5.
 */

add_theme_support(
    'html5',
    array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    )
);
