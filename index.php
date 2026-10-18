<!DOCTYPE html>
<html lang="en">
<head>
<?PHP
    include_once 'pageparts/head.includes.php';
?>
</head>
<body>
<?PHP
    include_once 'pageparts/header.php';
?>

<!-- this is the hero image section -->
<section class=""><!-- main hero image start -->
    <section class="">
        <section class="hero-container overflow-hidden">
            <!-- hero gradient thinksmart -->
            <section class="tss-gradient"></section>
            <!-- <section class="{{ css_id }}-gradient"></section> --> 

            <div class="d-md-none">
                <div class="tss-mobile-bg"></div>
            </div>

            <!-- hero-gradient-dark start -->
            <div class="hero-gradient-background"></div>
            <!-- hero-gradient-dark end -->

            <!-- angled shape containers start -->
            <div class="shape-backgrounds-container">
                <div class="shape-graphic-container-left">
                    <div class="shape-graphic-left-side-a"></div>
                    <div class="shape-graphic-left-side-a1 d-none d-xl-block"></div>
                    <div class="shape-graphic-left-side-a-extra-color-bar d-none d-xl-block"></div>
                    <div class="shape-graphic-left-side-a-last d-none d-xl-block"></div>
                </div>
                <div class="shape-right">
                    <div class="shape-graphic-left-side-a"></div>
                    <div class="shape-graphic-left-side-a1 d-none d-xl-block"></div>
                    <div class="shape-graphic-left-side-a-extra-color-bar d-none d-xl-block"></div>
                    <div class="shape-graphic-left-side-a-last d-none d-xl-block"></div>
                </div>
            </div>
            <div class="shape-backgrounds-container opacity-2">
                <div class="shape-graphic-container-left">
                    <div class="shape-graphic-left-side-a"></div>
                    <div class="shape-graphic-left-side-a1 d-none d-xl-block"></div>
                    <div class="shape-graphic-left-side-a-extra-color-bar d-none d-xl-block"></div>
                </div>
                <div class="shape-right">
                    <div class="shape-graphic-left-side-a"></div>
                    <div class="shape-graphic-left-side-a1 d-none d-xl-block"></div>
                    <div class="shape-graphic-left-side-a-extra-color-bar d-none d-xl-block"></div>
                </div>
            </div>
            <!-- angled-shaped-containers end -->

            <div class="pt-5 mt-4 mt-xl-5"></div>
            <div class="pt-4 pt-md-4 mt-md-3 mt-xl-0 pt-xl-0"></div>
            <div class="pt-lg-2 pt-xl-2"></div>
            <!-- hero image start -->
            <div class="container pb-4 pb-md-0">
                <div class="row justify-content-center">
                    <!-- headline left side -->
                    <div class="col-10 col-sm-8 col-md-6 col-lg-6 col-xl-6">
                        <div class="row justify-content-center h-100">
                            <div class="col-12 col-md-12 col-lg-11 col-xl-10 align-self-center">
                                <!-- hero text start -->
                                <div class="pl-xl-3 pr-xl-3">
                                    <img src="{{ frontend_base_url }}assets/img/thinksmart-software-main-headline.svg"
                                         class="headline-svg-shadow img-fluid pt-sm-3 pb-sm-3 pt-md-0 pr-md-3 pl-md-4 pb-md-4 pr-lg-5 pr-xl-5">
                                    <div class="">
                                    </div>
                                </div>
                                <!-- hero text end -->
                                <div class="mb-lg-3 pr-xl-3 mt-xl-n1 font-italic font-weight-light text-center text-white d-none d-lg-block">
                                    We are the scheduling and customer management experts for businesses that conduct
                                    classes and take bookings.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- hero graphic right side -->
                    <div class="d-none d-md-block col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 align-self-md-end pr-xl-4">
                        <picture>
                            <source srcset="{{ frontend_base_url }}assets/img/thinksmart/thinksmart-allsoftware.webp" type="image/webp">
                            <source srcset="{{ frontend_base_url }}assets/img/thinksmart/thinksmart-allsoftware.png" type="image/png">
                            <img class="d-none d-md-block img-fluid generic-svg-shadow ml-xl-n5 pr-xl-4 pl-xl-4" src="{{ frontend_base_url }}assets/img/thinksmart/thinksmart-allsoftware.png" alt="All sports image">
                        </picture>
                    </div>
                </div>
            </div>
            <!-- hero image end -->
        </section><!-- gradient end -->
    </section>
</section><!-- main hero image end -->

<!-- divider -->
<div class="bg-tss-secondary p-2 mb-3 mb-lg-4">
    <div class="font-italic font-weight-light text-center text-white d-lg-none p-sm-1 p-md-2 pl-sm-5 pr-sm-5">
        We are the scheduling and customer management experts for businesses that conduct classes and take bookings.
    </div>
</div>

<!-- mobile select -->
<section class="container testimonials-card rounded d-md-none">
    <!-- <h5 class="text-center mb-3 text-{{ css_id }}-primary">Please select the product that suits your industry the best</h5> --> 
    <h5 class="text-center mb-2 mb-sm-3 text-tss-primary">Please select the product that best suits your industry</h5>
    <!-- all views -->
    <div class="main-slide-container-for-client-testimonials ml-auto mr-auto" style="max-width: 400px">
        <div id="carouselClientIndicators" class="carousel carousel-fade" data-ride="carousel">
            <div class="carousel-inner testimonials-slide-container d-flex align-items-center pb-4">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-10">
                                <a href="{{ path_for( 'product_pages.home', {'product_name': 'classbiz'}) }}"><img
                                            src="{{ frontend_base_url }}assets/img/thinksmart/classbiz-horizontal.svg" class="img-fluid p-2"
                                            alt="classbiz"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-10">
                                <a href="{{ path_for( 'product_pages.home', {'product_name': 'dancebiz'}) }}"><img
                                            src="{{ frontend_base_url }}assets/img/thinksmart/dancebiz-horizontal.svg" class="img-fluid p-2"
                                            alt="dancebiz"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-10">
                                <a href="{{ path_for( 'product_pages.home', {'product_name': 'gymnasticsbiz'}) }}"><img
                                            src="{{ frontend_base_url }}assets/img/thinksmart/gymnasticsbiz-horizontal.svg" class="img-fluid"
                                            alt="gymnasticsbiz"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-10">
                                <a href="{{ path_for( 'product_pages.home', {'product_name': 'musicbiz'}) }}"><img
                                            src="{{ frontend_base_url }}assets/img/thinksmart/musicbiz-horizontal.svg" class="img-fluid p-2"
                                            alt="musicbiz"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-10">
                                <a href="{{ path_for( 'product_pages.home', {'product_name': 'sportsbiz'}) }}"><img
                                            src="{{ frontend_base_url }}assets/img/thinksmart/sportsbiz-horizontal.svg" class="img-fluid p-2"
                                            alt="sportsbiz"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-10">
                                <a href="{{ path_for( 'product_pages.home', {'product_name': 'swimbiz'}) }}"><img
                                            src="{{ frontend_base_url }}assets/img/thinksmart/swimbiz-horizontal.svg" class="img-fluid p-2"
                                            alt="swimbiz"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-10">
                                <a href="{{ path_for( 'product_pages.home', {'product_name': 'tennisbiz'}) }}"><img
                                            src="{{ frontend_base_url }}assets/img/thinksmart/tennisbiz-horizontal.svg" class="img-fluid p-2"
                                            alt="tennisbiz"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ol class="carousel-indicators tss-carousel-indicators-mobile">
                <li data-target="#carouselClientIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselClientIndicators" data-slide-to="1"></li>
                <li data-target="#carouselClientIndicators" data-slide-to="2"></li>
                <li data-target="#carouselClientIndicators" data-slide-to="3"></li>
                <li data-target="#carouselClientIndicators" data-slide-to="4"></li>
                <li data-target="#carouselClientIndicators" data-slide-to="5"></li>
                <li data-target="#carouselClientIndicators" data-slide-to="6"></li>
            </ol>
            <a class="carousel-control-prev mt-n4" href="#carouselClientIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon mt-xl-n3" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next mt-n4" href="#carouselClientIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon mt-xl-n3" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
</section>
<!-- mobile select -->

<!-- large screen please select -->
<section class="d-none d-lg-block mb-xl-3">
    <div class="container">
        <!-- <h4 class="text-center mb-lg-4 pb-xl-2 pt-xl-2 bounce-bottom text-{{ css_id }}-primary">Please select the product that suits your industry the best</h4> --> 
        <h4 class="text-center mb-lg-4 pb-xl-2 pt-xl-2 bounce-bottom text-tss-primary">Please select the product that best suits your industry</h4>
        <div class="row justify-content-lg-center">
            <div class="col-3 slide-in-left">
                <a href="{{ path_for( 'product_pages.home', {'product_name': 'classbiz'}) }}"><img
                            src="{{ frontend_base_url }}assets/img/thinksmart/classbiz-horizontal.svg" id="reflect"
                            class="img-fluid zoom pl-lg-4 pr-lg-4" alt="classbiz"></a>
            </div>
            <div class="col-3 slide-in-left">
                <a href="{{ path_for( 'product_pages.home', {'product_name': 'swimbiz'}) }}"><img
                            src="{{ frontend_base_url }}assets/img/thinksmart/swimbiz-horizontal.svg" id="reflect"
                            class="img-fluid zoom pl-lg-4 pr-lg-4" alt="swimbiz"></a>
            </div>
            <div class="col-3 slide-in-left">
                <a href="{{ path_for( 'product_pages.home', {'product_name': 'dancebiz'}) }}"><img
                            src="{{ frontend_base_url }}assets/img/thinksmart/dancebiz-horizontal.svg" id="reflect"
                            class="img-fluid zoom pl-lg-4 pr-lg-4" alt="dancebiz"></a>
            </div>
            <div class="col-3 slide-in-right">
                <a href="{{ path_for( 'product_pages.home', {'product_name': 'musicbiz'}) }}"><img
                            src="{{ frontend_base_url }}assets/img/thinksmart/musicbiz-horizontal.svg" id="reflect"
                            class="img-fluid zoom pl-lg-4 pr-lg-4" alt="musicbiz"></a>
            </div>
            <div class="col-12 pt-lg-2 pb-lg-1 pb-xl-2"></div>
            <div class="col-3 slide-in-right">
                <a href="{{ path_for( 'product_pages.home', {'product_name': 'tennisbiz'}) }}"><img
                            src="{{ frontend_base_url }}assets/img/thinksmart/tennisbiz-horizontal.svg" id="reflect"
                            class="img-fluid zoom pl-lg-4 pr-lg-4" alt="tennisbiz"></a>
            </div>
            <div class="col-4 slide-in-right">
                <a href="{{ path_for( 'product_pages.home', {'product_name': 'gymnasticsbiz'}) }}"><img
                            src="{{ frontend_base_url }}assets/img/thinksmart/gymnasticsbiz-horizontal.svg" id="reflect"
                            class="img-fluid zoom pl-lg-4 pr-lg-4" alt="gymnasticsbiz"></a>
            </div>
            <div class="col-3 slide-in-right">
                <a href="{{ path_for( 'product_pages.home', {'product_name': 'sportsbiz'}) }}"><img
                            src="{{ frontend_base_url }}assets/img/thinksmart/sportsbiz-horizontal.svg" id="reflect"
                            class="img-fluid zoom pl-lg-4 pr-lg-4" alt="sportsbiz"></a>
            </div>
        </div>
    </div>
</section>

<!-- tablet only select -->

<div class="d-none md-block d-lg-none mt-md-4 mb-md-4">
    <div class="container shadow rounded p-md-4">
        <div class="row align-items-md-center">
            <div class="col-md-6">
                <h5 class="text-center text-tss-primary">Please select the product that best suits your industry</h5>
            </div>
            <div class="col-md-6">
                <section class="container">

                    <!-- all views -->
                    <div class="main-slide-container-for-client-testimonials ml-auto mr-auto" style="max-width: 400px">
                        <div id="carouselClientIndicators-2" class="carousel carousel-fade" data-ride="carousel">
                            <div class="carousel-inner testimonials-slide-container d-flex align-items-center pb-4">
                                <div class="carousel-item active">
                                    <div class="container">
                                        <div class="row justify-content-center align-items-lg-center pt-lg-4 pb-lg-4">
                                            <div class="col-10">
                                                <img src="{{ frontend_base_url }}assets/img/thinksmart/classbiz-horizontal.svg"
                                                     class="img-fluid pb-1" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="container">
                                        <div class="row justify-content-center align-items-lg-center pt-lg-4 pb-lg-4">
                                            <div class="col-10">
                                                <img src="{{ frontend_base_url }}assets/img/thinksmart/dancebiz-horizontal.svg"
                                                     class="img-fluid" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="container">
                                        <div class="row justify-content-center align-items-lg-center pt-lg-4 pb-lg-4">
                                            <div class="col-10">
                                                <img src="{{ frontend_base_url }}assets/img/thinksmart/gymnasticsbiz-horizontal.svg"
                                                     class="img-fluid" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="container">
                                        <div class="row justify-content-center align-items-lg-center pt-lg-4 pb-lg-4">
                                            <div class="col-10">
                                                <img src="{{ frontend_base_url }}assets/img/thinksmart/musicbiz-horizontal.svg"
                                                     class="img-fluid" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="container">
                                        <div class="row justify-content-center align-items-lg-center pt-lg-4 pb-lg-4">
                                            <div class="col-10">
                                                <img src="{{ frontend_base_url }}assets/img/thinksmart/sportsbiz-horizontal.svg"
                                                     class="img-fluid" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="container">
                                        <div class="row justify-content-center align-items-lg-center pt-lg-4 pb-lg-4">
                                            <div class="col-10">
                                                <img src="{{ frontend_base_url }}assets/img/thinksmart/swimbiz-horizontal.svg"
                                                     class="img-fluid" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="container">
                                        <div class="row justify-content-center align-items-lg-center pt-lg-4 pb-lg-4">
                                            <div class="col-10">
                                                <img src="{{ frontend_base_url }}assets/img/thinksmart/tennisbiz-horizontal.svg"
                                                     class="img-fluid" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ol class="carousel-indicators">
                                <li data-target="#carouselClientIndicators-2" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselClientIndicators-2" data-slide-to="1"></li>
                                <li data-target="#carouselClientIndicators-2" data-slide-to="2"></li>
                                <li data-target="#carouselClientIndicators-2" data-slide-to="3"></li>
                                <li data-target="#carouselClientIndicators-2" data-slide-to="4"></li>
                                <li data-target="#carouselClientIndicators-2" data-slide-to="5"></li>
                                <li data-target="#carouselClientIndicators-2" data-slide-to="6"></li>
                            </ol>
                            <a class="carousel-control-prev mt-n4" href="#carouselClientIndicators-2" role="button"
                               data-slide="prev">
                                <span class="carousel-control-prev-icon mt-xl-n3" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next mt-n4" href="#carouselClientIndicators-2" role="button"
                               data-slide="next">
                                <span class="carousel-control-next-icon mt-xl-n3" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<!-- Why use start -->
<section class="container pt-3">
    <div class="row justify-content-between">
        <div class="col-12 col-md-12 col-lg-6 pr-xl-5 d-lg-flex align-items-lg-center">
            <div class="">
                <!-- <h5 class="text-{{ css_id }}-primary">Why use ThinkSmart Software</h5> --> 
                <h5 class="text-tss-primary">Why use ThinkSmart Software</h5>
                <p>ThinkSmart holds all of your business admin in one place. Whatever the size of your business,
                    ThinkSmart will
                    improve and automate all of those time consuming admin jobs we hate! Once you try ThinkSmart, you'll
                    never
                    want to return to time consuming spreadsheets and generic scheduling software again.</p>

                <p class="mb-lg-0">Now is the time to make your job easier and upgrade to a world class software package
                    that will do all the
                    heavy lifting for you. Get your FREE 14 day trial and see for yourself why ThinkSmart is the
                    software of
                    choice for your class based business.</p>
            </div>
        </div>

        <div class="col-12 col-md-12 col-lg-6 col-xl-6 align-self-lg-center text-center">
            <div class="p-lg-3 p-xl-4">
                <!-- <img src="{{ frontend_base_url }}assets/img/generic-features-online-components-ocr-full-tablet-size.png" --> 
                     <!-- class="border img-fluid" alt="ocr screen"> --> 
                <img src="{{ frontend_base_url }}assets/img/swimbiz/swimbiz-overview-devices.png"
                     class="img-fluid" alt="devices screen">
            </div>
        </div>

    </div><!-- end of row -->
    </div>
</section>
<!-- why use end -->

<!-- EVERYTHING YOU NEED START -->
<div class="p-3 p-lg-4"></div>
<div class="p-3 p-lg-4"></div>

<!-- spacing -->
<!-- <section class="hero-container"> --> 
    <!-- <div class="hero-gradient-background-flipped"></div> --> 

    <!-- <!-- hero gradient tss --> --> 
    <!-- <section class="tss-gradient"></section> --> 
    <!-- <section class="{{ css_id }}-gradient"></section> --> 

    <!-- <!-- hero-gradient-dark start --> --> 
    <!-- <div class="d-none d-md-block hero-gradient-background"></div> --> 
    <!-- <!-- hero-gradient-dark end --> --> 

    <!-- <!-- small angled shape containers start --> --> 
    <!-- <div class="position-absolute h-100 w-100 overflow-hidden"> --> 
        <!-- <div class="d-none d-lg-block shape-graphic-small-1"></div> --> 
        <!-- <div class="d-none d-lg-block shape-graphic-small-2"></div> --> 
        <!-- <div class="d-none d-lg-block shape-graphic-small-3"></div> --> 
        <!-- <div class="d-none d-lg-block shape-graphic-small-4"></div> --> 
        <!-- <div class="d-none d-lg-block shape-graphic-small-5"></div> --> 
        <!-- <div class="d-none d-lg-block shape-graphic-small-6"></div> --> 
    <!-- </div> --> 
    <!-- <!-- angled-shaped-containers end --> --> 

    <!-- <!--start container --> --> 
    <!-- <div class="container pt-3 pb-md-3"> --> 
        <!-- <div class="row align-items-md-center align-items-lg-start"> --> 
            <!-- <div class="col-12 col-md-6 col-lg-5"> --> 
                <!-- <!-- devices images start--> --> 
                <!-- <div class="position-relative mt-lg-2 mt-xl-n4"> --> 
                    <!-- <!-- swimbiz --> --> 
                    <!-- <img src="{{ frontend_base_url }}assets/img/swimbiz/swimbiz-overview-devices.png" class="d-lg-none img-fluid" --> 
                         <!-- alt="tablet, desktop, smartphone"> --> 
                    <!-- <img src="{{ frontend_base_url }}assets/img/swimbiz/swimbiz-overview-devices.png" --> 
                         <!-- class="d-none d-lg-block position-absolute mt-lg-n5 mt-xl-n4 img-fluid ml-xl-2 pr-xl-2" --> 
                         <!-- alt="tablet, desktop, smartphone"> --> 
                <!-- </div> --> 
                <!-- <!-- devices images end --> --> 
            <!-- </div> --> 

            <!-- <!-- what's included text start --> --> 
            <!-- <div class="col-12 col-md-6 col-lg-7"> --> 
                <!-- <h5 class="pt-3 pt-sm-4 pt-md-3 mb-0 mb-lg-2 text-white text-center">Everything you need!</h5> --> 
                <!-- <div class="row"> --> 
                    <!-- <div class="col-12"> --> 
                        <!-- <ul class="text-white list-unstyled d-sm-flex d-md-block d-lg-flex"> --> 
                            <!-- <div class="pl-3 pl-xl-4 pl-sm-0"> --> 
                                <!-- <li class="d-flex mt-2"> --> 
                                    <!-- <div class=""><img src="{{ frontend_base_url }}assets/img/icon-ok-checks-responsive.svg" class="pr-2"> --> 
                                    <!-- </div> --> 
                                    <!-- <div class="pt-2">Free email & phone support</div> --> 
                                <!-- </li> --> 
                                <!-- <li class="d-flex mt-2"> --> 
                                    <!-- <div class=""><img src="{{ frontend_base_url }}assets/img/icon-ok-checks-responsive.svg" class="pr-2"> --> 
                                    <!-- </div> --> 
                                    <!-- <div class="pt-2">Account setup & training included</div> --> 
                                <!-- </li> --> 
                            <!-- </div> --> 
                            <!-- <div class="pl-3 pl-sm-3 pl-md-0 pl-lg-3 pl-xl-5"> --> 
                                <!-- <li class="d-flex mt-2"> --> 
                                    <!-- <div class=""><img src="{{ frontend_base_url }}assets/img/icon-ok-checks-responsive.svg" class="pr-2"> --> 
                                    <!-- </div> --> 
                                    <!-- <div class="pt-2">Login from anywhere</div> --> 
                                <!-- </li> --> 
                                <!-- <li class="d-flex mt-2"> --> 
                                    <!-- <div class=""><img src="{{ frontend_base_url }}assets/img/icon-ok-checks-responsive.svg" class="pr-2"> --> 
                                    <!-- </div> --> 
                                    <!-- <div class="pt-2">Unlimited logins for staff</div> --> 
                                <!-- </li> --> 
                            <!-- </div> --> 
                        <!-- </ul> --> 
                    <!-- </div><!-- end col --> --> 
                <!-- </div><!-- end row --> --> 
            <!-- </div> --> 
            <!-- <!-- what's included text end --> --> 
        <!-- </div> --> 
        <!-- <!-- end row --> --> 
    <!-- </div> --> 
    <!-- <!-- end container --> --> 
<!-- </section> --> 

<div class="p-lg-3 p-xl-2">
    <div class="p-xl-1"></div>
</div>
<!-- 2 devices on blue strip -->
<section class="hero-container">
    <div class="hero-gradient-background-flipped"></div>

    <!-- hero gradient tss -->
    <section class="tss-gradient"></section>
    <!-- <section class="{{ css_id }}-gradient"></section> --> 

    <!-- hero-gradient-dark start -->
    <div class="d-none d-md-block hero-gradient-background"></div>
    <!-- hero-gradient-dark end -->

    <!-- small angled shape containers start -->
    <div class="position-absolute h-100 w-100 overflow-hidden">
        <div class="d-none d-lg-block shape-graphic-small-1"></div>
        <div class="d-none d-lg-block shape-graphic-small-2"></div>
        <div class="d-none d-lg-block shape-graphic-small-3"></div>
        <div class="d-none d-lg-block shape-graphic-small-4"></div>
        <div class="d-none d-lg-block shape-graphic-small-5"></div>
        <div class="d-none d-lg-block shape-graphic-small-6"></div>
    </div>
    <!-- angled-shaped-containers end -->

    <!--start container -->
    <div class="container pt-3 pb-0 pb-md-0 pb-lg-0">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-5">
                <!-- devices images start-->
                <div class="">
                    <!-- swimbiz -->
                    <img src="{{ frontend_base_url }}assets/img/generic-features-online-components-ocr-full-tablet-size-transparent.png" class="img-fluid d-md-none"
                         alt="tablet, desktop, smartphone">
                    <img src="{{ frontend_base_url }}assets/img/generic-features-online-components-ocr-full-tablet-size-transparent.png" class="img-fluid d-none d-md-block pt-xl-4 pr-xl-3 pl-xl-3 ts-device-2-tablets"
                         alt="tablet, desktop, smartphone">
                    <!-- <img src="{{ frontend_base_url }}assets/img/generic-features-online-components-ocr-full-tablet-size-transparent.png" --> 
                         <!-- class="d-none position-absolute mt-lg-n5 mt-xl-n4 img-fluid ml-xl-2 pr-xl-2" --> 
                         <!-- alt="tablet, desktop, smartphone"> --> 
                </div>
                <!-- devices images end -->
            </div>

            <!-- what's included text start -->
            <div class="col-12 col-md-6 col-lg-7 pt-xl-5 d-none d-md-block">
                <div class="everything-you-need-text-container">
                    <h5 class="pt-3 pt-sm-4 pt-md-3 pt-lg-0 mb-0 mb-lg-2 text-white text-center">Everything you need!</h5>
                    <div class="row">
                        <div class="col-12">
                            <ul class="text-white list-unstyled d-sm-flex d-md-block d-lg-flex">
                                <div class="pl-3 pl-xl-4 pl-md-3">
                                    <li class="d-flex mt-2">
                                        <div class=""><img src="{{ frontend_base_url }}assets/img/icon-ok-checks-responsive.svg" class="pr-2">
                                        </div>
                                        <div class="pt-2">Free email & phone support</div>
                                    </li>
                                    <li class="d-flex mt-2 mt-xl-3">
                                        <div class=""><img src="{{ frontend_base_url }}assets/img/icon-ok-checks-responsive.svg" class="pr-2">
                                        </div>
                                        <div class="pt-2">Account setup & training included</div>
                                    </li>
                                </div>
                                <div class="pl-3 pl-sm-3 pl-md-3 pl-lg-3 pl-xl-5">
                                    <li class="d-flex mt-2">
                                        <div class=""><img src="{{ frontend_base_url }}assets/img/icon-ok-checks-responsive.svg" class="pr-2">
                                        </div>
                                        <div class="pt-2">Login from anywhere</div>
                                    </li>
                                    <li class="d-flex mt-2 mt-xl-3">
                                        <div class=""><img src="{{ frontend_base_url }}assets/img/icon-ok-checks-responsive.svg" class="pr-2">
                                        </div>
                                        <div class="pt-2">Unlimited logins for staff</div>
                                    </li>
                                </div>
                            </ul>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div>
            </div>
            <!-- what's included text end -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>

<!-- what's included mobile and sm text start -->
<div class="container d-md-none">
    <div class="pt-3">
        <h5 class="pt-3 mb-0 mb-lg-2 text-tss-primary text-center">Everything you need!</h5>
        <div class="row">
            <div class="col-12 pl-4 pl-sm-2">
                <ul class="list-unstyled d-sm-flex">
                    <div class="pl-3 pl-xl-4 pl-md-3">
                        <li class="d-flex mt-2">
                            <div class=""><img src="{{ frontend_base_url }}assets/img/icon-ok-checks-responsive-gray.svg" class="opacity-3 gray-check-mark pr-2">
                            </div>
                            <div class="pt-2">Free email & phone support</div>
                        </li>
                        <li class="d-flex mt-2">
                            <div class=""><img src="{{ frontend_base_url }}assets/img/icon-ok-checks-responsive-gray.svg" class="opacity-3 gray-check-mark pr-2">
                            </div>
                            <div class="pt-2">Account setup & training included</div>
                        </li>
                    </div>
                    <div class="pl-3 pl-sm-3 pl-md-3 pl-lg-3 pl-xl-5">
                        <li class="d-flex mt-2">
                            <div class=""><img src="{{ frontend_base_url }}assets/img/icon-ok-checks-responsive-gray.svg" class="opacity-3 gray-check-mark pr-2">
                            </div>
                            <div class="pt-2">Login from anywhere</div>
                        </li>
                        <li class="d-flex mt-2 mt-xl-3">
                            <div class=""><img src="{{ frontend_base_url }}assets/img/icon-ok-checks-responsive-gray.svg" class="opacity-3 gray-check-mark pr-2">
                            </div>
                            <div class="pt-2">Unlimited logins for staff</div>
                        </li>
                    </div>
                </ul>
            </div><!-- end col -->
        </div><!-- end row -->
    </div>
</div>
<!-- what's included text end -->


<!-- EVERYTHING YOU NEED END -->

<!-- spacing -->
<div class="p-3 p-lg-4">
    <div class="p-xl-2"></div>
</div>

<!-- testimonials with logo start -->
<section class="container testimonials-card rounded pt-lg-3 pb-lg-4 pt-xl-4 pb-xl-4">
    <!-- <h5 class="text-center mb-2 pt-lg-3 pt-xl-4 text-{{ css_id }}-primary">What our clients say</h5> --> 
    <h5 class="text-center text-tss-primary mb-0 mb-lg-2 pb-xl-1 pt-lg-1">What our clients say</h5>

    <!-- all views -->
    <div class="main-slide-container-for-client-testimonials">
        <div id="carouselClientIndicators-1" class="carousel carousel-fade" data-ride="carousel">
            <div class="carousel-inner testimonials-slide-container">
                <!-- {% for i, testimonial in template_slots.testimonials %}
                    <div class="carousel-item {{ i == 0 ? 'active' : '' }}">
                        <div class="container">
                            <div class="row justify-content-center align-items-lg-center">
                                <div class="col-10 col-lg-4 col-xl-3 text-center align-self-lg-center pl-xl-0 pr-xl-0">
                                    <div class="col-12 col-sm-8 col-md-8 col-lg-12 ml-auto mr-auto p-0">
                                        <img src="{{ frontend_base_url }}{{ testimonial.image.Path }}"
                                             class="img-fluid ml-auto mr-auto" alt="{{ testimonial.image.AltText }}">
                                    </div>
                                </div>
                                <div class="col-10 col-lg-7 col-xl-8 align-self-lg-center">
                                    <p class="pt-2 pt-md-0 mb-1 mb-lg-2">{{ testimonial.TestimonialText }}</p>
                                    <figcaption class="pb-3 pb-lg-0">— {{ testimonial.Author }}, <span class="font-italic">{{ testimonial.Company }}</span></figcaption>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endfor %} -->
            </div>
            <ol class="tss-carousel-indicators carousel-indicators">
                <!-- {% for i, testimonial in template_slots.testimonials %}
                    <li data-target="#carouselClientIndicators-1" data-slide-to="{{ i }}" {{ i == 0 ? 'class="active"' : '' }}></li>
                {% endfor %} -->
            </ol>
            <a class="carousel-control-prev" href="#carouselClientIndicators-1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon mt-xl-n3" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselClientIndicators-1" role="button" data-slide="next">
                <span class="carousel-control-next-icon mt-xl-n3" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
</section>
<!-- testimonials end -->

<!-- who we work with partners start -->
<section class="container pt-4 pt-lg-4 pt-xl-5 pb-lg-5">
    <!-- <h5 class="text-center mb-0 text-{{ css_id }}-primary">Who we work with</h5> -->
    <h5 class="text-center mb-0 text-tss-primary">Our Finance & Payment Partners</h5>

    <!-- mobile view to sm view -->
    <div class="d-md-none main-slide-container-for-partners">
        <div id="carouselPartnerIndicators" class="carousel carousel-fade" data-ride="carousel">
            <div class="carousel-inner partners-slide-container d-flex align-items-center">
                <div class="carousel-item active">
                    <div class="w-50 d-block ml-auto mr-auto pl-2 pr-2 pl-sm-5 pr-sm-5">
                        <img src="{{ frontend_base_url }}assets/img/logo-xero-software.svg" class="img-fluid pl-4 pr-4" alt="Xero">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="w-75 d-block ml-auto mr-auto">
                        <img src="{{ frontend_base_url }}assets/img/logo-intuit-quickbooks-preferred.svg" class="img-fluid pl-2 pr-2"
                             alt="QuickBooks">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="w-50 d-block ml-auto mr-auto">
                        <img src="{{ frontend_base_url }}assets/img/logo-stripe.svg" class="img-fluid" alt="Stripe">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="w-75 d-block ml-auto mr-auto">
                        <img src="{{ frontend_base_url }}assets/img/logo-gocardless.svg" class="img-fluid pl-2 pr-2" alt="GoCardless">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="w-75 d-block ml-auto mr-auto">
                        <img src="{{ frontend_base_url }}assets/img/logo-worldpay.svg" class="img-fluid pl-2 pr-2" alt="Worldpay">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="w-75 d-block ml-auto mr-auto">
                        <img src="{{ frontend_base_url }}assets/img/logo-ezi-debit.svg" class="img-fluid pl-2 pr-2" alt="Ezidebit">
                    </div>
                </div>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#carouselPartnerIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselPartnerIndicators" data-slide-to="1"></li>
                <li data-target="#carouselPartnerIndicators" data-slide-to="2"></li>
                <li data-target="#carouselPartnerIndicators" data-slide-to="3"></li>
                <li data-target="#carouselPartnerIndicators" data-slide-to="4"></li>
                <li data-target="#carouselPartnerIndicators" data-slide-to="5"></li>
            </ol>
            <a class="carousel-control-prev" href="#carouselPartnerIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselPartnerIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
    <!-- md and up view start -->
    <div class="d-none d-md-block">
        <div class="row align-items-center justify-content-center pt-lg-4">
            <div class="col-md-4 col-lg-4 pl-md-5 pr-md-5 pl-lg-5 pr-lg-5"><img src="{{ frontend_base_url }}assets/img/logo-xero-software.svg"
                                                                                class="img-fluid pl-lg-5 pr-lg-5"
                                                                                alt="Xero"></div>
            <div class="col-md-7 col-lg-4"><img src="{{ frontend_base_url }}assets/img/logo-intuit-quickbooks-preferred.svg" class="img-fluid"
                                                alt="QuickBooks"></div>

            <!-- divider mobile start -->
            <div class="d-lg-none w-100 pt-md-4"></div><!-- divider end -->

            <div class="col-md-5 col-lg-4 pl-4 pr-4 pl-lg-5 pr-lg-5"><img src="{{ frontend_base_url }}assets/img/logo-stripe.svg"
                                                                          class="img-fluid pl-md-3 pr-md-3 pl-lg-5 pr-lg-5"
                                                                          alt="Stripe"></div>

            <!-- divider large start -->
            <div class="d-none d-lg-block w-100 pt-lg-4 mt-xl-3"></div><!-- divider end -->

            <div class="col-md-5 col-lg-4 pl-lg-5 pr-lg-5"><img src="{{ frontend_base_url }}assets/img/logo-gocardless.svg" class="img-fluid"
                                                                alt="go cardless"></div>

            <!-- divider mobile start -->
            <div class="d-lg-none w-100 pt-md-4"></div><!-- divider end -->

            <div class="col-md-5 col-lg-4 pl-lg-5 pr-lg-5"><img src="{{ frontend_base_url }}assets/img/logo-worldpay.svg" class="img-fluid"
                                                                alt="Worldpay"></div>
            <div class="col-md-5 col-lg-4 pl-lg-5 pr-lg-5"><img src="{{ frontend_base_url }}assets/img/logo-ezi-debit.svg" class="img-fluid"
                                                                alt="Ezidebit"></div>
        </div>
    </div><!-- md and up view end -->
</section>
<!-- who we work with end -->
<?PHP
    include_once 'pageparts/footer.php';
?>
</body>
</html>
