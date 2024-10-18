<?php 
/**
 * Template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package beautystyle
 */
get_header();?>

<main class="container" role="main" id="content">

    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

        <?php get_template_part('template-parts/content', 'page'); ?>

        <?php endwhile; ?>
        
    <?php else : ?>

        <div class="stdiv page-content">

            <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'beautystyle'); ?></p>

        </div>

    <?php endif; ?>

</main>

<?php get_footer(); ?>