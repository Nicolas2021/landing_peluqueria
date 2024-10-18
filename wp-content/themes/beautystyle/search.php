<?php
/**
 * Custom search template
 *
 * @since beautystyle
 */

get_header();?>

    <main class="container" role="main" id="content">
        
        <?php if(have_posts()):
        
            while(have_posts()): the_post();

                get_template_part('template-parts/content','search');

            endwhile;
        
        else :

            get_template_part('template-parts/content', 'none');

        endif; ?>

    </main>

<?php get_footer(); ?>