   <!-- CSS -->
   <style>
       .user-dropdown {
           position: relative;
           font-family: Arial, sans-serif;
       }

       .user-name {
           cursor: pointer;
           font-weight: 500;
           color: #333;
           padding: 8px 12px;
           border-radius: 5px;
           background-color: #f5f5f5;
           transition: background-color 0.3s ease;
       }

       .user-name:hover {
           background-color: #e0e0e0;
       }

       .dropdown-menu {
           display: none;
           /* Mặc định ẩn menu */
           position: absolute;
           top: 100%;
           left: 0;
           background-color: #fff;
           border-radius: 8px;
           border: 1px solid #ddd;
           box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
           padding: 10px;
           min-width: 160px;
           z-index: 1000;
       }

       .dropdown-item {
           display: block;
           padding: 5px 10px;
           color: #333;
           text-decoration: none;
           font-size: 14px;
           border-radius: 4px;
           transition: background-color 0.3s ease;
       }

       .dropdown-item:hover {
           background-color: #f1f1f1;
           color: #007bff;
       }

       .dropdown-item:first-child {
           margin-bottom: 5px;
       }

       .dropdown-menu.show {
           display: block;
           animation: fadeIn 0.3s ease;
       }

       @keyframes fadeIn {
           from {
               opacity: 0;
               transform: translateY(-10px);
           }

           to {
               opacity: 1;
               transform: translateY(0);
           }
       }
   </style>

   <div class="container">
       <div class="row">
           <div class="col-lg-12">
               <div class="header-middle_nav">
                   <div class="header-logo_area">
                       <a href="./">
                           <img src="{{ asset('assets/client/images/menu/logo/1.png') }}" alt="Header Logo" width="150px">
                       </a>
                   </div>

                   <div class="header-search_area d-none d-lg-block">
                       <form class="search-form" action="#">
                           <input type="text" style="width: 600px;" placeholder="Tìm kiếm">
                           <button class="search-button"><i class="ion-ios-search"></i></button>
                       </form>
                   </div>

                   <!-- Dropdown menu cho tên người dùng -->
                   <div class="user-dropdown" style="position: relative;">
                       <span class="user-name" style="cursor: pointer;">
                           @if (Auth::user())
                               Xin chào
                               {{ explode(' ', trim(Auth::user()->name))[count(explode(' ', trim(Auth::user()->name))) - 1] }}
                           @else
                               <a href="{{ route('login') }}" style="text-decoration: none; color: inherit;">
                                   Đăng nhập
                               </a>
                           @endif
                       </span>
                       <!-- Dropdown Menu -->
                       @if (Auth::user())
                           <div class="dropdown-menu"
                               style="display: none; position: absolute; top: 100%; left: 0; background: #fff; border: 1px solid #ddd; padding: 10px; min-width: 150px; z-index: 1000;">
                               <a class="dropdown-item" href="">Đăng nhập admin</a>
                               <a class="dropdown-item" href=""
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Đăng
                                   xuất</a>
                               <form id="logout-form" action="" method="POST" style="display: none;">
                                   @csrf
                               </form>
                           </div>
                       @else
                       @endif
                   </div>

                   <div class="header-contact d-none d-md-flex">
                       <i class="fa fa-headphones-alt"></i>
                       <div class="contact-content">
                           <p>
                               Liên hệ
                               <br>
                               0365133833
                           </p>
                       </div>
                   </div>
               </div>
           </div>


       </div>
   </div>
   <div class="header-bottom_area d-none d-lg-block">
       <div class="container">
           <div class="row">
               <div class="col-lg-12">
                   <div class="main-menu_area position-relative">
                       <nav class="main-nav d-flex justify-content-center">
                           <ul>
                               <li class="dropdown-holder"><a href="./">Trang chủ</a>
                               </li>
                               <li><a href="index.php?url=productpage">Danh mục<i class="ion-chevron-down"></i></a>
                                   <ul class="kenne-dropdown">
                                       <li><a href="index.php?url=aocuoilamle">Váy cưới đi làm lễ</a></li>
                                       <li><a href="index.php?url=aocuoidiban">Váy cưới đi bàn</a></li>
                                       <li><a href="index.php?url=aodaicuoi">Áo dài cưới</a></li>
                                   </ul>
                               </li>
                               <li><a href="index.php?url=page">Bộ sưu tập<i class="ion-chevron-down"></i></a>
                                   <ul class="kenne-dropdown">
                                       <li><a href="coming-soon_page.html">Bộ sưu tập hot 2023</a></li>
                                       <li><a href="index.php?url=page">Bộ sưu tập độc quyền</a></li>
                                   </ul>
                               </li>
                               <li><a href="javascript:void(0)">Dịch vụ khác<i class="ion-chevron-down"></i></a>
                                   <ul class="kenne-dropdown">
                                       <li><a href="blog-grid_view.html">Chụp ảnh cưới</a></li>
                                       <li><a href="blog-list_view.html">Hoa cưới</a></li>
                                       <li><a href="blog-details.html">Xe hoa</a></li>
                                   </ul>
                               </li>
                               <li><a href="index.php?url=aboutus">Về FStudio</a></li>
                               <li><a href="index.php?url=contactus">Liên hệ</a></li>
                           </ul>
                       </nav>
                   </div>
               </div>
           </div>
       </div>
   </div>

   <div class="header-sticky">
       <div class="container">
           <div class="row">
               <div class="col-lg-12">
                   <div class="sticky-header_nav position-relative">
                       <div class="row align-items-center justify-content-between">
                           <div class="col-lg-2 col-sm-6">
                               <div class="header-logo_area">
                                   <a href="./">
                                       <img src="{{ asset('assets/client/images/menu/logo/1.png') }}" alt="Header Logo">
                                   </a>
                               </div>
                           </div>
                           <div class="col-lg-7 d-none d-lg-block position-static" style="width:auto">
                               <div class="main-menu_area">
                                   <nav class="main-nav d-flex justify-content-center">
                                       <ul>
                                           <li class="dropdown-holder"><a href="index.php?url=/">Trang
                                                   chủ</a>
                                           </li>
                                           <li><a href="index.php?url=productpage">Sản phẩm<i
                                                       class="ion-chevron-down"></i></a>
                                               <ul class="kenne-dropdown">
                                                   <li><a href="index.php?url=all-aocuoi">Tất cả</a></li>
                                                   <li><a href="index.php?url=aocuoilamle">Váy cưới đi làm
                                                           lễ</a></li>
                                                   <li><a href="index.php?url=aocuoidiban">Váy cưới đi
                                                           bàn</a></li>
                                                   <li><a href="index.php?url=aodaicuoi">Áo dài cưới</a>
                                                   </li>
                                               </ul>
                                           </li>
                                           <li><a href="index.php?url=page">Bộ sự tập <i
                                                       class="ion-chevron-down"></i></a>
                                               <ul class="kenne-dropdown">
                                                   <li><a href="coming-soon_page.html">Bộ sưu tập hot
                                                           2023</a></li>
                                                   <li><a href="index.php?url=page">Bộ sưu tập độc
                                                           quyền</a></li>
                                               </ul>
                                           </li>
                                           <li><a href="javascript:void(0)">Dịch vụ khác <i
                                                       class="ion-chevron-down"></i></a>
                                               <ul class="kenne-dropdown">
                                                   <li><a href="blog-grid_view.html">Chụp ảnh cưới</a>
                                                   </li>
                                                   <li><a href="blog-list_view.html">Hoa cưới</a></li>
                                                   <li><a href="blog-details.html">Xe hoa</a></li>
                                               </ul>
                                           </li>
                                           <li><a href="index.php?url=aboutus">Về FStudio</a></li>
                                           <li><a href="index.php?url=contactus">Liên hệ</a></li>
                                       </ul>
                                   </nav>
                               </div>
                           </div>
                           <div class="col-lg-3 col-sm-6" style="width:auto">
                               <div class="header-right_area header-right_area-2">
                                   <ul>
                                       <li class="mobile-menu_wrap d-inline-block d-lg-none">
                                           <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white">
                                               <i class="ion-android-menu"></i>
                                           </a>
                                       </li>

                                       <li>
                                           <a href="#searchBar" class="search-btn toolbar-btn">
                                               <i class="ion-android-search"></i>
                                           </a>
                                       </li>
                                       <li class="d-none d-lg-inline-block">
                                           <a href="#offcanvasMenu" class="menu-btn toolbar-btn color--white">
                                               <i class="ion-android-menu"></i>
                                           </a>
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
   <div class="offcanvas-minicart_wrapper" id="miniCart">
       <div class="offcanvas-menu-inner">
           <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
           <div class="minicart-content">
               <div class="minicart-heading">
                   <h4>Shopping Cart</h4>
               </div>
               <ul class="minicart-list">
                   <li class="minicart-product">
                       <a class="product-item_remove" href="javascript:void(0)"><i class="ion-android-close"></i></a>
                       <div class="product-item_img">
                           <img src="{{ asset('assets/client/images/product/1-1.jpg') }}" alt="Kenne's Product Image">
                       </div>
                       <div class="product-item_content">
                           <a class="product-item_title" href="shop-left-sidebar.html">Autem ipsa ad</a>
                           <span class="product-item_quantity">1 x $145.80</span>
                       </div>
                   </li>
                   <li class="minicart-product">
                       <a class="product-item_remove" href="javascript:void(0)"><i class="ion-android-close"></i></a>
                       <div class="product-item_img">
                           <img src="{{ asset('assets/client/images/product/2-1.jpg') }}" alt="Kenne's Product Image">
                       </div>
                       <div class="product-item_content">
                           <a class="product-item_title" href="shop-left-sidebar.html">Tenetur illum
                               amet</a>
                           <span class="product-item_quantity">1 x $150.80</span>
                       </div>
                   </li>
                   <li class="minicart-product">
                       <a class="product-item_remove" href="javascript:void(0)"><i class="ion-android-close"></i></a>
                       <div class="product-item_img">
                           <img src="{{ asset('assets/client/images/product/3-1.jpg') }}" alt="Kenne's Product Image">
                       </div>
                       <div class="product-item_content">
                           <a class="product-item_title" href="shop-left-sidebar.html">Non doloremque
                               placeat</a>
                           <span class="product-item_quantity">1 x $165.80</span>
                       </div>
                   </li>
               </ul>
           </div>
           <div class="minicart-item_total">
               <span>Subtotal</span>
               <span class="ammount">$462.4‬0</span>
           </div>
           <div class="minicart-btn_area">
               <a href="index.php?url=cart" class="kenne-btn kenne-btn_fullwidth">Minicart</a>
           </div>
           <div class="minicart-btn_area">
               <a href="index.php?url=checkout" class="kenne-btn kenne-btn_fullwidth">Checkout</a>
           </div>
       </div>
   </div>
   <div class="mobile-menu_wrapper" id="mobileMenu">
       <div class="offcanvas-menu-inner">
           <div class="container">
               <a href="#" class="btn-close white-close_btn"><i class="ion-android-close"></i></a>
               <div class="offcanvas-inner_logo">
                   <a href="./">
                       <img src="{{ asset('assets/client/images/menu/logo/1.png') }}" alt="Header Logo">
                   </a>
               </div>
               <nav class="offcanvas-navigation">
                   <ul class="mobile-menu">
                       <li class="menu-item-has-children active"><a href="#"><span
                                   class="mm-text">Home</span></a>
                           <ul class="sub-menu">
                               <li>
                                   <a href="index.html">
                                       <span class="mm-text">Home One</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="index-2.html">
                                       <span class="mm-text">Home Two</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="index-3.html">
                                       <span class="mm-text">Home Three</span>
                                   </a>
                               </li>
                           </ul>
                       </li>
                       <li class="menu-item-has-children">
                           <a href="#">
                               <span class="mm-text">Shop</span>
                           </a>
                           <ul class="sub-menu">
                               <li class="menu-item-has-children">
                                   <a href="#">
                                       <span class="mm-text">Grid View</span>
                                   </a>
                                   <ul class="sub-menu">
                                       <li>
                                           <a href="shop-fullwidth.html">
                                               <span class="mm-text">Grid Fullwidth</span>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="shop-left-sidebar.html">
                                               <span class="mm-text">Left Sidebar</span>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="shop-right-sidebar.html">
                                               <span class="mm-text">Right Sidebar</span>
                                           </a>
                                       </li>
                                   </ul>
                               </li>
                               <li class="menu-item-has-children">
                                   <a href="#">
                                       <span class="mm-text">Shop List</span>
                                   </a>
                                   <ul class="sub-menu">
                                       <li>
                                           <a href="shop-list-fullwidth.html">
                                               <span class="mm-text">Full Width</span>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="shop-list-left-sidebar.html">
                                               <span class="mm-text">Left Sidebar</span>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="shop-list-right-sidebar.html">
                                               <span class="mm-text">Right Sidebar</span>
                                           </a>
                                       </li>
                                   </ul>
                               </li>
                               <li class="menu-item-has-children">
                                   <a href="#">
                                       <span class="mm-text">Single Product Style</span>
                                   </a>
                                   <ul class="sub-menu">
                                       <li>
                                           <a href="single-product-gallery-left.html">
                                               <span class="mm-text">Gallery Left</span>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="single-product-gallery-right.html">
                                               <span class="mm-text">Gallery Right</span>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="single-product-tab-style-left.html">
                                               <span class="mm-text">Tab Style Left</span>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="single-product-tab-style-right.html">
                                               <span class="mm-text">Tab Style Right</span>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="single-product-sticky-left.html">
                                               <span class="mm-text">Sticky Left</span>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="single-product-sticky-right.html">
                                               <span class="mm-text">Sticky Right</span>
                                           </a>
                                       </li>
                                   </ul>
                               </li>
                               <li class="menu-item-has-children">
                                   <a href="#">
                                       <span class="mm-text">Single Product Type</span>
                                   </a>
                                   <ul class="sub-menu">
                                       <li>
                                           <a href="single-product.html">
                                               <span class="mm-text">Single Product</span>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="single-product-sale.html">
                                               <span class="mm-text">Single Product Sale</span>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="single-product-group.html">
                                               <span class="mm-text">Single Product Group</span>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="single-product-variable.html">
                                               <span class="mm-text">Single Product Variable</span>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="single-product-affiliate.html">
                                               <span class="mm-text">Single Product Affiliate</span>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="single-product-slider.html">
                                               <span class="mm-text">Single Product Slider</span>
                                           </a>
                                       </li>
                                   </ul>
                               </li>
                           </ul>
                       </li>
                       <li class="menu-item-has-children">
                           <a href="#">
                               <span class="mm-text">Blog</span>
                           </a>
                           <ul class="sub-menu">
                               <li class="menu-item-has-children has-children">
                                   <a href="blog-grid_view.html">
                                       <span class="mm-text">Grid View</span>
                                   </a>
                               </li>
                               <li class="menu-item-has-children has-children">
                                   <a href="blog-list_view.html">
                                       <span class="mm-text">List View</span>
                                   </a>
                               </li>
                               <li class="menu-item-has-children has-children">
                                   <a href="blog-details.html">
                                       <span class="mm-text">Blog Details</span>
                                   </a>
                               </li>
                           </ul>
                       </li>
                       <li class="menu-item-has-children">
                           <a href="#">
                               <span class="mm-text">Pages</span>
                           </a>
                           <ul class="sub-menu">
                               <li>
                                   <a href="my-account.html">
                                       <span class="mm-text">About Us</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="my-account.html">
                                       <span class="mm-text">Contact</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="my-account.html">
                                       <span class="mm-text">My Account</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="login-register.html">
                                       <span class="mm-text">Login | Register</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="wishlist.html">
                                       <span class="mm-text">Wishlist</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="cart.html">
                                       <span class="mm-text">Cart</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="checkout.html">
                                       <span class="mm-text">Checkout</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="compare.html">
                                       <span class="mm-text">Compare</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="faq.html">
                                       <span class="mm-text">FAQ</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="404.html">
                                       <span class="mm-text">Error 404</span>
                                   </a>
                               </li>
                           </ul>
                       </li>
                   </ul>
               </nav>
               <nav class="offcanvas-navigation user-setting_area">
                   <ul class="mobile-menu">
                       <li class="menu-item-has-children active">
                           <a href="#">
                               <span class="mm-text">User
                                   Setting
                               </span>
                           </a>
                           <ul class="sub-menu">
                               <li>
                                   <a href="my-account.html">
                                       <span class="mm-text">My Account</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="login-register.html">
                                       <span class="mm-text">Login | Register</span>
                                   </a>
                               </li>
                           </ul>
                       </li>
                       <li class="menu-item-has-children"><a href="#"><span class="mm-text">Currency</span></a>
                           <ul class="sub-menu">
                               <li>
                                   <a href="javascript:void(0)">
                                       <span class="mm-text">EUR €</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="javascript:void(0)">
                                       <span class="mm-text">USD $</span>
                                   </a>
                               </li>
                           </ul>
                       </li>
                       <li class="menu-item-has-children"><a href="#"><span class="mm-text">Language</span></a>
                           <ul class="sub-menu">
                               <li>
                                   <a href="javascript:void(0)">
                                       <span class="mm-text">English</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="javascript:void(0)">
                                       <span class="mm-text">Français</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="javascript:void(0)">
                                       <span class="mm-text">Romanian</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="javascript:void(0)">
                                       <span class="mm-text">Japanese</span>
                                   </a>
                               </li>
                           </ul>
                       </li>
                   </ul>
               </nav>
           </div>
       </div>
   </div>
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


   <script>
       document.addEventListener('DOMContentLoaded', function() {
           const userName = document.querySelector('.user-name');
           const dropdownMenu = document.querySelector('.dropdown-menu');

           // Toggle dropdown menu when clicking on the username
           userName.addEventListener('click', function(event) {
               event.stopPropagation(); // Ngăn chặn sự kiện click lan ra ngoài
               dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
           });

           // Đóng dropdown khi click ra ngoài
           document.addEventListener('click', function() {
               dropdownMenu.style.display = 'none';
           });
       });
   </script>
