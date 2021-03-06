<?php

/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variables passed to the `tgmpa()` function should be:
 * - an array of plugin arrays;
 * - optionally a configuration array.
 * If you are not changing anything in the configuration array, you can remove the array and remove the
 * variable from the function call: `tgmpa( $plugins );`.
 * In that case, the TGMPA default settings will be used.
 *
 * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
 */
function food_express_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// This is an example of how to include a plugin from the WordPress Plugin Repository.

		array(
			'name'			=> __('Homepage Control', 'food-express'),
			'slug'			=> 'homepage-control',
			'required'	=> false
		),
    array(
			'name'			=> __('Enjoy Plugin for Instagram', 'food-express'),
			'slug'			=> 'enjoy-instagram-instagram-responsive-images-gallery-and-carousel',
			'required'	=> false
		),
		array(
			'name'			=> __('Good Reviews for WordPress', 'food-express'),
			'slug'			=> 'good-reviews-wp',
			'required'	=> false
		),

		array(
			'name'			=> __('WP Google Maps', 'food-express'),
			'slug'			=> 'wp-google-maps',
			'required'	=> false
		),

		array(
			'name'			=> __('Simple Contact Form Plugin - PirateForms', 'food-express'),
			'slug'			=> 'pirate-forms',
			'required'	=> false
		),

		array(
			'name'			=> __('Food and Drink Menu', 'food-express'),
			'slug'			=> 'food-and-drink-menu',
			'required'	=> false
		),


	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'food-express',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

	);

	tgmpa( $plugins, $config );
}
