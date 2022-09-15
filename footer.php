<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Coupler_Theme
 */

?>
<footer class="footer">
    <div class="container">
        <div class="footer__content">
            <div class="left-col">
                <div class="left__content">
                    <a href="<?php echo home_url(); ?>" class="footer__logo">
                            <?php
                            $footer_logo = get_field('footer_logo','options');
                            if( $footer_logo ):
                            $url_footer_logo = wp_get_attachment_url( $footer_logo ); ?>

                            <img src="<?php echo esc_url($footer_logo['url'], 'options');?>" alt="hearts"></a>
                        <?php endif; ?>
                    <p class="footer__text"><?php echo get_field('footer_text','options');?></p>
                    <a href="mailto:<?php the_field('footer_link','options'); ?>" class="link-mail">
                        <?php echo get_field('footer_link','options');?>
                    </a>
                </div>
            </div>
            <div class="right-col">
                <div class="right__content">
                    <?php
                    $footer_menu_link = get_field('footer_menu_link','options');
                    if( $footer_menu_link ):
                        $footer_menu_link_url = $footer_menu_link['url'];
                        $footer_menu_link_title = $footer_menu_link['title'];
                    //                        $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a href="<?php echo esc_url( $footer_menu_link_url ); ?>" class="footer__link">
                        <?php echo esc_html( $footer_menu_link_title ); ?>
                    </a>
                    <?php endif;?>
                    <?php
                    wp_nav_menu( array(
                            'theme_location' => 'footer-menu',
                            'container' => 'ul',
                            'container_class' => '',
                            'container_id'  => '',
                            'menu_class' => 'footer__menu',
                        )
                    )
                    ;?>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>


</body>
</html>
