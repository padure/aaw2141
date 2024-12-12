<?php
/**
 * Template Name: Custom Home
 */

get_header(); ?>

<main id="skip-content" role="main">

	<?php do_action( 'manufacturing_industry_above_slider' ); ?>

	<?php if( get_theme_mod('manufacturing_industry_slider_hide_show') != ''){ ?>
		<section id="slider">
			<div id="carouselExampleIndicators" class="carousel" data-ride="carousel"> 
			    <?php $manufacturing_industry_slider_pages = array();
			    for ( $count = 1; $count <= 4; $count++ ) {
			        $mod = intval( get_theme_mod( 'manufacturing_industry_slider'. $count ));
			        if ( 'page-none-selected' != $mod ) {
			          $manufacturing_industry_slider_pages[] = $mod;
			        }
			    }
		      	if( !empty($manufacturing_industry_slider_pages) ) :
			        $args = array(
			          	'post_type' => 'page',
			          	'post__in' => $manufacturing_industry_slider_pages,
			          	'orderby' => 'post__in'
			        );
		        	$query = new WP_Query( $args );
		        if ( $query->have_posts() ) :
		          	$i = 1;
		    	?>     
			    <div class="carousel-inner" role="listbox">
			      	<?php  while ( $query->have_posts() ) : $query->the_post(); ?>
			        <div <?php if($i == 1){echo 'class="carousel-item fade-in-image active"';} else{ echo 'class="carousel-item fade-in-image"';}?>>
			        	<div class="slider-img">
            				<?php if(has_post_thumbnail()) {?>
            					<img src="<?php esc_url(the_post_thumbnail_url('full')); ?>" alt="<?php the_title_attribute(); ?> "/>
            				<?php } else {?>
            					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/slider.png" alt="<?php the_title_attribute(); ?> "/>
            				<?php }?>
            			</div>
            			<div class="slider-bg"></div>
						<?php
							$manufacturing_industry_slider_effect = get_theme_mod('manufacturing_industry_slider_effect', '') 
						?>
            			<div class="carousel-caption <?php echo ($manufacturing_industry_slider_effect); ?>">
				            <div class="inner-carousel">
				              	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				              	<a href="<?php the_permalink(); ?>" class="read-btn"><?php echo esc_html('Read More','manufacturing-industry'); ?></a>
		            		</div>
		            	</div>
			        </div>
			      	<?php $i++; endwhile; 
			      	wp_reset_postdata();?>
			    </div>
			    <?php else : ?>
			    <div class="no-postfound"></div>
		      		<?php endif;
			    endif;?>
			    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			      	<span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
			      	<span class="screen-reader-text"><?php esc_html_e( 'Prev','manufacturing-industry' );?></span>
			    </a>
			    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			      	<span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
			      	<span class="screen-reader-text"><?php esc_html_e( 'Next','manufacturing-industry' );?></span>
			    </a>
			</div>
		  	<div class="clearfix"></div>
		</section>
	<?php }?>
	
	<?php do_action('manufacturing_industry_below_slider'); ?>

	<?php if(get_theme_mod('manufacturing_industry_category_setting') != ''){ ?>
		<section id="features-section">
			<div class="container">
				<?php $manufacturing_industry_catData1 =  get_theme_mod('manufacturing_industry_category_setting');
				if($manufacturing_industry_catData1){ 
					$args = array(
						'post_type' => 'post',
						'category_name' => esc_html($manufacturing_industry_catData1 ,'manufacturing-industry'),
			          	'posts_per_page' => get_theme_mod('manufacturing_industry_features_icon', 4)
			        );
			        $i=1; $counter = 1; ?>
			        <div class="row">
		        		<?php $query = new WP_Query( $args );
			          	if ( $query->have_posts() ) :
			        		while( $query->have_posts() ) : $query->the_post(); ?>
			          			<div class="col-lg-3 col-md-6">
			          				<div class="features-box feature-list-<?php echo esc_html( manufacturing_industry_odd_or_even($counter)); ?>">
			      						<div class="features-icon text-center py-3">
		      								<i class="<?php echo esc_attr(get_theme_mod('manufacturing_industry_features_icon' . $i, 'fas fa-eye-slash')); ?>"></i>
		      							</div>
			      						<div class="features-content">
						            		<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
						            		<p><?php $manufacturing_industry_excerpt = get_the_excerpt(); echo esc_html( manufacturing_industry_string_limit_words( $manufacturing_industry_excerpt,12 ) ); ?></p>
						            		<div class="feature-btn">
						            			<a href="<?php the_permalink(); ?>"><?php echo esc_html('Read More','manufacturing-industry'); ?><i class="fas fa-angle-double-right ml-2"></i><span class="screen-reader-text"><?php echo esc_html('Read More','manufacturing-industry'); ?></span></a>
						            		</div>
			            				</div>	
			          				</div>
							    </div>
			          		<?php $i++; $counter++; endwhile; 
			          		wp_reset_postdata(); ?>
			          	<?php else : ?>
			              	<div class="no-postfound"></div>
			            <?php endif; ?>
	          		</div>
	      		<?php }?>
			</div>
		</section>
	<?php }?>

	<?php do_action('manufacturing_industry_below_service_section'); ?>

	<div class="container">
	  	<?php while ( have_posts() ) : the_post(); ?>
	  		<div class="lz-content">
	        	<?php the_content(); ?>
	        </div>
	    <?php endwhile; // end of the loop. ?>
	</div>
</main>

<?php get_footer(); ?>