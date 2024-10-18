<?php 
/**
 * Template for displaying 404 pages (Not Found)
 *
 * @package beautystyle
 */

get_header();?>

<main class="container" role="main" id="content">

    <div class="stdiv">

        <div class="noresult">
            <p><?php esc_html_e('The page you are trying to reach does not exist, or has been moved. Please use the menus or the search box to find what you are looking for.', 'beautystyle'); ?></p>
        </div>
        
    </div>

</main>

<?php get_footer(); ?>