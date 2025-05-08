<?php
// Solub Options Panel
new \Kirki\Panel(
	'solub_panel',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Solub Options', 'solub' ),
		'description' => esc_html__( 'All Solub Options here', 'solub' ),
	]
);

// Header Section Fuction
function solub_header_section() {

	// Solub header topbar section
	new \Kirki\Section(
		'solub_header_topbar',
		[
			'title'       => esc_html__( 'Header Topbar', 'solub' ),
			'description' => esc_html__( 'Header Topbar Section.', 'solub' ),
			'panel'       => 'solub_panel',
			'priority'    => 160,
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'header_top_switch',
			'label'       => esc_html__( 'Show Top Bar / Not', 'solub' ),
			'description' => esc_html__( 'Switch on / off top bar', 'solub' ),
			'section'     => 'solub_header_topbar',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'solub' ),
				'off' => esc_html__( 'Disable', 'solub' ),
			],
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'open_hours',
			'label'    => esc_html__( 'Comapny Open Hours', 'solub' ),
			'section'  => 'solub_header_topbar',
			'default'  => esc_html__( 'Monday - Friday : 8:30 AM to 6:30 PM', 'solub' ),
			'priority' => 10,
		]
	);

	// Header Social Section
	new \Kirki\Section(
		'solub_header_social',
		[
			'title'       => esc_html__( 'Header Social', 'solub' ),
			'description' => esc_html__( 'Header Social Section.', 'solub' ),
			'panel'       => 'solub_panel',
			'priority'    => 160,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'social_fb',
			'label'    => esc_html__( 'Facebook Link', 'solub' ),
			'section'  => 'solub_header_social',
			'default'  => esc_html__( 'https://www.facebook.com', 'solub' ),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'social_x',
			'label'    => esc_html__( 'X Link', 'solub' ),
			'section'  => 'solub_header_social',
			'default'  => esc_html__( 'https://www.x.com', 'solub' ),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'social_in',
			'label'    => esc_html__( 'Instagram Link', 'solub' ),
			'section'  => 'solub_header_social',
			'default'  => esc_html__( 'https://www.instagram.com', 'solub' ),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'social_pin',
			'label'    => esc_html__( 'Pinterest Link', 'solub' ),
			'section'  => 'solub_header_social',
			'default'  => esc_html__( 'https://www.pinterest.com', 'solub' ),
			'priority' => 10,
		]
	);

	// Solub header bottombar section
	new \Kirki\Section(
		'solub_header_bottombar',
		[
			'title'       => esc_html__( 'Header Bottom Bar', 'solub' ),
			'description' => esc_html__( 'Header Bottom Bar Section.', 'solub' ),
			'panel'       => 'solub_panel',
			'priority'    => 160,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'cta_button_title',
			'label'    => esc_html__( 'CTA Button Title', 'solub' ),
			'section'  => 'solub_header_bottombar',
			'default'  => esc_html__( 'GET QUOTE NOW', 'solub' ),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'cta_button_link',
			'label'    => esc_html__( 'CTA Button Link', 'solub' ),
			'section'  => 'solub_header_bottombar',
			'default'  => esc_html__( '#', 'solub' ),
			'priority' => 10,
		]
	);

	// Solub header logo section starts
	new \Kirki\Section(
		'solub_header_logo',
		[
			'title'       => esc_html__( 'Header Logo', 'solub' ),
			'description' => esc_html__( 'Header Logo Section.', 'solub' ),
			'panel'       => 'solub_panel',
			'priority'    => 160,
		]
	);

	new \Kirki\Field\Image(
		[
			'settings'    => 'solub_black_logo',
			'label'       => esc_html__( 'Black Logo', 'solub' ),
			'description' => esc_html__( 'Please upload the black version of the logo', 'solub' ),
			'section'     => 'solub_header_logo',
			'default'     => get_template_directory_uri() .'/assets/img/logo/logo-black.png',
		]
	);

	new \Kirki\Field\Image(
		[
			'settings'    => 'solub_white_logo',
			'label'       => esc_html__( 'White Logo', 'solub' ),
			'description' => esc_html__( 'Please upload the white version of the logo', 'solub' ),
			'section'     => 'solub_header_logo',
			'default'     => get_template_directory_uri() .'/assets/img/logo/logo-white.png',
		]
	);

}
// Call the solub_header_section function
solub_header_section();

// Breadcrumb Section Fuction
function solub_breadcrumb_section() {

	// Solub header topbar section
	new \Kirki\Section(
		'solub_breadcrumb',
		[
			'title'       => esc_html__( 'Breadcrumb', 'solub' ),
			'description' => esc_html__( 'Breadcrumb Info Section.', 'solub' ),
			'panel'       => 'solub_panel',
			'priority'    => 160,
		]
	);
	
	new \Kirki\Field\Image(
		[
			'settings'    => 'breadcrumb_img',
			'label'       => esc_html__( 'Breadcrumb image', 'solub' ),
			'description' => esc_html__( 'Please upload your breadcrumb image', 'solub' ),
			'section'     => 'solub_breadcrumb',
			'default'     => get_template_directory_uri() .'/assets/img/logo/logo-black.png',
		]
	);
}

// Call the solub_breadcrumb_section function
solub_breadcrumb_section();

// Footer Section Fuction
function solub_footer_section() {

	// Solub header topbar section
	new \Kirki\Section(
		'solub_footer',
		[
			'title'       => esc_html__( 'Footer Options', 'solub' ),
			'description' => esc_html__( 'Footer Options Section.', 'solub' ),
			'panel'       => 'solub_panel',
			'priority'    => 160,
		]
	);
	
	new \Kirki\Field\Text(
		[
			'settings' => 'footer_copyright',
			'label'    => esc_html__( 'Footer Copyright', 'solub' ),
			'section'  => 'solub_footer',
			'default'  => esc_html__( 'Copyright © 2025 Solub. All Rights Reserved.', 'solub' ),
			'priority' => 10,
		]
	);
}

// Call the solub_footer_section function
solub_footer_section();

// 404 Section Fuction
function solub_404_section() {

	// Solub header topbar section
	new \Kirki\Section(
		'solub_404',
		[
			'title'       => esc_html__( '404 Options', 'solub' ),
			'description' => esc_html__( '404 Options Section.', 'solub' ),
			'panel'       => 'solub_panel',
			'priority'    => 160,
		]
	);
	
	new \Kirki\Field\Text(
		[
			'settings' => 'error_title',
			'label'    => esc_html__( 'Error Page Title', 'solub' ),
			'section'  => 'solub_404',
			'default'  => esc_html__( '404', 'solub' ),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'error_sub_title',
			'label'    => esc_html__( 'Error Page Sub Title', 'solub' ),
			'section'  => 'solub_404',
			'default'  => esc_html__( 'Oops! Page not found', 'solub' ),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'error_detail',
			'label'    => esc_html__( '404 Page Details', 'solub' ),
			'section'  => 'solub_404',
			'default'  => esc_html__( 'Whoops, this is embarassing. Looks like the page you were looking for wasn\'t found.', 'solub' ),
			'priority' => 10,
		]
	);
}

// Call the solub_404_section function
solub_404_section();