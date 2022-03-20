$("#lightgallery").lightGallery({
    thumbnail: true,
    zoom: false,
    share: false,
    fullScreen: false,
    autoplay: false,
    download: false,
});

var galleryTop = new Swiper(".gallery-top", {
    slidesPerView: 3,
    loop: true,
    centeredSlides: true,
    spaceBetween: 10,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        768: {
            slidesPerView: 1,
            slidesPerColumn: 1,
            spaceBetween: 40,
        },
    },
});

$('.slick-slider').slick({
    arrows: false,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    responsive: [
        {
            breakpoint: 720,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
        },
    ]
});
