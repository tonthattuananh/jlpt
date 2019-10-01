<?php

require_once 'vendor/autoload.php';

register_nav_menu('gm-primary', __('Menu chính', 'gaumap'));
register_nav_menu('gm-sidebar', __('Menu sidebar', 'gaumap'));
register_nav_menu('gm-footer', __('Menu footer', 'gaumap'));

new \Theme\PostTypes\Post();
new \Theme\Taxonomies\Category();

loadStyles([
	asset('css/bootstrap.css'),
	asset('css/shortcodes.css'),
	asset('css/style.css'),
	asset('css/responsive.css'),
	asset('css/colors/color1.css'),
	asset('css/.css'),
	asset('css/.css'),
	asset('css/.css'),
	asset('css/.css'),
]);

loadScripts([
	asset('js/jquery.min.js'),
	asset('js/bootstrap.min.js'),
	asset('js/jquery.easing.js'),
	asset('js/owl.carousel.js'),
	asset('js/jquery-waypoints.js'),
	asset('js/jquery-countTo.js'),
	asset('js/parallax.js'),
	asset('js/jquery.cookie.js'),
	asset('js/jquery-validate.js'),
	asset('js/main.js'),
	asset('js/jquery.themepunch.tools.min.js'),
	asset('js/jquery.themepunch.revolution.min.js'),
	asset('js/slider.js'),
]);