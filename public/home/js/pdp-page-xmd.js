$(".breaking-slick").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: !0,
    centerMode: !0,
    infinite: !0,
    cssEase: "linear",
    centerMode: !1,
    fade: !0,
    prevArrow: $(".breaking-slick__button-prev"),
    nextArrow: $(".breaking-slick__button-next"),
    focusOnSelect: !0
})

$(document).ready(function () {
    $('.mySliderTop').slick({
        slidesToShow: 5,
        asNavFor: '.myThumbSlider',
        dots: false,
        arrows: true,
        cssEase: "linear",
        focusOnSelect: true,
        prevArrow: $('.button-prev'),
        nextArrow: $('.button-next'),
        swipe: false,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 5
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 5
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 6
            }
        }
        ]
    });
    $('.myThumbSlider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.mySliderTop'
    });
})