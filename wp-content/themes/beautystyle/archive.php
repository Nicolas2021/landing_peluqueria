<?php
/**
 * archive template
 *
 * @package beautystyle
 */

get_header(); ?>

<main class="container" role="main" id="content">

    <div class="stdiv">
        <h1 class="small"><?php  bloginfo('name'); ?></h1>
    </div>

    <?php get_template_part('template-parts/content', 'category'); ?>
    
    <?php
       $beautystyle_category = get_query_var('category_name');
       $beautystyle_date_post = array('month'=> get_the_time('m'), 'year'=> get_the_time('Y') ); 
       $beautystyle_paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

       $beautystyle_args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'paged' => $beautystyle_paged,
                'category_name' => $beautystyle_category,
                'date_query' => $beautystyle_date_post
            );

        $beautystyle_query = new WP_Query($beautystyle_args);
    ?>

    <?php if($beautystyle_query->have_posts()) : while ($beautystyle_query->have_posts()) : $beautystyle_query->the_post();

            get_template_part('template-parts/content', 'blog');

        endwhile; ?>

            <?php
                /*if category post = 1 pagination hidden
                 if category post >1 pagination visible */
                $beautystyle_args_link = array(
                    'prev_text' => '&#10094;',
                    'total' => $beautystyle_query->max_num_pages,
                    'next_text' => '&#10095;'
                ); ?>

            
            <?php if ($beautystyle_args_link['total'] > 1) { ?>
                    <div class="stdiv">

                        <div class="pagination">
                            <?php echo wp_kses_post(paginate_links($beautystyle_args_link)); ?>
                        </div>
                        
                    </div>
            <?php } ?>
    <?php else : ?>

        <div class="stdiv titart">
            <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'beautystyle'); ?></p>
        </div>

    <?php endif; ?>

</main>

<?php get_footer(); ?>