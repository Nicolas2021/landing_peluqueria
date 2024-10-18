<?php
/**
 * Front Page Template
 *
 * @since beautystyle
 */

get_header();?>

<main class="container" role="main" id="content">

    <div class="stdiv">
        <h1 class="small"><?php bloginfo('name'); ?></h1>
    </div>

    <?php get_template_part('template-parts/content', 'front-home-page'); ?>
    
</main>

<?php get_footer(); ?>
