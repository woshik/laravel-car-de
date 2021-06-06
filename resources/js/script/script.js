$(document).ready(function () {
    $(".scroll-down-box-over").click(function () {
        $("body,html").animate({ scrollTop: $(window).height() }, 800);
    });

    $(".swiper-button-next").hover(
        function () {
            $(".swiper-slide-next").addClass("hover-element");
        },
        function () {
            $(".swiper-slide-next").removeClass("hover-element");
        }
    );
    $(".swiper-button-prev").hover(
        function () {
            $(".swiper-slide-prev").addClass("hover-element");
        },
        function () {
            $(".swiper-slide-prev").removeClass("hover-element");
        }
    );
    $(".swiper-button-prev, .swiper-button-next").click(function () {
        $(".swiper-slide").removeClass("hover-element");
    });
    $(".service-hover").hover(function () {
        $(".service-box-menu").addClass("active-service-box-menu");
        $(".service-hover").addClass("active-service-hover");
        $(".close-box-service").addClass("active-service-hover");
    });
    $(".no-service, .close-box-service").hover(function () {
        $(".service-box-menu").removeClass("active-service-box-menu");
        $(".service-hover").removeClass("active-service-hover");
        $(".close-box-service").removeClass("active-service-hover");
    });

    $(".burger-mobile-menu").click(function () {
        $(".menu").toggleClass("active-menu-mobile");
        $(".burger-mobile-menu").toggleClass("close-mob-menu");
    });

    $(".close-modal").click(function () {
        $("#contact-modal").toggleClass("active-modal");
    });
});

document.addEventListener("DOMContentLoaded", function () {
    var lazyloadImages;

    if ("IntersectionObserver" in window) {
        lazyloadImages = document.querySelectorAll(".lazy");

        var imageObserver = new IntersectionObserver(function (entries, observer) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    var image = entry.target;
					if (image.dataset.src) {
						image.src = image.dataset.src;
					} else if (image.dataset.bg) {
						image.style.backgroundImage = "url("+ image.dataset.bg + ")";
					}
                    
                    image.classList.remove("lazy");
                    imageObserver.unobserve(image);
                }
            });
        });

        lazyloadImages.forEach(function (image) {
            imageObserver.observe(image);
        });
    } else {
        var lazyloadThrottleTimeout;
        lazyloadImages = document.querySelectorAll(".lazy");

        function lazyload() {
            if (lazyloadThrottleTimeout) {
                clearTimeout(lazyloadThrottleTimeout);
            }

            lazyloadThrottleTimeout = setTimeout(function () {
                var scrollTop = window.pageYOffset;
                lazyloadImages.forEach(function (img) {
                    if (img.offsetTop < window.innerHeight + scrollTop) {
                        img.src = img.dataset.src;
                        img.classList.remove("lazy");
                    }
                });
                if (lazyloadImages.length == 0) {
                    document.removeEventListener("scroll", lazyload);
                    window.removeEventListener("resize", lazyload);
                    window.removeEventListener("orientationChange", lazyload);
                }
            }, 20);
        }

        document.addEventListener("scroll", lazyload);
        window.addEventListener("resize", lazyload);
        window.addEventListener("orientationChange", lazyload);
    }
});

function openContactModal() {
    $("#contact-modal").toggleClass("active-modal");
}
