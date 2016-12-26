<body <?php body_class(); ?>>
<?php if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); } ?>
<div class="VanHack" class="hfeed site">
    <div class="NavigationPrimary">
        <nav class="NavigationPrimary__nav Container" role="navigation">
        <?php
            if (has_nav_menu('header'))
            {
                wp_nav_menu( array(
                    'theme_location'    => 'header',
                    'container_class'   => 'NavigationPrimaryMenu',
                ));
            }
        ?>
        </nav>
    </div>

    <div class="NavigationMobile">
        <div class="NavigationMobile__top">
            <div class="NavigationMobile__icon" id="js-mobile-navigation">
                <span></span><span></span><span></span>
            </div>
            <div class="NavigationMobile__logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php bloginfo( 'name' ); ?>">
                </a>
            </div>
        </div>

        <nav class="NavigationMobile__primary">
            <?php
            // Mobile primary navigation
            if (has_nav_menu('mobile'))
            {
                wp_nav_menu(array(
                    'theme_location'  => 'mobile',
                    'container_class' => '"NavigationMobile__menu',
                ));
            }
            ?>
        </nav>
    </div>
    <div class="SiteContent">
