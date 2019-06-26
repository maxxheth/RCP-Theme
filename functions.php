<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

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
