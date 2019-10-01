<?php

define('AUTHOR', [
	'name'           => get_option('_theme_info_name'),
	'email'          => get_option('_theme_info_email'),
	'phone_number'   => get_option('_theme_info_phone_number'),
	'logo_url'       => get_option('_theme_info_logo_url'),
	'favicon'        => get_option('_theme_info_favicon'),
	'website'        => get_option('_theme_info_website'),
	'date_started'   => get_option('_theme_info_date_started'),
	'date_published' => get_option('_theme_info_date_publish'),
]);

define('SUPER_USER', ['admin']);

/**
 * Setup google map API key for carbonfields
 */
\Carbon_Fields\Carbon_Fields::boot();
add_filter('carbon_fields_map_field_api_key', function ($key) {
	return 'AIzaSyAqe2bYYRe6NFAlEIxW0ty-mrSWbAY3wdc';
});

/**
 *  Deletes the resized images when the original image is deleted from the Wordpress Media Library.
 *
 * @author Matthew Ruddy
 */
add_action('delete_attachment', static function ($post_id) {
	// Get attachment image metadata
	$metadata = wp_get_attachment_metadata($post_id);
	if (!$metadata) {
		return;
	}
	// Do some bailing if we cannot continue
	if (!isset($metadata['file']) || !isset($metadata['image_meta']['resized_images'])) {
		return;
	}
	$pathinfo       = pathinfo($metadata['file']);
	$resized_images = $metadata['image_meta']['resized_images'];
	// Get Wordpress uploads directory (and bail if it doesn't exist)
	$wp_upload_dir = wp_upload_dir();
	$upload_dir    = $wp_upload_dir['basedir'];
	if (!is_dir($upload_dir)) {
		return;
	}
	// Delete the resized images
	foreach ($resized_images as $dims) {
		// Get the resized images filename
		$file = $upload_dir . '/' . $pathinfo['dirname'] . '/' . $pathinfo['filename'] . '-' . $dims . '.' . $pathinfo['extension'];
		// Delete the resized image
		@unlink($file);
	}
});

// Remove emoji
add_action('init', static function () {
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('admin_print_scripts', 'print_emoji_detection_script');
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_action('admin_print_styles', 'print_emoji_styles');
	remove_filter('the_content_feed', 'wp_staticize_emoji');
	remove_filter('comment_text_rss', 'wp_staticize_emoji');
	remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
	/**
	 * Filter function used to remove the tinymce emoji plugin.
	 *
	 * @param array $plugins
	 *
	 * @return array Difference betwen the two arrays
	 */
	add_filter('tiny_mce_plugins', static function ($plugins) {
		if (is_array($plugins)) {
			return array_diff($plugins, ['wpemoji']);
		} else {
			return [];
		}
	});
	
	/**
	 * Remove emoji CDN hostname from DNS prefetching hints.
	 *
	 * @param array  $urls          URLs to print for resource hints.
	 * @param string $relation_type The relation type the URLs are printed for.
	 *
	 * @return array Difference betwen the two arrays.
	 */
	add_filter('wp_resource_hints', static function ($urls, $relation_type) {
		if ('dns-prefetch' === $relation_type) {
			/** This filter is documented in wp-includes/formatting.php */
			$emoji_svg_url = apply_filters('emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/');
			
			$urls = array_diff($urls, [$emoji_svg_url]);
		}
		
		return $urls;
	}, 10, 2);
});

/**
 * Default theme supports
 */
load_theme_textdomain('gaumap', get_stylesheet_directory() . '/theme/languages');
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('woocommerce');
add_theme_support('html5');

new \Gaumap\Settings\RequirePlugins();
new \Gaumap\Settings\AdminSettings();
new \Gaumap\Settings\AutoDownloadImage();
new \Gaumap\Settings\CustomLoginPage();
new \Gaumap\Settings\ThemeSettings();
