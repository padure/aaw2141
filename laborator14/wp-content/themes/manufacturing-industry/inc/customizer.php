<?php
/**
 * Manufacturing Industry: Customizer
 *
 * @subpackage Manufacturing Industry
 * @since 1.0
 */

use WPTRT\Customize\Section\Manufacturing_Industry_Button;

add_action( 'customize_register', function( $manager ) {

	$manager->register_section_type( Manufacturing_Industry_Button::class );

	$manager->add_section(
		new Manufacturing_Industry_Button( $manager, 'manufacturing_industry_pro', [
			'title'      => __( 'Manufacturing Industry Pro', 'manufacturing-industry' ),
			'priority'    => 0,
			'button_text' => __( 'Go Pro', 'manufacturing-industry' ),
			'button_url'  => esc_url( 'https://www.luzuk.com/product/manufacturing-industry-wordpress-theme/', 'manufacturing-industry')
		] )
	);

} );

// Load the JS and CSS.
add_action( 'customize_controls_enqueue_scripts', function() {

	$version = wp_get_theme()->get( 'Version' );

	wp_enqueue_script(
		'manufacturing-industry-customize-section-button',
		get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/js/customize-controls.js' ),
		[ 'customize-controls' ],
		$version,
		true
	);

	wp_enqueue_style(
		'manufacturing-industry-customize-section-button',
		get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/css/customize-controls.css' ),
		[ 'customize-controls' ],
 		$version
	);

} );

function manufacturing_industry_customize_register( $wp_customize ) {

	$wp_customize->add_setting('manufacturing_industry_logo_size',array(
		'default' => '',
		'sanitize_callback'	=> 'manufacturing_industry_sanitize_float'
	));
	$wp_customize->add_control('manufacturing_industry_logo_size',array(
		'type' => 'range',
		'description' => __('Logo Size (0-100%)','manufacturing-industry'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('manufacturing_industry_logo_margin',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('manufacturing_industry_logo_margin',array(
		'label' => __('Logo Margin','manufacturing-industry'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('manufacturing_industry_logo_top_margin',array(
		'default' => '',
		'sanitize_callback'	=> 'manufacturing_industry_sanitize_float'
	));
	$wp_customize->add_control('manufacturing_industry_logo_top_margin',array(
		'type' => 'number',
		'description' => __('Top','manufacturing-industry'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('manufacturing_industry_logo_bottom_margin',array(
		'default' => '',
		'sanitize_callback'	=> 'manufacturing_industry_sanitize_float'
	));
	$wp_customize->add_control('manufacturing_industry_logo_bottom_margin',array(
		'type' => 'number',
		'description' => __('Bottom','manufacturing-industry'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('manufacturing_industry_logo_left_margin',array(
		'default' => '',
		'sanitize_callback'	=> 'manufacturing_industry_sanitize_float'
	));
	$wp_customize->add_control('manufacturing_industry_logo_left_margin',array(
		'type' => 'number',
		'description' => __('Left','manufacturing-industry'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('manufacturing_industry_logo_right_margin',array(
		'default' => '',
		'sanitize_callback'	=> 'manufacturing_industry_sanitize_float'
 	));
 	$wp_customize->add_control('manufacturing_industry_logo_right_margin',array(
		'type' => 'number',
		'description' => __('Right','manufacturing-industry'),
		'section' => 'title_tagline',
    ));

	$wp_customize->add_setting('manufacturing_industry_show_site_title',array(
		'default' => true,
		'sanitize_callback'	=> 'manufacturing_industry_sanitize_checkbox'
	));
	$wp_customize->add_control('manufacturing_industry_show_site_title',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Title','manufacturing-industry'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('manufacturing_industry_site_title_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'manufacturing_industry_sanitize_float'
	));
	$wp_customize->add_control('manufacturing_industry_site_title_font_size',array(
		'type' => 'number',
		'label' => __('Site Title Font Size','manufacturing-industry'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting( 'manufacturing_industry_site_title_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'manufacturing_industry_site_title_color', array(
		'label' => 'Title Color',
		'section' => 'title_tagline',
	)));

	$wp_customize->add_setting('manufacturing_industry_show_tagline',array(
		'default' => true,
		'sanitize_callback'	=> 'manufacturing_industry_sanitize_checkbox'
	));
	$wp_customize->add_control('manufacturing_industry_show_tagline',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Tagline','manufacturing-industry'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('manufacturing_industry_site_tagline_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'manufacturing_industry_sanitize_float'
	));
	$wp_customize->add_control('manufacturing_industry_site_tagline_font_size',array(
		'type' => 'number',
		'label' => __('Site Tagline Font Size','manufacturing-industry'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting( 'manufacturing_industry_site_tagline_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'manufacturing_industry_site_tagline_color', array(
		'label' => 'Tagline Color',
		'section' => 'title_tagline',
	)));

	$wp_customize->add_panel( 'manufacturing_industry_panel_id', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Theme Settings', 'manufacturing-industry' ),
		'description' => __( 'Description of what this panel does.', 'manufacturing-industry' ),
	) );

	$wp_customize->add_section( 'manufacturing_industry_theme_options_section', array(
    	'title'      => __( 'General Settings', 'manufacturing-industry' ),
		'priority'   => 30,
		'panel' => 'manufacturing_industry_panel_id'
	) );

	$wp_customize->add_setting('manufacturing_industry_theme_options',array(
		'default' => 'Right Sidebar',
		'sanitize_callback' => 'manufacturing_industry_sanitize_choices'
	));
	$wp_customize->add_control('manufacturing_industry_theme_options',array(
		'type' => 'select',
		'label' => __('Blog Page Sidebar Layout','manufacturing-industry'),
		'section' => 'manufacturing_industry_theme_options_section',
		'choices' => array(
		   'Left Sidebar' => __('Left Sidebar','manufacturing-industry'),
		   'Right Sidebar' => __('Right Sidebar','manufacturing-industry'),
		   'One Column' => __('One Column','manufacturing-industry'),
		   'Grid Layout' => __('Grid Layout','manufacturing-industry')
		),
	));

	$wp_customize->add_setting('manufacturing_industry_single_post_sidebar',array(
		'default' => 'Right Sidebar',
		'sanitize_callback' => 'manufacturing_industry_sanitize_choices'
	));
	$wp_customize->add_control('manufacturing_industry_single_post_sidebar',array(
        'type' => 'select',
        'label' => __('Single Post Sidebar Layout','manufacturing-industry'),
        'section' => 'manufacturing_industry_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','manufacturing-industry'),
            'Right Sidebar' => __('Right Sidebar','manufacturing-industry'),
            'One Column' => __('One Column','manufacturing-industry')
        ),
	));

	$wp_customize->add_setting('manufacturing_industry_page_sidebar',array(
		'default' => 'One Column',
		'sanitize_callback' => 'manufacturing_industry_sanitize_choices'
	));
	$wp_customize->add_control('manufacturing_industry_page_sidebar',array(
        'type' => 'select',
        'label' => __('Page Sidebar Layout','manufacturing-industry'),
        'section' => 'manufacturing_industry_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','manufacturing-industry'),
            'Right Sidebar' => __('Right Sidebar','manufacturing-industry'),
            'One Column' => __('One Column','manufacturing-industry')
        ),
	));

	$wp_customize->add_setting('manufacturing_industry_archive_page_sidebar',array(
		'default' => 'Right Sidebar',
		'sanitize_callback' => 'manufacturing_industry_sanitize_choices'
	));
	$wp_customize->add_control('manufacturing_industry_archive_page_sidebar',array(
        'type' => 'select',
        'label' => __('Archive & Search Page Sidebar Layout','manufacturing-industry'),
        'section' => 'manufacturing_industry_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','manufacturing-industry'),
            'Right Sidebar' => __('Right Sidebar','manufacturing-industry'),
            'One Column' => __('One Column','manufacturing-industry'),
            'Grid Layout' => __('Grid Layout','manufacturing-industry')
        ),
	));

	$wp_customize->add_setting( 'manufacturing_industry_boxfull_width', array(
		'default'           => '',
		'sanitize_callback' => 'manufacturing_industry_sanitize_choices'
	));
	
	$wp_customize->add_control( 'manufacturing_industry_boxfull_width', array(
		'label'    => __( 'Section Width', 'manufacturing-industry' ),
		'section'  => 'manufacturing_industry_theme_options_section',
		'type'     => 'select',
		'choices'  => array(
			'container'  => __('Box Width', 'manufacturing-industry'),
			'container-fluid' => __('Full Width', 'manufacturing-industry'),
			'none' => __('None', 'manufacturing-industry')
		),
	));

	$wp_customize->add_setting( 'manufacturing_industry_dropdown_anim', array(
		'default'           => 'None',
		'sanitize_callback' => 'manufacturing_industry_sanitize_choices'
	));
	$wp_customize->add_control( 'manufacturing_industry_dropdown_anim', array(
		'label'    => __( 'Menu Dropdown Animations', 'manufacturing-industry' ),
		'section'  => 'manufacturing_industry_theme_options_section',
		'type'     => 'select',
		'choices'  => array(
			'bounceInUp'  => __('bounceInUp', 'manufacturing-industry'),
			'fadeInUp' => __('fadeInUp', 'manufacturing-industry'),
			'zoomIn'    => __('zoomIn', 'manufacturing-industry'),
			'None'    => __('None', 'manufacturing-industry')
		),
	));

	//Header
	$wp_customize->add_section( 'manufacturing_industry_header_section' , array(
    	'title'    => __( 'Header', 'manufacturing-industry' ),
		'priority' => null,
		'panel' => 'manufacturing_industry_panel_id'
	) );

	$wp_customize->add_setting('manufacturing_industry_email',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_email'
	));
	$wp_customize->add_control('manufacturing_industry_email',array(
	   	'type' => 'text',
	   	'label' => __('Add Email Address','manufacturing-industry'),
	   	'section' => 'manufacturing_industry_header_section',
	));

	$wp_customize->add_setting('manufacturing_industry_phone_text',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('manufacturing_industry_phone_text',array(
	   	'type' => 'text',
	   	'label' => __('Add Phone Text','manufacturing-industry'),
	   	'section' => 'manufacturing_industry_header_section',
	));

	$wp_customize->add_setting('manufacturing_industry_phoneno',array(
    	'default' => '',
    	'sanitize_callback'	=> 'manufacturing_industry_sanitize_phone_number'
	));
	$wp_customize->add_control('manufacturing_industry_phoneno',array(
	   	'type' => 'text',
	   	'label' => __('Add Phone Number','manufacturing-industry'),
	   	'section' => 'manufacturing_industry_header_section',
	));

	$wp_customize->add_setting('manufacturing_industry_facebook_url',array(
    	'default' => '',
    	'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('manufacturing_industry_facebook_url',array(
	   	'type' => 'url',
	   	'label' => __('Add Facebook URL','manufacturing-industry'),
	   	'section' => 'manufacturing_industry_header_section',
	));

	$wp_customize->add_setting('manufacturing_industry_twitter_url',array(
    	'default' => '',
    	'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('manufacturing_industry_twitter_url',array(
	   	'type' => 'url',
	   	'label' => __('Add Twitter URL','manufacturing-industry'),
	   	'section' => 'manufacturing_industry_header_section',
	));

	$wp_customize->add_setting('manufacturing_industry_youtube_url',array(
    	'default' => '',
    	'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('manufacturing_industry_youtube_url',array(
	   	'type' => 'url',
	   	'label' => __('Add Youtube URL','manufacturing-industry'),
	   	'section' => 'manufacturing_industry_header_section',
	));

	$wp_customize->add_setting('manufacturing_industry_instagram_url',array(
    	'default' => '',
    	'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('manufacturing_industry_instagram_url',array(
	   	'type' => 'url',
	   	'label' => __('Add Instagram URL','manufacturing-industry'),
	   	'section' => 'manufacturing_industry_header_section',
	));

	$wp_customize->add_setting( 'manufacturing_industry_hdricon_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'manufacturing_industry_hdricon_color', array(
		'label' => 'Call & Email Icon Color',
		'section' => 'manufacturing_industry_header_section',
	)));

	$wp_customize->add_setting( 'manufacturing_industry_hdrtext_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'manufacturing_industry_hdrtext_color', array(
		'label' => 'Call & Email Text Color',
		'section' => 'manufacturing_industry_header_section',
	)));

	$wp_customize->add_setting( 'manufacturing_industry_social_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'manufacturing_industry_social_color', array(
		'label' => 'Social Icon Color',
		'section' => 'manufacturing_industry_header_section',
	)));

	$wp_customize->add_setting( 'manufacturing_industry_hdrbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'manufacturing_industry_hdrbg_color', array(
		'label' => 'Top Header Bg Color',
		'section' => 'manufacturing_industry_header_section',
	)));

	$wp_customize->add_setting( 'manufacturing_industry_menu_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'manufacturing_industry_menu_color', array(
		'label' => 'Menu Color',
		'section' => 'manufacturing_industry_header_section',
	)));

	$wp_customize->add_setting( 'manufacturing_industry_menuhvr_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'manufacturing_industry_menuhvr_color', array(
		'label' => 'Menu Hover Color',
		'section' => 'manufacturing_industry_header_section',
	)));

	$wp_customize->add_setting( 'manufacturing_industry_menubg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'manufacturing_industry_menubg_color', array(
		'label' => 'Menu Bg Color',
		'section' => 'manufacturing_industry_header_section',
	)));

	//home page slider
	$wp_customize->add_section( 'manufacturing_industry_slider_section' , array(
    	'title'    => __( 'Slider Settings', 'manufacturing-industry' ),
		'priority' => null,
		'panel' => 'manufacturing_industry_panel_id'
	) );

	$wp_customize->add_setting('manufacturing_industry_slider_hide_show',array(
    	'default' => false,
    	'sanitize_callback'	=> 'manufacturing_industry_sanitize_checkbox'
	));
	$wp_customize->add_control('manufacturing_industry_slider_hide_show',array(
	   	'type' => 'checkbox',
	   	'label' => __('Show / Hide Slider','manufacturing-industry'),
	   	'section' => 'manufacturing_industry_slider_section',
	));

	$wp_customize->add_setting( 'manufacturing_industry_slider_effect', array(
		'default'           => '',
		'sanitize_callback' => 'manufacturing_industry_sanitize_choices'
	));
	$wp_customize->add_control( 'manufacturing_industry_slider_effect', array(
		'label'    => __( 'Onload Transactions Effects', 'manufacturing-industry' ),
		'section'  => 'manufacturing_industry_slider_section',
		'type'     => 'select',
		'choices'  => array(
			'bounceInLeft'  => __('bounceInLeft', 'manufacturing-industry'),
			'bounceInRight' => __('bounceInRight', 'manufacturing-industry'),
			'bounceInUp'    => __('bounceInUp', 'manufacturing-industry'),
			'bounceInDown'    => __('bounceInDown', 'manufacturing-industry'),
			'zoomIn'  => __('zoomIn', 'manufacturing-industry'),
			'zoomOut' => __('zoomOut', 'manufacturing-industry'),
			'fadeInDown'    => __('fadeInDown', 'manufacturing-industry'),
			'fadeInUp'    => __('fadeInUp', 'manufacturing-industry'),
			'fadeInLeft'  => __('fadeInLeft', 'manufacturing-industry'),
			'fadeInRight' => __('fadeInRight', 'manufacturing-industry'),
			'flip-up'    => __('flip-up', 'manufacturing-industry'),
			'none'    => __('none', 'manufacturing-industry')
		),
	));

	for ( $count = 1; $count <= 4; $count++ ) {
		$wp_customize->add_setting( 'manufacturing_industry_slider' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'manufacturing_industry_sanitize_dropdown_pages'
		));
		$wp_customize->add_control( 'manufacturing_industry_slider' . $count, array(
			'label' => __('Select Slider Image Page', 'manufacturing-industry' ),
			'section' => 'manufacturing_industry_slider_section',
			'type' => 'dropdown-pages'
		));
	}

	$wp_customize->add_setting('manufacturing_industry_slider_title_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'manufacturing_industry_sanitize_float'
	));
	$wp_customize->add_control('manufacturing_industry_slider_title_font_size',array(
		'type' => 'number',
		'label' => __('Title Font Size','manufacturing-industry'),
		'section' => 'manufacturing_industry_slider_section',
	));

	$wp_customize->add_setting('manufacturing_industry_slider_btn_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'manufacturing_industry_sanitize_float'
	));
	$wp_customize->add_control('manufacturing_industry_slider_btn_font_size',array(
		'type' => 'number',
		'label' => __('Button Font Size','manufacturing-industry'),
		'section' => 'manufacturing_industry_slider_section',
	));

	$wp_customize->add_setting( 'manufacturing_industry_slidertitle_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'manufacturing_industry_slidertitle_color', array(
		'label' => 'Title Color',
		'section' => 'manufacturing_industry_slider_section',
	)));

	$wp_customize->add_setting( 'manufacturing_industry_sliderbtn_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'manufacturing_industry_sliderbtn_color', array(
		'label' => 'Button Text Color',
		'section' => 'manufacturing_industry_slider_section',
	)));

	$wp_customize->add_setting( 'manufacturing_industry_sliderbtnbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'manufacturing_industry_sliderbtnbg_color', array(
		'label' => 'Button Bg Color',
		'section' => 'manufacturing_industry_slider_section',
	)));

	$wp_customize->add_setting( 'manufacturing_industry_slidernp_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'manufacturing_industry_slidernp_color', array(
		'label' => 'Prev/Next Arrow Color',
		'section' => 'manufacturing_industry_slider_section',
	)));

	$wp_customize->add_setting( 'manufacturing_industry_slidernpbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'manufacturing_industry_slidernpbg_color', array(
		'label' => 'Prev/Next Arrow Bg Color',
		'section' => 'manufacturing_industry_slider_section',
	)));

	//Features Section
	$wp_customize->add_section('manufacturing_industry_features_section',array(
		'title'	=> __('Our Features','manufacturing-industry'),
		'description'=> __('Note : This section will appear below the slider.','manufacturing-industry'),
		'panel' => 'manufacturing_industry_panel_id',
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_pst[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_pst[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('manufacturing_industry_category_setting',array(
		'default' => 'select',
		'sanitize_callback' => 'manufacturing_industry_sanitize_choices',
	));
	$wp_customize->add_control('manufacturing_industry_category_setting',array(
		'type' => 'select',
		'choices' => $cat_pst,
		'label' => __('Select Category To Display Post','manufacturing-industry'),
		'section' => 'manufacturing_industry_features_section',
	));

	$wp_customize->add_setting('manufacturing_industry_features_number',array(
		'default'	=> '4',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('manufacturing_industry_features_number',array(
		'label'	=> __('Number Of Posts To Show In A Category','manufacturing-industry'),
		'section' => 'manufacturing_industry_features_section',
		'type'	  => 'number'
	));

	$manufacturing_industry_features_number = get_theme_mod('manufacturing_industry_features_number', 4);
	for ($i=1; $i <= $manufacturing_industry_features_number; $i++) { 
	   	$wp_customize->add_setting('manufacturing_industry_features_icon' . $i, array(
	      	'default' => 'fas fa-eye-slash',
	      	'sanitize_callback' => 'sanitize_text_field'
	   	));
	   	$wp_customize->add_control(new Manufacturing_Industry_Fontawesome_Icon_Chooser($wp_customize, 'manufacturing_industry_features_icon' . $i, array(
	      	'section' => 'manufacturing_industry_features_section',
	      	'type' => 'icon',
	      	'label' => esc_html__('Feature Icon ', 'manufacturing-industry') . $i
	  	)));
	}

	$wp_customize->add_setting('manufacturing_industry_features_icon_size',array(
		'default' => '',
		'sanitize_callback'	=> 'manufacturing_industry_sanitize_float'
	));
	$wp_customize->add_control('manufacturing_industry_features_icon_size',array(
		'type' => 'number',
		'label' => __('Icon Size','manufacturing-industry'),
		'section' => 'manufacturing_industry_features_section',
	));

	$wp_customize->add_setting('manufacturing_industry_features_title_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'manufacturing_industry_sanitize_float'
	));
	$wp_customize->add_control('manufacturing_industry_features_title_font_size',array(
		'type' => 'number',
		'label' => __('Title Font Size','manufacturing-industry'),
		'section' => 'manufacturing_industry_features_section',
	));

	$wp_customize->add_setting('manufacturing_industry_features_text_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'manufacturing_industry_sanitize_float'
	));
	$wp_customize->add_control('manufacturing_industry_features_text_font_size',array(
		'type' => 'number',
		'label' => __('Text Font Size','manufacturing-industry'),
		'section' => 'manufacturing_industry_features_section',
	));

	$wp_customize->add_setting( 'manufacturing_industry_features_boxbg_color1', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'manufacturing_industry_features_boxbg_color1', array(
		'label' => 'Box Bg Color For Odd',
		'section' => 'manufacturing_industry_features_section',
	)));

	$wp_customize->add_setting( 'manufacturing_industry_features_boxbg_color2', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'manufacturing_industry_features_boxbg_color2', array(
		'label' => 'Box Bg Color For Even',
		'section' => 'manufacturing_industry_features_section',
	)));

	$wp_customize->add_setting( 'manufacturing_industry_features_icon_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'manufacturing_industry_features_icon_color', array(
		'label' => 'Icon Color',
		'section' => 'manufacturing_industry_features_section',
	)));

	$wp_customize->add_setting( 'manufacturing_industry_features_title_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'manufacturing_industry_features_title_color', array(
		'label' => 'Title Color',
		'section' => 'manufacturing_industry_features_section',
	)));

	$wp_customize->add_setting( 'manufacturing_industry_features_text_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'manufacturing_industry_features_text_color', array(
		'label' => 'Text Color',
		'section' => 'manufacturing_industry_features_section',
	)));

	$wp_customize->add_setting( 'manufacturing_industry_features_btn_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'manufacturing_industry_features_btn_color', array(
		'label' => 'Button Text Color',
		'section' => 'manufacturing_industry_features_section',
	)));

	//Footer
    $wp_customize->add_section( 'manufacturing_industry_footer', array(
    	'title'  => __( 'Footer Settings', 'manufacturing-industry' ),
		'priority' => null,
		'panel' => 'manufacturing_industry_panel_id'
	) );

	$wp_customize->add_setting('manufacturing_industry_show_back_totop',array(
       'default' => true,
       'sanitize_callback'	=> 'manufacturing_industry_sanitize_checkbox'
    ));
    $wp_customize->add_control('manufacturing_industry_show_back_totop',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Back to Top','manufacturing-industry'),
       'section' => 'manufacturing_industry_footer'
    ));

    $wp_customize->add_setting('manufacturing_industry_footer_copy',array(
		'default' => 'Manufacturing Industry WordPress Theme By Luzuk',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('manufacturing_industry_footer_copy',array(
		'label'	=> __('Copyright Text','manufacturing-industry'),
		'section' => 'manufacturing_industry_footer',
		'setting' => 'manufacturing_industry_footer_copy',
		'type' => 'text'
	));

	$wp_customize->add_setting('manufacturing_industry_footer_copy_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'manufacturing_industry_sanitize_float'
	));
	$wp_customize->add_control('manufacturing_industry_footer_copy_font_size',array(
		'type' => 'number',
		'label' => __('Font Size','manufacturing-industry'),
		'section' => 'manufacturing_industry_footer',
	));

	$wp_customize->add_setting('manufacturing_industry_copyright_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'manufacturing_industry_sanitize_float'
 	));
 	$wp_customize->add_control('manufacturing_industry_copyright_padding',array(
		'type' => 'number',
		'label' => __('Copyright Top Bottom Padding','manufacturing-industry'),
		'section' => 'manufacturing_industry_footer',
	));

	$wp_customize->add_setting( 'manufacturing_industry_footer_title_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'manufacturing_industry_footer_title_color', array(
		'label' => 'Wedget Title Color',
		'section' => 'manufacturing_industry_footer',
	)));

	$wp_customize->add_setting( 'manufacturing_industry_footer_text_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'manufacturing_industry_footer_text_color', array(
		'label' => 'Wedget Text Color',
		'section' => 'manufacturing_industry_footer',
	)));

	$wp_customize->add_setting( 'manufacturing_industry_bttext_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'manufacturing_industry_bttext_color', array(
		'label' => 'Top Arrow Text Color',
		'section' => 'manufacturing_industry_footer',
	)));

	$wp_customize->add_setting( 'manufacturing_industry_btbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'manufacturing_industry_btbg_color', array(
		'label' => 'Top Arrow Bg Color',
		'section' => 'manufacturing_industry_footer',
	)));

	$wp_customize->register_section_type( Manufacturing_Industry_Button::class );

	$wp_customize->add_section(	new Manufacturing_Industry_Button( $wp_customize, 'manufacturing_industry_pro_link', [
			'title'      => __( 'Manufacturing Industry Pro', 'manufacturing-industry' ),
			'priority'    => 0,
			'button_text' => __( 'Go Pro', 'manufacturing-industry' ),
			'button_url'  => esc_url( 'https://www.luzuk.com/product/manufacturing-industry-wordpress-theme/', 'manufacturing-industry'),
			'panel' => 'manufacturing_industry_panel_id'
		] )
	);

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'manufacturing_industry_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'manufacturing_industry_customize_partial_blogdescription',
	) );
}
add_action( 'customize_register', 'manufacturing_industry_customize_register' );

function manufacturing_industry_customize_partial_blogname() {
	bloginfo( 'name' );
}

function manufacturing_industry_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

function manufacturing_industry_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}

function manufacturing_industry_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'sidebar-1' ) ) );
}

if (class_exists('WP_Customize_Control')) {

   	class Manufacturing_Industry_Fontawesome_Icon_Chooser extends WP_Customize_Control {

      	public $type = 'icon';

      	public function render_content() { ?>
	     	<label>
	            <span class="customize-control-title">
	               <?php echo esc_html($this->label); ?>
	            </span>

	            <?php if ($this->description) { ?>
	                <span class="description customize-control-description">
	                   <?php echo wp_kses_post($this->description); ?>
	                </span>
	            <?php } ?>

	            <div class="manufacturing-industry-selected-icon">
	                <i class="fa <?php echo esc_attr($this->value()); ?>"></i>
	                <span><i class="fa fa-angle-down"></i></span>
	            </div>

	            <ul class="manufacturing-industry-icon-list clearfix">
	                <?php
	                $manufacturing_industry_font_awesome_icon_array = manufacturing_industry_font_awesome_icon_array();
	                foreach ($manufacturing_industry_font_awesome_icon_array as $manufacturing_industry_font_awesome_icon) {
	                   $icon_class = $this->value() == $manufacturing_industry_font_awesome_icon ? 'icon-active' : '';
	                   echo '<li class=' . esc_attr($icon_class) . '><i class="' . esc_attr($manufacturing_industry_font_awesome_icon) . '"></i></li>';
	                }
	                ?>
	            </ul>
	            <input type="hidden" value="<?php $this->value(); ?>" <?php $this->link(); ?> />
	        </label>
	        <?php
      	}
  	}
}
function manufacturing_industry_customizer_script() {
   wp_enqueue_style( 'font-awesome-1', esc_url(get_template_directory_uri()).'/assets/css/fontawesome-all.css');
}
add_action( 'customize_controls_enqueue_scripts', 'manufacturing_industry_customizer_script' );