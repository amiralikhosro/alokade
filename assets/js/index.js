$(document).ready(function () {
    if ($(window).width()<1600){
        $('.container').addClass('').removeClass('');
    }
    else{
        $('.container-fluid').addClass('').removeClass('');
    }
    $( window ).resize(function() {
        if ($(window).width()<1600){
            $('.container').addClass('').removeClass('');
        }
        else{
            $('.container-fluid').addClass('').removeClass('');
        }
    });

    // preloader

    $(window).on('load', function () {
        $(".preloader").fadeOut(1750);
        $(".content").fadeIn(1750);
    });
});