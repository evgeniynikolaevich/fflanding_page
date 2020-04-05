<!DOCTYPE html>
<head>
<?php wp_head(); wp_enqueue_scripts();?>
</head>
<header>

<?php wp_nav_menu( [
	'theme_location'  => '',
	'menu'            => '', 
	'container'       => 'ul', 
	'container_class' => 'main-menu', 
	'container_id'    => '',
	'menu_class'      => 'menu', 
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '%3$s',
	'depth'           => 0,
	'walker'          => '',
] );; ?>
</header>
<body>