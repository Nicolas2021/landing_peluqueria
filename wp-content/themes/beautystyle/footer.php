<?php
/**
 * Template for displaying the footer
 *
 * @package beautystyle
 */
?>

<footer class="footer stdiv">

    <div class="box-section-ft">

        <div class="box-ft1 text-content">

            <?php if (get_theme_mod('TextBox_title') !== '') { ?>
                    <h3><?php echo esc_html(get_theme_mod('TextBox_title','beautystyle')); ?></h3>
            <?php } else { ?>
                    <h3><?php echo esc_html__('Title here','beautystyle'); ?></h3>
            <?php } ?>

            <?php if (get_theme_mod('TextBox_desc') !== '') { ?>
                    <p class="text-content"><?php echo esc_html(get_theme_mod('TextBox_desc','beautystyle')); ?></p>
            <?php } else { ?>
                    <p class="text-content"><?php echo esc_html__('Description here','beautystyle'); ?></p>
            <?php } ?> 
        </div>

        <div class="box-ft2">

            <!-- contact details -->
            <?php if (get_theme_mod('contact_title') !== '') { ?>
                    <h3><?php echo esc_html(get_theme_mod('contact_title','beautystyle')); ?></h3>
            <?php } else { ?>
                    <h3><?php esc_html_e('Contact Us','beautystyle'); ?></h3>
            <?php } ?>

            <?php if (get_theme_mod('contact_adress') !== '') { ?>
                    <p><?php esc_html_e('Address: ','beautystyle'); echo esc_html(get_theme_mod('contact_address','beautystyle')); ?></p>
            <?php } else { ?>
                    <p><?php esc_html_e('Address: Beauty Street','beautystyle'); ?></p>
            <?php } ?> 

            <?php if (get_theme_mod('contact_phone') !== '') { ?>
                    <p><?php esc_html_e('Phone: ','beautystyle'); echo esc_html(get_theme_mod('contact_phone','beautystyle')); ?></p>
            <?php } else { ?>
                    <p><?php esc_html('Phone: +12345678','beautystyle'); ?></p>
            <?php } ?>

            <?php if (get_theme_mod('contact_mail') !== '') { ?>
                    <p><?php esc_html_e('Mail: ','beautystyle'); echo esc_html(get_theme_mod('contact_mail','beautystyle')); ?></p>
            <?php } else { ?>
                    <p><?php esc_html('Mail: info@beautystyle.com','beautystyle'); ?></p>
            <?php } ?>

            <!-- social link -->
            <div class="social">

                <?php if (esc_attr(get_theme_mod('fb_link') !== '')) { ?>
                    <a target="_blank" href="<?php echo esc_url(get_theme_mod('fb_link','beautystyle')); ?>" 
                        title="<?php esc_attr_e('Facebook','beautystyle');?>"> <div class="icon fb"></div>
                    </a>
                <?php } else { ?>
                    <a target="_blank" href="<?php echo esc_url(get_theme_mod('fb_link','#facebook','beautystyle')); ?>" 
                        title="<?php esc_attr_e('Facebook','beautystyle');?>"> <div class="icon fb"></div>
                    </a>
                <?php } ?>  

                <?php if (esc_attr(get_theme_mod('twitt_link') !== '')) { ?>
                    <a target="_blank" href="<?php echo esc_url(get_theme_mod('twitt_link','beautystyle')); ?>" 
                        title="<?php esc_attr_e('Twitter','beautystyle');?>"><div class="icon twitt"></div>
                    </a>
                <?php } else { ?>
                    <a target="_blank" href="<?php echo esc_url(get_theme_mod('twitt_link','#twitter','beautystyle')); ?>" 
                        title="<?php esc_attr_e('Twitter','beautystyle');?>"><div class="icon twitt"></div>
                    </a>
                <?php } ?>

                <?php if (esc_attr(get_theme_mod('ig_link') != '')) { ?>
                    <a target="_blank" href="<?php echo esc_url(get_theme_mod('ig_link','beautystyle')); ?>" 
                        title="<?php esc_attr_e('Instagram','beautystyle');?>"><div class="icon instagram"></div>
                    </a>
                <?php } else { ?>
                    <a target="_blank" href="<?php echo esc_url(get_theme_mod('ig_link','#ig','beautystyle')); ?>" 
                        title="<?php esc_attr_e('Instagram','beautystyle');?>"><div class="icon instagram"></div>
                    </a>
                <?php } ?>

                <?php if (esc_attr(get_theme_mod('linked_link') != '')) { ?>
                    <a target="_blank" href="<?php echo esc_url(get_theme_mod('linked_link','beautystyle')); ?>" 
                        title="<?php esc_attr_e('Linkedin','beautystyle');?>"><div class="icon linkedin"></div>
                    </a>
                <?php } else { ?>
                    <a target="_blank" href="<?php echo esc_url(get_theme_mod('linked_link','#linkedin','beautystyle')); ?>" 
                        title="<?php esc_attr_e('Linkedin','beautystyle');?>"><div class="icon linkedin"></div>
                    </a>
                <?php } ?>

                <?php if (get_theme_mod('wha_link') != "") { ?>
                    <a target="_blank" href="<?php echo esc_url(get_theme_mod('wha_link','beautystyle')); ?>" 
                        title="<?php esc_attr_e('Whatsapp','beautystyle');?>"><div class="icon whatsapp"></div>
                    </a>
                <?php } else { ?>
                    <a target="_blank" href="<?php echo esc_url(get_theme_mod('wha_link','#whatsapp','beautystyle')); ?>" 
                        title="<?php esc_attr_e('Whatsapp','beautystyle');?>"><div class="icon whatsapp"></div>
                    </a>
                <?php } ?>

                <?php if (get_theme_mod('tiktok_link') != "") { ?>
                    <a target="_blank" href="<?php echo esc_url(get_theme_mod('tiktok_link','beautystyle')); ?>" 
                        title="<?php esc_attr_e('TikTok','beautystyle');?>"><div class="icon tiktok"></div>
                    </a>
                <?php } else { ?>
                    <a target="_blank" href="<?php echo esc_url(get_theme_mod('tiktok_link','#tiktok','beautystyle')); ?>" 
                        title="<?php esc_attr_e('TikTok','beautystyle');?>"><div class="icon tiktok"></div>
                    </a>
                <?php } ?>

            </div>

        </div>

        <div class="box-ft3 text-content">

            <?php if(is_active_sidebar('footer-wid') ):
                dynamic_sidebar('footer-wid');
            endif; ?>

        </div>

    </div>

    <div class="arr">
        <p><?php esc_html_e('&copy; Copyright ','beautystyle');?> <?php echo esc_html(date("o"));?>&nbsp;<?php bloginfo('name');?>&nbsp;<?php esc_attr_e('All Rights Reserved.','beautystyle');?></p>
    </div>

</footer>

<?php wp_footer(); ?>

</body>
</html>