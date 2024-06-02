<!DOCTYPE html>
<html lang="en-US">


<!-- home-100:13-->

<head>
    <title>BIOHEALUX</title>
    <meta name="author" content="BIOHEALUX">
    <meta name="robots" content="index follow">
    <meta name="googlebot" content="index follow">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="keywords" content="BIOHEALUX">
    <meta name="description" content="BIOHEALUX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- google fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800%7CMontserrat:300i,300,400,500,600,700,400i,500%7CDancing+Script:700%7CDancing+Script:700%7CGreat+Vibes:400%7CMontserrat:400%7CDosis:800%7CRaleway:400,700,800&amp;subset=latin-ext"
        rel="stylesheet">
    <!-- animate -->
    <link rel="stylesheet" href="{{ asset('assets_front/assets/css/animate.css') }}" />
    <link rel="icon" href="{{ asset('assets_front/assets/img/logo.png') }}" type="image/png">

    <!-- owl Carousel assets -->
    <link href="{{ asset('assets_front/assets/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_front/assets/css/owl.theme.css') }}" rel="stylesheet">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets_front/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_front/assets/css/bootstrap.min copy.css') }}">

    <!-- hover anmation -->
    <link rel="stylesheet" href="{{ asset('assets_front/assets/css/hover-min.css') }}">
    <!-- flag icon -->
    <link rel="stylesheet" href="{{ asset('assets_front/assets/css/flag-icon.min.css') }}">
    <!-- main style -->
    <link rel="stylesheet" href="{{ asset('assets_front/assets/css/style.css') }}">
    <!-- elegant icon -->
    <link rel="stylesheet" href="{{ asset('assets_front/assets/css/elegant_icon.css') }}">
    <!-- fontawesome  -->
    <link rel="stylesheet" href="{{ asset('assets_front/assets/fonts/font-awesome/css/font-awesome.min.css') }}">
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_front/assets/rslider/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_front/assets/rslider/fonts/font-awesome/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_front/assets/rslider/css/settings.css') }}">
</head>

<body>
    <!--&-------------------- Header -->
    <header>
        <div id="fixed-header-dark" class="header-output fixed-header">
            <div class="header-output">
                <div class="container-xxl header-in">

                    <!-- Up Head -->
                    <div class="up-head d-none d-lg-block">
                        <div class="row">
                            <div class="col-xl-8 col-lg-12">
                                <div class="row">
                                    <div class="col-md-4"><i class="fa fa-phone margin-right-10px"></i> 00222 123 333
                                        019</div>
                                    <div class="col-md-4"><i class="fa fa-envelope-o margin-right-10px"></i>
                                        info@biohealux.com</div>
                                    <div class="col-md-4"><i class="fa fa-map-marker margin-right-10px"></i> 1105
                                        Mansoura
                                        Dakahlia - Egypt</div>
                                </div>
                            </div>
                            <div class="col-xl-4 d-none d-xl-block">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <!-- lang dropdown -->
                                        <div class="dropdown show">
                                            <a class="dropdown-toggle text-white text-uppercase" href="#" role="button"
                                                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <span class="flag-icon flag-icon-us margin-right-8px"></span> English
                                            </a>

                                            <div class="dropdown-menu text-small text-uppercase"
                                                aria-labelledby="dropdownMenuLink">

                                                <a class="dropdown-item" href="#"><span
                                                        class="flag-icon flag-icon-mr margin-right-8px"></span>
                                                    Arabic</a>

                                            </div>
                                        </div>
                                        <!-- // lang dropdown -->

                                    </div>

                                    <div class="col-lg-6">
                                        <!--  Social -->
                                        <ul class="social-media list-inline text-right margin-0px text-white">
                                            <li class="list-inline-item"><a class="facebook" href="#"><i
                                                        class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li class="list-inline-item"><a class="youtube" href="#"><i
                                                        class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                            <li class="list-inline-item"><a class="linkedin" href="#"><i
                                                        class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            <li class="list-inline-item"><a class="whatsapp"
                                                    href="https://api.whatsapp.com/send?phone=15551234567"><i
                                                        class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                                            <li class="list-inline-item"><a class="twitter" href="#"><i
                                                        class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li class="list-inline-item"><a class="instagram" href="#"><i
                                                        class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <!-- // Social -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // Up Head -->

                    <div class="position-relative">
                        <div class="row">
                            <div class="col-lg-3 col-md-12">
                                <a id="logo" href="#" class="d-inline-block margin-tb-15px"><img
                                        src="{{ asset('assets_front/assets/img/logo.png') }}" class="navLogo" alt=""></a>
                                <a class="mobile-toggle padding-15px background-second-color border-radius-3"
                                    href="#"><i class="fa fa-bars"></i></a>
                            </div>
                            <div class="col-lg-7 col-md-12 position-inherit text-lg-center">
                                <ul id="menu-main"
                                    class="nav-menu float-xl-left text-lg-center link-padding-tb-25px white-link dropdown-dark">
                                    <li class=""><a href="/">{{ trans('main.Home') }}</a></li>
                                    <li class=""><a href="{{ route('site.index') }}#about">{{ trans('main.About') }}</a></li>
                                    <li class=""><a href="{{ route('site.index') }}#services">{{ trans('main.Services') }}</a></li>
                                    <li class=""><a href="{{ route('site.projects') }}">{{ trans('main.Projects') }}</a></li>
                                    <li class=""><a href="{{ route('site.courses') }}">{{ trans('main.Education') }}</a>
                                    <li class=""><a href="{{ route('site.contactUs') }}">{{ trans('main.Contact Us') }}</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-2 col-md-12  d-none d-lg-block">
                                <a href="tel:11"
                                    class="btn btn-sm border-radius-30 margin-tb-20px text-white  background-main-color  box-shadow float-right padding-lr-20px margin-left-30px d-block">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-telephone" viewBox="0 0 16 16">
                                        <path
                                            d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                    </svg> 
                                    {{ trans('main.Get A Call') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--&//-------------- Header -->

    <!--~============= //Slider=============-->
    <div id="rev_slider_3_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="nile-logistics-1"
        data-source="gallery"
        style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
        <!-- START REVOLUTION SLIDER 5.4.8 fullwidth mode -->
        <div id="rev_slider_3_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.8">
            <ul>
                <!-- SLIDE  -->
                <li data-index="rs-3" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                    data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2=""
                    data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                    data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('assets_front/assets/rslider/assets/equip1.jpg') }}" alt="" data-bgposition="center center"
                        data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption text-center  tp-resizeme" id="slide-3-layer-1"
                        data-x="['middle','middle','middle','center']" data-hoffset="['0','41','45','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-10','-143','-186','-36']"
                        data-width="461" data-height="173" data-whitespace="nowrap" data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"delay":10,"speed":1140,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','center']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 5; min-width: 461px; max-width: 461px; max-width: 173px;line-height: 13px; max-width: 173px; white-space: nowrap; font-size: 50px;  font-weight: 700; color: #ffffff; letter-spacing: 0.7px;font-family:Montserrat;">
                        <h1 style="font-size: 60px;  font-weight: 500; color: #ffffff; letter-spacing: 0.7px;font-family:Montserrat;">
                            BIOHEALUX
                        </h1>
                        <br>
                        <span class="pt-1" style="line-height: 37px;font-weight: 300;">
                            Medical Equipment
                            <br>
                            Planning Consultation
                            <br>
                            Services
                        </span>
                    </div>
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-4" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                    data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2=""
                    data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                    data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('assets_front/assets/rslider/assets/equip2.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption text-center tp-resizeme" id="slide-4-layer-1"
                        data-x="['middle','middle','middle','center']" data-hoffset="['0','41','45','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-10','-143','-186','-36']"
                        data-width="461" data-height="173" data-whitespace="nowrap" data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"delay":10,"speed":1140,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','center']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 5; min-width: 461px; max-width: 461px; max-width: 173px;line-height: 13px; max-width: 173px; white-space: nowrap; font-size: 50px;  font-weight: 400; color: #ffffff; letter-spacing: 1px;font-family:Montserrat;">
                        <h1 style="font-size: 60px;  font-weight: 500; color: #ffffff; letter-spacing: 0.7px;font-family:Montserrat;">
                            BIOHEALUX
                        </h1>
                        <br>
                        <span class="pt-1" style="line-height: 37px;font-weight: 300;">
                            Medical
                            <br>
                            Equipment Supply
                        </span>

                    </div>
                </li>
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div>
    <!--//============= //Slider=============-->

    <!--^============= //Slider Services=============-->
    <div class="service-section-1 container">
        <div class="row">
            <div class="col-md-4">
                <div class="service layout-1">
                    <div class="clearfix">
                        <div class="icon"><img class="sliderIcon" src="{{ asset('assets_front/assets/icons/icon1.png') }}" alt=""></div>
                        <a href="#" class="title">Medical Equipment</a>
                    </div>
                    <div class="dis clearfix">
                        Lorem ipsum dolor, sit amet consectetur
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service layout-1">
                    <div class="clearfix">
                        <div class="icon"><img class="sliderIcon" src="{{ asset('assets_front/assets/icons/icon3.webp') }}" alt=""></div>
                        <a href="#" class="title">Planning Consultation </a>
                    </div>
                    <div class="dis clearfix">
                        Lorem ipsum dolor, sit amet consectetur
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service layout-1">
                    <div class="clearfix">
                        <div class="icon"><img class="sliderIcon" src="{{ asset('assets_front/assets/icons/icon2.png') }}" alt=""></div>
                        <a href="#" class="title">Medical Equipment Supply</a>
                    </div>
                    <div class="dis clearfix">
                        Lorem ipsum dolor, sit amet consectetur
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//======== //Slider Services=============-->


    <!--!============= About Us =============-->
    <div class="nile-about-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">

                    <div class="section-title-right text-main-color clearfix">
                        <div class="icon"><img src="{{ asset('assets_front/assets/icons/title-icon-1.png') }}" alt=""></div>
                        <h2 class="title-text">Who We Are ?</h2>
                    </div>
                    <div class="about-text margin-tb-25px">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                        do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris
                    </div>
                    <div id="accordion" class="nile-accordion margin-top-80px sm-mb-45px">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-block btn-link active" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="fa fa-info-circle"></i> 
                                        Why us ?
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-block btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <i class="fa fa-gear"></i> 
                                        Explore our Services
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="#">
                                <img src="{{ asset('assets_front/assets/rslider/assets/equip1.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <div class="cart-service background-main-color">
                                <h2>BIOHEALUX</h2>
                                <hr>
                                <div class="text">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="cart-service background-main-color">
                                <h2>BIOHEALUX</h2>
                                <hr>
                                <div class="text">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <a href="#">
                                <img src="{{ asset('assets_front/assets/rslider/assets/equip2.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--//===== //About Us =============-->

    <!--*============= //Services Sections=============-->
    <div class="section padding-tb-100px section-ba-1" id="services">
        <div class="container">
            <!-- Title -->
            <div class="section-title margin-bottom-40px">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="icon text-main-color"><i class="fa fa-gear"></i></div>
                        <div class="h2">Our Service</div>
                        <div class="des">
                            In quis luctus dolor. Sed ac libero arcu. Phasellus vulputate ultrices augue,
                            eget feugiat lectus efficitur in. Nulla non pharetra justo. Nunc viverra consectetur
                            bibendum. 
                        </div>
                    </div>
                </div>
            </div>
            <!-- // End Title -->

            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="service-icon-box">
                        <div class="icon">
                            <img class="sliderIcon" src="{{ asset('assets_front/assets/icons/icon1 copy.png') }}" alt="">
                        </div>
                        <a href="#" class="title h2">Medical Equipment</a>
                        <div class="des">Ut elit tellus, luctus nec magna mattis et, pulvinar dapibus lorem leo
                            ultricies et vitae enim.
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="service-icon-box">
                        <div class="icon">
                            <img class="sliderIcon" src="{{ asset('assets_front/assets/icons/icon3 copy.webp') }}" alt="">
                        </div>
                        <a href="#" class="title h2">Planning Consultation</a>
                        <div class="des">
                            Ut elit tellus, luctus nec magna mattis et, pulvinar dapibus lorem leo
                            ultricies et vitae enim.
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-icon-box">
                        <div class="icon">
                            <img class="sliderIcon" src="{{ asset('assets_front/assets/icons/icon2 copy.png') }}" alt="">
                        </div>
                        <a href="#" class="title h2">Medical Equipment Supply</a>
                        <div class="des">
                            Ut elit tellus, luctus nec magna mattis et, pulvinar dapibus lorem leo
                            ultricies et vitae enim.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//--============= //Services Sections=============-->


    <!--&============= //portfolio Sections=============-->
    <div class="section padding-tb-100px section-ba-3" id="portfolio">
        <div class="container">
            <!-- Title -->
            <div class="section-title margin-bottom-40px">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="icon text-main-color"><i class="fa fa-bookmark-o"></i></div>
                        <div class="h2">OUR PROJECTS</div>
                        <div class="des">
                            In quis luctus dolor. Sed ac libero arcu. Phasellus vulputate ultrices augue,
                            eget feugiat lectus efficitur in. Nulla non pharetra justo. Nunc viverra consectetur
                            bibendum. 
                        </div>
                    </div>
                </div>
            </div>
            <!-- // End Title -->

            <div class="row">

                <div class="col-lg-4 col-md-6 sm-mb-35px">
                    <div class="blog-item">
                        <div class="img">
                            <a href="work-description.html">
                                <img src="{{ asset('assets_front/assets/img/portfolio1.jpg') }}" alt="">
                            </a>
                            <a href="#" class="date">
                                <span class="day">15</span>
                                <span class="month">April</span>
                            </a>
                        </div>
                        <a href="work-description.html" class="title">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Atque
                            rem...
                        </a>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 sm-mb-35px">
                    <div class="blog-item">
                        <div class="img">
                            <a href="work-description.html">
                                <img src="{{ asset('assets_front/assets/img/portfolio2.jpg') }}" alt="">
                            </a>
                            <a href="#" class="date">
                                <span class="day">15</span>
                                <span class="month">April</span>
                            </a>
                        </div>
                        <a href="work-description.html" class="title">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Atque
                            rem...
                        </a>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 sm-mb-35px">
                    <div class="blog-item">
                        <div class="img">
                            <a href="work-description.html">
                                <img src="{{ asset('assets_front/assets/img/portfolio3.jpg') }}" alt=""></a>
                            <a href="#" class="date">
                                <span class="day">15</span>
                                <span class="month">April</span>
                            </a>
                        </div>
                        <a href="work-description.html" class="title">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Atque
                            rem...
                        </a>
                    </div>
                </div>

            </div>

        </div>
        <div class="text-center mt-5">
            <a href="{{ route('site.projects') }}" class="nile-bottom md">Show More <i class="fa fa-arrow-right"></i> </a>
        </div>
    </div>
    <!--//===== //portfolio Sections=============-->

    <!--~-------------------- Get A Quote  -->
    <div class="padding-tb-100px" id="contact">

        <div class="container">
            <div class="row">

                <div class="col-lg-6 sm-mb-45px">
                    <p> 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                    <h5>Phone :</h5>
                    <span class="d-block">
                        <i class="fa fa-phone text-main-color margin-right-10px" aria-hidden="true"></i>
                        {{ $companyInformation->phone }}
                    </span>
                    <span class="d-block sm-mb-30px">
                        <i class="fa fa-mobile text-main-color margin-right-10px"
                            aria-hidden="true"></i> +222 333 019</span>
                    <h5 class="margin-top-20px">Address :</h5>
                    <span class="d-block sm-mb-30px"><i class="fa fa-map text-main-color margin-right-10px"
                            aria-hidden="true"></i> 1105 Mansoura Dakahlia - Egypt </span>
                    <h5 class="margin-top-20px">Email :</h5>
                    <span class="d-block sm-mb-30px"><i class="fa fa-envelope-open text-main-color margin-right-10px"
                            aria-hidden="true"></i> info@biohealux.com </span>
                </div>

                <div class="col-lg-6">
                    <div class="contact-modal">
                        <div class="background-main-color">
                            <div class="padding-30px">
                                <h3 class="padding-bottom-15px">Contact Us</h3>
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Full Name</label>
                                            <input type="text" class="form-control" id="inputName4" placeholder="Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Phone Number</label>
                                            <input type="tel" class="form-control" id="inputEmail44"
                                                placeholder="Phone Number">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Email</label>
                                            <input type="email" class="form-control" id="inputEmail4"
                                                placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Message</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea11"
                                            rows="3"></textarea>
                                    </div>
                                    <a href="#"
                                        class="btn-sm btn-lg btn-block background-dark text-white text-center  text-uppercase rounded-0 padding-15px">SEND
                                        MESSAGE</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>
    <!-- //-------- Get A Quote  -->

    <footer class="layout-dark">

        <div class="copy-right">
            <div class="container-fluid  padding-tb-20px">
                <div class="">
                    <div class="row justify-content-center ">
                        <div class="col-lg-6">
                            <!--  Social -->
                            <ul class="social-media list-inline text-lg-right text-center margin-0px text-white">
                                <li class="list-inline-item"><a class="facebook" href="#"><i class="fa fa-facebook"
                                            aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a class="youtube" href="#"><i class="fa fa-youtube-play"
                                            aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a class="linkedin" href="#"><i class="fa fa-linkedin"
                                            aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a class="whatsapp"
                                        href="https://api.whatsapp.com/send?phone=15551234567"><i class="fa fa-whatsapp"
                                            aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a class="twitter" href="#"><i class="fa fa-twitter"
                                            aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a class="instagram" href="#"><i class="fa fa-instagram"
                                            aria-hidden="true"></i></a></li>
                            </ul>
                            <!-- // Social -->

                        </div>
                        <div class="col-lg-6">
                            <div class="copy-right-text text-lg-center text-center sm-mb-15px">
                                All rights reserved.©BIOHEALUX
                                powered by<a target="_blank" href="https://loopscopesolutions.com/">
                                    LOOP SCOPE SOLUTIONS</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- jquery library  -->
    <script src="{{ asset('assets_front/assets/js/nile-slider.js') }}"></script>
    <script src="{{ asset('assets_front/assets/js/jquery-3.2.1.min.js') }}"></script>
    <!-- REVOLUTION JS FILES -->
    <script src="{{ asset('assets_front/assets/rslider/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('assets_front/assets/rslider/js/jquery.themepunch.revolution.min.js') }}"></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
    <script src="{{ asset('assets_front/assets/rslider/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('assets_front/assets/rslider/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('assets_front/assets/rslider/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('assets_front/assets/rslider/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('assets_front/assets/rslider/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('assets_front/assets/rslider/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('assets_front/assets/rslider/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('assets_front/assets/rslider/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('assets_front/assets/rslider/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script src="{{ asset('assets_front/assets/js/YouTubePopUp.jquery.js') }}"></script>
    <script src="{{ asset('assets_front/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets_front/assets/js/imagesloaded.min.js') }}"></script>
    <script src="{{ asset('assets_front/assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets_front/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets_front/assets/js/bootstrap.min.js') }}"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v11.0" nonce="7nX5Z6K3"></script>
</body>


<!-- home-100:30-->

</html>