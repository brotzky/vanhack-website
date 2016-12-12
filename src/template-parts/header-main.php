<body <?php body_class(); ?>>
<?php if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); } ?>
<div id="page" class="hfeed site">
    <header role="banner">
        <!-- Navigation: Primary -->
        <div class="navigation-primary">
            <nav class="main-navigation" role="navigation">
            <?php
                if (has_nav_menu('header'))
                {
                    wp_nav_menu( array(
                        'theme_location'    => 'header',
                        'container_class'   => 'navigation-primary-menu',
                    ));
                }
            ?>
            </nav>
        </div>

        <!-- Navigation: Mobile -->
        <div class="navigation-mobile">
            <!-- Navigation Mobile: Top -->
            <div class="navigation-mobile-top">
                <div class="navigation-icon" id="js-mobile-navigation">
                    <span></span><span></span><span></span>
                </div>
                <div class="navigation-mobile-logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php bloginfo( 'name' ); ?>">
                    </a>
                </div>
            </div>

            <!-- Navigation Mobile: Primary -->
            <nav class="navigation-mobile-primary">
                <?php
                // Mobile primary navigation
                if (has_nav_menu('mobile'))
                {
                    wp_nav_menu(array(
                        'theme_location'  => 'mobile',
                        'container_class' => 'navigation-mobile-menu',
                    ));
                }
                ?>
            </nav>
        </div>
    </header>

    <div id="content-wrapper">
        <div id="content" class="site-content">
