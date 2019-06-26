<!--Basic footer-->
<!--Another comment-->
<footer class="rcp-footer">

<?php 

    $rcp_nav_items_footer = wp_get_nav_menu_items( 'RCP Footer Menu' );

?>

<nav class="rcp-footer__nav">
	<?php foreach ($rcp_nav_items_footer as $nav_item) : ?>
	
	<li class="rcp-footer__nav--item"><a href="<?php echo $nav_item->url ?>"><?php echo $nav_item->title; ?></a></li>

	<?php endforeach; ?>
</nav>
</footer>
<?php wp_footer(); ?>
</body>
</html>