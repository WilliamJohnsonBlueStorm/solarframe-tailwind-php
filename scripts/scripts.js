$(function(){

    //Open mobile menu when open-mobile-menu is clicked
    $('#open-mobile-menu').on('click', function(e){
        e.preventDefault();
        var mobileHeader = $('#mobile-header');

        if(mobileHeader) {
            $(this).find('i').toggleClass('fa-bars fa-times');
            mobileHeader.toggleClass('hidden');
        }

    });

    $('#conservatories-mobile').on('click', function()
    {
        $(this).next().toggle('open');
        $(this).find('i').toggleClass('fa-plus fa-minus');

    });


    const swiper = new Swiper('#banner-swiper', {
        // Optional parameters
        slidesPerView: 1,
        direction: 'horizontal',
        loop: true,
        // Navigation arrows
        navigation: {
            nextEl: '.button-next',
            prevEl: '.button-prev',
        },
    });

    const case_study_swiper = new Swiper('#case-study-swiper', {
        // Optional parameters
        slidesPerView: 1.2,
        centeredSlides: true,
        spaceBetween: 2,
        initialSlide: 1,
    });

    const testimonial_swiper = new Swiper('#testimonial-swiper', {
        // Optional parameters
        slidesPerView: 1.5,
        centeredSlides: true,
        loop: true,
        spaceBetween: 20,
        // Navigation arrows
        navigation: {
            nextEl: '.testimonial-button-next',
            prevEl: '.testimonial-button-prev',
        },

        breakpoints: {
            // when window width is >= 768px
            768: {
                slidesPerView: 3.5,
                spaceBetween: 24
            },
        }
    });

    Fancybox.bind("[data-fancybox]", {
        // Your custom options
    });

    const solid_Roof_Swiper = new Swiper ('#solid-roof-swiper', {
        // Optional parameters
        slidesPerView: 2.5,
        direction: 'horizontal',
        loop: true,
        centeredSlides: true,
        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    const tileOptionsSwiper = new Swiper ('#tile-options-swiper', {
        // Optional parameters
        slidesPerView: 2,
        direction: 'horizontal',
        loop: true,
        spaceBetween: 30,
        // Navigation arrows
        navigation: {
            nextEl: '.tile-swiper-next',
            prevEl: '.tile-swiper-prev',
        },
        pagination: {
            el: ".swiper-pagination",
        },
        breakpoints: {
            // when window width is >= 768px
            1024: {
                slidesPerView: 5,
                spaceBetween: 24
            },
        }
    });

    //Brochure Form Scripts

    //Open brochure request form
    $('#open-brochure-form').on('click', function(e){

        e.preventDefault();
        var brochurePopup = $('#brochure-popup');

        if(brochurePopup) {
            brochurePopup.show();
        }
    });

    //Close brochure request form
    $('#close-brochure-form').on('click', function(e){
        e.preventDefault();
        var brochurePopup = $('#brochure-popup');

        if(brochurePopup) {
            brochurePopup.hide();
        }
    });

    //Show Post options
    $('#post,#both').on('click', function(){
        var showAddress = $('.post-only');

        if(showAddress) {
            showAddress.show();
        }
    });

    //Show Post options
    $('#download').on('click', function(){
        var hideAddress = $('.post-only');

        if(hideAddress) {
            hideAddress.hide();
        }
    });

});