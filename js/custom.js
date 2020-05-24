'use strict';
jQuery(function ($) {
    $(document).ready(function () {

// ********************************************MENU*******************************************
        $("#main-nav-menu").on("click","a", function (event) {
            event.preventDefault();
            let id  = $(this).attr('href'),
                top = $(id).offset().top;
            $('body,html').animate({scrollTop: top}, 1500);
        });

// ********************************************owl-carousel*******************************************
        $('.carousel-inner li:first').addClass('active');

        $('.owl-carousel').owlCarousel({
            lazyLoad: true,
            nav: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            responsiveClass: true,
            loop: true,
            smartSpeed: 1000,
            margin: 40,
            itemElement: 'li',
            stageElement: 'ul',
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                800: {
                    items: 4
                },
                1000: {
                    items: 5
                }
            }
        });

    });

});


