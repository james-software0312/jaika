

(function ($) {
    "use strict";

    jQuery(document).ready(function ($) {

        var rtlValue = $('html').attr('dir') === 'rtl' ? true : false;

        /*-----------------------------------------
            global slick slicer control
        ------------------------------------------*/
        var globalSlickInit = $('.global-slick-init');
        if (globalSlickInit.length > 0) {

            //todo have to check slider item
            $.each(globalSlickInit, function (index, value) {
                if ($(this).children('div').length > 1) {

                    //todo configure slider settings object
                    var sliderSettings = {};
                    var allData = $(this).data();
                    var infinite = typeof allData.infinite == 'undefined' ? false : allData.infinite;
                    var arrows = typeof allData.arrows == 'undefined' ? false : allData.arrows;
                    // var autoplay = typeof allData.autoplay == 'undefined' ? false : allData.autoplay;
                    var focusOnSelect = typeof allData.focusonselect == 'undefined' ? false : allData.focusonselect;
                    var swipeToSlide = typeof allData.swipetoslide == 'undefined' ? false : allData.swipetoslide;
                    var slidesToShow = typeof allData.slidestoshow == 'undefined' ? 1 : allData.slidestoshow;
                    var slidesToScroll = typeof allData.slidestoscroll == 'undefined' ? 1 : allData.slidestoscroll;
                    var speed = typeof allData.speed == 'undefined' ? '500' : allData.speed;
                    var dots = typeof allData.dots == 'undefined' ? false : allData.dots;
                    var cssEase = typeof allData.cssease == 'undefined' ? 'linear' : allData.cssease;
                    var prevArrow = typeof allData.prevarrow == 'undefined' ? '' : allData.prevarrow;
                    var nextArrow = typeof allData.nextarrow == 'undefined' ? '' : allData.nextarrow;
                    var centerMode = typeof allData.centermode == 'undefined' ? false : allData.centermode;
                    var centerPadding = typeof allData.centerpadding == 'undefined' ? false : allData.centerpadding;
                    var rows = typeof allData.rows == 'undefined' ? 1 : parseInt(allData.rows);
                    var autoplay = typeof allData.autoplay == 'undefined' ? false : allData.autoplay;
                    var autoplaySpeed = typeof allData.autoplayspeed == 'undefined' ? 2000 : parseInt(allData.autoplayspeed);
                    var lazyLoad = typeof allData.lazyload == 'undefined' ? false : allData.lazyload; // have to remove it from settings object if it undefined
                    var appendDots = typeof allData.appenddots == 'undefined' ? false : allData.appenddots;
                    var appendArrows = typeof allData.appendarrows == 'undefined' ? false : allData.appendarrows;
                    var asNavFor = typeof allData.asnavfor == 'undefined' ? false : allData.asnavfor;
                    var verticalSwiping = typeof allData.verticalswiping == 'undefined' ? false : allData.verticalswiping;
                    var vertical = typeof allData.vertical == 'undefined' ? false : allData.vertical;
                    var fade = typeof allData.fade == 'undefined' ? false : allData.fade;
                    var rtl = rtlValue;
                    var responsive = typeof $(this).data('responsive') == 'undefined' ? false : $(this).data('responsive');

                    //slider settings object setup
                    sliderSettings.infinite = infinite;
                    sliderSettings.arrows = arrows;
                    sliderSettings.autoplay = autoplay;
                    sliderSettings.focusOnSelect = focusOnSelect;
                    sliderSettings.swipeToSlide = swipeToSlide;
                    sliderSettings.slidesToShow = slidesToShow;
                    sliderSettings.slidesToScroll = slidesToScroll;
                    sliderSettings.speed = speed;
                    sliderSettings.dots = dots;
                    sliderSettings.cssEase = cssEase;
                    sliderSettings.prevArrow = prevArrow;
                    sliderSettings.nextArrow = nextArrow;
                    sliderSettings.rows = rows;
                    sliderSettings.autoplaySpeed = autoplaySpeed;
                    sliderSettings.autoplay = autoplay;
                    sliderSettings.verticalSwiping = verticalSwiping;
                    sliderSettings.vertical = vertical;
                    sliderSettings.rtl = rtl;

                    if (centerMode != false) {
                        sliderSettings.centerMode = centerMode;
                    }
                    if (centerPadding != false) {
                        sliderSettings.centerPadding = centerPadding;
                    }
                    if (lazyLoad != false) {
                        sliderSettings.lazyLoad = lazyLoad;
                    }
                    if (appendDots != false) {
                        sliderSettings.appendDots = appendDots;
                    }
                    if (appendArrows != false) {
                        sliderSettings.appendArrows = appendArrows;
                    }
                    if (asNavFor != false) {
                        sliderSettings.asNavFor = asNavFor;
                    }
                    if (fade != false) {
                        sliderSettings.fade = fade;
                    }
                    if (responsive != false) {
                        sliderSettings.responsive = responsive;
                    }
                    $(this).slick(sliderSettings);
                }
            });
        }

        /*--------------------------------
           All category menu control
        --------------------------------*/

        // if ($(window).width() < 992) {
        //     $(".mobile-style").removeClass("show");
        // }

        /*------------------------------
            Header Slick Slider
        -------------------------------*/

        $('.header-slider-main').slick({
            dots: true,
            infinite: true,
            speed: 500,
            rtl: rtlValue,
            fade: true,
            arrows: false,
            autoplay: true,
            cssEase: 'linear'
        });


        $('.header-slider-main-index-02').slick({
            dots: false,
            infinite: true,
            speed: 500,
            rtl: rtlValue,
            fade: true,
            arrows: true,
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
            rtl: rtlValue,
            arrows: true,
            autoplay: true,
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
            rtl: rtlValue,
            arrows: false,
            autoplay: true,
            cssEase: 'linear',
            centerMode: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            centerPadding: '140px',

            responsive: [{
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
        quick view popup
        -----------------------------------*/
        $(document).on('click', '#quickview', function (e) {
            e.preventDefault();
            $('#productview').addClass('show');
        });
        $(document).on('click', '#close', function (e) {
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

            var selector = $(this).attr('data-filter');
            $(".our-store-item-wrap").isotope({
                filter: selector
            });
        });


        /*------------------------------
            Fashion Blog Slick Slider
        -------------------------------*/

        $('.fashion-blog-slider-main').slick({
            dots: true,
            infinite: true,
            speed: 1000,
            arrows: false,
            rtl: rtlValue,
            autoplay: true,
            cssEase: 'linear',
            slidesToShow: 2,
            slidesToScroll: 1,

            responsive: [{
                breakpoint: 1201,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }]
        });


        /*------------------------------
            feedback Slick Slider
        -------------------------------*/

        $('.feedback-slider-main').slick({
            dots: false,
            infinite: true,
            rtl: rtlValue,
            speed: 1000,
            arrows: true,
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
            fade: true,
            rtl: rtlValue,
            asNavFor: '.shop-details-gallery-nav'
        });

        $('.shop-details-gallery-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.shop-details-gallery-slider',
            dots: false,
            rtl: rtlValue,
            arrows: false,
            focusOnSelect: true,
        });


        /*------------------------------
            New Collection Slick Slider
        -------------------------------*/

        $('.related-item-slider-main-full').slick({
            dots: false,
            infinite: true,
            speed: 500,
            arrows: true,
            rtl: rtlValue,
            autoplay: true,
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
                    breakpoint: 451,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }
            ]
        });


        /*------------------------------
            New Collection Slick Slider
        -------------------------------*/

        $('.related-item-slider-main-full-2').slick({
            dots: false,
            infinite: true,
            speed: 500,
            arrows: true,
            autoplay: true,
            cssEase: 'linear',
            rtl: rtlValue,
            slidesToShow: 3,
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

        if ($(window).width() < 992) {
            $(".index-03-catg").removeClass("show");
        }
    });

}(jQuery));



/*------------------------------
       Shop View Details
-------------------------------*/


var sandwiches = document.querySelectorAll('.zoom-js-handle');

sandwiches.forEach(function (sandwich, index) {
    sandwich.addEventListener('mousemove', function (e) {
        zoomin(e)
    })
    sandwich.addEventListener('mouseleave', function (e) {
        var zoomer = e.currentTarget;
        zoomer.style.backgroundImage = '';
    })
});

function zoomin(e) {
    var zoomer = e.currentTarget;
    zoomer.style.backgroundImage = 'url(' + zoomer.getAttribute('data-src') + ')';
    e.offsetX ? offsetX = e.offsetX : offsetX = e.touches[0].pageX
    e.offsetY ? offsetY = e.offsetY : offsetX = e.touches[0].pageX
    x = offsetX / zoomer.offsetWidth * 100
    y = offsetY / zoomer.offsetHeight * 100
    zoomer.style.backgroundPosition = x + '% ' + y + '%';
}

$(window).on("resize",function (){

    if ($(this).width() < 992) {
        $(".index-03-catg").removeClass("show");
    }
});