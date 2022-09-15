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
        <div class="hero-mobile" style=" background:transparent url('img/coupler_mob_back2.png') no-repeat;
                        width: 100%;
                        background-size: cover; ">
            <section class="hero"
                     style=" background:transparent url('img/hero.png') no-repeat;
                        width: 100%;
                        background-size: cover; ">
                <div class="container">
                    <div class="left-col">
                        <div class="content">
                            <p class="descr">Coupler on lihtne, interaktiivne ja mänguline ajaviide paaridele, mis toetab jõudmist</p>
                            <p class="title">tõeliselt õnnelikku suhtesse.</p>
                            <a href="#" class="link">Vaata lähemalt</a>
                        </div>
                    </div>
                    <div class="right-col"
                         style="background: url('img/phone-contact.png') no-repeat 70% 100%;">
                    </div>
                </div>
            </section>
        </div>

        <section class="second" id="kuidas">
            <div class="container">
                <div class="second__content">
                    <div class="left-col">
                        <p class="title">Kuidas</p>
                        <p class="subtitle">Coupler toimib?</p>
                        <p class="descr">Erinevate mänguliste tegevuste kaudu juhatatakse teid kõige olulisemate suhet mõjutatavate valdkondadeni. Teadlikkuse kasvades õpite märkama olulist ja pidevalt rakendust kasutades saate treenida enda suhteoskuseid.</p>
                    </div>
                    <div class="right-col rounded">
                        <img class="item" src="img/Group%201297%20(1).svg" alt="heart">

                        <img class="item"  src="img/Group%201401.svg" alt="bell">

                        <img class="item" src="img/Group%201401.svg" alt="bell">

                        <img class="item"  src="img/Group%201616.svg" alt="bell">

                        <img class="item"  src="img/Group%201617.svg" alt="bell">

                        <img class="item"  src="img/Group%201618.svg" alt="bell">

                        <img class="item"  src="img/Group%201619.svg" alt="bell">

                        <img class="item"  src="img/Group%201619.svg" alt="bell">

                    </div>
                </div>
            </div>
        </section>
        <!--    -->
        <section class="third">
            <div class="container">
                <div class="third__content">
                    <div class="left-col">
                        <p class="title">Ideaalne kaaslane</p>
                        <p class="descr">Erinevate mänguliste tegevuste kaudu juhatatakse teid kõige olulisemate suhet mõjutatavate valdkondadeni. Teadlikkuse kasvades õpite märkama olulist ja pidevalt rakendust kasutades saate treenida enda suhteoskuseid.</p>
                    </div>
                    <div class="right-col">
                        <img src="img/second-sec.png" alt="second-img">
                    </div>
                </div>
            </div>
        </section>
        <section class="third">
            <div class="container">
                <div class="third__content">
                    <div class="left-col">
                        <p class="descr">Kasuliku ajaveetmise käigus haagib COUPLER sind oma partneriga ja töötab kui sidur, mis toetab käiguvahetust teie suhtes, et saaksite veelgi nauditavamat sõitu kogeda.
                        </p>
                    </div>
                    <div class="right-col">
                        <img src="img/second-sec.png" alt="phone">
                    </div>
                </div>
            </div>
        </section>
        <!--    -->
        <!--    Section slider-->
        <section class="slider-block">
            <div class="slider__container">
                <div class="slider__content">
                    <div class="left-col">

                        <div class="left-col__content">
                            <div class="content-info">
                                <p class="title">Kuidas1</p>
                                <p class="descr">Erinevate mänguliste tegevuste kaudu juhatataks</p>
                            </div>
                            <div class="button-show">
                                <p class="show">vaata</p>
                                <img src="img/eye.svg" class="show-content" alt="eye">
                            </div>
                        </div>

                    </div>
                    <div class="right-col">
                        <div class="right-img">
                            <img src="img/phone.png" alt="phone">
                        </div>
                        <div class="button-close">
                            <p class="close">Sulge</p>
                            <img src="img/close-btn.svg" class="close-content" alt="eye">
                        </div>

                    </div>
                </div>
                <div class="slider__content">
                    <div class="left-col">

                        <div class="left-col__content">
                            <div class="content-info">
                                <p class="title">Kuidas2</p>
                                <p class="descr">Erinevate mänguliste tegevuste kaudu juhatataks</p>
                            </div>
                            <div class="button-show">
                                <p class="show">vaam</p>
                                <img src="img/eye.svg" class="show-content" alt="eye">
                            </div>
                        </div>

                    </div>
                    <div class="right-col">
                        <div class="right-img">
                            <img src="img/phone.png" alt="phone">
                        </div>
                        <div class="button-close">
                            <p class="close">Sulge</p>
                            <img src="img/close-btn.svg" class="close-content" alt="eye">
                        </div>

                    </div>
                </div>
                <div class="slider__content">
                    <div class="left-col">

                        <div class="left-col__content">
                            <div class="content-info">
                                <p class="title">Kuidas3</p>
                                <p class="descr">Erinevate mänguliste tegevuste kaudu juhatataks</p>
                            </div>
                            <div class="button-show">
                                <p class="show">vaam</p>
                                <img src="img/eye.svg" class="show-content" alt="eye">
                            </div>
                        </div>

                    </div>
                    <div class="right-col">
                        <div class="right-img">
                            <img src="img/phone.png" alt="phone">
                        </div>
                        <div class="button-close">
                            <p class="close">Sulge</p>
                            <img src="img/close-btn.svg" class="close-content" alt="eye">
                        </div>

                    </div>
                </div>
                <div class="slider__content">
                    <div class="left-col">

                        <div class="left-col__content">
                            <div class="content-info">
                                <p class="title">Kuidas4</p>
                                <p class="descr">Erinevate mänguliste tegevuste kaudu juhatataks</p>
                            </div>
                            <div class="button-show">
                                <p class="show">vaam</p>
                                <img src="img/eye.svg" class="show-content" alt="eye">
                            </div>
                        </div>

                    </div>
                    <div class="right-col">
                        <div class="right-img">
                            <img src="img/phone.png" alt="phone">
                        </div>
                        <div class="button-close">
                            <p class="close">Sulge</p>
                            <img src="img/close-btn.svg" class="close-content" alt="eye">
                        </div>

                    </div>
                </div>
                <div class="slider__content">
                    <div class="left-col">

                        <div class="left-col__content">
                            <div class="content-info">
                                <p class="title">Kuidas5</p>
                                <p class="descr">Erinevate mänguliste tegevuste kaudu juhatataks</p>
                            </div>
                            <div class="button-show">
                                <p class="show">vaam</p>
                                <img src="img/eye.svg" class="show-content" alt="eye">
                            </div>
                        </div>

                    </div>
                    <div class="right-col">
                        <div class="right-img">
                            <img src="img/phone.png" alt="phone">
                        </div>
                        <div class="button-close">
                            <p class="close">Sulge</p>
                            <img src="img/close-btn.svg" class="close-content" alt="eye">
                        </div>

                    </div>
                </div>
                <div class="slider__content">
                    <div class="left-col">

                        <div class="left-col__content">
                            <div class="content-info">
                                <p class="title">Kuidas6</p>
                                <p class="descr">Erinevate mänguliste tegevuste kaudu juhatataks</p>
                            </div>
                            <div class="button-show">
                                <p class="show">vaam</p>
                                <img src="img/eye.svg" class="show-content" alt="eye">
                            </div>
                        </div>

                    </div>
                    <div class="right-col">
                        <div class="right-img">
                            <img src="img/phone.png" alt="phone">
                        </div>
                        <div class="button-close">
                            <p class="close">Sulge</p>
                            <img src="img/close-btn.svg" class="close-content" alt="eye">
                        </div>

                    </div>
                </div>
                <div class="slider__content">
                    <div class="left-col">

                        <div class="left-col__content">
                            <div class="content-info">
                                <p class="title">Kuidas7</p>
                                <p class="descr">Erinevate mänguliste tegevuste kaudu juhatataks</p>
                            </div>
                            <div class="button-show">
                                <p class="show">vaam</p>
                                <img src="img/eye.svg" class="show-content" alt="eye">
                            </div>
                        </div>

                    </div>
                    <div class="right-col">
                        <div class="right-img">
                            <img src="img/phone.png" alt="phone">
                        </div>
                        <div class="button-close">
                            <p class="close">Sulge</p>
                            <img src="img/close-btn.svg" class="close-content" alt="eye">
                        </div>

                    </div>
                </div>

            </div>

        </section>
        <section class="couple">
            <div class="couple__container">
                <div class="couple__content">
                    <div class="right-col">
                        <img src="img/shutterstock_1417386155.png" alt="couple">
                    </div>
                    <div class="left-col">
                        <p class="descr">Erinevate mänguliste tegevuste kaudu juhatataks</p>
                    </div>
                </div>
                <div class="couple__content">
                    <div class="right-col">
                        <img src="img/shutterstock_1417386155.png" alt="couple">
                    </div>
                    <div class="left-col">
                        <p class="descr">Erinevate mänguliste tegevuste kaudu juhatataks</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact">
            <div class="container">
                <div class="contact__content">
                    <p class="contact__title"> Kas oled valmis tõeliselt õnnelikuks suhteks?</p>
                    <a href="#" class="link">API</a>
                </div>
            </div>
        </section>
    </main>


<?php get_footer(); ?>
