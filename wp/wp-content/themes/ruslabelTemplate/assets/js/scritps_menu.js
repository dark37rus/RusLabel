$(document).ready(function() {

    function preLoader () {
        $('#p_prldr').fadeOut(1000);
    }
    setTimeout(preLoader, 1000);
    $('.submenu').attr('data-visibal', 'false');

    $('.menu__dropdown').on('click', function() {
        if (screen.width <= '768') {
            $x = $(this).next('.submenu');
            $x.toggle(500);

            $y = $('ul.menu > li > ul li .submenu').not($x);
            $y.fadeOut(500);
        }
    });

    $('#menu_swither').click(function () {
        $('#menu_swither > .fa-bars').toggle(10);
        $('#menu_swither > .fa-times').toggle(10);
        $('.menu_line').toggle(500);
    });

    $('.image-popup-vertical-fit').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        mainClass: 'mfp-img-mobile',
        image: {
            verticalFit: true
        }

    });

    $('.image-popup-fit-width').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        image: {
            verticalFit: false
        }
    });

    $('.image-popup-no-margins').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        closeBtnInside: false,
        fixedContentPos: true,
        mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
        image: {
            verticalFit: true
        },
        zoom: {
            enabled: true,
            duration: 300 // don't foget to change the duration also in CSS
        }
    });

});





