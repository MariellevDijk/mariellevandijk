$(document).ready(function (e) {

    $('.res-nav_click').click(function () {
        $('.main-nav').slideToggle();
        $('.nav-item').click(function () {
            $('.main-nav').hide();
        });
        return false;
    });


    setTimeout(updateScrollSpy, 1000);
});

function updateScrollSpy() {
    jQuery('[data-spy="scroll"]').each(function () {
        var $spy = jQuery(this).scrollspy('refresh')
    });
}