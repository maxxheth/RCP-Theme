<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require('helper-funcs/pretty_print_r.php');

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class() ?>>

<?php wp_body_open(); ?>

<header class="rcp-header">

<?php

   $rcp_nav = wp_get_nav_menu_object( 'RCP Main Menu' );

   pretty_print_r($rcp_nav);

?>

</header>