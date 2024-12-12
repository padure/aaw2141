<?php
//about theme info
add_action( 'admin_menu', 'manufacturing_industry_gettingstarted' );
function manufacturing_industry_gettingstarted() {    	
	add_theme_page( esc_html__('About Theme', 'manufacturing-industry'), esc_html__('About Theme', 'manufacturing-industry'),'edit_theme_options', 'manufacturing_industry_guide', 'manufacturing_industry_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function manufacturing_industry_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getting-started/getting-started.css');
}
add_action('admin_enqueue_scripts', 'manufacturing_industry_admin_theme_style');

//guidline for about theme
function manufacturing_industry_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'manufacturing-industry' );

?>

<div class="wrapper-info">
	<div class="col-left">
		<div class="intro">
			<h3><?php esc_html_e( 'Welcome to Manufacturing Industry WordPress Theme', 'manufacturing-industry' ); ?> <span>Version: <?php echo esc_html($theme['Version']);?></span></h3>
		</div>
		<div class="started">
			<hr>
			<div class="free-doc">
				<div class="lz-4">
					<h4><?php esc_html_e( 'Start Customizing', 'manufacturing-industry' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Go to', 'manufacturing-industry' ); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizer', 'manufacturing-industry' ); ?> </a> <?php esc_html_e( 'and start customizing your website', 'manufacturing-industry' ); ?></span>
					</ul>
				</div>
				<div class="lz-4">
					<h4><?php esc_html_e( 'Support', 'manufacturing-industry' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Send your query to our', 'manufacturing-industry' ); ?> <a href="<?php echo esc_url( MANUFACTURING_INDUSTRY_SUPPORT ); ?>" target="_blank"> <?php esc_html_e( 'Support', 'manufacturing-industry' ); ?></a></span>
					</ul>
				</div>
			</div>
			<p><?php esc_html_e( 'Manufacturing Industry is a wonderfully developed theme with a modern responsive layout designed for businesses related to industries such as chemical, heavy machinery, manufacturing, production units, crude oil industry, engineering corporations, mining, metallurgy, and other small and large scale industries. This multipurpose theme has a clean, retina-ready design, and user-friendly theme interface bringing all the useful elements together for creating a sophisticated design. Its minimal design brings its entire focus to the content published on the site. With its beautiful layout, you will never fail to impress the target audience. Developers have taken all the care to include secure and clean codes in the design for obtaining a wonderful performance. Moreover, these codes are also optimized for speed and deliver faster page load time. Interactive websites are liked by everyone and considering this, developers have added elements as well as Call to Action Buttons (CTA) for providing an interactive environment to your visitors. This theme is built using the Bootstrap framework and includes a lot of customization options for easy tweaking. Animated CSS effects are going to add an extra dimension to your website. Not only that, you get a translation-ready design thanks to the WPML and RTL language compatibility of this amazing theme.', 'manufacturing-industry')?></p>
			<hr>			
			<div class="col-left-inner">
				<h3><?php esc_html_e( 'Get started with Free Manufacturing Industry Theme', 'manufacturing-industry' ); ?></h3>
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/customizer-image.png" alt="" />
			</div>
		</div>
	</div>
	<div class="col-right">
		<div class="col-left-area">
			<h3><?php esc_html_e('Premium Theme Information', 'manufacturing-industry'); ?></h3>
			<hr>
		</div>
		<div class="centerbold">
			<a href="<?php echo esc_url( MANUFACTURING_INDUSTRY_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'manufacturing-industry'); ?></a>
			<a href="<?php echo esc_url( MANUFACTURING_INDUSTRY_BUY_NOW ); ?>"><?php esc_html_e('Buy Pro', 'manufacturing-industry'); ?></a>
			<a href="<?php echo esc_url( MANUFACTURING_INDUSTRY_PRO_DOCS ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'manufacturing-industry'); ?></a>
			<hr class="secondhr">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/manufacturing-industry.jpg" alt="" />
		</div>
		<h3><?php esc_html_e( 'PREMIUM THEME FEATURES', 'manufacturing-industry'); ?></h3>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon01.png" alt="" />
			<h4><?php esc_html_e( 'Banner Slider', 'manufacturing-industry'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon02.png" alt="" />
			<h4><?php esc_html_e( 'Theme Options', 'manufacturing-industry'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon03.png" alt="" />
			<h4><?php esc_html_e( 'Custom Innerpage Banner', 'manufacturing-industry'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon04.png" alt="" />
			<h4><?php esc_html_e( 'Custom Colors and Images', 'manufacturing-industry'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon05.png" alt="" />
			<h4><?php esc_html_e( 'Fully Responsive', 'manufacturing-industry'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon06.png" alt="" />
			<h4><?php esc_html_e( 'Hide/Show Sections', 'manufacturing-industry'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon07.png" alt="" />
			<h4><?php esc_html_e( 'Woocommerce Support', 'manufacturing-industry'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon08.png" alt="" />
			<h4><?php esc_html_e( 'Limit to display number of Posts', 'manufacturing-industry'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon09.png" alt="" />
			<h4><?php esc_html_e( 'Multiple Page Templates', 'manufacturing-industry'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon10.png" alt="" />
			<h4><?php esc_html_e( 'Custom Read More link', 'manufacturing-industry'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon11.png" alt="" />
			<h4><?php esc_html_e( 'Code written with WordPress standard', 'manufacturing-industry'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon12.png" alt="" />
			<h4><?php esc_html_e( '100% Multi language', 'manufacturing-industry'); ?></h4>
		</div>
	</div>
</div>
<?php } ?>