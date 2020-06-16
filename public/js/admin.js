$(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

    $('.dropdown-toggle').hover(function () {
        $('.dropdown-menu').addClass('active');
        $('.content-nav').hover(function () {
            $('.dropdown-menu').removeClass('active');
        })
        $('.dropdown-menu').mouseleave(function () {
            $('.dropdown-menu').removeClass('active');
        })
    })
});
