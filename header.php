<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Security_Time
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> dir="rtl">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text"
            href="#primary"><?php esc_html_e( 'Skip to content', 'security' ); ?></a>
        <div class="header-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-2 col-4">
                        <div class="logo-box">
                            <?php 
                            if ( function_exists( 'the_custom_logo' ) ) {
                                the_custom_logo();
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-md-7 col-8">
                        <div class="open-menu">
                            <i class="fa-solid fa-bars"></i>
                        </div>
                        <div class="nav-box">
                            <div class="close-menu">
                                <i class="fa-solid fa-xmark"></i>
                            </div>
                            <?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
									)
								);
								?>
                            <div class="button-box">
                                <a href="<?php the_field("header_button_link", "option") ?>">
                                    <?php the_field("header_button_text", "option") ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 	d-sm-none d-none d-md-block d-lg-block">
                        <div class="button-box text-end">
                            <a href="<?php the_field("header_button_link", "option") ?>">
                                <?php the_field("header_button_text", "option") ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <main>