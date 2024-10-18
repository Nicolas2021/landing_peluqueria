<?php
/**
 * Custom single post template part
 * 
 * @package beautystyle
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>

    <h2><?php the_title(); ?></h2>

    <div class="singlepost text-content">
        <?php the_content(); ?>
    </div>

    <?php
        $beautystyle_args = array(
            'before' => '<div class="page-links">' . esc_html__('Pagina' , 'beautystyle'),
            'after' => '</div>'
        );
        wp_link_pages($beautystyle_args);
    ?>

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