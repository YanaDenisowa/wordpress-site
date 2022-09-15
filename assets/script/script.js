jQuery(document).ready(function($) {

if (window.matchMedia("(min-width: 769px)").matches) {

    const icons = document.querySelectorAll(".icon-link");

    // console.log(icons);
    icons.forEach(icon=> {
        icon.addEventListener('click', e => {
            e.preventDefault();
            // console.log(e);
            let attribute = icon.getAttribute('href');
            // console.log(attribute);
           
			document.querySelector(attribute).scrollIntoView({
                    behavior:'smooth'
				 
            })

        })
    })

} else {
    const slider = {
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,

    }
    const slickGoTo = $('.slider__container');
    slickGoTo.slick(slider);
    const icons = document.querySelectorAll(".icon-link");
    icons.forEach(icon => {
        icon.addEventListener('click', e => {
            e.preventDefault();
            document.getElementById('api').scrollIntoView({
                behavior:'smooth'
            });
            let index = icon.getAttribute('data-id')-2;
//             console.log(index);
            slickGoTo.slick("slickGoTo", index, false);


        })
    })

    //couple slider
    $('.couple__container').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        speed: 500,
        fade: true,
        cssEase: 'linear',



        // dots: true,

    });
    let slides = document.querySelectorAll('.couple__container .couple__content');
    // console.log(slides);

    slides[0].classList.add('padding_top');
    slides[1].classList.add('inactive_slide');
    slides[1].style.marginTop = "0!important";

    $('.couple__container').on('afterChange', function(event, slick, currentSlide, nextSlide) {
        // console.log(currentSlide);
        // console.log(slick.$slides.get(currentSlide));
        var slideIndex = 0;
        if (currentSlide == 0) {
            slideIndex = 1;
        }
        (slick.$slides.get(slideIndex)).classList.add('inactive_slide');
        (slick.$slides.get(slideIndex)).classList.toggle('padding_top');

        (slick.$slides.get(currentSlide)).classList.remove('inactive_slide');
        (slick.$slides.get(currentSlide)).classList.toggle('padding_top');

    });

}


});


//menu
let menu = document.querySelector(".header__menu");
let hamburgerButton = document.querySelector(".hamburger");
// let menuItem = document.querySelectorAll('.header__menu__item');
let menuItem = document.querySelectorAll('.menu-item');

hamburgerButton.addEventListener('click', () => {
    menu.classList.toggle('open-menu');
    document.body.classList.toggle('overflow');
    hamburgerButton.classList.toggle("hamburger-active");
});
menuItem.forEach(item => {
    item.addEventListener( 'click', (e) =>{
        if(document.body.classList.contains("overflow")){
            document.body.classList.toggle("overflow");
        }
        hamburgerButton.classList.toggle('hamburger-active');
        menu.classList.toggle('open-menu');

        // let link2 = item.getElementsByTagName("a")[0];
        // e.preventDefault();
        // link2.getAttribute('href');
        // document.querySelector(link2.getAttribute('href')).scrollIntoView({
        //
        //     behavior: 'smooth'
        // });
    })
});

//show slide right image
let showButton = document.querySelectorAll('.show-content');
// console.log(showButton);
let rightColumn = document.querySelectorAll('.slider__content .right-col');
// console.log(rightColumn);

let closeButton = document.querySelectorAll('.close-content');
// console.log(closeButton);
let leftColumn = document.querySelectorAll('.slider__content .left-col');
// console.log(leftColumn);


showButton.forEach((item => {
    item.addEventListener('click',(e) =>{

        // item.style.backgroundColor = "red";

        item.closest('.slider__content').querySelector('.right-col').classList.toggle('display-flex');
        item.closest('.slider__content').querySelector('.left-col').classList.toggle('display-none');

        // console.log(item.closest('.slider__content'));
    })
}));
closeButton.forEach((item => {
    item.addEventListener('click', (e)=>{

        if(item.closest('.slider__content').querySelector('.right-col').classList.contains('display-flex')){
            item.closest('.slider__content').querySelector('.right-col').classList.remove('display-flex');
            item.closest('.slider__content').querySelector('.left-col').classList.remove('display-none');
        }

    })
}));


// Contacts Page form
function formAfterSubmit() {
	const contactForm = document.querySelector('.contact__form form');
	const formBody = document.querySelector('.contact__form__body');
	const aftersubmitMessage = document.querySelector('.aftersubmit__message');
	const upperContent = document.querySelector('.page-id-107 .upper__content');
	const bottomImage = document.querySelector('.page-id-107 .bottom__image');

    document.addEventListener( 'wpcf7invalid', function( event ) {
        // setTimeout(() => {
            const parent = document.getElementById('checkbox-contact-form').parentElement;
            // console.log(event);
            event.detail.apiResponse.invalid_fields[0].message = "Palun nõustu tingimustega";


            // console.log(parent.childNodes[1].innerHTML = "Palun nõustu tingimustega");
        // }, 0);
    }, false );

	if (contactForm) {

			contactForm.onsubmit = () => {
				setTimeout(() => {
					if (contactForm.classList.contains('sent')) {
                       
						formBody.style.display = "none";
						aftersubmitMessage.style.display = "block";

						if (upperContent) {
							upperContent.classList.add('aftersubmit__text');
						}

						if (bottomImage) {
							bottomImage.classList.add('aftersubmit__text');
						}
					}
				}, 2000)
		}
	}
}
formAfterSubmit();

//Change text under checkbox




