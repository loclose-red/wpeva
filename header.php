<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php wp_title(); ?></title>

    <!-- pour le slider -->
    <!-- <link rel="stylesheet" type="text/css" href="slick/slick.css"/> -->
    <!-- <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/> -->

    <!-- Add the slick-theme.css if you want default styling -->
    <!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"/> -->
    <!-- Add the slick-theme.css if you want default styling -->
    <!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/> -->
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>


<div class="container">
    <header class="">
        <div class="nav-menu">
            <!-- affiche logo  -->
            <div class="bloc-logo">
                <div class="logo">
                    <?php the_custom_logo(); ?>
                </div>
                <div class="logo-text">
                    <h3><?php bloginfo('name'); ?></h3>
                    <h4><?php bloginfo('description'); ?></h4>
                </div>

            </div>
            <!-- Fin affiche logo -->


            <!-- Menu nav -->
            <nav class="navbar navbar-expand-md navbar-light" role="navigation">
                    <div class="container">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-menu" aria-controls="#header-menu" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <?php
                            wp_nav_menu(array(
                                'theme_location'    => 'header_menu',// Doit correspondre au premier paramètre de la fonction register_nav_menu() placé dans function.php
                                'depth'             => 2,
                                'container'         => 'div',
                                'container_class'   => 'collapse navbar-collapse',
                                'container_id'      => 'header-menu',
                                'menu_class'        => 'nav navbar-nav',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker(),
                            ));
                            ?>
                    </div>
            </nav>
            <!-- Fin du menu nav -->
            <?php

            /**
             * affichage du panier
             */
            add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );
            function woocommerce_header_add_to_cart_fragment( $fragments ) {
                global $woocommerce;
                ob_start();
                ?>
                <a class="cart-customlocation" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> – <?php echo $woocommerce->cart->get_cart_total(); ?></a>
                <?php
                $fragments['a.cart-customlocation'] = ob_get_clean();
                return $fragments;
            }?>

        </div>
    </header>