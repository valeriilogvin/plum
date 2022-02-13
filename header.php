<?php
/**
 * The header for our theme
 *
 * @package plum
 */

?>
<!DOCTYPE html>

<html data-wf-page="6177b63eafa951ecf26ffbd0">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />

    <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
    <meta content="<?php bloginfo('name'); ?>" property="og:title" />
    <meta content="<?php bloginfo('name'); ?>" property="twitter:title" />

    <meta content="<?php bloginfo('description'); ?>" name="description" />
    <meta content="<?php bloginfo('description'); ?>" property="og:description" />
    <meta content="<?php bloginfo('description'); ?>" property="twitter:description" />

    <meta property="og:type" content="website" />

    <link rel="alternate" hreflang="uk" href="<?php echo home_url(); ?>/" />
    <link rel="alternate" hreflang="ru" href="<?php echo home_url(); ?>/ru/" />

    <link rel="canonical" href="<?php echo home_url(); ?>/" />

    <?php wp_head(); ?>
</head>

<body class='body'>
    <div>
        <div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar-2 w-nav">
            <div class="z nav">
                <a href="<?php echo home_url(); ?>/" aria-current="page" class="brand-2 w-nav-brand w--current">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/<?php pll_e('img/ua1.svg'); ?>" loading="lazy" alt="" class="image" />
                </a>
                <!--<div data-hover="false" data-delay="0" class="dropdown-11 w-dropdown">
                    <div class="dropdown-toggle-15 w-dropdown-toggle">
                        <div class="icon-2 w-icon-dropdown-toggle"></div>
                        <div class="lang-change-link">Ua</div>
                    </div>
                    <nav class="dropdown-list-14 w-dropdown-list">
                        <a href="<?php echo home_url(); ?>/ru/" class="dropdown-link w-dropdown-link lang-change-link">Ru</a>
                    </nav>
                </div> -->

<?php pll_the_languages(array('dropdown'=>1));  ?>

                <nav role="navigation" class="nav-menu w-nav-menu">
                    <div class="div-block-432">
                         <?php
                                wp_nav_menu(array(
                                    'theme_location'  => 'top',
                                    'container'       => null,
                                    'menu_class'      => 'topmenu',
                                ));
                                ?>
                        <a href="<?php echo home_url(); ?>/#1" class="nav-link w-nav-link"><?php pll_e('Вигода'); ?></a>
                        <a href="<?php echo home_url(); ?>/#3" class="nav-link w-nav-link"><?php pll_e('Можливості'); ?></a>
                        <a href="<?php echo home_url(); ?>/#7" class="nav-link w-nav-link"><?php pll_e('Контакти'); ?></a>
                    </div>
                    <div class="div-block-430 pc">
                        <div class="div-block-429"><a href="tel:+380997777693" class="link">+38 (099) 777-76-93</a><a href="tel:+380967870429" class="link _0">+38 (096) 787-04-29</a></div>
                        <div data-w-id="36531da9-2b44-4841-8f48-0fb3267d1666" class="place-button-here">
                            <div style="-webkit-transform:translate3d(-50px, -30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0);-moz-transform:translate3d(-50px, -30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0);-ms-transform:translate3d(-50px, -30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0);transform:translate3d(-50px, -30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0)" class="blik-btn"></div><a href="#" class="button _9898 w-button" data-ix="open-lb-and-box-button">Замовити дзвінок</a>
                        </div>
                    </div>
                </nav>
                <div data-w-id="dbcd5310-29aa-9504-4488-bf28d24efd90" class="menu-button w-nav-button">
                    <div class="div-block-431-1"></div>
                    <div class="div-block-431-2"></div>
                    <div class="div-block-431-3"></div>
                </div>
                <div class="div-block-430">
                    <div class="div-block-429"><a href="tel:+380997777693" class="link">+38 (099) 777-76-93</a><a href="tel:+380967870429" class="link _0">+38 (096) 787-04-29</a></div>
                    <div data-w-id="15a76bdb-bd7d-3f7b-d5b6-39522ef7cc79" class="place-button-here">
                        <div style="-webkit-transform:translate3d(-50px, -30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0);-moz-transform:translate3d(-50px, -30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0);-ms-transform:translate3d(-50px, -30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0);transform:translate3d(-50px, -30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0)" class="blik-btn"></div><a href="#" class="button _9898 w-button" data-ix="open-lb-and-box-button">Замовити дзвінок</a>
                    </div>
                </div>
            </div>
        </div>
