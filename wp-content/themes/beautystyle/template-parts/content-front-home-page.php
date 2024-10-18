<?php
/**
 * Template part for displying content in front-page.php and index.php
 * 
 * @package beautystyle
 */
?>

<!-- slide box loop content -->
<?php if( get_theme_mod( 'slider_hide_box' ) == '') { ?>

        <section class="slider"> 
            <div class="box-images">

                <div class="text-box">
                    <h1 class="small"><?php bloginfo('description'); ?></h1>
                </div>

                <?php for ($beautystyle_sbx=1; $beautystyle_sbx<4; $beautystyle_sbx++) { ?>
                    <?php if( get_theme_mod('custom_slide1') !=='') { ?>
                            <img class="slides"
                                    src="<?php echo esc_html(get_theme_mod('beautystyle_slide_image_'.$beautystyle_sbx));?>"
                                    alt="<?php echo esc_html(get_theme_mod('beautystyle_slide_content_'.$beautystyle_sbx));?>">
                    <?php } ?>
                <?php } ?>

            </div>
        </section>

<?php } else { ?>

    <section class="slider">

        <div class="box-images-two">

            <div class="text-box-two">
                <h1 class="small"><?php bloginfo('description'); ?></h1>
            </div>

        </div>

    </section>

<?php } ?>

<!-- Three Boxes -->
<?php if( get_theme_mod( 'hide_boxes' ) == '') { ?>

    <section class="box-section-main">

        <?php for($beautystyle_tbx=1; $beautystyle_tbx<4; $beautystyle_tbx++) { ?>
            <?php if( get_theme_mod('custom_page_'.$beautystyle_tbx)) { ?>
                <?php $beautystyle_boxquery = new WP_query('page_id='.get_theme_mod('custom_page_'.$beautystyle_tbx,true)); ?>
                    <?php while( $beautystyle_boxquery->have_posts() ) : $beautystyle_boxquery->the_post(); ?>

                            <div class="box stdiv">
                                <h2><?php the_title();?></h2>

                                <?php the_post_thumbnail('beautystyle_thumbox', array('class' => 'radius','alt' => get_the_title())); ?>

                                <?php if (get_theme_mod('custom_content_'.$beautystyle_tbx) == '') { ?>
                                    <p><?php the_excerpt();?></p>
                                <?php } else { ?>
                                    <p><?php echo esc_html(get_theme_mod('custom_content_'.$beautystyle_tbx));?></p>
                                <?php } ?>

                                <a class="read-more" href="<?php the_permalink( get_the_ID() ); ?>">
                                    <button type="button" class="bt-read-more"><?php esc_html_e("Read more","beautystyle");?></button>
                                </a>

                            </div>

                            <!-- box -->
                            <?php if($beautystyle_tbx%4==0) { ?>
                                    <div class="clear"></div>
                            <?php } ?>
                    <?php endwhile; ?>

                    <?php wp_reset_postdata(); ?>

             <?php } 
        } ?>

    </section>

 <?php } ?>

<!-- articles section -->
<?php if( get_theme_mod( 'hide_posts_section' ) == '') { ?>
    
        <?php $beautystyle_args = array( 
            'posts_per_page' => 2,
            'orderby' => 'date',
            'post_status' => 'publish',
        ); ?>

        <?php $beautystyle_query = new WP_Query( $beautystyle_args ); ?>

        <?php if($beautystyle_query->have_posts()) : while ($beautystyle_query->have_posts()) : $beautystyle_query->the_post(); ?>

            <div class="stdiv titart">
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <h2>
                        <a href="<?php the_permalink( get_the_ID() ); ?>"><?php the_title(); ?></a>
                    </h2>

                    <div class="flex-row-article">

                        <?php if (has_post_thumbnail()) { ?>
                            <div class="row-article"><?php the_post_thumbnail('medium', array('class' => 'radius','alt' => get_the_title())); ?></div>
                        <?php } ?>

                        <div class="row-article text-content">

                            <?php the_excerpt(); ?>

                            <a class="read-more" href="<?php the_permalink( get_the_ID() ); ?>">
                                <button type="button" class="bt-read-more"><?php esc_html_e("Read more","beautystyle");?></button>
                            </a>
                            
                        </div>
                    
                    </div>

                    <p class="postmetadata">
                        <?php 
                            $beautystyle_m_post = get_the_date('m');
                            $beautystyle_y_post = get_the_date('Y'); 
                        ?>
                        <a href="<?php echo esc_url(get_month_link($beautystyle_y_post, $beautystyle_m_post)); ?>"><?php the_date(get_option('date_format')); ?></a> &nbsp;|&nbsp;

                        <!--  delete comment for display the post tags 
                        <?php the_tags('Tags: ', ', ', '<br />'); ?> &nbsp;|&nbsp; -->

                        <?php the_category(', '); ?> &nbsp;|&nbsp;

                        <a href="<?php comments_link(); ?>"><?php comments_number(); ?> </a>
                    </p>

                </article>
            </div>

            <?php endwhile;
            wp_reset_postdata();

        endif; ?>

    <?php } ?>