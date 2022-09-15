<?php
/**
* The template file for kontakt page
*
* Template Name : Kontakt Page
* Template Post Type : page
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Coupler_Theme
*/


?>

<?php get_header();?>
<main>
    <section class="main">
        <div class="container__contact">
            <div class="upper__content">
                <p class="upper__descr-accent"><?php echo get_field('upper_title');?></p>
                <p class="upper__descr"><?php echo get_field('upper_text');?></p>
            </div>
            <div class="bottom__content">
                <div class="bottom__image">
                        <?php
                        $image_upper = get_field('upper_img');
                        if( !empty( $image_upper) ): ?>
                            <img src="<?php echo esc_url($image_upper['url']);?>" alt="phone">
                        <?php endif;?>
                </div>
                <div class="contact__form">
                    <div class="contact__form__body">
						<p class="descr upper"><?php echo get_field('form_title');?><br></p>
						<p class="descr"><?php echo get_field('form_text');?>
						</p>
						<form action="#" class="form">
							<div class="field__group">
								<input type="text" id="name" placeholder="Nimi:">
								<input type="email" id="email" placeholder="E-Mail:">
							</div>
							<div class="field__group-box">
								<input type="checkbox" id="info" name="info" value="done">
								<label for="info">Olen tutvunud privaatsusteatega ja nõustun
									minu andmete töötlemisega. Nõustun, et minu e-maili aadressile
									võidakse saata infot rakenduse kohta</label>
							</div>
							<input type="submit" class="link" value="Saada">

						</form>
					</div>
                </div>
            </div>

        </div>
    </section>
</main>
<?php get_footer();?>