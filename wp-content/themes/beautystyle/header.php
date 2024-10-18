<?php
/**
 * Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div class="header">.
 *
 * @since beautystyle
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset=<?php bloginfo('charset'); ?> />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>" />

    <!-- Meta for IE support -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'beautystyle' ); ?></a>

    <header class="stdiv header-container">

        <div class="header">

            <div class="logo">
                <?php if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo();
                } ?>
            </div>
            
            <?php if (has_nav_menu('header')) : ?>
                <div class="menu-container">

                    <button class="menu-button" id="menu-button" aria-label="<?php esc_attr_e('Menu','beautystyle'); ?>">

                        <label class="menu-icon" for="menu-button">
                            <span class="nav-icon"></span>
                        </label>

                    </button>

                    <div id="site-header-menu" class="site-header-menu">

                        <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e('Header','beautystyle'); ?>">
                            <?php wp_nav_menu(array(
                                'theme_location' => 'header',
                                'depth'          => 3,
                            )); ?>
                        </nav>

                    </div>
                </div>
            <?php endif; ?>

        </div>  

        <div class="search-light">
            <?php get_search_form(); ?>
        </div>

    </header>
