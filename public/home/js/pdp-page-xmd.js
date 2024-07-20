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
    focusOnSelect: !0,
});

$(document).ready(function () {
    $(".mySliderTop").slick({
        slidesToShow: $(".mySliderTop").attr("data-showitem"),
        asNavFor: ".myThumbSlider",
        dots: false,
        arrows: true,
        centerMode: false,
        variableWidth: false,
        centerPadding: false,
        cssEase: "linear",
        focusOnSelect: true,
        prevArrow: $(".button-prev"),
        nextArrow: $(".button-next"),
        swipe: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: $(".mySliderTop").attr("data-showitem"),
                },
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: $(".mySliderTop").attr("data-showitem-sm"),
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: $(".mySliderTop").attr("data-showitem-xs"),
                },
            },
        ],
    });
    $(".myThumbSlider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: ".mySliderTop",
    });
});
