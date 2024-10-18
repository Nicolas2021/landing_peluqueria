<?php
/**
 * Custom blog template part
 * 
 * @package beautystyle
 */
?>
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
                    <button type="button" class="bt-read-more"><?php echo esc_html__("Read more","beautystyle");?></button>
                </a>

            </div>
            
        </div>

        <p class="postmetadata">
            <?php
            $beautystyle_m_post = get_the_date('m');
            $beautystyle_y_post = get_the_date('Y'); ?>

            <a href="<?php echo esc_url(get_month_link($beautystyle_y_post, $beautystyle_m_post)); ?>"><?php the_date(get_option('date_format')); ?></a> &nbsp;|&nbsp;

                <!--  delete comment for display the post tags 
                    <?php the_tags('Tags: ', ', ', '<br />'); ?> &nbsp;|&nbsp; -->

                <?php the_category(', '); ?> &nbsp;|&nbsp;

            <a href="<?php comments_link(); ?>"><?php comments_number(); ?> </a>
        </p>

    </article>

</div>