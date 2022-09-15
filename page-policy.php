<?php
/**
 * The template file for policy page
 *
 * Template Name : Page Policy
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Coupler_Theme
 */


?>

<?php get_header(); ?>
<main>
    <section class="main">
    <div class="container">
        <div class="policy__content">
            <h1 class="title">Privacy Policy</h1>
            <?php
            if( have_rows('policy_text') ):
            while( have_rows('policy_text') ) : the_row();?>
            <div class="policy__decsr">
                <p class="subtitle"><?php echo the_sub_field('policy_subtitle');?></p>
                <p class="descr"><?php echo the_sub_field('policy_descr');?></p>
            </div>
            <?php endwhile;
            endif;?>
        </div>
    </div>
    </section>
</main>

<?php get_footer();?>
