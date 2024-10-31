<!doctype html>
<html class="no-js')}}" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kenne</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description"
        content="Kenne is a stunning html template for an expansion eCommerce site that suitable for any kind of fashion store. It will make your online store look more impressive and attractive to viewers. ">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon"
        href="{{ asset('assets/client/images/image-removebg-preview (9).png') }}">

    <!-- CSS
    ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/bootstrap.min.css') }}">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/font-awesome.min.css') }}">
    <!-- Fontawesome Star -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/fontawesome-stars.min.css') }}">
    <!-- Ion Icon -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/ion-fonts.css') }}">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/slick.css') }}">
    <!-- Animation -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/animate.min.css') }}">
    <!-- jQuery Ui -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/jquery-ui.min.css') }}">
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/nice-select.css') }}">
    <!-- Timecircles -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/timecircles.css') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/style.css') }}">

</head>

<body class="template-color-2">
    <div class="main-wrapper">
        <header class="main-header_area-2">
            <div class="header-top_area d-none d-lg-block">
                <div class="container">
                    <div class="header-top_nav">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="ht-menu">
                                    <ul>
                                        <li><a href="javascript:void(0)">Ngôn ngữ <i class="ion-chevron-down"></i></a>
                                            <ul class="ht-dropdown">
                                                <li class="active"><a href="javascript:void(0)"><img
                                                            src="{{ asset('assets/client/images/menu/icon/1.jpg') }}"
                                                            alt="Kenne Language Icon">English</a></li>
                                                <li><a href="javascript:void(0)"><img
                                                            src="{{ asset('assets/client/images/menu/icon/images (13).jpg') }}"
                                                            alt="Kenne Language Icon"
                                                            style="width: 16px; height: 11px;">Vietnamese</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="header-top_right">
                                    <ul>
                                        <!-- <li>
                                        <a href="my-account.html">Tài khoản của tôi</a>
                                    </li> -->
                                        <!-- <?php
                                         if (isset($_SESSION['username'])) {
                                             ?>
                                        <li class="nav-item" id="accountDropdown">
                                            <a class="nav-link" href="#" id="navbarDropdown" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Welcome
<?= $_SESSION['username'] ?>
                                        </a>
                                    </li>
                                    <li><a href="./?url=logOut">Logout</a></li>
<?php } else { ?>
                                        <li class="nav-item"><a class="nav-link" href=".?url=login">Login</a></li>
<?php }
                                        ?> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle_area">
              
                @include('clients.blocks.header')

                <!-- header -->

                <!-- Begin Banner Area Three -->
                <div class="banner-area-3" style="background-color:#FDF8F6;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-6 custom-xxs-col" style="padding-bottom:80px;">
                                <div class="banner-item img-hover_effect">
                                    <div class="banner-img">
                                        <a href="javascrip:void(0)">
                                            <img class="img-full"
                                                src="{{ asset('assets/client/images/banner/vay-cuoi-lam-le-Diamond-LDM01-1-768x960.jpg') }}"
                                                alt="Banner">
                                            <h1>Váy cưới làm lễ</h1>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-6 custom-xxs-col">
                                <div class="banner-item img-hover_effect">
                                    <div class="banner-img" position: relative;>
                                        <a href="javascrip:void(0)">
                                            <img class="img-full"
                                                src="{{ asset('assets/client/images/banner/ao-dai-kim-ADK01-3-550x688.jpg') }}"
                                                alt="Banner">
                                            <h1>Áo dài cưới</h1>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-6 custom-xxs-col">
                                <div class="banner-item img-hover_effect">
                                    <div class="banner-img">
                                        <a href="javascrip:void(0)">
                                            <img class="img-full"
                                                src="{{ asset('assets/client/images/banner/vay-cuoi-di-tiec-Diamond-NDM13-1-768x960.jpg') }}"
                                                alt="Banner">
                                            <h1>Váy cưới đi bàn</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Banner Area Three End Here -->

                <!-- Váy cưới làm lễ -->
                <div class="about-us-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-5">
                                <div class="overview-img text-center img-hover_effect">
                                    <a href="#">
                                        <img class="img-full"
                                            src="{{ asset('assets/client/images/about-us/hh.webp') }}"
                                            alt="Kenne's About Us Image">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-7 d-flex align-items-center">
                                <div class="overview-content">
                                    <h2>Váy cưới làm lễ</h2>
                                    <p class="short_desc">Váy cưới làm lễ chính là trang phục quan trọng nhất của cô
                                        dâu
                                        trong ngày trọng đại. Đây là chiếc váy cưới mà cô dâu sẽ mặc khi sánh bước lên
                                        lễ đường cùng vị hôn phu. Trong khoảnh khắc này, mỗi cô dâu luôn mong muốn mình
                                        là nàng công chúa xinh đẹp và lộng lẫy nhất thế gian.
                                        Váy cưới làm lễ tại Kenne là những mẫu váy hoàn mỹ nhất, biến cô dâu thành nàng
                                        công chúa sánh bước cùng chàng hoàng tử trên lễ đường. Với sự đa dạng trong
                                        thiết kế, Kenne luôn hi vọng có thể nhận được lòng tin từ các nàng dâu. Đặc biệt
                                        khi cô dâu đặt váy thiết kế riêng, Kenne sẽ tạo ra tác phẩm váy vừa vặn đến từng
                                        cm như thể chiếc váy sinh ra là dành cho nàng. Hiện tại Kenne có 4 dòng váy cưới
                                        làm lễ: Haute Couture, Limited, Luxury và Grace</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="kenne-element-carousel product-slider slider-nav"
                                    data-slick-options='{
                        "slidesToShow": 4,
                        "slidesToScroll": 1,
                        "infinite": false,
                        "": true,
                        "dots": false,
                        "spaceBetween": 30,
                        "appendArrows": ""
                        }'
                                    data-slick-responsive='[
                        {"breakpoint":992, "settings": {
                        "slidesToShow": 3
                        }},
                        {"breakpoint":768, "settings": {
                        "slidesToShow": 2
                        }},
                        {"breakpoint":575, "settings": {
                        "slidesToShow": 1
                        }}
                    ]'>

                                    <!--  <div class="product-item">
                                   <div class="single-product">
                                       <div class="product-img">
                                           <a href="index.php?url=productdetail&id=">
                                   <img style="width: 250px;height: 300px;" class="primary-img" src="" alt="Kenne's Product Image">
                                   <img style="width: 250px;height: 300px;" class="secondary-img" src="" alt="Kenne's Product Image">
                               </a>
                               <span class="sticker-2">Hot</span>
                               <div class="add-actions">
                                   <ul>
                                       <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="right" title="Quick View"><i class="ion-ios-search"></i></a>
                                       </li>
                                       <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                       </li>
                                       <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                       </li>
                                       <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                                       </li>
                                   </ul>
                               </div>
                           </div>
                           <div class="product-content">
                               <div class="product-desc_info">
                                   <h3 class="product-name"><a href="index.php?url=productdetail"></a></h3>
                                   <div class="price-box">
                                       <span class="new-price"> đ</span>
                                       <span class="old-price">$50.99</span>
                                   </div>
                                   <div class="rating-box">
                                       <ul>
                                           <li><i class="ion-ios-star"></i></li>
                                           <li><i class="ion-ios-star"></i></li>
                                           <li><i class="ion-ios-star"></i></li>
                                           <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                           <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                       </ul>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Áo dài cưới -->
                <div class="product-area ">
                    <div class="about-us-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-7 d-flex align-items-center">
                                    <div class="overview-content">
                                        <h2>Áo dài cưới</h2>
                                        <p class="short_desc">Áo dài cưới là tinh thần giao thoa giữa vẻ đẹp cổ điển và
                                            sự cách tân tinh tế. Áo dài là trang phục truyền thống đến ngày nay vẫn giữ
                                            được nét văn hóa vốn có kết hợp cùng những nét chấm phá khác biệt. Thiết kế
                                            áo dài cưới của Linh Nga Bridal vừa có được sự thướt tha, yêu kiều, duyên
                                            dáng của một tà áo dài Việt, vừa mang hơi thở thời trang hiện đại.
                                            Với tinh thần lưu giữ bản sắc nước nhà, truyền tải giá trị văn hoá được lưu
                                            truyền trên từng đường kim thớ vải, Kenne đã sở hữu cho mình bộ sưu tập áo
                                            dài cưới cao cấp với thiết kế độc bản, sự kết hợp hoàn mỹ giữa văn hóa Việt
                                            Nam và xu hướng thời trang hiện đại. Diện áo dài cưới của Kenne, nàng chắc
                                            chắn sẽ trở thành cô dâu vừa nền nã và thanh tú, lại vừa ngập tràn sự trẻ
                                            trung, hiện đại. Hiện tại Kenne có 2 dòng áo dài cưới: Limited và Luxury</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-5">
                                    <div class="overview-img text-center img-hover_effect">
                                        <a href="#">
                                            <img class="img-full"
                                                src="{{ asset('assets/client/images/about-us/aodai.png') }}"
                                                alt="Kenne's About Us Image" style="width:400px; margin-left:180px;">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="kenne-element-carousel product-slider slider-nav"
                                    data-slick-options='{
                        "slidesToShow": 4,
                        "slidesToScroll": 1,
                        "infinite": false,
                        "": true,
                        "dots": false,
                        "spaceBetween": 30,
                        "appendArrows": ""
                        }'
                                    data-slick-responsive='[
                        {"breakpoint":992, "settings": {
                        "slidesToShow": 3
                        }},
                        {"breakpoint":768, "settings": {
                        "slidesToShow": 2
                        }},
                        {"breakpoint":575, "settings": {
                        "slidesToShow": 1
                        }}
                    ]'>
                                    <!--
                                    <div class="product-item">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="index.php?url=productdetail&id=">
                                        <img style="width: 250px;height: 300px;" class="primary-img" src="" alt="Kenne's Product Image">
                                        <img style="width: 250px;height: 300px;" class="secondary-img" src="" alt="Kenne's Product Image">
                                    </a>
                                    <span class="sticker-2">Hot</span>
                                    <div class="add-actions">
                                        <ul>
                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="right" title="Quick View"><i class="ion-ios-search"></i></a>
                                            </li>
                                            <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                            </li>
                                            <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                            </li>
                                            <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-desc_info">
                                        <h3 class="product-name"><a href="" </a></h3>
                                        <div class="price-box">
                                            <span class="new-price"> đ</span>
                                            <span class="old-price">$50.99</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="ion-ios-star"></i></li>
                                                <li><i class="ion-ios-star"></i></li>
                                                <li><i class="ion-ios-star"></i></li>
                                                <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Váy đi bàn -->
                <div class="about-us-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-5">
                                <div class="overview-img text-center img-hover_effect">
                                    <a href="#">
                                        <img class="img-full"
                                            src="{{ asset('assets/client/images/about-us/hh.webp') }}"
                                            alt="Kenne's About Us Image">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-7 d-flex align-items-center">
                                <div class="overview-content">
                                    <h2>Váy cưới đi bàn</h2>
                                    <p class="short_desc">Váy cưới làm lễ chính là trang phục quan trọng nhất của cô
                                        dâu
                                        trong ngày trọng đại. Đây là chiếc váy cưới mà cô dâu sẽ mặc khi sánh bước lên
                                        lễ đường cùng vị hôn phu. Trong khoảnh khắc này, mỗi cô dâu luôn mong muốn mình
                                        là nàng công chúa xinh đẹp và lộng lẫy nhất thế gian.
                                        Váy cưới làm lễ tại Kenne là những mẫu váy hoàn mỹ nhất, biến cô dâu thành nàng
                                        công chúa sánh bước cùng chàng hoàng tử trên lễ đường. Với sự đa dạng trong
                                        thiết kế, Kenne luôn hi vọng có thể nhận được lòng tin từ các nàng dâu. Đặc biệt
                                        khi cô dâu đặt váy thiết kế riêng, Kenne sẽ tạo ra tác phẩm váy vừa vặn đến từng
                                        cm như thể chiếc váy sinh ra là dành cho nàng. Hiện tại Kenne có 4 dòng váy cưới
                                        làm lễ: Haute Couture, Limited, Luxury và Grace</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="kenne-element-carousel product-slider slider-nav"
                                    data-slick-options='{
                        "slidesToShow": 4,
                        "slidesToScroll": 1,
                        "infinite": false,
                        "": true,
                        "dots": false,
                        "spaceBetween": 30,
                        "appendArrows": ""
                        }'
                                    data-slick-responsive='[
                        {"breakpoint":992, "settings": {
                        "slidesToShow": 3
                        }},
                        {"breakpoint":768, "settings": {
                        "slidesToShow": 2
                        }},
                        {"breakpoint":575, "settings": {
                        "slidesToShow": 1
                        }}
                    ]'>
                                    <!--
                                    <div class="product-item">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="index.php?url=productdetail&id=">
                                        <img style="width: 250px;height: 300px;" class="primary-img" src="" alt="Kenne's Product Image">
                                        <img style="width: 250px;height: 300px;" class="secondary-img" src="" alt="Kenne's Product Image">
                                    </a>
                                    <span class="sticker-2">Hot</span>
                                    <div class="add-actions">
                                        <ul>
                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="right" title="Quick View"><i class="ion-ios-search"></i></a>
                                            </li>
                                            <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                            </li>
                                            <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                            </li>
                                            <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-desc_info">
                                        <h3 class="product-name"><a href="index.php?url=productdetail"></a></h3>
                                        <div class="price-box">
                                            <span class="new-price"> </span>
                                            <span class="old-price">$50.99</span>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="ion-ios-star"></i></li>
                                                <li><i class="ion-ios-star"></i></li>
                                                <li><i class="ion-ios-star"></i></li>
                                                <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sản phẩm -->
                <div class="product-tab_area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title">
                                    <h3>Sản phẩm của chúng tôi</h3>
                                    <div class="product-tab">
                                        <ul class="nav product-menu">
                                            <li><a class="active" data-bs-toggle="tab" href="#bag"><span>Váy
                                                        cưới</span></a></li>
                                            <li><a data-bs-toggle="tab" href="#plaid-shirts"><span>Áo dài</span></a>
                                            </li>
                                            <li><a data-bs-toggle="tab" href="#shoes"><span>Phụ kiện</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="tab-content kenne-tab_content">
                                    <div id="bag" class="tab-pane active show" role="tabpanel">
                                        <div class="kenne-element-carousel product-tab_slider slider-nav product-tab_arrow"
                                            data-slick-options='{
                                    "slidesToShow": 4,
                                    "slidesToScroll": 1,
                                    "infinite": false,
                                    "arrows": true,
                                    "dots": false,
                                    "spaceBetween": 30
                                    }'
                                            data-slick-responsive='[
                                    {"breakpoint":992, "settings": {
                                    "slidesToShow": 3
                                    }},
                                    {"breakpoint":768, "settings": {
                                    "slidesToShow": 2
                                    }},
                                    {"breakpoint":575, "settings": {
                                    "slidesToShow": 1
                                    }}
                                ]'>

                                            <!--
                                            <div class="product-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="">
                                                <img style="width: 250px;height: 300px;" class="primary-img" src="" alt="Kenne's Product Image">
                                                <img style="width: 250px;height: 300px;" class="secondary-img" src="" alt="Kenne's Product Image">
                                            </a>
                                            <span class="sticker-2">Hot</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="right" title="Quick View"><i class="ion-ios-search"></i></a>
                                                    </li>
                                                    <li><a href="wishlist.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                    </li>
                                                    <li><a href="compare.html" data-bs-toggle="tooltip" data-placement="right" title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                                    </li>
                                                    <li><a href="cart.html" data-bs-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-desc_info">
                                                <h3 class="product-name"><a href="index.php?url=productdetail"></a></h3>
                                                <div class="price-box">
                                                    <span class="new-price">đ</span>
                                                    <span class="old-price">$100.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           -->
                                        </div>
                                    </div>
                                    <div id="plaid-shirts" class="tab-pane" role="tabpanel">
                                        <div class="kenne-element-carousel product-tab_slider slider-nav product-tab_arrow"
                                            data-slick-options='{
                                    "slidesToShow": 4,
                                    "slidesToScroll": 1,
                                    "infinite": false,
                                    "arrows": true,
                                    "dots": false,
                                    "spaceBetween": 30
                                    }'
                                            data-slick-responsive='[
                                    {"breakpoint":768, "settings": {
                                    "slidesToShow": 1
                                    }},
                                    {"breakpoint":575, "settings": {
                                    "slidesToShow": 1
                                    }}
                                ]'>

                                            <div class="product-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="index.php?url=productdetail">
                                                            <img class="primary-img"
                                                                src="{{ asset('assets/client/images/product/7-1.jpg') }}"
                                                                alt="Kenne's Product Image">
                                                            <img class="secondary-img"
                                                                src="{{ asset('assets/client/images/product/7-2.jpg') }}"
                                                                alt="Kenne's Product Image">
                                                        </a>
                                                        <span class="sticker-2">Hot</span>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li class="quick-view-btn" data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModalCenter"><a
                                                                        href="javascript:void(0)"
                                                                        data-bs-toggle="tooltip"
                                                                        data-placement="right" title="Quick View"><i
                                                                            class="ion-ios-search"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-bs-toggle="tooltip"
                                                                        data-placement="right"
                                                                        title="Add To Wishlist"><i
                                                                            class="ion-ios-heart-outline"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-bs-toggle="tooltip"
                                                                        data-placement="right"
                                                                        title="Add To Compare"><i
                                                                            class="ion-ios-reload"></i></a>
                                                                </li>
                                                                <li><a href="cart.html" data-bs-toggle="tooltip"
                                                                        data-placement="right" title="Add To cart"><i
                                                                            class="ion-bag"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h3 class="product-name"><a
                                                                    href="index.php?url=productdetail">Excepturi
                                                                    perspiciatis</a></h3>
                                                            <div class="price-box">
                                                                <span class="new-price">$50.00</span>
                                                                <span class="old-price">$60.00</span>
                                                            </div>
                                                            <div class="rating-box">
                                                                <ul>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li class="silver-color"><i
                                                                            class="ion-ios-star-outline"></i>
                                                                    </li>
                                                                    <li class="silver-color"><i
                                                                            class="ion-ios-star-outline"></i>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="shoes" class="tab-pane" role="tabpanel">
                                        <div class="kenne-element-carousel product-tab_slider slider-nav product-tab_arrow"
                                            data-slick-options='{
                                    "slidesToShow": 4,
                                    "slidesToScroll": 1,
                                    "infinite": false,
                                    "arrows": true,
                                    "dots": false,
                                    "spaceBetween": 30
                                    }'
                                            data-slick-responsive='[
                                    {"breakpoint":768, "settings": {
                                    "slidesToShow": 1
                                    }},
                                    {"breakpoint":575, "settings": {
                                    "slidesToShow": 1
                                    }}
                                ]'>

                                            <div class="product-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="index.php?url=productdetail">
                                                            <img class="primary-img"
                                                                src="{{ asset('assets/client/images/product/2-1.jpg') }}"
                                                                alt="Kenne's Product Image">
                                                            <img class="secondary-img"
                                                                src="{{ asset('assets/client/images/product/2-2.jpg') }}"
                                                                alt="Kenne's Product Image">
                                                        </a>
                                                        <span class="sticker">Bestseller</span>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li class="quick-view-btn" data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModalCenter"><a
                                                                        href="javascript:void(0)"
                                                                        data-bs-toggle="tooltip"
                                                                        data-placement="right" title="Quick View"><i
                                                                            class="ion-ios-search"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-bs-toggle="tooltip"
                                                                        data-placement="right"
                                                                        title="Add To Wishlist"><i
                                                                            class="ion-ios-heart-outline"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-bs-toggle="tooltip"
                                                                        data-placement="right"
                                                                        title="Add To Compare"><i
                                                                            class="ion-ios-reload"></i></a>
                                                                </li>
                                                                <li><a href="cart.html" data-bs-toggle="tooltip"
                                                                        data-placement="right" title="Add To cart"><i
                                                                            class="ion-bag"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h3 class="product-name"><a
                                                                    href="index.php?url=productdetail">Nulla
                                                                    laboriosam</a></h3>
                                                            <div class="price-box">
                                                                <span class="new-price">$80.00</span>
                                                                <span class="old-price">$85,00</span>
                                                            </div>
                                                            <div class="rating-box">
                                                                <ul>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Banner-->
                <div class="banner-area-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="banner-item img-hover_effect">
                                    <div class="banner-img"></div>
                                    <div class="banner-content">


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Begin List Product Area -->
                <div class="list-product_area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title">
                                    <h3>Phụ kiện</h3>
                                    <div class="list-product_arrow"></div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="kenne-element-carousel list-product_slider slider-nav"
                                    data-slick-options='{
                        "slidesToShow": 3,
                        "slidesToScroll": 1,
                        "infinite": false,
                        "arrows": true,
                        "dots": false,
                        "spaceBetween": 30,
                        "appendArrows": ".list-product_arrow"
                        }'
                                    data-slick-responsive='[
                        {"breakpoint":1200, "settings": {
                        "slidesToShow": 2
                        }},
                        {"breakpoint":768, "settings": {
                        "slidesToShow": 1
                        }},
                        {"breakpoint":575, "settings": {
                        "slidesToShow": 1
                        }}
                    ]'>

                                    <div class="product-item">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="index.php?url=productdetail">
                                                    <img class="primary-img"
                                                        src="{{ asset('assets/client/images/product/hoa.jpg') }}"
                                                        alt="Kenne's Product Image">
                                                </a>
                                                <span class="sticker-2">-10%</span>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-desc_info">
                                                    <span class="manufacture-product">Hoa hồng, hoa baby</span>
                                                    <h3 class="product-name"><a href="index.php?url=productdetail">Hoa
                                                            cưới</a>
                                                    </h3>
                                                    <div class="price-box">
                                                        <span class="new-price">$46.91</span>
                                                        <span class="old-price">$50.99</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a href="wishlist.html" data-bs-toggle="tooltip"
                                                                data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-ios-heart-outline"></i></a>
                                                        </li>
                                                        <li><a href="cart.html" data-bs-toggle="tooltip"
                                                                data-placement="top" title="Add To cart">Add to
                                                                cart</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="index.php?url=productdetail">
                                                    <img class="primary-img"
                                                        src="{{ asset('assets/client/images/product/nhan.jpg') }}"
                                                        alt="Kenne's Product Image">
                                                </a>
                                                <span class="sticker">Sale</span>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-desc_info">
                                                    <span class="manufacture-product">sliver, frocks</span>
                                                    <h3 class="product-name"><a
                                                            href="index.php?url=productdetail">Nhẫn
                                                            cưới ratione</a>
                                                    </h3>
                                                    <div class="price-box">
                                                        <span class="new-price">$50.00</span>
                                                        <span class="old-price">$65.00</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a href="wishlist.html" data-bs-toggle="tooltip"
                                                                data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-ios-heart-outline"></i></a>
                                                        </li>
                                                        <li><a href="cart.html" data-bs-toggle="tooltip"
                                                                data-placement="top" title="Add To cart">Add to
                                                                cart</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="index.php?url=productdetail">
                                                    <img class="primary-img"
                                                        src="{{ asset('assets/client/images/product/caitoc.jpg') }}"
                                                        alt="Kenne's Product Image">
                                                </a>
                                                <span class="sticker-2">-15%</span>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-desc_info">
                                                    <span class="manufacture-product">crochet, scarf</span>
                                                    <h3 class="product-name"><a href="index.php?url=productdetail">Cài
                                                            tóc cô dâu</a>
                                                    </h3>
                                                    <div class="price-box">
                                                        <span class="new-price">$80.00</span>
                                                        <span class="old-price">$85.0</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a href="wishlist.html" data-bs-toggle="tooltip"
                                                                data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-ios-heart-outline"></i></a>
                                                        </li>
                                                        <li><a href="cart.html" data-bs-toggle="tooltip"
                                                                data-placement="top" title="Add To cart">Add to
                                                                cart</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="index.php?url=productdetail">
                                                    <img class="primary-img"
                                                        src="{{ asset('assets/client/images/product/1-1.jpg') }}"
                                                        alt="Kenne's Product Image">
                                                </a>
                                                <span class="sticker-2">-20%</span>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-desc_info">
                                                    <span class="manufacture-product">shirts, t-shirt</span>
                                                    <h3 class="product-name"><a
                                                            href="index.php?url=productdetail">Quibusdam ratione</a>
                                                    </h3>
                                                    <div class="price-box">
                                                        <span class="new-price">$75.91</span>
                                                        <span class="old-price">$80.99</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a href="wishlist.html" data-bs-toggle="tooltip"
                                                                data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-ios-heart-outline"></i></a>
                                                        </li>
                                                        <li><a href="cart.html" data-bs-toggle="tooltip"
                                                                data-placement="top" title="Add To cart">Add to
                                                                cart</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- List Product Area End Here -->

                <!-- Begin Latest Blog Area -->
                <div class="latest-blog_area latest-blog_area-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title">
                                    <h3><span>Tin tức mới nhất</span></h3>
                                    <div class="latest-blog_arrow"></div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="kenne-element-carousel latest-blog_slider slider-nav"
                                    data-slick-options='{
                        "slidesToShow": 2,
                        "slidesToScroll": 1,
                        "infinite": true,
                        "arrows": true,
                        "dots": false,
                        "spaceBetween": 30,
                        "appendArrows": ".latest-blog_arrow"
                        }'
                                    data-slick-responsive='[
                        {"breakpoint":992, "settings": {
                        "slidesToShow": 1
                        }},
                        {"breakpoint":768, "settings": {
                        "slidesToShow": 1
                        }},
                        {"breakpoint":575, "settings": {
                        "slidesToShow": 1
                        }}
                    ]'>

                                    <div class="blog-item">
                                        <div class="blog-img img-hover_effect">
                                            <a href="blog-details.html">
                                                <img src="{{ asset('assets/client/images/blog/tin1.jpg') }}"
                                                    alt="Blog Image">
                                            </a>
                                        </div>
                                        <div class="blog-content">
                                            <h3 class="heading">
                                                <a href="blog-details.html">Váy cưới hot 2024-2025</a>
                                            </h3>
                                            <p class="short-desc">
                                                Tất tần tật những mẫu váy cưới đẹp, áo cưới đẹp sang trọng xu hướng năm
                                                2024 -2025
                                            </p>
                                            <div class="blog-meta">
                                                <ul>
                                                    <li>Oct.20.2024</li>
                                                    <li>
                                                        <a href="javascript:void(0)">02 Comments</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-item">
                                        <div class="blog-img img-hover_effect">
                                            <a href="blog-details.html">
                                                <img src="{{ asset('assets/client/images/blog/tin2.jpg') }}"
                                                    alt="Blog Image">
                                            </a>
                                        </div>
                                        <div class="blog-content">
                                            <h3 class="heading">
                                                <a href="blog-details.html">Vuơn tầm cùng kenne</a>
                                            </h3>
                                            <p class="short-desc">
                                                Đương Kim Hoa Hậu Du Lịch Việt Nam Lương Kỳ Duyên lộng lẫy với mẫu váy
                                                Twinkle Star trong show diễn La Vie Est Belle
                                            </p>
                                            <div class="blog-meta">
                                                <ul>
                                                    <li>Oct.20.2024</li>
                                                    <li>
                                                        <a href="javascript:void(0)">02 Comments</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-item">
                                        <div class="blog-img img-hover_effect">
                                            <a href="blog-details.html">
                                                <img src="{{ asset('assets/client/images/blog/4.jpg') }}"
                                                    alt="Blog Image">
                                            </a>
                                        </div>
                                        <div class="blog-content">
                                            <h3 class="heading">
                                                <a href="blog-details.html">When an unknown printer.</a>
                                            </h3>
                                            <p class="short-desc">
                                                The first line of lorem Ipsum: "Lorem ipsum dolor sit amet..", comes
                                                from a line in
                                                section 1.10.32.
                                            </p>
                                            <div class="blog-meta">
                                                <ul>
                                                    <li>Oct.20.2019</li>
                                                    <li>
                                                        <a href="javascript:void(0)">02 Comments</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-item">
                                        <div class="blog-img img-hover_effect">
                                            <a href="blog-details.html">
                                                <img src="{{ asset('assets/client/images/blog/5.jpg') }}"
                                                    alt="Blog Image">
                                            </a>
                                        </div>
                                        <div class="blog-content">
                                            <h3 class="heading">
                                                <a href="blog-details.html">When an unknown printer took a galley of
                                                    type.</a>
                                            </h3>
                                            <p class="short-desc">
                                                The first line of lorem Ipsum: "Lorem ipsum dolor sit amet..", comes
                                                from a line in
                                                section 1.10.32.
                                            </p>
                                            <div class="blog-meta">
                                                <ul>
                                                    <li>Oct.20.2019</li>
                                                    <li>
                                                        <a href="javascript:void(0)">02 Comments</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Latest Blog Area End Here -->

                <!-- Begin Brand Area -->
                <div class="brand-area ">
                    <div class="container">
                        <div class="brand-nav border-top ">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="kenne-element-carousel brand-slider slider-nav"
                                        data-slick-options='{
                                "slidesToShow": 6,
                                "slidesToScroll": 1,
                                "infinite": false,
                                "arrows": false,
                                "dots": false,
                                "spaceBetween": 30
                                }'
                                        data-slick-responsive='[
                                {"breakpoint":992, "settings": {
                                "slidesToShow": 4
                                }},
                                {"breakpoint":768, "settings": {
                                "slidesToShow": 3
                                }},
                                {"breakpoint":576, "settings": {
                                "slidesToShow": 2
                                }}
                            ]'>


                                        <div class="brand-item">
                                            <a href="javascript:void(0)">
                                                <img src="{{ asset('assets/client/images/brand/2.png') }}"
                                                    alt="Brand Images">
                                            </a>
                                        </div>
                                        <div class="brand-item">
                                            <a href="javascript:void(0)">
                                                <img src="{{ asset('assets/client/images/brand/3.png') }}"
                                                    alt="Brand Images">
                                            </a>
                                        </div>

                                        <div class="brand-item">
                                            <a href="javascript:void(0)">
                                                <img src="{{ asset('assets/client/images/brand/5.png') }}"
                                                    alt="Brand Images">
                                            </a>
                                        </div>
                                        <div class="brand-item">
                                            <a href="javascript:void(0)">
                                                <img src="{{ asset('assets/client/images/brand/6.png') }}"
                                                    alt="Brand Images">
                                            </a>
                                        </div>

                                        <div class="brand-item">
                                            <a href="javascript:void(0)">
                                                <img src="{{ asset('assets/client/images/brand/2.png') }}"
                                                    alt="Brand Images">
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- home-->


                <style>
                    .star {
                        display: none;
                    }

                    .star-label {
                        display: inline-block;
                        width: 30px;
                        height: 30px;
                        background-image: url({{ asset('assets/client/images/star1.png') }});
                        background-size: cover;
                        cursor: pointer;
                    }

                    .star-input:checked+.star-label {
                        background-image: url('https://www.example.com/star-filled.png');
                        /* Thay thế đường dẫn này bằng đường dẫn đến hình ảnh sao đã được điền của bạn */
                    }
                </style>
              
                @include('clients.blocks.footer')

                <!-- Kenne's Footer Area End Here -->

                <!-- Scroll To Top Start -->
                <a class="scroll-to-top" href="#"><i class="ion-chevron-up"></i></a>
                <!-- Scroll To Top End -->

            </div>

            <!-- JS
============================================ -->

            <!-- jQuery JS -->
            <script src="{{ asset('assets/client/js/vendor/jquery-3.6.0.min.js') }}"></script>
            <script src="{{ asset('assets/client/js/vendor/jquery-migrate-3.3.2.min.js') }}"></script>
            <!-- Modernizer JS -->
            <script src="{{ asset('assets/client/js/vendor/modernizr-3.11.2.min.js') }}"></script>
            <!-- Bootstrap JS -->
            <script src="{{ asset('assets/client/js/vendor/bootstrap.bundle.min.js') }}"></script>

            <!-- Slick Slider JS -->
            <script src="{{ asset('assets/client/js/plugins/slick.min.js') }}"></script>
            <!-- Barrating JS -->
            <script src="{{ asset('assets/client/js/plugins/jquery.barrating.min.js') }}"></script>
            <!-- Counterup JS -->
            <script src="{{ asset('assets/client/js/plugins/jquery.counterup.js') }}"></script>
            <!-- Nice Select JS -->
            <script src="{{ asset('assets/client/js/plugins/jquery.nice-select.js') }}"></script>
            <!-- Sticky Sidebar JS -->
            <script src="{{ asset('assets/client/js/plugins/jquery.sticky-sidebar.js') }}"></script>
            <!-- Jquery-ui JS -->
            <script src="{{ asset('assets/client/js/plugins/jquery-ui.min.js') }}"></script>
            <script src="{{ asset('assets/client/js/plugins/jquery.ui.touch-punch.min.js') }}"></script>
            <!-- Theia Sticky Sidebar JS -->
            <script src="{{ asset('assets/client/js/plugins/theia-sticky-sidebar.min.js') }}"></script>
            <!-- Waypoints JS -->
            <script src="{{ asset('assets/client/js/plugins/waypoints.min.js') }}"></script>
            <!-- jQuery Zoom JS -->
            <script src="{{ asset('assets/client/js/plugins/jquery.zoom.min.js') }}"></script>
            <!-- Timecircles JS -->
            <script src="{{ asset('assets/client/js/plugins/timecircles.js') }}"></script>

            <!-- Main JS -->
            <script src="{{ asset('assets/client/js/main.js') }}"></script>

</body>


<!-- Mirrored from htmldemo.net/kenne/kenne/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Jan 2024 08:41:32 GMT -->

</html>
