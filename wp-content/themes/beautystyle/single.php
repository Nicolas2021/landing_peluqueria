<?php
/**
 * The Template for displaying all single post.
 *
 * @package beautystyle
 */

get_header();?>

<main class="container" role="main" id="content">

    <section class="stdiv titart">

        <?php if (have_posts()) : while (have_posts()) : the_post();
        
            get_template_part( 'template-parts/content', 'single' );

            //if comments are open or we have at leaast one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;

        endwhile; ?>
        <?php else : ?>

            <div class="singlepost">

                <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'beautystyle'); ?></p>

            </div>

        <?php endif; ?>

    </section>

</main>

<?php get_footer(); ?>