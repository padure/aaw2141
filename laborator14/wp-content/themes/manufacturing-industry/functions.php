<?php
/**
 * Manufacturing Industry functions and definitions
 *
 * @subpackage Manufacturing Industry
 * @since 1.0
 */

include get_theme_file_path( 'vendor/wptrt/autoload/src/Manufacturing_Industry_Loader.php' );

$manufacturing_industry_loader = new \WPTRT\Autoload\Manufacturing_Industry_Loader();

$manufacturing_industry_loader->manufacturing_industry_add( 'WPTRT\\Customize\\Section', get_theme_file_path( 'vendor/wptrt/customize-section-button/src' ) );

$manufacturing_industry_loader->manufacturing_industry_register();

function manufacturing_industry_setup() {
	
	load_theme_textdomain( 'manufacturing-industry', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form', ) );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-background', $defaults = array(
	    'default-color'          => '',
	    'default-image'          => '',
	    'default-repeat'         => '',
	    'default-position-x'     => '',
	    'default-attachment'     => '',
	    'wp-head-callback'       => '_custom_background_cb',
	    'admin-head-callback'    => '',
	    'admin-preview-callback' => ''
	));

	$GLOBALS['content_width'] = 525;
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'manufacturing-industry' ),
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
 	 */
	add_editor_style( array( 'assets/css/editor-style.css', manufacturing_industry_fonts_url() ) );

	// Theme Activation Notice
	global $pagenow;

		if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {
		add_action( 'admin_notices', 'manufacturing_industry_activation_notice' );
	}

}
add_action( 'after_setup_theme', 'manufacturing_industry_setup' );

// Notice after Theme Activation
function manufacturing_industry_activation_notice() {
	echo '<div class="notice notice-success is-dismissible start-notice">';
		echo '<h3>'. esc_html__( 'Welcome to Luzuk!!', 'manufacturing-industry' ) .'</h3>';
		echo '<p>'. esc_html__( 'Thank you for choosing Manufacturing Industry theme. It will be our pleasure to have you on our Welcome page to serve you better.', 'manufacturing-industry' ) .'</p>';
		echo '<p><a href="'. esc_url( admin_url( 'themes.php?page=manufacturing_industry_guide' ) ) .'" class="button button-primary">'. esc_html__( 'GET STARTED', 'manufacturing-industry' ) .'</a></p>';
	echo '</div>';
}

function manufacturing_industry_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'manufacturing-industry' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'manufacturing-industry' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h2 class="widget-title">',
		'after_title'   => '</h2></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 2', 'manufacturing-industry' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your pages and posts', 'manufacturing-industry' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h2 class="widget-title">',
		'after_title'   => '</h2></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'manufacturing-industry' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your pages and posts', 'manufacturing-industry' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h2 class="widget-title">',
		'after_title'   => '</h2></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'manufacturing-industry' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'manufacturing-industry' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'manufacturing-industry' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'manufacturing-industry' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'manufacturing-industry' ),
		'id'            => 'footer-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'manufacturing-industry' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'manufacturing-industry' ),
		'id'            => 'footer-4',
		'description'   => __( 'Add widgets here to appear in your footer.', 'manufacturing-industry' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'manufacturing_industry_widgets_init' );

function manufacturing_industry_fonts_url(){
	$font_families = array(
		'Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900'
	);

	$fonts_url = add_query_arg( array(
		'family' => implode( '&family=', $font_families ),
		'display' => 'swap',
	), 'https://fonts.googleapis.com/css2' );

	$contents = wptt_get_webfont_url( esc_url_raw( $fonts_url ) );
	return $contents;
}

//Enqueue scripts and styles.
function manufacturing_industry_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'manufacturing-industry-fonts', manufacturing_industry_fonts_url(), array(), null );
	
	//Bootstarp 
	wp_enqueue_style( 'bootstrap-css', esc_url( get_template_directory_uri() ).'/assets/css/bootstrap.css' );
	
	// Theme stylesheet.
	wp_enqueue_style( 'manufacturing-industry-basic-style', get_stylesheet_uri() );
	wp_style_add_data( 'manufacturing-industry-style', 'rtl', 'replace' );

	// Load the Internet Explorer 9 specific stylesheet, to fix display issues in the Customizer.
	if ( is_customize_preview() ) {
		wp_enqueue_style( 'manufacturing-industry-ie9', get_theme_file_uri( '/assets/css/ie9.css' ), array( 'manufacturing-industry-style' ), '1.0' );
		wp_style_add_data( 'manufacturing-industry-ie9', 'conditional', 'IE 9' );
	}
	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'manufacturing-industry-ie8', get_theme_file_uri( '/assets/css/ie8.css' ), array( 'manufacturing-industry-style' ), '1.0' );
	wp_style_add_data( 'manufacturing-industry-ie8', 'conditional', 'lt IE 9' );

	//font-awesome
	wp_enqueue_style( 'font-awesome-css', esc_url( get_template_directory_uri() ).'/assets/css/fontawesome-all.css' );

	wp_enqueue_style('custom-animations', get_template_directory_uri() . '/assets/css/animations.css');

	require get_parent_theme_file_path( '/lz-custom-style.php' );
	wp_add_inline_style( 'manufacturing-industry-basic-style',$manufacturing_industry_custom_style );

	wp_enqueue_script( 'manufacturing-industry-navigation-jquery', get_theme_file_uri( '/assets/js/navigation.js' ), array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'bootstrap-js', esc_url( get_template_directory_uri() ). '/assets/js/bootstrap.js', array('jquery') );
	wp_enqueue_script( 'jquery-superfish', esc_url( get_template_directory_uri() ). '/assets/js/jquery.superfish.js', array('jquery') ,'',true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'manufacturing_industry_scripts' );

function manufacturing_industry_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template',  'manufacturing_industry_front_page_template' );

define('MANUFACTURING_INDUSTRY_LIVE_DEMO',__('https://www.luzukdemo.com/demo/manufacturing-industry/','manufacturing-industry'));
define('MANUFACTURING_INDUSTRY_PRO_DOCS',__('https://www.luzukdemo.com/docs/manufacturing-industry/','manufacturing-industry'));
define('MANUFACTURING_INDUSTRY_BUY_NOW',__('https://www.luzuk.com/product/manufacturing-industry-wordpress-theme/','manufacturing-industry'));
define('MANUFACTURING_INDUSTRY_SUPPORT',__('https://wordpress.org/support/theme/manufacturing-industry/','manufacturing-industry'));
define('MANUFACTURING_INDUSTRY_CREDIT',__('https://www.luzuk.com/themes/free-industry-wordpress-theme/','manufacturing-industry'));

if ( ! function_exists( 'manufacturing_industry_credit' ) ) {
	function manufacturing_industry_credit(){
		echo "<a href=".esc_url(MANUFACTURING_INDUSTRY_CREDIT)." target='_blank'>".esc_html__(get_theme_mod('manufacturing_industry_footer_copy',__('Manufacturing Industry WordPress Theme By Luzuk','manufacturing-industry')))."</a>";
	}
}

function manufacturing_industry_odd_or_even($counter){
    if($counter % 2 == 0){
        return "even";
    }
    else{
        return "odd";
    }
}

function manufacturing_industry_sanitize_dropdown_pages( $page_id, $setting ) {
	// Ensure $input is an absolute integer.
	$page_id = absint( $page_id );
	// If $page_id is an ID of a published page, return it; otherwise, return the default.
	return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

function manufacturing_industry_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function manufacturing_industry_sanitize_checkbox( $input ) {
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

function manufacturing_industry_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

function manufacturing_industry_sanitize_float( $input ) {
    return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}

/* Excerpt Limit Begin */
function manufacturing_industry_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'manufacturing_industry_loop_columns');
if (!function_exists('manufacturing_industry_loop_columns')) {
	function manufacturing_industry_loop_columns() {
		return 3; // 3 products per row
	}
}

/* Breadcrumb Begin */
function manufacturing_industry_breadcrumb() {
	if (!is_home()) {
		echo '<a href="';
			echo esc_url(home_url());
		echo '">';
			bloginfo('name');
		echo "</a> ";
		if (is_category() || is_single()) {
			echo "&nbsp;&#187;&nbsp;";
			the_category(', ');
			if (is_single()) {
				echo "&nbsp;&#187;&nbsp;";
				echo "<span> ";
					the_title();
				echo "</span>";
			}
		} elseif (is_page()) {
			echo "&nbsp;&#187;&nbsp;";
			echo "<span>";
				the_title();
			echo "</span> ";
		}
	}
}

function manufacturing_industry_banner_image( $image_url ){
    global $post;

    if( is_singular() ){
        $image_url      = get_the_post_thumbnail_url( $post->ID, 'full' );
    }
    return $image_url;
}

require get_parent_theme_file_path( '/inc/custom-header.php' );

require get_parent_theme_file_path( '/inc/template-tags.php' );

require get_parent_theme_file_path( '/inc/template-functions.php' );

require get_parent_theme_file_path( '/inc/customizer.php' );

require get_parent_theme_file_path( '/inc/font-awesome-icons.php' );

require get_parent_theme_file_path( '/inc/getting-started/getting-started.php' );

require get_parent_theme_file_path( '/inc/wptt-webfont-loader.php' );