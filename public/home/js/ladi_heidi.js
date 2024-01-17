var _gsScope;
! function(t) {
    "use strict";
    "function" == typeof define && define.amd ? define(["jquery"], t) : "undefined" != typeof exports ? module.exports = t(require("jquery")) : t(jQuery)
}((function(t) {
    "use strict";
    var e = window.Slick || {};
    (e = function() {
        function e(e, n) {
            var s, r = this;
            r.defaults = {
                accessibility: !0,
                adaptiveHeight: !1,
                appendArrows: t(e),
                appendDots: t(e),
                arrows: !0,
                asNavFor: null,
                prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0" role="button">Previous</button>',
                nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button">Next</button>',
                autoplay: !1,
                autoplaySpeed: 3e3,
                centerMode: !1,
                centerPadding: "50px",
                cssEase: "ease",
                customPaging: function(e, i) {
                    return t('<button type="button" data-role="none" role="button" tabindex="0" />').text(i + 1)
                },
                dots: !1,
                dotsClass: "slick-dots",
                draggable: !0,
                easing: "linear",
                edgeFriction: .35,
                fade: !1,
                focusOnSelect: !1,
                infinite: !0,
                initialSlide: 0,
                lazyLoad: "ondemand",
                mobileFirst: !1,
                pauseOnHover: !0,
                pauseOnFocus: !0,
                pauseOnDotsHover: !1,
                respondTo: "window",
                responsive: null,
                rows: 1,
                rtl: !1,
                slide: "",
                slidesPerRow: 1,
                slidesToShow: 1,
                slidesToScroll: 1,
                speed: 500,
                swipe: !0,
                swipeToSlide: !1,
                touchMove: !0,
                touchThreshold: 5,
                useCSS: !0,
                useTransform: !0,
                variableWidth: !1,
                vertical: !1,
                verticalSwiping: !1,
                waitForAnimate: !0,
                zIndex: 1e3
            }, r.initials = {
                animating: !1,
                dragging: !1,
                autoPlayTimer: null,
                currentDirection: 0,
                currentLeft: null,
                currentSlide: 0,
                direction: 1,
                $dots: null,
                listWidth: null,
                listHeight: null,
                loadIndex: 0,
                $nextArrow: null,
                $prevArrow: null,
                slideCount: null,
                slideWidth: null,
                $slideTrack: null,
                $slides: null,
                sliding: !1,
                slideOffset: 0,
                swipeLeft: null,
                $list: null,
                touchObject: {},
                transformsEnabled: !1,
                unslicked: !1
            }, t.extend(r, r.initials), r.activeBreakpoint = null, r.animType = null, r.animProp = null, r.breakpoints = [], r.breakpointSettings = [], r.cssTransitions = !1, r.focussed = !1, r.interrupted = !1, r.hidden = "hidden", r.paused = !0, r.positionProp = null, r.respondTo = null, r.rowCount = 1, r.shouldClick = !0, r.$slider = t(e), r.$slidesCache = null, r.transformType = null, r.transitionType = null, r.visibilityChange = "visibilitychange", r.windowWidth = 0, r.windowTimer = null, s = t(e).data("slick") || {}, r.options = t.extend({}, r.defaults, n, s), r.currentSlide = r.options.initialSlide, r.originalSettings = r.options, void 0 !== document.mozHidden ? (r.hidden = "mozHidden", r.visibilityChange = "mozvisibilitychange") : void 0 !== document.webkitHidden && (r.hidden = "webkitHidden", r.visibilityChange = "webkitvisibilitychange"), r.autoPlay = t.proxy(r.autoPlay, r), r.autoPlayClear = t.proxy(r.autoPlayClear, r), r.autoPlayIterator = t.proxy(r.autoPlayIterator, r), r.changeSlide = t.proxy(r.changeSlide, r), r.clickHandler = t.proxy(r.clickHandler, r), r.selectHandler = t.proxy(r.selectHandler, r), r.setPosition = t.proxy(r.setPosition, r), r.swipeHandler = t.proxy(r.swipeHandler, r), r.dragHandler = t.proxy(r.dragHandler, r), r.keyHandler = t.proxy(r.keyHandler, r), r.instanceUid = i++, r.htmlExpr = /^(?:\s*(<[\w\W]+>)[^>]*)$/, r.registerBreakpoints(), r.init(!0)
        }
        var i = 0;
        return e
    }()).prototype.activateADA = function() {
        this.$slideTrack.find(".slick-active").attr({
            "aria-hidden": "false"
        }).find("a, input, button, select").attr({
            tabindex: "0"
        })
    }, e.prototype.addSlide = e.prototype.slickAdd = function(e, i, n) {
        var s = this;
        if ("boolean" == typeof i) n = i, i = null;
        else if (0 > i || i >= s.slideCount) return !1;
        s.unload(), "number" == typeof i ? 0 === i && 0 === s.$slides.length ? t(e).appendTo(s.$slideTrack) : n ? t(e).insertBefore(s.$slides.eq(i)) : t(e).insertAfter(s.$slides.eq(i)) : !0 === n ? t(e).prependTo(s.$slideTrack) : t(e).appendTo(s.$slideTrack), s.$slides = s.$slideTrack.children(this.options.slide), s.$slideTrack.children(this.options.slide).detach(), s.$slideTrack.append(s.$slides), s.$slides.each((function(e, i) {
            t(i).attr("data-slick-index", e)
        })), s.$slidesCache = s.$slides, s.reinit()
    }, e.prototype.animateHeight = function() {
        var t = this;
        if (1 === t.options.slidesToShow && !0 === t.options.adaptiveHeight && !1 === t.options.vertical) {
            var e = t.$slides.eq(t.currentSlide).outerHeight(!0);
            t.$list.animate({
                height: e
            }, t.options.speed)
        }
    }, e.prototype.animateSlide = function(e, i) {
        var n = {},
            s = this;
        s.animateHeight(), !0 === s.options.rtl && !1 === s.options.vertical && (e = -e), !1 === s.transformsEnabled ? !1 === s.options.vertical ? s.$slideTrack.animate({
            left: e
        }, s.options.speed, s.options.easing, i) : s.$slideTrack.animate({
            top: e
        }, s.options.speed, s.options.easing, i) : !1 === s.cssTransitions ? (!0 === s.options.rtl && (s.currentLeft = -s.currentLeft), t({
            animStart: s.currentLeft
        }).animate({
            animStart: e
        }, {
            duration: s.options.speed,
            easing: s.options.easing,
            step: function(t) {
                t = Math.ceil(t), !1 === s.options.vertical ? (n[s.animType] = "translate(" + t + "px, 0px)", s.$slideTrack.css(n)) : (n[s.animType] = "translate(0px," + t + "px)", s.$slideTrack.css(n))
            },
            complete: function() {
                i && i.call()
            }
        })) : (s.applyTransition(), e = Math.ceil(e), !1 === s.options.vertical ? n[s.animType] = "translate3d(" + e + "px, 0px, 0px)" : n[s.animType] = "translate3d(0px," + e + "px, 0px)", s.$slideTrack.css(n), i && setTimeout((function() {
            s.disableTransition(), i.call()
        }), s.options.speed))
    }, e.prototype.getNavTarget = function() {
        var e = this,
            i = e.options.asNavFor;
        return i && null !== i && (i = t(i).not(e.$slider)), i
    }, e.prototype.asNavFor = function(e) {
        var i = this.getNavTarget();
        null !== i && "object" == typeof i && i.each((function() {
            var i = t(this).slick("getSlick");
            i.unslicked || i.slideHandler(e, !0)
        }))
    }, e.prototype.applyTransition = function(t) {
        var e = this,
            i = {};
        !1 === e.options.fade ? i[e.transitionType] = e.transformType + " " + e.options.speed + "ms " + e.options.cssEase : i[e.transitionType] = "opacity " + e.options.speed + "ms " + e.options.cssEase, !1 === e.options.fade ? e.$slideTrack.css(i) : e.$slides.eq(t).css(i)
    }, e.prototype.autoPlay = function() {
        var t = this;
        t.autoPlayClear(), t.slideCount > t.options.slidesToShow && (t.autoPlayTimer = setInterval(t.autoPlayIterator, t.options.autoplaySpeed))
    }, e.prototype.autoPlayClear = function() {
        var t = this;
        t.autoPlayTimer && clearInterval(t.autoPlayTimer)
    }, e.prototype.autoPlayIterator = function() {
        var t = this,
            e = t.currentSlide + t.options.slidesToScroll;
        t.paused || t.interrupted || t.focussed || (!1 === t.options.infinite && (1 === t.direction && t.currentSlide + 1 === t.slideCount - 1 ? t.direction = 0 : 0 === t.direction && (e = t.currentSlide - t.options.slidesToScroll, t.currentSlide - 1 == 0 && (t.direction = 1))), t.slideHandler(e))
    }, e.prototype.buildArrows = function() {
        var e = this;
        !0 === e.options.arrows && (e.$prevArrow = t(e.options.prevArrow).addClass("slick-arrow"), e.$nextArrow = t(e.options.nextArrow).addClass("slick-arrow"), e.slideCount > e.options.slidesToShow ? (e.$prevArrow.removeClass("slick-hidden").removeAttr("aria-hidden tabindex"), e.$nextArrow.removeClass("slick-hidden").removeAttr("aria-hidden tabindex"), e.htmlExpr.test(e.options.prevArrow) && e.$prevArrow.prependTo(e.options.appendArrows), e.htmlExpr.test(e.options.nextArrow) && e.$nextArrow.appendTo(e.options.appendArrows), !0 !== e.options.infinite && e.$prevArrow.addClass("slick-disabled").attr("aria-disabled", "true")) : e.$prevArrow.add(e.$nextArrow).addClass("slick-hidden").attr({
            "aria-disabled": "true",
            tabindex: "-1"
        }))
    }, e.prototype.buildDots = function() {
        var e, i, n = this;
        if (!0 === n.options.dots && n.slideCount > n.options.slidesToShow) {
            for (n.$slider.addClass("slick-dotted"), i = t("<ul />").addClass(n.options.dotsClass), e = 0; e <= n.getDotCount(); e += 1) i.append(t("<li />").append(n.options.customPaging.call(this, n, e)));
            n.$dots = i.appendTo(n.options.appendDots), n.$dots.find("li").first().addClass("slick-active").attr("aria-hidden", "false")
        }
    }, e.prototype.buildOut = function() {
        var e = this;
        e.$slides = e.$slider.children(e.options.slide + ":not(.slick-cloned)").addClass("slick-slide"), e.slideCount = e.$slides.length, e.$slides.each((function(e, i) {
            t(i).attr("data-slick-index", e).data("originalStyling", t(i).attr("style") || "")
        })), e.$slider.addClass("slick-slider"), e.$slideTrack = 0 === e.slideCount ? t('<div class="slick-track"/>').appendTo(e.$slider) : e.$slides.wrapAll('<div class="slick-track"/>').parent(), e.$list = e.$slideTrack.wrap('<div aria-live="polite" class="slick-list"/>').parent(), e.$slideTrack.css("opacity", 0), (!0 === e.options.centerMode || !0 === e.options.swipeToSlide) && (e.options.slidesToScroll = 1), t("img[data-lazy]", e.$slider).not("[src]").addClass("slick-loading"), e.setupInfinite(), e.buildArrows(), e.buildDots(), e.updateDots(), e.setSlideClasses("number" == typeof e.currentSlide ? e.currentSlide : 0), !0 === e.options.draggable && e.$list.addClass("draggable")
    }, e.prototype.buildRows = function() {
        var t, e, i, n, s, r, o, a = this;
        if (n = document.createDocumentFragment(), r = a.$slider.children(), a.options.rows > 1) {
            for (o = a.options.slidesPerRow * a.options.rows, s = Math.ceil(r.length / o), t = 0; s > t; t++) {
                var l = document.createElement("div");
                for (e = 0; e < a.options.rows; e++) {
                    var c = document.createElement("div");
                    for (i = 0; i < a.options.slidesPerRow; i++) {
                        var h = t * o + (e * a.options.slidesPerRow + i);
                        r.get(h) && c.appendChild(r.get(h))
                    }
                    l.appendChild(c)
                }
                n.appendChild(l)
            }
            a.$slider.empty().append(n), a.$slider.children().children().children().css({
                width: 100 / a.options.slidesPerRow + "%",
                display: "inline-block"
            })
        }
    }, e.prototype.checkResponsive = function(e, i) {
        var n, s, r, o = this,
            a = !1,
            l = o.$slider.width(),
            c = window.innerWidth || t(window).width();
        if ("window" === o.respondTo ? r = c : "slider" === o.respondTo ? r = l : "min" === o.respondTo && (r = Math.min(c, l)), o.options.responsive && o.options.responsive.length && null !== o.options.responsive) {
            for (n in s = null, o.breakpoints) o.breakpoints.hasOwnProperty(n) && (!1 === o.originalSettings.mobileFirst ? r < o.breakpoints[n] && (s = o.breakpoints[n]) : r > o.breakpoints[n] && (s = o.breakpoints[n]));
            null !== s ? null !== o.activeBreakpoint ? (s !== o.activeBreakpoint || i) && (o.activeBreakpoint = s, "unslick" === o.breakpointSettings[s] ? o.unslick(s) : (o.options = t.extend({}, o.originalSettings, o.breakpointSettings[s]), !0 === e && (o.currentSlide = o.options.initialSlide), o.refresh(e)), a = s) : (o.activeBreakpoint = s, "unslick" === o.breakpointSettings[s] ? o.unslick(s) : (o.options = t.extend({}, o.originalSettings, o.breakpointSettings[s]), !0 === e && (o.currentSlide = o.options.initialSlide), o.refresh(e)), a = s) : null !== o.activeBreakpoint && (o.activeBreakpoint = null, o.options = o.originalSettings, !0 === e && (o.currentSlide = o.options.initialSlide), o.refresh(e), a = s), e || !1 === a || o.$slider.trigger("breakpoint", [o, a])
        }
    }, e.prototype.changeSlide = function(e, i) {
        var n, s, r = this,
            o = t(e.currentTarget);
        switch (o.is("a") && e.preventDefault(), o.is("li") || (o = o.closest("li")), n = r.slideCount % r.options.slidesToScroll != 0 ? 0 : (r.slideCount - r.currentSlide) % r.options.slidesToScroll, e.data.message) {
            case "previous":
                s = 0 === n ? r.options.slidesToScroll : r.options.slidesToShow - n, r.slideCount > r.options.slidesToShow && r.slideHandler(r.currentSlide - s, !1, i);
                break;
            case "next":
                s = 0 === n ? r.options.slidesToScroll : n, r.slideCount > r.options.slidesToShow && r.slideHandler(r.currentSlide + s, !1, i);
                break;
            case "index":
                var a = 0 === e.data.index ? 0 : e.data.index || o.index() * r.options.slidesToScroll;
                r.slideHandler(r.checkNavigable(a), !1, i), o.children().trigger("focus");
                break;
            default:
                return
        }
    }, e.prototype.checkNavigable = function(t) {
        var e, i;
        if (i = 0, t > (e = this.getNavigableIndexes())[e.length - 1]) t = e[e.length - 1];
        else
            for (var n in e) {
                if (t < e[n]) {
                    t = i;
                    break
                }
                i = e[n]
            }
        return t
    }, e.prototype.cleanUpEvents = function() {
        var e = this;
        e.options.dots && null !== e.$dots && t("li", e.$dots).off("click.slick", e.changeSlide).off("mouseenter.slick", t.proxy(e.interrupt, e, !0)).off("mouseleave.slick", t.proxy(e.interrupt, e, !1)), e.$slider.off("focus.slick blur.slick"), !0 === e.options.arrows && e.slideCount > e.options.slidesToShow && (e.$prevArrow && e.$prevArrow.off("click.slick", e.changeSlide), e.$nextArrow && e.$nextArrow.off("click.slick", e.changeSlide)), e.$list.off("touchstart.slick mousedown.slick", e.swipeHandler), e.$list.off("touchmove.slick mousemove.slick", e.swipeHandler), e.$list.off("touchend.slick mouseup.slick", e.swipeHandler), e.$list.off("touchcancel.slick mouseleave.slick", e.swipeHandler), e.$list.off("click.slick", e.clickHandler), t(document).off(e.visibilityChange, e.visibility), e.cleanUpSlideEvents(), !0 === e.options.accessibility && e.$list.off("keydown.slick", e.keyHandler), !0 === e.options.focusOnSelect && t(e.$slideTrack).children().off("click.slick", e.selectHandler), t(window).off("orientationchange.slick.slick-" + e.instanceUid, e.orientationChange), t(window).off("resize.slick.slick-" + e.instanceUid, e.resize), t("[draggable!=true]", e.$slideTrack).off("dragstart", e.preventDefault), t(window).off("load.slick.slick-" + e.instanceUid, e.setPosition), t(document).off("ready.slick.slick-" + e.instanceUid, e.setPosition)
    }, e.prototype.cleanUpSlideEvents = function() {
        var e = this;
        e.$list.off("mouseenter.slick", t.proxy(e.interrupt, e, !0)), e.$list.off("mouseleave.slick", t.proxy(e.interrupt, e, !1))
    }, e.prototype.cleanUpRows = function() {
        var t, e = this;
        e.options.rows > 1 && ((t = e.$slides.children().children()).removeAttr("style"), e.$slider.empty().append(t))
    }, e.prototype.clickHandler = function(t) {
        !1 === this.shouldClick && (t.stopImmediatePropagation(), t.stopPropagation(), t.preventDefault())
    }, e.prototype.destroy = function(e) {
        var i = this;
        i.autoPlayClear(), i.touchObject = {}, i.cleanUpEvents(), t(".slick-cloned", i.$slider).detach(), i.$dots && i.$dots.remove(), i.$prevArrow && i.$prevArrow.length && (i.$prevArrow.removeClass("slick-disabled slick-arrow slick-hidden").removeAttr("aria-hidden aria-disabled tabindex").css("display", ""), i.htmlExpr.test(i.options.prevArrow) && i.$prevArrow.remove()), i.$nextArrow && i.$nextArrow.length && (i.$nextArrow.removeClass("slick-disabled slick-arrow slick-hidden").removeAttr("aria-hidden aria-disabled tabindex").css("display", ""), i.htmlExpr.test(i.options.nextArrow) && i.$nextArrow.remove()), i.$slides && (i.$slides.removeClass("slick-slide slick-active slick-center slick-visible slick-current").removeAttr("aria-hidden").removeAttr("data-slick-index").each((function() {
            t(this).attr("style", t(this).data("originalStyling"))
        })), i.$slideTrack.children(this.options.slide).detach(), i.$slideTrack.detach(), i.$list.detach(), i.$slider.append(i.$slides)), i.cleanUpRows(), i.$slider.removeClass("slick-slider"), i.$slider.removeClass("slick-initialized"), i.$slider.removeClass("slick-dotted"), i.unslicked = !0, e || i.$slider.trigger("destroy", [i])
    }, e.prototype.disableTransition = function(t) {
        var e = this,
            i = {};
        i[e.transitionType] = "", !1 === e.options.fade ? e.$slideTrack.css(i) : e.$slides.eq(t).css(i)
    }, e.prototype.fadeSlide = function(t, e) {
        var i = this;
        !1 === i.cssTransitions ? (i.$slides.eq(t).css({
            zIndex: i.options.zIndex
        }), i.$slides.eq(t).animate({
            opacity: 1
        }, i.options.speed, i.options.easing, e)) : (i.applyTransition(t), i.$slides.eq(t).css({
            opacity: 1,
            zIndex: i.options.zIndex
        }), e && setTimeout((function() {
            i.disableTransition(t), e.call()
        }), i.options.speed))
    }, e.prototype.fadeSlideOut = function(t) {
        var e = this;
        !1 === e.cssTransitions ? e.$slides.eq(t).animate({
            opacity: 0,
            zIndex: e.options.zIndex - 2
        }, e.options.speed, e.options.easing) : (e.applyTransition(t), e.$slides.eq(t).css({
            opacity: 0,
            zIndex: e.options.zIndex - 2
        }))
    }, e.prototype.filterSlides = e.prototype.slickFilter = function(t) {
        var e = this;
        null !== t && (e.$slidesCache = e.$slides, e.unload(), e.$slideTrack.children(this.options.slide).detach(), e.$slidesCache.filter(t).appendTo(e.$slideTrack), e.reinit())
    }, e.prototype.focusHandler = function() {
        var e = this;
        e.$slider.off("focus.slick blur.slick").on("focus.slick blur.slick", "*:not(.slick-arrow)", (function(i) {
            i.stopImmediatePropagation();
            var n = t(this);
            setTimeout((function() {
                e.options.pauseOnFocus && (e.focussed = n.is(":focus"), e.autoPlay())
            }), 0)
        }))
    }, e.prototype.getCurrent = e.prototype.slickCurrentSlide = function() {
        return this.currentSlide
    }, e.prototype.getDotCount = function() {
        var t = this,
            e = 0,
            i = 0,
            n = 0;
        if (!0 === t.options.infinite)
            for (; e < t.slideCount;) ++n, e = i + t.options.slidesToScroll, i += t.options.slidesToScroll <= t.options.slidesToShow ? t.options.slidesToScroll : t.options.slidesToShow;
        else if (!0 === t.options.centerMode) n = t.slideCount;
        else if (t.options.asNavFor)
            for (; e < t.slideCount;) ++n, e = i + t.options.slidesToScroll, i += t.options.slidesToScroll <= t.options.slidesToShow ? t.options.slidesToScroll : t.options.slidesToShow;
        else n = 1 + Math.ceil((t.slideCount - t.options.slidesToShow) / t.options.slidesToScroll);
        return n - 1
    }, e.prototype.getLeft = function(t) {
        var e, i, n, s = this,
            r = 0;
        return s.slideOffset = 0, i = s.$slides.first().outerHeight(!0), !0 === s.options.infinite ? (s.slideCount > s.options.slidesToShow && (s.slideOffset = s.slideWidth * s.options.slidesToShow * -1, r = i * s.options.slidesToShow * -1), s.slideCount % s.options.slidesToScroll != 0 && t + s.options.slidesToScroll > s.slideCount && s.slideCount > s.options.slidesToShow && (t > s.slideCount ? (s.slideOffset = (s.options.slidesToShow - (t - s.slideCount)) * s.slideWidth * -1, r = (s.options.slidesToShow - (t - s.slideCount)) * i * -1) : (s.slideOffset = s.slideCount % s.options.slidesToScroll * s.slideWidth * -1, r = s.slideCount % s.options.slidesToScroll * i * -1))) : t + s.options.slidesToShow > s.slideCount && (s.slideOffset = (t + s.options.slidesToShow - s.slideCount) * s.slideWidth, r = (t + s.options.slidesToShow - s.slideCount) * i), s.slideCount <= s.options.slidesToShow && (s.slideOffset = 0, r = 0), !0 === s.options.centerMode && !0 === s.options.infinite ? s.slideOffset += s.slideWidth * Math.floor(s.options.slidesToShow / 2) - s.slideWidth : !0 === s.options.centerMode && (s.slideOffset = 0, s.slideOffset += s.slideWidth * Math.floor(s.options.slidesToShow / 2)), e = !1 === s.options.vertical ? t * s.slideWidth * -1 + s.slideOffset : t * i * -1 + r, !0 === s.options.variableWidth && (n = s.slideCount <= s.options.slidesToShow || !1 === s.options.infinite ? s.$slideTrack.children(".slick-slide").eq(t) : s.$slideTrack.children(".slick-slide").eq(t + s.options.slidesToShow), e = !0 === s.options.rtl ? n[0] ? -1 * (s.$slideTrack.width() - n[0].offsetLeft - n.width()) : 0 : n[0] ? -1 * n[0].offsetLeft : 0, !0 === s.options.centerMode && (n = s.slideCount <= s.options.slidesToShow || !1 === s.options.infinite ? s.$slideTrack.children(".slick-slide").eq(t) : s.$slideTrack.children(".slick-slide").eq(t + s.options.slidesToShow + 1), e = !0 === s.options.rtl ? n[0] ? -1 * (s.$slideTrack.width() - n[0].offsetLeft - n.width()) : 0 : n[0] ? -1 * n[0].offsetLeft : 0, e += (s.$list.width() - n.outerWidth()) / 2)), e
    }, e.prototype.getOption = e.prototype.slickGetOption = function(t) {
        return this.options[t]
    }, e.prototype.getNavigableIndexes = function() {
        var t, e = this,
            i = 0,
            n = 0,
            s = [];
        for (!1 === e.options.infinite ? t = e.slideCount : (i = -1 * e.options.slidesToScroll, n = -1 * e.options.slidesToScroll, t = 2 * e.slideCount); t > i;) s.push(i), i = n + e.options.slidesToScroll, n += e.options.slidesToScroll <= e.options.slidesToShow ? e.options.slidesToScroll : e.options.slidesToShow;
        return s
    }, e.prototype.getSlick = function() {
        return this
    }, e.prototype.getSlideCount = function() {
        var e, i, n = this;
        return i = !0 === n.options.centerMode ? n.slideWidth * Math.floor(n.options.slidesToShow / 2) : 0, !0 === n.options.swipeToSlide ? (n.$slideTrack.find(".slick-slide").each((function(s, r) {
            return r.offsetLeft - i + t(r).outerWidth() / 2 > -1 * n.swipeLeft ? (e = r, !1) : void 0
        })), Math.abs(t(e).attr("data-slick-index") - n.currentSlide) || 1) : n.options.slidesToScroll
    }, e.prototype.goTo = e.prototype.slickGoTo = function(t, e) {
        this.changeSlide({
            data: {
                message: "index",
                index: parseInt(t)
            }
        }, e)
    }, e.prototype.init = function(e) {
        var i = this;
        t(i.$slider).hasClass("slick-initialized") || (t(i.$slider).addClass("slick-initialized"), i.buildRows(), i.buildOut(), i.setProps(), i.startLoad(), i.loadSlider(), i.initializeEvents(), i.updateArrows(), i.updateDots(), i.checkResponsive(!0), i.focusHandler()), e && i.$slider.trigger("init", [i]), !0 === i.options.accessibility && i.initADA(), i.options.autoplay && (i.paused = !1, i.autoPlay())
    }, e.prototype.initADA = function() {
        var e = this;
        e.$slides.add(e.$slideTrack.find(".slick-cloned")).attr({
            "aria-hidden": "true",
            tabindex: "-1"
        }).find("a, input, button, select").attr({
            tabindex: "-1"
        }), e.$slideTrack.attr("role", "listbox"), e.$slides.not(e.$slideTrack.find(".slick-cloned")).each((function(i) {
            t(this).attr({
                role: "option",
                "aria-describedby": "slick-slide" + e.instanceUid + i
            })
        })), null !== e.$dots && e.$dots.attr("role", "tablist").find("li").each((function(i) {
            t(this).attr({
                role: "presentation",
                "aria-selected": "false",
                "aria-controls": "navigation" + e.instanceUid + i,
                id: "slick-slide" + e.instanceUid + i
            })
        })).first().attr("aria-selected", "true").end().find("button").attr("role", "button").end().closest("div").attr("role", "toolbar"), e.activateADA()
    }, e.prototype.initArrowEvents = function() {
        var t = this;
        !0 === t.options.arrows && t.slideCount > t.options.slidesToShow && (t.$prevArrow.off("click.slick").on("click.slick", {
            message: "previous"
        }, t.changeSlide), t.$nextArrow.off("click.slick").on("click.slick", {
            message: "next"
        }, t.changeSlide))
    }, e.prototype.initDotEvents = function() {
        var e = this;
        !0 === e.options.dots && e.slideCount > e.options.slidesToShow && t("li", e.$dots).on("click.slick", {
            message: "index"
        }, e.changeSlide), !0 === e.options.dots && !0 === e.options.pauseOnDotsHover && t("li", e.$dots).on("mouseenter.slick", t.proxy(e.interrupt, e, !0)).on("mouseleave.slick", t.proxy(e.interrupt, e, !1))
    }, e.prototype.initSlideEvents = function() {
        var e = this;
        e.options.pauseOnHover && (e.$list.on("mouseenter.slick", t.proxy(e.interrupt, e, !0)), e.$list.on("mouseleave.slick", t.proxy(e.interrupt, e, !1)))
    }, e.prototype.initializeEvents = function() {
        var e = this;
        e.initArrowEvents(), e.initDotEvents(), e.initSlideEvents(), e.$list.on("touchstart.slick mousedown.slick", {
            action: "start"
        }, e.swipeHandler), e.$list.on("touchmove.slick mousemove.slick", {
            action: "move"
        }, e.swipeHandler), e.$list.on("touchend.slick mouseup.slick", {
            action: "end"
        }, e.swipeHandler), e.$list.on("touchcancel.slick mouseleave.slick", {
            action: "end"
        }, e.swipeHandler), e.$list.on("click.slick", e.clickHandler), t(document).on(e.visibilityChange, t.proxy(e.visibility, e)), !0 === e.options.accessibility && e.$list.on("keydown.slick", e.keyHandler), !0 === e.options.focusOnSelect && t(e.$slideTrack).children().on("click.slick", e.selectHandler), t(window).on("orientationchange.slick.slick-" + e.instanceUid, t.proxy(e.orientationChange, e)), t(window).on("resize.slick.slick-" + e.instanceUid, t.proxy(e.resize, e)), t("[draggable!=true]", e.$slideTrack).on("dragstart", e.preventDefault), t(window).on("load.slick.slick-" + e.instanceUid, e.setPosition), t(document).on("ready.slick.slick-" + e.instanceUid, e.setPosition)
    }, e.prototype.initUI = function() {
        var t = this;
        !0 === t.options.arrows && t.slideCount > t.options.slidesToShow && (t.$prevArrow.show(), t.$nextArrow.show()), !0 === t.options.dots && t.slideCount > t.options.slidesToShow && t.$dots.show()
    }, e.prototype.keyHandler = function(t) {
        var e = this;
        t.target.tagName.match("TEXTAREA|INPUT|SELECT") || (37 === t.keyCode && !0 === e.options.accessibility ? e.changeSlide({
            data: {
                message: !0 === e.options.rtl ? "next" : "previous"
            }
        }) : 39 === t.keyCode && !0 === e.options.accessibility && e.changeSlide({
            data: {
                message: !0 === e.options.rtl ? "previous" : "next"
            }
        }))
    }, e.prototype.lazyLoad = function() {
        function e(e) {
            t("img[data-lazy]", e).each((function() {
                var e = t(this),
                    i = t(this).attr("data-lazy"),
                    n = document.createElement("img");
                n.onload = function() {
                    e.animate({
                        opacity: 0
                    }, 100, (function() {
                        e.attr("src", i).animate({
                            opacity: 1
                        }, 200, (function() {
                            e.removeAttr("data-lazy").removeClass("slick-loading")
                        })), s.$slider.trigger("lazyLoaded", [s, e, i])
                    }))
                }, n.onerror = function() {
                    e.removeAttr("data-lazy").removeClass("slick-loading").addClass("slick-lazyload-error"), s.$slider.trigger("lazyLoadError", [s, e, i])
                }, n.src = i
            }))
        }
        var i, n, s = this;
        !0 === s.options.centerMode ? !0 === s.options.infinite ? n = (i = s.currentSlide + (s.options.slidesToShow / 2 + 1)) + s.options.slidesToShow + 2 : (i = Math.max(0, s.currentSlide - (s.options.slidesToShow / 2 + 1)), n = s.options.slidesToShow / 2 + 1 + 2 + s.currentSlide) : (i = s.options.infinite ? s.options.slidesToShow + s.currentSlide : s.currentSlide, n = Math.ceil(i + s.options.slidesToShow), !0 === s.options.fade && (i > 0 && i--, n <= s.slideCount && n++)), e(s.$slider.find(".slick-slide").slice(i, n)), s.slideCount <= s.options.slidesToShow ? e(s.$slider.find(".slick-slide")) : s.currentSlide >= s.slideCount - s.options.slidesToShow ? e(s.$slider.find(".slick-cloned").slice(0, s.options.slidesToShow)) : 0 === s.currentSlide && e(s.$slider.find(".slick-cloned").slice(-1 * s.options.slidesToShow))
    }, e.prototype.loadSlider = function() {
        var t = this;
        t.setPosition(), t.$slideTrack.css({
            opacity: 1
        }), t.$slider.removeClass("slick-loading"), t.initUI(), "progressive" === t.options.lazyLoad && t.progressiveLazyLoad()
    }, e.prototype.next = e.prototype.slickNext = function() {
        this.changeSlide({
            data: {
                message: "next"
            }
        })
    }, e.prototype.orientationChange = function() {
        var t = this;
        t.checkResponsive(), t.setPosition()
    }, e.prototype.pause = e.prototype.slickPause = function() {
        var t = this;
        t.autoPlayClear(), t.paused = !0
    }, e.prototype.play = e.prototype.slickPlay = function() {
        var t = this;
        t.autoPlay(), t.options.autoplay = !0, t.paused = !1, t.focussed = !1, t.interrupted = !1
    }, e.prototype.postSlide = function(t) {
        var e = this;
        e.unslicked || (e.$slider.trigger("afterChange", [e, t]), e.animating = !1, e.setPosition(), e.swipeLeft = null, e.options.autoplay && e.autoPlay(), !0 === e.options.accessibility && e.initADA())
    }, e.prototype.prev = e.prototype.slickPrev = function() {
        this.changeSlide({
            data: {
                message: "previous"
            }
        })
    }, e.prototype.preventDefault = function(t) {
        t.preventDefault()
    }, e.prototype.progressiveLazyLoad = function(e) {
        e = e || 1;
        var i, n, s, r = this,
            o = t("img[data-lazy]", r.$slider);
        o.length ? (i = o.first(), n = i.attr("data-lazy"), (s = document.createElement("img")).onload = function() {
            i.attr("src", n).removeAttr("data-lazy").removeClass("slick-loading"), !0 === r.options.adaptiveHeight && r.setPosition(), r.$slider.trigger("lazyLoaded", [r, i, n]), r.progressiveLazyLoad()
        }, s.onerror = function() {
            3 > e ? setTimeout((function() {
                r.progressiveLazyLoad(e + 1)
            }), 500) : (i.removeAttr("data-lazy").removeClass("slick-loading").addClass("slick-lazyload-error"), r.$slider.trigger("lazyLoadError", [r, i, n]), r.progressiveLazyLoad())
        }, s.src = n) : r.$slider.trigger("allImagesLoaded", [r])
    }, e.prototype.refresh = function(e) {
        var i, n, s = this;
        n = s.slideCount - s.options.slidesToShow, !s.options.infinite && s.currentSlide > n && (s.currentSlide = n), s.slideCount <= s.options.slidesToShow && (s.currentSlide = 0), i = s.currentSlide, s.destroy(!0), t.extend(s, s.initials, {
            currentSlide: i
        }), s.init(), e || s.changeSlide({
            data: {
                message: "index",
                index: i
            }
        }, !1)
    }, e.prototype.registerBreakpoints = function() {
        var e, i, n, s = this,
            r = s.options.responsive || null;
        if ("array" === t.type(r) && r.length) {
            for (e in s.respondTo = s.options.respondTo || "window", r)
                if (n = s.breakpoints.length - 1, i = r[e].breakpoint, r.hasOwnProperty(e)) {
                    for (; n >= 0;) s.breakpoints[n] && s.breakpoints[n] === i && s.breakpoints.splice(n, 1), n--;
                    s.breakpoints.push(i), s.breakpointSettings[i] = r[e].settings
                }
            s.breakpoints.sort((function(t, e) {
                return s.options.mobileFirst ? t - e : e - t
            }))
        }
    }, e.prototype.reinit = function() {
        var e = this;
        e.$slides = e.$slideTrack.children(e.options.slide).addClass("slick-slide"), e.slideCount = e.$slides.length, e.currentSlide >= e.slideCount && 0 !== e.currentSlide && (e.currentSlide = e.currentSlide - e.options.slidesToScroll), e.slideCount <= e.options.slidesToShow && (e.currentSlide = 0), e.registerBreakpoints(), e.setProps(), e.setupInfinite(), e.buildArrows(), e.updateArrows(), e.initArrowEvents(), e.buildDots(), e.updateDots(), e.initDotEvents(), e.cleanUpSlideEvents(), e.initSlideEvents(), e.checkResponsive(!1, !0), !0 === e.options.focusOnSelect && t(e.$slideTrack).children().on("click.slick", e.selectHandler), e.setSlideClasses("number" == typeof e.currentSlide ? e.currentSlide : 0), e.setPosition(), e.focusHandler(), e.paused = !e.options.autoplay, e.autoPlay(), e.$slider.trigger("reInit", [e])
    }, e.prototype.resize = function() {
        var e = this;
        t(window).width() !== e.windowWidth && (clearTimeout(e.windowDelay), e.windowDelay = window.setTimeout((function() {
            e.windowWidth = t(window).width(), e.checkResponsive(), e.unslicked || e.setPosition()
        }), 50))
    }, e.prototype.removeSlide = e.prototype.slickRemove = function(t, e, i) {
        var n = this;
        return "boolean" == typeof t ? t = !0 === (e = t) ? 0 : n.slideCount - 1 : t = !0 === e ? --t : t, !(n.slideCount < 1 || 0 > t || t > n.slideCount - 1) && (n.unload(), !0 === i ? n.$slideTrack.children().remove() : n.$slideTrack.children(this.options.slide).eq(t).remove(), n.$slides = n.$slideTrack.children(this.options.slide), n.$slideTrack.children(this.options.slide).detach(), n.$slideTrack.append(n.$slides), n.$slidesCache = n.$slides, void n.reinit())
    }, e.prototype.setCSS = function(t) {
        var e, i, n = this,
            s = {};
        !0 === n.options.rtl && (t = -t), e = "left" == n.positionProp ? Math.ceil(t) + "px" : "0px", i = "top" == n.positionProp ? Math.ceil(t) + "px" : "0px", s[n.positionProp] = t, !1 === n.transformsEnabled ? n.$slideTrack.css(s) : (s = {}, !1 === n.cssTransitions ? (s[n.animType] = "translate(" + e + ", " + i + ")", n.$slideTrack.css(s)) : (s[n.animType] = "translate3d(" + e + ", " + i + ", 0px)", n.$slideTrack.css(s)))
    }, e.prototype.setDimensions = function() {
        var t = this;
        !1 === t.options.vertical ? !0 === t.options.centerMode && t.$list.css({
            padding: "0px " + t.options.centerPadding
        }) : (t.$list.height(t.$slides.first().outerHeight(!0) * t.options.slidesToShow), !0 === t.options.centerMode && t.$list.css({
            padding: t.options.centerPadding + " 0px"
        })), t.listWidth = t.$list.width(), t.listHeight = t.$list.height(), !1 === t.options.vertical && !1 === t.options.variableWidth ? (t.slideWidth = Math.ceil(t.listWidth / t.options.slidesToShow), t.$slideTrack.width(Math.ceil(t.slideWidth * t.$slideTrack.children(".slick-slide").length))) : !0 === t.options.variableWidth ? t.$slideTrack.width(5e3 * t.slideCount) : (t.slideWidth = Math.ceil(t.listWidth), t.$slideTrack.height(Math.ceil(t.$slides.first().outerHeight(!0) * t.$slideTrack.children(".slick-slide").length)));
        var e = t.$slides.first().outerWidth(!0) - t.$slides.first().width();
        !1 === t.options.variableWidth && t.$slideTrack.children(".slick-slide").width(t.slideWidth - e)
    }, e.prototype.setFade = function() {
        var e, i = this;
        i.$slides.each((function(n, s) {
            e = i.slideWidth * n * -1, !0 === i.options.rtl ? t(s).css({
                position: "relative",
                right: e,
                top: 0,
                zIndex: i.options.zIndex - 2,
                opacity: 0
            }) : t(s).css({
                position: "relative",
                left: e,
                top: 0,
                zIndex: i.options.zIndex - 2,
                opacity: 0
            })
        })), i.$slides.eq(i.currentSlide).css({
            zIndex: i.options.zIndex - 1,
            opacity: 1
        })
    }, e.prototype.setHeight = function() {
        var t = this;
        if (1 === t.options.slidesToShow && !0 === t.options.adaptiveHeight && !1 === t.options.vertical) {
            var e = t.$slides.eq(t.currentSlide).outerHeight(!0);
            t.$list.css("height", e)
        }
    }, e.prototype.setOption = e.prototype.slickSetOption = function() {
        var e, i, n, s, r, o = this,
            a = !1;
        if ("object" === t.type(arguments[0]) ? (n = arguments[0], a = arguments[1], r = "multiple") : "string" === t.type(arguments[0]) && (n = arguments[0], s = arguments[1], a = arguments[2], "responsive" === arguments[0] && "array" === t.type(arguments[1]) ? r = "responsive" : void 0 !== arguments[1] && (r = "single")), "single" === r) o.options[n] = s;
        else if ("multiple" === r) t.each(n, (function(t, e) {
            o.options[t] = e
        }));
        else if ("responsive" === r)
            for (i in s)
                if ("array" !== t.type(o.options.responsive)) o.options.responsive = [s[i]];
                else {
                    for (e = o.options.responsive.length - 1; e >= 0;) o.options.responsive[e].breakpoint === s[i].breakpoint && o.options.responsive.splice(e, 1), e--;
                    o.options.responsive.push(s[i])
                }
        a && (o.unload(), o.reinit())
    }, e.prototype.setPosition = function() {
        var t = this;
        t.setDimensions(), t.setHeight(), !1 === t.options.fade ? t.setCSS(t.getLeft(t.currentSlide)) : t.setFade(), t.$slider.trigger("setPosition", [t])
    }, e.prototype.setProps = function() {
        var t = this,
            e = document.body.style;
        t.positionProp = !0 === t.options.vertical ? "top" : "left", "top" === t.positionProp ? t.$slider.addClass("slick-vertical") : t.$slider.removeClass("slick-vertical"), (void 0 !== e.WebkitTransition || void 0 !== e.MozTransition || void 0 !== e.msTransition) && !0 === t.options.useCSS && (t.cssTransitions = !0), t.options.fade && ("number" == typeof t.options.zIndex ? t.options.zIndex < 3 && (t.options.zIndex = 3) : t.options.zIndex = t.defaults.zIndex), void 0 !== e.OTransform && (t.animType = "OTransform", t.transformType = "-o-transform", t.transitionType = "OTransition", void 0 === e.perspectiveProperty && void 0 === e.webkitPerspective && (t.animType = !1)), void 0 !== e.MozTransform && (t.animType = "MozTransform", t.transformType = "-moz-transform", t.transitionType = "MozTransition", void 0 === e.perspectiveProperty && void 0 === e.MozPerspective && (t.animType = !1)), void 0 !== e.webkitTransform && (t.animType = "webkitTransform", t.transformType = "-webkit-transform", t.transitionType = "webkitTransition", void 0 === e.perspectiveProperty && void 0 === e.webkitPerspective && (t.animType = !1)), void 0 !== e.msTransform && (t.animType = "msTransform", t.transformType = "-ms-transform", t.transitionType = "msTransition", void 0 === e.msTransform && (t.animType = !1)), void 0 !== e.transform && !1 !== t.animType && (t.animType = "transform", t.transformType = "transform", t.transitionType = "transition"), t.transformsEnabled = t.options.useTransform && null !== t.animType && !1 !== t.animType
    }, e.prototype.setSlideClasses = function(t) {
        var e, i, n, s, r = this;
        i = r.$slider.find(".slick-slide").removeClass("slick-active slick-center slick-current").attr("aria-hidden", "true"), r.$slides.eq(t).addClass("slick-current"), !0 === r.options.centerMode ? (e = Math.floor(r.options.slidesToShow / 2), !0 === r.options.infinite && (t >= e && t <= r.slideCount - 1 - e ? r.$slides.slice(t - e, t + e + 1).addClass("slick-active").attr("aria-hidden", "false") : (n = r.options.slidesToShow + t, i.slice(n - e + 1, n + e + 2).addClass("slick-active").attr("aria-hidden", "false")), 0 === t ? i.eq(i.length - 1 - r.options.slidesToShow).addClass("slick-center") : t === r.slideCount - 1 && i.eq(r.options.slidesToShow).addClass("slick-center")), r.$slides.eq(t).addClass("slick-center")) : t >= 0 && t <= r.slideCount - r.options.slidesToShow ? r.$slides.slice(t, t + r.options.slidesToShow).addClass("slick-active").attr("aria-hidden", "false") : i.length <= r.options.slidesToShow ? i.addClass("slick-active").attr("aria-hidden", "false") : (s = r.slideCount % r.options.slidesToShow, n = !0 === r.options.infinite ? r.options.slidesToShow + t : t,
            r.options.slidesToShow == r.options.slidesToScroll && r.slideCount - t < r.options.slidesToShow ? i.slice(n - (r.options.slidesToShow - s), n + s).addClass("slick-active").attr("aria-hidden", "false") : i.slice(n, n + r.options.slidesToShow).addClass("slick-active").attr("aria-hidden", "false")), "ondemand" === r.options.lazyLoad && r.lazyLoad()
    }, e.prototype.setupInfinite = function() {
        var e, i, n, s = this;
        if (!0 === s.options.fade && (s.options.centerMode = !1), !0 === s.options.infinite && !1 === s.options.fade && (i = null, s.slideCount > s.options.slidesToShow)) {
            for (n = !0 === s.options.centerMode ? s.options.slidesToShow + 1 : s.options.slidesToShow, e = s.slideCount; e > s.slideCount - n; e -= 1) i = e - 1, t(s.$slides[i]).clone(!0).attr("id", "").attr("data-slick-index", i - s.slideCount).prependTo(s.$slideTrack).addClass("slick-cloned");
            for (e = 0; n > e; e += 1) i = e, t(s.$slides[i]).clone(!0).attr("id", "").attr("data-slick-index", i + s.slideCount).appendTo(s.$slideTrack).addClass("slick-cloned");
            s.$slideTrack.find(".slick-cloned").find("[id]").each((function() {
                t(this).attr("id", "")
            }))
        }
    }, e.prototype.interrupt = function(t) {
        var e = this;
        t || e.autoPlay(), e.interrupted = t
    }, e.prototype.selectHandler = function(e) {
        var i = this,
            n = t(e.target).is(".slick-slide") ? t(e.target) : t(e.target).parents(".slick-slide"),
            s = parseInt(n.attr("data-slick-index"));
        return s || (s = 0), i.slideCount <= i.options.slidesToShow ? (i.setSlideClasses(s), void i.asNavFor(s)) : void i.slideHandler(s)
    }, e.prototype.slideHandler = function(t, e, i) {
        var n, s, r, o, a, l = null,
            c = this;
        return e = e || !1, !0 === c.animating && !0 === c.options.waitForAnimate || !0 === c.options.fade && c.currentSlide === t || c.slideCount <= c.options.slidesToShow ? void 0 : (!1 === e && c.asNavFor(t), n = t, l = c.getLeft(n), o = c.getLeft(c.currentSlide), c.currentLeft = null === c.swipeLeft ? o : c.swipeLeft, !1 === c.options.infinite && !1 === c.options.centerMode && (0 > t || t > c.getDotCount() * c.options.slidesToScroll) || !1 === c.options.infinite && !0 === c.options.centerMode && (0 > t || t > c.slideCount - c.options.slidesToScroll) ? void(!1 === c.options.fade && (n = c.currentSlide, !0 !== i ? c.animateSlide(o, (function() {
            c.postSlide(n)
        })) : c.postSlide(n))) : (c.options.autoplay && clearInterval(c.autoPlayTimer), s = 0 > n ? c.slideCount % c.options.slidesToScroll != 0 ? c.slideCount - c.slideCount % c.options.slidesToScroll : c.slideCount + n : n >= c.slideCount ? c.slideCount % c.options.slidesToScroll != 0 ? 0 : n - c.slideCount : n, c.animating = !0, c.$slider.trigger("beforeChange", [c, c.currentSlide, s]), r = c.currentSlide, c.currentSlide = s, c.setSlideClasses(c.currentSlide), c.options.asNavFor && ((a = (a = c.getNavTarget()).slick("getSlick")).slideCount <= a.options.slidesToShow && a.setSlideClasses(c.currentSlide)), c.updateDots(), c.updateArrows(), !0 === c.options.fade ? (!0 !== i ? (c.fadeSlideOut(r), c.fadeSlide(s, (function() {
            c.postSlide(s)
        }))) : c.postSlide(s), void c.animateHeight()) : void(!0 !== i ? c.animateSlide(l, (function() {
            c.postSlide(s)
        })) : c.postSlide(s))))
    }, e.prototype.startLoad = function() {
        var t = this;
        !0 === t.options.arrows && t.slideCount > t.options.slidesToShow && (t.$prevArrow.hide(), t.$nextArrow.hide()), !0 === t.options.dots && t.slideCount > t.options.slidesToShow && t.$dots.hide(), t.$slider.addClass("slick-loading")
    }, e.prototype.swipeDirection = function() {
        var t, e, i, n, s = this;
        return t = s.touchObject.startX - s.touchObject.curX, e = s.touchObject.startY - s.touchObject.curY, i = Math.atan2(e, t), 0 > (n = Math.round(180 * i / Math.PI)) && (n = 360 - Math.abs(n)), 45 >= n && n >= 0 || 360 >= n && n >= 315 ? !1 === s.options.rtl ? "left" : "right" : n >= 135 && 225 >= n ? !1 === s.options.rtl ? "right" : "left" : !0 === s.options.verticalSwiping ? n >= 35 && 135 >= n ? "down" : "up" : "vertical"
    }, e.prototype.swipeEnd = function() {
        var t, e, i = this;
        if (i.dragging = !1, i.interrupted = !1, i.shouldClick = !(i.touchObject.swipeLength > 10), void 0 === i.touchObject.curX) return !1;
        if (!0 === i.touchObject.edgeHit && i.$slider.trigger("edge", [i, i.swipeDirection()]), i.touchObject.swipeLength >= i.touchObject.minSwipe) {
            switch (e = i.swipeDirection()) {
                case "left":
                case "down":
                    t = i.options.swipeToSlide ? i.checkNavigable(i.currentSlide + i.getSlideCount()) : i.currentSlide + i.getSlideCount(), i.currentDirection = 0;
                    break;
                case "right":
                case "up":
                    t = i.options.swipeToSlide ? i.checkNavigable(i.currentSlide - i.getSlideCount()) : i.currentSlide - i.getSlideCount(), i.currentDirection = 1
            }
            "vertical" != e && (i.slideHandler(t), i.touchObject = {}, i.$slider.trigger("swipe", [i, e]))
        } else i.touchObject.startX !== i.touchObject.curX && (i.slideHandler(i.currentSlide), i.touchObject = {})
    }, e.prototype.swipeHandler = function(t) {
        var e = this;
        if (!(!1 === e.options.swipe || "ontouchend" in document && !1 === e.options.swipe || !1 === e.options.draggable && -1 !== t.type.indexOf("mouse"))) switch (e.touchObject.fingerCount = t.originalEvent && void 0 !== t.originalEvent.touches ? t.originalEvent.touches.length : 1, e.touchObject.minSwipe = e.listWidth / e.options.touchThreshold, !0 === e.options.verticalSwiping && (e.touchObject.minSwipe = e.listHeight / e.options.touchThreshold), t.data.action) {
            case "start":
                e.swipeStart(t);
                break;
            case "move":
                e.swipeMove(t);
                break;
            case "end":
                e.swipeEnd(t)
        }
    }, e.prototype.swipeMove = function(t) {
        var e, i, n, s, r, o = this;
        return r = void 0 !== t.originalEvent ? t.originalEvent.touches : null, !(!o.dragging || r && 1 !== r.length) && (e = o.getLeft(o.currentSlide), o.touchObject.curX = void 0 !== r ? r[0].pageX : t.clientX, o.touchObject.curY = void 0 !== r ? r[0].pageY : t.clientY, o.touchObject.swipeLength = Math.round(Math.sqrt(Math.pow(o.touchObject.curX - o.touchObject.startX, 2))), !0 === o.options.verticalSwiping && (o.touchObject.swipeLength = Math.round(Math.sqrt(Math.pow(o.touchObject.curY - o.touchObject.startY, 2)))), "vertical" !== (i = o.swipeDirection()) ? (void 0 !== t.originalEvent && o.touchObject.swipeLength > 4 && t.preventDefault(), s = (!1 === o.options.rtl ? 1 : -1) * (o.touchObject.curX > o.touchObject.startX ? 1 : -1), !0 === o.options.verticalSwiping && (s = o.touchObject.curY > o.touchObject.startY ? 1 : -1), n = o.touchObject.swipeLength, o.touchObject.edgeHit = !1, !1 === o.options.infinite && (0 === o.currentSlide && "right" === i || o.currentSlide >= o.getDotCount() && "left" === i) && (n = o.touchObject.swipeLength * o.options.edgeFriction, o.touchObject.edgeHit = !0), !1 === o.options.vertical ? o.swipeLeft = e + n * s : o.swipeLeft = e + n * (o.$list.height() / o.listWidth) * s, !0 === o.options.verticalSwiping && (o.swipeLeft = e + n * s), !0 !== o.options.fade && !1 !== o.options.touchMove && (!0 === o.animating ? (o.swipeLeft = null, !1) : void o.setCSS(o.swipeLeft))) : void 0)
    }, e.prototype.swipeStart = function(t) {
        var e, i = this;
        return i.interrupted = !0, 1 !== i.touchObject.fingerCount || i.slideCount <= i.options.slidesToShow ? (i.touchObject = {}, !1) : (void 0 !== t.originalEvent && void 0 !== t.originalEvent.touches && (e = t.originalEvent.touches[0]), i.touchObject.startX = i.touchObject.curX = void 0 !== e ? e.pageX : t.clientX, i.touchObject.startY = i.touchObject.curY = void 0 !== e ? e.pageY : t.clientY, void(i.dragging = !0))
    }, e.prototype.unfilterSlides = e.prototype.slickUnfilter = function() {
        var t = this;
        null !== t.$slidesCache && (t.unload(), t.$slideTrack.children(this.options.slide).detach(), t.$slidesCache.appendTo(t.$slideTrack), t.reinit())
    }, e.prototype.unload = function() {
        var e = this;
        t(".slick-cloned", e.$slider).remove(), e.$dots && e.$dots.remove(), e.$prevArrow && e.htmlExpr.test(e.options.prevArrow) && e.$prevArrow.remove(), e.$nextArrow && e.htmlExpr.test(e.options.nextArrow) && e.$nextArrow.remove(), e.$slides.removeClass("slick-slide slick-active slick-visible slick-current").attr("aria-hidden", "true").css("width", "")
    }, e.prototype.unslick = function(t) {
        var e = this;
        e.$slider.trigger("unslick", [e, t]), e.destroy()
    }, e.prototype.updateArrows = function() {
        var t = this;
        Math.floor(t.options.slidesToShow / 2), !0 === t.options.arrows && t.slideCount > t.options.slidesToShow && !t.options.infinite && (t.$prevArrow.removeClass("slick-disabled").attr("aria-disabled", "false"), t.$nextArrow.removeClass("slick-disabled").attr("aria-disabled", "false"), 0 === t.currentSlide ? (t.$prevArrow.addClass("slick-disabled").attr("aria-disabled", "true"), t.$nextArrow.removeClass("slick-disabled").attr("aria-disabled", "false")) : (t.currentSlide >= t.slideCount - t.options.slidesToShow && !1 === t.options.centerMode || t.currentSlide >= t.slideCount - 1 && !0 === t.options.centerMode) && (t.$nextArrow.addClass("slick-disabled").attr("aria-disabled", "true"), t.$prevArrow.removeClass("slick-disabled").attr("aria-disabled", "false")))
    }, e.prototype.updateDots = function() {
        var t = this;
        null !== t.$dots && (t.$dots.find("li").removeClass("slick-active").attr("aria-hidden", "true"), t.$dots.find("li").eq(Math.floor(t.currentSlide / t.options.slidesToScroll)).addClass("slick-active").attr("aria-hidden", "false"))
    }, e.prototype.visibility = function() {
        var t = this;
        t.options.autoplay && (document[t.hidden] ? t.interrupted = !0 : t.interrupted = !1)
    }, t.fn.slick = function() {
        var t, i, n = this,
            s = arguments[0],
            r = Array.prototype.slice.call(arguments, 1),
            o = n.length;
        for (t = 0; o > t; t++)
            if ("object" == typeof s || void 0 === s ? n[t].slick = new e(n[t], s) : i = n[t].slick[s].apply(n[t].slick, r), void 0 !== i) return i;
        return n
    }
})),
function(t, e) {
    "function" == typeof define && define.amd ? define(e) : "object" == typeof exports ? module.exports = e() : t.ScrollMagic = e()
}(this, (function() {
    "use strict";
    var t = function() {};
    t.version = "2.0.5", window.addEventListener("mousewheel", (function() {}));
    var e = "data-scrollmagic-pin-spacer";
    t.Controller = function(n) {
        var r, o, a = "ScrollMagic.Controller",
            l = "FORWARD",
            c = "REVERSE",
            h = "PAUSED",
            u = i.defaults,
            p = this,
            d = s.extend({}, u, n),
            f = [],
            m = !1,
            _ = 0,
            g = h,
            v = !0,
            y = 0,
            w = !0,
            T = function() {
                for (var t in d) u.hasOwnProperty(t) || delete d[t];
                if (d.container = s.get.elements(d.container)[0], !d.container) throw a + " init failed.";
                (v = d.container === window || d.container === document.body || !document.body.contains(d.container)) && (d.container = window), y = k(), d.container.addEventListener("resize", O), d.container.addEventListener("scroll", O), d.refreshInterval = parseInt(d.refreshInterval) || u.refreshInterval, x()
            },
            x = function() {
                d.refreshInterval > 0 && (o = window.setTimeout(A, d.refreshInterval))
            },
            b = function() {
                return d.vertical ? s.get.scrollTop(d.container) : s.get.scrollLeft(d.container)
            },
            k = function() {
                return d.vertical ? s.get.height(d.container) : s.get.width(d.container)
            },
            S = this._setScrollPos = function(t) {
                d.vertical ? v ? window.scrollTo(s.get.scrollLeft(), t) : d.container.scrollTop = t : v ? window.scrollTo(t, s.get.scrollTop()) : d.container.scrollLeft = t
            },
            P = function() {
                if (w && m) {
                    var t = s.type.Array(m) ? m : f.slice(0);
                    m = !1;
                    var e = _,
                        i = (_ = p.scrollPos()) - e;
                    0 !== i && (g = i > 0 ? l : c), g === c && t.reverse(), t.forEach((function(t) {
                        t.update(!0)
                    }))
                }
            },
            C = function() {
                r = s.rAF(P)
            },
            O = function(t) {
                "resize" == t.type && (y = k(), g = h), !0 !== m && (m = !0, C())
            },
            A = function() {
                if (!v && y != k()) {
                    var t;
                    try {
                        t = new Event("resize", {
                            bubbles: !1,
                            cancelable: !1
                        })
                    } catch (e) {
                        (t = document.createEvent("Event")).initEvent("resize", !1, !1)
                    }
                    d.container.dispatchEvent(t)
                }
                f.forEach((function(t) {
                    t.refresh()
                })), x()
            };
        this._options = d;
        var E = function(t) {
            if (t.length <= 1) return t;
            var e = t.slice(0);
            return e.sort((function(t, e) {
                return t.scrollOffset() > e.scrollOffset() ? 1 : -1
            })), e
        };
        return this.addScene = function(e) {
            if (s.type.Array(e)) e.forEach((function(t) {
                p.addScene(t)
            }));
            else if (e instanceof t.Scene)
                if (e.controller() !== p) e.addTo(p);
                else if (f.indexOf(e) < 0)
                for (var i in f.push(e), f = E(f), e.on("shift.controller_sort", (function() {
                        f = E(f)
                    })), d.globalSceneOptions) e[i] && e[i].call(e, d.globalSceneOptions[i]);
            return p
        }, this.removeScene = function(t) {
            if (s.type.Array(t)) t.forEach((function(t) {
                p.removeScene(t)
            }));
            else {
                var e = f.indexOf(t);
                e > -1 && (t.off("shift.controller_sort"), f.splice(e, 1), t.remove())
            }
            return p
        }, this.updateScene = function(e, i) {
            return s.type.Array(e) ? e.forEach((function(t) {
                p.updateScene(t, i)
            })) : i ? e.update(!0) : !0 !== m && e instanceof t.Scene && (-1 == (m = m || []).indexOf(e) && m.push(e), m = E(m), C()), p
        }, this.update = function(t) {
            return O({
                type: "resize"
            }), t && P(), p
        }, this.scrollTo = function(i, n) {
            if (s.type.Number(i)) S.call(d.container, i, n);
            else if (i instanceof t.Scene) i.controller() === p && p.scrollTo(i.scrollOffset(), n);
            else if (s.type.Function(i)) S = i;
            else {
                var r = s.get.elements(i)[0];
                if (r) {
                    for (; r.parentNode.hasAttribute(e);) r = r.parentNode;
                    var o = d.vertical ? "top" : "left",
                        a = s.get.offset(d.container),
                        l = s.get.offset(r);
                    v || (a[o] -= p.scrollPos()), p.scrollTo(l[o] - a[o], n)
                }
            }
            return p
        }, this.scrollPos = function(t) {
            return arguments.length ? (s.type.Function(t) && (b = t), p) : b.call(p)
        }, this.info = function(t) {
            var e = {
                size: y,
                vertical: d.vertical,
                scrollPos: _,
                scrollDirection: g,
                container: d.container,
                isDocument: v
            };
            return arguments.length ? void 0 !== e[t] ? e[t] : void 0 : e
        }, this.loglevel = function() {
            return p
        }, this.enabled = function(t) {
            return arguments.length ? (w != t && (w = !!t, p.updateScene(f, !0)), p) : w
        }, this.destroy = function(t) {
            window.clearTimeout(o);
            for (var e = f.length; e--;) f[e].destroy(t);
            return d.container.removeEventListener("resize", O), d.container.removeEventListener("scroll", O), s.cAF(r), null
        }, T(), p
    };
    var i = {
        defaults: {
            container: window,
            vertical: !0,
            globalSceneOptions: {},
            loglevel: 2,
            refreshInterval: 100
        }
    };
    t.Controller.addOption = function(t, e) {
        i.defaults[t] = e
    }, t.Controller.extend = function(e) {
        var i = this;
        t.Controller = function() {
            return i.apply(this, arguments), this.$super = s.extend({}, this), e.apply(this, arguments) || this
        }, s.extend(t.Controller, i), t.Controller.prototype = i.prototype, t.Controller.prototype.constructor = t.Controller
    }, t.Scene = function(i) {
        var r, o, a = "BEFORE",
            l = "DURING",
            c = "AFTER",
            h = n.defaults,
            u = this,
            p = s.extend({}, h, i),
            d = a,
            f = 0,
            m = {
                start: 0,
                end: 0
            },
            _ = 0,
            g = !0,
            v = function() {
                for (var t in p) h.hasOwnProperty(t) || delete p[t];
                for (var e in h) A(e);
                C()
            },
            y = {};
        this.on = function(t, e) {
            return s.type.Function(e) && (t = t.trim().split(" ")).forEach((function(t) {
                var i = t.split("."),
                    n = i[0],
                    s = i[1];
                "*" != n && (y[n] || (y[n] = []), y[n].push({
                    namespace: s || "",
                    callback: e
                }))
            })), u
        }, this.off = function(t, e) {
            return t ? ((t = t.trim().split(" ")).forEach((function(t) {
                var i = t.split("."),
                    n = i[0],
                    s = i[1] || "";
                ("*" === n ? Object.keys(y) : [n]).forEach((function(t) {
                    for (var i = y[t] || [], n = i.length; n--;) {
                        var r = i[n];
                        !r || s !== r.namespace && "*" !== s || e && e != r.callback || i.splice(n, 1)
                    }
                    i.length || delete y[t]
                }))
            })), u) : u
        }, this.trigger = function(e, i) {
            if (e) {
                var n = e.trim().split("."),
                    s = n[0],
                    r = n[1],
                    o = y[s];
                o && o.forEach((function(e) {
                    r && r !== e.namespace || e.callback.call(u, new t.Event(s, e.namespace, u, i))
                }))
            }
            return u
        }, u.on("change.internal", (function(t) {
            "loglevel" !== t.what && "tweenChanges" !== t.what && ("triggerElement" === t.what ? k() : "reverse" === t.what && u.update())
        })).on("shift.internal", (function() {
            x(), u.update()
        })), this.addTo = function(e) {
            return e instanceof t.Controller && o != e && (o && o.removeScene(u), o = e, C(), b(!0), k(!0), x(), o.info("container").addEventListener("resize", S), e.addScene(u), u.trigger("add", {
                controller: o
            }), u.update()), u
        }, this.enabled = function(t) {
            return arguments.length ? (g != t && (g = !!t, u.update(!0)), u) : g
        }, this.remove = function() {
            if (o) {
                o.info("container").removeEventListener("resize", S);
                var t = o;
                o = void 0, t.removeScene(u), u.trigger("remove")
            }
            return u
        }, this.destroy = function(t) {
            return u.trigger("destroy", {
                reset: t
            }), u.remove(), u.off("*.*"), null
        }, this.update = function(t) {
            if (o)
                if (t)
                    if (o.enabled() && g) {
                        var e, i = o.info("scrollPos");
                        e = p.duration > 0 ? (i - m.start) / (m.end - m.start) : i >= m.start ? 1 : 0, u.trigger("update", {
                            startPos: m.start,
                            endPos: m.end,
                            scrollPos: i
                        }), u.progress(e)
                    } else w && d === l && E(!0);
            else o.updateScene(u, !1);
            return u
        }, this.refresh = function() {
            return b(), k(), u
        }, this.progress = function(t) {
            if (arguments.length) {
                var e = !1,
                    i = d,
                    n = o ? o.info("scrollDirection") : "PAUSED",
                    s = p.reverse || t >= f;
                if (0 === p.duration ? (e = f != t, d = 0 === (f = 1 > t && s ? 0 : 1) ? a : l) : 0 > t && d !== a && s ? (f = 0, d = a, e = !0) : t >= 0 && 1 > t && s ? (f = t, d = l, e = !0) : t >= 1 && d !== c ? (f = 1, d = c, e = !0) : d !== l || s || E(), e) {
                    var r = {
                            progress: f,
                            state: d,
                            scrollDirection: n
                        },
                        h = d != i,
                        m = function(t) {
                            u.trigger(t, r)
                        };
                    h && i !== l && (m("enter"), m(i === a ? "start" : "end")), m("progress"), h && d !== l && (m(d === a ? "start" : "end"), m("leave"))
                }
                return u
            }
            return f
        };
        var w, T, x = function() {
                m = {
                    start: _ + p.offset
                }, o && p.triggerElement && (m.start -= o.info("size") * p.triggerHook), m.end = m.start + p.duration
            },
            b = function(t) {
                if (r) {
                    var e = "duration";
                    O(e, r.call(u)) && !t && (u.trigger("change", {
                        what: e,
                        newval: p[e]
                    }), u.trigger("shift", {
                        reason: e
                    }))
                }
            },
            k = function(t) {
                var i = 0,
                    n = p.triggerElement;
                if (o && n) {
                    for (var r = o.info(), a = s.get.offset(r.container), l = r.vertical ? "top" : "left"; n.parentNode.hasAttribute(e);) n = n.parentNode;
                    var c = s.get.offset(n);
                    r.isDocument || (a[l] -= o.scrollPos()), i = c[l] - a[l]
                }
                var h = i != _;
                _ = i, h && !t && u.trigger("shift", {
                    reason: "triggerElementPosition"
                })
            },
            S = function() {
                p.triggerHook > 0 && u.trigger("shift", {
                    reason: "containerResize"
                })
            },
            P = s.extend(n.validate, {
                duration: function(t) {
                    if (s.type.String(t) && t.match(/^(\.|\d)*\d+%$/)) {
                        var e = parseFloat(t) / 100;
                        t = function() {
                            return o ? o.info("size") * e : 0
                        }
                    }
                    if (s.type.Function(t)) {
                        r = t;
                        try {
                            t = parseFloat(r())
                        } catch (e) {
                            t = -1
                        }
                    }
                    if (t = parseFloat(t), !s.type.Number(t) || 0 > t) throw r ? (r = void 0, 0) : 0;
                    return t
                }
            }),
            C = function(t) {
                (t = arguments.length ? [t] : Object.keys(P)).forEach((function(t) {
                    var e;
                    if (P[t]) try {
                        e = P[t](p[t])
                    } catch (i) {
                        e = h[t]
                    } finally {
                        p[t] = e
                    }
                }))
            },
            O = function(t, e) {
                var i = !1,
                    n = p[t];
                return p[t] != e && (p[t] = e, C(t), i = n != p[t]), i
            },
            A = function(t) {
                u[t] || (u[t] = function(e) {
                    return arguments.length ? ("duration" === t && (r = void 0), O(t, e) && (u.trigger("change", {
                        what: t,
                        newval: p[t]
                    }), n.shifts.indexOf(t) > -1 && u.trigger("shift", {
                        reason: t
                    })), u) : p[t]
                })
            };
        this.controller = function() {
            return o
        }, this.state = function() {
            return d
        }, this.scrollOffset = function() {
            return m.start
        }, this.triggerPosition = function() {
            var t = p.offset;
            return o && (t += p.triggerElement ? _ : o.info("size") * u.triggerHook()), t
        }, u.on("shift.internal", (function(t) {
            var e = "duration" === t.reason;
            (d === c && e || d === l && 0 === p.duration) && E(), e && R()
        })).on("progress.internal", (function() {
            E()
        })).on("add.internal", (function() {
            R()
        })).on("destroy.internal", (function(t) {
            u.removePin(t.reset)
        }));
        var E = function(t) {
                if (w && o) {
                    var e = o.info(),
                        i = T.spacer.firstChild;
                    if (t || d !== l) {
                        var n = {
                                position: T.inFlow ? "relative" : "absolute",
                                top: 0,
                                left: 0
                            },
                            r = s.css(i, "position") != n.position;
                        T.pushFollowers ? p.duration > 0 && (d === c && 0 === parseFloat(s.css(T.spacer, "padding-top")) || d === a && 0 === parseFloat(s.css(T.spacer, "padding-bottom"))) && (r = !0) : n[e.vertical ? "top" : "left"] = p.duration * f, s.css(i, n), r && R()
                    } else {
                        "fixed" != s.css(i, "position") && (s.css(i, {
                            position: "fixed"
                        }), R());
                        var h = s.get.offset(T.spacer, !0),
                            u = p.reverse || 0 === p.duration ? e.scrollPos - m.start : Math.round(f * p.duration * 10) / 10;
                        h[e.vertical ? "top" : "left"] += u, s.css(T.spacer.firstChild, {
                            top: h.top,
                            left: h.left
                        })
                    }
                }
            },
            R = function() {
                if (w && o && T.inFlow) {
                    var t = d === l,
                        e = o.info("vertical"),
                        i = T.spacer.firstChild,
                        n = s.isMarginCollapseType(s.css(T.spacer, "display")),
                        r = {};
                    T.relSize.width || T.relSize.autoFullWidth ? t ? s.css(w, {
                        width: s.get.width(T.spacer)
                    }) : s.css(w, {
                        width: "100%"
                    }) : (r["min-width"] = s.get.width(e ? w : i, !0, !0), r.width = t ? r["min-width"] : "auto"), T.relSize.height ? t ? s.css(w, {
                        height: s.get.height(T.spacer) - (T.pushFollowers ? p.duration : 0)
                    }) : s.css(w, {
                        height: "100%"
                    }) : (r["min-height"] = s.get.height(e ? i : w, !0, !n), r.height = t ? r["min-height"] : "auto"), T.pushFollowers && (r["padding" + (e ? "Top" : "Left")] = p.duration * f, r["padding" + (e ? "Bottom" : "Right")] = p.duration * (1 - f)), s.css(T.spacer, r)
                }
            },
            M = function() {
                o && w && d === l && !o.info("isDocument") && E()
            },
            I = function() {
                o && w && d === l && ((T.relSize.width || T.relSize.autoFullWidth) && s.get.width(window) != s.get.width(T.spacer.parentNode) || T.relSize.height && s.get.height(window) != s.get.height(T.spacer.parentNode)) && R()
            },
            D = function(t) {
                o && w && d === l && !o.info("isDocument") && (t.preventDefault(), o._setScrollPos(o.info("scrollPos") - ((t.wheelDelta || t[o.info("vertical") ? "wheelDeltaY" : "wheelDeltaX"]) / 3 || 30 * -t.detail)))
            };
        this.setPin = function(t, i) {
            var n = {
                pushFollowers: !0,
                spacerClass: "scrollmagic-pin-spacer"
            };
            if (i = s.extend({}, n, i), !(t = s.get.elements(t)[0])) return u;
            if ("fixed" === s.css(t, "position")) return u;
            if (w) {
                if (w === t) return u;
                u.removePin()
            }
            var r = (w = t).parentNode.style.display,
                o = ["top", "left", "bottom", "right", "margin", "marginLeft", "marginRight", "marginTop", "marginBottom"];
            w.parentNode.style.display = "none";
            var a = "absolute" != s.css(w, "position"),
                l = s.css(w, o.concat(["display"])),
                c = s.css(w, ["width", "height"]);
            w.parentNode.style.display = r, !a && i.pushFollowers && (i.pushFollowers = !1);
            var h = w.parentNode.insertBefore(document.createElement("div"), w),
                p = s.extend(l, {
                    position: a ? "relative" : "absolute",
                    boxSizing: "content-box",
                    mozBoxSizing: "content-box",
                    webkitBoxSizing: "content-box"
                });
            if (a || s.extend(p, s.css(w, ["width", "height"])), s.css(h, p), h.setAttribute(e, ""), s.addClass(h, i.spacerClass), T = {
                    spacer: h,
                    relSize: {
                        width: "%" === c.width.slice(-1),
                        height: "%" === c.height.slice(-1),
                        autoFullWidth: "auto" === c.width && a && s.isMarginCollapseType(l.display)
                    },
                    pushFollowers: i.pushFollowers,
                    inFlow: a
                }, !w.___origStyle) {
                w.___origStyle = {};
                var d = w.style;
                o.concat(["width", "height", "position", "boxSizing", "mozBoxSizing", "webkitBoxSizing"]).forEach((function(t) {
                    w.___origStyle[t] = d[t] || ""
                }))
            }
            return T.relSize.width && s.css(h, {
                width: c.width
            }), T.relSize.height && s.css(h, {
                height: c.height
            }), h.appendChild(w), s.css(w, {
                position: a ? "relative" : "absolute",
                margin: "auto",
                top: "auto",
                left: "auto",
                bottom: "auto",
                right: "auto"
            }), (T.relSize.width || T.relSize.autoFullWidth) && s.css(w, {
                boxSizing: "border-box",
                mozBoxSizing: "border-box",
                webkitBoxSizing: "border-box"
            }), window.addEventListener("scroll", M), window.addEventListener("resize", M), window.addEventListener("resize", I), w.addEventListener("mousewheel", D), w.addEventListener("DOMMouseScroll", D), E(), u
        }, this.removePin = function(t) {
            if (w) {
                if (d === l && E(!0), t || !o) {
                    var i = T.spacer.firstChild;
                    if (i.hasAttribute(e)) {
                        var n = T.spacer.style;
                        margins = {}, ["margin", "marginLeft", "marginRight", "marginTop", "marginBottom"].forEach((function(t) {
                            margins[t] = n[t] || ""
                        })), s.css(i, margins)
                    }
                    T.spacer.parentNode.insertBefore(i, T.spacer), T.spacer.parentNode.removeChild(T.spacer), w.parentNode.hasAttribute(e) || (s.css(w, w.___origStyle), delete w.___origStyle)
                }
                window.removeEventListener("scroll", M), window.removeEventListener("resize", M), window.removeEventListener("resize", I), w.removeEventListener("mousewheel", D), w.removeEventListener("DOMMouseScroll", D), w = void 0
            }
            return u
        };
        var $, z = [];
        return u.on("destroy.internal", (function(t) {
            u.removeClassToggle(t.reset)
        })), this.setClassToggle = function(t, e) {
            var i = s.get.elements(t);
            return 0 !== i.length && s.type.String(e) ? (z.length > 0 && u.removeClassToggle(), $ = e, z = i, u.on("enter.internal_class leave.internal_class", (function(t) {
                var e = "enter" === t.type ? s.addClass : s.removeClass;
                z.forEach((function(t) {
                    e(t, $)
                }))
            })), u) : u
        }, this.removeClassToggle = function(t) {
            return t && z.forEach((function(t) {
                s.removeClass(t, $)
            })), u.off("start.internal_class end.internal_class"), $ = void 0, z = [], u
        }, v(), u
    };
    var n = {
        defaults: {
            duration: 0,
            offset: 0,
            triggerElement: void 0,
            triggerHook: .5,
            reverse: !0,
            loglevel: 2
        },
        validate: {
            offset: function(t) {
                if (t = parseFloat(t), !s.type.Number(t)) throw 0;
                return t
            },
            triggerElement: function(t) {
                if (t = t || void 0) {
                    var e = s.get.elements(t)[0];
                    if (!e) throw 0;
                    t = e
                }
                return t
            },
            triggerHook: function(t) {
                var e = {
                    onCenter: .5,
                    onEnter: 1,
                    onLeave: 0
                };
                if (s.type.Number(t)) t = Math.max(0, Math.min(parseFloat(t), 1));
                else {
                    if (!(t in e)) throw 0;
                    t = e[t]
                }
                return t
            },
            reverse: function(t) {
                return !!t
            }
        },
        shifts: ["duration", "offset", "triggerHook"]
    };
    t.Scene.addOption = function(t, e, i, s) {
        t in n.defaults || (n.defaults[t] = e, n.validate[t] = i, s && n.shifts.push(t))
    }, t.Scene.extend = function(e) {
        var i = this;
        t.Scene = function() {
            return i.apply(this, arguments), this.$super = s.extend({}, this), e.apply(this, arguments) || this
        }, s.extend(t.Scene, i), t.Scene.prototype = i.prototype, t.Scene.prototype.constructor = t.Scene
    }, t.Event = function(t, e, i, n) {
        for (var s in n = n || {}) this[s] = n[s];
        return this.type = t, this.target = this.currentTarget = i, this.namespace = e || "", this.timeStamp = this.timestamp = Date.now(), this
    };
    var s = t._util = function(t) {
        var e, i = {},
            n = function(t) {
                return parseFloat(t) || 0
            },
            s = function(e) {
                return e.currentStyle ? e.currentStyle : t.getComputedStyle(e)
            },
            r = function(e, i, r, o) {
                if ((i = i === document ? t : i) === t) o = !1;
                else if (!u.DomElement(i)) return 0;
                e = e.charAt(0).toUpperCase() + e.substr(1).toLowerCase();
                var a = (r ? i["offset" + e] || i["outer" + e] : i["client" + e] || i["inner" + e]) || 0;
                if (r && o) {
                    var l = s(i);
                    a += "Height" === e ? n(l.marginTop) + n(l.marginBottom) : n(l.marginLeft) + n(l.marginRight)
                }
                return a
            },
            o = function(t) {
                return t.replace(/^[^a-z]+([a-z])/g, "$1").replace(/-([a-z])/g, (function(t) {
                    return t[1].toUpperCase()
                }))
            };
        i.extend = function(t) {
            for (t = t || {}, e = 1; e < arguments.length; e++)
                if (arguments[e])
                    for (var i in arguments[e]) arguments[e].hasOwnProperty(i) && (t[i] = arguments[e][i]);
            return t
        }, i.isMarginCollapseType = function(t) {
            return ["block", "flex", "list-item", "table", "-webkit-box"].indexOf(t) > -1
        };
        var a = 0,
            l = ["ms", "moz", "webkit", "o"],
            c = t.requestAnimationFrame,
            h = t.cancelAnimationFrame;
        for (e = 0; !c && e < l.length; ++e) c = t[l[e] + "RequestAnimationFrame"], h = t[l[e] + "CancelAnimationFrame"] || t[l[e] + "CancelRequestAnimationFrame"];
        c || (c = function(e) {
            var i = (new Date).getTime(),
                n = Math.max(0, 16 - (i - a)),
                s = t.setTimeout((function() {
                    e(i + n)
                }), n);
            return a = i + n, s
        }), h || (h = function(e) {
            t.clearTimeout(e)
        }), i.rAF = c.bind(t), i.cAF = h.bind(t);
        var u = i.type = function(t) {
            return Object.prototype.toString.call(t).replace(/^\[object (.+)\]$/, "$1").toLowerCase()
        };
        u.String = function(t) {
            return "string" === u(t)
        }, u.Function = function(t) {
            return "function" === u(t)
        }, u.Array = function(t) {
            return Array.isArray(t)
        }, u.Number = function(t) {
            return !u.Array(t) && t - parseFloat(t) + 1 >= 0
        }, u.DomElement = function(t) {
            return "object" == typeof HTMLElement ? t instanceof HTMLElement : t && "object" == typeof t && null !== t && 1 === t.nodeType && "string" == typeof t.nodeName
        };
        var p = i.get = {};
        return p.elements = function(e) {
            var i = [];
            if (u.String(e)) try {
                e = document.querySelectorAll(e)
            } catch (t) {
                return i
            }
            if ("nodelist" === u(e) || u.Array(e))
                for (var n = 0, s = i.length = e.length; s > n; n++) {
                    var r = e[n];
                    i[n] = u.DomElement(r) ? r : p.elements(r)
                } else(u.DomElement(e) || e === document || e === t) && (i = [e]);
            return i
        }, p.scrollTop = function(e) {
            return e && "number" == typeof e.scrollTop ? e.scrollTop : t.pageYOffset || 0
        }, p.scrollLeft = function(e) {
            return e && "number" == typeof e.scrollLeft ? e.scrollLeft : t.pageXOffset || 0
        }, p.width = function(t, e, i) {
            return r("width", t, e, i)
        }, p.height = function(t, e, i) {
            return r("height", t, e, i)
        }, p.offset = function(t, e) {
            var i = {
                top: 0,
                left: 0
            };
            if (t && t.getBoundingClientRect) {
                var n = t.getBoundingClientRect();
                i.top = n.top, i.left = n.left, e || (i.top += p.scrollTop(), i.left += p.scrollLeft())
            }
            return i
        }, i.addClass = function(t, e) {
            e && (t.classList ? t.classList.add(e) : t.className += " " + e)
        }, i.removeClass = function(t, e) {
            e && (t.classList ? t.classList.remove(e) : t.className = t.className.replace(RegExp("(^|\\b)" + e.split(" ").join("|") + "(\\b|$)", "gi"), " "))
        }, i.css = function(t, e) {
            if (u.String(e)) return s(t)[o(e)];
            if (u.Array(e)) {
                var i = {},
                    n = s(t);
                return e.forEach((function(t) {
                    i[t] = n[o(t)]
                })), i
            }
            for (var r in e) {
                var a = e[r];
                a == parseFloat(a) && (a += "px"), t.style[o(r)] = a
            }
        }, i
    }(window || {});
    return t
})),
function(t, e) {
    "function" == typeof define && define.amd ? define(["ScrollMagic", "TweenMax", "TimelineMax"], e) : "object" == typeof exports ? (require("gsap"), e(require("scrollmagic"), TweenMax, TimelineMax)) : e(t.ScrollMagic || t.jQuery && t.jQuery.ScrollMagic, t.TweenMax || t.TweenLite, t.TimelineMax || t.TimelineLite)
}(this, (function(t, e, i) {
    "use strict";
    t.Scene.addOption("tweenChanges", !1, (function(t) {
        return !!t
    })), t.Scene.extend((function() {
        var t, n = this;
        n.on("progress.plugin_gsap", (function() {
            s()
        })), n.on("destroy.plugin_gsap", (function(t) {
            n.removeTween(t.reset)
        }));
        var s = function() {
            if (t) {
                var e = n.progress(),
                    i = n.state();
                t.repeat && -1 === t.repeat() ? "DURING" === i && t.paused() ? t.play() : "DURING" === i || t.paused() || t.pause() : e != t.progress() && (0 === n.duration() ? e > 0 ? t.play() : t.reverse() : n.tweenChanges() && t.tweenTo ? t.tweenTo(e * t.duration()) : t.progress(e).pause())
            }
        };
        n.setTween = function(r, o, a) {
            var l;
            arguments.length > 1 && (arguments.length < 3 && (a = o, o = 1), r = e.to(r, o, a));
            try {
                (l = i ? new i({
                    smoothChildTiming: !0
                }).add(r) : r).pause()
            } catch (t) {
                return n
            }
            return t && n.removeTween(), t = l, r.repeat && -1 === r.repeat() && (t.repeat(-1), t.yoyo(r.yoyo())), s(), n
        }, n.removeTween = function(e) {
            return t && (e && t.progress(0).pause(), t.kill(), t = void 0), n
        }
    }))
})),
function() {
    "use strict";

    function t(t) {
        this.time = t.time, this.target = t.target, this.rootBounds = t.rootBounds, this.boundingClientRect = t.boundingClientRect, this.intersectionRect = t.intersectionRect || l(), this.isIntersecting = !!t.intersectionRect;
        var e = this.boundingClientRect,
            i = e.width * e.height,
            n = this.intersectionRect,
            s = n.width * n.height;
        this.intersectionRatio = i ? Number((s / i).toFixed(4)) : this.isIntersecting ? 1 : 0
    }

    function e(t, e) {
        var i = e || {};
        if ("function" != typeof t) throw new Error("callback must be a function");
        if (i.root && 1 != i.root.nodeType) throw new Error("root must be an Element");
        this._checkForIntersections = n(this._checkForIntersections.bind(this), this.THROTTLE_TIMEOUT), this._callback = t, this._observationTargets = [], this._queuedEntries = [], this._rootMarginValues = this._parseRootMargin(i.rootMargin), this.thresholds = this._initThresholds(i.threshold), this.root = i.root || null, this.rootMargin = this._rootMarginValues.map((function(t) {
            return t.value + t.unit
        })).join(" ")
    }

    function i() {
        return window.performance && performance.now && performance.now()
    }

    function n(t, e) {
        var i = null;
        return function() {
            i || (i = setTimeout((function() {
                t(), i = null
            }), e))
        }
    }

    function s(t, e, i, n) {
        "function" == typeof t.addEventListener ? t.addEventListener(e, i, n || !1) : "function" == typeof t.attachEvent && t.attachEvent("on" + e, i)
    }

    function r(t, e, i, n) {
        "function" == typeof t.removeEventListener ? t.removeEventListener(e, i, n || !1) : "function" == typeof t.detatchEvent && t.detatchEvent("on" + e, i)
    }

    function o(t, e) {
        var i = Math.max(t.top, e.top),
            n = Math.min(t.bottom, e.bottom),
            s = Math.max(t.left, e.left),
            r = Math.min(t.right, e.right),
            o = r - s,
            a = n - i;
        return o >= 0 && a >= 0 && {
            top: i,
            bottom: n,
            left: s,
            right: r,
            width: o,
            height: a
        }
    }

    function a(t) {
        var e;
        try {
            e = t.getBoundingClientRect()
        } catch (t) {}
        return e ? (e.width && e.height || (e = {
            top: e.top,
            right: e.right,
            bottom: e.bottom,
            left: e.left,
            width: e.right - e.left,
            height: e.bottom - e.top
        }), e) : l()
    }

    function l() {
        return {
            top: 0,
            bottom: 0,
            left: 0,
            right: 0,
            width: 0,
            height: 0
        }
    }

    function c(t, e) {
        for (var i = e; i;) {
            if (i == t) return !0;
            i = h(i)
        }
        return !1
    }

    function h(t) {
        var e = t.parentNode;
        return e && 11 == e.nodeType && e.host ? e.host : e && e.assignedSlot ? e.assignedSlot.parentNode : e
    }
    if ("object" == typeof window)
        if ("IntersectionObserver" in window && "IntersectionObserverEntry" in window && "intersectionRatio" in window.IntersectionObserverEntry.prototype) "isIntersecting" in window.IntersectionObserverEntry.prototype || Object.defineProperty(window.IntersectionObserverEntry.prototype, "isIntersecting", {
            get: function() {
                return this.intersectionRatio > 0
            }
        });
        else {
            var u = window.document,
                p = [];
            e.prototype.THROTTLE_TIMEOUT = 100, e.prototype.POLL_INTERVAL = null, e.prototype.USE_MUTATION_OBSERVER = !0, e.prototype.observe = function(t) {
                if (!this._observationTargets.some((function(e) {
                        return e.element == t
                    }))) {
                    if (!t || 1 != t.nodeType) throw new Error("target must be an Element");
                    this._registerInstance(), this._observationTargets.push({
                        element: t,
                        entry: null
                    }), this._monitorIntersections(), this._checkForIntersections()
                }
            }, e.prototype.unobserve = function(t) {
                this._observationTargets = this._observationTargets.filter((function(e) {
                    return e.element != t
                })), this._observationTargets.length || (this._unmonitorIntersections(), this._unregisterInstance())
            }, e.prototype.disconnect = function() {
                this._observationTargets = [], this._unmonitorIntersections(), this._unregisterInstance()
            }, e.prototype.takeRecords = function() {
                var t = this._queuedEntries.slice();
                return this._queuedEntries = [], t
            }, e.prototype._initThresholds = function(t) {
                var e = t || [0];
                return Array.isArray(e) || (e = [e]), e.sort().filter((function(t, e, i) {
                    if ("number" != typeof t || isNaN(t) || t < 0 || t > 1) throw new Error("threshold must be a number between 0 and 1 inclusively");
                    return t !== i[e - 1]
                }))
            }, e.prototype._parseRootMargin = function(t) {
                var e = (t || "0px").split(/\s+/).map((function(t) {
                    var e = /^(-?\d*\.?\d+)(px|%)$/.exec(t);
                    if (!e) throw new Error("rootMargin must be specified in pixels or percent");
                    return {
                        value: parseFloat(e[1]),
                        unit: e[2]
                    }
                }));
                return e[1] = e[1] || e[0], e[2] = e[2] || e[0], e[3] = e[3] || e[1], e
            }, e.prototype._monitorIntersections = function() {
                this._monitoringIntersections || (this._monitoringIntersections = !0, this.POLL_INTERVAL ? this._monitoringInterval = setInterval(this._checkForIntersections, this.POLL_INTERVAL) : (s(window, "resize", this._checkForIntersections, !0), s(u, "scroll", this._checkForIntersections, !0), this.USE_MUTATION_OBSERVER && "MutationObserver" in window && (this._domObserver = new MutationObserver(this._checkForIntersections), this._domObserver.observe(u, {
                    attributes: !0,
                    childList: !0,
                    characterData: !0,
                    subtree: !0
                }))))
            }, e.prototype._unmonitorIntersections = function() {
                this._monitoringIntersections && (this._monitoringIntersections = !1, clearInterval(this._monitoringInterval), this._monitoringInterval = null, r(window, "resize", this._checkForIntersections, !0), r(u, "scroll", this._checkForIntersections, !0), this._domObserver && (this._domObserver.disconnect(), this._domObserver = null))
            }, e.prototype._checkForIntersections = function() {
                var e = this._rootIsInDom(),
                    n = e ? this._getRootRect() : l();
                this._observationTargets.forEach((function(s) {
                    var r = s.element,
                        o = a(r),
                        l = this._rootContainsTarget(r),
                        c = s.entry,
                        h = e && l && this._computeTargetAndRootIntersection(r, n),
                        u = s.entry = new t({
                            time: i(),
                            target: r,
                            boundingClientRect: o,
                            rootBounds: n,
                            intersectionRect: h
                        });
                    c ? e && l ? this._hasCrossedThreshold(c, u) && this._queuedEntries.push(u) : c && c.isIntersecting && this._queuedEntries.push(u) : this._queuedEntries.push(u)
                }), this), this._queuedEntries.length && this._callback(this.takeRecords(), this)
            }, e.prototype._computeTargetAndRootIntersection = function(t, e) {
                if ("none" != window.getComputedStyle(t).display) {
                    for (var i = a(t), n = h(t), s = !1; !s;) {
                        var r = null,
                            l = 1 == n.nodeType ? window.getComputedStyle(n) : {};
                        if ("none" == l.display) return;
                        if (n == this.root || n == u ? (s = !0, r = e) : n != u.body && n != u.documentElement && "visible" != l.overflow && (r = a(n)), r && !(i = o(r, i))) break;
                        n = h(n)
                    }
                    return i
                }
            }, e.prototype._getRootRect = function() {
                var t;
                if (this.root) t = a(this.root);
                else {
                    var e = u.documentElement,
                        i = u.body;
                    t = {
                        top: 0,
                        left: 0,
                        right: e.clientWidth || i.clientWidth,
                        width: e.clientWidth || i.clientWidth,
                        bottom: e.clientHeight || i.clientHeight,
                        height: e.clientHeight || i.clientHeight
                    }
                }
                return this._expandRectByRootMargin(t)
            }, e.prototype._expandRectByRootMargin = function(t) {
                var e = this._rootMarginValues.map((function(e, i) {
                        return "px" == e.unit ? e.value : e.value * (i % 2 ? t.width : t.height) / 100
                    })),
                    i = {
                        top: t.top - e[0],
                        right: t.right + e[1],
                        bottom: t.bottom + e[2],
                        left: t.left - e[3]
                    };
                return i.width = i.right - i.left, i.height = i.bottom - i.top, i
            }, e.prototype._hasCrossedThreshold = function(t, e) {
                var i = t && t.isIntersecting ? t.intersectionRatio || 0 : -1,
                    n = e.isIntersecting ? e.intersectionRatio || 0 : -1;
                if (i !== n)
                    for (var s = 0; s < this.thresholds.length; s++) {
                        var r = this.thresholds[s];
                        if (r == i || r == n || r < i != r < n) return !0
                    }
            }, e.prototype._rootIsInDom = function() {
                return !this.root || c(u, this.root)
            }, e.prototype._rootContainsTarget = function(t) {
                return c(this.root || u, t)
            }, e.prototype._registerInstance = function() {
                p.indexOf(this) < 0 && p.push(this)
            }, e.prototype._unregisterInstance = function() {
                var t = p.indexOf(this); - 1 != t && p.splice(t, 1)
            }, window.IntersectionObserver = e, window.IntersectionObserverEntry = t
        }
}(), ((_gsScope = "undefined" != typeof module && module.exports && "undefined" != typeof global ? global : this || window)._gsQueue || (_gsScope._gsQueue = [])).push((function() {
        "use strict";
        _gsScope._gsDefine("easing.CustomEase", ["easing.Ease"], (function(t) {
            var e = /(?:(-|-=|\+=)?\d*\.?\d*(?:e[\-+]?\d+)?)[0-9]/gi,
                i = /[achlmqstvz]|(-?\d*\.?\d*(?:e[\-+]?\d+)?)[0-9]/gi,
                n = /[\+\-]?\d*\.?\d+e[\+\-]?\d+/gi,
                s = /[cLlsS]/g,
                r = "CustomEase only accepts Cubic Bezier data.",
                o = function(t, e, i, n, s, r, a, l, c, h, u) {
                    var p, d = (t + i) / 2,
                        f = (e + n) / 2,
                        m = (i + s) / 2,
                        _ = (n + r) / 2,
                        g = (s + a) / 2,
                        v = (r + l) / 2,
                        y = (d + m) / 2,
                        w = (f + _) / 2,
                        T = (m + g) / 2,
                        x = (_ + v) / 2,
                        b = (y + T) / 2,
                        k = (w + x) / 2,
                        S = a - t,
                        P = l - e,
                        C = Math.abs((i - a) * P - (n - l) * S),
                        O = Math.abs((s - a) * P - (r - l) * S);
                    return h || (h = [{
                        x: t,
                        y: e
                    }, {
                        x: a,
                        y: l
                    }], u = 1), h.splice(u || h.length - 1, 0, {
                        x: b,
                        y: k
                    }), (C + O) * (C + O) > c * (S * S + P * P) && (p = h.length, o(t, e, d, f, y, w, b, k, c, h, u), o(b, k, T, x, g, v, a, l, c, h, u + 1 + (h.length - p))), h
                },
                a = function(t) {
                    var e, s, o, a, l, c, h, u, p, d, f, m = (t + "").replace(n, (function(t) {
                            var e = +t;
                            return 1e-4 > e && e > -1e-4 ? 0 : e
                        })).match(i) || [],
                        _ = [],
                        g = 0,
                        v = 0,
                        y = m.length,
                        w = 2;
                    for (e = 0; y > e; e++)
                        if (p = a, isNaN(m[e]) ? l = (a = m[e].toUpperCase()) !== m[e] : e--, s = +m[e + 1], o = +m[e + 2], l && (s += g, o += v), e || (h = s, u = o), "M" === a) c && c.length < 8 && (_.length -= 1, w = 0), g = h = s, v = u = o, c = [s, o], w = 2, _.push(c), e += 2, a = "L";
                        else if ("C" === a) c || (c = [0, 0]), c[w++] = s, c[w++] = o, l || (g = v = 0), c[w++] = g + 1 * m[e + 3], c[w++] = v + 1 * m[e + 4], c[w++] = g += 1 * m[e + 5], c[w++] = v += 1 * m[e + 6], e += 6;
                    else if ("S" === a) "C" === p || "S" === p ? (d = g - c[w - 4], f = v - c[w - 3], c[w++] = g + d, c[w++] = v + f) : (c[w++] = g, c[w++] = v), c[w++] = s, c[w++] = o, l || (g = v = 0), c[w++] = g += 1 * m[e + 3], c[w++] = v += 1 * m[e + 4], e += 4;
                    else {
                        if ("L" !== a && "Z" !== a) throw r;
                        "Z" === a && (s = h, o = u, c.closed = !0), ("L" === a || Math.abs(g - s) > .5 || Math.abs(v - o) > .5) && (c[w++] = g + (s - g) / 3, c[w++] = v + (o - v) / 3, c[w++] = g + 2 * (s - g) / 3, c[w++] = v + 2 * (o - v) / 3, c[w++] = s, c[w++] = o, "L" === a && (e += 2)), g = s, v = o
                    }
                    return _[0]
                },
                l = function(t) {
                    var e, i = t.length,
                        n = 999999999999;
                    for (e = 1; i > e; e += 6) + t[e] < n && (n = +t[e]);
                    return n
                },
                c = function(t, e, i) {
                    i || 0 === i || (i = Math.max(+t[t.length - 1], +t[1]));
                    var n, s = -1 * +t[0],
                        r = -i,
                        o = t.length,
                        a = 1 / (+t[o - 2] + s),
                        c = -e || (Math.abs(+t[o - 1] - +t[1]) < .01 * (+t[o - 2] - +t[0]) ? l(t) + r : +t[o - 1] + r);
                    for (c = c ? 1 / c : -a, n = 0; o > n; n += 2) t[n] = (+t[n] + s) * a, t[n + 1] = (+t[n + 1] + r) * c
                },
                h = function(t) {
                    var e = this.lookup[t * this.l | 0] || this.lookup[this.l - 1];
                    return e.nx < t && (e = e.n), e.y + (t - e.x) / e.cx * e.cy
                },
                u = function(e, i, n) {
                    this._calcEnd = !0, this.id = e, e && (t.map[e] = this), this.getRatio = h, this.setData(i, n)
                },
                p = u.prototype = new t;
            return p.constructor = u, p.setData = function(t, i) {
                var n, l, h, u, p, d, f, m, _, g, v = (t = t || "0,0,1,1").match(e),
                    y = 1,
                    w = [];
                if (g = (i = i || {}).precision || 1, this.data = t, this.lookup = [], this.points = w, this.fast = 1 >= g, (s.test(t) || -1 !== t.indexOf("M") && -1 === t.indexOf("C")) && (v = a(t)), 4 === (n = v.length)) v.unshift(0, 0), v.push(1, 1), n = 8;
                else if ((n - 2) % 6) throw r;
                for ((0 != +v[0] || 1 != +v[n - 2]) && c(v, i.height, i.originY), this.rawBezier = v, u = 2; n > u; u += 6) l = {
                    x: +v[u - 2],
                    y: +v[u - 1]
                }, h = {
                    x: +v[u + 4],
                    y: +v[u + 5]
                }, w.push(l, h), o(l.x, l.y, +v[u], +v[u + 1], +v[u + 2], +v[u + 3], h.x, h.y, 1 / (2e5 * g), w, w.length - 1);
                for (n = w.length, u = 0; n > u; u++) f = w[u], m = w[u - 1] || f, f.x > m.x || m.y !== f.y && m.x === f.x || f === m ? (m.cx = f.x - m.x, m.cy = f.y - m.y, m.n = f, m.nx = f.x, this.fast && u > 1 && Math.abs(m.cy / m.cx - w[u - 2].cy / w[u - 2].cx) > 2 && (this.fast = !1), m.cx < y && (m.cx ? y = m.cx : (m.cx = .001, u === n - 1 && (m.x -= .001, y = Math.min(y, .001), this.fast = !1)))) : (w.splice(u--, 1), n--);
                if (n = 1 / y + 1 | 0, this.l = n, p = 1 / n, d = 0, f = w[0], this.fast) {
                    for (u = 0; n > u; u++) _ = u * p, f.nx < _ && (f = w[++d]), l = f.y + (_ - f.x) / f.cx * f.cy, this.lookup[u] = {
                        x: _,
                        cx: p,
                        y: l,
                        cy: 0,
                        nx: 9
                    }, u && (this.lookup[u - 1].cy = l - this.lookup[u - 1].y);
                    this.lookup[n - 1].cy = w[w.length - 1].y - l
                } else {
                    for (u = 0; n > u; u++) f.nx < u * p && (f = w[++d]), this.lookup[u] = f;
                    d < w.length - 1 && (this.lookup[u - 1] = w[w.length - 2])
                }
                return this._calcEnd = 1 !== w[w.length - 1].y || 0 !== w[0].y, this
            }, p.getRatio = h, p.getSVGData = function(t) {
                return u.getSVGData(this, t)
            }, u.create = function(t, e, i) {
                return new u(t, e, i)
            }, u.version = "0.2.2", u.bezierToPoints = o, u.get = function(e) {
                return t.map[e]
            }, u.getSVGData = function(e, i) {
                var n, s, r, o, a, l, c, h, u, p, d = 1e3,
                    f = (i = i || {}).width || 100,
                    m = i.height || 100,
                    _ = i.x || 0,
                    g = (i.y || 0) + m,
                    v = i.path;
                if (i.invert && (m = -m, g = 0), (e = e.getRatio ? e : t.map[e] || console.log("No ease found: ", e)).rawBezier) {
                    for (n = [], c = e.rawBezier.length, r = 0; c > r; r += 2) n.push(((_ + e.rawBezier[r] * f) * d | 0) / d + "," + ((g + e.rawBezier[r + 1] * -m) * d | 0) / d);
                    n[0] = "M" + n[0], n[1] = "C" + n[1]
                } else
                    for (n = ["M" + _ + "," + g], o = 1 / (c = Math.max(5, 200 * (i.precision || 1))), h = 5 / (c += 2), u = ((_ + o * f) * d | 0) / d, s = ((p = ((g + e.getRatio(o) * -m) * d | 0) / d) - g) / (u - _), r = 2; c > r; r++) a = ((_ + r * o * f) * d | 0) / d, l = ((g + e.getRatio(r * o) * -m) * d | 0) / d, (Math.abs((l - p) / (a - u) - s) > h || r === c - 1) && (n.push(u + "," + p), s = (l - p) / (a - u)), u = a, p = l;
                return v && ("string" == typeof v ? document.querySelector(v) : v).setAttribute("d", n.join(" ")), n.join(" ")
            }, u
        }), !0)
    })), _gsScope._gsDefine && _gsScope._gsQueue.pop()(),
    function(t) {
        "use strict";
        var e = function() {
            return (_gsScope.GreenSockGlobals || _gsScope)[t]
        };
        "undefined" != typeof module && module.exports ? (require("../TweenLite.min.js"), module.exports = e()) : "function" == typeof define && define.amd && define(["TweenLite"], e)
    }("CustomEase"), ((_gsScope = "undefined" != typeof module && module.exports && "undefined" != typeof global ? global : this || window)._gsQueue || (_gsScope._gsQueue = [])).push((function() {
        "use strict";
        var t, e, i, n, s, r, o, a, l, c, h, u, p, d, f, m, _;
        _gsScope._gsDefine("TweenMax", ["core.Animation", "core.SimpleTimeline", "TweenLite"], (function(t, e, i) {
                var n = function(t) {
                        var e, i = [],
                            n = t.length;
                        for (e = 0; e !== n; i.push(t[e++]));
                        return i
                    },
                    s = function(t, e, i) {
                        var n, s, r = t.cycle;
                        for (n in r) s = r[n], t[n] = "function" == typeof s ? s(i, e[i]) : s[i % s.length];
                        delete t.cycle
                    },
                    r = function(t, e, n) {
                        i.call(this, t, e, n), this._cycle = 0, this._yoyo = !0 === this.vars.yoyo || !!this.vars.yoyoEase, this._repeat = this.vars.repeat || 0, this._repeatDelay = this.vars.repeatDelay || 0, this._repeat && this._uncache(!0), this.render = r.prototype.render
                    },
                    o = 1e-10,
                    a = i._internals,
                    l = a.isSelector,
                    c = a.isArray,
                    h = r.prototype = i.to({}, .1, {}),
                    u = [];
                r.version = "2.0.1", h.constructor = r, h.kill()._gc = !1, r.killTweensOf = r.killDelayedCallsTo = i.killTweensOf, r.getTweensOf = i.getTweensOf, r.lagSmoothing = i.lagSmoothing, r.ticker = i.ticker, r.render = i.render, h.invalidate = function() {
                    return this._yoyo = !0 === this.vars.yoyo || !!this.vars.yoyoEase, this._repeat = this.vars.repeat || 0, this._repeatDelay = this.vars.repeatDelay || 0, this._yoyoEase = null, this._uncache(!0), i.prototype.invalidate.call(this)
                }, h.updateTo = function(t, e) {
                    var n, s = this.ratio,
                        r = this.vars.immediateRender || t.immediateRender;
                    for (n in e && this._startTime < this._timeline._time && (this._startTime = this._timeline._time, this._uncache(!1), this._gc ? this._enabled(!0, !1) : this._timeline.insert(this, this._startTime - this._delay)), t) this.vars[n] = t[n];
                    if (this._initted || r)
                        if (e) this._initted = !1, r && this.render(0, !0, !0);
                        else if (this._gc && this._enabled(!0, !1), this._notifyPluginsOfEnabled && this._firstPT && i._onPluginEvent("_onDisable", this), this._time / this._duration > .998) {
                        var o = this._totalTime;
                        this.render(0, !0, !1), this._initted = !1, this.render(o, !0, !1)
                    } else if (this._initted = !1, this._init(), this._time > 0 || r)
                        for (var a, l = 1 / (1 - s), c = this._firstPT; c;) a = c.s + c.c, c.c *= l, c.s = a - c.c, c = c._next;
                    return this
                }, h.render = function(t, e, n) {
                    this._initted || 0 === this._duration && this.vars.repeat && this.invalidate();
                    var s, r, l, c, h, u, p, d, f, m = this._dirty ? this.totalDuration() : this._totalDuration,
                        _ = this._time,
                        g = this._totalTime,
                        v = this._cycle,
                        y = this._duration,
                        w = this._rawPrevTime;
                    if (t >= m - 1e-7 && t >= 0 ? (this._totalTime = m, this._cycle = this._repeat, this._yoyo && 0 != (1 & this._cycle) ? (this._time = 0, this.ratio = this._ease._calcEnd ? this._ease.getRatio(0) : 0) : (this._time = y, this.ratio = this._ease._calcEnd ? this._ease.getRatio(1) : 1), this._reversed || (s = !0, r = "onComplete", n = n || this._timeline.autoRemoveChildren), 0 === y && (this._initted || !this.vars.lazy || n) && (this._startTime === this._timeline._duration && (t = 0), (0 > w || 0 >= t && t >= -1e-7 || w === o && "isPause" !== this.data) && w !== t && (n = !0, w > o && (r = "onReverseComplete")), this._rawPrevTime = d = !e || t || w === t ? t : o)) : 1e-7 > t ? (this._totalTime = this._time = this._cycle = 0, this.ratio = this._ease._calcEnd ? this._ease.getRatio(0) : 0, (0 !== g || 0 === y && w > 0) && (r = "onReverseComplete", s = this._reversed), 0 > t && (this._active = !1, 0 === y && (this._initted || !this.vars.lazy || n) && (w >= 0 && (n = !0), this._rawPrevTime = d = !e || t || w === t ? t : o)), this._initted || (n = !0)) : (this._totalTime = this._time = t, 0 !== this._repeat && (c = y + this._repeatDelay, this._cycle = this._totalTime / c >> 0, 0 !== this._cycle && this._cycle === this._totalTime / c && t >= g && this._cycle--, this._time = this._totalTime - this._cycle * c, this._yoyo && 0 != (1 & this._cycle) && (this._time = y - this._time, (f = this._yoyoEase || this.vars.yoyoEase) && (this._yoyoEase || (!0 !== f || this._initted ? this._yoyoEase = f = !0 === f ? this._ease : f instanceof Ease ? f : Ease.map[f] : (f = this.vars.ease, this._yoyoEase = f = f ? f instanceof Ease ? f : "function" == typeof f ? new Ease(f, this.vars.easeParams) : Ease.map[f] || i.defaultEase : i.defaultEase)), this.ratio = f ? 1 - f.getRatio((y - this._time) / y) : 0)), this._time > y ? this._time = y : this._time < 0 && (this._time = 0)), this._easeType && !f ? (h = this._time / y, (1 === (u = this._easeType) || 3 === u && h >= .5) && (h = 1 - h), 3 === u && (h *= 2), 1 === (p = this._easePower) ? h *= h : 2 === p ? h *= h * h : 3 === p ? h *= h * h * h : 4 === p && (h *= h * h * h * h), 1 === u ? this.ratio = 1 - h : 2 === u ? this.ratio = h : this._time / y < .5 ? this.ratio = h / 2 : this.ratio = 1 - h / 2) : f || (this.ratio = this._ease.getRatio(this._time / y))), _ !== this._time || n || v !== this._cycle) {
                        if (!this._initted) {
                            if (this._init(), !this._initted || this._gc) return;
                            if (!n && this._firstPT && (!1 !== this.vars.lazy && this._duration || this.vars.lazy && !this._duration)) return this._time = _, this._totalTime = g, this._rawPrevTime = w, this._cycle = v, a.lazyTweens.push(this), void(this._lazy = [t, e]);
                            !this._time || s || f ? s && this._ease._calcEnd && !f && (this.ratio = this._ease.getRatio(0 === this._time ? 0 : 1)) : this.ratio = this._ease.getRatio(this._time / y)
                        }
                        for (!1 !== this._lazy && (this._lazy = !1), this._active || !this._paused && this._time !== _ && t >= 0 && (this._active = !0), 0 === g && (2 === this._initted && t > 0 && this._init(), this._startAt && (t >= 0 ? this._startAt.render(t, !0, n) : r || (r = "_dummyGS")), this.vars.onStart && (0 !== this._totalTime || 0 === y) && (e || this._callback("onStart"))), l = this._firstPT; l;) l.f ? l.t[l.p](l.c * this.ratio + l.s) : l.t[l.p] = l.c * this.ratio + l.s, l = l._next;
                        this._onUpdate && (0 > t && this._startAt && this._startTime && this._startAt.render(t, !0, n), e || (this._totalTime !== g || r) && this._callback("onUpdate")), this._cycle !== v && (e || this._gc || this.vars.onRepeat && this._callback("onRepeat")), r && (!this._gc || n) && (0 > t && this._startAt && !this._onUpdate && this._startTime && this._startAt.render(t, !0, n), s && (this._timeline.autoRemoveChildren && this._enabled(!1, !1), this._active = !1), !e && this.vars[r] && this._callback(r), 0 === y && this._rawPrevTime === o && d !== o && (this._rawPrevTime = 0))
                    } else g !== this._totalTime && this._onUpdate && (e || this._callback("onUpdate"))
                }, r.to = function(t, e, i) {
                    return new r(t, e, i)
                }, r.from = function(t, e, i) {
                    return i.runBackwards = !0, i.immediateRender = 0 != i.immediateRender, new r(t, e, i)
                }, r.fromTo = function(t, e, i, n) {
                    return n.startAt = i, n.immediateRender = 0 != n.immediateRender && 0 != i.immediateRender, new r(t, e, n)
                }, r.staggerTo = r.allTo = function(t, e, o, a, h, p, d) {
                    a = a || 0;
                    var f, m, _, g, v = 0,
                        y = [],
                        w = function() {
                            o.onComplete && o.onComplete.apply(o.onCompleteScope || this, arguments), h.apply(d || o.callbackScope || this, p || u)
                        },
                        T = o.cycle,
                        x = o.startAt && o.startAt.cycle;
                    for (c(t) || ("string" == typeof t && (t = i.selector(t) || t), l(t) && (t = n(t))), t = t || [], 0 > a && ((t = n(t)).reverse(), a *= -1), f = t.length - 1, _ = 0; f >= _; _++) {
                        for (g in m = {}, o) m[g] = o[g];
                        if (T && (s(m, t, _), null != m.duration && (e = m.duration, delete m.duration)), x) {
                            for (g in x = m.startAt = {}, o.startAt) x[g] = o.startAt[g];
                            s(m.startAt, t, _)
                        }
                        m.delay = v + (m.delay || 0), _ === f && h && (m.onComplete = w), y[_] = new r(t[_], e, m), v += a
                    }
                    return y
                }, r.staggerFrom = r.allFrom = function(t, e, i, n, s, o, a) {
                    return i.runBackwards = !0, i.immediateRender = 0 != i.immediateRender, r.staggerTo(t, e, i, n, s, o, a)
                }, r.staggerFromTo = r.allFromTo = function(t, e, i, n, s, o, a, l) {
                    return n.startAt = i, n.immediateRender = 0 != n.immediateRender && 0 != i.immediateRender, r.staggerTo(t, e, n, s, o, a, l)
                }, r.delayedCall = function(t, e, i, n, s) {
                    return new r(e, 0, {
                        delay: t,
                        onComplete: e,
                        onCompleteParams: i,
                        callbackScope: n,
                        onReverseComplete: e,
                        onReverseCompleteParams: i,
                        immediateRender: !1,
                        useFrames: s,
                        overwrite: 0
                    })
                }, r.set = function(t, e) {
                    return new r(t, 0, e)
                }, r.isTweening = function(t) {
                    return i.getTweensOf(t, !0).length > 0
                };
                var p = function(t, e) {
                        for (var n = [], s = 0, r = t._first; r;) r instanceof i ? n[s++] = r : (e && (n[s++] = r), s = (n = n.concat(p(r, e))).length), r = r._next;
                        return n
                    },
                    d = r.getAllTweens = function(e) {
                        return p(t._rootTimeline, e).concat(p(t._rootFramesTimeline, e))
                    };
                r.killAll = function(t, i, n, s) {
                    null == i && (i = !0), null == n && (n = !0);
                    var r, o, a, l = d(0 != s),
                        c = l.length,
                        h = i && n && s;
                    for (a = 0; c > a; a++) o = l[a], (h || o instanceof e || (r = o.target === o.vars.onComplete) && n || i && !r) && (t ? o.totalTime(o._reversed ? 0 : o.totalDuration()) : o._enabled(!1, !1))
                }, r.killChildTweensOf = function(t, e) {
                    if (null != t) {
                        var s, o, h, u, p, d = a.tweenLookup;
                        if ("string" == typeof t && (t = i.selector(t) || t), l(t) && (t = n(t)), c(t))
                            for (u = t.length; --u > -1;) r.killChildTweensOf(t[u], e);
                        else {
                            for (h in s = [], d)
                                for (o = d[h].target.parentNode; o;) o === t && (s = s.concat(d[h].tweens)), o = o.parentNode;
                            for (p = s.length, u = 0; p > u; u++) e && s[u].totalTime(s[u].totalDuration()), s[u]._enabled(!1, !1)
                        }
                    }
                };
                var f = function(t, i, n, s) {
                    i = !1 !== i, n = !1 !== n;
                    for (var r, o, a = d(s = !1 !== s), l = i && n && s, c = a.length; --c > -1;) o = a[c], (l || o instanceof e || (r = o.target === o.vars.onComplete) && n || i && !r) && o.paused(t)
                };
                return r.pauseAll = function(t, e, i) {
                    f(!0, t, e, i)
                }, r.resumeAll = function(t, e, i) {
                    f(!1, t, e, i)
                }, r.globalTimeScale = function(e) {
                    var n = t._rootTimeline,
                        s = i.ticker.time;
                    return arguments.length ? (e = e || o, n._startTime = s - (s - n._startTime) * n._timeScale / e, n = t._rootFramesTimeline, s = i.ticker.frame, n._startTime = s - (s - n._startTime) * n._timeScale / e, n._timeScale = t._rootTimeline._timeScale = e, e) : n._timeScale
                }, h.progress = function(t, e) {
                    return arguments.length ? this.totalTime(this.duration() * (this._yoyo && 0 != (1 & this._cycle) ? 1 - t : t) + this._cycle * (this._duration + this._repeatDelay), e) : this._time / this.duration()
                }, h.totalProgress = function(t, e) {
                    return arguments.length ? this.totalTime(this.totalDuration() * t, e) : this._totalTime / this.totalDuration()
                }, h.time = function(t, e) {
                    return arguments.length ? (this._dirty && this.totalDuration(), t > this._duration && (t = this._duration), this._yoyo && 0 != (1 & this._cycle) ? t = this._duration - t + this._cycle * (this._duration + this._repeatDelay) : 0 !== this._repeat && (t += this._cycle * (this._duration + this._repeatDelay)), this.totalTime(t, e)) : this._time
                }, h.duration = function(e) {
                    return arguments.length ? t.prototype.duration.call(this, e) : this._duration
                }, h.totalDuration = function(t) {
                    return arguments.length ? -1 === this._repeat ? this : this.duration((t - this._repeat * this._repeatDelay) / (this._repeat + 1)) : (this._dirty && (this._totalDuration = -1 === this._repeat ? 999999999999 : this._duration * (this._repeat + 1) + this._repeatDelay * this._repeat, this._dirty = !1), this._totalDuration)
                }, h.repeat = function(t) {
                    return arguments.length ? (this._repeat = t, this._uncache(!0)) : this._repeat
                }, h.repeatDelay = function(t) {
                    return arguments.length ? (this._repeatDelay = t, this._uncache(!0)) : this._repeatDelay
                }, h.yoyo = function(t) {
                    return arguments.length ? (this._yoyo = t, this) : this._yoyo
                }, r
            }), !0), _gsScope._gsDefine("TimelineLite", ["core.Animation", "core.SimpleTimeline", "TweenLite"], (function(t, e, i) {
                var n = function(t) {
                        e.call(this, t), this._labels = {}, this.autoRemoveChildren = !0 === this.vars.autoRemoveChildren, this.smoothChildTiming = !0 === this.vars.smoothChildTiming, this._sortChildren = !0, this._onUpdate = this.vars.onUpdate;
                        var i, n, s = this.vars;
                        for (n in s) i = s[n], l(i) && -1 !== i.join("").indexOf("{self}") && (s[n] = this._swapSelfInParams(i));
                        l(s.tweens) && this.add(s.tweens, 0, s.align, s.stagger)
                    },
                    s = 1e-10,
                    r = i._internals,
                    o = n._internals = {},
                    a = r.isSelector,
                    l = r.isArray,
                    c = r.lazyTweens,
                    h = r.lazyRender,
                    u = _gsScope._gsDefine.globals,
                    p = function(t) {
                        var e, i = {};
                        for (e in t) i[e] = t[e];
                        return i
                    },
                    d = function(t, e, i) {
                        var n, s, r = t.cycle;
                        for (n in r) s = r[n], t[n] = "function" == typeof s ? s(i, e[i]) : s[i % s.length];
                        delete t.cycle
                    },
                    f = o.pauseCallback = function() {},
                    m = function(t) {
                        var e, i = [],
                            n = t.length;
                        for (e = 0; e !== n; i.push(t[e++]));
                        return i
                    },
                    _ = n.prototype = new e;
                return n.version = "2.0.1", _.constructor = n, _.kill()._gc = _._forcingPlayhead = _._hasPause = !1, _.to = function(t, e, n, s) {
                    var r = n.repeat && u.TweenMax || i;
                    return e ? this.add(new r(t, e, n), s) : this.set(t, n, s)
                }, _.from = function(t, e, n, s) {
                    return this.add((n.repeat && u.TweenMax || i).from(t, e, n), s)
                }, _.fromTo = function(t, e, n, s, r) {
                    var o = s.repeat && u.TweenMax || i;
                    return e ? this.add(o.fromTo(t, e, n, s), r) : this.set(t, s, r)
                }, _.staggerTo = function(t, e, s, r, o, l, c, h) {
                    var u, f, _ = new n({
                            onComplete: l,
                            onCompleteParams: c,
                            callbackScope: h,
                            smoothChildTiming: this.smoothChildTiming
                        }),
                        g = s.cycle;
                    for ("string" == typeof t && (t = i.selector(t) || t), a(t = t || []) && (t = m(t)), 0 > (r = r || 0) && ((t = m(t)).reverse(), r *= -1), f = 0; f < t.length; f++)(u = p(s)).startAt && (u.startAt = p(u.startAt), u.startAt.cycle && d(u.startAt, t, f)), g && (d(u, t, f), null != u.duration && (e = u.duration, delete u.duration)), _.to(t[f], e, u, f * r);
                    return this.add(_, o)
                }, _.staggerFrom = function(t, e, i, n, s, r, o, a) {
                    return i.immediateRender = 0 != i.immediateRender, i.runBackwards = !0, this.staggerTo(t, e, i, n, s, r, o, a)
                }, _.staggerFromTo = function(t, e, i, n, s, r, o, a, l) {
                    return n.startAt = i, n.immediateRender = 0 != n.immediateRender && 0 != i.immediateRender, this.staggerTo(t, e, n, s, r, o, a, l)
                }, _.call = function(t, e, n, s) {
                    return this.add(i.delayedCall(0, t, e, n), s)
                }, _.set = function(t, e, n) {
                    return n = this._parseTimeOrLabel(n, 0, !0), null == e.immediateRender && (e.immediateRender = n === this._time && !this._paused), this.add(new i(t, 0, e), n)
                }, n.exportRoot = function(t, e) {
                    null == (t = t || {}).smoothChildTiming && (t.smoothChildTiming = !0);
                    var s, r, o, a, l = new n(t),
                        c = l._timeline;
                    for (null == e && (e = !0), c._remove(l, !0), l._startTime = 0, l._rawPrevTime = l._time = l._totalTime = c._time, o = c._first; o;) a = o._next, e && o instanceof i && o.target === o.vars.onComplete || (0 > (r = o._startTime - o._delay) && (s = 1), l.add(o, r)), o = a;
                    return c.add(l, 0), s && l.totalDuration(), l
                }, _.add = function(s, r, o, a) {
                    var c, h, u, p, d, f;
                    if ("number" != typeof r && (r = this._parseTimeOrLabel(r, 0, !0, s)), !(s instanceof t)) {
                        if (s instanceof Array || s && s.push && l(s)) {
                            for (o = o || "normal", a = a || 0, c = r, h = s.length, u = 0; h > u; u++) l(p = s[u]) && (p = new n({
                                tweens: p
                            })), this.add(p, c), "string" != typeof p && "function" != typeof p && ("sequence" === o ? c = p._startTime + p.totalDuration() / p._timeScale : "start" === o && (p._startTime -= p.delay())), c += a;
                            return this._uncache(!0)
                        }
                        if ("string" == typeof s) return this.addLabel(s, r);
                        if ("function" != typeof s) throw "Cannot add " + s + " into the timeline; it is not a tween, timeline, function, or string.";
                        s = i.delayedCall(0, s)
                    }
                    if (e.prototype.add.call(this, s, r), s._time && s.render((this.rawTime() - s._startTime) * s._timeScale, !1, !1), (this._gc || this._time === this._duration) && !this._paused && this._duration < this.duration())
                        for (f = (d = this).rawTime() > s._startTime; d._timeline;) f && d._timeline.smoothChildTiming ? d.totalTime(d._totalTime, !0) : d._gc && d._enabled(!0, !1), d = d._timeline;
                    return this
                }, _.remove = function(e) {
                    if (e instanceof t) {
                        this._remove(e, !1);
                        var i = e._timeline = e.vars.useFrames ? t._rootFramesTimeline : t._rootTimeline;
                        return e._startTime = (e._paused ? e._pauseTime : i._time) - (e._reversed ? e.totalDuration() - e._totalTime : e._totalTime) / e._timeScale, this
                    }
                    if (e instanceof Array || e && e.push && l(e)) {
                        for (var n = e.length; --n > -1;) this.remove(e[n]);
                        return this
                    }
                    return "string" == typeof e ? this.removeLabel(e) : this.kill(null, e)
                }, _._remove = function(t, i) {
                    return e.prototype._remove.call(this, t, i), this._last ? this._time > this.duration() && (this._time = this._duration, this._totalTime = this._totalDuration) : this._time = this._totalTime = this._duration = this._totalDuration = 0, this
                }, _.append = function(t, e) {
                    return this.add(t, this._parseTimeOrLabel(null, e, !0, t))
                }, _.insert = _.insertMultiple = function(t, e, i, n) {
                    return this.add(t, e || 0, i, n)
                }, _.appendMultiple = function(t, e, i, n) {
                    return this.add(t, this._parseTimeOrLabel(null, e, !0, t), i, n)
                }, _.addLabel = function(t, e) {
                    return this._labels[t] = this._parseTimeOrLabel(e), this
                }, _.addPause = function(t, e, n, s) {
                    var r = i.delayedCall(0, f, n, s || this);
                    return r.vars.onComplete = r.vars.onReverseComplete = e, r.data = "isPause", this._hasPause = !0, this.add(r, t)
                }, _.removeLabel = function(t) {
                    return delete this._labels[t], this
                }, _.getLabelTime = function(t) {
                    return null != this._labels[t] ? this._labels[t] : -1
                }, _._parseTimeOrLabel = function(e, i, n, s) {
                    var r, o;
                    if (s instanceof t && s.timeline === this) this.remove(s);
                    else if (s && (s instanceof Array || s.push && l(s)))
                        for (o = s.length; --o > -1;) s[o] instanceof t && s[o].timeline === this && this.remove(s[o]);
                    if (r = "number" != typeof e || i ? this.duration() > 99999999999 ? this.recent().endTime(!1) : this._duration : 0, "string" == typeof i) return this._parseTimeOrLabel(i, n && "number" == typeof e && null == this._labels[i] ? e - r : 0, n);
                    if (i = i || 0, "string" != typeof e || !isNaN(e) && null == this._labels[e]) null == e && (e = r);
                    else {
                        if (-1 === (o = e.indexOf("="))) return null == this._labels[e] ? n ? this._labels[e] = r + i : i : this._labels[e] + i;
                        i = parseInt(e.charAt(o - 1) + "1", 10) * Number(e.substr(o + 1)), e = o > 1 ? this._parseTimeOrLabel(e.substr(0, o - 1), 0, n) : r
                    }
                    return Number(e) + i
                }, _.seek = function(t, e) {
                    return this.totalTime("number" == typeof t ? t : this._parseTimeOrLabel(t), !1 !== e)
                }, _.stop = function() {
                    return this.paused(!0)
                }, _.gotoAndPlay = function(t, e) {
                    return this.play(t, e)
                }, _.gotoAndStop = function(t, e) {
                    return this.pause(t, e)
                }, _.render = function(t, e, i) {
                    this._gc && this._enabled(!0, !1);
                    var n, r, o, a, l, u, p, d = this._time,
                        f = this._dirty ? this.totalDuration() : this._totalDuration,
                        m = this._startTime,
                        _ = this._timeScale,
                        g = this._paused;
                    if (d !== this._time && (t += this._time - d), t >= f - 1e-7 && t >= 0) this._totalTime = this._time = f, this._reversed || this._hasPausedChild() || (r = !0, a = "onComplete", l = !!this._timeline.autoRemoveChildren, 0 === this._duration && (0 >= t && t >= -1e-7 || this._rawPrevTime < 0 || this._rawPrevTime === s) && this._rawPrevTime !== t && this._first && (l = !0, this._rawPrevTime > s && (a = "onReverseComplete"))), this._rawPrevTime = this._duration || !e || t || this._rawPrevTime === t ? t : s, t = f + 1e-4;
                    else if (1e-7 > t)
                        if (this._totalTime = this._time = 0, (0 !== d || 0 === this._duration && this._rawPrevTime !== s && (this._rawPrevTime > 0 || 0 > t && this._rawPrevTime >= 0)) && (a = "onReverseComplete", r = this._reversed), 0 > t) this._active = !1, this._timeline.autoRemoveChildren && this._reversed ? (l = r = !0, a = "onReverseComplete") : this._rawPrevTime >= 0 && this._first && (l = !0), this._rawPrevTime = t;
                        else {
                            if (this._rawPrevTime = this._duration || !e || t || this._rawPrevTime === t ? t : s, 0 === t && r)
                                for (n = this._first; n && 0 === n._startTime;) n._duration || (r = !1), n = n._next;
                            t = 0, this._initted || (l = !0)
                        } else {
                        if (this._hasPause && !this._forcingPlayhead && !e) {
                            if (t >= d)
                                for (n = this._first; n && n._startTime <= t && !u;) n._duration || "isPause" !== n.data || n.ratio || 0 === n._startTime && 0 === this._rawPrevTime || (u = n), n = n._next;
                            else
                                for (n = this._last; n && n._startTime >= t && !u;) n._duration || "isPause" === n.data && n._rawPrevTime > 0 && (u = n), n = n._prev;
                            u && (this._time = t = u._startTime, this._totalTime = t + this._cycle * (this._totalDuration + this._repeatDelay))
                        }
                        this._totalTime = this._time = this._rawPrevTime = t
                    }
                    if (this._time !== d && this._first || i || l || u) {
                        if (this._initted || (this._initted = !0), this._active || !this._paused && this._time !== d && t > 0 && (this._active = !0), 0 === d && this.vars.onStart && (0 === this._time && this._duration || e || this._callback("onStart")), (p = this._time) >= d)
                            for (n = this._first; n && (o = n._next, p === this._time && (!this._paused || g));)(n._active || n._startTime <= p && !n._paused && !n._gc) && (u === n && this.pause(), n._reversed ? n.render((n._dirty ? n.totalDuration() : n._totalDuration) - (t - n._startTime) * n._timeScale, e, i) : n.render((t - n._startTime) * n._timeScale, e, i)), n = o;
                        else
                            for (n = this._last; n && (o = n._prev, p === this._time && (!this._paused || g));) {
                                if (n._active || n._startTime <= d && !n._paused && !n._gc) {
                                    if (u === n) {
                                        for (u = n._prev; u && u.endTime() > this._time;) u.render(u._reversed ? u.totalDuration() - (t - u._startTime) * u._timeScale : (t - u._startTime) * u._timeScale, e, i), u = u._prev;
                                        u = null, this.pause()
                                    }
                                    n._reversed ? n.render((n._dirty ? n.totalDuration() : n._totalDuration) - (t - n._startTime) * n._timeScale, e, i) : n.render((t - n._startTime) * n._timeScale, e, i)
                                }
                                n = o
                            }
                        this._onUpdate && (e || (c.length && h(), this._callback("onUpdate"))), a && (this._gc || (m === this._startTime || _ !== this._timeScale) && (0 === this._time || f >= this.totalDuration()) && (r && (c.length && h(), this._timeline.autoRemoveChildren && this._enabled(!1, !1), this._active = !1), !e && this.vars[a] && this._callback(a)))
                    }
                }, _._hasPausedChild = function() {
                    for (var t = this._first; t;) {
                        if (t._paused || t instanceof n && t._hasPausedChild()) return !0;
                        t = t._next
                    }
                    return !1
                }, _.getChildren = function(t, e, n, s) {
                    s = s || -9999999999;
                    for (var r = [], o = this._first, a = 0; o;) o._startTime < s || (o instanceof i ? !1 !== e && (r[a++] = o) : (!1 !== n && (r[a++] = o), !1 !== t && (a = (r = r.concat(o.getChildren(!0, e, n))).length))), o = o._next;
                    return r
                }, _.getTweensOf = function(t, e) {
                    var n, s, r = this._gc,
                        o = [],
                        a = 0;
                    for (r && this._enabled(!0, !0), s = (n = i.getTweensOf(t)).length; --s > -1;)(n[s].timeline === this || e && this._contains(n[s])) && (o[a++] = n[s]);
                    return r && this._enabled(!1, !0), o
                }, _.recent = function() {
                    return this._recent
                }, _._contains = function(t) {
                    for (var e = t.timeline; e;) {
                        if (e === this) return !0;
                        e = e.timeline
                    }
                    return !1
                }, _.shiftChildren = function(t, e, i) {
                    i = i || 0;
                    for (var n, s = this._first, r = this._labels; s;) s._startTime >= i && (s._startTime += t), s = s._next;
                    if (e)
                        for (n in r) r[n] >= i && (r[n] += t);
                    return this._uncache(!0)
                }, _._kill = function(t, e) {
                    if (!t && !e) return this._enabled(!1, !1);
                    for (var i = e ? this.getTweensOf(e) : this.getChildren(!0, !0, !1), n = i.length, s = !1; --n > -1;) i[n]._kill(t, e) && (s = !0);
                    return s
                }, _.clear = function(t) {
                    var e = this.getChildren(!1, !0, !0),
                        i = e.length;
                    for (this._time = this._totalTime = 0; --i > -1;) e[i]._enabled(!1, !1);
                    return !1 !== t && (this._labels = {}), this._uncache(!0)
                }, _.invalidate = function() {
                    for (var e = this._first; e;) e.invalidate(), e = e._next;
                    return t.prototype.invalidate.call(this)
                }, _._enabled = function(t, i) {
                    if (t === this._gc)
                        for (var n = this._first; n;) n._enabled(t, !0), n = n._next;
                    return e.prototype._enabled.call(this, t, i)
                }, _.totalTime = function(e, i, n) {
                    this._forcingPlayhead = !0;
                    var s = t.prototype.totalTime.apply(this, arguments);
                    return this._forcingPlayhead = !1, s
                }, _.duration = function(t) {
                    return arguments.length ? (0 !== this.duration() && 0 !== t && this.timeScale(this._duration / t), this) : (this._dirty && this.totalDuration(), this._duration)
                }, _.totalDuration = function(t) {
                    if (!arguments.length) {
                        if (this._dirty) {
                            for (var e, i, n = 0, s = this._last, r = 999999999999; s;) e = s._prev, s._dirty && s.totalDuration(), s._startTime > r && this._sortChildren && !s._paused && !this._calculatingDuration ? (this._calculatingDuration = 1, this.add(s, s._startTime - s._delay), this._calculatingDuration = 0) : r = s._startTime, s._startTime < 0 && !s._paused && (n -= s._startTime, this._timeline.smoothChildTiming && (this._startTime += s._startTime / this._timeScale, this._time -= s._startTime, this._totalTime -= s._startTime, this._rawPrevTime -= s._startTime), this.shiftChildren(-s._startTime, !1, -9999999999), r = 0), (i = s._startTime + s._totalDuration / s._timeScale) > n && (n = i), s = e;
                            this._duration = this._totalDuration = n, this._dirty = !1
                        }
                        return this._totalDuration
                    }
                    return t && this.totalDuration() ? this.timeScale(this._totalDuration / t) : this
                }, _.paused = function(e) {
                    if (!e)
                        for (var i = this._first, n = this._time; i;) i._startTime === n && "isPause" === i.data && (i._rawPrevTime = 0), i = i._next;
                    return t.prototype.paused.apply(this, arguments)
                }, _.usesFrames = function() {
                    for (var e = this._timeline; e._timeline;) e = e._timeline;
                    return e === t._rootFramesTimeline
                }, _.rawTime = function(t) {
                    return t && (this._paused || this._repeat && this.time() > 0 && this.totalProgress() < 1) ? this._totalTime % (this._duration + this._repeatDelay) : this._paused ? this._totalTime : (this._timeline.rawTime(t) - this._startTime) * this._timeScale
                }, n
            }), !0), _gsScope._gsDefine("TimelineMax", ["TimelineLite", "TweenLite", "easing.Ease"], (function(t, e, i) {
                var n = function(e) {
                        t.call(this, e), this._repeat = this.vars.repeat || 0, this._repeatDelay = this.vars.repeatDelay || 0, this._cycle = 0, this._yoyo = !0 === this.vars.yoyo, this._dirty = !0
                    },
                    s = 1e-10,
                    r = e._internals,
                    o = r.lazyTweens,
                    a = r.lazyRender,
                    l = _gsScope._gsDefine.globals,
                    c = new i(null, null, 1, 0),
                    h = n.prototype = new t;
                return h.constructor = n, h.kill()._gc = !1, n.version = "2.0.1", h.invalidate = function() {
                    return this._yoyo = !0 === this.vars.yoyo, this._repeat = this.vars.repeat || 0, this._repeatDelay = this.vars.repeatDelay || 0, this._uncache(!0), t.prototype.invalidate.call(this)
                }, h.addCallback = function(t, i, n, s) {
                    return this.add(e.delayedCall(0, t, n, s), i)
                }, h.removeCallback = function(t, e) {
                    if (t)
                        if (null == e) this._kill(null, t);
                        else
                            for (var i = this.getTweensOf(t, !1), n = i.length, s = this._parseTimeOrLabel(e); --n > -1;) i[n]._startTime === s && i[n]._enabled(!1, !1);
                    return this
                }, h.removePause = function(e) {
                    return this.removeCallback(t._internals.pauseCallback, e)
                }, h.tweenTo = function(t, i) {
                    i = i || {};
                    var n, s, r, o = {
                            ease: c,
                            useFrames: this.usesFrames(),
                            immediateRender: !1,
                            lazy: !1
                        },
                        a = i.repeat && l.TweenMax || e;
                    for (s in i) o[s] = i[s];
                    return o.time = this._parseTimeOrLabel(t), n = Math.abs(Number(o.time) - this._time) / this._timeScale || .001, r = new a(this, n, o), o.onStart = function() {
                        r.target.paused(!0), r.vars.time === r.target.time() || n !== r.duration() || r.isFromTo || r.duration(Math.abs(r.vars.time - r.target.time()) / r.target._timeScale).render(r.time(), !0, !0), i.onStart && i.onStart.apply(i.onStartScope || i.callbackScope || r, i.onStartParams || [])
                    }, r
                }, h.tweenFromTo = function(t, e, i) {
                    i = i || {}, t = this._parseTimeOrLabel(t), i.startAt = {
                        onComplete: this.seek,
                        onCompleteParams: [t],
                        callbackScope: this
                    }, i.immediateRender = !1 !== i.immediateRender;
                    var n = this.tweenTo(e, i);
                    return n.isFromTo = 1, n.duration(Math.abs(n.vars.time - t) / this._timeScale || .001)
                }, h.render = function(t, e, i) {
                    this._gc && this._enabled(!0, !1);
                    var n, r, l, c, h, u, p, d, f = this._time,
                        m = this._dirty ? this.totalDuration() : this._totalDuration,
                        _ = this._duration,
                        g = this._totalTime,
                        v = this._startTime,
                        y = this._timeScale,
                        w = this._rawPrevTime,
                        T = this._paused,
                        x = this._cycle;
                    if (f !== this._time && (t += this._time - f), t >= m - 1e-7 && t >= 0) this._locked || (this._totalTime = m, this._cycle = this._repeat), this._reversed || this._hasPausedChild() || (r = !0, c = "onComplete", h = !!this._timeline.autoRemoveChildren, 0 === this._duration && (0 >= t && t >= -1e-7 || 0 > w || w === s) && w !== t && this._first && (h = !0, w > s && (c = "onReverseComplete"))), this._rawPrevTime = this._duration || !e || t || this._rawPrevTime === t ? t : s, this._yoyo && 0 != (1 & this._cycle) ? this._time = t = 0 : (this._time = _, t = _ + 1e-4);
                    else if (1e-7 > t)
                        if (this._locked || (this._totalTime = this._cycle = 0), this._time = 0, (0 !== f || 0 === _ && w !== s && (w > 0 || 0 > t && w >= 0) && !this._locked) && (c = "onReverseComplete", r = this._reversed), 0 > t) this._active = !1, this._timeline.autoRemoveChildren && this._reversed ? (h = r = !0, c = "onReverseComplete") : w >= 0 && this._first && (h = !0), this._rawPrevTime = t;
                        else {
                            if (this._rawPrevTime = _ || !e || t || this._rawPrevTime === t ? t : s, 0 === t && r)
                                for (n = this._first; n && 0 === n._startTime;) n._duration || (r = !1), n = n._next;
                            t = 0, this._initted || (h = !0)
                        } else if (0 === _ && 0 > w && (h = !0), this._time = this._rawPrevTime = t, this._locked || (this._totalTime = t, 0 !== this._repeat && (u = _ + this._repeatDelay, this._cycle = this._totalTime / u >> 0, 0 !== this._cycle && this._cycle === this._totalTime / u && t >= g && this._cycle--, this._time = this._totalTime - this._cycle * u, this._yoyo && 0 != (1 & this._cycle) && (this._time = _ - this._time), this._time > _ ? (this._time = _, t = _ + 1e-4) : this._time < 0 ? this._time = t = 0 : t = this._time)), this._hasPause && !this._forcingPlayhead && !e) {
                        if ((t = this._time) >= f || this._repeat && x !== this._cycle)
                            for (n = this._first; n && n._startTime <= t && !p;) n._duration || "isPause" !== n.data || n.ratio || 0 === n._startTime && 0 === this._rawPrevTime || (p = n), n = n._next;
                        else
                            for (n = this._last; n && n._startTime >= t && !p;) n._duration || "isPause" === n.data && n._rawPrevTime > 0 && (p = n), n = n._prev;
                        p && p._startTime < _ && (this._time = t = p._startTime, this._totalTime = t + this._cycle * (this._totalDuration + this._repeatDelay))
                    }
                    if (this._cycle !== x && !this._locked) {
                        var b = this._yoyo && 0 != (1 & x),
                            k = b === (this._yoyo && 0 != (1 & this._cycle)),
                            S = this._totalTime,
                            P = this._cycle,
                            C = this._rawPrevTime,
                            O = this._time;
                        if (this._totalTime = x * _, this._cycle < x ? b = !b : this._totalTime += _, this._time = f, this._rawPrevTime = 0 === _ ? w - 1e-4 : w, this._cycle = x, this._locked = !0, f = b ? 0 : _, this.render(f, e, 0 === _), e || this._gc || this.vars.onRepeat && (this._cycle = P, this._locked = !1, this._callback("onRepeat")), f !== this._time) return;
                        if (k && (this._cycle = x, this._locked = !0, f = b ? _ + 1e-4 : -1e-4, this.render(f, !0, !1)), this._locked = !1, this._paused && !T) return;
                        this._time = O, this._totalTime = S, this._cycle = P, this._rawPrevTime = C
                    }
                    if (this._time !== f && this._first || i || h || p) {
                        if (this._initted || (this._initted = !0), this._active || !this._paused && this._totalTime !== g && t > 0 && (this._active = !0), 0 === g && this.vars.onStart && (0 === this._totalTime && this._totalDuration || e || this._callback("onStart")), (d = this._time) >= f)
                            for (n = this._first; n && (l = n._next,
                                    d === this._time && (!this._paused || T));)(n._active || n._startTime <= this._time && !n._paused && !n._gc) && (p === n && this.pause(), n._reversed ? n.render((n._dirty ? n.totalDuration() : n._totalDuration) - (t - n._startTime) * n._timeScale, e, i) : n.render((t - n._startTime) * n._timeScale, e, i)), n = l;
                        else
                            for (n = this._last; n && (l = n._prev, d === this._time && (!this._paused || T));) {
                                if (n._active || n._startTime <= f && !n._paused && !n._gc) {
                                    if (p === n) {
                                        for (p = n._prev; p && p.endTime() > this._time;) p.render(p._reversed ? p.totalDuration() - (t - p._startTime) * p._timeScale : (t - p._startTime) * p._timeScale, e, i), p = p._prev;
                                        p = null, this.pause()
                                    }
                                    n._reversed ? n.render((n._dirty ? n.totalDuration() : n._totalDuration) - (t - n._startTime) * n._timeScale, e, i) : n.render((t - n._startTime) * n._timeScale, e, i)
                                }
                                n = l
                            }
                        this._onUpdate && (e || (o.length && a(), this._callback("onUpdate"))), c && (this._locked || this._gc || (v === this._startTime || y !== this._timeScale) && (0 === this._time || m >= this.totalDuration()) && (r && (o.length && a(), this._timeline.autoRemoveChildren && this._enabled(!1, !1), this._active = !1), !e && this.vars[c] && this._callback(c)))
                    } else g !== this._totalTime && this._onUpdate && (e || this._callback("onUpdate"))
                }, h.getActive = function(t, e, i) {
                    null == t && (t = !0), null == e && (e = !0), null == i && (i = !1);
                    var n, s, r = [],
                        o = this.getChildren(t, e, i),
                        a = 0,
                        l = o.length;
                    for (n = 0; l > n; n++)(s = o[n]).isActive() && (r[a++] = s);
                    return r
                }, h.getLabelAfter = function(t) {
                    t || 0 !== t && (t = this._time);
                    var e, i = this.getLabelsArray(),
                        n = i.length;
                    for (e = 0; n > e; e++)
                        if (i[e].time > t) return i[e].name;
                    return null
                }, h.getLabelBefore = function(t) {
                    null == t && (t = this._time);
                    for (var e = this.getLabelsArray(), i = e.length; --i > -1;)
                        if (e[i].time < t) return e[i].name;
                    return null
                }, h.getLabelsArray = function() {
                    var t, e = [],
                        i = 0;
                    for (t in this._labels) e[i++] = {
                        time: this._labels[t],
                        name: t
                    };
                    return e.sort((function(t, e) {
                        return t.time - e.time
                    })), e
                }, h.invalidate = function() {
                    return this._locked = !1, t.prototype.invalidate.call(this)
                }, h.progress = function(t, e) {
                    return arguments.length ? this.totalTime(this.duration() * (this._yoyo && 0 != (1 & this._cycle) ? 1 - t : t) + this._cycle * (this._duration + this._repeatDelay), e) : this._time / this.duration() || 0
                }, h.totalProgress = function(t, e) {
                    return arguments.length ? this.totalTime(this.totalDuration() * t, e) : this._totalTime / this.totalDuration() || 0
                }, h.totalDuration = function(e) {
                    return arguments.length ? -1 !== this._repeat && e ? this.timeScale(this.totalDuration() / e) : this : (this._dirty && (t.prototype.totalDuration.call(this), this._totalDuration = -1 === this._repeat ? 999999999999 : this._duration * (this._repeat + 1) + this._repeatDelay * this._repeat), this._totalDuration)
                }, h.time = function(t, e) {
                    return arguments.length ? (this._dirty && this.totalDuration(), t > this._duration && (t = this._duration), this._yoyo && 0 != (1 & this._cycle) ? t = this._duration - t + this._cycle * (this._duration + this._repeatDelay) : 0 !== this._repeat && (t += this._cycle * (this._duration + this._repeatDelay)), this.totalTime(t, e)) : this._time
                }, h.repeat = function(t) {
                    return arguments.length ? (this._repeat = t, this._uncache(!0)) : this._repeat
                }, h.repeatDelay = function(t) {
                    return arguments.length ? (this._repeatDelay = t, this._uncache(!0)) : this._repeatDelay
                }, h.yoyo = function(t) {
                    return arguments.length ? (this._yoyo = t, this) : this._yoyo
                }, h.currentLabel = function(t) {
                    return arguments.length ? this.seek(t, !0) : this.getLabelBefore(this._time + 1e-8)
                }, n
            }), !0), t = 180 / Math.PI, e = [], i = [], n = [], s = {}, r = _gsScope._gsDefine.globals, o = function(t, e, i, n) {
                i === n && (i = n - (n - e) / 1e6), t === e && (e = t + (i - t) / 1e6), this.a = t, this.b = e, this.c = i, this.d = n, this.da = n - t, this.ca = i - t, this.ba = e - t
            }, a = ",x,y,z,left,top,right,bottom,marginTop,marginLeft,marginRight,marginBottom,paddingLeft,paddingTop,paddingRight,paddingBottom,backgroundPosition,backgroundPosition_y,", l = function(t, e, i, n) {
                var s = {
                        a: t
                    },
                    r = {},
                    o = {},
                    a = {
                        c: n
                    },
                    l = (t + e) / 2,
                    c = (e + i) / 2,
                    h = (i + n) / 2,
                    u = (l + c) / 2,
                    p = (c + h) / 2,
                    d = (p - u) / 8;
                return s.b = l + (t - l) / 4, r.b = u + d, s.c = r.a = (s.b + r.b) / 2, r.c = o.a = (u + p) / 2, o.b = p - d, a.b = h + (n - h) / 4, o.c = a.a = (o.b + a.b) / 2, [s, r, o, a]
            }, c = function(t, s, r, o, a) {
                var c, h, u, p, d, f, m, _, g, v, y, w, T, x = t.length - 1,
                    b = 0,
                    k = t[0].a;
                for (c = 0; x > c; c++) h = (d = t[b]).a, u = d.d, p = t[b + 1].d, a ? (y = e[c], T = ((w = i[c]) + y) * s * .25 / (o ? .5 : n[c] || .5), _ = u - ((f = u - (u - h) * (o ? .5 * s : 0 !== y ? T / y : 0)) + (((m = u + (p - u) * (o ? .5 * s : 0 !== w ? T / w : 0)) - f) * (3 * y / (y + w) + .5) / 4 || 0))) : _ = u - ((f = u - (u - h) * s * .5) + (m = u + (p - u) * s * .5)) / 2, f += _, m += _, d.c = g = f, d.b = 0 !== c ? k : k = d.a + .6 * (d.c - d.a), d.da = u - h, d.ca = g - h, d.ba = k - h, r ? (v = l(h, k, g, u), t.splice(b, 1, v[0], v[1], v[2], v[3]), b += 4) : b++, k = m;
                (d = t[b]).b = k, d.c = k + .4 * (d.d - k), d.da = d.d - d.a, d.ca = d.c - d.a, d.ba = k - d.a, r && (v = l(d.a, k, d.c, d.d), t.splice(b, 1, v[0], v[1], v[2], v[3]))
            }, h = function(t, n, s, r) {
                var a, l, c, h, u, p, d = [];
                if (r)
                    for (l = (t = [r].concat(t)).length; --l > -1;) "string" == typeof(p = t[l][n]) && "=" === p.charAt(1) && (t[l][n] = r[n] + Number(p.charAt(0) + p.substr(2)));
                if (0 > (a = t.length - 2)) return d[0] = new o(t[0][n], 0, 0, t[0][n]), d;
                for (l = 0; a > l; l++) c = t[l][n], h = t[l + 1][n], d[l] = new o(c, 0, 0, h), s && (u = t[l + 2][n], e[l] = (e[l] || 0) + (h - c) * (h - c), i[l] = (i[l] || 0) + (u - h) * (u - h));
                return d[l] = new o(t[l][n], 0, 0, t[l + 1][n]), d
            }, u = function(t, r, o, l, u, p) {
                var d, f, m, _, g, v, y, w, T = {},
                    x = [],
                    b = p || t[0];
                for (f in u = "string" == typeof u ? "," + u + "," : a, null == r && (r = 1), t[0]) x.push(f);
                if (t.length > 1) {
                    for (w = t[t.length - 1], y = !0, d = x.length; --d > -1;)
                        if (f = x[d], Math.abs(b[f] - w[f]) > .05) {
                            y = !1;
                            break
                        }
                    y && (t = t.concat(), p && t.unshift(p), t.push(t[1]), p = t[t.length - 3])
                }
                for (e.length = i.length = n.length = 0, d = x.length; --d > -1;) f = x[d], s[f] = -1 !== u.indexOf("," + f + ","), T[f] = h(t, f, s[f], p);
                for (d = e.length; --d > -1;) e[d] = Math.sqrt(e[d]), i[d] = Math.sqrt(i[d]);
                if (!l) {
                    for (d = x.length; --d > -1;)
                        if (s[f])
                            for (v = (m = T[x[d]]).length - 1, _ = 0; v > _; _++) g = m[_ + 1].da / i[_] + m[_].da / e[_] || 0, n[_] = (n[_] || 0) + g * g;
                    for (d = n.length; --d > -1;) n[d] = Math.sqrt(n[d])
                }
                for (d = x.length, _ = o ? 4 : 1; --d > -1;) m = T[f = x[d]], c(m, r, o, l, s[f]), y && (m.splice(0, _), m.splice(m.length - _, _));
                return T
            }, p = function(t, e, i) {
                var n, s, r, a, l, c, h, u, p, d, f, m = {},
                    _ = "cubic" === (e = e || "soft") ? 3 : 2,
                    g = "soft" === e,
                    v = [];
                if (g && i && (t = [i].concat(t)), null == t || t.length < _ + 1) throw "invalid Bezier data";
                for (p in t[0]) v.push(p);
                for (c = v.length; --c > -1;) {
                    for (m[p = v[c]] = l = [], d = 0, u = t.length, h = 0; u > h; h++) n = null == i ? t[h][p] : "string" == typeof(f = t[h][p]) && "=" === f.charAt(1) ? i[p] + Number(f.charAt(0) + f.substr(2)) : Number(f), g && h > 1 && u - 1 > h && (l[d++] = (n + l[d - 2]) / 2), l[d++] = n;
                    for (u = d - _ + 1, d = 0, h = 0; u > h; h += _) n = l[h], s = l[h + 1], r = l[h + 2], a = 2 === _ ? 0 : l[h + 3], l[d++] = f = 3 === _ ? new o(n, s, r, a) : new o(n, (2 * s + n) / 3, (2 * s + r) / 3, r);
                    l.length = d
                }
                return m
            }, d = function(t, e, i) {
                for (var n, s, r, o, a, l, c, h, u, p, d, f = 1 / i, m = t.length; --m > -1;)
                    for (r = (p = t[m]).a, o = p.d - r, a = p.c - r, l = p.b - r, n = s = 0, h = 1; i >= h; h++) n = s - (s = ((c = f * h) * c * o + 3 * (u = 1 - c) * (c * a + u * l)) * c), e[d = m * i + h - 1] = (e[d] || 0) + n * n
            }, f = function(t, e) {
                var i, n, s, r, o = [],
                    a = [],
                    l = 0,
                    c = 0,
                    h = (e = e >> 0 || 6) - 1,
                    u = [],
                    p = [];
                for (i in t) d(t[i], o, e);
                for (s = o.length, n = 0; s > n; n++) l += Math.sqrt(o[n]), p[r = n % e] = l, r === h && (c += l, u[r = n / e >> 0] = p, a[r] = c, l = 0, p = []);
                return {
                    length: c,
                    lengths: a,
                    segments: u
                }
            }, m = _gsScope._gsDefine.plugin({
                propName: "bezier",
                priority: -1,
                version: "1.3.8",
                API: 2,
                global: !0,
                init: function(t, e, i) {
                    this._target = t, e instanceof Array && (e = {
                        values: e
                    }), this._func = {}, this._mod = {}, this._props = [], this._timeRes = null == e.timeResolution ? 6 : parseInt(e.timeResolution, 10);
                    var n, s, r, o, a, l = e.values || [],
                        c = {},
                        h = l[0],
                        d = e.autoRotate || i.vars.orientToBezier;
                    for (n in this._autoRotate = d ? d instanceof Array ? d : [
                            ["x", "y", "rotation", !0 === d ? 0 : Number(d) || 0]
                        ] : null, h) this._props.push(n);
                    for (r = this._props.length; --r > -1;) n = this._props[r], this._overwriteProps.push(n), s = this._func[n] = "function" == typeof t[n], c[n] = s ? t[n.indexOf("set") || "function" != typeof t["get" + n.substr(3)] ? n : "get" + n.substr(3)]() : parseFloat(t[n]), a || c[n] !== l[0][n] && (a = c);
                    if (this._beziers = "cubic" !== e.type && "quadratic" !== e.type && "soft" !== e.type ? u(l, isNaN(e.curviness) ? 1 : e.curviness, !1, "thruBasic" === e.type, e.correlate, a) : p(l, e.type, c), this._segCount = this._beziers[n].length, this._timeRes) {
                        var m = f(this._beziers, this._timeRes);
                        this._length = m.length, this._lengths = m.lengths, this._segments = m.segments, this._l1 = this._li = this._s1 = this._si = 0, this._l2 = this._lengths[0], this._curSeg = this._segments[0], this._s2 = this._curSeg[0], this._prec = 1 / this._curSeg.length
                    }
                    if (d = this._autoRotate)
                        for (this._initialRotations = [], d[0] instanceof Array || (this._autoRotate = d = [d]), r = d.length; --r > -1;) {
                            for (o = 0; 3 > o; o++) n = d[r][o], this._func[n] = "function" == typeof t[n] && t[n.indexOf("set") || "function" != typeof t["get" + n.substr(3)] ? n : "get" + n.substr(3)];
                            n = d[r][2], this._initialRotations[r] = (this._func[n] ? this._func[n].call(this._target) : this._target[n]) || 0, this._overwriteProps.push(n)
                        }
                    return this._startRatio = i.vars.runBackwards ? 1 : 0, !0
                },
                set: function(e) {
                    var i, n, s, r, o, a, l, c, h, u, p = this._segCount,
                        d = this._func,
                        f = this._target,
                        m = e !== this._startRatio;
                    if (this._timeRes) {
                        if (h = this._lengths, u = this._curSeg, e *= this._length, s = this._li, e > this._l2 && p - 1 > s) {
                            for (c = p - 1; c > s && (this._l2 = h[++s]) <= e;);
                            this._l1 = h[s - 1], this._li = s, this._curSeg = u = this._segments[s], this._s2 = u[this._s1 = this._si = 0]
                        } else if (e < this._l1 && s > 0) {
                            for (; s > 0 && (this._l1 = h[--s]) >= e;);
                            0 === s && e < this._l1 ? this._l1 = 0 : s++, this._l2 = h[s], this._li = s, this._curSeg = u = this._segments[s], this._s1 = u[(this._si = u.length - 1) - 1] || 0, this._s2 = u[this._si]
                        }
                        if (i = s, e -= this._l1, s = this._si, e > this._s2 && s < u.length - 1) {
                            for (c = u.length - 1; c > s && (this._s2 = u[++s]) <= e;);
                            this._s1 = u[s - 1], this._si = s
                        } else if (e < this._s1 && s > 0) {
                            for (; s > 0 && (this._s1 = u[--s]) >= e;);
                            0 === s && e < this._s1 ? this._s1 = 0 : s++, this._s2 = u[s], this._si = s
                        }
                        a = (s + (e - this._s1) / (this._s2 - this._s1)) * this._prec || 0
                    } else a = (e - (i = 0 > e ? 0 : e >= 1 ? p - 1 : p * e >> 0) * (1 / p)) * p;
                    for (n = 1 - a, s = this._props.length; --s > -1;) r = this._props[s], l = (a * a * (o = this._beziers[r][i]).da + 3 * n * (a * o.ca + n * o.ba)) * a + o.a, this._mod[r] && (l = this._mod[r](l, f)), d[r] ? f[r](l) : f[r] = l;
                    if (this._autoRotate) {
                        var _, g, v, y, w, T, x, b = this._autoRotate;
                        for (s = b.length; --s > -1;) r = b[s][2], T = b[s][3] || 0, x = !0 === b[s][4] ? 1 : t, o = this._beziers[b[s][0]], _ = this._beziers[b[s][1]], o && _ && (o = o[i], _ = _[i], g = o.a + (o.b - o.a) * a, g += ((y = o.b + (o.c - o.b) * a) - g) * a, y += (o.c + (o.d - o.c) * a - y) * a, v = _.a + (_.b - _.a) * a, v += ((w = _.b + (_.c - _.b) * a) - v) * a, w += (_.c + (_.d - _.c) * a - w) * a, l = m ? Math.atan2(w - v, y - g) * x + T : this._initialRotations[s], this._mod[r] && (l = this._mod[r](l, f)), d[r] ? f[r](l) : f[r] = l)
                    }
                }
            }), _ = m.prototype, m.bezierThrough = u, m.cubicToQuadratic = l, m._autoCSS = !0, m.quadraticToCubic = function(t, e, i) {
                return new o(t, (2 * e + t) / 3, (2 * e + i) / 3, i)
            }, m._cssRegister = function() {
                var t = r.CSSPlugin;
                if (t) {
                    var e = t._internals,
                        i = e._parseToProxy,
                        n = e._setPluginRatio,
                        s = e.CSSPropTween;
                    e._registerComplexSpecialProp("bezier", {
                        parser: function(t, e, r, o, a, l) {
                            e instanceof Array && (e = {
                                values: e
                            }), l = new m;
                            var c, h, u, p = e.values,
                                d = p.length - 1,
                                f = [],
                                _ = {};
                            if (0 > d) return a;
                            for (c = 0; d >= c; c++) u = i(t, p[c], o, a, l, d !== c), f[c] = u.end;
                            for (h in e) _[h] = e[h];
                            return _.values = f, (a = new s(t, "bezier", 0, 0, u.pt, 2)).data = u, a.plugin = l, a.setRatio = n, 0 === _.autoRotate && (_.autoRotate = !0), !_.autoRotate || _.autoRotate instanceof Array || (c = !0 === _.autoRotate ? 0 : Number(_.autoRotate), _.autoRotate = null != u.end.left ? [
                                ["left", "top", "rotation", c, !1]
                            ] : null != u.end.x && [
                                ["x", "y", "rotation", c, !1]
                            ]), _.autoRotate && (o._transform || o._enableTransforms(!1), u.autoRotate = o._target._gsTransform, u.proxy.rotation = u.autoRotate.rotation || 0, o._overwriteProps.push("rotation")), l._onInitTween(u.proxy, _, o._tween), a
                        }
                    })
                }
            }, _._mod = function(t) {
                for (var e, i = this._overwriteProps, n = i.length; --n > -1;)(e = t[i[n]]) && "function" == typeof e && (this._mod[i[n]] = e)
            }, _._kill = function(t) {
                var e, i, n = this._props;
                for (e in this._beziers)
                    if (e in t)
                        for (delete this._beziers[e], delete this._func[e], i = n.length; --i > -1;) n[i] === e && n.splice(i, 1);
                if (n = this._autoRotate)
                    for (i = n.length; --i > -1;) t[n[i][2]] && n.splice(i, 1);
                return this._super._kill.call(this, t)
            }, _gsScope._gsDefine("plugins.CSSPlugin", ["plugins.TweenPlugin", "TweenLite"], (function(t, e) {
                var i, n, s, r, o = function() {
                        t.call(this, "css"), this._overwriteProps.length = 0, this.setRatio = o.prototype.setRatio
                    },
                    a = _gsScope._gsDefine.globals,
                    l = {},
                    c = o.prototype = new t("css");
                c.constructor = o, o.version = "1.20.5", o.API = 2, o.defaultTransformPerspective = 0, o.defaultSkewType = "compensated", o.defaultSmoothOrigin = !0, c = "px", o.suffixMap = {
                    top: c,
                    right: c,
                    bottom: c,
                    left: c,
                    width: c,
                    height: c,
                    fontSize: c,
                    padding: c,
                    margin: c,
                    perspective: c,
                    lineHeight: ""
                };
                var h, u, p, d, f, m, _, g, v = /(?:\-|\.|\b)(\d|\.|e\-)+/g,
                    y = /(?:\d|\-\d|\.\d|\-\.\d|\+=\d|\-=\d|\+=.\d|\-=\.\d)+/g,
                    w = /(?:\+=|\-=|\-|\b)[\d\-\.]+[a-zA-Z0-9]*(?:%|\b)/gi,
                    T = /(?![+-]?\d*\.?\d+|[+-]|e[+-]\d+)[^0-9]/g,
                    x = /(?:\d|\-|\+|=|#|\.)*/g,
                    b = /opacity *= *([^)]*)/i,
                    k = /opacity:([^;]*)/i,
                    S = /alpha\(opacity *=.+?\)/i,
                    P = /^(rgb|hsl)/,
                    C = /([A-Z])/g,
                    O = /-([a-z])/gi,
                    A = /(^(?:url\(\"|url\())|(?:(\"\))$|\)$)/gi,
                    E = function(t, e) {
                        return e.toUpperCase()
                    },
                    R = /(?:Left|Right|Width)/i,
                    M = /(M11|M12|M21|M22)=[\d\-\.e]+/gi,
                    I = /progid\:DXImageTransform\.Microsoft\.Matrix\(.+?\)/i,
                    D = /,(?=[^\)]*(?:\(|$))/gi,
                    $ = /[\s,\(]/i,
                    z = Math.PI / 180,
                    L = 180 / Math.PI,
                    F = {},
                    N = {
                        style: {}
                    },
                    j = _gsScope.document || {
                        createElement: function() {
                            return N
                        }
                    },
                    H = function(t, e) {
                        return j.createElementNS ? j.createElementNS(e || "http://www.w3.org/1999/xhtml", t) : j.createElement(t)
                    },
                    B = H("div"),
                    X = H("img"),
                    q = o._internals = {
                        _specialProps: l
                    },
                    Y = (_gsScope.navigator || {}).userAgent || "",
                    W = function() {
                        var t = Y.indexOf("Android"),
                            e = H("a");
                        return p = -1 !== Y.indexOf("Safari") && -1 === Y.indexOf("Chrome") && (-1 === t || parseFloat(Y.substr(t + 8, 2)) > 3), f = p && parseFloat(Y.substr(Y.indexOf("Version/") + 8, 2)) < 6, d = -1 !== Y.indexOf("Firefox"), (/MSIE ([0-9]{1,}[\.0-9]{0,})/.exec(Y) || /Trident\/.*rv:([0-9]{1,}[\.0-9]{0,})/.exec(Y)) && (m = parseFloat(RegExp.$1)), !!e && (e.style.cssText = "top:1px;opacity:.55;", /^0.55/.test(e.style.opacity))
                    }(),
                    U = function(t) {
                        return b.test("string" == typeof t ? t : (t.currentStyle ? t.currentStyle.filter : t.style.filter) || "") ? parseFloat(RegExp.$1) / 100 : 1
                    },
                    V = function(t) {
                        _gsScope.console && console.log(t)
                    },
                    G = "",
                    Z = "",
                    Q = function(t, e) {
                        var i, n, s = (e = e || B).style;
                        if (void 0 !== s[t]) return t;
                        for (t = t.charAt(0).toUpperCase() + t.substr(1), i = ["O", "Moz", "ms", "Ms", "Webkit"], n = 5; --n > -1 && void 0 === s[i[n] + t];);
                        return n >= 0 ? (Z = 3 === n ? "ms" : i[n], G = "-" + Z.toLowerCase() + "-", Z + t) : null
                    },
                    K = ("undefined" != typeof window ? window : j.defaultView || {
                        getComputedStyle: function() {}
                    }).getComputedStyle,
                    J = o.getStyle = function(t, e, i, n, s) {
                        var r;
                        return W || "opacity" !== e ? (!n && t.style[e] ? r = t.style[e] : (i = i || K(t)) ? r = i[e] || i.getPropertyValue(e) || i.getPropertyValue(e.replace(C, "-$1").toLowerCase()) : t.currentStyle && (r = t.currentStyle[e]), null == s || r && "none" !== r && "auto" !== r && "auto auto" !== r ? r : s) : U(t)
                    },
                    tt = q.convertToPixels = function(t, i, n, s, r) {
                        if ("px" === s || !s && "lineHeight" !== i) return n;
                        if ("auto" === s || !n) return 0;
                        var a, l, c, h = R.test(i),
                            u = t,
                            p = B.style,
                            d = 0 > n,
                            f = 1 === n;
                        if (d && (n = -n), f && (n *= 100), "lineHeight" !== i || s)
                            if ("%" === s && -1 !== i.indexOf("border")) a = n / 100 * (h ? t.clientWidth : t.clientHeight);
                            else {
                                if (p.cssText = "border:0 solid red;position:" + J(t, "position") + ";line-height:0;", "%" !== s && u.appendChild && "v" !== s.charAt(0) && "rem" !== s) p[h ? "borderLeftWidth" : "borderTopWidth"] = n + s;
                                else {
                                    if (u = t.parentNode || j.body, -1 !== J(u, "display").indexOf("flex") && (p.position = "absolute"), l = u._gsCache, c = e.ticker.frame, l && h && l.time === c) return l.width * n / 100;
                                    p[h ? "width" : "height"] = n + s
                                }
                                u.appendChild(B), a = parseFloat(B[h ? "offsetWidth" : "offsetHeight"]), u.removeChild(B), h && "%" === s && !1 !== o.cacheWidths && ((l = u._gsCache = u._gsCache || {}).time = c, l.width = a / n * 100), 0 !== a || r || (a = tt(t, i, n, s, !0))
                            } else l = K(t).lineHeight, t.style.lineHeight = n, a = parseFloat(K(t).lineHeight), t.style.lineHeight = l;
                        return f && (a /= 100), d ? -a : a
                    },
                    et = q.calculateOffset = function(t, e, i) {
                        if ("absolute" !== J(t, "position", i)) return 0;
                        var n = "left" === e ? "Left" : "Top",
                            s = J(t, "margin" + n, i);
                        return t["offset" + n] - (tt(t, e, parseFloat(s), s.replace(x, "")) || 0)
                    },
                    it = function(t, e) {
                        var i, n, s, r = {};
                        if (e = e || K(t, null))
                            if (i = e.length)
                                for (; --i > -1;)(-1 === (s = e[i]).indexOf("-transform") || At === s) && (r[s.replace(O, E)] = e.getPropertyValue(s));
                            else
                                for (i in e)(-1 === i.indexOf("Transform") || Ot === i) && (r[i] = e[i]);
                        else if (e = t.currentStyle || t.style)
                            for (i in e) "string" == typeof i && void 0 === r[i] && (r[i.replace(O, E)] = e[i]);
                        return W || (r.opacity = U(t)), n = Xt(t, e, !1), r.rotation = n.rotation, r.skewX = n.skewX, r.scaleX = n.scaleX, r.scaleY = n.scaleY, r.x = n.x, r.y = n.y, Rt && (r.z = n.z, r.rotationX = n.rotationX, r.rotationY = n.rotationY, r.scaleZ = n.scaleZ), r.filters && delete r.filters, r
                    },
                    nt = function(t, e, i, n, s) {
                        var r, o, a, l = {},
                            c = t.style;
                        for (o in i) "cssText" !== o && "length" !== o && isNaN(o) && (e[o] !== (r = i[o]) || s && s[o]) && -1 === o.indexOf("Origin") && ("number" == typeof r || "string" == typeof r) && (l[o] = "auto" !== r || "left" !== o && "top" !== o ? "" !== r && "auto" !== r && "none" !== r || "string" != typeof e[o] || "" === e[o].replace(T, "") ? r : 0 : et(t, o), void 0 !== c[o] && (a = new vt(c, o, c[o], a)));
                        if (n)
                            for (o in n) "className" !== o && (l[o] = n[o]);
                        return {
                            difs: l,
                            firstMPT: a
                        }
                    },
                    st = {
                        width: ["Left", "Right"],
                        height: ["Top", "Bottom"]
                    },
                    rt = ["marginLeft", "marginRight", "marginTop", "marginBottom"],
                    ot = function(t, e, i) {
                        if ("svg" === (t.nodeName + "").toLowerCase()) return (i || K(t))[e] || 0;
                        if (t.getCTM && jt(t)) return t.getBBox()[e] || 0;
                        var n = parseFloat("width" === e ? t.offsetWidth : t.offsetHeight),
                            s = st[e],
                            r = s.length;
                        for (i = i || K(t, null); --r > -1;) n -= parseFloat(J(t, "padding" + s[r], i, !0)) || 0, n -= parseFloat(J(t, "border" + s[r] + "Width", i, !0)) || 0;
                        return n
                    },
                    at = function(t, e) {
                        if ("contain" === t || "auto" === t || "auto auto" === t) return t + " ";
                        (null == t || "" === t) && (t = "0 0");
                        var i, n = t.split(" "),
                            s = -1 !== t.indexOf("left") ? "0%" : -1 !== t.indexOf("right") ? "100%" : n[0],
                            r = -1 !== t.indexOf("top") ? "0%" : -1 !== t.indexOf("bottom") ? "100%" : n[1];
                        if (n.length > 3 && !e) {
                            for (n = t.split(", ").join(",").split(","), t = [], i = 0; i < n.length; i++) t.push(at(n[i]));
                            return t.join(",")
                        }
                        return null == r ? r = "center" === s ? "50%" : "0" : "center" === r && (r = "50%"), ("center" === s || isNaN(parseFloat(s)) && -1 === (s + "").indexOf("=")) && (s = "50%"), t = s + " " + r + (n.length > 2 ? " " + n[2] : ""), e && (e.oxp = -1 !== s.indexOf("%"), e.oyp = -1 !== r.indexOf("%"), e.oxr = "=" === s.charAt(1), e.oyr = "=" === r.charAt(1), e.ox = parseFloat(s.replace(T, "")), e.oy = parseFloat(r.replace(T, "")), e.v = t), e || t
                    },
                    lt = function(t, e) {
                        return "function" == typeof t && (t = t(g, _)), "string" == typeof t && "=" === t.charAt(1) ? parseInt(t.charAt(0) + "1", 10) * parseFloat(t.substr(2)) : parseFloat(t) - parseFloat(e) || 0
                    },
                    ct = function(t, e) {
                        return "function" == typeof t && (t = t(g, _)), null == t ? e : "string" == typeof t && "=" === t.charAt(1) ? parseInt(t.charAt(0) + "1", 10) * parseFloat(t.substr(2)) + e : parseFloat(t) || 0
                    },
                    ht = function(t, e, i, n) {
                        var s, r, o, a, l, c = 1e-6;
                        return "function" == typeof t && (t = t(g, _)), null == t ? a = e : "number" == typeof t ? a = t : (s = 360, r = t.split("_"), o = ((l = "=" === t.charAt(1)) ? parseInt(t.charAt(0) + "1", 10) * parseFloat(r[0].substr(2)) : parseFloat(r[0])) * (-1 === t.indexOf("rad") ? 1 : L) - (l ? 0 : e), r.length && (n && (n[i] = e + o), -1 !== t.indexOf("short") && ((o %= s) !== o % (s / 2) && (o = 0 > o ? o + s : o - s)), -1 !== t.indexOf("_cw") && 0 > o ? o = (o + 9999999999 * s) % s - (o / s | 0) * s : -1 !== t.indexOf("ccw") && o > 0 && (o = (o - 9999999999 * s) % s - (o / s | 0) * s)), a = e + o), c > a && a > -c && (a = 0), a
                    },
                    ut = {
                        aqua: [0, 255, 255],
                        lime: [0, 255, 0],
                        silver: [192, 192, 192],
                        black: [0, 0, 0],
                        maroon: [128, 0, 0],
                        teal: [0, 128, 128],
                        blue: [0, 0, 255],
                        navy: [0, 0, 128],
                        white: [255, 255, 255],
                        fuchsia: [255, 0, 255],
                        olive: [128, 128, 0],
                        yellow: [255, 255, 0],
                        orange: [255, 165, 0],
                        gray: [128, 128, 128],
                        purple: [128, 0, 128],
                        green: [0, 128, 0],
                        red: [255, 0, 0],
                        pink: [255, 192, 203],
                        cyan: [0, 255, 255],
                        transparent: [255, 255, 255, 0]
                    },
                    pt = function(t, e, i) {
                        return 255 * (1 > 6 * (t = 0 > t ? t + 1 : t > 1 ? t - 1 : t) ? e + (i - e) * t * 6 : .5 > t ? i : 2 > 3 * t ? e + (i - e) * (2 / 3 - t) * 6 : e) + .5 | 0
                    },
                    dt = o.parseColor = function(t, e) {
                        var i, n, s, r, o, a, l, c, h, u, p;
                        if (t)
                            if ("number" == typeof t) i = [t >> 16, t >> 8 & 255, 255 & t];
                            else {
                                if ("," === t.charAt(t.length - 1) && (t = t.substr(0, t.length - 1)), ut[t]) i = ut[t];
                                else if ("#" === t.charAt(0)) 4 === t.length && (n = t.charAt(1), s = t.charAt(2), r = t.charAt(3), t = "#" + n + n + s + s + r + r), i = [(t = parseInt(t.substr(1), 16)) >> 16, t >> 8 & 255, 255 & t];
                                else if ("hsl" === t.substr(0, 3))
                                    if (i = p = t.match(v), e) {
                                        if (-1 !== t.indexOf("=")) return t.match(y)
                                    } else o = Number(i[0]) % 360 / 360, a = Number(i[1]) / 100, n = 2 * (l = Number(i[2]) / 100) - (s = .5 >= l ? l * (a + 1) : l + a - l * a), i.length > 3 && (i[3] = Number(i[3])), i[0] = pt(o + 1 / 3, n, s), i[1] = pt(o, n, s), i[2] = pt(o - 1 / 3, n, s);
                                else i = t.match(v) || ut.transparent;
                                i[0] = Number(i[0]), i[1] = Number(i[1]), i[2] = Number(i[2]), i.length > 3 && (i[3] = Number(i[3]))
                            } else i = ut.black;
                        return e && !p && (n = i[0] / 255, s = i[1] / 255, r = i[2] / 255, l = ((c = Math.max(n, s, r)) + (h = Math.min(n, s, r))) / 2, c === h ? o = a = 0 : (u = c - h, a = l > .5 ? u / (2 - c - h) : u / (c + h), o = c === n ? (s - r) / u + (r > s ? 6 : 0) : c === s ? (r - n) / u + 2 : (n - s) / u + 4, o *= 60), i[0] = o + .5 | 0, i[1] = 100 * a + .5 | 0, i[2] = 100 * l + .5 | 0), i
                    },
                    ft = function(t, e) {
                        var i, n, s, r = t.match(mt) || [],
                            o = 0,
                            a = "";
                        if (!r.length) return t;
                        for (i = 0; i < r.length; i++) n = r[i], o += (s = t.substr(o, t.indexOf(n, o) - o)).length + n.length, 3 === (n = dt(n, e)).length && n.push(1), a += s + (e ? "hsla(" + n[0] + "," + n[1] + "%," + n[2] + "%," + n[3] : "rgba(" + n.join(",")) + ")";
                        return a + t.substr(o)
                    },
                    mt = "(?:\\b(?:(?:rgb|rgba|hsl|hsla)\\(.+?\\))|\\B#(?:[0-9a-f]{3}){1,2}\\b";
                for (c in ut) mt += "|" + c + "\\b";
                mt = new RegExp(mt + ")", "gi"), o.colorStringFilter = function(t) {
                    var e, i = t[0] + " " + t[1];
                    mt.test(i) && (e = -1 !== i.indexOf("hsl(") || -1 !== i.indexOf("hsla("), t[0] = ft(t[0], e), t[1] = ft(t[1], e)), mt.lastIndex = 0
                }, e.defaultStringFilter || (e.defaultStringFilter = o.colorStringFilter);
                var _t = function(t, e, i, n) {
                        if (null == t) return function(t) {
                            return t
                        };
                        var s, r = e ? (t.match(mt) || [""])[0] : "",
                            o = t.split(r).join("").match(w) || [],
                            a = t.substr(0, t.indexOf(o[0])),
                            l = ")" === t.charAt(t.length - 1) ? ")" : "",
                            c = -1 !== t.indexOf(" ") ? " " : ",",
                            h = o.length,
                            u = h > 0 ? o[0].replace(v, "") : "";
                        return h ? s = e ? function(t) {
                            var e, p, d, f;
                            if ("number" == typeof t) t += u;
                            else if (n && D.test(t)) {
                                for (f = t.replace(D, "|").split("|"), d = 0; d < f.length; d++) f[d] = s(f[d]);
                                return f.join(",")
                            }
                            if (e = (t.match(mt) || [r])[0], d = (p = t.split(e).join("").match(w) || []).length, h > d--)
                                for (; ++d < h;) p[d] = i ? p[(d - 1) / 2 | 0] : o[d];
                            return a + p.join(c) + c + e + l + (-1 !== t.indexOf("inset") ? " inset" : "")
                        } : function(t) {
                            var e, r, p;
                            if ("number" == typeof t) t += u;
                            else if (n && D.test(t)) {
                                for (r = t.replace(D, "|").split("|"), p = 0; p < r.length; p++) r[p] = s(r[p]);
                                return r.join(",")
                            }
                            if (p = (e = t.match(w) || []).length, h > p--)
                                for (; ++p < h;) e[p] = i ? e[(p - 1) / 2 | 0] : o[p];
                            return a + e.join(c) + l
                        } : function(t) {
                            return t
                        }
                    },
                    gt = function(t) {
                        return t = t.split(","),
                            function(e, i, n, s, r, o, a) {
                                var l, c = (i + "").split(" ");
                                for (a = {}, l = 0; 4 > l; l++) a[t[l]] = c[l] = c[l] || c[(l - 1) / 2 >> 0];
                                return s.parse(e, a, r, o)
                            }
                    },
                    vt = (q._setPluginRatio = function(t) {
                        this.plugin.setRatio(t);
                        for (var e, i, n, s, r, o = this.data, a = o.proxy, l = o.firstMPT, c = 1e-6; l;) e = a[l.v], l.r ? e = l.r(e) : c > e && e > -c && (e = 0), l.t[l.p] = e, l = l._next;
                        if (o.autoRotate && (o.autoRotate.rotation = o.mod ? o.mod.call(this._tween, a.rotation, this.t, this._tween) : a.rotation), 1 === t || 0 === t)
                            for (l = o.firstMPT, r = 1 === t ? "e" : "b"; l;) {
                                if ((i = l.t).type) {
                                    if (1 === i.type) {
                                        for (s = i.xs0 + i.s + i.xs1, n = 1; n < i.l; n++) s += i["xn" + n] + i["xs" + (n + 1)];
                                        i[r] = s
                                    }
                                } else i[r] = i.s + i.xs0;
                                l = l._next
                            }
                    }, function(t, e, i, n, s) {
                        this.t = t, this.p = e, this.v = i, this.r = s, n && (n._prev = this, this._next = n)
                    }),
                    yt = (q._parseToProxy = function(t, e, i, n, s, r) {
                        var o, a, l, c, h, u = n,
                            p = {},
                            d = {},
                            f = i._transform,
                            m = F;
                        for (i._transform = null, F = e, n = h = i.parse(t, e, n, s), F = m, r && (i._transform = f, u && (u._prev = null, u._prev && (u._prev._next = null))); n && n !== u;) {
                            if (n.type <= 1 && (d[a = n.p] = n.s + n.c, p[a] = n.s, r || (c = new vt(n, "s", a, c, n.r), n.c = 0), 1 === n.type))
                                for (o = n.l; --o > 0;) l = "xn" + o, d[a = n.p + "_" + l] = n.data[l], p[a] = n[l], r || (c = new vt(n, l, a, c, n.rxp[l]));
                            n = n._next
                        }
                        return {
                            proxy: p,
                            end: d,
                            firstMPT: c,
                            pt: h
                        }
                    }, q.CSSPropTween = function(t, e, n, s, o, a, l, c, h, u, p) {
                        this.t = t, this.p = e, this.s = n, this.c = s, this.n = l || e, t instanceof yt || r.push(this.n), this.r = c ? "function" == typeof c ? c : Math.round : c, this.type = a || 0, h && (this.pr = h, i = !0), this.b = void 0 === u ? n : u, this.e = void 0 === p ? n + s : p, o && (this._next = o, o._prev = this)
                    }),
                    wt = function(t, e, i, n, s, r) {
                        var o = new yt(t, e, i, n - i, s, -1, r);
                        return o.b = i, o.e = o.xs0 = n, o
                    },
                    Tt = o.parseComplex = function(t, e, i, n, s, r, a, l, c, u) {
                        i = i || r || "", "function" == typeof n && (n = n(g, _)), a = new yt(t, e, 0, 0, a, u ? 2 : 1, null, !1, l, i, n), n += "", s && mt.test(n + i) && (n = [i, n], o.colorStringFilter(n), i = n[0], n = n[1]);
                        var p, d, f, m, w, T, x, b, k, S, P, C, O, A = i.split(", ").join(",").split(" "),
                            E = n.split(", ").join(",").split(" "),
                            R = A.length,
                            M = !1 !== h;
                        for ((-1 !== n.indexOf(",") || -1 !== i.indexOf(",")) && (-1 !== (n + i).indexOf("rgb") || -1 !== (n + i).indexOf("hsl") ? (A = A.join(" ").replace(D, ", ").split(" "), E = E.join(" ").replace(D, ", ").split(" ")) : (A = A.join(" ").split(",").join(", ").split(" "), E = E.join(" ").split(",").join(", ").split(" ")), R = A.length), R !== E.length && (R = (A = (r || "").split(" ")).length), a.plugin = c, a.setRatio = u, mt.lastIndex = 0, p = 0; R > p; p++)
                            if (m = A[p], w = E[p] + "", (b = parseFloat(m)) || 0 === b) a.appendXtra("", b, lt(w, b), w.replace(y, ""), !(!M || -1 === w.indexOf("px")) && Math.round, !0);
                            else if (s && mt.test(m)) C = ")" + ((C = w.indexOf(")") + 1) ? w.substr(C) : ""), O = -1 !== w.indexOf("hsl") && W, S = w, m = dt(m, O), w = dt(w, O), (k = m.length + w.length > 6) && !W && 0 === w[3] ? (a["xs" + a.l] += a.l ? " transparent" : "transparent", a.e = a.e.split(E[p]).join("transparent")) : (W || (k = !1), O ? a.appendXtra(S.substr(0, S.indexOf("hsl")) + (k ? "hsla(" : "hsl("), m[0], lt(w[0], m[0]), ",", !1, !0).appendXtra("", m[1], lt(w[1], m[1]), "%,", !1).appendXtra("", m[2], lt(w[2], m[2]), k ? "%," : "%" + C, !1) : a.appendXtra(S.substr(0, S.indexOf("rgb")) + (k ? "rgba(" : "rgb("), m[0], w[0] - m[0], ",", Math.round, !0).appendXtra("", m[1], w[1] - m[1], ",", Math.round).appendXtra("", m[2], w[2] - m[2], k ? "," : C, Math.round), k && (m = m.length < 4 ? 1 : m[3], a.appendXtra("", m, (w.length < 4 ? 1 : w[3]) - m, C, !1))), mt.lastIndex = 0;
                        else if (T = m.match(v)) {
                            if (!(x = w.match(y)) || x.length !== T.length) return a;
                            for (f = 0, d = 0; d < T.length; d++) P = T[d], S = m.indexOf(P, f), a.appendXtra(m.substr(f, S - f), Number(P), lt(x[d], P), "", !(!M || "px" !== m.substr(S + P.length, 2)) && Math.round, 0 === d), f = S + P.length;
                            a["xs" + a.l] += m.substr(f)
                        } else a["xs" + a.l] += a.l || a["xs" + a.l] ? " " + w : w;
                        if (-1 !== n.indexOf("=") && a.data) {
                            for (C = a.xs0 + a.data.s, p = 1; p < a.l; p++) C += a["xs" + p] + a.data["xn" + p];
                            a.e = C + a["xs" + p]
                        }
                        return a.l || (a.type = -1, a.xs0 = a.e), a.xfirst || a
                    },
                    xt = 9;
                for ((c = yt.prototype).l = c.pr = 0; --xt > 0;) c["xn" + xt] = 0, c["xs" + xt] = "";
                c.xs0 = "", c._next = c._prev = c.xfirst = c.data = c.plugin = c.setRatio = c.rxp = null, c.appendXtra = function(t, e, i, n, s, r) {
                    var o = this,
                        a = o.l;
                    return o["xs" + a] += r && (a || o["xs" + a]) ? " " + t : t || "", i || 0 === a || o.plugin ? (o.l++, o.type = o.setRatio ? 2 : 1, o["xs" + o.l] = n || "", a > 0 ? (o.data["xn" + a] = e + i, o.rxp["xn" + a] = s, o["xn" + a] = e, o.plugin || (o.xfirst = new yt(o, "xn" + a, e, i, o.xfirst || o, 0, o.n, s, o.pr), o.xfirst.xs0 = 0), o) : (o.data = {
                        s: e + i
                    }, o.rxp = {}, o.s = e, o.c = i, o.r = s, o)) : (o["xs" + a] += e + (n || ""), o)
                };
                var bt = function(t, e) {
                        e = e || {}, this.p = e.prefix && Q(t) || t, l[t] = l[this.p] = this, this.format = e.formatter || _t(e.defaultValue, e.color, e.collapsible, e.multi), e.parser && (this.parse = e.parser), this.clrs = e.color, this.multi = e.multi, this.keyword = e.keyword, this.dflt = e.defaultValue, this.pr = e.priority || 0
                    },
                    kt = q._registerComplexSpecialProp = function(t, e, i) {
                        "object" != typeof e && (e = {
                            parser: i
                        });
                        var n, s = t.split(","),
                            r = e.defaultValue;
                        for (i = i || [r], n = 0; n < s.length; n++) e.prefix = 0 === n && e.prefix, e.defaultValue = i[n] || r, new bt(s[n], e)
                    },
                    St = q._registerPluginProp = function(t) {
                        if (!l[t]) {
                            var e = t.charAt(0).toUpperCase() + t.substr(1) + "Plugin";
                            kt(t, {
                                parser: function(t, i, n, s, r, o, c) {
                                    var h = a.com.greensock.plugins[e];
                                    return h ? (h._cssRegister(), l[n].parse(t, i, n, s, r, o, c)) : (V("Error: " + e + " js file not loaded."), r)
                                }
                            })
                        }
                    };
                (c = bt.prototype).parseComplex = function(t, e, i, n, s, r) {
                    var o, a, l, c, h, u, p = this.keyword;
                    if (this.multi && (D.test(i) || D.test(e) ? (a = e.replace(D, "|").split("|"), l = i.replace(D, "|").split("|")) : p && (a = [e], l = [i])), l) {
                        for (c = l.length > a.length ? l.length : a.length, o = 0; c > o; o++) e = a[o] = a[o] || this.dflt, i = l[o] = l[o] || this.dflt, p && ((h = e.indexOf(p)) !== (u = i.indexOf(p)) && (-1 === u ? a[o] = a[o].split(p).join("") : -1 === h && (a[o] += " " + p)));
                        e = a.join(", "), i = l.join(", ")
                    }
                    return Tt(t, this.p, e, i, this.clrs, this.dflt, n, this.pr, s, r)
                }, c.parse = function(t, e, i, n, r, o) {
                    return this.parseComplex(t.style, this.format(J(t, this.p, s, !1, this.dflt)), this.format(e), r, o)
                }, o.registerSpecialProp = function(t, e, i) {
                    kt(t, {
                        parser: function(t, n, s, r, o, a) {
                            var l = new yt(t, s, 0, 0, o, 2, s, !1, i);
                            return l.plugin = a, l.setRatio = e(t, n, r._tween, s), l
                        },
                        priority: i
                    })
                }, o.useSVGTransformAttr = !0;
                var Pt, Ct = "scaleX,scaleY,scaleZ,x,y,z,skewX,skewY,rotation,rotationX,rotationY,perspective,xPercent,yPercent".split(","),
                    Ot = Q("transform"),
                    At = G + "transform",
                    Et = Q("transformOrigin"),
                    Rt = null !== Q("perspective"),
                    Mt = q.Transform = function() {
                        this.perspective = parseFloat(o.defaultTransformPerspective) || 0, this.force3D = !(!1 === o.defaultForce3D || !Rt) && (o.defaultForce3D || "auto")
                    },
                    It = _gsScope.SVGElement,
                    Dt = function(t, e, i) {
                        var n, s = j.createElementNS("http://www.w3.org/2000/svg", t),
                            r = /([a-z])([A-Z])/g;
                        for (n in i) s.setAttributeNS(null, n.replace(r, "$1-$2").toLowerCase(), i[n]);
                        return e.appendChild(s), s
                    },
                    $t = j.documentElement || {},
                    zt = function() {
                        var t, e, i, n = m || /Android/i.test(Y) && !_gsScope.chrome;
                        return j.createElementNS && !n && (t = Dt("svg", $t), i = (e = Dt("rect", t, {
                            width: 100,
                            height: 50,
                            x: 100
                        })).getBoundingClientRect().width, e.style[Et] = "50% 50%", e.style[Ot] = "scaleX(0.5)", n = i === e.getBoundingClientRect().width && !(d && Rt), $t.removeChild(t)), n
                    }(),
                    Lt = function(t, e, i, n, s, r) {
                        var a, l, c, h, u, p, d, f, m, _, g, v, y, w, T = t._gsTransform,
                            x = Bt(t, !0);
                        T && (y = T.xOrigin, w = T.yOrigin), (!n || (a = n.split(" ")).length < 2) && (0 === (d = t.getBBox()).x && 0 === d.y && d.width + d.height === 0 && (d = {
                            x: parseFloat(t.hasAttribute("x") ? t.getAttribute("x") : t.hasAttribute("cx") ? t.getAttribute("cx") : 0) || 0,
                            y: parseFloat(t.hasAttribute("y") ? t.getAttribute("y") : t.hasAttribute("cy") ? t.getAttribute("cy") : 0) || 0,
                            width: 0,
                            height: 0
                        }), a = [(-1 !== (e = at(e).split(" "))[0].indexOf("%") ? parseFloat(e[0]) / 100 * d.width : parseFloat(e[0])) + d.x, (-1 !== e[1].indexOf("%") ? parseFloat(e[1]) / 100 * d.height : parseFloat(e[1])) + d.y]), i.xOrigin = h = parseFloat(a[0]), i.yOrigin = u = parseFloat(a[1]), n && x !== Ht && (p = x[0], d = x[1], f = x[2], m = x[3], _ = x[4], g = x[5], (v = p * m - d * f) && (l = h * (m / v) + u * (-f / v) + (f * g - m * _) / v, c = h * (-d / v) + u * (p / v) - (p * g - d * _) / v, h = i.xOrigin = a[0] = l, u = i.yOrigin = a[1] = c)), T && (r && (i.xOffset = T.xOffset, i.yOffset = T.yOffset, T = i), s || !1 !== s && !1 !== o.defaultSmoothOrigin ? (l = h - y, c = u - w, T.xOffset += l * x[0] + c * x[2] - l, T.yOffset += l * x[1] + c * x[3] - c) : T.xOffset = T.yOffset = 0), r || t.setAttribute("data-svg-origin", a.join(" "))
                    },
                    Ft = function(t) {
                        var e, i = H("svg", this.ownerSVGElement && this.ownerSVGElement.getAttribute("xmlns") || "http://www.w3.org/2000/svg"),
                            n = this.parentNode,
                            s = this.nextSibling,
                            r = this.style.cssText;
                        if ($t.appendChild(i), i.appendChild(this), this.style.display = "block", t) try {
                            e = this.getBBox(), this._originalGetBBox = this.getBBox, this.getBBox = Ft
                        } catch (t) {} else this._originalGetBBox && (e = this._originalGetBBox());
                        return s ? n.insertBefore(this, s) : n.appendChild(this), $t.removeChild(i), this.style.cssText = r, e
                    },
                    Nt = function(t) {
                        try {
                            return t.getBBox()
                        } catch (e) {
                            return Ft.call(t, !0)
                        }
                    },
                    jt = function(t) {
                        return !(!It || !t.getCTM || t.parentNode && !t.ownerSVGElement || !Nt(t))
                    },
                    Ht = [1, 0, 0, 1, 0, 0],
                    Bt = function(t, e) {
                        var i, n, s, r, o, a, l = t._gsTransform || new Mt,
                            c = 1e5,
                            h = t.style;
                        if (Ot ? n = J(t, At, null, !0) : t.currentStyle && (n = (n = t.currentStyle.filter.match(M)) && 4 === n.length ? [n[0].substr(4), Number(n[2].substr(4)), Number(n[1].substr(4)), n[3].substr(4), l.x || 0, l.y || 0].join(",") : ""), i = !n || "none" === n || "matrix(1, 0, 0, 1, 0, 0)" === n, !Ot || !(a = !K(t) || "none" === K(t).display) && t.parentNode || (a && (r = h.display, h.display = "block"), t.parentNode || (o = 1, $t.appendChild(t)), i = !(n = J(t, At, null, !0)) || "none" === n || "matrix(1, 0, 0, 1, 0, 0)" === n, r ? h.display = r : a && Ut(h, "display"), o && $t.removeChild(t)), (l.svg || t.getCTM && jt(t)) && (i && -1 !== (h[Ot] + "").indexOf("matrix") && (n = h[Ot], i = 0), s = t.getAttribute("transform"), i && s && (n = "matrix(" + (s = t.transform.baseVal.consolidate().matrix).a + "," + s.b + "," + s.c + "," + s.d + "," + s.e + "," + s.f + ")", i = 0)), i) return Ht;
                        for (s = (n || "").match(v) || [], xt = s.length; --xt > -1;) r = Number(s[xt]), s[xt] = (o = r - (r |= 0)) ? (o * c + (0 > o ? -.5 : .5) | 0) / c + r : r;
                        return e && s.length > 6 ? [s[0], s[1], s[4], s[5], s[12], s[13]] : s
                    },
                    Xt = q.getTransform = function(t, i, n, s) {
                        if (t._gsTransform && n && !s) return t._gsTransform;
                        var r, a, l, c, h, u, p = n && t._gsTransform || new Mt,
                            d = p.scaleX < 0,
                            f = 2e-5,
                            m = 1e5,
                            _ = Rt && (parseFloat(J(t, Et, i, !1, "0 0 0").split(" ")[2]) || p.zOrigin) || 0,
                            g = parseFloat(o.defaultTransformPerspective) || 0;
                        if (p.svg = !(!t.getCTM || !jt(t)), p.svg && (Lt(t, J(t, Et, i, !1, "50% 50%") + "", p, t.getAttribute("data-svg-origin")), Pt = o.useSVGTransformAttr || zt), (r = Bt(t)) !== Ht) {
                            if (16 === r.length) {
                                var v, y, w, T, x, b = r[0],
                                    k = r[1],
                                    S = r[2],
                                    P = r[3],
                                    C = r[4],
                                    O = r[5],
                                    A = r[6],
                                    E = r[7],
                                    R = r[8],
                                    M = r[9],
                                    I = r[10],
                                    D = r[12],
                                    $ = r[13],
                                    z = r[14],
                                    F = r[11],
                                    N = Math.atan2(A, I);
                                p.zOrigin && (D = R * (z = -p.zOrigin) - r[12], $ = M * z - r[13], z = I * z + p.zOrigin - r[14]), p.rotationX = N * L, N && (v = C * (T = Math.cos(-N)) + R * (x = Math.sin(-N)), y = O * T + M * x, w = A * T + I * x, R = C * -x + R * T, M = O * -x + M * T, I = A * -x + I * T, F = E * -x + F * T, C = v, O = y, A = w), N = Math.atan2(-S, I), p.rotationY = N * L, N && (y = k * (T = Math.cos(-N)) - M * (x = Math.sin(-N)), w = S * T - I * x, M = k * x + M * T, I = S * x + I * T, F = P * x + F * T, b = v = b * T - R * x, k = y, S = w), N = Math.atan2(k, b), p.rotation = N * L, N && (v = b * (T = Math.cos(N)) + k * (x = Math.sin(N)), y = C * T + O * x, w = R * T + M * x, k = k * T - b * x, O = O * T - C * x, M = M * T - R * x, b = v, C = y, R = w), p.rotationX && Math.abs(p.rotationX) + Math.abs(p.rotation) > 359.9 && (p.rotationX = p.rotation = 0, p.rotationY = 180 - p.rotationY), N = Math.atan2(C, O), p.scaleX = (Math.sqrt(b * b + k * k + S * S) * m + .5 | 0) / m, p.scaleY = (Math.sqrt(O * O + A * A) * m + .5 | 0) / m, p.scaleZ = (Math.sqrt(R * R + M * M + I * I) * m + .5 | 0) / m, b /= p.scaleX, C /= p.scaleY, k /= p.scaleX, O /= p.scaleY, Math.abs(N) > f ? (p.skewX = N * L, C = 0, "simple" !== p.skewType && (p.scaleY *= 1 / Math.cos(N))) : p.skewX = 0, p.perspective = F ? 1 / (0 > F ? -F : F) : 0, p.x = D, p.y = $, p.z = z, p.svg && (p.x -= p.xOrigin - (p.xOrigin * b - p.yOrigin * C), p.y -= p.yOrigin - (p.yOrigin * k - p.xOrigin * O))
                            } else if (!Rt || s || !r.length || p.x !== r[4] || p.y !== r[5] || !p.rotationX && !p.rotationY) {
                                var j = r.length >= 6,
                                    H = j ? r[0] : 1,
                                    B = r[1] || 0,
                                    X = r[2] || 0,
                                    q = j ? r[3] : 1;
                                p.x = r[4] || 0, p.y = r[5] || 0, l = Math.sqrt(H * H + B * B), c = Math.sqrt(q * q + X * X), h = H || B ? Math.atan2(B, H) * L : p.rotation || 0, u = X || q ? Math.atan2(X, q) * L + h : p.skewX || 0, p.scaleX = l, p.scaleY = c, p.rotation = h, p.skewX = u, Rt && (p.rotationX = p.rotationY = p.z = 0, p.perspective = g, p.scaleZ = 1), p.svg && (p.x -= p.xOrigin - (p.xOrigin * H + p.yOrigin * X), p.y -= p.yOrigin - (p.xOrigin * B + p.yOrigin * q))
                            }
                            for (a in Math.abs(p.skewX) > 90 && Math.abs(p.skewX) < 270 && (d ? (p.scaleX *= -1, p.skewX += p.rotation <= 0 ? 180 : -180, p.rotation += p.rotation <= 0 ? 180 : -180) : (p.scaleY *= -1, p.skewX += p.skewX <= 0 ? 180 : -180)), p.zOrigin = _, p) p[a] < f && p[a] > -f && (p[a] = 0)
                        }
                        return n && (t._gsTransform = p,
                            p.svg && (Pt && t.style[Ot] ? e.delayedCall(.001, (function() {
                                Ut(t.style, Ot)
                            })) : !Pt && t.getAttribute("transform") && e.delayedCall(.001, (function() {
                                t.removeAttribute("transform")
                            })))), p
                    },
                    qt = function(t) {
                        var e, i, n = this.data,
                            s = -n.rotation * z,
                            r = s + n.skewX * z,
                            o = 1e5,
                            a = (Math.cos(s) * n.scaleX * o | 0) / o,
                            l = (Math.sin(s) * n.scaleX * o | 0) / o,
                            c = (Math.sin(r) * -n.scaleY * o | 0) / o,
                            h = (Math.cos(r) * n.scaleY * o | 0) / o,
                            u = this.t.style,
                            p = this.t.currentStyle;
                        if (p) {
                            i = l, l = -c, c = -i, e = p.filter, u.filter = "";
                            var d, f, _ = this.t.offsetWidth,
                                g = this.t.offsetHeight,
                                v = "absolute" !== p.position,
                                y = "progid:DXImageTransform.Microsoft.Matrix(M11=" + a + ", M12=" + l + ", M21=" + c + ", M22=" + h,
                                w = n.x + _ * n.xPercent / 100,
                                T = n.y + g * n.yPercent / 100;
                            if (null != n.ox && (w += (d = (n.oxp ? _ * n.ox * .01 : n.ox) - _ / 2) - (d * a + (f = (n.oyp ? g * n.oy * .01 : n.oy) - g / 2) * l), T += f - (d * c + f * h)), v ? y += ", Dx=" + ((d = _ / 2) - (d * a + (f = g / 2) * l) + w) + ", Dy=" + (f - (d * c + f * h) + T) + ")" : y += ", sizingMethod='auto expand')", -1 !== e.indexOf("DXImageTransform.Microsoft.Matrix(") ? u.filter = e.replace(I, y) : u.filter = y + " " + e, (0 === t || 1 === t) && 1 === a && 0 === l && 0 === c && 1 === h && (v && -1 === y.indexOf("Dx=0, Dy=0") || b.test(e) && 100 !== parseFloat(RegExp.$1) || -1 === e.indexOf(e.indexOf("Alpha")) && u.removeAttribute("filter")), !v) {
                                var k, S, P, C = 8 > m ? 1 : -1;
                                for (d = n.ieOffsetX || 0, f = n.ieOffsetY || 0, n.ieOffsetX = Math.round((_ - ((0 > a ? -a : a) * _ + (0 > l ? -l : l) * g)) / 2 + w), n.ieOffsetY = Math.round((g - ((0 > h ? -h : h) * g + (0 > c ? -c : c) * _)) / 2 + T), xt = 0; 4 > xt; xt++) P = (i = -1 !== (k = p[S = rt[xt]]).indexOf("px") ? parseFloat(k) : tt(this.t, S, parseFloat(k), k.replace(x, "")) || 0) !== n[S] ? 2 > xt ? -n.ieOffsetX : -n.ieOffsetY : 2 > xt ? d - n.ieOffsetX : f - n.ieOffsetY, u[S] = (n[S] = Math.round(i - P * (0 === xt || 2 === xt ? 1 : C))) + "px"
                            }
                        }
                    },
                    Yt = q.set3DTransformRatio = q.setTransformRatio = function(t) {
                        var e, i, n, s, r, o, a, l, c, h, u, p, f, m, _, g, v, y, w, T, x, b, k, S = this.data,
                            P = this.t.style,
                            C = S.rotation,
                            O = S.rotationX,
                            A = S.rotationY,
                            E = S.scaleX,
                            R = S.scaleY,
                            M = S.scaleZ,
                            I = S.x,
                            D = S.y,
                            $ = S.z,
                            L = S.svg,
                            F = S.perspective,
                            N = S.force3D,
                            j = S.skewY,
                            H = S.skewX;
                        if (j && (H += j, C += j), !((1 !== t && 0 !== t || "auto" !== N || this.tween._totalTime !== this.tween._totalDuration && this.tween._totalTime) && N || $ || F || A || O || 1 !== M) || Pt && L || !Rt) C || H || L ? (C *= z, b = H * z, k = 1e5, i = Math.cos(C) * E, r = Math.sin(C) * E, n = Math.sin(C - b) * -R, o = Math.cos(C - b) * R, b && "simple" === S.skewType && (e = Math.tan(b - j * z), n *= e = Math.sqrt(1 + e * e), o *= e, j && (e = Math.tan(j * z), i *= e = Math.sqrt(1 + e * e), r *= e)), L && (I += S.xOrigin - (S.xOrigin * i + S.yOrigin * n) + S.xOffset, D += S.yOrigin - (S.xOrigin * r + S.yOrigin * o) + S.yOffset, Pt && (S.xPercent || S.yPercent) && (_ = this.t.getBBox(), I += .01 * S.xPercent * _.width, D += .01 * S.yPercent * _.height), (_ = 1e-6) > I && I > -_ && (I = 0), _ > D && D > -_ && (D = 0)), w = (i * k | 0) / k + "," + (r * k | 0) / k + "," + (n * k | 0) / k + "," + (o * k | 0) / k + "," + I + "," + D + ")", L && Pt ? this.t.setAttribute("transform", "matrix(" + w) : P[Ot] = (S.xPercent || S.yPercent ? "translate(" + S.xPercent + "%," + S.yPercent + "%) matrix(" : "matrix(") + w) : P[Ot] = (S.xPercent || S.yPercent ? "translate(" + S.xPercent + "%," + S.yPercent + "%) matrix(" : "matrix(") + E + ",0,0," + R + "," + I + "," + D + ")";
                        else {
                            if (d && ((_ = 1e-4) > E && E > -_ && (E = M = 2e-5), _ > R && R > -_ && (R = M = 2e-5), !F || S.z || S.rotationX || S.rotationY || (F = 0)), C || H) C *= z, g = i = Math.cos(C), v = r = Math.sin(C), H && (C -= H * z, g = Math.cos(C), v = Math.sin(C), "simple" === S.skewType && (e = Math.tan((H - j) * z), g *= e = Math.sqrt(1 + e * e), v *= e, S.skewY && (e = Math.tan(j * z), i *= e = Math.sqrt(1 + e * e), r *= e))), n = -v, o = g;
                            else {
                                if (!(A || O || 1 !== M || F || L)) return void(P[Ot] = (S.xPercent || S.yPercent ? "translate(" + S.xPercent + "%," + S.yPercent + "%) translate3d(" : "translate3d(") + I + "px," + D + "px," + $ + "px)" + (1 !== E || 1 !== R ? " scale(" + E + "," + R + ")" : ""));
                                i = o = 1, n = r = 0
                            }
                            h = 1, s = a = l = c = u = p = 0, f = F ? -1 / F : 0, m = S.zOrigin, _ = 1e-6, T = ",", x = "0", (C = A * z) && (g = Math.cos(C), l = -(v = Math.sin(C)), u = f * -v, s = i * v, a = r * v, h = g, f *= g, i *= g, r *= g), (C = O * z) && (e = n * (g = Math.cos(C)) + s * (v = Math.sin(C)), y = o * g + a * v, c = h * v, p = f * v, s = n * -v + s * g, a = o * -v + a * g, h *= g, f *= g, n = e, o = y), 1 !== M && (s *= M, a *= M, h *= M, f *= M), 1 !== R && (n *= R, o *= R, c *= R, p *= R), 1 !== E && (i *= E, r *= E, l *= E, u *= E), (m || L) && (m && (I += s * -m, D += a * -m, $ += h * -m + m), L && (I += S.xOrigin - (S.xOrigin * i + S.yOrigin * n) + S.xOffset, D += S.yOrigin - (S.xOrigin * r + S.yOrigin * o) + S.yOffset), _ > I && I > -_ && (I = x), _ > D && D > -_ && (D = x), _ > $ && $ > -_ && ($ = 0)), w = S.xPercent || S.yPercent ? "translate(" + S.xPercent + "%," + S.yPercent + "%) matrix3d(" : "matrix3d(", w += (_ > i && i > -_ ? x : i) + T + (_ > r && r > -_ ? x : r) + T + (_ > l && l > -_ ? x : l), w += T + (_ > u && u > -_ ? x : u) + T + (_ > n && n > -_ ? x : n) + T + (_ > o && o > -_ ? x : o), O || A || 1 !== M ? (w += T + (_ > c && c > -_ ? x : c) + T + (_ > p && p > -_ ? x : p) + T + (_ > s && s > -_ ? x : s), w += T + (_ > a && a > -_ ? x : a) + T + (_ > h && h > -_ ? x : h) + T + (_ > f && f > -_ ? x : f) + T) : w += ",0,0,0,0,1,0,", w += I + T + D + T + $ + T + (F ? 1 + -$ / F : 1) + ")", P[Ot] = w
                        }
                    };
                (c = Mt.prototype).x = c.y = c.z = c.skewX = c.skewY = c.rotation = c.rotationX = c.rotationY = c.zOrigin = c.xPercent = c.yPercent = c.xOffset = c.yOffset = 0, c.scaleX = c.scaleY = c.scaleZ = 1, kt("transform,scale,scaleX,scaleY,scaleZ,x,y,z,rotation,rotationX,rotationY,rotationZ,skewX,skewY,shortRotation,shortRotationX,shortRotationY,shortRotationZ,transformOrigin,svgOrigin,transformPerspective,directionalRotation,parseTransform,force3D,skewType,xPercent,yPercent,smoothOrigin", {
                    parser: function(t, e, i, n, r, a, l) {
                        if (n._lastParsedTransform === l) return r;
                        n._lastParsedTransform = l;
                        var c, h = l.scale && "function" == typeof l.scale ? l.scale : 0;
                        "function" == typeof l[i] && (c = l[i], l[i] = e), h && (l.scale = h(g, t));
                        var u, p, d, f, m, v, y, w, T, x = t._gsTransform,
                            b = t.style,
                            k = 1e-6,
                            S = Ct.length,
                            P = l,
                            C = {},
                            O = "transformOrigin",
                            A = Xt(t, s, !0, P.parseTransform),
                            E = P.transform && ("function" == typeof P.transform ? P.transform(g, _) : P.transform);
                        if (A.skewType = P.skewType || A.skewType || o.defaultSkewType, n._transform = A, E && "string" == typeof E && Ot)(p = B.style)[Ot] = E, p.display = "block", p.position = "absolute", -1 !== E.indexOf("%") && (p.width = J(t, "width"), p.height = J(t, "height")), j.body.appendChild(B), u = Xt(B, null, !1), "simple" === A.skewType && (u.scaleY *= Math.cos(u.skewX * z)), A.svg && (v = A.xOrigin, y = A.yOrigin, u.x -= A.xOffset, u.y -= A.yOffset, (P.transformOrigin || P.svgOrigin) && (E = {}, Lt(t, at(P.transformOrigin), E, P.svgOrigin, P.smoothOrigin, !0), v = E.xOrigin, y = E.yOrigin, u.x -= E.xOffset - A.xOffset, u.y -= E.yOffset - A.yOffset), (v || y) && (w = Bt(B, !0), u.x -= v - (v * w[0] + y * w[2]), u.y -= y - (v * w[1] + y * w[3]))), j.body.removeChild(B), u.perspective || (u.perspective = A.perspective), null != P.xPercent && (u.xPercent = ct(P.xPercent, A.xPercent)), null != P.yPercent && (u.yPercent = ct(P.yPercent, A.yPercent));
                        else if ("object" == typeof P) {
                            if (u = {
                                    scaleX: ct(null != P.scaleX ? P.scaleX : P.scale, A.scaleX),
                                    scaleY: ct(null != P.scaleY ? P.scaleY : P.scale, A.scaleY),
                                    scaleZ: ct(P.scaleZ, A.scaleZ),
                                    x: ct(P.x, A.x),
                                    y: ct(P.y, A.y),
                                    z: ct(P.z, A.z),
                                    xPercent: ct(P.xPercent, A.xPercent),
                                    yPercent: ct(P.yPercent, A.yPercent),
                                    perspective: ct(P.transformPerspective, A.perspective)
                                }, null != (m = P.directionalRotation))
                                if ("object" == typeof m)
                                    for (p in m) P[p] = m[p];
                                else P.rotation = m;
                                "string" == typeof P.x && -1 !== P.x.indexOf("%") && (u.x = 0, u.xPercent = ct(P.x, A.xPercent)), "string" == typeof P.y && -1 !== P.y.indexOf("%") && (u.y = 0, u.yPercent = ct(P.y, A.yPercent)), u.rotation = ht("rotation" in P ? P.rotation : "shortRotation" in P ? P.shortRotation + "_short" : "rotationZ" in P ? P.rotationZ : A.rotation, A.rotation, "rotation", C), Rt && (u.rotationX = ht("rotationX" in P ? P.rotationX : "shortRotationX" in P ? P.shortRotationX + "_short" : A.rotationX || 0, A.rotationX, "rotationX", C), u.rotationY = ht("rotationY" in P ? P.rotationY : "shortRotationY" in P ? P.shortRotationY + "_short" : A.rotationY || 0, A.rotationY, "rotationY", C)), u.skewX = ht(P.skewX, A.skewX), u.skewY = ht(P.skewY, A.skewY)
                        }
                        for (Rt && null != P.force3D && (A.force3D = P.force3D, f = !0), (d = A.force3D || A.z || A.rotationX || A.rotationY || u.z || u.rotationX || u.rotationY || u.perspective) || null == P.scale || (u.scaleZ = 1); --S > -1;)((E = u[T = Ct[S]] - A[T]) > k || -k > E || null != P[T] || null != F[T]) && (f = !0, r = new yt(A, T, A[T], E, r), T in C && (r.e = C[T]), r.xs0 = 0, r.plugin = a, n._overwriteProps.push(r.n));
                        return E = P.transformOrigin, A.svg && (E || P.svgOrigin) && (v = A.xOffset, y = A.yOffset, Lt(t, at(E), u, P.svgOrigin, P.smoothOrigin), r = wt(A, "xOrigin", (x ? A : u).xOrigin, u.xOrigin, r, O), r = wt(A, "yOrigin", (x ? A : u).yOrigin, u.yOrigin, r, O), (v !== A.xOffset || y !== A.yOffset) && (r = wt(A, "xOffset", x ? v : A.xOffset, A.xOffset, r, O), r = wt(A, "yOffset", x ? y : A.yOffset, A.yOffset, r, O)), E = "0px 0px"), (E || Rt && d && A.zOrigin) && (Ot ? (f = !0, T = Et, E = (E || J(t, T, s, !1, "50% 50%")) + "", (r = new yt(b, T, 0, 0, r, -1, O)).b = b[T], r.plugin = a, Rt ? (p = A.zOrigin, E = E.split(" "), A.zOrigin = (E.length > 2 && (0 === p || "0px" !== E[2]) ? parseFloat(E[2]) : p) || 0, r.xs0 = r.e = E[0] + " " + (E[1] || "50%") + " 0px", (r = new yt(A, "zOrigin", 0, 0, r, -1, r.n)).b = p, r.xs0 = r.e = A.zOrigin) : r.xs0 = r.e = E) : at(E + "", A)), f && (n._transformType = A.svg && Pt || !d && 3 !== this._transformType ? 2 : 3), c && (l[i] = c), h && (l.scale = h), r
                    },
                    prefix: !0
                }), kt("boxShadow", {
                    defaultValue: "0px 0px 0px 0px #999",
                    prefix: !0,
                    color: !0,
                    multi: !0,
                    keyword: "inset"
                }), kt("borderRadius", {
                    defaultValue: "0px",
                    parser: function(t, e, i, r, o) {
                        e = this.format(e);
                        var a, l, c, h, u, p, d, f, m, _, g, v, y, w, T, x, b = ["borderTopLeftRadius", "borderTopRightRadius", "borderBottomRightRadius", "borderBottomLeftRadius"],
                            k = t.style;
                        for (m = parseFloat(t.offsetWidth), _ = parseFloat(t.offsetHeight), a = e.split(" "), l = 0; l < b.length; l++) this.p.indexOf("border") && (b[l] = Q(b[l])), -1 !== (u = h = J(t, b[l], s, !1, "0px")).indexOf(" ") && (h = u.split(" "), u = h[0], h = h[1]), p = c = a[l], d = parseFloat(u), v = u.substr((d + "").length), (y = "=" === p.charAt(1)) ? (f = parseInt(p.charAt(0) + "1", 10), p = p.substr(2), f *= parseFloat(p), g = p.substr((f + "").length - (0 > f ? 1 : 0)) || "") : (f = parseFloat(p), g = p.substr((f + "").length)), "" === g && (g = n[i] || v), g !== v && (w = tt(t, "borderLeft", d, v), T = tt(t, "borderTop", d, v), "%" === g ? (u = w / m * 100 + "%", h = T / _ * 100 + "%") : "em" === g ? (u = w / (x = tt(t, "borderLeft", 1, "em")) + "em", h = T / x + "em") : (u = w + "px", h = T + "px"), y && (p = parseFloat(u) + f + g, c = parseFloat(h) + f + g)), o = Tt(k, b[l], u + " " + h, p + " " + c, !1, "0px", o);
                        return o
                    },
                    prefix: !0,
                    formatter: _t("0px 0px 0px 0px", !1, !0)
                }), kt("borderBottomLeftRadius,borderBottomRightRadius,borderTopLeftRadius,borderTopRightRadius", {
                    defaultValue: "0px",
                    parser: function(t, e, i, n, r) {
                        return Tt(t.style, i, this.format(J(t, i, s, !1, "0px 0px")), this.format(e), !1, "0px", r)
                    },
                    prefix: !0,
                    formatter: _t("0px 0px", !1, !0)
                }), kt("backgroundPosition", {
                    defaultValue: "0 0",
                    parser: function(t, e, i, n, r, o) {
                        var a, l, c, h, u, p, d = "background-position",
                            f = s || K(t, null),
                            _ = this.format((f ? m ? f.getPropertyValue(d + "-x") + " " + f.getPropertyValue(d + "-y") : f.getPropertyValue(d) : t.currentStyle.backgroundPositionX + " " + t.currentStyle.backgroundPositionY) || "0 0"),
                            g = this.format(e);
                        if (-1 !== _.indexOf("%") != (-1 !== g.indexOf("%")) && g.split(",").length < 2 && ((p = J(t, "backgroundImage").replace(A, "")) && "none" !== p)) {
                            for (a = _.split(" "), l = g.split(" "), X.setAttribute("src", p), c = 2; --c > -1;)(h = -1 !== (_ = a[c]).indexOf("%")) !== (-1 !== l[c].indexOf("%")) && (u = 0 === c ? t.offsetWidth - X.width : t.offsetHeight - X.height, a[c] = h ? parseFloat(_) / 100 * u + "px" : parseFloat(_) / u * 100 + "%");
                            _ = a.join(" ")
                        }
                        return this.parseComplex(t.style, _, g, r, o)
                    },
                    formatter: at
                }), kt("backgroundSize", {
                    defaultValue: "0 0",
                    formatter: function(t) {
                        return "co" === (t += "").substr(0, 2) ? t : at(-1 === t.indexOf(" ") ? t + " " + t : t)
                    }
                }), kt("perspective", {
                    defaultValue: "0px",
                    prefix: !0
                }), kt("perspectiveOrigin", {
                    defaultValue: "50% 50%",
                    prefix: !0
                }), kt("transformStyle", {
                    prefix: !0
                }), kt("backfaceVisibility", {
                    prefix: !0
                }), kt("userSelect", {
                    prefix: !0
                }), kt("margin", {
                    parser: gt("marginTop,marginRight,marginBottom,marginLeft")
                }), kt("padding", {
                    parser: gt("paddingTop,paddingRight,paddingBottom,paddingLeft")
                }), kt("clip", {
                    defaultValue: "rect(0px,0px,0px,0px)",
                    parser: function(t, e, i, n, r, o) {
                        var a, l, c;
                        return 9 > m ? (l = t.currentStyle, c = 8 > m ? " " : ",", a = "rect(" + l.clipTop + c + l.clipRight + c + l.clipBottom + c + l.clipLeft + ")", e = this.format(e).split(",").join(c)) : (a = this.format(J(t, this.p, s, !1, this.dflt)), e = this.format(e)), this.parseComplex(t.style, a, e, r, o)
                    }
                }), kt("textShadow", {
                    defaultValue: "0px 0px 0px #999",
                    color: !0,
                    multi: !0
                }), kt("autoRound,strictUnits", {
                    parser: function(t, e, i, n, s) {
                        return s
                    }
                }), kt("border", {
                    defaultValue: "0px solid #000",
                    parser: function(t, e, i, n, r, o) {
                        var a = J(t, "borderTopWidth", s, !1, "0px"),
                            l = this.format(e).split(" "),
                            c = l[0].replace(x, "");
                        return "px" !== c && (a = parseFloat(a) / tt(t, "borderTopWidth", 1, c) + c), this.parseComplex(t.style, this.format(a + " " + J(t, "borderTopStyle", s, !1, "solid") + " " + J(t, "borderTopColor", s, !1, "#000")), l.join(" "), r, o)
                    },
                    color: !0,
                    formatter: function(t) {
                        var e = t.split(" ");
                        return e[0] + " " + (e[1] || "solid") + " " + (t.match(mt) || ["#000"])[0]
                    }
                }), kt("borderWidth", {
                    parser: gt("borderTopWidth,borderRightWidth,borderBottomWidth,borderLeftWidth")
                }), kt("float,cssFloat,styleFloat", {
                    parser: function(t, e, i, n, s) {
                        var r = t.style,
                            o = "cssFloat" in r ? "cssFloat" : "styleFloat";
                        return new yt(r, o, 0, 0, s, -1, i, !1, 0, r[o], e)
                    }
                });
                var Wt = function(t) {
                    var e, i = this.t,
                        n = i.filter || J(this.data, "filter") || "",
                        s = this.s + this.c * t | 0;
                    100 === s && (-1 === n.indexOf("atrix(") && -1 === n.indexOf("radient(") && -1 === n.indexOf("oader(") ? (i.removeAttribute("filter"), e = !J(this.data, "filter")) : (i.filter = n.replace(S, ""), e = !0)), e || (this.xn1 && (i.filter = n = n || "alpha(opacity=" + s + ")"), -1 === n.indexOf("pacity") ? 0 === s && this.xn1 || (i.filter = n + " alpha(opacity=" + s + ")") : i.filter = n.replace(b, "opacity=" + s))
                };
                kt("opacity,alpha,autoAlpha", {
                    defaultValue: "1",
                    parser: function(t, e, i, n, r, o) {
                        var a = parseFloat(J(t, "opacity", s, !1, "1")),
                            l = t.style,
                            c = "autoAlpha" === i;
                        return "string" == typeof e && "=" === e.charAt(1) && (e = ("-" === e.charAt(0) ? -1 : 1) * parseFloat(e.substr(2)) + a), c && 1 === a && "hidden" === J(t, "visibility", s) && 0 !== e && (a = 0), W ? r = new yt(l, "opacity", a, e - a, r) : ((r = new yt(l, "opacity", 100 * a, 100 * (e - a), r)).xn1 = c ? 1 : 0, l.zoom = 1, r.type = 2, r.b = "alpha(opacity=" + r.s + ")", r.e = "alpha(opacity=" + (r.s + r.c) + ")", r.data = t, r.plugin = o, r.setRatio = Wt), c && ((r = new yt(l, "visibility", 0, 0, r, -1, null, !1, 0, 0 !== a ? "inherit" : "hidden", 0 === e ? "hidden" : "inherit")).xs0 = "inherit", n._overwriteProps.push(r.n), n._overwriteProps.push(i)), r
                    }
                });
                var Ut = function(t, e) {
                        e && (t.removeProperty ? (("ms" === e.substr(0, 2) || "webkit" === e.substr(0, 6)) && (e = "-" + e), t.removeProperty(e.replace(C, "-$1").toLowerCase())) : t.removeAttribute(e))
                    },
                    Vt = function(t) {
                        if (this.t._gsClassPT = this, 1 === t || 0 === t) {
                            this.t.setAttribute("class", 0 === t ? this.b : this.e);
                            for (var e = this.data, i = this.t.style; e;) e.v ? i[e.p] = e.v : Ut(i, e.p), e = e._next;
                            1 === t && this.t._gsClassPT === this && (this.t._gsClassPT = null)
                        } else this.t.getAttribute("class") !== this.e && this.t.setAttribute("class", this.e)
                    };
                kt("className", {
                    parser: function(t, e, n, r, o, a, l) {
                        var c, h, u, p, d, f = t.getAttribute("class") || "",
                            m = t.style.cssText;
                        if ((o = r._classNamePT = new yt(t, n, 0, 0, o, 2)).setRatio = Vt, o.pr = -11, i = !0, o.b = f, h = it(t, s), u = t._gsClassPT) {
                            for (p = {}, d = u.data; d;) p[d.p] = 1, d = d._next;
                            u.setRatio(1)
                        }
                        return t._gsClassPT = o, o.e = "=" !== e.charAt(1) ? e : f.replace(new RegExp("(?:\\s|^)" + e.substr(2) + "(?![\\w-])"), "") + ("+" === e.charAt(0) ? " " + e.substr(2) : ""), t.setAttribute("class", o.e), c = nt(t, h, it(t), l, p), t.setAttribute("class", f), o.data = c.firstMPT, t.style.cssText = m, o.xfirst = r.parse(t, c.difs, o, a)
                    }
                });
                var Gt = function(t) {
                    if ((1 === t || 0 === t) && this.data._totalTime === this.data._totalDuration && "isFromStart" !== this.data.data) {
                        var e, i, n, s, r, o = this.t.style,
                            a = l.transform.parse;
                        if ("all" === this.e) o.cssText = "", s = !0;
                        else
                            for (n = (e = this.e.split(" ").join("").split(",")).length; --n > -1;) i = e[n], l[i] && (l[i].parse === a ? s = !0 : i = "transformOrigin" === i ? Et : l[i].p), Ut(o, i);
                        s && (Ut(o, Ot), (r = this.t._gsTransform) && (r.svg && (this.t.removeAttribute("data-svg-origin"), this.t.removeAttribute("transform")), delete this.t._gsTransform))
                    }
                };
                for (kt("clearProps", {
                        parser: function(t, e, n, s, r) {
                            return (r = new yt(t, n, 0, 0, r, 2)).setRatio = Gt, r.e = e, r.pr = -10, r.data = s._tween, i = !0, r
                        }
                    }), c = "bezier,throwProps,physicsProps,physics2D".split(","), xt = c.length; xt--;) St(c[xt]);
                (c = o.prototype)._firstPT = c._lastParsedTransform = c._transform = null, c._onInitTween = function(t, e, a, c) {
                    if (!t.nodeType) return !1;
                    this._target = _ = t, this._tween = a, this._vars = e, g = c, h = e.autoRound, i = !1, n = e.suffixMap || o.suffixMap, s = K(t, ""), r = this._overwriteProps;
                    var d, m, v, y, w, T, x, b, S, P = t.style;
                    if (u && "" === P.zIndex && (("auto" === (d = J(t, "zIndex", s)) || "" === d) && this._addLazySet(P, "zIndex", 0)), "string" == typeof e && (y = P.cssText, d = it(t, s), P.cssText = y + ";" + e, d = nt(t, d, it(t)).difs, !W && k.test(e) && (d.opacity = parseFloat(RegExp.$1)), e = d, P.cssText = y), e.className ? this._firstPT = m = l.className.parse(t, e.className, "className", this, null, null, e) : this._firstPT = m = this.parse(t, e, null), this._transformType) {
                        for (S = 3 === this._transformType, Ot ? p && (u = !0, "" === P.zIndex && (("auto" === (x = J(t, "zIndex", s)) || "" === x) && this._addLazySet(P, "zIndex", 0)), f && this._addLazySet(P, "WebkitBackfaceVisibility", this._vars.WebkitBackfaceVisibility || (S ? "visible" : "hidden"))) : P.zoom = 1, v = m; v && v._next;) v = v._next;
                        b = new yt(t, "transform", 0, 0, null, 2), this._linkCSSP(b, null, v), b.setRatio = Ot ? Yt : qt, b.data = this._transform || Xt(t, s, !0), b.tween = a, b.pr = -1, r.pop()
                    }
                    if (i) {
                        for (; m;) {
                            for (T = m._next, v = y; v && v.pr > m.pr;) v = v._next;
                            (m._prev = v ? v._prev : w) ? m._prev._next = m: y = m, (m._next = v) ? v._prev = m : w = m, m = T
                        }
                        this._firstPT = y
                    }
                    return !0
                }, c.parse = function(t, e, i, r) {
                    var o, a, c, u, p, d, f, m, v, y, w = t.style;
                    for (o in e) {
                        if ("function" == typeof(d = e[o]) && (d = d(g, _)), a = l[o]) i = a.parse(t, d, o, this, i, r, e);
                        else {
                            if ("--" === o.substr(0, 2)) {
                                this._tween._propLookup[o] = this._addTween.call(this._tween, t.style, "setProperty", K(t).getPropertyValue(o) + "", d + "", o, !1, o);
                                continue
                            }
                            p = J(t, o, s) + "", v = "string" == typeof d, "color" === o || "fill" === o || "stroke" === o || -1 !== o.indexOf("Color") || v && P.test(d) ? (v || (d = ((d = dt(d)).length > 3 ? "rgba(" : "rgb(") + d.join(",") + ")"), i = Tt(w, o, p, d, !0, "transparent", i, 0, r)) : v && $.test(d) ? i = Tt(w, o, p, d, !0, null, i, 0, r) : (f = (c = parseFloat(p)) || 0 === c ? p.substr((c + "").length) : "", ("" === p || "auto" === p) && ("width" === o || "height" === o ? (c = ot(t, o, s), f = "px") : "left" === o || "top" === o ? (c = et(t, o, s), f = "px") : (c = "opacity" !== o ? 0 : 1, f = "")), (y = v && "=" === d.charAt(1)) ? (u = parseInt(d.charAt(0) + "1", 10), d = d.substr(2), u *= parseFloat(d), m = d.replace(x, "")) : (u = parseFloat(d), m = v ? d.replace(x, "") : ""), "" === m && (m = o in n ? n[o] : f), d = u || 0 === u ? (y ? u + c : u) + m : e[o], f !== m && ("" !== m || "lineHeight" === o) && (u || 0 === u) && c && (c = tt(t, o, c, f), "%" === m ? (c /= tt(t, o, 100, "%") / 100, !0 !== e.strictUnits && (p = c + "%")) : "em" === m || "rem" === m || "vw" === m || "vh" === m ? c /= tt(t, o, 1, m) : "px" !== m && (u = tt(t, o, u, m), m = "px"), y && (u || 0 === u) && (d = u + c + m)), y && (u += c), !c && 0 !== c || !u && 0 !== u ? void 0 !== w[o] && (d || d + "" != "NaN" && null != d) ? (i = new yt(w, o, u || c || 0, 0, i, -1, o, !1, 0, p, d)).xs0 = "none" !== d || "display" !== o && -1 === o.indexOf("Style") ? d : p : V("invalid " + o + " tween value: " + e[o]) : (i = new yt(w, o, c, u - c, i, 0, o, !1 !== h && ("px" === m || "zIndex" === o), 0, p, d)).xs0 = m)
                        }
                        r && i && !i.plugin && (i.plugin = r)
                    }
                    return i
                }, c.setRatio = function(t) {
                    var e, i, n, s = this._firstPT,
                        r = 1e-6;
                    if (1 !== t || this._tween._time !== this._tween._duration && 0 !== this._tween._time)
                        if (t || this._tween._time !== this._tween._duration && 0 !== this._tween._time || -1e-6 === this._tween._rawPrevTime)
                            for (; s;) {
                                if (e = s.c * t + s.s, s.r ? e = s.r(e) : r > e && e > -r && (e = 0), s.type)
                                    if (1 === s.type)
                                        if (2 === (n = s.l)) s.t[s.p] = s.xs0 + e + s.xs1 + s.xn1 + s.xs2;
                                        else if (3 === n) s.t[s.p] = s.xs0 + e + s.xs1 + s.xn1 + s.xs2 + s.xn2 + s.xs3;
                                else if (4 === n) s.t[s.p] = s.xs0 + e + s.xs1 + s.xn1 + s.xs2 + s.xn2 + s.xs3 + s.xn3 + s.xs4;
                                else if (5 === n) s.t[s.p] = s.xs0 + e + s.xs1 + s.xn1 + s.xs2 + s.xn2 + s.xs3 + s.xn3 + s.xs4 + s.xn4 + s.xs5;
                                else {
                                    for (i = s.xs0 + e + s.xs1, n = 1; n < s.l; n++) i += s["xn" + n] + s["xs" + (n + 1)];
                                    s.t[s.p] = i
                                } else -1 === s.type ? s.t[s.p] = s.xs0 : s.setRatio && s.setRatio(t);
                                else s.t[s.p] = e + s.xs0;
                                s = s._next
                            } else
                                for (; s;) 2 !== s.type ? s.t[s.p] = s.b : s.setRatio(t), s = s._next;
                        else
                            for (; s;) {
                                if (2 !== s.type)
                                    if (s.r && -1 !== s.type)
                                        if (e = s.r(s.s + s.c), s.type) {
                                            if (1 === s.type) {
                                                for (n = s.l, i = s.xs0 + e + s.xs1, n = 1; n < s.l; n++) i += s["xn" + n] + s["xs" + (n + 1)];
                                                s.t[s.p] = i
                                            }
                                        } else s.t[s.p] = e + s.xs0;
                                else s.t[s.p] = s.e;
                                else s.setRatio(t);
                                s = s._next
                            }
                }, c._enableTransforms = function(t) {
                    this._transform = this._transform || Xt(this._target, s, !0), this._transformType = this._transform.svg && Pt || !t && 3 !== this._transformType ? 2 : 3
                };
                var Zt = function() {
                    this.t[this.p] = this.e, this.data._linkCSSP(this, this._next, null, !0)
                };
                c._addLazySet = function(t, e, i) {
                    var n = this._firstPT = new yt(t, e, 0, 0, this._firstPT, 2);
                    n.e = i, n.setRatio = Zt, n.data = this
                }, c._linkCSSP = function(t, e, i, n) {
                    return t && (e && (e._prev = t), t._next && (t._next._prev = t._prev), t._prev ? t._prev._next = t._next : this._firstPT === t && (this._firstPT = t._next, n = !0), i ? i._next = t : n || null !== this._firstPT || (this._firstPT = t), t._next = e, t._prev = i), t
                }, c._mod = function(t) {
                    for (var e = this._firstPT; e;) "function" == typeof t[e.p] && (e.r = t[e.p]), e = e._next
                }, c._kill = function(e) {
                    var i, n, s, r = e;
                    if (e.autoAlpha || e.alpha) {
                        for (n in r = {}, e) r[n] = e[n];
                        r.opacity = 1, r.autoAlpha && (r.visibility = 1)
                    }
                    for (e.className && (i = this._classNamePT) && ((s = i.xfirst) && s._prev ? this._linkCSSP(s._prev, i._next, s._prev._prev) : s === this._firstPT && (this._firstPT = i._next), i._next && this._linkCSSP(i._next, i._next._next, s._prev), this._classNamePT = null), i = this._firstPT; i;) i.plugin && i.plugin !== n && i.plugin._kill && (i.plugin._kill(e), n = i.plugin), i = i._next;
                    return t.prototype._kill.call(this, r)
                };
                var Qt = function(t, e, i) {
                    var n, s, r, o;
                    if (t.slice)
                        for (s = t.length; --s > -1;) Qt(t[s], e, i);
                    else
                        for (s = (n = t.childNodes).length; --s > -1;) o = (r = n[s]).type, r.style && (e.push(it(r)), i && i.push(r)), 1 !== o && 9 !== o && 11 !== o || !r.childNodes.length || Qt(r, e, i)
                };
                return o.cascadeTo = function(t, i, n) {
                    var s, r, o, a, l = e.to(t, i, n),
                        c = [l],
                        h = [],
                        u = [],
                        p = [],
                        d = e._internals.reservedProps;
                    for (t = l._targets || l.target, Qt(t, h, p), l.render(i, !0, !0), Qt(t, u), l.render(0, !0, !0), l._enabled(!0), s = p.length; --s > -1;)
                        if ((r = nt(p[s], h[s], u[s])).firstMPT) {
                            for (o in r = r.difs, n) d[o] && (r[o] = n[o]);
                            for (o in a = {}, r) a[o] = h[s][o];
                            c.push(e.fromTo(p[s], i, a, r))
                        }
                    return c
                }, t.activate([o]), o
            }), !0),
            function() {
                var t = _gsScope._gsDefine.plugin({
                        propName: "roundProps",
                        version: "1.7.0",
                        priority: -1,
                        API: 2,
                        init: function(t, e, i) {
                            return this._tween = i, !0
                        }
                    }),
                    e = function(t) {
                        var e = 1 > t ? Math.pow(10, (t + "").length - 2) : 1;
                        return function(i) {
                            return (Math.round(i / t) * t * e | 0) / e
                        }
                    },
                    i = function(t, e) {
                        for (; t;) t.f || t.blob || (t.m = e || Math.round), t = t._next
                    },
                    n = t.prototype;
                n._onInitAllProps = function() {
                    var t, n, s, r, o = this._tween,
                        a = o.vars.roundProps,
                        l = {},
                        c = o._propLookup.roundProps;
                    if ("object" != typeof a || a.push)
                        for ("string" == typeof a && (a = a.split(",")), s = a.length; --s > -1;) l[a[s]] = Math.round;
                    else
                        for (r in a) l[r] = e(a[r]);
                    for (r in l)
                        for (t = o._firstPT; t;) n = t._next, t.pg ? t.t._mod(l) : t.n === r && (2 === t.f && t.t ? i(t.t._firstPT, l[r]) : (this._add(t.t, r, t.s, t.c, l[r]), n && (n._prev = t._prev), t._prev ? t._prev._next = n : o._firstPT === t && (o._firstPT = n), t._next = t._prev = null, o._propLookup[r] = c)), t = n;
                    return !1
                }, n._add = function(t, e, i, n, s) {
                    this._addTween(t, e, i, i + n, e, s || Math.round), this._overwriteProps.push(e)
                }
            }(), _gsScope._gsDefine.plugin({
                propName: "attr",
                API: 2,
                version: "0.6.1",
                init: function(t, e, i, n) {
                    var s, r;
                    if ("function" != typeof t.setAttribute) return !1;
                    for (s in e) "function" == typeof(r = e[s]) && (r = r(n, t)), this._addTween(t, "setAttribute", t.getAttribute(s) + "", r + "", s, !1, s), this._overwriteProps.push(s);
                    return !0
                }
            }), _gsScope._gsDefine.plugin({
                propName: "directionalRotation",
                version: "0.3.1",
                API: 2,
                init: function(t, e, i, n) {
                    "object" != typeof e && (e = {
                        rotation: e
                    }), this.finals = {};
                    var s, r, o, a, l, c, h = !0 === e.useRadians ? 2 * Math.PI : 360,
                        u = 1e-6;
                    for (s in e) "useRadians" !== s && ("function" == typeof(a = e[s]) && (a = a(n, t)), r = (c = (a + "").split("_"))[0], o = parseFloat("function" != typeof t[s] ? t[s] : t[s.indexOf("set") || "function" != typeof t["get" + s.substr(3)] ? s : "get" + s.substr(3)]()), l = (a = this.finals[s] = "string" == typeof r && "=" === r.charAt(1) ? o + parseInt(r.charAt(0) + "1", 10) * Number(r.substr(2)) : Number(r) || 0) - o, c.length && (-1 !== (r = c.join("_")).indexOf("short") && ((l %= h) !== l % (h / 2) && (l = 0 > l ? l + h : l - h)), -1 !== r.indexOf("_cw") && 0 > l ? l = (l + 9999999999 * h) % h - (l / h | 0) * h : -1 !== r.indexOf("ccw") && l > 0 && (l = (l - 9999999999 * h) % h - (l / h | 0) * h)), (l > u || -u > l) && (this._addTween(t, s, o, o + l, s), this._overwriteProps.push(s)));
                    return !0
                },
                set: function(t) {
                    var e;
                    if (1 !== t) this._super.setRatio.call(this, t);
                    else
                        for (e = this._firstPT; e;) e.f ? e.t[e.p](this.finals[e.p]) : e.t[e.p] = this.finals[e.p], e = e._next
                }
            })._autoCSS = !0, _gsScope._gsDefine("easing.Back", ["easing.Ease"], (function(t) {
                var e, i, n, s, r = _gsScope.GreenSockGlobals || _gsScope,
                    o = r.com.greensock,
                    a = 2 * Math.PI,
                    l = Math.PI / 2,
                    c = o._class,
                    h = function(e, i) {
                        var n = c("easing." + e, (function() {}), !0),
                            s = n.prototype = new t;
                        return s.constructor = n, s.getRatio = i, n
                    },
                    u = t.register || function() {},
                    p = function(t, e, i, n) {
                        var s = c("easing." + t, {
                            easeOut: new e,
                            easeIn: new i,
                            easeInOut: new n
                        }, !0);
                        return u(s, t), s
                    },
                    d = function(t, e, i) {
                        this.t = t, this.v = e, i && (this.next = i, i.prev = this, this.c = i.v - e, this.gap = i.t - t)
                    },
                    f = function(e, i) {
                        var n = c("easing." + e, (function(t) {
                                this._p1 = t || 0 === t ? t : 1.70158, this._p2 = 1.525 * this._p1
                            }), !0),
                            s = n.prototype = new t;
                        return s.constructor = n, s.getRatio = i, s.config = function(t) {
                            return new n(t)
                        }, n
                    },
                    m = p("Back", f("BackOut", (function(t) {
                        return (t -= 1) * t * ((this._p1 + 1) * t + this._p1) + 1
                    })), f("BackIn", (function(t) {
                        return t * t * ((this._p1 + 1) * t - this._p1)
                    })), f("BackInOut", (function(t) {
                        return (t *= 2) < 1 ? .5 * t * t * ((this._p2 + 1) * t - this._p2) : .5 * ((t -= 2) * t * ((this._p2 + 1) * t + this._p2) + 2)
                    }))),
                    _ = c("easing.SlowMo", (function(t, e, i) {
                        e = e || 0 === e ? e : .7, null == t ? t = .7 : t > 1 && (t = 1), this._p = 1 !== t ? e : 0, this._p1 = (1 - t) / 2, this._p2 = t, this._p3 = this._p1 + this._p2, this._calcEnd = !0 === i
                    }), !0),
                    g = _.prototype = new t;
                return g.constructor = _, g.getRatio = function(t) {
                    var e = t + (.5 - t) * this._p;
                    return t < this._p1 ? this._calcEnd ? 1 - (t = 1 - t / this._p1) * t : e - (t = 1 - t / this._p1) * t * t * t * e : t > this._p3 ? this._calcEnd ? 1 === t ? 0 : 1 - (t = (t - this._p3) / this._p1) * t : e + (t - e) * (t = (t - this._p3) / this._p1) * t * t * t : this._calcEnd ? 1 : e
                }, _.ease = new _(.7, .7), g.config = _.config = function(t, e, i) {
                    return new _(t, e, i)
                }, e = c("easing.SteppedEase", (function(t, e) {
                    t = t || 1, this._p1 = 1 / t, this._p2 = t + (e ? 0 : 1), this._p3 = e ? 1 : 0
                }), !0), (g = e.prototype = new t).constructor = e, g.getRatio = function(t) {
                    return 0 > t ? t = 0 : t >= 1 && (t = .999999999), ((this._p2 * t | 0) + this._p3) * this._p1
                }, g.config = e.config = function(t, i) {
                    return new e(t, i)
                }, i = c("easing.ExpoScaleEase", (function(t, e, i) {
                    this._p1 = Math.log(e / t), this._p2 = e - t, this._p3 = t, this._ease = i
                }), !0), (g = i.prototype = new t).constructor = i, g.getRatio = function(t) {
                    return this._ease && (t = this._ease.getRatio(t)), (this._p3 * Math.exp(this._p1 * t) - this._p3) / this._p2
                }, g.config = i.config = function(t, e, n) {
                    return new i(t, e, n)
                }, n = c("easing.RoughEase", (function(e) {
                    for (var i, n, s, r, o, a, l = (e = e || {}).taper || "none", c = [], h = 0, u = 0 | (e.points || 20), p = u, f = !1 !== e.randomize, m = !0 === e.clamp, _ = e.template instanceof t ? e.template : null, g = "number" == typeof e.strength ? .4 * e.strength : .4; --p > -1;) i = f ? Math.random() : 1 / u * p, n = _ ? _.getRatio(i) : i, "none" === l ? s = g : "out" === l ? s = (r = 1 - i) * r * g : "in" === l ? s = i * i * g : .5 > i ? s = (r = 2 * i) * r * .5 * g : s = (r = 2 * (1 - i)) * r * .5 * g, f ? n += Math.random() * s - .5 * s : p % 2 ? n += .5 * s : n -= .5 * s, m && (n > 1 ? n = 1 : 0 > n && (n = 0)), c[h++] = {
                        x: i,
                        y: n
                    };
                    for (c.sort((function(t, e) {
                            return t.x - e.x
                        })), a = new d(1, 1, null), p = u; --p > -1;) o = c[p], a = new d(o.x, o.y, a);
                    this._prev = new d(0, 0, 0 !== a.t ? a : a.next)
                }), !0), (g = n.prototype = new t).constructor = n, g.getRatio = function(t) {
                    var e = this._prev;
                    if (t > e.t) {
                        for (; e.next && t >= e.t;) e = e.next;
                        e = e.prev
                    } else
                        for (; e.prev && t <= e.t;) e = e.prev;
                    return this._prev = e, e.v + (t - e.t) / e.gap * e.c
                }, g.config = function(t) {
                    return new n(t)
                }, n.ease = new n, p("Bounce", h("BounceOut", (function(t) {
                    return 1 / 2.75 > t ? 7.5625 * t * t : 2 / 2.75 > t ? 7.5625 * (t -= 1.5 / 2.75) * t + .75 : 2.5 / 2.75 > t ? 7.5625 * (t -= 2.25 / 2.75) * t + .9375 : 7.5625 * (t -= 2.625 / 2.75) * t + .984375
                })), h("BounceIn", (function(t) {
                    return (t = 1 - t) < 1 / 2.75 ? 1 - 7.5625 * t * t : 2 / 2.75 > t ? 1 - (7.5625 * (t -= 1.5 / 2.75) * t + .75) : 2.5 / 2.75 > t ? 1 - (7.5625 * (t -= 2.25 / 2.75) * t + .9375) : 1 - (7.5625 * (t -= 2.625 / 2.75) * t + .984375)
                })), h("BounceInOut", (function(t) {
                    var e = .5 > t;
                    return t = 1 / 2.75 > (t = e ? 1 - 2 * t : 2 * t - 1) ? 7.5625 * t * t : 2 / 2.75 > t ? 7.5625 * (t -= 1.5 / 2.75) * t + .75 : 2.5 / 2.75 > t ? 7.5625 * (t -= 2.25 / 2.75) * t + .9375 : 7.5625 * (t -= 2.625 / 2.75) * t + .984375, e ? .5 * (1 - t) : .5 * t + .5
                }))), p("Circ", h("CircOut", (function(t) {
                    return Math.sqrt(1 - (t -= 1) * t)
                })), h("CircIn", (function(t) {
                    return -(Math.sqrt(1 - t * t) - 1)
                })), h("CircInOut", (function(t) {
                    return (t *= 2) < 1 ? -.5 * (Math.sqrt(1 - t * t) - 1) : .5 * (Math.sqrt(1 - (t -= 2) * t) + 1)
                }))), s = function(e, i, n) {
                    var s = c("easing." + e, (function(t, e) {
                            this._p1 = t >= 1 ? t : 1, this._p2 = (e || n) / (1 > t ? t : 1), this._p3 = this._p2 / a * (Math.asin(1 / this._p1) || 0), this._p2 = a / this._p2
                        }), !0),
                        r = s.prototype = new t;
                    return r.constructor = s, r.getRatio = i, r.config = function(t, e) {
                        return new s(t, e)
                    }, s
                }, p("Elastic", s("ElasticOut", (function(t) {
                    return this._p1 * Math.pow(2, -10 * t) * Math.sin((t - this._p3) * this._p2) + 1
                }), .3), s("ElasticIn", (function(t) {
                    return -this._p1 * Math.pow(2, 10 * (t -= 1)) * Math.sin((t - this._p3) * this._p2)
                }), .3), s("ElasticInOut", (function(t) {
                    return (t *= 2) < 1 ? this._p1 * Math.pow(2, 10 * (t -= 1)) * Math.sin((t - this._p3) * this._p2) * -.5 : this._p1 * Math.pow(2, -10 * (t -= 1)) * Math.sin((t - this._p3) * this._p2) * .5 + 1
                }), .45)), p("Expo", h("ExpoOut", (function(t) {
                    return 1 - Math.pow(2, -10 * t)
                })), h("ExpoIn", (function(t) {
                    return Math.pow(2, 10 * (t - 1)) - .001
                })), h("ExpoInOut", (function(t) {
                    return (t *= 2) < 1 ? .5 * Math.pow(2, 10 * (t - 1)) : .5 * (2 - Math.pow(2, -10 * (t - 1)))
                }))), p("Sine", h("SineOut", (function(t) {
                    return Math.sin(t * l)
                })), h("SineIn", (function(t) {
                    return 1 - Math.cos(t * l)
                })), h("SineInOut", (function(t) {
                    return -.5 * (Math.cos(Math.PI * t) - 1)
                }))), c("easing.EaseLookup", {
                    find: function(e) {
                        return t.map[e]
                    }
                }, !0), u(r.SlowMo, "SlowMo", "ease,"), u(n, "RoughEase", "ease,"), u(e, "SteppedEase", "ease,"), m
            }), !0)
    })), _gsScope._gsDefine && _gsScope._gsQueue.pop()(),
    function(t, e) {
        "use strict";
        var i = {},
            n = t.document,
            s = t.GreenSockGlobals = t.GreenSockGlobals || t,
            r = s[e];
        if (r) return "undefined" != typeof module && module.exports && (module.exports = r), r;
        var o, a, l, c, h, u = function(t) {
                var e, i = t.split("."),
                    n = s;
                for (e = 0; e < i.length; e++) n[i[e]] = n = n[i[e]] || {};
                return n
            },
            p = u("com.greensock"),
            d = 1e-10,
            f = function(t) {
                var e, i = [],
                    n = t.length;
                for (e = 0; e !== n; i.push(t[e++]));
                return i
            },
            m = function() {},
            _ = function() {
                var t = Object.prototype.toString,
                    e = t.call([]);
                return function(i) {
                    return null != i && (i instanceof Array || "object" == typeof i && !!i.push && t.call(i) === e)
                }
            }(),
            g = {},
            v = function(n, r, o, a) {
                this.sc = g[n] ? g[n].sc : [], g[n] = this, this.gsClass = null, this.func = o;
                var l = [];
                this.check = function(c) {
                    for (var h, p, d, f, m = r.length, _ = m; --m > -1;)(h = g[r[m]] || new v(r[m], [])).gsClass ? (l[m] = h.gsClass, _--) : c && h.sc.push(this);
                    if (0 === _ && o) {
                        if (d = (p = ("com.greensock." + n).split(".")).pop(), f = u(p.join("."))[d] = this.gsClass = o.apply(o, l), a)
                            if (s[d] = i[d] = f, "undefined" != typeof module && module.exports)
                                if (n === e)
                                    for (m in module.exports = i[e] = f, i) f[m] = i[m];
                                else i[e] && (i[e][d] = f);
                        else "function" == typeof define && define.amd && define((t.GreenSockAMDPath ? t.GreenSockAMDPath + "/" : "") + n.split(".").pop(), [], (function() {
                            return f
                        }));
                        for (m = 0; m < this.sc.length; m++) this.sc[m].check()
                    }
                }, this.check(!0)
            },
            y = t._gsDefine = function(t, e, i, n) {
                return new v(t, e, i, n)
            },
            w = p._class = function(t, e, i) {
                return e = e || function() {}, y(t, [], (function() {
                    return e
                }), i), e
            };
        y.globals = s;
        var T = [0, 0, 1, 1],
            x = w("easing.Ease", (function(t, e, i, n) {
                this._func = t, this._type = i || 0, this._power = n || 0, this._params = e ? T.concat(e) : T
            }), !0),
            b = x.map = {},
            k = x.register = function(t, e, i, n) {
                for (var s, r, o, a, l = e.split(","), c = l.length, h = (i || "easeIn,easeOut,easeInOut").split(","); --c > -1;)
                    for (r = l[c], s = n ? w("easing." + r, null, !0) : p.easing[r] || {}, o = h.length; --o > -1;) a = h[o], b[r + "." + a] = b[a + r] = s[a] = t.getRatio ? t : t[a] || new t
            };
        for ((l = x.prototype)._calcEnd = !1, l.getRatio = function(t) {
                if (this._func) return this._params[0] = t, this._func.apply(null, this._params);
                var e = this._type,
                    i = this._power,
                    n = 1 === e ? 1 - t : 2 === e ? t : .5 > t ? 2 * t : 2 * (1 - t);
                return 1 === i ? n *= n : 2 === i ? n *= n * n : 3 === i ? n *= n * n * n : 4 === i && (n *= n * n * n * n), 1 === e ? 1 - n : 2 === e ? n : .5 > t ? n / 2 : 1 - n / 2
            }, a = (o = ["Linear", "Quad", "Cubic", "Quart", "Quint,Strong"]).length; --a > -1;) l = o[a] + ",Power" + a, k(new x(null, null, 1, a), l, "easeOut", !0), k(new x(null, null, 2, a), l, "easeIn" + (0 === a ? ",easeNone" : "")), k(new x(null, null, 3, a), l, "easeInOut");
        b.linear = p.easing.Linear.easeIn, b.swing = p.easing.Quad.easeInOut;
        var S = w("events.EventDispatcher", (function(t) {
            this._listeners = {}, this._eventTarget = t || this
        }));
        (l = S.prototype).addEventListener = function(t, e, i, n, s) {
            s = s || 0;
            var r, o, a = this._listeners[t],
                l = 0;
            for (this !== c || h || c.wake(), null == a && (this._listeners[t] = a = []), o = a.length; --o > -1;)(r = a[o]).c === e && r.s === i ? a.splice(o, 1) : 0 === l && r.pr < s && (l = o + 1);
            a.splice(l, 0, {
                c: e,
                s: i,
                up: n,
                pr: s
            })
        }, l.removeEventListener = function(t, e) {
            var i, n = this._listeners[t];
            if (n)
                for (i = n.length; --i > -1;)
                    if (n[i].c === e) return void n.splice(i, 1)
        }, l.dispatchEvent = function(t) {
            var e, i, n, s = this._listeners[t];
            if (s)
                for ((e = s.length) > 1 && (s = s.slice(0)), i = this._eventTarget; --e > -1;)(n = s[e]) && (n.up ? n.c.call(n.s || i, {
                    type: t,
                    target: i
                }) : n.c.call(n.s || i))
        };
        var P = t.requestAnimationFrame,
            C = t.cancelAnimationFrame,
            O = Date.now || function() {
                return (new Date).getTime()
            },
            A = O();
        for (a = (o = ["ms", "moz", "webkit", "o"]).length; --a > -1 && !P;) P = t[o[a] + "RequestAnimationFrame"], C = t[o[a] + "CancelAnimationFrame"] || t[o[a] + "CancelRequestAnimationFrame"];
        w("Ticker", (function(t, e) {
            var i, s, r, o, a, l = this,
                u = O(),
                p = !(!1 === e || !P) && "auto",
                f = 500,
                _ = 33,
                g = "tick",
                v = function(t) {
                    var e, n, c = O() - A;
                    c > f && (u += c - _), A += c, l.time = (A - u) / 1e3, e = l.time - a, (!i || e > 0 || !0 === t) && (l.frame++, a += e + (e >= o ? .004 : o - e), n = !0), !0 !== t && (r = s(v)), n && l.dispatchEvent(g)
                };
            S.call(l), l.time = l.frame = 0, l.tick = function() {
                v(!0)
            }, l.lagSmoothing = function(t, e) {
                return arguments.length ? (f = t || 1 / d, void(_ = Math.min(e, f, 0))) : 1 / d > f
            }, l.sleep = function() {
                null != r && (p && C ? C(r) : clearTimeout(r), s = m, r = null, l === c && (h = !1))
            }, l.wake = function(t) {
                null !== r ? l.sleep() : t ? u += -A + (A = O()) : l.frame > 10 && (A = O() - f + 5), s = 0 === i ? m : p && P ? P : function(t) {
                    return setTimeout(t, 1e3 * (a - l.time) + 1 | 0)
                }, l === c && (h = !0), v(2)
            }, l.fps = function(t) {
                return arguments.length ? (o = 1 / ((i = t) || 60), a = this.time + o, void l.wake()) : i
            }, l.useRAF = function(t) {
                return arguments.length ? (l.sleep(), p = t, void l.fps(i)) : p
            }, l.fps(t), setTimeout((function() {
                "auto" === p && l.frame < 5 && "hidden" !== (n || {}).visibilityState && l.useRAF(!1)
            }), 1500)
        })), (l = p.Ticker.prototype = new p.events.EventDispatcher).constructor = p.Ticker;
        var E = w("core.Animation", (function(t, e) {
            if (this.vars = e = e || {}, this._duration = this._totalDuration = t || 0, this._delay = Number(e.delay) || 0, this._timeScale = 1, this._active = !0 === e.immediateRender, this.data = e.data, this._reversed = !0 === e.reversed, Z) {
                h || c.wake();
                var i = this.vars.useFrames ? G : Z;
                i.add(this, i._time), this.vars.paused && this.paused(!0)
            }
        }));
        c = E.ticker = new p.Ticker, (l = E.prototype)._dirty = l._gc = l._initted = l._paused = !1, l._totalTime = l._time = 0, l._rawPrevTime = -1, l._next = l._last = l._onUpdate = l._timeline = l.timeline = null, l._paused = !1;
        var R = function() {
            h && O() - A > 2e3 && ("hidden" !== (n || {}).visibilityState || !c.lagSmoothing()) && c.wake();
            var t = setTimeout(R, 2e3);
            t.unref && t.unref()
        };
        R(), l.play = function(t, e) {
            return null != t && this.seek(t, e), this.reversed(!1).paused(!1)
        }, l.pause = function(t, e) {
            return null != t && this.seek(t, e), this.paused(!0)
        }, l.resume = function(t, e) {
            return null != t && this.seek(t, e), this.paused(!1)
        }, l.seek = function(t, e) {
            return this.totalTime(Number(t), !1 !== e)
        }, l.restart = function(t, e) {
            return this.reversed(!1).paused(!1).totalTime(t ? -this._delay : 0, !1 !== e, !0)
        }, l.reverse = function(t, e) {
            return null != t && this.seek(t || this.totalDuration(), e), this.reversed(!0).paused(!1)
        }, l.render = function() {}, l.invalidate = function() {
            return this._time = this._totalTime = 0, this._initted = this._gc = !1, this._rawPrevTime = -1, (this._gc || !this.timeline) && this._enabled(!0), this
        }, l.isActive = function() {
            var t, e = this._timeline,
                i = this._startTime;
            return !e || !this._gc && !this._paused && e.isActive() && (t = e.rawTime(!0)) >= i && t < i + this.totalDuration() / this._timeScale - 1e-7
        }, l._enabled = function(t, e) {
            return h || c.wake(), this._gc = !t, this._active = this.isActive(), !0 !== e && (t && !this.timeline ? this._timeline.add(this, this._startTime - this._delay) : !t && this.timeline && this._timeline._remove(this, !0)), !1
        }, l._kill = function() {
            return this._enabled(!1, !1)
        }, l.kill = function(t, e) {
            return this._kill(t, e), this
        }, l._uncache = function(t) {
            for (var e = t ? this : this.timeline; e;) e._dirty = !0, e = e.timeline;
            return this
        }, l._swapSelfInParams = function(t) {
            for (var e = t.length, i = t.concat(); --e > -1;) "{self}" === t[e] && (i[e] = this);
            return i
        }, l._callback = function(t) {
            var e = this.vars,
                i = e[t],
                n = e[t + "Params"],
                s = e[t + "Scope"] || e.callbackScope || this;
            switch (n ? n.length : 0) {
                case 0:
                    i.call(s);
                    break;
                case 1:
                    i.call(s, n[0]);
                    break;
                case 2:
                    i.call(s, n[0], n[1]);
                    break;
                default:
                    i.apply(s, n)
            }
        }, l.eventCallback = function(t, e, i, n) {
            if ("on" === (t || "").substr(0, 2)) {
                var s = this.vars;
                if (1 === arguments.length) return s[t];
                null == e ? delete s[t] : (s[t] = e, s[t + "Params"] = _(i) && -1 !== i.join("").indexOf("{self}") ? this._swapSelfInParams(i) : i, s[t + "Scope"] = n), "onUpdate" === t && (this._onUpdate = e)
            }
            return this
        }, l.delay = function(t) {
            return arguments.length ? (this._timeline.smoothChildTiming && this.startTime(this._startTime + t - this._delay), this._delay = t, this) : this._delay
        }, l.duration = function(t) {
            return arguments.length ? (this._duration = this._totalDuration = t, this._uncache(!0), this._timeline.smoothChildTiming && this._time > 0 && this._time < this._duration && 0 !== t && this.totalTime(this._totalTime * (t / this._duration), !0), this) : (this._dirty = !1, this._duration)
        }, l.totalDuration = function(t) {
            return this._dirty = !1, arguments.length ? this.duration(t) : this._totalDuration
        }, l.time = function(t, e) {
            return arguments.length ? (this._dirty && this.totalDuration(), this.totalTime(t > this._duration ? this._duration : t, e)) : this._time
        }, l.totalTime = function(t, e, i) {
            if (h || c.wake(), !arguments.length) return this._totalTime;
            if (this._timeline) {
                if (0 > t && !i && (t += this.totalDuration()), this._timeline.smoothChildTiming) {
                    this._dirty && this.totalDuration();
                    var n = this._totalDuration,
                        s = this._timeline;
                    if (t > n && !i && (t = n), this._startTime = (this._paused ? this._pauseTime : s._time) - (this._reversed ? n - t : t) / this._timeScale, s._dirty || this._uncache(!1), s._timeline)
                        for (; s._timeline;) s._timeline._time !== (s._startTime + s._totalTime) / s._timeScale && s.totalTime(s._totalTime, !0), s = s._timeline
                }
                this._gc && this._enabled(!0, !1), (this._totalTime !== t || 0 === this._duration) && (z.length && K(), this.render(t, e, !1), z.length && K())
            }
            return this
        }, l.progress = l.totalProgress = function(t, e) {
            var i = this.duration();
            return arguments.length ? this.totalTime(i * t, e) : i ? this._time / i : this.ratio
        }, l.startTime = function(t) {
            return arguments.length ? (t !== this._startTime && (this._startTime = t, this.timeline && this.timeline._sortChildren && this.timeline.add(this, t - this._delay)), this) : this._startTime
        }, l.endTime = function(t) {
            return this._startTime + (0 != t ? this.totalDuration() : this.duration()) / this._timeScale
        }, l.timeScale = function(t) {
            if (!arguments.length) return this._timeScale;
            var e, i;
            for (t = t || d, this._timeline && this._timeline.smoothChildTiming && (i = (e = this._pauseTime) || 0 === e ? e : this._timeline.totalTime(), this._startTime = i - (i - this._startTime) * this._timeScale / t), this._timeScale = t, i = this.timeline; i && i.timeline;) i._dirty = !0, i.totalDuration(), i = i.timeline;
            return this
        }, l.reversed = function(t) {
            return arguments.length ? (t != this._reversed && (this._reversed = t, this.totalTime(this._timeline && !this._timeline.smoothChildTiming ? this.totalDuration() - this._totalTime : this._totalTime, !0)), this) : this._reversed
        }, l.paused = function(t) {
            if (!arguments.length) return this._paused;
            var e, i, n = this._timeline;
            return t != this._paused && n && (h || t || c.wake(), i = (e = n.rawTime()) - this._pauseTime, !t && n.smoothChildTiming && (this._startTime += i, this._uncache(!1)), this._pauseTime = t ? e : null, this._paused = t, this._active = this.isActive(), !t && 0 !== i && this._initted && this.duration() && (e = n.smoothChildTiming ? this._totalTime : (e - this._startTime) / this._timeScale, this.render(e, e === this._totalTime, !0))), this._gc && !t && this._enabled(!0, !1), this
        };
        var M = w("core.SimpleTimeline", (function(t) {
            E.call(this, 0, t), this.autoRemoveChildren = this.smoothChildTiming = !0
        }));
        (l = M.prototype = new E).constructor = M, l.kill()._gc = !1, l._first = l._last = l._recent = null, l._sortChildren = !1, l.add = l.insert = function(t, e) {
            var i, n;
            if (t._startTime = Number(e || 0) + t._delay, t._paused && this !== t._timeline && (t._pauseTime = this.rawTime() - (t._timeline.rawTime() - t._pauseTime)), t.timeline && t.timeline._remove(t, !0), t.timeline = t._timeline = this, t._gc && t._enabled(!0, !0), i = this._last, this._sortChildren)
                for (n = t._startTime; i && i._startTime > n;) i = i._prev;
            return i ? (t._next = i._next, i._next = t) : (t._next = this._first, this._first = t), t._next ? t._next._prev = t : this._last = t, t._prev = i, this._recent = t, this._timeline && this._uncache(!0), this
        }, l._remove = function(t, e) {
            return t.timeline === this && (e || t._enabled(!1, !0), t._prev ? t._prev._next = t._next : this._first === t && (this._first = t._next), t._next ? t._next._prev = t._prev : this._last === t && (this._last = t._prev), t._next = t._prev = t.timeline = null, t === this._recent && (this._recent = this._last), this._timeline && this._uncache(!0)), this
        }, l.render = function(t, e, i) {
            var n, s = this._first;
            for (this._totalTime = this._time = this._rawPrevTime = t; s;) n = s._next, (s._active || t >= s._startTime && !s._paused && !s._gc) && (s._reversed ? s.render((s._dirty ? s.totalDuration() : s._totalDuration) - (t - s._startTime) * s._timeScale, e, i) : s.render((t - s._startTime) * s._timeScale, e, i)), s = n
        }, l.rawTime = function() {
            return h || c.wake(), this._totalTime
        };
        var I = w("TweenLite", (function(e, i, n) {
                if (E.call(this, i, n), this.render = I.prototype.render, null == e) throw "Cannot tween a null target.";
                this.target = e = "string" != typeof e ? e : I.selector(e) || e;
                var s, r, o, a = e.jquery || e.length && e !== t && e[0] && (e[0] === t || e[0].nodeType && e[0].style && !e.nodeType),
                    l = this.vars.overwrite;
                if (this._overwrite = l = null == l ? V[I.defaultOverwrite] : "number" == typeof l ? l >> 0 : V[l], (a || e instanceof Array || e.push && _(e)) && "number" != typeof e[0])
                    for (this._targets = o = f(e), this._propLookup = [], this._siblings = [], s = 0; s < o.length; s++)(r = o[s]) ? "string" != typeof r ? r.length && r !== t && r[0] && (r[0] === t || r[0].nodeType && r[0].style && !r.nodeType) ? (o.splice(s--, 1), this._targets = o = o.concat(f(r))) : (this._siblings[s] = J(r, this, !1), 1 === l && this._siblings[s].length > 1 && et(r, this, null, 1, this._siblings[s])) : "string" == typeof(r = o[s--] = I.selector(r)) && o.splice(s + 1, 1) : o.splice(s--, 1);
                else this._propLookup = {}, this._siblings = J(e, this, !1), 1 === l && this._siblings.length > 1 && et(e, this, null, 1, this._siblings);
                (this.vars.immediateRender || 0 === i && 0 === this._delay && !1 !== this.vars.immediateRender) && (this._time = -d, this.render(Math.min(0, -this._delay)))
            }), !0),
            D = function(e) {
                return e && e.length && e !== t && e[0] && (e[0] === t || e[0].nodeType && e[0].style && !e.nodeType)
            },
            $ = function(t, e) {
                var i, n = {};
                for (i in t) U[i] || i in e && "transform" !== i && "x" !== i && "y" !== i && "width" !== i && "height" !== i && "className" !== i && "border" !== i || !(!q[i] || q[i] && q[i]._autoCSS) || (n[i] = t[i], delete t[i]);
                t.css = n
            };
        (l = I.prototype = new E).constructor = I, l.kill()._gc = !1, l.ratio = 0, l._firstPT = l._targets = l._overwrittenProps = l._startAt = null, l._notifyPluginsOfEnabled = l._lazy = !1, I.version = "2.0.1", I.defaultEase = l._ease = new x(null, null, 1, 1), I.defaultOverwrite = "auto", I.ticker = c, I.autoSleep = 120, I.lagSmoothing = function(t, e) {
            c.lagSmoothing(t, e)
        }, I.selector = t.$ || t.jQuery || function(e) {
            var i = t.$ || t.jQuery;
            return i ? (I.selector = i, i(e)) : (n || (n = t.document), n ? n.querySelectorAll ? n.querySelectorAll(e) : n.getElementById("#" === e.charAt(0) ? e.substr(1) : e) : e)
        };
        var z = [],
            L = {},
            F = /(?:(-|-=|\+=)?\d*\.?\d*(?:e[\-+]?\d+)?)[0-9]/gi,
            N = /[\+-]=-?[\.\d]/,
            j = function(t) {
                for (var e, i = this._firstPT, n = 1e-6; i;) e = i.blob ? 1 === t && null != this.end ? this.end : t ? this.join("") : this.start : i.c * t + i.s, i.m ? e = i.m.call(this._tween, e, this._target || i.t, this._tween) : n > e && e > -n && !i.blob && (e = 0), i.f ? i.fp ? i.t[i.p](i.fp, e) : i.t[i.p](e) : i.t[i.p] = e, i = i._next
            },
            H = function(t, e, i, n) {
                var s, r, o, a, l, c, h, u = [],
                    p = 0,
                    d = "",
                    f = 0;
                for (u.start = t, u.end = e, t = u[0] = t + "", e = u[1] = e + "", i && (i(u), t = u[0], e = u[1]), u.length = 0, s = t.match(F) || [], r = e.match(F) || [], n && (n._next = null, n.blob = 1, u._firstPT = u._applyPT = n), l = r.length, a = 0; l > a; a++) h = r[a], d += (c = e.substr(p, e.indexOf(h, p) - p)) || !a ? c : ",", p += c.length, f ? f = (f + 1) % 5 : "rgba(" === c.substr(-5) && (f = 1), h === s[a] || s.length <= a ? d += h : (d && (u.push(d), d = ""), o = parseFloat(s[a]), u.push(o), u._firstPT = {
                    _next: u._firstPT,
                    t: u,
                    p: u.length - 1,
                    s: o,
                    c: ("=" === h.charAt(1) ? parseInt(h.charAt(0) + "1", 10) * parseFloat(h.substr(2)) : parseFloat(h) - o) || 0,
                    f: 0,
                    m: f && 4 > f ? Math.round : 0
                }), p += h.length;
                return (d += e.substr(p)) && u.push(d), u.setRatio = j, N.test(e) && (u.end = null), u
            },
            B = function(t, e, i, n, s, r, o, a, l) {
                "function" == typeof n && (n = n(l || 0, t));
                var c = typeof t[e],
                    h = "function" !== c ? "" : e.indexOf("set") || "function" != typeof t["get" + e.substr(3)] ? e : "get" + e.substr(3),
                    u = "get" !== i ? i : h ? o ? t[h](o) : t[h]() : t[e],
                    p = "string" == typeof n && "=" === n.charAt(1),
                    d = {
                        t: t,
                        p: e,
                        s: u,
                        f: "function" === c,
                        pg: 0,
                        n: s || e,
                        m: r ? "function" == typeof r ? r : Math.round : 0,
                        pr: 0,
                        c: p ? parseInt(n.charAt(0) + "1", 10) * parseFloat(n.substr(2)) : parseFloat(n) - u || 0
                    };
                return ("number" != typeof u || "number" != typeof n && !p) && (o || isNaN(u) || !p && isNaN(n) || "boolean" == typeof u || "boolean" == typeof n ? (d.fp = o, d = {
                    t: H(u, p ? parseFloat(d.s) + d.c + (d.s + "").replace(/[0-9\-\.]/g, "") : n, a || I.defaultStringFilter, d),
                    p: "setRatio",
                    s: 0,
                    c: 1,
                    f: 2,
                    pg: 0,
                    n: s || e,
                    pr: 0,
                    m: 0
                }) : (d.s = parseFloat(u), p || (d.c = parseFloat(n) - d.s || 0))), d.c ? ((d._next = this._firstPT) && (d._next._prev = d), this._firstPT = d, d) : void 0
            },
            X = I._internals = {
                isArray: _,
                isSelector: D,
                lazyTweens: z,
                blobDif: H
            },
            q = I._plugins = {},
            Y = X.tweenLookup = {},
            W = 0,
            U = X.reservedProps = {
                ease: 1,
                delay: 1,
                overwrite: 1,
                onComplete: 1,
                onCompleteParams: 1,
                onCompleteScope: 1,
                useFrames: 1,
                runBackwards: 1,
                startAt: 1,
                onUpdate: 1,
                onUpdateParams: 1,
                onUpdateScope: 1,
                onStart: 1,
                onStartParams: 1,
                onStartScope: 1,
                onReverseComplete: 1,
                onReverseCompleteParams: 1,
                onReverseCompleteScope: 1,
                onRepeat: 1,
                onRepeatParams: 1,
                onRepeatScope: 1,
                easeParams: 1,
                yoyo: 1,
                immediateRender: 1,
                repeat: 1,
                repeatDelay: 1,
                data: 1,
                paused: 1,
                reversed: 1,
                autoCSS: 1,
                lazy: 1,
                onOverwrite: 1,
                callbackScope: 1,
                stringFilter: 1,
                id: 1,
                yoyoEase: 1
            },
            V = {
                none: 0,
                all: 1,
                auto: 2,
                concurrent: 3,
                allOnStart: 4,
                preexisting: 5,
                true: 1,
                false: 0
            },
            G = E._rootFramesTimeline = new M,
            Z = E._rootTimeline = new M,
            Q = 30,
            K = X.lazyRender = function() {
                var t, e = z.length;
                for (L = {}; --e > -1;)(t = z[e]) && !1 !== t._lazy && (t.render(t._lazy[0], t._lazy[1], !0), t._lazy = !1);
                z.length = 0
            };
        Z._startTime = c.time, G._startTime = c.frame, Z._active = G._active = !0, setTimeout(K, 1), E._updateRoot = I.render = function() {
            var t, e, i;
            if (z.length && K(), Z.render((c.time - Z._startTime) * Z._timeScale, !1, !1), G.render((c.frame - G._startTime) * G._timeScale, !1, !1), z.length && K(), c.frame >= Q) {
                for (i in Q = c.frame + (parseInt(I.autoSleep, 10) || 120), Y) {
                    for (t = (e = Y[i].tweens).length; --t > -1;) e[t]._gc && e.splice(t, 1);
                    0 === e.length && delete Y[i]
                }
                if ((!(i = Z._first) || i._paused) && I.autoSleep && !G._first && 1 === c._listeners.tick.length) {
                    for (; i && i._paused;) i = i._next;
                    i || c.sleep()
                }
            }
        }, c.addEventListener("tick", E._updateRoot);
        var J = function(t, e, i) {
                var n, s, r = t._gsTweenID;
                if (Y[r || (t._gsTweenID = r = "t" + W++)] || (Y[r] = {
                        target: t,
                        tweens: []
                    }), e && ((n = Y[r].tweens)[s = n.length] = e, i))
                    for (; --s > -1;) n[s] === e && n.splice(s, 1);
                return Y[r].tweens
            },
            tt = function(t, e, i, n) {
                var s, r, o = t.vars.onOverwrite;
                return o && (s = o(t, e, i, n)), (o = I.onOverwrite) && (r = o(t, e, i, n)), !1 !== s && !1 !== r
            },
            et = function(t, e, i, n, s) {
                var r, o, a, l;
                if (1 === n || n >= 4) {
                    for (l = s.length, r = 0; l > r; r++)
                        if ((a = s[r]) !== e) a._gc || a._kill(null, t, e) && (o = !0);
                        else if (5 === n) break;
                    return o
                }
                var c, h = e._startTime + d,
                    u = [],
                    p = 0,
                    f = 0 === e._duration;
                for (r = s.length; --r > -1;)(a = s[r]) === e || a._gc || a._paused || (a._timeline !== e._timeline ? (c = c || it(e, 0, f), 0 === it(a, c, f) && (u[p++] = a)) : a._startTime <= h && a._startTime + a.totalDuration() / a._timeScale > h && ((f || !a._initted) && h - a._startTime <= 2e-10 || (u[p++] = a)));
                for (r = p; --r > -1;)
                    if (a = u[r], 2 === n && a._kill(i, t, e) && (o = !0), 2 !== n || !a._firstPT && a._initted) {
                        if (2 !== n && !tt(a, e)) continue;
                        a._enabled(!1, !1) && (o = !0)
                    }
                return o
            },
            it = function(t, e, i) {
                for (var n = t._timeline, s = n._timeScale, r = t._startTime; n._timeline;) {
                    if (r += n._startTime, s *= n._timeScale, n._paused) return -100;
                    n = n._timeline
                }
                return (r /= s) > e ? r - e : i && r === e || !t._initted && 2 * d > r - e ? d : (r += t.totalDuration() / t._timeScale / s) > e + d ? 0 : r - e - d
            };
        l._init = function() {
            var t, e, i, n, s, r, o = this.vars,
                a = this._overwrittenProps,
                l = this._duration,
                c = !!o.immediateRender,
                h = o.ease;
            if (o.startAt) {
                for (n in this._startAt && (this._startAt.render(-1, !0), this._startAt.kill()), s = {}, o.startAt) s[n] = o.startAt[n];
                if (s.data = "isStart", s.overwrite = !1, s.immediateRender = !0, s.lazy = c && !1 !== o.lazy, s.startAt = s.delay = null, s.onUpdate = o.onUpdate, s.onUpdateParams = o.onUpdateParams, s.onUpdateScope = o.onUpdateScope || o.callbackScope || this, this._startAt = I.to(this.target || {}, 0, s), c)
                    if (this._time > 0) this._startAt = null;
                    else if (0 !== l) return
            } else if (o.runBackwards && 0 !== l)
                if (this._startAt) this._startAt.render(-1, !0), this._startAt.kill(), this._startAt = null;
                else {
                    for (n in 0 !== this._time && (c = !1), i = {}, o) U[n] && "autoCSS" !== n || (i[n] = o[n]);
                    if (i.overwrite = 0, i.data = "isFromStart", i.lazy = c && !1 !== o.lazy, i.immediateRender = c, this._startAt = I.to(this.target, 0, i), c) {
                        if (0 === this._time) return
                    } else this._startAt._init(), this._startAt._enabled(!1), this.vars.immediateRender && (this._startAt = null)
                }
            if (this._ease = h = h ? h instanceof x ? h : "function" == typeof h ? new x(h, o.easeParams) : b[h] || I.defaultEase : I.defaultEase, o.easeParams instanceof Array && h.config && (this._ease = h.config.apply(h, o.easeParams)), this._easeType = this._ease._type, this._easePower = this._ease._power, this._firstPT = null, this._targets)
                for (r = this._targets.length, t = 0; r > t; t++) this._initProps(this._targets[t], this._propLookup[t] = {}, this._siblings[t], a ? a[t] : null, t) && (e = !0);
            else e = this._initProps(this.target, this._propLookup, this._siblings, a, 0);
            if (e && I._onPluginEvent("_onInitAllProps", this), a && (this._firstPT || "function" != typeof this.target && this._enabled(!1, !1)), o.runBackwards)
                for (i = this._firstPT; i;) i.s += i.c, i.c = -i.c, i = i._next;
            this._onUpdate = o.onUpdate, this._initted = !0
        }, l._initProps = function(e, i, n, s, r) {
            var o, a, l, c, h, u;
            if (null == e) return !1;
            for (o in L[e._gsTweenID] && K(), this.vars.css || e.style && e !== t && e.nodeType && q.css && !1 !== this.vars.autoCSS && $(this.vars, e), this.vars)
                if (u = this.vars[o], U[o]) u && (u instanceof Array || u.push && _(u)) && -1 !== u.join("").indexOf("{self}") && (this.vars[o] = u = this._swapSelfInParams(u, this));
                else if (q[o] && (c = new q[o])._onInitTween(e, this.vars[o], this, r)) {
                for (this._firstPT = h = {
                        _next: this._firstPT,
                        t: c,
                        p: "setRatio",
                        s: 0,
                        c: 1,
                        f: 1,
                        n: o,
                        pg: 1,
                        pr: c._priority,
                        m: 0
                    }, a = c._overwriteProps.length; --a > -1;) i[c._overwriteProps[a]] = this._firstPT;
                (c._priority || c._onInitAllProps) && (l = !0), (c._onDisable || c._onEnable) && (this._notifyPluginsOfEnabled = !0), h._next && (h._next._prev = h)
            } else i[o] = B.call(this, e, o, "get", u, o, 0, null, this.vars.stringFilter, r);
            return s && this._kill(s, e) ? this._initProps(e, i, n, s, r) : this._overwrite > 1 && this._firstPT && n.length > 1 && et(e, this, i, this._overwrite, n) ? (this._kill(i, e), this._initProps(e, i, n, s, r)) : (this._firstPT && (!1 !== this.vars.lazy && this._duration || this.vars.lazy && !this._duration) && (L[e._gsTweenID] = !0), l)
        }, l.render = function(t, e, i) {
            var n, s, r, o, a = this._time,
                l = this._duration,
                c = this._rawPrevTime;
            if (t >= l - 1e-7 && t >= 0) this._totalTime = this._time = l, this.ratio = this._ease._calcEnd ? this._ease.getRatio(1) : 1, this._reversed || (n = !0, s = "onComplete", i = i || this._timeline.autoRemoveChildren), 0 === l && (this._initted || !this.vars.lazy || i) && (this._startTime === this._timeline._duration && (t = 0), (0 > c || 0 >= t && t >= -1e-7 || c === d && "isPause" !== this.data) && c !== t && (i = !0, c > d && (s = "onReverseComplete")), this._rawPrevTime = o = !e || t || c === t ? t : d);
            else if (1e-7 > t) this._totalTime = this._time = 0, this.ratio = this._ease._calcEnd ? this._ease.getRatio(0) : 0, (0 !== a || 0 === l && c > 0) && (s = "onReverseComplete", n = this._reversed), 0 > t && (this._active = !1, 0 === l && (this._initted || !this.vars.lazy || i) && (c >= 0 && (c !== d || "isPause" !== this.data) && (i = !0), this._rawPrevTime = o = !e || t || c === t ? t : d)), (!this._initted || this._startAt && this._startAt.progress()) && (i = !0);
            else if (this._totalTime = this._time = t, this._easeType) {
                var h = t / l,
                    u = this._easeType,
                    p = this._easePower;
                (1 === u || 3 === u && h >= .5) && (h = 1 - h), 3 === u && (h *= 2), 1 === p ? h *= h : 2 === p ? h *= h * h : 3 === p ? h *= h * h * h : 4 === p && (h *= h * h * h * h), this.ratio = 1 === u ? 1 - h : 2 === u ? h : .5 > t / l ? h / 2 : 1 - h / 2
            } else this.ratio = this._ease.getRatio(t / l);
            if (this._time !== a || i) {
                if (!this._initted) {
                    if (this._init(), !this._initted || this._gc) return;
                    if (!i && this._firstPT && (!1 !== this.vars.lazy && this._duration || this.vars.lazy && !this._duration)) return this._time = this._totalTime = a, this._rawPrevTime = c, z.push(this), void(this._lazy = [t, e]);
                    this._time && !n ? this.ratio = this._ease.getRatio(this._time / l) : n && this._ease._calcEnd && (this.ratio = this._ease.getRatio(0 === this._time ? 0 : 1))
                }
                for (!1 !== this._lazy && (this._lazy = !1), this._active || !this._paused && this._time !== a && t >= 0 && (this._active = !0), 0 === a && (this._startAt && (t >= 0 ? this._startAt.render(t, !0, i) : s || (s = "_dummyGS")), this.vars.onStart && (0 !== this._time || 0 === l) && (e || this._callback("onStart"))), r = this._firstPT; r;) r.f ? r.t[r.p](r.c * this.ratio + r.s) : r.t[r.p] = r.c * this.ratio + r.s, r = r._next;
                this._onUpdate && (0 > t && this._startAt && -1e-4 !== t && this._startAt.render(t, !0, i), e || (this._time !== a || n || i) && this._callback("onUpdate")), s && (!this._gc || i) && (0 > t && this._startAt && !this._onUpdate && -1e-4 !== t && this._startAt.render(t, !0, i), n && (this._timeline.autoRemoveChildren && this._enabled(!1, !1), this._active = !1), !e && this.vars[s] && this._callback(s), 0 === l && this._rawPrevTime === d && o !== d && (this._rawPrevTime = 0))
            }
        }, l._kill = function(t, e, i) {
            if ("all" === t && (t = null), null == t && (null == e || e === this.target)) return this._lazy = !1, this._enabled(!1, !1);
            e = "string" != typeof e ? e || this._targets || this.target : I.selector(e) || e;
            var n, s, r, o, a, l, c, h, u, p = i && this._time && i._startTime === this._startTime && this._timeline === i._timeline;
            if ((_(e) || D(e)) && "number" != typeof e[0])
                for (n = e.length; --n > -1;) this._kill(t, e[n], i) && (l = !0);
            else {
                if (this._targets) {
                    for (n = this._targets.length; --n > -1;)
                        if (e === this._targets[n]) {
                            a = this._propLookup[n] || {}, this._overwrittenProps = this._overwrittenProps || [], s = this._overwrittenProps[n] = t ? this._overwrittenProps[n] || {} : "all";
                            break
                        }
                } else {
                    if (e !== this.target) return !1;
                    a = this._propLookup, s = this._overwrittenProps = t ? this._overwrittenProps || {} : "all"
                }
                if (a) {
                    if (c = t || a, h = t !== s && "all" !== s && t !== a && ("object" != typeof t || !t._tempKill), i && (I.onOverwrite || this.vars.onOverwrite)) {
                        for (r in c) a[r] && (u || (u = []), u.push(r));
                        if ((u || !t) && !tt(this, i, e, u)) return !1
                    }
                    for (r in c)(o = a[r]) && (p && (o.f ? o.t[o.p](o.s) : o.t[o.p] = o.s, l = !0), o.pg && o.t._kill(c) && (l = !0), o.pg && 0 !== o.t._overwriteProps.length || (o._prev ? o._prev._next = o._next : o === this._firstPT && (this._firstPT = o._next), o._next && (o._next._prev = o._prev), o._next = o._prev = null), delete a[r]), h && (s[r] = 1);
                    !this._firstPT && this._initted && this._enabled(!1, !1)
                }
            }
            return l
        }, l.invalidate = function() {
            return this._notifyPluginsOfEnabled && I._onPluginEvent("_onDisable", this), this._firstPT = this._overwrittenProps = this._startAt = this._onUpdate = null, this._notifyPluginsOfEnabled = this._active = this._lazy = !1, this._propLookup = this._targets ? {} : [], E.prototype.invalidate.call(this), this.vars.immediateRender && (this._time = -d, this.render(Math.min(0, -this._delay))), this
        }, l._enabled = function(t, e) {
            if (h || c.wake(), t && this._gc) {
                var i, n = this._targets;
                if (n)
                    for (i = n.length; --i > -1;) this._siblings[i] = J(n[i], this, !0);
                else this._siblings = J(this.target, this, !0)
            }
            return E.prototype._enabled.call(this, t, e), !(!this._notifyPluginsOfEnabled || !this._firstPT) && I._onPluginEvent(t ? "_onEnable" : "_onDisable", this)
        }, I.to = function(t, e, i) {
            return new I(t, e, i)
        }, I.from = function(t, e, i) {
            return i.runBackwards = !0, i.immediateRender = 0 != i.immediateRender, new I(t, e, i)
        }, I.fromTo = function(t, e, i, n) {
            return n.startAt = i, n.immediateRender = 0 != n.immediateRender && 0 != i.immediateRender, new I(t, e, n)
        }, I.delayedCall = function(t, e, i, n, s) {
            return new I(e, 0, {
                delay: t,
                onComplete: e,
                onCompleteParams: i,
                callbackScope: n,
                onReverseComplete: e,
                onReverseCompleteParams: i,
                immediateRender: !1,
                lazy: !1,
                useFrames: s,
                overwrite: 0
            })
        }, I.set = function(t, e) {
            return new I(t, 0, e)
        }, I.getTweensOf = function(t, e) {
            if (null == t) return [];
            var i, n, s, r;
            if (t = "string" != typeof t ? t : I.selector(t) || t, (_(t) || D(t)) && "number" != typeof t[0]) {
                for (i = t.length, n = []; --i > -1;) n = n.concat(I.getTweensOf(t[i], e));
                for (i = n.length; --i > -1;)
                    for (r = n[i], s = i; --s > -1;) r === n[s] && n.splice(i, 1)
            } else if (t._gsTweenID)
                for (i = (n = J(t).concat()).length; --i > -1;)(n[i]._gc || e && !n[i].isActive()) && n.splice(i, 1);
            return n || []
        }, I.killTweensOf = I.killDelayedCallsTo = function(t, e, i) {
            "object" == typeof e && (i = e, e = !1);
            for (var n = I.getTweensOf(t, e), s = n.length; --s > -1;) n[s]._kill(i, t)
        };
        var nt = w("plugins.TweenPlugin", (function(t, e) {
            this._overwriteProps = (t || "").split(","), this._propName = this._overwriteProps[0], this._priority = e || 0, this._super = nt.prototype
        }), !0);
        if (l = nt.prototype, nt.version = "1.19.0", nt.API = 2, l._firstPT = null, l._addTween = B, l.setRatio = j, l._kill = function(t) {
                var e, i = this._overwriteProps,
                    n = this._firstPT;
                if (null != t[this._propName]) this._overwriteProps = [];
                else
                    for (e = i.length; --e > -1;) null != t[i[e]] && i.splice(e, 1);
                for (; n;) null != t[n.n] && (n._next && (n._next._prev = n._prev), n._prev ? (n._prev._next = n._next, n._prev = null) : this._firstPT === n && (this._firstPT = n._next)), n = n._next;
                return !1
            }, l._mod = l._roundProps = function(t) {
                for (var e, i = this._firstPT; i;)(e = t[this._propName] || null != i.n && t[i.n.split(this._propName + "_").join("")]) && "function" == typeof e && (2 === i.f ? i.t._applyPT.m = e : i.m = e), i = i._next
            }, I._onPluginEvent = function(t, e) {
                var i, n, s, r, o, a = e._firstPT;
                if ("_onInitAllProps" === t) {
                    for (; a;) {
                        for (o = a._next, n = s; n && n.pr > a.pr;) n = n._next;
                        (a._prev = n ? n._prev : r) ? a._prev._next = a: s = a, (a._next = n) ? n._prev = a : r = a, a = o
                    }
                    a = e._firstPT = s
                }
                for (; a;) a.pg && "function" == typeof a.t[t] && a.t[t]() && (i = !0), a = a._next;
                return i
            }, nt.activate = function(t) {
                for (var e = t.length; --e > -1;) t[e].API === nt.API && (q[(new t[e])._propName] = t[e]);
                return !0
            }, y.plugin = function(t) {
                if (!(t && t.propName && t.init && t.API)) throw "illegal plugin definition.";
                var e, i = t.propName,
                    n = t.priority || 0,
                    s = t.overwriteProps,
                    r = {
                        init: "_onInitTween",
                        set: "setRatio",
                        kill: "_kill",
                        round: "_mod",
                        mod: "_mod",
                        initAll: "_onInitAllProps"
                    },
                    o = w("plugins." + i.charAt(0).toUpperCase() + i.substr(1) + "Plugin", (function() {
                        nt.call(this, i, n), this._overwriteProps = s || []
                    }), !0 === t.global),
                    a = o.prototype = new nt(i);
                for (e in a.constructor = o, o.API = t.API, r) "function" == typeof t[e] && (a[r[e]] = t[e]);
                return o.version = t.version, nt.activate([o]), o
            }, o = t._gsQueue) {
            for (a = 0; a < o.length; a++) o[a]();
            for (l in g) g[l].func || t.console.log("GSAP encountered missing dependency: " + l)
        }
        h = !1
    }("undefined" != typeof module && module.exports && "undefined" != typeof global ? global : this || window, "TweenMax"),
    function(t, e, i, n) {
        "use strict";

        function s(t, e, i) {
            return setTimeout(c(t, i), e)
        }

        function r(t, e, i) {
            return !!Array.isArray(t) && (o(t, i[e], i), !0)
        }

        function o(t, e, i) {
            var s;
            if (t)
                if (t.forEach) t.forEach(e, i);
                else if (t.length !== n)
                for (s = 0; s < t.length;) e.call(i, t[s], s, t), s++;
            else
                for (s in t) t.hasOwnProperty(s) && e.call(i, t[s], s, t)
        }

        function a(e, i, n) {
            var s = "DEPRECATED METHOD: " + i + "\n" + n + " AT \n";
            return function() {
                var i = new Error("get-stack-trace"),
                    n = i && i.stack ? i.stack.replace(/^[^\(]+?[\n$]/gm, "").replace(/^\s+at\s+/gm, "").replace(/^Object.<anonymous>\s*\(/gm, "{anonymous}()@") : "Unknown Stack Trace",
                    r = t.console && (t.console.warn || t.console.log);
                return r && r.call(t.console, s, n), e.apply(this, arguments)
            }
        }

        function l(t, e, i) {
            var n, s = e.prototype;
            (n = t.prototype = Object.create(s)).constructor = t, n._super = s, i && ut(n, i)
        }

        function c(t, e) {
            return function() {
                return t.apply(e, arguments)
            }
        }

        function h(t, e) {
            return typeof t == ft ? t.apply(e && e[0] || n, e) : t
        }

        function u(t, e) {
            return t === n ? e : t
        }

        function p(t, e, i) {
            o(_(e), (function(e) {
                t.addEventListener(e, i, !1)
            }))
        }

        function d(t, e, i) {
            o(_(e), (function(e) {
                t.removeEventListener(e, i, !1)
            }))
        }

        function f(t, e) {
            for (; t;) {
                if (t == e) return !0;
                t = t.parentNode
            }
            return !1
        }

        function m(t, e) {
            return t.indexOf(e) > -1
        }

        function _(t) {
            return t.trim().split(/\s+/g)
        }

        function g(t, e, i) {
            if (t.indexOf && !i) return t.indexOf(e);
            for (var n = 0; n < t.length;) {
                if (i && t[n][i] == e || !i && t[n] === e) return n;
                n++
            }
            return -1
        }

        function v(t) {
            return Array.prototype.slice.call(t, 0)
        }

        function y(t, e, i) {
            for (var n = [], s = [], r = 0; r < t.length;) {
                var o = e ? t[r][e] : t[r];
                g(s, o) < 0 && n.push(t[r]), s[r] = o, r++
            }
            return i && (n = e ? n.sort((function(t, i) {
                return t[e] > i[e]
            })) : n.sort()), n
        }

        function w(t, e) {
            for (var i, s, r = e[0].toUpperCase() + e.slice(1), o = 0; o < pt.length;) {
                if ((s = (i = pt[o]) ? i + r : e) in t) return s;
                o++
            }
            return n
        }

        function T() {
            return wt++
        }

        function x(e) {
            var i = e.ownerDocument || e;
            return i.defaultView || i.parentWindow || t
        }

        function b(t, e) {
            var i = this;
            this.manager = t, this.callback = e, this.element = t.element, this.target = t.options.inputTarget, this.domHandler = function(e) {
                h(t.options.enable, [t]) && i.handler(e)
            }, this.init()
        }

        function k(t) {
            var e = t.options.inputClass;
            return new(e || (bt ? F : kt ? H : xt ? X : L))(t, S)
        }

        function S(t, e, i) {
            var n = i.pointers.length,
                s = i.changedPointers.length,
                r = e & Et && n - s == 0,
                o = e & (Mt | It) && n - s == 0;
            i.isFirst = !!r, i.isFinal = !!o, r && (t.session = {}), i.eventType = e, P(t, i), t.emit("hammer.input", i), t.recognize(i), t.session.prevInput = i
        }

        function P(t, e) {
            var i = t.session,
                n = e.pointers,
                s = n.length;
            i.firstInput || (i.firstInput = A(e)), s > 1 && !i.firstMultiple ? i.firstMultiple = A(e) : 1 === s && (i.firstMultiple = !1);
            var r = i.firstInput,
                o = i.firstMultiple,
                a = o ? o.center : r.center,
                l = e.center = E(n);
            e.timeStamp = gt(), e.deltaTime = e.timeStamp - r.timeStamp, e.angle = D(a, l), e.distance = I(a, l), C(i, e), e.offsetDirection = M(e.deltaX, e.deltaY);
            var c = R(e.deltaTime, e.deltaX, e.deltaY);
            e.overallVelocityX = c.x, e.overallVelocityY = c.y, e.overallVelocity = _t(c.x) > _t(c.y) ? c.x : c.y, e.scale = o ? z(o.pointers, n) : 1, e.rotation = o ? $(o.pointers, n) : 0, e.maxPointers = i.prevInput ? e.pointers.length > i.prevInput.maxPointers ? e.pointers.length : i.prevInput.maxPointers : e.pointers.length, O(i, e);
            var h = t.element;
            f(e.srcEvent.target, h) && (h = e.srcEvent.target), e.target = h
        }

        function C(t, e) {
            var i = e.center,
                n = t.offsetDelta || {},
                s = t.prevDelta || {},
                r = t.prevInput || {};
            e.eventType !== Et && r.eventType !== Mt || (s = t.prevDelta = {
                x: r.deltaX || 0,
                y: r.deltaY || 0
            }, n = t.offsetDelta = {
                x: i.x,
                y: i.y
            }), e.deltaX = s.x + (i.x - n.x), e.deltaY = s.y + (i.y - n.y)
        }

        function O(t, e) {
            var i, s, r, o, a = t.lastInterval || e,
                l = e.timeStamp - a.timeStamp;
            if (e.eventType != It && (l > At || a.velocity === n)) {
                var c = e.deltaX - a.deltaX,
                    h = e.deltaY - a.deltaY,
                    u = R(l, c, h);
                s = u.x, r = u.y, i = _t(u.x) > _t(u.y) ? u.x : u.y, o = M(c, h), t.lastInterval = e
            } else i = a.velocity, s = a.velocityX, r = a.velocityY, o = a.direction;
            e.velocity = i, e.velocityX = s, e.velocityY = r, e.direction = o
        }

        function A(t) {
            for (var e = [], i = 0; i < t.pointers.length;) e[i] = {
                clientX: mt(t.pointers[i].clientX),
                clientY: mt(t.pointers[i].clientY)
            }, i++;
            return {
                timeStamp: gt(),
                pointers: e,
                center: E(e),
                deltaX: t.deltaX,
                deltaY: t.deltaY
            }
        }

        function E(t) {
            var e = t.length;
            if (1 === e) return {
                x: mt(t[0].clientX),
                y: mt(t[0].clientY)
            };
            for (var i = 0, n = 0, s = 0; e > s;) i += t[s].clientX, n += t[s].clientY, s++;
            return {
                x: mt(i / e),
                y: mt(n / e)
            }
        }

        function R(t, e, i) {
            return {
                x: e / t || 0,
                y: i / t || 0
            }
        }

        function M(t, e) {
            return t === e ? Dt : _t(t) >= _t(e) ? 0 > t ? $t : zt : 0 > e ? Lt : Ft
        }

        function I(t, e, i) {
            i || (i = Bt);
            var n = e[i[0]] - t[i[0]],
                s = e[i[1]] - t[i[1]];
            return Math.sqrt(n * n + s * s)
        }

        function D(t, e, i) {
            i || (i = Bt);
            var n = e[i[0]] - t[i[0]],
                s = e[i[1]] - t[i[1]];
            return 180 * Math.atan2(s, n) / Math.PI
        }

        function $(t, e) {
            return D(e[1], e[0], Xt) + D(t[1], t[0], Xt)
        }

        function z(t, e) {
            return I(e[0], e[1], Xt) / I(t[0], t[1], Xt)
        }

        function L() {
            this.evEl = Yt, this.evWin = Wt, this.pressed = !1, b.apply(this, arguments)
        }

        function F() {
            this.evEl = Gt, this.evWin = Zt, b.apply(this, arguments), this.store = this.manager.session.pointerEvents = []
        }

        function N() {
            this.evTarget = Kt, this.evWin = Jt, this.started = !1, b.apply(this, arguments)
        }

        function j(t, e) {
            var i = v(t.touches),
                n = v(t.changedTouches);
            return e & (Mt | It) && (i = y(i.concat(n), "identifier", !0)), [i, n]
        }

        function H() {
            this.evTarget = ee, this.targetIds = {}, b.apply(this, arguments)
        }

        function B(t, e) {
            var i = v(t.touches),
                n = this.targetIds;
            if (e & (Et | Rt) && 1 === i.length) return n[i[0].identifier] = !0, [i, i];
            var s, r, o = v(t.changedTouches),
                a = [],
                l = this.target;
            if (r = i.filter((function(t) {
                    return f(t.target, l)
                })), e === Et)
                for (s = 0; s < r.length;) n[r[s].identifier] = !0, s++;
            for (s = 0; s < o.length;) n[o[s].identifier] && a.push(o[s]), e & (Mt | It) && delete n[o[s].identifier], s++;
            return a.length ? [y(r.concat(a), "identifier", !0), a] : void 0
        }

        function X() {
            b.apply(this, arguments);
            var t = c(this.handler, this);
            this.touch = new H(this.manager, t), this.mouse = new L(this.manager, t), this.primaryTouch = null, this.lastTouches = []
        }

        function q(t, e) {
            t & Et ? (this.primaryTouch = e.changedPointers[0].identifier, Y.call(this, e)) : t & (Mt | It) && Y.call(this, e)
        }

        function Y(t) {
            var e = t.changedPointers[0];
            if (e.identifier === this.primaryTouch) {
                var i = {
                    x: e.clientX,
                    y: e.clientY
                };
                this.lastTouches.push(i);
                var n = this.lastTouches,
                    s = function() {
                        var t = n.indexOf(i);
                        t > -1 && n.splice(t, 1)
                    };
                setTimeout(s, ie)
            }
        }

        function W(t) {
            for (var e = t.srcEvent.clientX, i = t.srcEvent.clientY, n = 0; n < this.lastTouches.length; n++) {
                var s = this.lastTouches[n],
                    r = Math.abs(e - s.x),
                    o = Math.abs(i - s.y);
                if (ne >= r && ne >= o) return !0
            }
            return !1
        }

        function U(t, e) {
            this.manager = t, this.set(e)
        }

        function V(t) {
            if (m(t, ce)) return ce;
            var e = m(t, he),
                i = m(t, ue);
            return e && i ? ce : e || i ? e ? he : ue : m(t, le) ? le : ae
        }

        function G() {
            if (!re) return !1;
            var e = {},
                i = t.CSS && t.CSS.supports;
            return ["auto", "manipulation", "pan-y", "pan-x", "pan-x pan-y", "none"].forEach((function(n) {
                e[n] = !i || t.CSS.supports("touch-action", n)
            })), e
        }

        function Z(t) {
            this.options = ut({}, this.defaults, t || {}), this.id = T(), this.manager = null, this.options.enable = u(this.options.enable, !0), this.state = de, this.simultaneous = {}, this.requireFail = []
        }

        function Q(t) {
            return t & ve ? "cancel" : t & _e ? "end" : t & me ? "move" : t & fe ? "start" : ""
        }

        function K(t) {
            return t == Ft ? "down" : t == Lt ? "up" : t == $t ? "left" : t == zt ? "right" : ""
        }

        function J(t, e) {
            var i = e.manager;
            return i ? i.get(t) : t
        }

        function tt() {
            Z.apply(this, arguments)
        }

        function et() {
            tt.apply(this, arguments), this.pX = null, this.pY = null
        }

        function it() {
            tt.apply(this, arguments)
        }

        function nt() {
            Z.apply(this, arguments), this._timer = null, this._input = null
        }

        function st() {
            tt.apply(this, arguments)
        }

        function rt() {
            tt.apply(this, arguments)
        }

        function ot() {
            Z.apply(this, arguments), this.pTime = !1, this.pCenter = !1, this._timer = null, this._input = null, this.count = 0
        }

        function at(t, e) {
            return (e = e || {}).recognizers = u(e.recognizers, at.defaults.preset), new lt(t, e)
        }

        function lt(t, e) {
            this.options = ut({}, at.defaults, e || {}), this.options.inputTarget = this.options.inputTarget || t, this.handlers = {}, this.session = {}, this.recognizers = [], this.oldCssProps = {}, this.element = t, this.input = k(this), this.touchAction = new U(this, this.options.touchAction), ct(this, !0), o(this.options.recognizers, (function(t) {
                var e = this.add(new t[0](t[1]));
                t[2] && e.recognizeWith(t[2]), t[3] && e.requireFailure(t[3])
            }), this)
        }

        function ct(t, e) {
            var i, n = t.element;
            n.style && (o(t.options.cssProps, (function(s, r) {
                i = w(n.style, r), e ? (t.oldCssProps[i] = n.style[i], n.style[i] = s) : n.style[i] = t.oldCssProps[i] || ""
            })), e || (t.oldCssProps = {}))
        }

        function ht(t, i) {
            var n = e.createEvent("Event");
            n.initEvent(t, !0, !0), n.gesture = i, i.target.dispatchEvent(n)
        }
        var ut, pt = ["", "webkit", "Moz", "MS", "ms", "o"],
            dt = e.createElement("div"),
            ft = "function",
            mt = Math.round,
            _t = Math.abs,
            gt = Date.now;
        ut = "function" != typeof Object.assign ? function(t) {
            if (t === n || null === t) throw new TypeError("Cannot convert undefined or null to object");
            for (var e = Object(t), i = 1; i < arguments.length; i++) {
                var s = arguments[i];
                if (s !== n && null !== s)
                    for (var r in s) s.hasOwnProperty(r) && (e[r] = s[r])
            }
            return e
        } : Object.assign;
        var vt = a((function(t, e, i) {
                for (var s = Object.keys(e), r = 0; r < s.length;)(!i || i && t[s[r]] === n) && (t[s[r]] = e[s[r]]), r++;
                return t
            }), "extend", "Use `assign`."),
            yt = a((function(t, e) {
                return vt(t, e, !0)
            }), "merge", "Use `assign`."),
            wt = 1,
            Tt = /mobile|tablet|ip(ad|hone|od)|android/i,
            xt = "ontouchstart" in t,
            bt = w(t, "PointerEvent") !== n,
            kt = xt && Tt.test(navigator.userAgent),
            St = "touch",
            Pt = "pen",
            Ct = "mouse",
            Ot = "kinect",
            At = 25,
            Et = 1,
            Rt = 2,
            Mt = 4,
            It = 8,
            Dt = 1,
            $t = 2,
            zt = 4,
            Lt = 8,
            Ft = 16,
            Nt = $t | zt,
            jt = Lt | Ft,
            Ht = Nt | jt,
            Bt = ["x", "y"],
            Xt = ["clientX", "clientY"];
        b.prototype = {
            handler: function() {},
            init: function() {
                this.evEl && p(this.element, this.evEl, this.domHandler), this.evTarget && p(this.target, this.evTarget, this.domHandler), this.evWin && p(x(this.element), this.evWin, this.domHandler)
            },
            destroy: function() {
                this.evEl && d(this.element, this.evEl, this.domHandler), this.evTarget && d(this.target, this.evTarget, this.domHandler), this.evWin && d(x(this.element), this.evWin, this.domHandler)
            }
        };
        var qt = {
                mousedown: Et,
                mousemove: Rt,
                mouseup: Mt
            },
            Yt = "mousedown",
            Wt = "mousemove mouseup";
        l(L, b, {
            handler: function(t) {
                var e = qt[t.type];
                e & Et && 0 === t.button && (this.pressed = !0), e & Rt && 1 !== t.which && (e = Mt), this.pressed && (e & Mt && (this.pressed = !1), this.callback(this.manager, e, {
                    pointers: [t],
                    changedPointers: [t],
                    pointerType: Ct,
                    srcEvent: t
                }))
            }
        });
        var Ut = {
                pointerdown: Et,
                pointermove: Rt,
                pointerup: Mt,
                pointercancel: It,
                pointerout: It
            },
            Vt = {
                2: St,
                3: Pt,
                4: Ct,
                5: Ot
            },
            Gt = "pointerdown",
            Zt = "pointermove pointerup pointercancel";
        t.MSPointerEvent && !t.PointerEvent && (Gt = "MSPointerDown", Zt = "MSPointerMove MSPointerUp MSPointerCancel"), l(F, b, {
            handler: function(t) {
                var e = this.store,
                    i = !1,
                    n = t.type.toLowerCase().replace("ms", ""),
                    s = Ut[n],
                    r = Vt[t.pointerType] || t.pointerType,
                    o = r == St,
                    a = g(e, t.pointerId, "pointerId");
                s & Et && (0 === t.button || o) ? 0 > a && (e.push(t), a = e.length - 1) : s & (Mt | It) && (i = !0), 0 > a || (e[a] = t, this.callback(this.manager, s, {
                    pointers: e,
                    changedPointers: [t],
                    pointerType: r,
                    srcEvent: t
                }), i && e.splice(a, 1))
            }
        });
        var Qt = {
                touchstart: Et,
                touchmove: Rt,
                touchend: Mt,
                touchcancel: It
            },
            Kt = "touchstart",
            Jt = "touchstart touchmove touchend touchcancel";
        l(N, b, {
            handler: function(t) {
                var e = Qt[t.type];
                if (e === Et && (this.started = !0), this.started) {
                    var i = j.call(this, t, e);
                    e & (Mt | It) && i[0].length - i[1].length == 0 && (this.started = !1), this.callback(this.manager, e, {
                        pointers: i[0],
                        changedPointers: i[1],
                        pointerType: St,
                        srcEvent: t
                    })
                }
            }
        });
        var te = {
                touchstart: Et,
                touchmove: Rt,
                touchend: Mt,
                touchcancel: It
            },
            ee = "touchstart touchmove touchend touchcancel";
        l(H, b, {
            handler: function(t) {
                var e = te[t.type],
                    i = B.call(this, t, e);
                i && this.callback(this.manager, e, {
                    pointers: i[0],
                    changedPointers: i[1],
                    pointerType: St,
                    srcEvent: t
                })
            }
        });
        var ie = 2500,
            ne = 25;
        l(X, b, {
            handler: function(t, e, i) {
                var n = i.pointerType == St,
                    s = i.pointerType == Ct;
                if (!(s && i.sourceCapabilities && i.sourceCapabilities.firesTouchEvents)) {
                    if (n) q.call(this, e, i);
                    else if (s && W.call(this, i)) return;
                    this.callback(t, e, i)
                }
            },
            destroy: function() {
                this.touch.destroy(), this.mouse.destroy()
            }
        });
        var se = w(dt.style, "touchAction"),
            re = se !== n,
            oe = "compute",
            ae = "auto",
            le = "manipulation",
            ce = "none",
            he = "pan-x",
            ue = "pan-y",
            pe = G();
        U.prototype = {
            set: function(t) {
                t == oe && (t = this.compute()), re && this.manager.element.style && pe[t] && (this.manager.element.style[se] = t), this.actions = t.toLowerCase().trim()
            },
            update: function() {
                this.set(this.manager.options.touchAction)
            },
            compute: function() {
                var t = [];
                return o(this.manager.recognizers, (function(e) {
                    h(e.options.enable, [e]) && (t = t.concat(e.getTouchAction()))
                })), V(t.join(" "))
            },
            preventDefaults: function(t) {
                var e = t.srcEvent,
                    i = t.offsetDirection;
                if (!this.manager.session.prevented) {
                    var n = this.actions,
                        s = m(n, ce) && !pe[ce],
                        r = m(n, ue) && !pe[ue],
                        o = m(n, he) && !pe[he];
                    if (s) {
                        var a = 1 === t.pointers.length,
                            l = t.distance < 2,
                            c = t.deltaTime < 250;
                        if (a && l && c) return
                    }
                    return o && r ? void 0 : s || r && i & Nt || o && i & jt ? this.preventSrc(e) : void 0
                }
                e.preventDefault()
            },
            preventSrc: function(t) {
                this.manager.session.prevented = !0, t.preventDefault()
            }
        };
        var de = 1,
            fe = 2,
            me = 4,
            _e = 8,
            ge = _e,
            ve = 16,
            ye = 32;
        Z.prototype = {
            defaults: {},
            set: function(t) {
                return ut(this.options, t), this.manager && this.manager.touchAction.update(), this
            },
            recognizeWith: function(t) {
                if (r(t, "recognizeWith", this)) return this;
                var e = this.simultaneous;
                return e[(t = J(t, this)).id] || (e[t.id] = t, t.recognizeWith(this)), this
            },
            dropRecognizeWith: function(t) {
                return r(t, "dropRecognizeWith", this) || (t = J(t, this), delete this.simultaneous[t.id]), this
            },
            requireFailure: function(t) {
                if (r(t, "requireFailure", this)) return this;
                var e = this.requireFail;
                return -1 === g(e, t = J(t, this)) && (e.push(t), t.requireFailure(this)), this
            },
            dropRequireFailure: function(t) {
                if (r(t, "dropRequireFailure", this)) return this;
                t = J(t, this);
                var e = g(this.requireFail, t);
                return e > -1 && this.requireFail.splice(e, 1), this
            },
            hasRequireFailures: function() {
                return this.requireFail.length > 0
            },
            canRecognizeWith: function(t) {
                return !!this.simultaneous[t.id]
            },
            emit: function(t) {
                function e(e) {
                    i.manager.emit(e, t)
                }
                var i = this,
                    n = this.state;
                _e > n && e(i.options.event + Q(n)), e(i.options.event), t.additionalEvent && e(t.additionalEvent), n >= _e && e(i.options.event + Q(n))
            },
            tryEmit: function(t) {
                return this.canEmit() ? this.emit(t) : void(this.state = ye)
            },
            canEmit: function() {
                for (var t = 0; t < this.requireFail.length;) {
                    if (!(this.requireFail[t].state & (ye | de))) return !1;
                    t++
                }
                return !0
            },
            recognize: function(t) {
                var e = ut({}, t);
                return h(this.options.enable, [this, e]) ? (this.state & (ge | ve | ye) && (this.state = de), this.state = this.process(e), void(this.state & (fe | me | _e | ve) && this.tryEmit(e))) : (this.reset(), void(this.state = ye))
            },
            process: function() {},
            getTouchAction: function() {},
            reset: function() {}
        }, l(tt, Z, {
            defaults: {
                pointers: 1
            },
            attrTest: function(t) {
                var e = this.options.pointers;
                return 0 === e || t.pointers.length === e
            },
            process: function(t) {
                var e = this.state,
                    i = t.eventType,
                    n = e & (fe | me),
                    s = this.attrTest(t);
                return n && (i & It || !s) ? e | ve : n || s ? i & Mt ? e | _e : e & fe ? e | me : fe : ye
            }
        }), l(et, tt, {
            defaults: {
                event: "pan",
                threshold: 10,
                pointers: 1,
                direction: Ht
            },
            getTouchAction: function() {
                var t = this.options.direction,
                    e = [];
                return t & Nt && e.push(ue), t & jt && e.push(he), e
            },
            directionTest: function(t) {
                var e = this.options,
                    i = !0,
                    n = t.distance,
                    s = t.direction,
                    r = t.deltaX,
                    o = t.deltaY;
                return s & e.direction || (e.direction & Nt ? (s = 0 === r ? Dt : 0 > r ? $t : zt, i = r != this.pX, n = Math.abs(t.deltaX)) : (s = 0 === o ? Dt : 0 > o ? Lt : Ft, i = o != this.pY, n = Math.abs(t.deltaY))), t.direction = s, i && n > e.threshold && s & e.direction
            },
            attrTest: function(t) {
                return tt.prototype.attrTest.call(this, t) && (this.state & fe || !(this.state & fe) && this.directionTest(t))
            },
            emit: function(t) {
                this.pX = t.deltaX, this.pY = t.deltaY;
                var e = K(t.direction);
                e && (t.additionalEvent = this.options.event + e), this._super.emit.call(this, t)
            }
        }), l(it, tt, {
            defaults: {
                event: "pinch",
                threshold: 0,
                pointers: 2
            },
            getTouchAction: function() {
                return [ce]
            },
            attrTest: function(t) {
                return this._super.attrTest.call(this, t) && (Math.abs(t.scale - 1) > this.options.threshold || this.state & fe)
            },
            emit: function(t) {
                if (1 !== t.scale) {
                    var e = t.scale < 1 ? "in" : "out";
                    t.additionalEvent = this.options.event + e
                }
                this._super.emit.call(this, t)
            }
        }), l(nt, Z, {
            defaults: {
                event: "press",
                pointers: 1,
                time: 251,
                threshold: 9
            },
            getTouchAction: function() {
                return [ae]
            },
            process: function(t) {
                var e = this.options,
                    i = t.pointers.length === e.pointers,
                    n = t.distance < e.threshold,
                    r = t.deltaTime > e.time;
                if (this._input = t, !n || !i || t.eventType & (Mt | It) && !r) this.reset();
                else if (t.eventType & Et) this.reset(), this._timer = s((function() {
                    this.state = ge, this.tryEmit()
                }), e.time, this);
                else if (t.eventType & Mt) return ge;
                return ye
            },
            reset: function() {
                clearTimeout(this._timer)
            },
            emit: function(t) {
                this.state === ge && (t && t.eventType & Mt ? this.manager.emit(this.options.event + "up", t) : (this._input.timeStamp = gt(), this.manager.emit(this.options.event, this._input)))
            }
        }), l(st, tt, {
            defaults: {
                event: "rotate",
                threshold: 0,
                pointers: 2
            },
            getTouchAction: function() {
                return [ce]
            },
            attrTest: function(t) {
                return this._super.attrTest.call(this, t) && (Math.abs(t.rotation) > this.options.threshold || this.state & fe)
            }
        }), l(rt, tt, {
            defaults: {
                event: "swipe",
                threshold: 10,
                velocity: .3,
                direction: Nt | jt,
                pointers: 1
            },
            getTouchAction: function() {
                return et.prototype.getTouchAction.call(this)
            },
            attrTest: function(t) {
                var e, i = this.options.direction;
                return i & (Nt | jt) ? e = t.overallVelocity : i & Nt ? e = t.overallVelocityX : i & jt && (e = t.overallVelocityY), this._super.attrTest.call(this, t) && i & t.offsetDirection && t.distance > this.options.threshold && t.maxPointers == this.options.pointers && _t(e) > this.options.velocity && t.eventType & Mt
            },
            emit: function(t) {
                var e = K(t.offsetDirection);
                e && this.manager.emit(this.options.event + e, t), this.manager.emit(this.options.event, t)
            }
        }), l(ot, Z, {
            defaults: {
                event: "tap",
                pointers: 1,
                taps: 1,
                interval: 300,
                time: 250,
                threshold: 9,
                posThreshold: 10
            },
            getTouchAction: function() {
                return [le]
            },
            process: function(t) {
                var e = this.options,
                    i = t.pointers.length === e.pointers,
                    n = t.distance < e.threshold,
                    r = t.deltaTime < e.time;
                if (this.reset(), t.eventType & Et && 0 === this.count) return this.failTimeout();
                if (n && r && i) {
                    if (t.eventType != Mt) return this.failTimeout();
                    var o = !this.pTime || t.timeStamp - this.pTime < e.interval,
                        a = !this.pCenter || I(this.pCenter, t.center) < e.posThreshold;
                    if (this.pTime = t.timeStamp, this.pCenter = t.center, a && o ? this.count += 1 : this.count = 1, this._input = t, 0 === this.count % e.taps) return this.hasRequireFailures() ? (this._timer = s((function() {
                        this.state = ge, this.tryEmit()
                    }), e.interval, this), fe) : ge
                }
                return ye
            },
            failTimeout: function() {
                return this._timer = s((function() {
                    this.state = ye
                }), this.options.interval, this), ye
            },
            reset: function() {
                clearTimeout(this._timer)
            },
            emit: function() {
                this.state == ge && (this._input.tapCount = this.count, this.manager.emit(this.options.event, this._input))
            }
        }), at.VERSION = "2.0.8", at.defaults = {
            domEvents: !1,
            touchAction: oe,
            enable: !0,
            inputTarget: null,
            inputClass: null,
            preset: [
                [st, {
                    enable: !1
                }],
                [it, {
                        enable: !1
                    },
                    ["rotate"]
                ],
                [rt, {
                    direction: Nt
                }],
                [et, {
                        direction: Nt
                    },
                    ["swipe"]
                ],
                [ot],
                [ot, {
                        event: "doubletap",
                        taps: 2
                    },
                    ["tap"]
                ],
                [nt]
            ],
            cssProps: {
                userSelect: "none",
                touchSelect: "none",
                touchCallout: "none",
                contentZooming: "none",
                userDrag: "none",
                tapHighlightColor: "rgba(0,0,0,0)"
            }
        };
        var we = 1,
            Te = 2;
        lt.prototype = {
            set: function(t) {
                return ut(this.options, t), t.touchAction && this.touchAction.update(), t.inputTarget && (this.input.destroy(), this.input.target = t.inputTarget, this.input.init()), this
            },
            stop: function(t) {
                this.session.stopped = t ? Te : we
            },
            recognize: function(t) {
                var e = this.session;
                if (!e.stopped) {
                    this.touchAction.preventDefaults(t);
                    var i, n = this.recognizers,
                        s = e.curRecognizer;
                    (!s || s && s.state & ge) && (s = e.curRecognizer = null);
                    for (var r = 0; r < n.length;) i = n[r], e.stopped === Te || s && i != s && !i.canRecognizeWith(s) ? i.reset() : i.recognize(t), !s && i.state & (fe | me | _e) && (s = e.curRecognizer = i), r++
                }
            },
            get: function(t) {
                if (t instanceof Z) return t;
                for (var e = this.recognizers, i = 0; i < e.length; i++)
                    if (e[i].options.event == t) return e[i];
                return null
            },
            add: function(t) {
                if (r(t, "add", this)) return this;
                var e = this.get(t.options.event);
                return e && this.remove(e), this.recognizers.push(t), t.manager = this, this.touchAction.update(), t
            },
            remove: function(t) {
                if (r(t, "remove", this)) return this;
                if (t = this.get(t)) {
                    var e = this.recognizers,
                        i = g(e, t); - 1 !== i && (e.splice(i, 1), this.touchAction.update())
                }
                return this
            },
            on: function(t, e) {
                if (t !== n && e !== n) {
                    var i = this.handlers;
                    return o(_(t), (function(t) {
                        i[t] = i[t] || [], i[t].push(e)
                    })), this
                }
            },
            off: function(t, e) {
                if (t !== n) {
                    var i = this.handlers;
                    return o(_(t), (function(t) {
                        e ? i[t] && i[t].splice(g(i[t], e), 1) : delete i[t]
                    })), this
                }
            },
            emit: function(t, e) {
                this.options.domEvents && ht(t, e);
                var i = this.handlers[t] && this.handlers[t].slice();
                if (i && i.length) {
                    e.type = t, e.preventDefault = function() {
                        e.srcEvent.preventDefault()
                    };
                    for (var n = 0; n < i.length;) i[n](e), n++
                }
            },
            destroy: function() {
                this.element && ct(this, !1), this.handlers = {}, this.session = {}, this.input.destroy(), this.element = null
            }
        }, ut(at, {
            INPUT_START: Et,
            INPUT_MOVE: Rt,
            INPUT_END: Mt,
            INPUT_CANCEL: It,
            STATE_POSSIBLE: de,
            STATE_BEGAN: fe,
            STATE_CHANGED: me,
            STATE_ENDED: _e,
            STATE_RECOGNIZED: ge,
            STATE_CANCELLED: ve,
            STATE_FAILED: ye,
            DIRECTION_NONE: Dt,
            DIRECTION_LEFT: $t,
            DIRECTION_RIGHT: zt,
            DIRECTION_UP: Lt,
            DIRECTION_DOWN: Ft,
            DIRECTION_HORIZONTAL: Nt,
            DIRECTION_VERTICAL: jt,
            DIRECTION_ALL: Ht,
            Manager: lt,
            Input: b,
            TouchAction: U,
            TouchInput: H,
            MouseInput: L,
            PointerEventInput: F,
            TouchMouseInput: X,
            SingleTouchInput: N,
            Recognizer: Z,
            AttrRecognizer: tt,
            Tap: ot,
            Pan: et,
            Swipe: rt,
            Pinch: it,
            Rotate: st,
            Press: nt,
            on: p,
            off: d,
            each: o,
            merge: yt,
            extend: vt,
            assign: ut,
            inherit: l,
            bindFn: c,
            prefixed: w
        }), (void 0 !== t ? t : "undefined" != typeof self ? self : {}).Hammer = at, "function" == typeof define && define.amd ? define((function() {
            return at
        })) : "undefined" != typeof module && module.exports ? module.exports = at : t[i] = at
    }(window, document, "Hammer"),
    function(t, e) {
        "object" == typeof exports && "undefined" != typeof module ? module.exports = e() : "function" == typeof define && define.amd ? define(e) : (t = "undefined" != typeof globalThis ? globalThis : t || self).GGRNumber = e()
    }(this, (function() {
        "use strict";

        function t(t, e) {
            var i, n = Object.keys(t);
            return Object.getOwnPropertySymbols && (i = Object.getOwnPropertySymbols(t), e && (i = i.filter((function(e) {
                return Object.getOwnPropertyDescriptor(t, e).enumerable
            }))), n.push.apply(n, i)), n
        }

        function e(e) {
            for (var i = 1; i < arguments.length; i++) {
                var n = null != arguments[i] ? arguments[i] : {};
                i % 2 ? t(Object(n), !0).forEach((function(t) {
                    r(e, t, n[t])
                })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(n)) : t(Object(n)).forEach((function(t) {
                    Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(n, t))
                }))
            }
            return e
        }

        function i(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function n(t, e) {
            for (var i = 0; i < e.length; i++) {
                var n = e[i];
                n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(t, p(n.key), n)
            }
        }

        function s(t, e, i) {
            e && n(t.prototype, e), i && n(t, i), Object.defineProperty(t, "prototype", {
                writable: !1
            })
        }

        function r(t, e, i) {
            (e = p(e)) in t ? Object.defineProperty(t, e, {
                value: i,
                enumerable: !0,
                configurable: !0,
                writable: !0
            }) : t[e] = i
        }

        function o(t, e) {
            if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
            t.prototype = Object.create(e && e.prototype, {
                constructor: {
                    value: t,
                    writable: !0,
                    configurable: !0
                }
            }), Object.defineProperty(t, "prototype", {
                writable: !1
            }), e && l(t, e)
        }

        function a(t) {
            return (a = Object.setPrototypeOf ? Object.getPrototypeOf.bind() : function(t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        function l(t, e) {
            return (l = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function(t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function c(t, e) {
            if (null == t) return {};
            var i, n = function(t, e) {
                if (null == t) return {};
                for (var i, n = {}, s = Object.keys(t), r = 0; r < s.length; r++) i = s[r], 0 <= e.indexOf(i) || (n[i] = t[i]);
                return n
            }(t, e);
            if (Object.getOwnPropertySymbols)
                for (var s = Object.getOwnPropertySymbols(t), r = 0; r < s.length; r++) i = s[r], 0 <= e.indexOf(i) || Object.prototype.propertyIsEnumerable.call(t, i) && (n[i] = t[i]);
            return n
        }

        function h(t, e) {
            if (e && ("object" == typeof e || "function" == typeof e)) return e;
            if (void 0 !== e) throw new TypeError("Derived constructors may only return object or undefined");
            if (void 0 === (e = t)) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
            return e
        }

        function u(t) {
            var e = function() {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function() {}))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function() {
                var i, n = a(t);
                return h(this, e ? (i = a(this).constructor, Reflect.construct(n, arguments, i)) : n.apply(this, arguments))
            }
        }

        function p(t) {
            return t = function(t, e) {
                if ("object" != typeof t || null === t) return t;
                var i = t[Symbol.toPrimitive];
                if (void 0 === i) return ("string" === e ? String : Number)(t);
                if ("object" != typeof(i = i.call(t, e || "default"))) return i;
                throw new TypeError("@@toPrimitive must return a primitive value.")
            }(t, "string"), "symbol" == typeof t ? t : String(t)
        }

        function d(t) {
            return t = _.formatInTaipeiTime(t).match(/\d+\/\d+\/(\d+) (\d{2}):\d{2}:\d{2}/), [parseInt(t[1], 10), parseInt(t[2], 10)]
        }

        function f() {
            document.querySelectorAll("[data-number]").forEach((function(t) {
                var e = (i = _.getDataAttributes(t)).number,
                    i = c(i, O);
                new A(t, e, i)
            }))
        }
        var m = 36e5,
            _ = {
                getDataAttributes: function(t) {
                    var i;
                    return t ? (i = e({}, t.dataset), Object.keys(i).forEach((function(t) {
                        i[t] = "true" === (t = i[t]) || "false" !== t && (t === Number(t).toString() ? Number(t) : "" === t || "null" === t ? null : t)
                    })), i) : {}
                },
                timeOffset: function(t, e) {
                    return new Date(t.getTime() + e)
                },
                now: function() {
                    return new Date
                },
                formatInTaipeiTime: function(t) {
                    return new Date(t).toLocaleString("zh-TW", {
                        timeZone: "Asia/Taipei",
                        hourCycle: "h23"
                    })
                },
                toType: function(t) {
                    return {}.toString.call(t).match(/\s([a-z]+)/i)[1].toLowerCase()
                },
                typeCheckConfig: function(t, e) {
                    Object.keys(e).forEach((function(i) {
                        var n = e[i],
                            s = t[i];
                        s = _.toType(s);
                        if (!new RegExp(n).test(s)) throw new Error('Option "'.concat(i, '" provided type "').concat(s, '" ') + 'but expected type "'.concat(n, '".'))
                    }))
                }
            },
            g = 1728e5,
            v = function() {
                function t() {
                    i(this, t), this._data = null, this.observers = []
                }
                return s(t, [{
                    key: "normalizeData",
                    get: function() {
                        return t.dataProvider.normalizeData
                    }
                }, {
                    key: "rows",
                    get: function() {
                        return this.normalizeData.environmental_impact
                    }
                }, {
                    key: "lastRow",
                    get: function() {
                        return this.normalizeData.last_environmental_impact_row
                    }
                }, {
                    key: "data",
                    get: function() {
                        return this._data
                    },
                    set: function(t) {
                        this._data !== (this._data = t) && this.notify()
                    }
                }, {
                    key: "currentRow",
                    get: function() {
                        var e = d(e = _.timeOffset(_.now(), -g));
                        return this.rows[e] || this.lastRow || t.DUMMY_ROW
                    }
                }, {
                    key: "nextRow",
                    get: function() {
                        var e = d(e = _.timeOffset(_.now(), -g + m));
                        return this.rows[e] || this.lastRow || t.DUMMY_ROW
                    }
                }, {
                    key: "next",
                    value: function() {
                        throw "not implement"
                    }
                }, {
                    key: "subscribe",
                    value: function(t) {
                        var e = this;
                        if ("function" != typeof t) throw "callback must be a function";
                        (1 < arguments.length && void 0 !== arguments[1] ? arguments[1] : {}).once ? this.observers.push((function i() {
                            for (var n = arguments.length, s = new Array(n), r = 0; r < n; r++) s[r] = arguments[r];
                            t.apply(e, s);
                            var o = e.observers.indexOf(i);
                            e.observers.splice(o, 1)
                        })) : this.observers.push(t), this.data && this.notify()
                    }
                }, {
                    key: "notify",
                    value: function() {
                        var t = this;
                        this.observers.slice().forEach((function(e) {
                            e(t.data)
                        }))
                    }
                }], [{
                    key: "installProvider",
                    value: function(t) {
                        this.dataProvider = t
                    }
                }]), t
            }(),
            y = (r(v, "dataProvider", void 0), r(v, "DUMMY_ROW", new Proxy({}, {
                get: function() {
                    return 0
                }
            })), function() {
                function t() {
                    return i(this, t), e.apply(this, arguments)
                }
                o(t, v);
                var e = u(t);
                return s(t, [{
                    key: "next",
                    value: function() {
                        var t, e;
                        this.data || (t = (e = this.normalizeData.counts).vm_operating_count, e = e.vm_prebuild_count, this.data = t + e)
                    }
                }]), t
            }()),
            w = function() {
                function t() {
                    return i(this, t), e.apply(this, arguments)
                }
                o(t, v);
                var e = u(t);
                return s(t, [{
                    key: "next",
                    value: function() {
                        this.data || (this.data = this.normalizeData.counts.vm_prebuild_count)
                    }
                }]), t
            }(),
            T = function() {
                function t() {
                    return i(this, t), e.apply(this, arguments)
                }
                o(t, v);
                var e = u(t);
                return s(t, [{
                    key: "next",
                    value: function() {
                        this.data || (this.data = this.normalizeData.counts.vm_operating_count)
                    }
                }]), t
            }(),
            x = function() {
                function t() {
                    return i(this, t), e.apply(this, arguments)
                }
                o(t, v);
                var e = u(t);
                return s(t, [{
                    key: "next",
                    value: function() {
                        this.data = this.normalizeData.stats.co2_saved
                    }
                }]), t
            }(),
            b = function() {
                function t() {
                    return i(this, t), e.apply(this, arguments)
                }
                o(t, v);
                var e = u(t);
                return s(t, [{
                    key: "next",
                    value: function() {
                        this.data = this.normalizeData.stats.distance
                    }
                }]), t
            }(),
            k = function() {
                function t() {
                    return i(this, t), e.apply(this, arguments)
                }
                o(t, v);
                var e = u(t);
                return s(t, [{
                    key: "next",
                    value: function() {
                        this.data = Math.round(this.normalizeData.stats.swap_count * (431494 / 477851) * 2 + this.normalizeData.stats.swap_count * (46357 / 477851))
                    }
                }]), t
            }(),
            S = function() {
                function t() {
                    return i(this, t), e.apply(this, arguments)
                }
                o(t, v);
                var e = u(t);
                return s(t, [{
                    key: "next",
                    value: function() {
                        this.data = Math.round(this.normalizeData.stats.swap_count_per_day * (431494 / 477851) * 2 + this.normalizeData.stats.swap_count_per_day * (46357 / 477851))
                    }
                }]), t
            }(),
            P = function() {
                function t() {
                    return i(this, t), e.apply(this, arguments)
                }
                o(t, v);
                var e = u(t);
                return s(t, [{
                    key: "next",
                    value: function() {
                        this.data = this.normalizeData.counts.rack_count
                    }
                }]), t
            }(),
            C = function() {
                function t() {
                    i(this, t), this.raw = {}, this.promise = this.load()
                }
                return s(t, [{
                    key: "load",
                    value: function() {
                        var t = this;
                        return this.request().then((function(e) {
                            t.raw = e, t.normalizeData = t.normalize(e)
                        }))
                    }
                }, {
                    key: "normalize",
                    value: function(t) {
                        return e(e({}, t), {}, {
                            last_environmental_impact_row: t.environmental_impact[t.environmental_impact.length - 1],
                            environmental_impact: t.environmental_impact.reduce((function(t, e) {
                                var i = e.Time.match(/(\d{2}) (\d{2}):\d{2}:\d{2}/);
                                return t[[parseInt(i[1], 10), parseInt(i[2], 10)]] = e, t
                            }), {})
                        })
                    }
                }, {
                    key: "request",
                    value: function() {
                        var t = this;
                        return new Promise((function(e) {
                            var i = new XMLHttpRequest;
                            i.open("GET", t.constructor.API_ENDPOINT), i.send(), i.onload = function() {
                                e(JSON.parse(i.response))
                            }
                        }))
                    }
                }], [{
                    key: "getInstance",
                    value: function() {
                        return this.instance || (this.instance = new this, v.installProvider(this.instance)), this.instance
                    }
                }]), t
            }(),
            O = (r(C, "API_ENDPOINT", "https://cdn.gogoro.com/data/environmental-impact-v3.json"), r(C, "instance", void 0), ["number"]),
            A = function() {
                function t(n, s) {
                    var r = 2 < arguments.length && void 0 !== arguments[2] ? arguments[2] : {};
                    if (i(this, t), this.el = n, this.subjectInstance = this.constructor.subjects[s], !this.subjectInstance) throw "subject ".concat(s, " is undefined");
                    this.options = e(e({}, t.default), r), _.typeCheckConfig(this.options, t.defaultType), this.subjectInstance.subscribe(this.update.bind(this))
                }
                return s(t, [{
                    key: "update",
                    value: function(t) {
                        t = "function" === _.toType(this.options.transform) ? this.options.transform(t) : new Function("$val", "return ".concat(this.options.transform))(t), this.el.innerHTML = this.options.formatter(t)
                    }
                }], [{
                    key: "boostrap",
                    value: function() {
                        var t, e = this,
                            i = C.getInstance();
                        return this.init || (this.init = !0, t = function() {
                            for (var t in e.subjects) e.subjects[t].next()
                        }, i.promise.then((function() {
                            t(), setInterval(t, 1e3), setInterval(i.load.bind(i), m)
                        }))), i.promise
                    }
                }, {
                    key: "getStaticValues",
                    value: function() {
                        var t = this;
                        return C.getInstance().promise.then((function() {
                            var e, i = {};
                            for (e in t.subjects) {
                                var n = t.subjects[e];
                                n.next(), i[e] = n.data
                            }
                            return i
                        }))
                    }
                }]), t
            }();
        return r(A, "init", !1), r(A, "default", {
            transform: "$val",
            formatter: function(t) {
                return String(t).replace(/\B(?=(\d{3})+(?!\d))/g, ",")
            }
        }), r(A, "defaultType", {
            transform: "string|function",
            formatter: "function"
        }), r(A, "subjects", new Proxy({
            stationsCount: new y,
            comingStationsCount: new w,
            onlineStationsCount: new T,
            CO2: new x,
            KM: new b,
            swapCount: new k,
            swapCountAvg30Days: new S,
            rackCount: new P
        }, {
            get: function(t, e, i) {
                return A.boostrap(), Reflect.get(t, e, i)
            }
        })), "loading" !== document.readyState ? f() : document.addEventListener("DOMContentLoaded", f), A
    })), window.S1 = function() {
        function t(t, i, n) {
            return n = $.extend({
                triggerElement: t,
                triggerHook: .75,
                reverse: !1
            }, n), new ScrollMagic.Scene(n).addTo(e).setTween(i)
        }
        var e = new ScrollMagic.Controller;
        return {
            scrollController: e,
            createAnimationTrigger: t
        }
    }(),
    function() {
        function t(t) {
            var e = new TimelineMax;
            return e.set(t, {
                transformOrigin: "left center"
            }), e.fromTo(t, .4, {
                scale: 0
            }, {
                scale: 1,
                ease: Expo.easeInOut
            }), e.set(t, {
                transformOrigin: "right center"
            }), e.to(t, .4, {
                scale: 0,
                ease: Expo.easeInOut
            }), e.set(t, {
                transformOrigin: "left center"
            }), e.fromTo(t, .5, {
                scale: 0
            }, {
                scale: 1,
                ease: Expo.easeOut,
                delay: .1
            }), e
        }

        function e(e) {
            var i = e.find(".dash-line-top"),
                n = e.find(".dash-line-bottom"),
                s = new TimelineMax;
            return s.add(t(n), 0), s.add(t(i), .1), s
        }
        var i = $(".section");
        BT.inView(i, {
            rootMargin: "60px"
        }), $(".section-title--animation").each((function() {
            var t = $(this).next(),
                i = $(this).prev();
            if (t.is(".section-description")) {
                var n = new TimelineMax;
                n.from(this, 1, {
                    y: 20,
                    opacity: 0
                }, .2), n.from(t, 1, {
                    y: 20,
                    opacity: 0,
                    delay: .1
                }, .2), i.is(".dash-line") && n.add(e(i), 0), S1.createAnimationTrigger(this, n, {
                    triggerHook: .75
                })
            }
        }))
    }(),
    function() {
        var t = "//cdn.gogoro.com/resources/pages/smartscooter/s1/hero/images/",
            e = {
                v: "5.5.7",
                fr: 20,
                ip: 0,
                op: 49,
                w: 402,
                h: 561,
                nm: "S_motion_v1_Sequence",
                ddd: 0,
                assets: [{
                    id: "image_0",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_0.png",
                    e: 0
                }, {
                    id: "image_1",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_1.png",
                    e: 0
                }, {
                    id: "image_2",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_2.png",
                    e: 0
                }, {
                    id: "image_3",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_3.png",
                    e: 0
                }, {
                    id: "image_4",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_4.png",
                    e: 0
                }, {
                    id: "image_5",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_5.png",
                    e: 0
                }, {
                    id: "image_6",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_6.png",
                    e: 0
                }, {
                    id: "image_7",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_7.png",
                    e: 0
                }, {
                    id: "image_8",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_8.png",
                    e: 0
                }, {
                    id: "image_9",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_9.png",
                    e: 0
                }, {
                    id: "image_10",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_10.png",
                    e: 0
                }, {
                    id: "image_11",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_11.png",
                    e: 0
                }, {
                    id: "image_12",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_12.png",
                    e: 0
                }, {
                    id: "image_13",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_13.png",
                    e: 0
                }, {
                    id: "image_14",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_14.png",
                    e: 0
                }, {
                    id: "image_15",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_15.png",
                    e: 0
                }, {
                    id: "image_16",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_16.png",
                    e: 0
                }, {
                    id: "image_17",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_17.png",
                    e: 0
                }, {
                    id: "image_18",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_18.png",
                    e: 0
                }, {
                    id: "image_19",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_19.png",
                    e: 0
                }, {
                    id: "image_20",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_20.png",
                    e: 0
                }, {
                    id: "image_21",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_21.png",
                    e: 0
                }, {
                    id: "image_22",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_22.png",
                    e: 0
                }, {
                    id: "image_23",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_23.png",
                    e: 0
                }, {
                    id: "image_24",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_24.png",
                    e: 0
                }, {
                    id: "image_25",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_25.png",
                    e: 0
                }, {
                    id: "image_26",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_26.png",
                    e: 0
                }, {
                    id: "image_27",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_27.png",
                    e: 0
                }, {
                    id: "image_28",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_28.png",
                    e: 0
                }, {
                    id: "image_29",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_29.png",
                    e: 0
                }, {
                    id: "image_30",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_30.png",
                    e: 0
                }, {
                    id: "image_31",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_31.png",
                    e: 0
                }, {
                    id: "image_32",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_32.png",
                    e: 0
                }, {
                    id: "image_33",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_33.png",
                    e: 0
                }, {
                    id: "image_34",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_34.png",
                    e: 0
                }, {
                    id: "image_35",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_35.png",
                    e: 0
                }, {
                    id: "image_36",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_36.png",
                    e: 0
                }, {
                    id: "image_37",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_37.png",
                    e: 0
                }, {
                    id: "image_38",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_38.png",
                    e: 0
                }, {
                    id: "image_39",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_39.png",
                    e: 0
                }, {
                    id: "image_40",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_40.png",
                    e: 0
                }, {
                    id: "image_41",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_41.png",
                    e: 0
                }, {
                    id: "image_42",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_42.png",
                    e: 0
                }, {
                    id: "image_43",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_43.png",
                    e: 0
                }, {
                    id: "image_44",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_44.png",
                    e: 0
                }, {
                    id: "image_45",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_45.png",
                    e: 0
                }, {
                    id: "image_46",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_46.png",
                    e: 0
                }, {
                    id: "image_47",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_47.png",
                    e: 0
                }, {
                    id: "image_48",
                    w: 402,
                    h: 561,
                    u: t,
                    p: "img_48.png",
                    e: 0
                }],
                layers: [{
                    ddd: 0,
                    ind: 1,
                    ty: 2,
                    nm: "S_00000.png",
                    cl: "png",
                    refId: "image_0",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 0,
                    op: 1,
                    st: 0,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 2,
                    ty: 2,
                    nm: "S_00001.png",
                    cl: "png",
                    refId: "image_1",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 1,
                    op: 2,
                    st: 1,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 3,
                    ty: 2,
                    nm: "S_00002.png",
                    cl: "png",
                    refId: "image_2",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 2,
                    op: 3,
                    st: 2,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 4,
                    ty: 2,
                    nm: "S_00003.png",
                    cl: "png",
                    refId: "image_3",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 3,
                    op: 4,
                    st: 3,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 5,
                    ty: 2,
                    nm: "S_00004.png",
                    cl: "png",
                    refId: "image_4",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 4,
                    op: 5,
                    st: 4,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 6,
                    ty: 2,
                    nm: "S_00005.png",
                    cl: "png",
                    refId: "image_5",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 5,
                    op: 6,
                    st: 5,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 7,
                    ty: 2,
                    nm: "S_00006.png",
                    cl: "png",
                    refId: "image_6",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 6,
                    op: 7,
                    st: 6,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 8,
                    ty: 2,
                    nm: "S_00007.png",
                    cl: "png",
                    refId: "image_7",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 7,
                    op: 8,
                    st: 7,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 9,
                    ty: 2,
                    nm: "S_00008.png",
                    cl: "png",
                    refId: "image_8",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 8,
                    op: 9,
                    st: 8,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 10,
                    ty: 2,
                    nm: "S_00009.png",
                    cl: "png",
                    refId: "image_9",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 9,
                    op: 10,
                    st: 9,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 11,
                    ty: 2,
                    nm: "S_00010.png",
                    cl: "png",
                    refId: "image_10",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 10,
                    op: 11,
                    st: 10,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 12,
                    ty: 2,
                    nm: "S_00011.png",
                    cl: "png",
                    refId: "image_11",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 11,
                    op: 12,
                    st: 11,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 13,
                    ty: 2,
                    nm: "S_00012.png",
                    cl: "png",
                    refId: "image_12",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 12,
                    op: 13,
                    st: 12,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 14,
                    ty: 2,
                    nm: "S_00013.png",
                    cl: "png",
                    refId: "image_13",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 13,
                    op: 14,
                    st: 13,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 15,
                    ty: 2,
                    nm: "S_00014.png",
                    cl: "png",
                    refId: "image_14",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 14,
                    op: 15,
                    st: 14,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 16,
                    ty: 2,
                    nm: "S_00015.png",
                    cl: "png",
                    refId: "image_15",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 15,
                    op: 16,
                    st: 15,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 17,
                    ty: 2,
                    nm: "S_00016.png",
                    cl: "png",
                    refId: "image_16",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 16,
                    op: 17,
                    st: 16,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 18,
                    ty: 2,
                    nm: "S_00017.png",
                    cl: "png",
                    refId: "image_17",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 17,
                    op: 18,
                    st: 17,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 19,
                    ty: 2,
                    nm: "S_00018.png",
                    cl: "png",
                    refId: "image_18",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 18,
                    op: 19,
                    st: 18,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 20,
                    ty: 2,
                    nm: "S_00019.png",
                    cl: "png",
                    refId: "image_19",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 19,
                    op: 20,
                    st: 19,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 21,
                    ty: 2,
                    nm: "S_00020.png",
                    cl: "png",
                    refId: "image_20",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 20,
                    op: 21,
                    st: 20,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 22,
                    ty: 2,
                    nm: "S_00021.png",
                    cl: "png",
                    refId: "image_21",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 21,
                    op: 22,
                    st: 21,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 23,
                    ty: 2,
                    nm: "S_00022.png",
                    cl: "png",
                    refId: "image_22",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 22,
                    op: 23,
                    st: 22,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 24,
                    ty: 2,
                    nm: "S_00023.png",
                    cl: "png",
                    refId: "image_23",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 23,
                    op: 24,
                    st: 23,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 25,
                    ty: 2,
                    nm: "S_00024.png",
                    cl: "png",
                    refId: "image_24",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 24,
                    op: 25,
                    st: 24,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 26,
                    ty: 2,
                    nm: "S_00025.png",
                    cl: "png",
                    refId: "image_25",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 25,
                    op: 26,
                    st: 25,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 27,
                    ty: 2,
                    nm: "S_00026.png",
                    cl: "png",
                    refId: "image_26",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 26,
                    op: 27,
                    st: 26,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 28,
                    ty: 2,
                    nm: "S_00027.png",
                    cl: "png",
                    refId: "image_27",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 27,
                    op: 28,
                    st: 27,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 29,
                    ty: 2,
                    nm: "S_00028.png",
                    cl: "png",
                    refId: "image_28",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 28,
                    op: 29,
                    st: 28,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 30,
                    ty: 2,
                    nm: "S_00029.png",
                    cl: "png",
                    refId: "image_29",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 29,
                    op: 30,
                    st: 29,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 31,
                    ty: 2,
                    nm: "S_00030.png",
                    cl: "png",
                    refId: "image_30",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 30,
                    op: 31,
                    st: 30,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 32,
                    ty: 2,
                    nm: "S_00031.png",
                    cl: "png",
                    refId: "image_31",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 31,
                    op: 32,
                    st: 31,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 33,
                    ty: 2,
                    nm: "S_00032.png",
                    cl: "png",
                    refId: "image_32",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 32,
                    op: 33,
                    st: 32,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 34,
                    ty: 2,
                    nm: "S_00033.png",
                    cl: "png",
                    refId: "image_33",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 33,
                    op: 34,
                    st: 33,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 35,
                    ty: 2,
                    nm: "S_00034.png",
                    cl: "png",
                    refId: "image_34",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 34,
                    op: 35,
                    st: 34,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 36,
                    ty: 2,
                    nm: "S_00035.png",
                    cl: "png",
                    refId: "image_35",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 35,
                    op: 36,
                    st: 35,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 37,
                    ty: 2,
                    nm: "S_00036.png",
                    cl: "png",
                    refId: "image_36",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 36,
                    op: 37,
                    st: 36,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 38,
                    ty: 2,
                    nm: "S_00037.png",
                    cl: "png",
                    refId: "image_37",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 37,
                    op: 38,
                    st: 37,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 39,
                    ty: 2,
                    nm: "S_00038.png",
                    cl: "png",
                    refId: "image_38",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 38,
                    op: 39,
                    st: 38,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 40,
                    ty: 2,
                    nm: "S_00039.png",
                    cl: "png",
                    refId: "image_39",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 39,
                    op: 40,
                    st: 39,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 41,
                    ty: 2,
                    nm: "S_00040.png",
                    cl: "png",
                    refId: "image_40",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 40,
                    op: 41,
                    st: 40,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 42,
                    ty: 2,
                    nm: "S_00041.png",
                    cl: "png",
                    refId: "image_41",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 41,
                    op: 42,
                    st: 41,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 43,
                    ty: 2,
                    nm: "S_00042.png",
                    cl: "png",
                    refId: "image_42",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 42,
                    op: 43,
                    st: 42,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 44,
                    ty: 2,
                    nm: "S_00043.png",
                    cl: "png",
                    refId: "image_43",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 43,
                    op: 44,
                    st: 43,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 45,
                    ty: 2,
                    nm: "S_00044.png",
                    cl: "png",
                    refId: "image_44",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 44,
                    op: 45,
                    st: 44,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 46,
                    ty: 2,
                    nm: "S_00045.png",
                    cl: "png",
                    refId: "image_45",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 45,
                    op: 46,
                    st: 45,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 47,
                    ty: 2,
                    nm: "S_00046.png",
                    cl: "png",
                    refId: "image_46",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 46,
                    op: 47,
                    st: 46,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 48,
                    ty: 2,
                    nm: "S_00047.png",
                    cl: "png",
                    refId: "image_47",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 47,
                    op: 48,
                    st: 47,
                    bm: 0
                }, {
                    ddd: 0,
                    ind: 49,
                    ty: 2,
                    nm: "S_00048.png",
                    cl: "png",
                    refId: "image_48",
                    sr: 1,
                    ks: {
                        o: {
                            a: 0,
                            k: 100,
                            ix: 11
                        },
                        r: {
                            a: 0,
                            k: 0,
                            ix: 10
                        },
                        p: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 2
                        },
                        a: {
                            a: 0,
                            k: [201, 280.5, 0],
                            ix: 1
                        },
                        s: {
                            a: 0,
                            k: [100, 100, 100],
                            ix: 6
                        }
                    },
                    ao: 0,
                    ip: 48,
                    op: 49,
                    st: 48,
                    bm: 0
                }],
                markers: []
            },
            i = {
                container: document.getElementById("s-motion"),
                renderer: "svg",
                loop: !1,
                autoplay: !0,
                animationData: e
            };
        lottie.loadAnimation(i)
    }(),
    function() {
        function t(t, e, i) {
            this.img = t, this.canvas = new BT.Canvas(document.createElement("canvas")), this.canvas.setDimension({
                width: e,
                height: i
            }), this.canvasWidth = e, this.canvasHeight = i
        }

        function e(t, e) {
            this._canvas = t, this._words = e, this.canvas = new BT.Canvas(t), this.responsive()
        }
        var i = "//cdn.gogoro.com/resources/pages/smartscooter/s1/break-a/",
            n = [i + "img-break-1-pure.svg?v=2", i + "img-break-1-perfor.svg", i + "img-break-1-mance.svg"],
            s = document.querySelector(".break-words canvas"),
            r = $(".section-break-a"),
            o = $(".animation-layer"),
            a = $(".break-a-duration");
        BT.preloadImages(n).then((function(t) {
            r.addClass("loaded");
            var i, n, l = new e(s, t);
            BT.Event.on("resize-w", l.responsive.bind(l)), BT.Event.on("resize-w", (function() {
                n && n.destroy(), i = new TimelineMax;
                var t = .5 * a.height();
                i.fromTo(o, 1, {
                    autoAlpha: 0
                }, {
                    autoAlpha: 1,
                    ease: Power1.easeNone
                }, 0), i.from($(".break-scooter"), 1, {
                    y: t,
                    ease: Power1.easeNone
                }, 0), i.from($(".break-words"), 1, {
                    y: .5 * t,
                    ease: Power1.easeNone
                }, 0), (n = new BT.Animation({
                    tl: i,
                    section: a,
                    friction: .1,
                    cb: function(t) {
                        l.update(t)
                    }
                })).play()
            }), !0)
        })), t.prototype.update = function(t) {
            this.canvas.clear(), this.canvas.drawImage(this.img);
            var e = Math.min(t / .7, 1),
                i = this.canvas.ctx.createLinearGradient(0, this.canvasHeight, 0, this.canvasHeight - this.canvasHeight * e);
            i.addColorStop(0, "rgba(255, 255, 255, 1)"), i.addColorStop(1, "rgba(255, 255, 255, 0)"), this.canvas.mask(i)
        }, e.prototype.update = function(t) {
            t || (t = 0);
            var e = this;
            this.canvas.clear(), this.words.forEach((function(i, n) {
                i.update(t), n > 0 && (n += 1);
                var s = e.wordCanvasHeight * n + (e.canvasHeight - 4 * e.wordCanvasHeight) / 3 * n;
                e.canvas.drawImage(i.canvas.canvas, 0, s, e.canvasWidth, e.wordCanvasHeight)
            }))
        }, e.prototype.responsive = function() {
            this.canvasWidth = 2 * this._canvas.parentElement.offsetWidth, this.canvasHeight = 2 * this._canvas.parentElement.offsetHeight, this.canvas.setDimension({
                width: this.canvasWidth,
                height: this.canvasHeight
            }), this.wordCanvasHeight = this.canvasWidth / this._words[0].width * this._words[0].height;
            var e = this;
            this.words = this._words.map((function(i) {
                return new t(i, e.canvasWidth, e.wordCanvasHeight)
            })), this.update()
        }
    }(),
    function(t) {
        function e(t) {
            i.removeClass("active-1 active-2 active-3"), i.addClass("active-" + (t + 1))
        }
        var i = t(".key-number-list");
        i.slick({
            dots: !1,
            arrows: !1,
            centerMode: !1,
            infinite: !1,
            slidesToShow: 3,
            slidesToScroll: 3,
            responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: !0,
                    dots: !0,
                    slide: ".key-number-item"
                }
            }]
        });
        var n = 0,
            s = !1;
        setInterval((function() {
            s || e(n = (n + 1) % 3)
        }), 5e3);
        t(".key-number-item").on("mouseenter", (function() {
            s = !0, e(n = i.find(".key-number-item").index(t(this)))
        })).on("mouseleave", (function() {
            s = !1
        }))
    }(jQuery), BT.respondChildrenSize($(".color-gallery-captions")), BT.scrollAnimation($(".section-colors-bg"), {
        factor: .1,
        offset: 200,
        style: "transform",
        direction: "Y"
    }),
    function(t) {
        t(".performance").each((function() {
            var e = t(this),
                i = new TimelineMax({
                    delay: .2,
                    onStart: function() {
                        e.addClass("active")
                    }
                });
            i.from(e.find(".subhead"), .5, {
                autoAlpha: 0,
                y: 60
            }, 0), i.from(e.find("p"), .5, {
                autoAlpha: 0,
                y: 60
            }, .1);
            var n = S1.createAnimationTrigger(e.find(".section-content").get(0), i, {
                triggerHook: BT.Event.reactiveWinWidth < 768 ? .9 : .75
            }).on("enter", (function() {
                setTimeout((function() {
                    n.destroy()
                }), 1e3)
            }))
        }))
    }(jQuery),
    function() {
        var t = new Hammer($(".section-app").get(0)),
            e = $(".app-slide-radio");
        t.on("swipeleft swiperight", (function(t) {
            var i = "swipeleft" === t.type ? 1 : -1,
                n = (e.index(e.filter(":checked")) + i) % e.length;
            e.eq(n).prop("checked", !0)
        }))
    }(),
    function() {
        var t = $(".easter-egg-layer"),
            e = new BT.ImageGallery($(".gallery-canvas").get(0), ["//cdn.gogoro.com/resources/pages/smartscooter/s1/gallery/ack-gallery-01@2x.jpg", "//cdn.gogoro.com/resources/pages/smartscooter/s1/gallery/ack-gallery-02@2x.jpg"], {
                onProgress: function(e) {
                    var i = Math.max(0, Math.abs(e) - .8) / .2;
                    t.css({
                        opacity: i
                    })
                }
            });
        $(".gallery-btn").on("mousedown", (function() {
            $(this).is(".gallery-btn--left") ? e.speedLeft() : e.speedRight()
        })).on("mouseout mouseup", (function() {
            e.speedStop()
        }));
        var i = $(".gallery-canvas"),
            n = new TimelineMax({
                delay: .5,
                onStart: function() {
                    e.speed = -300
                }
            }).from(i, 2.8, {
                opacity: 0,
                ease: Power3.easeOut
            });
        new ScrollMagic.Scene({
            triggerElement: document.querySelector(".section-gallery"),
            triggerHook: .75,
            reverse: !1
        }).setTween(n).addTo(S1.scrollController)
    }();