<?php 

	$manufacturing_industry_custom_style = '';

	// Logo Size
	$manufacturing_industry_logo_top_margin = get_theme_mod('manufacturing_industry_logo_top_margin');
	$manufacturing_industry_logo_bottom_margin = get_theme_mod('manufacturing_industry_logo_bottom_margin');
	$manufacturing_industry_logo_left_margin = get_theme_mod('manufacturing_industry_logo_left_margin');
	$manufacturing_industry_logo_right_margin = get_theme_mod('manufacturing_industry_logo_right_margin');

	if( $manufacturing_industry_logo_top_margin != '' || $manufacturing_industry_logo_bottom_margin != '' || $manufacturing_industry_logo_left_margin != '' || $manufacturing_industry_logo_right_margin != ''){
		$manufacturing_industry_custom_style .=' .logo {';
			$manufacturing_industry_custom_style .=' margin-top: '.esc_attr($manufacturing_industry_logo_top_margin).'px; margin-bottom: '.esc_attr($manufacturing_industry_logo_bottom_margin).'px; margin-left: '.esc_attr($manufacturing_industry_logo_left_margin).'px; margin-right: '.esc_attr($manufacturing_industry_logo_right_margin).'px;';
		$manufacturing_industry_custom_style .=' }';
	}

	$manufacturing_industry_logo_size = get_theme_mod('manufacturing_industry_logo_size');
	if( $manufacturing_industry_logo_size != '' ) {
		if($manufacturing_industry_logo_size >= 0 && $manufacturing_industry_logo_size <= 100) {
			$calculated_width = $manufacturing_industry_logo_size * 3.5;
			$manufacturing_industry_custom_style .= ' .custom-logo-link img {';
			$manufacturing_industry_custom_style .= ' width: ' . esc_attr($calculated_width) . 'px;';
			$manufacturing_industry_custom_style .= ' }';
		}
	}

	// Site Title Font Size
	$manufacturing_industry_site_title_font_size = get_theme_mod('manufacturing_industry_site_title_font_size');
	if( $manufacturing_industry_site_title_font_size != ''){
		$manufacturing_industry_custom_style .=' .logo h1.site-title, .logo p.site-title {';
			$manufacturing_industry_custom_style .=' font-size: '.esc_attr($manufacturing_industry_site_title_font_size).'px;';
		$manufacturing_industry_custom_style .=' }';
	}

	$manufacturing_industry_site_title_color = get_theme_mod('manufacturing_industry_site_title_color');
	if ( $manufacturing_industry_site_title_color != '') {
		$manufacturing_industry_custom_style .=' h1.site-title a, p.site-title a {';
			$manufacturing_industry_custom_style .=' color:'.esc_attr($manufacturing_industry_site_title_color).';';
		$manufacturing_industry_custom_style .=' }';
	}

	// Site Tagline Font Size
	$manufacturing_industry_site_tagline_font_size = get_theme_mod('manufacturing_industry_site_tagline_font_size');
	if( $manufacturing_industry_site_tagline_font_size != ''){
		$manufacturing_industry_custom_style .=' .logo p.site-description {';
			$manufacturing_industry_custom_style .=' font-size: '.esc_attr($manufacturing_industry_site_tagline_font_size).'px;';
		$manufacturing_industry_custom_style .=' }';
	}

	$manufacturing_industry_site_tagline_color = get_theme_mod('manufacturing_industry_site_tagline_color');
	if ( $manufacturing_industry_site_tagline_color != '') {
		$manufacturing_industry_custom_style .=' .logo p.site-description {';
			$manufacturing_industry_custom_style .=' color:'.esc_attr($manufacturing_industry_site_tagline_color).';';
		$manufacturing_industry_custom_style .=' }';
	}

	//layout width
	$manufacturing_industry_boxfull_width = get_theme_mod('manufacturing_industry_boxfull_width');
	if ($manufacturing_industry_boxfull_width !== '') {
		switch ($manufacturing_industry_boxfull_width) {
			case 'container':
				$manufacturing_industry_custom_style .= ' body, #header, .menu-section {
					max-width: 1140px;
					width: 100%;
					padding-right: 15px;
					padding-left: 15px;
					margin-right: auto;
					margin-left: auto;
					}';
				break;
			case 'container-fluid':
				$manufacturing_industry_custom_style .= ' body, #header, .menu-section { 
					width: 100%;
					padding-right: 15px;
					padding-left: 15px;
					margin-right: auto;
					margin-left: auto;
					}';
				break;
			case 'none':
				// No specific width specified, so no additional style needed.
				break;
			default:
				// Handle unexpected values.
				break;
		}
	}

	//Menu animation
	$manufacturing_industry_dropdown_anim = get_theme_mod('manufacturing_industry_dropdown_anim');

	if ( $manufacturing_industry_dropdown_anim != '') {
		$manufacturing_industry_custom_style .=' .nav-menu ul ul {';
			$manufacturing_industry_custom_style .=' animation:'.esc_attr($manufacturing_industry_dropdown_anim).' 1s ease;';
		$manufacturing_industry_custom_style .=' }';
	}

	// Header Image
	$header_image_url = manufacturing_industry_banner_image( $image_url = '' );
	if( $header_image_url != ''){
		$manufacturing_industry_custom_style .=' #inner-pages-header {';
			$manufacturing_industry_custom_style .=' background-image: url('. esc_url( $header_image_url ).'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;';
		$manufacturing_industry_custom_style .=' }';
		$manufacturing_industry_custom_style .=' .header-overlay {';
			$manufacturing_industry_custom_style .=' position: absolute; 	width: 100%; height: 100%; 	top: 0; left: 0; background: #000; opacity: 0.3;';
		$manufacturing_industry_custom_style .=' }';
	} else {
		$manufacturing_industry_custom_style .=' #inner-pages-header {';
			$manufacturing_industry_custom_style .=' background:linear-gradient(0deg,#ccc,#0a0607 80%) no-repeat; ';
		$manufacturing_industry_custom_style .=' }';
	}

	$manufacturing_industry_hdricon_color = get_theme_mod('manufacturing_industry_hdricon_color');
	if ( $manufacturing_industry_hdricon_color != '') {
		$manufacturing_industry_custom_style .=' .top-header a.mail i, .phone i {';
			$manufacturing_industry_custom_style .=' color:'.esc_attr($manufacturing_industry_hdricon_color).';';
		$manufacturing_industry_custom_style .=' }';
	}

	$manufacturing_industry_hdrtext_color = get_theme_mod('manufacturing_industry_hdrtext_color');
	if ( $manufacturing_industry_hdrtext_color != '') {
		$manufacturing_industry_custom_style .=' .top-header a.mail, .phone p.phone-txt, .phone a {';
			$manufacturing_industry_custom_style .=' color:'.esc_attr($manufacturing_industry_hdrtext_color).';';
		$manufacturing_industry_custom_style .=' }';
	}

	$manufacturing_industry_social_color = get_theme_mod('manufacturing_industry_social_color');
	if ( $manufacturing_industry_social_color != '') {
		$manufacturing_industry_custom_style .=' .top-header .social-icons i {';
			$manufacturing_industry_custom_style .=' color:'.esc_attr($manufacturing_industry_social_color).'; border-color:'.esc_attr($manufacturing_industry_social_color).';';
		$manufacturing_industry_custom_style .=' }';
	}

	$manufacturing_industry_hdrbg_color = get_theme_mod('manufacturing_industry_hdrbg_color');
	if ( $manufacturing_industry_hdrbg_color != '') {
		$manufacturing_industry_custom_style .=' .top-header {';
			$manufacturing_industry_custom_style .=' background-color:'.esc_attr($manufacturing_industry_hdrbg_color).';';
		$manufacturing_industry_custom_style .=' }';
	}

	$manufacturing_industry_menu_color = get_theme_mod('manufacturing_industry_menu_color');
	if ( $manufacturing_industry_menu_color != '') {
		$manufacturing_industry_custom_style .=' .nav-menu ul li a {';
			$manufacturing_industry_custom_style .=' color:'.esc_attr($manufacturing_industry_menu_color).';';
		$manufacturing_industry_custom_style .=' }';
	}

	$manufacturing_industry_menuhvr_color = get_theme_mod('manufacturing_industry_menuhvr_color');
	if ( $manufacturing_industry_menuhvr_color != '') {
		$manufacturing_industry_custom_style .=' .nav-menu ul li a:hover {';
			$manufacturing_industry_custom_style .=' color:'.esc_attr($manufacturing_industry_menuhvr_color).';';
		$manufacturing_industry_custom_style .=' }';
	}

	$manufacturing_industry_menubg_color = get_theme_mod('manufacturing_industry_menubg_color');
	if ( $manufacturing_industry_menubg_color != '') {
		$manufacturing_industry_custom_style .=' .page-template-custom-home-page .menu-section {';
			$manufacturing_industry_custom_style .=' background-color:'.esc_attr($manufacturing_industry_menubg_color).';';
		$manufacturing_industry_custom_style .=' }';
	}

	//slider color
	$manufacturing_industry_slider_hide_show = get_theme_mod('manufacturing_industry_slider_hide_show',false);
	if( $manufacturing_industry_slider_hide_show == true){
		$manufacturing_industry_custom_style .=' .page-template-custom-home-page #inner-pages-header {';
			$manufacturing_industry_custom_style .=' display:none;';
		$manufacturing_industry_custom_style .=' }';
	} else if( $manufacturing_industry_slider_hide_show == false) {
		$manufacturing_industry_custom_style .=' .page-template-custom-home-page .menu-section {';
			$manufacturing_industry_custom_style .=' position: static; background: rgb(22 29 45 / 60%);';
		$manufacturing_industry_custom_style .=' }';
		$manufacturing_industry_custom_style .=' #features-section {';
			$manufacturing_industry_custom_style .=' margin-top: 20px;';
		$manufacturing_industry_custom_style .=' }';
	}

	$manufacturing_industry_slider_title_font_size = get_theme_mod('manufacturing_industry_slider_title_font_size');
	if( $manufacturing_industry_slider_title_font_size != ''){
		$manufacturing_industry_custom_style .=' #slider h2 {';
			$manufacturing_industry_custom_style .=' font-size: '.esc_attr($manufacturing_industry_slider_title_font_size).'px;';
		$manufacturing_industry_custom_style .=' }';
	}

	$manufacturing_industry_slider_btn_font_size = get_theme_mod('manufacturing_industry_slider_btn_font_size');
	if( $manufacturing_industry_slider_btn_font_size != ''){
		$manufacturing_industry_custom_style .=' #slider a.read-btn, .article_content .read-btn a  {';
			$manufacturing_industry_custom_style .=' font-size: '.esc_attr($manufacturing_industry_slider_btn_font_size).'px;';
		$manufacturing_industry_custom_style .=' }';
	}

	$manufacturing_industry_slidertitle_color = get_theme_mod('manufacturing_industry_slidertitle_color');
	if ( $manufacturing_industry_slidertitle_color != '') {
		$manufacturing_industry_custom_style .=' #slider h2 a, #slider p {';
			$manufacturing_industry_custom_style .=' color:'.esc_attr($manufacturing_industry_slidertitle_color).';';
		$manufacturing_industry_custom_style .=' }';
	}

	$manufacturing_industry_sliderbtn_color = get_theme_mod('manufacturing_industry_sliderbtn_color');
	$manufacturing_industry_sliderbtnbg_color = get_theme_mod('manufacturing_industry_sliderbtnbg_color');
	if ( $manufacturing_industry_sliderbtn_color != '') {
		$manufacturing_industry_custom_style .=' #slider a.read-btn, .article_content .read-btn a {';
			$manufacturing_industry_custom_style .=' color:'.esc_attr($manufacturing_industry_sliderbtn_color).'; background-color:'.esc_attr($manufacturing_industry_sliderbtnbg_color).'; border-color:'.esc_attr($manufacturing_industry_sliderbtn_color).';';
		$manufacturing_industry_custom_style .=' }';
	}

	$manufacturing_industry_slidernp_color = get_theme_mod('manufacturing_industry_slidernp_color');
	$manufacturing_industry_slidernpbg_color = get_theme_mod('manufacturing_industry_slidernpbg_color');
	if ( $manufacturing_industry_slidernp_color != '') {
		$manufacturing_industry_custom_style .=' #slider .carousel-control-prev-icon i, #slider .carousel-control-next-icon i {';
			$manufacturing_industry_custom_style .=' color:'.esc_attr($manufacturing_industry_slidernp_color).'; background-color:'.esc_attr($manufacturing_industry_slidernpbg_color).'; border-color:'.esc_attr($manufacturing_industry_slidernpbg_color).';';
		$manufacturing_industry_custom_style .=' }';
	}

	//feature css
	$manufacturing_industry_features_icon_size = get_theme_mod('manufacturing_industry_features_icon_size');
	if( $manufacturing_industry_features_icon_size != ''){
		$manufacturing_industry_custom_style .=' #features-section .features-box .features-icon i {';
			$manufacturing_industry_custom_style .=' font-size: '.esc_attr($manufacturing_industry_features_icon_size).'px;';
		$manufacturing_industry_custom_style .=' }';
	}

	$manufacturing_industry_features_title_font_size = get_theme_mod('manufacturing_industry_features_title_font_size');
	if( $manufacturing_industry_features_title_font_size != ''){
		$manufacturing_industry_custom_style .=' #features-section .features-box h4 {';
			$manufacturing_industry_custom_style .=' font-size: '.esc_attr($manufacturing_industry_features_title_font_size).'px;';
		$manufacturing_industry_custom_style .=' }';
	}

	$manufacturing_industry_features_text_font_size = get_theme_mod('manufacturing_industry_features_text_font_size');
	if( $manufacturing_industry_features_text_font_size != ''){
		$manufacturing_industry_custom_style .=' #features-section .features-box p {';
			$manufacturing_industry_custom_style .=' font-size: '.esc_attr($manufacturing_industry_features_text_font_size).'px;';
		$manufacturing_industry_custom_style .=' }';
	}

	$manufacturing_industry_features_boxbg_color1 = get_theme_mod('manufacturing_industry_features_boxbg_color1');
	if ( $manufacturing_industry_features_boxbg_color1 != '') {
		$manufacturing_industry_custom_style .=' #features-section .feature-list-odd {';
			$manufacturing_industry_custom_style .=' background-color:'.esc_attr($manufacturing_industry_features_boxbg_color1).';';
		$manufacturing_industry_custom_style .=' }';
	}

	$manufacturing_industry_features_boxbg_color2 = get_theme_mod('manufacturing_industry_features_boxbg_color2');
	if ( $manufacturing_industry_features_boxbg_color2 != '') {
		$manufacturing_industry_custom_style .=' #features-section .feature-list-even {';
			$manufacturing_industry_custom_style .=' background-color:'.esc_attr($manufacturing_industry_features_boxbg_color2).';';
		$manufacturing_industry_custom_style .=' }';
	}

	$manufacturing_industry_features_icon_color = get_theme_mod('manufacturing_industry_features_icon_color');
	if ( $manufacturing_industry_features_icon_color != '') {
		$manufacturing_industry_custom_style .=' #features-section .features-box .features-icon i {';
			$manufacturing_industry_custom_style .=' color:'.esc_attr($manufacturing_industry_features_icon_color).';';
		$manufacturing_industry_custom_style .=' }';
	}

	$manufacturing_industry_features_title_color = get_theme_mod('manufacturing_industry_features_title_color');
	if ( $manufacturing_industry_features_title_color != '') {
		$manufacturing_industry_custom_style .=' #features-section .features-box h4 a{';
			$manufacturing_industry_custom_style .=' color:'.esc_attr($manufacturing_industry_features_title_color).';';
		$manufacturing_industry_custom_style .=' }';
	}

	$manufacturing_industry_features_text_color = get_theme_mod('manufacturing_industry_features_text_color');
	if ( $manufacturing_industry_features_text_color != '') {
		$manufacturing_industry_custom_style .='  #features-section .features-box p {';
			$manufacturing_industry_custom_style .=' color:'.esc_attr($manufacturing_industry_features_text_color).';';
		$manufacturing_industry_custom_style .=' }';
	}

	$manufacturing_industry_features_btn_color = get_theme_mod('manufacturing_industry_features_btn_color');
	if ( $manufacturing_industry_features_btn_color != '') {
		$manufacturing_industry_custom_style .=' #features-section .features-box .feature-btn a {';
			$manufacturing_industry_custom_style .=' color:'.esc_attr($manufacturing_industry_features_btn_color).';';
		$manufacturing_industry_custom_style .=' }';
	}
	
	//Footer color
	$manufacturing_industry_footer_title_color = get_theme_mod('manufacturing_industry_footer_title_color');
	if ( $manufacturing_industry_footer_title_color != '') {
		$manufacturing_industry_custom_style .=' .site-footer h2.widget-title {';
			$manufacturing_industry_custom_style .=' color:'.esc_attr($manufacturing_industry_footer_title_color).';';
		$manufacturing_industry_custom_style .=' }';
	}

	$manufacturing_industry_footer_text_color = get_theme_mod('manufacturing_industry_footer_text_color');
	if ( $manufacturing_industry_footer_text_color != '') {
		$manufacturing_industry_custom_style .=' .site-footer .widget-area ul li a {';
			$manufacturing_industry_custom_style .=' color:'.esc_attr($manufacturing_industry_footer_text_color).';';
		$manufacturing_industry_custom_style .=' }';
	}

	$manufacturing_industry_bttext_color = get_theme_mod('manufacturing_industry_bttext_color');
	$manufacturing_industry_btbg_color = get_theme_mod('manufacturing_industry_btbg_color');
	if ( $manufacturing_industry_bttext_color != '') {
		$manufacturing_industry_custom_style .=' .back-to-top {';
			$manufacturing_industry_custom_style .=' color:'.esc_attr($manufacturing_industry_bttext_color).'; background-color:'.esc_attr($manufacturing_industry_btbg_color).';';
		$manufacturing_industry_custom_style .=' }';
	}

	// Copyright padding
	$manufacturing_industry_copyright_padding = get_theme_mod('manufacturing_industry_copyright_padding');
	if( $manufacturing_industry_copyright_padding != ''){
		$manufacturing_industry_custom_style .=' .site-info {';
			$manufacturing_industry_custom_style .=' padding-top: '.esc_attr($manufacturing_industry_copyright_padding).'px; padding-bottom: '.esc_attr($manufacturing_industry_copyright_padding).'px;';
		$manufacturing_industry_custom_style .=' }';
	}

	$manufacturing_industry_footer_copy_font_size = get_theme_mod('manufacturing_industry_footer_copy_font_size');
	if( $manufacturing_industry_footer_copy_font_size != ''){
		$manufacturing_industry_custom_style .=' .site-info p a{';
			$manufacturing_industry_custom_style .=' font-size: '.esc_attr($manufacturing_industry_footer_copy_font_size).'px;';
		$manufacturing_industry_custom_style .=' }';
	}