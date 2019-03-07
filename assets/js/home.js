$(document).ready(function () {

    // First Slider(Full Slider)
    var FullSlider = $('.FullWidthSlider');
    FullSlider.owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots: true,
        responsive:{
            0:{
                items:1
            }
        }
    });
    $('.custom-owl-next-FullWidthSlider').click(function() {
        FullSlider.trigger('next.owl.carousel');
    });

    $('.custom-owl-prev-FullWidthSlider').click(function() {
        FullSlider.trigger('prev.owl.carousel');
    });
    // End Slider Full Width
//  Slider Alokade packages
    var SliderAlokadePackages = $('.SliderAlokadePackages');
    SliderAlokadePackages.owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    });
    // control  packages silder
    $('.packages .custom-owl-next-packages').click(function() {
        SliderAlokadePackages.trigger('next.owl.carousel');
    });

    $('.packages .custom-owl-prev-packages').click(function() {
        SliderAlokadePackages.trigger('prev.owl.carousel');
    });
    // End Slider packages
    //  Slider Alokade Dehydrated
    var SliderAlokadeDehydrated = $('.SliderAlokadeDehydrated');
    SliderAlokadeDehydrated.owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    });
    // control  Dehydrated silder
    $('.Dehydrated .custom-owl-next-packages').click(function() {
        SliderAlokadeDehydrated.trigger('next.owl.carousel');
    });

    $('.Dehydrated .custom-owl-prev-packages').click(function() {
        SliderAlokadeDehydrated.trigger('prev.owl.carousel');
    });
    // End  Dehydrated silder
    //  Slider Alokade Nuts
    var SliderAlokadeSliderNuts= $('.SliderAlokadeNuts');
    SliderAlokadeSliderNuts.owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    });
    // control  Nuts silder
    $('.Nuts .custom-owl-next-packages').click(function() {
        SliderAlokadeSliderNuts.trigger('next.owl.carousel');
    });

    $('.Nuts .custom-owl-prev-packages').click(function() {
        SliderAlokadeSliderNuts.trigger('prev.owl.carousel');
    });
    // End  Nuts silder
    //  Slider Alokade sour
    var SliderAlokadeSour= $('.SliderAlokadeSour');
    SliderAlokadeSour.owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    });
    // control  sour  silder
    $('.sour .custom-owl-next-packages').click(function() {
        SliderAlokadeSour.trigger('next.owl.carousel');
    });

    $('.sour .custom-owl-prev-packages').click(function() {
        SliderAlokadeSour.trigger('prev.owl.carousel');
    });
    // End  sour  silder
    //  Slider Alokade BestSell
    var SliderAlokadeBestSell= $('.SliderAlokadeBestSell');
    SliderAlokadeBestSell.owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    });
    // control  BestSell silder
    $('.bestsell .custom-owl-next-packages').click(function() {
        SliderAlokadeBestSell.trigger('next.owl.carousel');
    });

    $('.bestSell .custom-owl-prev-packages').click(function() {
        SliderAlokadeBestSell.trigger('prev.owl.carousel');
    });
    // End  BestSell silder
    //  Slider Alokade BestSell
    var SliderUsefulArticles= $('.SliderUsefulArticles');
    SliderUsefulArticles.owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    });
    // control  BestSell silder
    $('.UsefulArticles .custom-owl-next-packages').click(function() {
        SliderUsefulArticles.trigger('next.owl.carousel');
    });

    $('.UsefulArticles .custom-owl-prev-packages').click(function() {
        SliderUsefulArticles.trigger('prev.owl.carousel');

    });
    // End  BestSell silder


})