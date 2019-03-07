<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>الوکده</title>
    <?php
    //    <!-- style necessary for all pages -->
    include_once './layout/style.php';
    ?>
    <link rel="stylesheet" href="./assets/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <?php
    include_once './layout/script.php';
    ?>
</head>
<body>
    <!--header of site-->
    <?php
        include_once './layout/header.php';
    ?>
    <main class="content ">
        <!--mainContanet contain body of website-->
        <!--First Slider -->
        <section class="home text-right">
            <!--        Slider First End-->
            <article class="sliderFirst">
                <!--            Full Width Carousel-->
                <div class="owl-carousel owl-theme container p-0 FullWidthSlider " >
                    <div class="item">
                        <figure class="">
                            <img class="h-100 w-100" src="/assets/images/slider/1.jpg" alt="">
                        </figure>
                    </div>
                    <div class="item">
                        <figure class="">
                            <img class="h-100 w-100" src="/assets/images/slider/4.jpg" alt="">
                        </figure>
                    </div>
                    <div class="item">
                        <figure class="">
                            <img class="h-100 w-100" src="/assets/images/slider/3.jpg" alt="">
                        </figure>
                    </div>
                    <div class="item">
                        <figure class="">
                            <img class="h-100 w-100" src="/assets/images/slider/2.jpg" alt="">
                        </figure>
                    </div>
                </div>
                <!--            Owl Nav Carousel Full Width Carousel-->
                <div class="custom-owl-nav position-relative container" style="z-index: 11">
                    <div class="col-12 text-left">
                    <span class="custom-owl-next-FullWidthSlider rounded-circle position-absolute angleForslider">
                        <i class="fas fa-angle-left position-absolute"></i>
                    </span>
                        <span class="custom-owl-prev-FullWidthSlider rounded-circle position-absolute angleForslider" >
                        <i class="fas fa-angle-right position-absolute"></i>
                    </span>
                    </div>

                </div>
                <!--            Slogans-->
                <div class="container pb-3 pt-3 bg-white colorRed supportAndWarranty directionRtl">
                    <div class="row justify-content-center">
                        <div class="col-4">
                            <div class="row">
                                <div class="col-3 text-left mr-sm-0 mr-2">
                                    <img src="/assets/images/delivery-truck.png" alt="" class="w-100 supportAndWarrantyImg">
                                </div>
                                <div class="col-sm-9 col-12">
                                    <span>ارسال رایگان</span>
                                    <br>
                                    <span>تمام سفارشات</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row">
                                <div class="col-3 text-left mr-sm-0 mr-3">
                                    <img src="/assets/images/guarantee.png" alt="" class="w-100 supportAndWarrantyImg">
                                </div>
                                <div class="col-sm-9 col-12">
                                    <span>تضمین بهترین</span>
                                    <br>
                                    <span>کیفیت و قیمت</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row">
                                <div class="col-3 text-left mr-sm-0 mr-2">
                                    <img src="/assets/images/customer-service.png" alt="" class="w-100 supportAndWarrantyImg">
                                </div>
                                <div class="col-sm-9 col-12">
                                    <span>پشتیبانی</span>
                                    <br>
                                    <span>24ساعته</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <!--packages-->
            <!--        packages title-->
            <article class="packages otherSliderOnHomePage container mt-5 bg-white">
                <div class="row justify-content-center position-relative ">
                    <div class="titlePackages col-8 border-radius colorWhite position-absolute  bgGradiantRed">
                        <h2 class="text-center">پکیج ها</h2>
                    </div>
                    <div class="owl-carousel SliderAlokadePackages col-12 p-5 pb-0 bg-white owl-theme" >
                        <div class="item">
                            <figure class="box-shadow-products-img pb-2">
                                <img class="otherSliderOnHomePageSliderImg" src="/assets/images/slider/1.jpg" alt="">
                                <figcaption>
                                    <p class="text-center">پکیج1-500گرمی</p>
                                    <p class="text-center">آجیل+خشکبار</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="item">
                            <figure class="box-shadow-products-img pb-2">
                                <img class="otherSliderOnHomePageSliderImg" src="/assets/images/slider/4.jpg" alt="">
                                <figcaption>
                                    <p class="text-center">پکیج1-500گرمی</p>
                                    <p class="text-center">آجیل+خشکبار</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="item">
                            <figure class="box-shadow-products-img pb-2">
                                <img class="otherSliderOnHomePageSliderImg" src="/assets/images/slider/3.jpg" alt="">
                                <figcaption>
                                    <p class="text-center">پکیج1-500گرمی</p>
                                    <p class="text-center">آجیل+خشکبار</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="item">
                            <figure class="box-shadow-products-img pb-2">
                                <img class="otherSliderOnHomePageSliderImg" src="/assets/images/slider/2.jpg" alt="">
                                <figcaption>
                                    <p class="text-center">پکیج1-500گرمی</p>
                                    <p class="text-center">آجیل+خشکبار</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="custom-owl-nav position-relative container" style="z-index: 11">
                    <div class="col-12">
                    <span class="custom-owl-next-packages rounded-circle position-absolute angleForslider">
                        <i class="fas fa-angle-left position-absolute"></i>
                    </span>
                        <span class="custom-owl-prev-packages rounded-circle position-absolute angleForslider" >
                        <i class="fas fa-angle-right position-absolute"></i>
                    </span>
                    </div>

                </div>
            </article>

            <article class="Dehydrated otherSliderOnHomePage container mt-5 bg-white">
                <div class="row justify-content-center position-relative ">
                    <div class="titlePackages col-8 border-radius colorWhite position-absolute  bgGradiantRed">
                        <h2 class="text-center">خشکبار</h2>
                    </div>
                    <div class="owl-carousel SliderAlokadeDehydrated col-12 p-5 pb-0 bg-white owl-theme" >
                        <div class="item">
                            <figure class="box-shadow-products-img pb-2">
                                <img class="otherSliderOnHomePageSliderImg" src="/assets/images/slider/1.jpg" alt="">
                                <figcaption>
                                    <p class="text-center">پکیج1-500گرمی</p>
                                    <p class="text-center">آجیل+خشکبار</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="item">
                            <figure class="box-shadow-products-img pb-2">
                                <img class="otherSliderOnHomePageSliderImg" src="/assets/images/slider/4.jpg" alt="">
                                <figcaption>
                                    <p class="text-center">پکیج1-500گرمی</p>
                                    <p class="text-center">آجیل+خشکبار</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="item">
                            <figure class="box-shadow-products-img pb-2">
                                <img class="otherSliderOnHomePageSliderImg" src="/assets/images/slider/3.jpg" alt="">
                                <figcaption>
                                    <p class="text-center">پکیج1-500گرمی</p>
                                    <p class="text-center">آجیل+خشکبار</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="item">
                            <figure class="box-shadow-products-img pb-2">
                                <img class="otherSliderOnHomePageSliderImg" src="/assets/images/slider/2.jpg" alt="">
                                <figcaption>
                                    <p class="text-center">پکیج1-500گرمی</p>
                                    <p class="text-center">آجیل+خشکبار</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="custom-owl-nav position-relative container" style="z-index: 11">
                    <div class="col-12">
                    <span class="custom-owl-next-packages rounded-circle position-absolute angleForslider">
                        <i class="fas fa-angle-left position-absolute"></i>
                    </span>
                        <span class="custom-owl-prev-packages rounded-circle position-absolute angleForslider" >
                        <i class="fas fa-angle-right position-absolute"></i>
                    </span>
                    </div>

                </div>
            </article>

            <article class="Nuts otherSliderOnHomePage container mt-5 bg-white">
                <div class="row justify-content-center position-relative ">
                    <div class="titlePackages col-8 border-radius colorWhite position-absolute  bgGradiantRed">
                        <h2 class="text-center">آجیل ها</h2>
                    </div>
                    <div class="owl-carousel SliderAlokadeNuts col-12 p-5 pb-0 bg-white owl-theme" >
                        <div class="item">
                            <figure class="box-shadow-products-img pb-2">
                                <img class="otherSliderOnHomePageSliderImg" src="/assets/images/slider/1.jpg" alt="">
                                <figcaption>
                                    <p class="text-center">پکیج1-500گرمی</p>
                                    <p class="text-center">آجیل+خشکبار</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="item">
                            <figure class="box-shadow-products-img pb-2">
                                <img class="otherSliderOnHomePageSliderImg" src="/assets/images/slider/4.jpg" alt="">
                                <figcaption>
                                    <p class="text-center">پکیج1-500گرمی</p>
                                    <p class="text-center">آجیل+خشکبار</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="item">
                            <figure class="box-shadow-products-img pb-2">
                                <img class="otherSliderOnHomePageSliderImg" src="/assets/images/slider/3.jpg" alt="">
                                <figcaption>
                                    <p class="text-center">پکیج1-500گرمی</p>
                                    <p class="text-center">آجیل+خشکبار</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="item">
                            <figure class="box-shadow-products-img pb-2">
                                <img class="otherSliderOnHomePageSliderImg" src="/assets/images/slider/2.jpg" alt="">
                                <figcaption>
                                    <p class="text-center">پکیج1-500گرمی</p>
                                    <p class="text-center">آجیل+خشکبار</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="custom-owl-nav position-relative container" style="z-index: 11">
                    <div class="col-12">
                    <span class="custom-owl-next-packages rounded-circle position-absolute angleForslider">
                        <i class="fas fa-angle-left position-absolute"></i>
                    </span>
                        <span class="custom-owl-prev-packages rounded-circle position-absolute angleForslider" >
                        <i class="fas fa-angle-right position-absolute"></i>
                    </span>
                    </div>

                </div>
            </article>

            <article class="sour otherSliderOnHomePage container mt-5 bg-white">
                <div class="row justify-content-center position-relative ">
                    <div class="titlePackages col-8 border-radius colorWhite position-absolute  bgGradiantRed">
                        <h2 class="text-center">ترش ها</h2>
                    </div>
                    <div class="owl-carousel SliderAlokadeSour col-12 p-5 pb-0 bg-white owl-theme" >
                        <div class="item">
                            <figure class="box-shadow-products-img pb-2">
                                <img class="otherSliderOnHomePageSliderImg" src="/assets/images/slider/1.jpg" alt="">
                                <figcaption>
                                    <p class="text-center">پکیج1-500گرمی</p>
                                    <p class="text-center">آجیل+خشکبار</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="item">
                            <figure class="box-shadow-products-img pb-2">
                                <img class="otherSliderOnHomePageSliderImg" src="/assets/images/slider/4.jpg" alt="">
                                <figcaption>
                                    <p class="text-center">پکیج1-500گرمی</p>
                                    <p class="text-center">آجیل+خشکبار</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="item">
                            <figure class="box-shadow-products-img pb-2">
                                <img class="otherSliderOnHomePageSliderImg" src="/assets/images/slider/3.jpg" alt="">
                                <figcaption>
                                    <p class="text-center">پکیج1-500گرمی</p>
                                    <p class="text-center">آجیل+خشکبار</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="item">
                            <figure class="box-shadow-products-img pb-2">
                                <img class="otherSliderOnHomePageSliderImg" src="/assets/images/slider/2.jpg" alt="">
                                <figcaption>
                                    <p class="text-center">پکیج1-500گرمی</p>
                                    <p class="text-center">آجیل+خشکبار</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="custom-owl-nav position-relative container" style="z-index: 11">
                    <div class="col-12">
                    <span class="custom-owl-next-packages rounded-circle position-absolute angleForslider">
                        <i class="fas fa-angle-left position-absolute"></i>
                    </span>
                        <span class="custom-owl-prev-packages rounded-circle position-absolute angleForslider" >
                        <i class="fas fa-angle-right position-absolute"></i>
                    </span>
                    </div>

                </div>
            </article>

            <article class="bestSell otherSliderOnHomePage container mt-5 bg-white">
                <div class="row justify-content-center position-relative ">
                    <div class="titlePackages col-8 border-radius colorWhite position-absolute  bgGradiantRed">
                        <h2 class="text-center">پکیج ها</h2>
                    </div>
                    <div class="owl-carousel SliderAlokadeBestSell col-12 p-5 pb-0 bg-white owl-theme" >
                        <div class="item">
                            <figure class="box-shadow-products-img pb-2">
                                <img class="otherSliderOnHomePageSliderImg" src="/assets/images/slider/1.jpg" alt="">
                                <figcaption>
                                    <p class="text-center">پکیج1-500گرمی</p>
                                    <p class="text-center">آجیل+خشکبار</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="item">
                            <figure class="box-shadow-products-img pb-2">
                                <img class="otherSliderOnHomePageSliderImg" src="/assets/images/slider/4.jpg" alt="">
                                <figcaption>
                                    <p class="text-center">پکیج1-500گرمی</p>
                                    <p class="text-center">آجیل+خشکبار</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="item">
                            <figure class="box-shadow-products-img pb-2">
                                <img class="otherSliderOnHomePageSliderImg" src="/assets/images/slider/3.jpg" alt="">
                                <figcaption>
                                    <p class="text-center">پکیج1-500گرمی</p>
                                    <p class="text-center">آجیل+خشکبار</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="item">
                            <figure class="box-shadow-products-img pb-2">
                                <img class="otherSliderOnHomePageSliderImg" src="/assets/images/slider/2.jpg" alt="">
                                <figcaption>
                                    <p class="text-center">پکیج1-500گرمی</p>
                                    <p class="text-center">آجیل+خشکبار</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="custom-owl-nav position-relative container" style="z-index: 11">
                    <div class="col-12">
                    <span class="custom-owl-next-packages rounded-circle position-absolute angleForslider">
                        <i class="fas fa-angle-left position-absolute"></i>
                    </span>
                        <span class="custom-owl-prev-packages rounded-circle position-absolute angleForslider" >
                        <i class="fas fa-angle-right position-absolute"></i>
                    </span>
                    </div>

                </div>
            </article>

            <article class="UsefulArticles otherSliderOnHomePage container mt-5 bg-white">
                <div class="row justify-content-center position-relative ">
                    <div class="titlePackages col-8 border-radius colorWhite position-absolute bg-success">
                        <h2 class="text-center">مقالات مفید</h2>
                    </div>
                    <div class="owl-carousel SliderUsefulArticles col-12 p-5 pb-0 bg-white owl-theme" >
                        <div class="item">
                            <figure class="box-shadow-products-img pb-2">
                                <img class="otherSliderOnHomePageSliderImg" src="/assets/images/slider/1.jpg" alt="">
                                <figcaption>
                                    <p class="text-center">پکیج1-500گرمی</p>
                                    <p class="text-center">آجیل+خشکبار</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="item">
                            <figure class="box-shadow-products-img pb-2">
                                <img class="otherSliderOnHomePageSliderImg" src="/assets/images/slider/4.jpg" alt="">
                                <figcaption>
                                    <p class="text-center">پکیج1-500گرمی</p>
                                    <p class="text-center">آجیل+خشکبار</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="item">
                            <figure class="box-shadow-products-img pb-2">
                                <img class="otherSliderOnHomePageSliderImg" src="/assets/images/slider/3.jpg" alt="">
                                <figcaption>
                                    <p class="text-center">پکیج1-500گرمی</p>
                                    <p class="text-center">آجیل+خشکبار</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="item">
                            <figure class="box-shadow-products-img pb-2">
                                <img class="otherSliderOnHomePageSliderImg" src="/assets/images/slider/2.jpg" alt="">
                                <figcaption>
                                    <p class="text-center">پکیج1-500گرمی</p>
                                    <p class="text-center">آجیل+خشکبار</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="custom-owl-nav position-relative container" style="z-index: 11">
                    <div class="col-12">
                    <span class="custom-owl-next-packages rounded-circle position-absolute angleForslider">
                        <i class="fas fa-angle-left position-absolute"></i>
                    </span>
                        <span class="custom-owl-prev-packages rounded-circle position-absolute angleForslider" >
                        <i class="fas fa-angle-right position-absolute"></i>
                    </span>
                    </div>

                </div>
            </article>

        </section>
    </main>
    <?php
        include_once './layout/footer.php';
    ?>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/home.js"></script>
</body>
</html>