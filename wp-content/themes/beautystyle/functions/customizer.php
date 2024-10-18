<?php
/**
 * Contains methods for customizing the theme customization screen.
 *
 * @link http://codex.wordpress.org/Theme_Customization_API
 */

	/* Theme Options
	------------- */

	/* 	Slider box
	----------- */
	$beautystyle_wp_customize->add_section('slider_box',array(
		'title'	=> esc_html__('Slider Box','beautystyle'),
		'description' => esc_html__('Slider images: Images must have same dimensions - recommended 1400x550', 'beautystyle'),
		'capability'  => 'edit_theme_options',
		'priority'	=> 100,
	));

	for ($i =1; $i <=3; $i++){

		$beautystyleImageId = 'beautystyle_slide_image_'.$i;
		$beautystyleContentId = 'beautystyle_slide_content_'.$i;
		$beautystyleDefaultImageSlidePath = get_template_directory_uri() . '/assets/img/environment.jpg';

		/* Add Slide Image */
		$beautystyle_wp_customize->add_setting($beautystyleImageId,
			array(
				'default' => $beautystyleDefaultImageSlidePath,
				'sanitize_callback' => 'beautystyle_sanitize_url'
		));

		$beautystyle_wp_customize->add_control( new WP_Customize_Image_Control( $beautystyle_wp_customize, $beautystyleImageId,
			array(
				/* translators: #%s: image number */
				'label' => sprintf( esc_html__( 'Slide Image #%s' , 'beautystyle' ), $i ),
				'section' => 'slider_box',
				'settings' => $beautystyleImageId,
		)));

		/* Add alt text slider images */
		$beautystyle_wp_customize->add_setting($beautystyleContentId, 
			array(
				'sanitize_callback'	=> 'beautystyle_sanitize_text'
		));

		$beautystyle_wp_customize->add_control(new WP_Customize_Control( $beautystyle_wp_customize, $beautystyleContentId,
			array(
				'type' => 'text',
				/* translators: #%s: alt text image number */
				'label' => sprintf( esc_html__( 'Alt text image #%s', 'beautystyle' ), $i ),
				'section' => 'slider_box',
				'settings' => $beautystyleContentId,
		)));
	}

	$beautystyle_wp_customize->selective_refresh->add_partial('beautystyle_slide_image_1', array(
		'selector'            => '.slider',
		'render_callback'     => 'beautystyle_slider_box',
	));

	/* hide slide box */
	$beautystyle_wp_customize->add_setting('slider_hide_box',array(
		'sanitize_callback' => 'beautystyle_sanitize_checkbox',
	));	 

	$beautystyle_wp_customize->add_control('slider_hide_box', array(
			'section'   => 'slider_box',
			'label'     => esc_html__('Hide this section','beautystyle'),
			'type'      => 'checkbox'
	));

	/* 	Home box
	---------- */
	$beautystyle_wp_customize->add_section('page_boxes',array(
		'title'	=> esc_html__('Home Boxes','beautystyle'),
		'description' => esc_html__('Images dimensions: ( 270 X 170 ) - the posts thumbnails image for these pages will be selected', 'beautystyle'),
		'priority'	=> 101
	));

	for ($i = 1; $i <=3; $i++){

		$beautystylePageSettingId = 'custom_page_'.$i;
		$beautystylePageContentId = 'custom_content_'.$i;

		$beautystyle_wp_customize->add_setting($beautystylePageSettingId, 
			array(
				'default' => $beautystylePageSettingId,
				'sanitize_callback' => 'beautystyle_sanitize_dropdown_pages',
				'transport' => 'postMessage',
		));

		$beautystyle_wp_customize->add_control($beautystylePageSettingId, 
			array(
				'type' => 'dropdown-pages',
				/* translators: #%s: box number */
				'label' => sprintf( esc_html__('Select page for box #%s', 'beautystyle'), $i ),
				'section' => 'page_boxes',
				'settings' => $beautystylePageSettingId,
		));

		$beautystyle_wp_customize->add_setting($beautystylePageContentId,
			array(
			 	'sanitize_callback'	=> 'sanitize_text_field'
		));

		$beautystyle_wp_customize->add_control($beautystylePageContentId,
			array(
			 	'type' => 'textarea',
				/* translators: #%s: box number */
			 	'label' => sprintf( esc_html__('Insert a short summary for box #%s', 'beautystyle'), $i ),
			 	'section' => 'page_boxes',
				'settings' => $beautystylePageContentId,
		));

	}

	$beautystyle_wp_customize->selective_refresh->add_partial('custom_page_1', array(
		'selector'            => '.box-section-main',
		'render_callback'     => 'beautystyle_box',
	));
	$beautystyle_wp_customize->selective_refresh->add_partial('custom_page_2', array(
		'selector'            => '.box-section-main',
		'render_callback'     => 'beautystyle_box',
	));
	$beautystyle_wp_customize->selective_refresh->add_partial('custom_page_3', array(
		'selector'            => '.box-section-main',
		'render_callback'     => 'beautystyle_box',
	));

	/* hide box */
	$beautystyle_wp_customize->add_setting('hide_boxes',array(
		'sanitize_callback' => 'beautystyle_sanitize_checkbox',
	));	 

	$beautystyle_wp_customize->add_control('hide_boxes', array(
		'section'   => 'page_boxes',
		'label'     => esc_html__('Hide this section','beautystyle'),
		'type'      => 'checkbox'
	));

	/*	Home posts - hide section
	----------- */
	$beautystyle_wp_customize->add_section('posts_section',array(
		'title'	=> esc_html__('Posts Section','beautystyle'),
		'description' => esc_html__( 'Show or hide posts section', 'beautystyle' ),
		'priority'	=> 102
	));

	$beautystyle_wp_customize->add_setting('hide_posts_section',array(
		'sanitize_callback' => 'beautystyle_sanitize_checkbox',
	));	 

	$beautystyle_wp_customize->add_control('hide_posts_section', array(
		'section'   => 'posts_section',
		'label'     => esc_html__('Hide this section','beautystyle'),
		'type'      => 'checkbox'
	));

	/* Footer
	------- */
	$beautystyle_wp_customize->add_section('footer_box',array(
		'title'	=> esc_html__('Footer Text Box','beautystyle'),
		'description' => esc_html__('Company description', 'beautystyle' ),
		'priority'	=> 103
	));

	/* Title and description */
	$beautystyle_wp_customize->add_setting('TextBox_title',array(
		'default' => esc_html__('Title here', 'beautystyle'),
		'sanitize_callback'	=> 'beautystyle_sanitize_text'
	));

	$beautystyle_wp_customize->add_control('TextBox_title',array(
		'type' => 'text',
		'label' => esc_html__('Add title','beautystyle'),
		'setting' => 'TextBox_title',
		'section' => 'footer_box',
	));

	$beautystyle_wp_customize->add_setting('TextBox_desc',array(
		'default' => esc_html('Description here', 'beautystyle'),
		'sanitize_callback'	=> 'beautystyle_sanitize_text'
	));

	$beautystyle_wp_customize->add_control('TextBox_desc',array(
		'type' => 'textarea',
		'label' => esc_html__('Add about description here','beautystyle'),
		'setting' => 'TextBox_desc',
		'section' => 'footer_box'
	));

	$beautystyle_wp_customize->selective_refresh->add_partial('TextBox_title', array(
		'selector'            => '.box-ft1',
	));

	/* Contact Details */
	$beautystyle_wp_customize->add_section('footer_contact',array(
		'title'	=> esc_html__('Footer Contact Details','beautystyle'),
		'description' => esc_html__('Add your contact details here', 'beautystyle' ),
		'priority'	=> 104
	));

	$beautystyle_wp_customize->add_setting('contact_title',array(
		'default' => null,
		'sanitize_callback'	=> 'beautystyle_sanitize_text'
	));

	$beautystyle_wp_customize->add_control('contact_title',array(
		'type' => 'text',
		'label' => esc_html__('Add contact title','beautystyle'),
		'setting' => 'contact_title',
		'section' => 'footer_contact',
		'input_attrs' => array(
			'placeholder' => esc_html__('Contact Us', 'beautystyle')
		),
	));

	$beautystyle_wp_customize->add_setting('contact_address',array(
		'default' => null,
		'sanitize_callback'	=> 'beautystyle_sanitize_text'
	));

	$beautystyle_wp_customize->add_control('contact_address',array(
		'type' => 'text',
		'label' => esc_html__('Add address','beautystyle'),
		'setting' => 'contact_address',
		'section' => 'footer_contact',
		'input_attrs' => array(
			'placeholder' => esc_html__('Beauty Street', 'beautystyle')
		),
	));

	$beautystyle_wp_customize->add_setting('contact_phone',array(
		'default' => null,
		'sanitize_callback'	=> 'beautystyle_sanitize_text'
	));

	$beautystyle_wp_customize->add_control('contact_phone',array(
		'type' => 'text',
		'label' => esc_html__('Add telephone number','beautystyle'),
		'setting' => 'contact_phone',
		'section' => 'footer_contact',
		'input_attrs' => array(
			'placeholder' => esc_html__('+123456789', 'beautystyle')
		),
	));

	$beautystyle_wp_customize->add_setting('contact_mail',array(
		'default' => null,
		'sanitize_callback'	=> 'beautystyle_sanitize_email'
	));

	$beautystyle_wp_customize->add_control('contact_mail',array(
		'type' => 'email',
		'label' => esc_html__('Add e-mail','beautystyle'),
		'setting' => 'contact_mail',
		'section' => 'footer_contact',
		'input_attrs' => array(
			'placeholder' => esc_html__('info@beautystyle.com', 'beautystyle')
		),
	));

	$beautystyle_wp_customize->selective_refresh->add_partial('contact_title', array(
		'selector' => '.box-ft2',
	));

	/* Social links settings */
	$beautystyle_wp_customize->add_section('social_sec',array(
		'title'	=> esc_html__('Footer Social Settings','beautystyle'),
		'description' => esc_html__( 'Add social icons link here', 'beautystyle' ),			
		'priority'		=> 105
	));

	$beautystyle_wp_customize->add_setting('fb_link',array(
		'default'	=> null,
		'sanitize_callback'	=> 'esc_url_raw'	
	));

	$beautystyle_wp_customize->add_control('fb_link',array(
		'type'  => 'url',
		'label'	=> esc_html__('Add Facebook link here','beautystyle'),
		'setting'	=> 'fb_link',
		'section'	=> 'social_sec',
		'input_attrs' => array(
			'placeholder' => esc_html__('#facebook','beautystyle')
		)
	));

	$beautystyle_wp_customize->add_setting('twitt_link',array(
		'default'	=> null,
		'sanitize_callback'	=> 'esc_url_raw'
	));

	$beautystyle_wp_customize->add_control('twitt_link',array(
		'type'  => 'url',
		'label'	=> esc_html__('Add Twitter link here','beautystyle'),
		'setting'	=> 'twitt_link',
		'section'	=> 'social_sec',
		'input_attrs' => array(
			'placeholder' => esc_html__('#twitter', 'beautystyle')
		)
	));

	$beautystyle_wp_customize->add_setting('ig_link',array(
		'default'	=> null,
		'sanitize_callback'	=> 'esc_url_raw'
	));

	$beautystyle_wp_customize->add_control('ig_link',array(
		'type'  => 'url',
		'label'	=> esc_html__('Add Instagram plus link here','beautystyle'),
		'setting'	=> 'ig_link',
		'section'	=> 'social_sec',
		'input_attrs' => array(
			'placeholder' => esc_html__('#instagram', 'beautystyle')
		)
	));

	$beautystyle_wp_customize->add_setting('linked_link',array(
		'default'	=> null,
		'sanitize_callback'	=> 'esc_url_raw'
	));

	$beautystyle_wp_customize->add_control('linked_link',array(
		'type'  => 'url',
		'label'	=> esc_html__('Add Linkedin link here','beautystyle'),
		'setting'	=> 'linked_link',
		'section'	=> 'social_sec',
		'input_attrs' => array(
			'placeholder' => esc_html__('#linkedin', 'beautystyle')
		)
	));

	$beautystyle_wp_customize->add_setting('wha_link',array(
		'default'	=> null,
		'sanitize_callback'	=> 'esc_url_raw'
	));

	$beautystyle_wp_customize->add_control('wha_link',array(
		'type' => 'url',
		'label'	=> esc_html__('Add Whatsapp link here','beautystyle'),
		'setting'	=> 'wha_link',
		'section'	=> 'social_sec',
		'input_attrs' => array(
			'placeholder' => esc_html__('#whatsapp', 'beautystyle')
		)
	));

	$beautystyle_wp_customize->add_setting('tiktok_link',array(
		'default'	=> null,
		'sanitize_callback'	=> 'esc_url_raw'
	));

	$beautystyle_wp_customize->add_control('tiktok_link',array(
		'type' => 'url',
		'label'	=> esc_html__('Add TikTok link here','beautystyle'),
		'setting'	=> 'tiktok_link',
		'section'	=> 'social_sec',
		'input_attrs' => array(
			'placeholder' => esc_html__('#tiktok', 'beautystyle')
		)
	));

	$beautystyle_wp_customize->selective_refresh->add_partial('fb_link', array(
		'selector'            => '.social',
		'render_callback'     => 'beautystyle_social',
	));

	/* Sanitizes functions
	------------------- */

	/* Sanitize text */
	function beautystyle_sanitize_text( $beautystyle_text ) {
		return sanitize_text_field( $beautystyle_text );
	}

	/* Sanitize integer number */
	function beautystyle_sanitize_integer( $beautystyle_input ) {
		if( is_numeric( $beautystyle_input ) ) {
			return intval( $beautystyle_input );
		}
	}

	/* Sanitize dropdown-pages */
	function beautystyle_sanitize_dropdown_pages( $beautystyle_page_id) {
		// Ensure $input is an absolute integer.
		$beautystyle_page_id = absint( $beautystyle_page_id );
		
		return $beautystyle_page_id;
	}

	/* Sanitize checkbox */
	function beautystyle_sanitize_checkbox( $beautystyle_checked ) {
		// Boolean check.
		return ( ( isset( $beautystyle_checked ) && true == $beautystyle_checked ) ? true : false );
	}

	/* Sanitize url */
	function beautystyle_sanitize_url( $beautystyle_url ) {
		return esc_url_raw( $beautystyle_url );
	}

	/* Sanitize email */
	function beautystyle_sanitize_email( $beautystyle_email, $beautystyle_setting ) {
		// Strips out all characters that are not allowable in an email address.
		$beautystyle_email = sanitize_email( $beautystyle_email );
		
		// If $email is a valid email, return it; otherwise, return the default.
		return ( ! is_null( $beautystyle_email ) ? $beautystyle_email : $beautystyle_setting->default );
	}