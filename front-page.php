<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Coupler_Theme
 */


?>
<?php get_header(); ?>
    <main>
        <?php
            $image = get_field('hero_mobile_background');
             if( !empty( $image ) ): ?>
        <div class="hero-mobile" style=" background:transparent url('<?php echo esc_url($image['url']) ; ?>') no-repeat;
                        width: 100%;
                        background-size: cover; ">
            <?php endif; ?>
            <section class="hero"
                <?php
                $image_bg = get_field('hero_background');
                if( !empty( $image_bg) ): ?>
                     style=" background:transparent url('<?php echo esc_url($image_bg['url']) ; ?>') no-repeat;
                        width: 100%;
                        background-size: cover; ">
                <?php endif; ?>
                <div class="container">
                    <div class="left-col">
                        <div class="content">
                            <p class="descr"><?php echo get_field('hero_descr');?></p>
                            <p class="title"><?php echo get_field('hero_title');?></p>
                            <?php
                            $link = get_field('hero_link');
                            if( $link ):
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                ?>
                                <a class="link" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="right-col"
                        <?php
                        $image_mob = get_field('hero_additional_image_phone');
                        if( !empty( $image_mob) ): ?>
                         style="background: url('<?php echo esc_url($image_mob['url']);?>') no-repeat 70% 100%;">
                        <?php endif;?>
                    </div>
                </div>
            </section>
        </div>

        <section class="second" id="kuidas">
            <div class="container">
                <div class="second__content">
                    <div class="left-col">
                        <p class="title"><?php echo get_field('second_section_title');?></p>
                        <p class="subtitle"><?php echo get_field('second_section_subtitle');?></p>
                        <p class="descr"><?php echo the_field('second_section_descr');?></p>
                    </div>
                    <?php
                    $file = get_field('second_section_background_image');
                    if( $file ):
                        $url = wp_get_attachment_url( $file ); ?>
                    <div class="right-col rounded"
                         style="background-image: url('<?php echo esc_url($file['url']);?>');">
                        <?php endif; ?>
                        <?php
                            if( have_rows('second_section_small_icons') ):
                                $i = 0;
                            while( have_rows('second_section_small_icons') ):$i++; the_row();
                                $sub_value = get_sub_field('icon_image');
                                $iconLink = get_sub_field('icon_link');
                                if($iconLink):?>

                                   <a href="<?php echo esc_url( $iconLink );

                                   ?>" class="icon-link" data-id="<?php echo $i;?>">
                                       <?php include get_attached_file($sub_value['id']);?>
                                   </a>


                            <?php endif;
                                    endwhile;
                                    endif;
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <!--    -->

        <section class="third" >
            <div class="container">
                <?php
            if( have_rows('third_section_block') ):
            while( have_rows('third_section_block') ) : the_row();?>
                <div class="third__content">
                    <div class="left-col">
                        <p class="title"><?php echo get_sub_field('third_title') ;?></p>
                        <p class="descr"><?php echo get_sub_field('third_descr');?></p>
                    </div>
                    <div class="right-col">
                        <img src="<?php echo get_sub_field('third_img')['url'];?>" alt="second-img">
                    </div>
                </div>
                <?php endwhile; endif;?>
            </div>
        </section>

        <!--    Section slider-->
        <section class="slider-block" id="api">
            <div class="slider__container">
                <?php

                if( have_rows('slider_block') ):
                    while( have_rows('slider_block') ) : the_row();?>


                <div class="slider__content" id="<?php echo the_sub_field('slide_id');?>">
                    <div class="left-col">
                        <div class="left-col__content">
                            <div class="content-info">
                                <p class="title"><?php echo the_sub_field('slide_title');?></p>
                                <p class="descr"><?php echo the_sub_field('slide_descr');?></p>
                            </div>
                            <div class="button-show">
                                <p class="show"><?php echo the_sub_field('show_text');?></p>
                                <img src="<?php echo get_sub_field('show_button')['url'];?>" class="show-content" alt="eye">
                            </div>
                        </div>

                    </div>
                    <div class="right-col">
                        <div class="right-img">
                            <img src="<?php echo get_sub_field('slide_image')['url'];?>" alt="phone" class="phone-content" width="500px" height="540px">
                        </div>
                        <div class="button-close">
                            <p class="close"><?php echo the_sub_field('close_text');?></p>
                            <img src="<?php echo get_sub_field('close_button')['url'];?>" class="close-content" alt="eye">
                        </div>
                    </div>
                </div>
         <?php endwhile;
                endif;?>
            </div>
        </section>
<!--        Couple Section -->
        <section class="couple" id="meist">
            <div class="couple__container">
                <?php
                if( have_rows('couple_content') ):
                    while( have_rows('couple_content') ) : the_row();?>
                    <div class="couple__content">
                        <div class="right-col">
                            <img src="<?php echo get_sub_field('couple_image')['url'];?>" alt="couple">
                        </div>
                        <div class="left-col">
                            <p class="descr"><?php echo the_sub_field('couple_text');?></p>
                        </div>
                    </div>
                    <?php endwhile;
                endif;?>

            </div>
        </section>
        <section class="contact" >
            <div class="container">
                <div class="contact__content">
                    <p class="contact__title"><?php echo get_field('bottom_text');?></p>
                    <?php
                    $bottom_link = get_field('bottom_link');
                    if( $bottom_link ):
//                        $bottom_link = $bottom_link['url'];
//                        $link_title = $link['title'];
//                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
<!--                        <a class="link" href="--><?php //echo esc_url( $bottom_link ); ?><!--">--><?php //echo esc_html( $link_title ); ?><!--</a>-->
                        <a class="link" href="<?php echo $bottom_link['url']; ?>"><?php echo $bottom_link['title']; ?></a>
                    <?php endif; ?>

<!--                    <a href="--><?php //echo get_field('bottom_link')['url'] ;?><!-- " >--><?php //echo get_field('bottom_link')['title'] ;?><!-- </a>-->
                </div>
            </div>
        </section>
    </main>


<?php get_footer(); ?>
