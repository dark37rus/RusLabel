$(document).ready(function() {

    function preLoader () {
        $('#p_prldr').fadeOut(1000);
    }
    setTimeout(preLoader, 1000);
    $('.submenu').attr('data-visibal', 'false');

    $('.menu__dropdown').on('click', function() {
        $x = $(this).next('.submenu');
        $x.toggle(500);

        $y = $('ul.menu > li > ul li .submenu').not($x);
        $y.fadeOut(500);
    });

    $('#menu_swither').click(function () {
        $('#menu_swither > .fa-bars').toggle(10);
        $('#menu_swither > .fa-times').toggle(10);
        $('.menu_line').toggle(500);
    });
});





