(function ($) {
    "use strict";

    jQuery(document).ready(function ($) {
        /* SearchBar */
        $(document).ready(function () {
            $('.search-close').on('click', function () {
                $('.search-bar').removeClass('active');
            });
            $('.search-open').on('click', function () {
                $('.search-bar').toggleClass('active');
            });
        });
        /*------------------------------
            Header Slick Slider
        -------------------------------*/
        var rtlValue = $('html').attr('dir') === 'rtl' ? true : false;
        $('.header-slider-main').slick({
            dots: true,
            infinite: true,
            speed: 500,
            fade: true,
            arrows: false,
            autoplay: true,
            rtl: rtlValue,
            cssEase: 'linear'
        });

        $('.header-slider-main-index-02').slick({
            dots: false,
            infinite: true,
            speed: 500,
            fade: true,
            arrows: true,
            rtl: rtlValue,
            autoplay: true,
            cssEase: 'linear',
            prevArrow: '<div class="prev-arrow"><i class="las la-angle-left"></i></div>',
            nextArrow: '<div class="next-arrow"> <i class="las la-angle-right"></i></div>',
        });

        /*------------------------------
            New Collection Slick Slider
        -------------------------------*/
        $('.new-collection-slider').slick({
            dots: false,
            infinite: true,
            speed: 500,
            arrows: true,
            autoplay: true,
            rtl: rtlValue,
            cssEase: 'linear',
            slidesToShow: 4,
            slidesToScroll: 1,
            prevArrow: '<div class="prev-arrow"><i class="las la-long-arrow-alt-left"></i> prev</div>',
            nextArrow: '<div class="next-arrow">next <i class="las la-long-arrow-alt-right"></i></div>',

            responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        arrows: false,
                    }
                },
                {
                    breakpoint: 451,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }

            ]
        });
        /*------------------------------
            New Design Slick Slider
        -------------------------------*/
        $('.new-design-slider-main').slick({
            dots: true,
            infinite: true,
            speed: 500,
            arrows: false,
            autoplay: true,
            cssEase: 'linear',
            centerMode: true,
            slidesToShow: 4,
            rtl: rtlValue,
            slidesToScroll: 1,
            centerPadding: '140px',

            responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerMode: false,
                        centerPadding: '0px',
                    }
                }
            ]
        });
        /*------------------------------------
            Quick view popup
        -----------------------------------*/
        $(document).on('click', '#productview #close', function (e) {
            e.preventDefault();
            $('#productview').removeClass('show');
        });
        $(document).on('click', function (e) {
            if ($(e.target).is('.product-modal-wrap.show')) {
                $('#productview').removeClass('show');
            }
        });
        /*------------------------------
            Countdown
        -------------------------------*/
        loopcounter('flash-countdown-1');
        loopcounter('flash-countdown-2');
        loopcounter('flash-countdown-3');
        /*------------------------------
           Call to action Countdown
        -------------------------------*/
        loopcounter('flash-countdown-ad');
        /*------------------------------
            Store area isotope jQuery
        -------------------------------*/
        $(".our-stor-btn-list li").on('click', function () {
            $(".our-stor-btn-list li").removeClass("active");
            $(this).addClass("active");
        });
        /*------------------------------
            Fashion Blog Slick Slider
        -------------------------------*/
        $('.fashion-blog-slider-main').slick({
            dots: true,
            infinite: true,
            speed: 1000,
            arrows: false,
            autoplay: true,
            cssEase: 'linear',
            slidesToShow: 2,
            slidesToScroll: 1,
            rtl: rtlValue,
            responsive: [
                {
                    breakpoint: 1367,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                },
            ]
        });
        /*------------------------------
            feedback Slick Slider
        -------------------------------*/
        $('.feedback-slider-main').slick({
            dots: false,
            infinite: true,
            speed: 1000,
            arrows: true,
            rtl: rtlValue,
            autoplay: true,
            cssEase: 'linear',
            slidesToShow: 1,
            slidesToScroll: 1,
            prevArrow: '<div class="prev-arrow"><i class="las la-angle-left"></i></div>',
            nextArrow: '<div class="next-arrow"><i class="las la-angle-right"></i></div>',
        });
        /*------------------------------
            Shop Details Slick Slider
        -------------------------------*/
        $('.shop-details-gallery-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            rtl: rtlValue,
            fade: true,
            asNavFor: '.shop-details-gallery-nav'
        });
        $('.shop-details-gallery-nav').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '.shop-details-gallery-slider',
            dots: false,
            rtl: rtlValue,
            arrows: false,
            focusOnSelect: true
        });
        /*------------------------------
            New Collection Slick Slider
        -------------------------------*/
        $('.related-item-slider-main-full').slick({
            dots: false,
            infinite: true,
            speed: 500,
            arrows: true,
            autoplay: true,
            cssEase: 'linear',
            rtl: rtlValue,
            slidesToShow: 4,
            slidesToScroll: 1,
            prevArrow: '<div class="prev-arrow"><i class="las la-long-arrow-alt-left"></i> prev</div>',
            nextArrow: '<div class="next-arrow">next <i class="las la-long-arrow-alt-right"></i></div>',

            responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 451,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }
            ]
        });
        /*------------------------------
            wow js init
        -------------------------------*/
        new WOW().init();
    });
    /*------------------------------
           Scroll to top
    -------------------------------*/
    $(window).scroll(function () {
        if ($(this).scrollTop() > 800) {
            $(".scroll-to-top").fadeIn();
        } else {
            $(".scroll-to-top").fadeOut();
        }
    })

    $(".scroll-to-top").click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 2000);
    })

    $(window).on('load', function () {
        /*------------------------------
           Preloader
        -------------------------------*/
        $('.preloader-inner').fadeOut(1000);
    });
}(jQuery));