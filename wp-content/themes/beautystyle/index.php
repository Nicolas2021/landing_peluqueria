<?php 
/**
 * Theme: BeautyStyle
 *
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package beautystyle
 */

 get_header();?>

<main class="container" role="main" id="content">

    <div class="stdiv">
        <h1 class="small"><?php bloginfo('name'); ?></h1>
    </div>

    <?php get_template_part('template-parts/content', 'front-home-page'); ?>

</main>

<?php get_footer(); ?>
