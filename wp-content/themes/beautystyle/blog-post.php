<?php
/* Template Name: Blog */
get_header(); ?>

<main class="container" role="main" id="content">

    <div class="stdiv">
        <h1 class="small"><?php bloginfo('name'); ?></h1>
    </div>

    <?php
        $beautystyle_paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

        $beautystyle_args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'paged' => $beautystyle_paged
            );

        $beautystyle_query = new WP_Query($beautystyle_args);
    ?>

    <?php if($beautystyle_query->have_posts()) : while ($beautystyle_query->have_posts()) : $beautystyle_query->the_post();

        get_template_part('template-parts/content', 'blog');

        endwhile; ?>

    <div class="stdiv">

        <div class="pagination">
            <?php
                echo wp_kses_post(paginate_links(array(
                    'prev_text' => '&#10094;',
                    'total' => $beautystyle_query->max_num_pages,
                    'next_text' => '&#10095;'
                ))); 
            ?>
        </div>

    </div>

    <?php else : ?>

        <div class="stdiv titart">
            <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'beautystyle'); ?></p>
        </div>

    <?php endif; ?>
    
</main>

<?php get_footer(); ?>