<?php
/**
 * Displays footer site info
 *
 * @subpackage Manufacturing Industry
 * @since 1.0
 * @version 1.4
 */

?>
<div class="site-info">
    <div class="row">
        <div class="col-lg-7 col-md-8 align-self-center">
            <p><?php manufacturing_industry_credit(); ?></p>
        </div>
        <div class="col-lg-5 col-md-4 align-self-center">
            <div class="social-icons text-md-right text-center mt-md-0 mt-3">
                <?php if(get_theme_mod('manufacturing_industry_facebook_url','')){ ?>
                    <a href="<?php echo esc_url(get_theme_mod('manufacturing_industry_facebook_url','')); ?>"><i class="fab fa-facebook-f"></i><span class="screen-reader-text"><?php echo esc_html('Facebook', 'manufacturing-industry'); ?></span></a>
                <?php }?>
                <?php if(get_theme_mod('manufacturing_industry_twitter_url','')){ ?>
                    <a href="<?php echo esc_url(get_theme_mod('manufacturing_industry_twitter_url','')); ?>"><i class="fab fa-twitter"></i><span class="screen-reader-text"><?php echo esc_html('Twitter', 'manufacturing-industry'); ?></span></a>
                <?php }?>
                <?php if(get_theme_mod('manufacturing_industry_youtube_url','')){ ?>
                    <a href="<?php echo esc_url(get_theme_mod('manufacturing_industry_youtube_url','')); ?>"><i class="fab fa-youtube"></i><span class="screen-reader-text"><?php echo esc_html('Youtube', 'manufacturing-industry'); ?></span></a>
                <?php }?>
                <?php if(get_theme_mod('manufacturing_industry_instagram_url','')){ ?>
                    <a href="<?php echo esc_url(get_theme_mod('manufacturing_industry_instagram_url','')); ?>"><i class="fab fa-instagram"></i><span class="screen-reader-text"><?php echo esc_html('Instagram', 'manufacturing-industry'); ?></span></a>
                <?php }?>
            </div>
        </div>
    </div>
</div>