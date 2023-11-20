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

    $('.escooter-swiper .swiper-wrapper').owlCarousel({
        items: 4,
        margin: 30,
        stagePadding: 150,
        smartSpeed: 650,
        responsive: {
            0: {
                items: 1,
                stagePadding: 15,
            },
            600: {
                items: 2,
                stagePadding: 30,
            },
            1000: {
                items: 4,
                stagePadding: 150,
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
    $('.counter').counterUp({
        delay: 15,
        time: 2000
    });
})
