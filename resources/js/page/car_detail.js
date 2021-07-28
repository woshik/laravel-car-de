$("#lightgallery").lightGallery({
    thumbnail: true,
    zoom: false,
    share: false,
    fullScreen: false,
    autoplay: false,
    download: false,
});

var mySwiper = new Swiper(".gallery-in-page", {
    slidesPerView: 3,
    slidesPerGroup: 1,
    slidesPerColumn: 2,
    spaceBetween: 40,
    breakpoints: {
        // when window width is >= 320px
        1024: {
            slidesPerView: 2,
            slidesPerColumn: 1,
            spaceBetween: 0,
        },
        420: {
            slidesPerView: 1,
            slidesPerColumn: 1,
            spaceBetween: 0,
        },
    },
});
var mySwiper = new Swiper(".gallery-team", {
    slidesPerView: 5,
    loop: true,
    centeredSlides: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        // when window width is >= 320px
        800: {
            slidesPerView: 3,
        },
    },
});
var galleryTop = new Swiper(".gallery-top", {
    slidesPerView: 3,
    loop: true,
    centeredSlides: true,
    spaceBetween: 40,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        // when window width is >= 320px
        800: {
            spaceBetween: 10,
        },
    },
});
