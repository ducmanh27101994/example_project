$(document).ready(function () {
    $("#nav-menustate").change(function () {
        if (this.checked) {
            $(".nav-menuicon").addClass("nav-menuicon--open");
        } else {
            $(".nav-menuicon").removeClass("nav-menuicon--open");
        }
    });

    $(".tab-buttons span").first().addClass("active");
    $(".tab-buttons span").click(function () {
        $(".tab-buttons span").removeClass("active");
        var thisclass = $(this).attr("class");
        $(this).addClass("active");
        $(".tab-content>div").each(function () {
            if ($(this).hasClass(thisclass)) {
                $(this).fadeIn(800);
            } else {
                $(this).hide();
            }
        });
    });

    $(".breaking-technology-bot .nav-tabs a").first().addClass("active");
    $(".breaking-technology-bot .nav-tabs a").click(function () {
        $(".breaking-technology-bot .nav-tabs a").removeClass("active");
        var thisclass = $(this).attr("id");
        console.log(thisclass);
        $(this).addClass("active");
        $(".breaking-technology-bot .tab-content>div").each(function () {
            if ($(this).hasClass(thisclass)) {
                $(this).fadeIn(800);
            } else {
                $(this).hide();
            }
        });
    });

    $(".breaking-experience-tabs .nav-tabs a").first().addClass("active");
    $(".breaking-experience-tabs .nav-tabs a").click(function () {
        $(".breaking-experience-tabs .nav-tabs a").removeClass("active");
        var thisclass = $(this).attr("id");
        console.log(thisclass);
        $(this).addClass("active");
        $(".tab-content-experience>div").each(function () {
            if ($(this).hasClass(thisclass)) {
                $(this).fadeIn(800);
            } else {
                $(this).hide();
            }
        });
    });

    $(".breaking-experience-tabs_tienich .nav-tabs a")
        .first()
        .addClass("active");
    $(".breaking-experience-tabs_tienich .nav-tabs a").click(function () {
        $(".breaking-experience-tabs_tienich .nav-tabs a").removeClass(
            "active"
        );
        var thisclass = $(this).attr("id");
        console.log(thisclass);
        $(this).addClass("active");
        $(".tab-content-tien_ich>div").each(function () {
            if ($(this).hasClass(thisclass)) {
                $(this).fadeIn(800);
            } else {
                $(this).hide();
            }
        });
    });

    $(".breaking-experience-tabs_trainghiem .nav-tabs a")
        .first()
        .addClass("active");
    $(".breaking-experience-tabs_trainghiem .nav-tabs a").click(function () {
        $(".breaking-experience-tabs_trainghiem .nav-tabs a").removeClass(
            "active"
        );
        var thisclass = $(this).attr("id");
        console.log(thisclass);
        $(this).addClass("active");
        $(".tab-content-trainghiem>div").each(function () {
            if ($(this).hasClass(thisclass)) {
                $(this).fadeIn(800);
            } else {
                $(this).hide();
            }
        });
    });

    $(".tab-buttons-slider span").first().addClass("active");
    $(".tab-content-slider>div").css({
        opacity: "0",
        height: "0",
    });
    $(".tab-content-slider>div").first().slideDown().css({
        opacity: "1",
        height: "auto",
    });
    $(".tab-buttons-slider span").click(function () {
        $(".tab-buttons-slider span").removeClass("active");
        var thisclass = $(this).attr("class");
        $(this).addClass("active");
        $(".tab-content-slider>div").each(function () {
            if ($(this).hasClass(thisclass)) {
                $(this).css({
                    opacity: "1",
                    height: "auto",
                });
            } else {
                $(this).css({
                    opacity: "0",
                    height: "0",
                });
            }
        });
    });

    $(".escooter-swiper .swiper-wrapper").owlCarousel({
        items: 4,
        margin: 30,
        stagePadding: 0,
        smartSpeed: 650,
        nav: true,
        navText: [
            '<i class="fa fa-caret-left" aria-hidden="true"></i>',
            '<i class="fa fa-caret-right" aria-hidden="true"></i>',
        ],
        responsive: {
            0: {
                items: 1,
                stagePadding: 0,
            },
            600: {
                items: 2,
                stagePadding: 0,
            },
            1000: {
                items: 3,
                stagePadding: 0,
            },
            1600: {
                items: 4,
            },
        },
    });
    $(".tinhnang-items-track").owlCarousel({
        items: 1,
        margin: 30,
        stagePadding: 0,
        loop: true,
        autoplay: true,
        smartSpeed: 650,
        nav: true,
        navText: [
            '<i class="fa fa-caret-left" aria-hidden="true"></i>',
            '<i class="fa fa-caret-right" aria-hidden="true"></i>',
        ],
        responsive: {
            0: {
                stagePadding: 0,
            },
            600: {
                stagePadding: 150,
            },
            1000: {
                stagePadding: 250,
            },
            1600: {
                stagePadding: 450,
                margin: 70,
            },
        },
    });

    $(".section-family .regions_wrapper_area_owl").owlCarousel({
        items: 5,
        margin: 30,
        stagePadding: 0,
        loop: false,
        autoplay: false,
        smartSpeed: 650,
        dots: true,
        responsive: {
            0: {
                items: 2,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 4,
            },
            1600: {
                items: 5,
            },
        },
    });

    $(".section-hero-slider").owlCarousel({
        items: 1,
        dots: false,
        loop: true,
        autoplay: true,
        autoplaySpeed: 650,
        nav: true,
        navText: [
            '<i class="fa fa-caret-left" aria-hidden="true"></i>',
            '<i class="fa fa-caret-right" aria-hidden="true"></i>',
        ],
        smartSpeed: 650,
    });

    $(".story-items-track").owlCarousel({
        items: 1,
        dots: false,
        loop: false,
        autoplay: false,
        nav: true,
        navText: [
            '<i class="fa fa-caret-left" aria-hidden="true"></i>',
            '<i class="fa fa-caret-right" aria-hidden="true"></i>',
        ],
        smartSpeed: 650,
        stagePadding: parseInt(
            $("#container").css("margin-left")?.replace("px", ""),
            10
        ),
        // responsive: {
        //     0: {
        //         stagePadding: parseInt($('#container').css('margin-left').replace('px', ''), 10)
        //     },
        //     600: {
        //         stagePadding: parseInt($('#container').css('margin-left').replace('px', ''), 10)
        //     },
        //     1000: {
        //         stagePadding: parseInt($('#container').css('margin-left').replace('px', ''), 10)
        //     },
        //     1600: {
        //         stagePadding: parseInt($('#container').css('margin-left').replace('px', ''), 10)
        //     }
        // }
    });

    $(".parts-bike__list__owl").owlCarousel({
        items: 3,
        dots: false,
        loop: false,
        autoplay: false,
        smartSpeed: 650,
        nav: true,
        navText: [
            '<i class="fa fa-caret-left" aria-hidden="true"></i>',
            '<i class="fa fa-caret-right" aria-hidden="true"></i>',
        ],
        stagePadding: 100,
        responsive: {
            0: {
                items: 1,
                stagePadding: 0,
            },
            600: {
                items: 1,
                stagePadding: 0,
            },
            1000: {
                stagePadding: 100,
            },
            1600: {
                stagePadding: 150,
            },
        },
    });

    $(".parts-bike__list__gallarey").owlCarousel({
        items: 5,
        dots: false,
        loop: false,
        autoplay: false,
        smartSpeed: 650,
        nav: true,
        navText: [
            '<i class="fa fa-caret-left" aria-hidden="true"></i>',
            '<i class="fa fa-caret-right" aria-hidden="true"></i>',
        ],
        stagePadding: 0,
        margin: 30,
        responsive: {
            0: {
                items: 2,
                margin: 15,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 5,
            },
            1600: {
                items: 5,
            },
        },
    });

    $(".parts-bike__list_type__owl").owlCarousel({
        items: 5,
        dots: false,
        loop: false,
        autoplay: false,
        smartSpeed: 650,
        stagePadding: 0,
        margin: 30,
        nav: true,
        navText: [
            '<i class="fa fa-caret-left" aria-hidden="true"></i>',
            '<i class="fa fa-caret-right" aria-hidden="true"></i>',
        ],
        responsive: {
            0: {
                items: 1,
                stagePadding: 15,
                dots: true,
            },
            600: {
                items: 2,
                dots: true,
                stagePadding: 15,
            },
            1000: {
                items: 4,
                dots: true,
            },
            1600: {},
        },
    });

    $(".image-about-container").owlCarousel({
        items: 1,
        dots: true,
        nav: false,
        loop: true,
        autoplay: true,
        autoplaySpeed: 650,
        smartSpeed: 650,
    });
    $(".pbgn-partners").owlCarousel({
        dots: true,
        nav: false,
        loop: true,
        autoplay: true,
        autoplaySpeed: 650,
        smartSpeed: 650,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 3,
            },
            1200: {
                items: 4,
            },
            1350: {
                items: 5,
            },
            1450: {
                items: 6,
            },
        },
    });

    $(".article-items--related").owlCarousel({
        dots: true,
        nav: false,
        loop: true,
        autoplay: false,
        autoplaySpeed: 650,
        smartSpeed: 650,
        nav: true,
        navText: [
            '<i class="fa fa-caret-left" aria-hidden="true"></i>',
            '<i class="fa fa-caret-right" aria-hidden="true"></i>',
        ],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 2,
            },
            1200: {
                items: 3,
            },
            1350: {
                items: 3,
            },
            1450: {
                items: 3,
            },
        },
    });

    $(".products-items--related").owlCarousel({
        dots: true,
        nav: false,
        loop: true,
        autoplay: false,
        autoplaySpeed: 650,
        smartSpeed: 650,
        nav: true,
        navText: [
            '<i class="fa fa-caret-left" aria-hidden="true"></i>',
            '<i class="fa fa-caret-right" aria-hidden="true"></i>',
        ],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 2,
            },
            1200: {
                items: 2,
            },
            1350: {
                items: 2,
            },
            1450: {
                items: 2,
            },
        },
    });

    $(".counter").counterUp({
        delay: 10,
        time: 1000,
    });

    if (getCookie("location")) {
        $(".gdpr_cookie").addClass("gdpr-leave-to");
    }

    $(".gdpr-action--accept").on("click", function () {
        $(".gdpr_cookie").addClass("gdpr-leave-active gdpr-leave-to");
        getLocation();
    });

    $(".gdpr-action--reject").on("click", function () {
        $(".gdpr_cookie").addClass("gdpr-leave-active gdpr-leave-to");
    });

    $("#nearbyStoreLink").on("click", function () {
        if (getCookie("location")) {
            window.location.href = "/near-by-store";
        } else {
            alert(
                "Vui lòng cho phép chúng tôi sử dụng cookie để sử dụng tính năng này"
            );
        }
    });

    $("#modal-container").removeAttr("class").addClass("six");
    $("body").addClass("modal-active");

    $("#modal-container").click(function () {
        $(this).addClass("out");
        $("body").removeClass("modal-active");
    });

    $(".name_language").click(function () {
        $(".language_choose").toggle();
    });

    $(".family-nav-item:last-child").addClass("family-nav-item--s1");

    $("#pwd_account").change(function () {
        if ($(this).val().length >= 8) {
            $(".min-8-character").css("color", "#04AA6D");
        } else {
            $(".min-8-character").css("color", "#ED2025");
        }
        if (containsNumberOrSpecialChar($(this).val())) {
            $(".one-number--special").css("color", "#04AA6D");
        } else {
            $(".one-number--special").css("color", "#ED2025");
        }
    });

    $(".form_ipnput .icon").click(function () {
        if ($(this).prev().prop("type") === "text") {
            $(this).removeClass("show_pass");
            $(this).prev().attr("type", "password");
        } else {
            $(this).addClass("show_pass");
            $(this).prev().attr("type", "text");
        }
    });

    $(".show").on("click", function () {
        $(".mask").addClass("active");
        $(".modal_form").addClass("active");
    });

    // Function for close the Modal

    function closeModal() {
        $(".mask").removeClass("active");
        $(".modal_form").removeClass("active");
    }

    // Call the closeModal function on the clicks/keyboard

    $(".arrco_block-element_single").on("click", function () {
        $(".arrco_block-element_single").children().removeClass("active");
        $(".arrco_block-element_single")
            .children()
            .next()
            .removeClass("active");

        if ($(this).hasClass("active")) {
            $(this).children().removeClass("active");
            $(this).children().next().removeClass("active");
            $(this).removeClass("active");
        } else {
            $(this).children().addClass("active");
            $(this).children().next().addClass("active");
            $(this).addClass("active");
        }
    });

    $(".close, .mask").on("click", function () {
        closeModal();
    });

    $(document).keyup(function (e) {
        if (e.keyCode == 27) {
            closeModal();
        }
    });

    if ($(".top_bar_fixed").length) {
        var scrollTrigger = 100, // px
            headerfix = function () {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $(".top_bar_fixed").addClass("not-fixed");
                    $(".ggr-nav-container[data-v-31312d37]").css("top", "0");
                } else {
                    $(".top_bar_fixed").removeClass("not-fixed");
                    $(".ggr-nav-container[data-v-31312d37]").css("top", "80px");
                }
            };
        headerfix();
        $(window).on("scroll", function () {
            headerfix();
        });
    } else {
        $(".ggr-nav-container[data-v-31312d37]").css("top", "0");
        $(".page-content").css("padding-top", "70px");
    }

    $("input[type='radio']").click(function () {
        $(".radio_type").removeClass("active");

        $(".dtmb_block").hide();

        if ($(this).parent().is(":last-child")) {
            $(".dtmb_block").show();
        }

        if ($(this).is(":checked")) {
            $(this).parent().addClass("active");
        } else $(".radio_type").removeClass("active");
    });
});

function containsNumberOrSpecialChar(inputString) {
    var regex = /[0-9!@#$%^&*()_+{}\[\]:;<>,.?~\\/-]/; // Có thể thay đổi regex tùy ý

    return regex.test(inputString);
}

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            showPosition,
            handleLocationError
        );
    } else {
        console.log("Trình duyệt không hỗ trợ Geolocation.");
    }
}

function showPosition(position) {
    const latitude = position.coords.latitude;
    const longitude = position.coords.longitude;

    const apiUrl = `https://nominatim.openstreetmap.org/reverse?format=json&lat=${latitude}&lon=${longitude}`;

    $.ajax({
        url: apiUrl,
        type: "GET",
        dataType: "json",
        success: function (data) {
            let city = "";
            if (data.address.city === "Hà Nội") {
                city = "Thành Phố Hà Nội";
            } else if (data.address.city === "Hồ Chí Minh") {
                city = "Thành Phố Hồ Chí Minh";
            } else {
                city = data.address.state || data.address.city;
            }
            setCookie("location", city, 10800);
        },
        error: function (error) {
            console.error("Lỗi khi lấy thông tin địa lý: ", error);
        },
    });
}

function handleLocationError(error) {
    switch (error.code) {
        case error.PERMISSION_DENIED:
            console.log(
                "Người dùng từ chối cung cấp vị trí. Hãy bật quyền truy cập trong cài đặt trình duyệt."
            );
            break;
        case error.POSITION_UNAVAILABLE:
            console.log("Không thể xác định vị trí.");
            break;
        case error.TIMEOUT:
            console.log("Yêu cầu vị trí đã hết thời gian.");
            break;
        case error.UNKNOWN_ERROR:
            console.log("Đã xảy ra lỗi không xác định.");
            break;
    }
    // Hiển thị thông báo cho người dùng về lỗi.
}

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
    var expires = "expires=" + d.toUTCString();
    var encodedValue = encodeURIComponent(cvalue); // Mã hóa giá trị của cookie
    document.cookie = cname + "=" + encodedValue + "; " + expires + "; path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie); // Giải mã toàn bộ chuỗi cookie
    var ca = decodedCookie.split(";");
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i].trim();
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
