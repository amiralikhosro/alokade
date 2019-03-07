$(document).ready(function () {
/*    $('.product .nav-item').click(function () {
        $(this).addClass('active').siblings().removeClass('active');
        $val=$(this).attr('data-filter');
        $(".disNone").not('.'+$val).hide();
        $('.disNone').filter('.'+$val).show();
    });*/
    $(document).on('click','.product .nav-item',function () {
        $(this).addClass('active').siblings().removeClass('active');
        var val=$(this).attr('data-filter');
        var disNone = $('.disNone')
        disNone.not('.'+val).hide();
        disNone.filter('.'+val).show();
    })
    var sliderLikes = $('.sliderLikes');
    sliderLikes.owlCarousel({
        stagePadding: 50,
        loop:true,
        margin:10,
        nav:false,
        items:1,
        lazyLoad: true,
        responsive:{
            0:{
                items:1,
                stagePadding: 60
            },
            600:{
                items:1,
                stagePadding: 100
            },
            1000:{
                items:1,
                stagePadding: 200
            },
            1200:{
                items:1,
                stagePadding: 250
            },
            1400:{
                items:1,
                stagePadding: 300
            },
            1600:{
                items:1,
                stagePadding: 350
            },
            1800:{
                items:1,
                stagePadding: 350
            }
        }
    })
    // control  likes slider
    $(document).on('click','.likesProduct .custom-owl-next-packages',function () {
        sliderLikes.trigger('next.owl.carousel');
    })

    $(document).on('click','.likesProduct .custom-owl-prev-packages',function () {
        sliderLikes.trigger('prev.owl.carousel');
    })
})