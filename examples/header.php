<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Resource-type" content="document">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/jamanto.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/font-awesome.min.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="site-content">

        <header id="masterheader" class="site-header navbar-static-top" role="banner">

            <div class="container">
                <div class="row">
                    <div class="<?php echo jm_config_col ?>-6">
                        <div class="navbar-brand">
                            <?php if ( get_theme_mod( 'jamanto_logo' ) ): ?>
                                <a href="<?php echo esc_url( home_url( '/' )); ?>">
                                    <img src="<?php echo esc_attr( get_theme_mod( 'jamanto_logo' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                                </a>
                            <?php else : ?>
                                <a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_url( bloginfo( 'name' ) ); ?></a>
                            <?php endif; ?>

                        </div>
                    </div>
                    <div class="<?php echo jm_config_col ?>-6 jm-right">
                        <?php
                            if ( is_active_sidebar( 'header-1' )) {
                                dynamic_sidebar( 'header-1' );
                            }
                        ?>
                    </div>
                </div>
            </div>

            <div class="header-menu-layout-2">
                <div class="container">
                    <nav class="navbar navbar-expand-xl">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa fa-bars"></i> <?php _e( 'Menu', 'jamanto') ?>
                        </button>

                        <?php
                        wp_nav_menu( array(
                            'theme_location'  => 'header-menu',
                            'container'       => 'div',
                            'container_id'    => 'header-menu',
                            'container_class' => 'collapse navbar-collapse',
                            'menu_id'         => false,
                            'menu_class'      => 'navbar-nav',
                            'depth'           => 1,
                            'fallback_cb'     => ''
                        ) );
                        ?>
                    </nav>
                </div>
            </div>
        </header>