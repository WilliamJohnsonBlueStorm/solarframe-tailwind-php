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

    const testimonial_swiper = new Swiper('#testimonial-swiper', {
        // Optional parameters
        slidesPerView: 3.5,
        centeredSlides: true,
        loop: true,
        spaceBetween: 40,
        // Navigation arrows
        navigation: {
            nextEl: '.testimonial-button-next',
            prevEl: '.testimonial-button-prev',
        },
    });

    Fancybox.bind("[data-fancybox]", {
        // Your custom options
    });

});