$(document).ready(function () {

    $('#nav-menustate').change(function () {
        if (this.checked) {
            $('.nav-menuicon').addClass('nav-menuicon--open');
        } else {
            $('.nav-menuicon').removeClass('nav-menuicon--open');
        }
    });

    $('.tab-buttons span').first().addClass('active');
    $('.tab-content>div').hide();
    $('.tab-content>div').first().slideDown();
    $('.tab-buttons span').click(function () {
        $('.tab-buttons span').removeClass('active');
        var thisclass = $(this).attr('class');
        $(this).addClass('active');
        $('.tab-content>div').each(function () {
            if ($(this).hasClass(thisclass)) {
                $(this).fadeIn(800);
            }
            else {
                $(this).hide();
            }
        });
    });

    $('.tab-buttons-slider span').first().addClass('active');
    $('.tab-content-slider>div').hide();
    $('.tab-content-slider>div').first().slideDown();
    $('.tab-buttons-slider span').click(function () {
        $('.tab-buttons-slider span').removeClass('active');
        var thisclass = $(this).attr('class');
        $(this).addClass('active');
        $('.tab-content-slider>div').each(function () {
            if ($(this).hasClass(thisclass)) {
                $(this).fadeIn(800);
            }
            else {
                $(this).hide();
            }
        });
    });

    $('.escooter-swiper .swiper-wrapper').owlCarousel({
        items: 4,
        margin: 30,
        stagePadding: 0,
        smartSpeed: 650,
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
                items: 4
            }
        }
    });
    $('.section-hero').owlCarousel({
        animateOut: 'fadeOut',
        animateIn: 'fadeOut',
        items: 1,
        dots: false,
        loop: true,
        autoplay: true,
        autoplaySpeed: 650,
        smartSpeed: 650,
    });
    $('.image-about-container').owlCarousel({
        items: 1,
        dots: true,
        nav: false,
        loop: true,
        autoplay: true,
        autoplaySpeed: 650,
        smartSpeed: 650,
    });
    $('.pbgn-partners').owlCarousel({
        dots: true,
        nav: false,
        loop: true,
        autoplay: true,
        autoplaySpeed: 650,
        smartSpeed: 650,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 3
            },
            1200: {
                items: 4
            },
            1350: {
                items: 5
            },
            1450: {
                items: 6
            }
        }
    });

    $('.counter').counterUp({
        delay: 15,
        time: 2000
    });

    $(".gdpr-action--reject").on("click", function () {
        $(".gdpr_cookie").addClass('gdpr-leave-active gdpr-leave-to')
    });

    $('#modal-container').removeAttr('class').addClass('six');
    $('body').addClass('modal-active');

    $('#modal-container').click(function () {
        $(this).addClass('out');
        $('body').removeClass('modal-active');
    });

    $('.name_language').click(function () {
        $('.language_choose').toggle();
    });

    $("#pwd_account").change(function () {
        if ($(this).val().length >= 8) {
            $('.min-8-character').css('color', '#04AA6D')
        } else {
            $('.min-8-character').css('color', '#ED2025')
        }
        if (containsNumberOrSpecialChar($(this).val())) {
            $('.one-number--special').css('color', '#04AA6D')
        } else {
            $('.one-number--special').css('color', '#ED2025')
        }
    });

    $('.form_ipnput .icon').click(function () {
        if ($(this).prev().prop("type") === "text") {
            $(this).removeClass('show_pass');
            $(this).prev().attr("type", "password")
        }
        else {
            $(this).addClass('show_pass');
            $(this).prev().attr("type", "text")
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

    $(".close, .mask").on("click", function () {
        closeModal();
    });

    $(document).keyup(function (e) {
        if (e.keyCode == 27) {
            closeModal();
        }
    });

    if ($('.top_bar_fixed').length) {
        var scrollTrigger = 100, // px
            headerfix = function () {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $('.top_bar_fixed').addClass('not-fixed');
                    $('.ggr-nav-container[data-v-31312d37]').css('top', '0')
                } else {
                    $('.top_bar_fixed').removeClass('not-fixed');
                    $('.ggr-nav-container[data-v-31312d37]').css('top', '80px')
                }
            };
        headerfix();
        $(window).on('scroll', function () {
            headerfix();
        });
    } else {
        $('.ggr-nav-container[data-v-31312d37]').css('top', '0')
        $('.page-content').css('padding-top', '60px')
        $('.section-hero, .section-hero img').css('height', '100vh')
    }

    $("input[type='radio']").click(function () {
        $('.radio_type').removeClass('active')
        if ($(this).is(":checked")) {
            $(this).parent().addClass('active');
        }
        else
            $('.radio_type').removeClass('active')
    });

})

function containsNumberOrSpecialChar(inputString) {
    var regex = /[0-9!@#$%^&*()_+{}\[\]:;<>,.?~\\/-]/; // Có thể thay đổi regex tùy ý

    return regex.test(inputString);
}