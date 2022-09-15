<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Coupler_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    <title>Coupler</title>-->

<?php wp_head(); ?>

</head>
<body>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">
    <div class="container">
        <div class="header__content">
<!--   Header logo-->
            <div class="header__logo">
                <a href="<?php echo home_url(); ?>">
                    <?php
                    $file_logo = get_field('header_logo','options');
                    if( $file_logo ):
                    $url_logo = wp_get_attachment_url( $file_logo ); ?>
                    <img src="<?php echo esc_url($file_logo['url'], 'options');?>" alt="hearts"></a>
                <?php endif; ?>
            </div>
            <!-- Navigation -->
            <nav class="header__nav">

<!--                <ul class="header__menu">-->
                    <?php
                        wp_nav_menu( array(
                                'theme_location' => 'header-menu',
                                'container' => 'ul',
                                'container_class' => '',
                                'container_id'  => '',
                                'menu_class' => 'header__menu',

                            )

                        )
                    ;?>
<!--                    <li class="header__menu__item"><a href="#kuidas">Kuidas toimib</a></li>-->
<!--                    <li class="header__menu__item"><a href="#api">Äpi vaated</a></li>-->
<!--                    <li class="header__menu__item"><a href="#meist">Meist</a></li>-->
<!--                    <li class="header__menu__item"><a href="/coupler/contact.html">Kontakt</a></li>-->
<!--                    <li class="header__menu__item "><a href="#politic">Privaatsuspoliitika</a></li>-->
<!--                </ul>-->
                <div class="hamburger">
                    <span></span>
                    <span></span>
                </div>
            </nav>
        </div>
    </div>
</header>


