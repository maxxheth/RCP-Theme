<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);

function pretty_print_r($target) {

    echo '<pre>';
    
    print_r($target);
    
    echo '</pre>';

}