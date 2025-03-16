<?php
// Solub Options Panel
new \Kirki\Panel(
	'solub_panel',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Solub Options', 'kirki' ),
		'description' => esc_html__( 'All Solub Options here', 'kirki' ),
	]
);

// Header Section Fuction
function solub_header_section() {

	// Solub header topbar section
	new \Kirki\Section(
		'solub_header_topbar',
		[
			'title'       => esc_html__( 'Header Topbar', 'kirki' ),
			'description' => esc_html__( 'Header Topbar Section.', 'kirki' ),
			'panel'       => 'solub_panel',
			'priority'    => 160,
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'header_top_switch',
			'label'       => esc_html__( 'Show Top Bar / Not', 'kirki' ),
			'description' => esc_html__( 'Switch on / off top bar', 'kirki' ),
			'section'     => 'solub_header_topbar',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'kirki' ),
				'off' => esc_html__( 'Disable', 'kirki' ),
			],
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'open_hours',
			'label'    => esc_html__( 'Comapny Open Hours', 'kirki' ),
			'section'  => 'solub_header_topbar',
			'default'  => esc_html__( 'Monday - Friday : 8:30 AM to 6:30 PM', 'kirki' ),
			'priority' => 10,
		]
	);

	// Header Social Section
	new \Kirki\Section(
		'solub_header_social',
		[
			'title'       => esc_html__( 'Header Social', 'kirki' ),
			'description' => esc_html__( 'Header Social Section.', 'kirki' ),
			'panel'       => 'solub_panel',
			'priority'    => 160,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'social_fb',
			'label'    => esc_html__( 'Facebook Link', 'kirki' ),
			'section'  => 'solub_header_social',
			'default'  => esc_html__( 'https://www.facebook.com', 'kirki' ),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'social_x',
			'label'    => esc_html__( 'X Link', 'kirki' ),
			'section'  => 'solub_header_social',
			'default'  => esc_html__( 'https://www.x.com', 'kirki' ),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'social_in',
			'label'    => esc_html__( 'Instagram Link', 'kirki' ),
			'section'  => 'solub_header_social',
			'default'  => esc_html__( 'https://www.instagram.com', 'kirki' ),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'social_pin',
			'label'    => esc_html__( 'Pinterest Link', 'kirki' ),
			'section'  => 'solub_header_social',
			'default'  => esc_html__( 'https://www.pinterest.com', 'kirki' ),
			'priority' => 10,
		]
	);

	// Solub header bottombar section
	new \Kirki\Section(
		'solub_header_bottombar',
		[
			'title'       => esc_html__( 'Header Bottom Bar', 'kirki' ),
			'description' => esc_html__( 'Header Bottom Bar Section.', 'kirki' ),
			'panel'       => 'solub_panel',
			'priority'    => 160,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'cta_button_title',
			'label'    => esc_html__( 'CTA Button Title', 'kirki' ),
			'section'  => 'solub_header_bottombar',
			'default'  => esc_html__( 'GET QUOTE NOW', 'kirki' ),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'cta_button_link',
			'label'    => esc_html__( 'CTA Button Link', 'kirki' ),
			'section'  => 'solub_header_bottombar',
			'default'  => esc_html__( '#', 'kirki' ),
			'priority' => 10,
		]
	);

	// Solub header logo section starts
	new \Kirki\Section(
		'solub_header_logo',
		[
			'title'       => esc_html__( 'Header Logo', 'kirki' ),
			'description' => esc_html__( 'Header Logo Section.', 'kirki' ),
			'panel'       => 'solub_panel',
			'priority'    => 160,
		]
	);

	new \Kirki\Field\Image(
		[
			'settings'    => 'solub_black_logo',
			'label'       => esc_html__( 'Black Logo', 'kirki' ),
			'description' => esc_html__( 'Please upload the black version of the logo', 'kirki' ),
			'section'     => 'solub_header_logo',
			'default'     => get_template_directory_uri() .'/assets/img/logo/logo-black.png',
		]
	);

	new \Kirki\Field\Image(
		[
			'settings'    => 'solub_white_logo',
			'label'       => esc_html__( 'White Logo', 'kirki' ),
			'description' => esc_html__( 'Please upload the white version of the logo', 'kirki' ),
			'section'     => 'solub_header_logo',
			'default'     => get_template_directory_uri() .'/assets/img/logo/logo-white.png',
		]
	);

}
// Call the solub_header_section function
solub_header_section();

