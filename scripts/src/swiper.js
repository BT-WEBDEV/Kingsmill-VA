var swiperPageList = new Swiper('.gka-theme-page-list-swiper', {
    slidesPerView: 1.2,
    spaceBetween: 10,
    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true,
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    breakpoints: {
        425: {
            slidesPerView: 1.5,
            spaceBetween: 10,
        },
        767: {
            slidesPerView: 'auto',
            spaceBetween: 20,
        },
        1200: {
            slidesPerView: 'auto',
            spaceBetween: 30,
            allowTouchMove: false,
        }
    }
});

var swiperTestimonials = new Swiper('.gka-theme-testimonials-swiper', {
    // autoplay: {
    //     delay: 7000,
    // },
    slidesPerView: 1.1,
    spaceBetween: 5,
    // loop: true,
    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    breakpoints: {
        425: {
            slidesPerView: 1.5,
            spaceBetween: 10,
        },
        767: {
            slidesPerView: 2.5,
            spaceBetween: 20,
        },
        1200: {
            slidesPerView: 3,
            spaceBetween: 30,
            allowTouchMove: false,
        }
    }
});

var swiperVideo = new Swiper('.gka-theme-video-swiper', {
    // autoplay: {
    //     delay: 7000,
    // },
    slidesPerView: 1.7,
    // spaceBetween: 30,
    centeredSlides: true,
    loop: true,
    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    breakpoints: {
        1200: {
            allowTouchMove: false,
        }
    }
});

var swiperGallery = new Swiper('.gka-theme-gallery-swiper', {
    // autoplay: {
    //     delay: 7000,
    // },
    slidesPerView: 1,
    // spaceBetween: 30,
    // centeredSlides: true,
    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    breakpoints: {
        1200: {
            allowTouchMove: false,
        }
    }
});