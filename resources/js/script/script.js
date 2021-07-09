let timer = null
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

    $("#contact-form").unbind('submit').bind('submit', function(e) {
        e.preventDefault()

        var form = $(this);
		var url = form.attr('action');
		var type = form.attr('method');

        $.ajax({
			url: url,
			type: type,
			data: form.serialize(),
			dataType: 'json',
            beforeSend: function() {
                $("#contact-form-button").prop("disabled",true);
            },
			success: function(res) {
                if (res.success) {
                    refreshCaptcha()
                    $("#success-alert-message").text(res.success)
                    $("#success-alert-box").fadeIn("slow")
                    $("#contact-form")[0].reset();

                    clearTimeout(timer)
                    timer = setTimeout(() => {
                        $("#success-alert-box").fadeOut("slow")
                    }, 5000);
                }
            },
            error: function(err) {
                refreshCaptcha()
                const errResponse = err.responseJSON
                let errorArray
                
                if (!errResponse) {
                    return;
                }

                if (typeof errResponse.errors === 'string') {
                    $("#danger-alert-message").text(errResponse.errors)
                    $("#danger-alert-box").fadeIn("slow")

                    clearTimeout(timer)
                    timer = setTimeout(() => {
                        $("#danger-alert-box").fadeOut("slow")
                    }, 5000);

                    return;
                }

                for (const key in errResponse.errors) {
                    if (Object.hasOwnProperty.call(errResponse.errors, key)) {
                        errorArray = errResponse.errors[key];
                    }
                }

                if (Array.isArray(errorArray) && errorArray.length) {
                    $("#danger-alert-message").text(errorArray[0])
                    $("#danger-alert-box").fadeIn("slow")
                }

                clearTimeout(timer)
                timer = setTimeout(() => {
                    $("#danger-alert-box").fadeOut("slow")
                }, 5000);
            },
            complete: function () {
                $("#contact-form-button").prop("disabled",false);
            }
        })
    })
});

function openContactModal() {
    $("#contact-modal").toggleClass("active-modal");
}

function refreshCaptcha() {
    $.ajax({
        url: 'refresh-captcha',
        success: function(data) {
            $('.captcha-input-form span').html(data)
        },
    })
}