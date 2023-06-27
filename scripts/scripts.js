$(function(){
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

    Fancybox.bind("[data-fancybox]", {
        // Your custom options
    });

});