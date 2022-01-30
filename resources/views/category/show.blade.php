<!DOCTYPE html>
<html lang="en">
<head>
    <title>Category V3</title>
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:100,300,400,500,700,900%7CRoboto+Condensed:100,300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('app/css/icon-font-linea.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app/css/multirange.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app/css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app/css/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app/css/effect.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app/css/home.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app/css/category.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app/css/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app/css/responsive.css')}}">
</head>
<body>
<!-- push menu-->
<div class="pushmenu menu-home5">
    <div class="menu-push">
        <span class="close-left js-close"><i class="fa fa-times f-20"></i></span>
        <div class="clearfix"></div>
        <form role="search" method="get" id="searchform" class="searchform" action="/search">
            <div>
                <label class="screen-reader-text" for="q"></label>
                <input type="text" placeholder="Search for products" value="" name="q" id="q" autocomplete="off">
                <input type="hidden" name="type" value="product">
                <button type="submit" id="searchsubmit"><i class="ion-ios-search-strong"></i></button>
            </div>
        </form>
        <ul class="nav-home5 js-menubar">
            <li class="level1 active dropdown">
                <a href="#">Home</a>
                <span class="icon-sub-menu"></span>
                <ul class="menu-level1 js-open-menu">
                    <li class="level2"><a href="home_v3.html" title="">Home 3</a></li>
                </ul>
            </li>
            <li class="level1 active dropdown"><a href="#">Shop</a>
                <span class="icon-sub-menu"></span>
                <div class="menu-level1 js-open-menu">
                    <ul class="level1">
                        <li class="level2">
                            <a href="#">Shop Type</a>
                            <ul class="menu-level-2">
                                <li class="level3"><a href="category_v1.html" title="">Category V1</a></li>
                                <li class="level3"><a href="category_v1_2.html" title="">Category V1.2</a></li>
                                <li class="level3"><a href="category_v2.html" title="">Category V2</a></li>
                                <li class="level3"><a href="category_v2_2.html" title="">Category V2.2</a></li>
                                <li class="level3"><a href="category_v3.html" title="">Category V3</a></li>
                                <li class="level3"><a href="category_v3_2.html" title="">Category V3.2</a></li>
                                <li class="level3"><a href="category_v4.html" title="">Category V4</a></li>
                                <li class="level3"><a href="category_v4_2.html" title="">Category V4.2</a></li>
                            </ul>
                        </li>
                        <li class="level2">
                            <a href="#">Single Product Type</a>
                            <ul class="menu-level-2">
                                <li class="level3"><a href="product_v1.html" title="">Product Single 1</a></li>
                                <li class="level3"><a href="product_v2.html" title="">Product Single 2</a></li>
                                <li class="level3"><a href="product_v3.html" title="">Product Single 3</a></li>
                            </ul>
                        </li>
                        <li class="level2">
                            <a href="#">Order Page</a>
                            <ul class="menu-level-2">
                                <li class="level3"><a href="cartpage.html" title="">Cart Page</a></li>
                                <li class="level3"><a href="checkout.html" title="">Checkout</a></li>
                                <li class="level3"><a href="compare.html" title="">Compare</a></li>
                                <li class="level3"><a href="quickview.html" title="">Quickview</a></li>
                                <li class="level3"><a href="trackyourorder.html">Track Order</a></li>
                                <li class="level3"><a href="wishlist.html">WishList</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </li>
            <li class="level1">
                <a href="#">Pages</a>
                <span class="icon-sub-menu"></span>
                <ul class="menu-level1 js-open-menu">
                    <li class="level2"><a href="about.html" title="About Us ">About Us </a></li>
                    <li class="level2"><a href="contact.html" title="Contact">Contact</a></li>
                    <li class="level2"><a href="404.html" title="404">404</a></li>
                </ul>
            </li>
            <li class="level1">
                <a href="#">Blog</a>
                <span class="icon-sub-menu"></span>
                <ul class="menu-level1 js-open-menu">
                    <li class="level2"><a href="blog.html" title="Blog Standar">Blog Category</a></li>
                    <li class="level2"><a href="blogdetail.html" title="Blog Gird">Blog Detail</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- end push menu-->
<!-- Menu Mobile -->
<div class="menu-mobile-left-content menu-bg-white">
    <ul>
        @if($categories_all)
            @foreach($categories_all as $category)
                <li><a href="#"><img src="img/icon_hot_gray.png" alt="Icon Hot Deals" /> <p>{{$category->name}}</p></a></li>
            @endforeach
        @endif
    </ul>
</div>
<!-- Header Box -->
<div class="wrappage">
    <header class="relative full-width">
        <div class=" container-web relative">
            <div class=" container">
                <div class="row">
                    <div class=" header-top">
                        <p class="contact_us_header col-md-4 col-xs-12 col-sm-3 clear-margin">
                            <img src="img/icon_phone_top.png" alt="Icon Phone Top Header" /> Call us <span class="text-red bold">070-7782-7137</span>
                        </p>
                        <div class="menu-header-top text-right col-md-8 col-xs-12 col-sm-6 clear-padding">
                            <ul class="clear-margin">
                                <li class="relative"><a href="#">My Account</a></li>
                                <li class="relative"><a href="#">Wishlist</a></li>
                                <li class="relative">
                                    <a href="#">EN</a>
                                    <ul>
                                        <li class="relative"><a href="#">JP</a></li>
                                        <li class="relative"><a href="#">EN</a></li>
                                        <li class="relative"><a href="#">CN</a></li>
                                    </ul>
                                </li>
                                <li class="relative">
                                    <a href="#">USD</a>
                                    <ul>
                                        <li class="relative"><a href="#">AUD</a></li>
                                        <li class="relative"><a href="#">USD</a></li>
                                        <li class="relative"><a href="#">CAD</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="clearfix header-content full-width relative">
                        <div class="clearfix icon-menu-bar">
                            <i class="data-icon data-icon-arrows icon-arrows-hamburger-2 icon-pushmenu js-push-menu"></i>
                        </div>
                        <div class="clearfix logo">
                            <a href="#"><img alt="Logo" src="img/logo.png" /></a>
                        </div>
                        <div class="clearfix search-box relative float-left">
                            <form method="GET" action="/" class="">
                                <div class="clearfix category-box relative">
                                    <select name="cate_search">
                                        <option>All categories</option>
                                        @foreach($categories_all as $category)
                                            <option>{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <input type="text" name="s" placeholder="Enter keyword here . . .">
                                <button type="submit" class="animate-default button-hover-red">Search</button>
                            </form>
                        </div>
                        <div class="clearfix icon-search-mobile absolute">
                            <i onclick="showBoxSearchMobile()" class="data-icon data-icon-basic icon-basic-magnifier"></i>
                        </div>
                        <div class="clearfix cart-website absolute" onclick="showCartBoxDetail()">
                            <img alt="Icon Cart" src="img/icon_cart.png" />
                            <p class="count-total-shopping absolute">2</p>
                        </div>
                        <div class="clearfix cart-website absolute" onclick="showCartBoxDetail()">
                            <img alt="Icon Cart" src="img/icon_cart.png" />
                            <p class="count-total-shopping absolute">2</p>
                        </div>
                        <div class="cart-detail-header border">
                            <div class="relative">
                                <div class="product-cart-son clearfix">
                                    <div class="image-product-cart float-left center-vertical-image ">
                                        <a href="#"><img src="img/product_image_6-min.png" alt="" /></a>
                                    </div>
                                    <div class="info-product-cart float-left">
                                        <p class="title-product title-hover-black"><a class="animate-default" href="#">MH02-Black09</a></p>
                                        <p class="clearfix price-product">$350 <span class="total-product-cart-son">(x1)</span></p>
                                    </div>
                                </div>
                                <div class="product-cart-son">
                                    <div class="image-product-cart float-left center-vertical-image">
                                        <a href="#"><img src="img/product_image_7-min.png" alt="" /></a>
                                    </div>
                                    <div class="info-product-cart float-left">
                                        <p class="title-product title-hover-black"><a class="animate-default" href="#">Voyage Yoga Bag</a></p>
                                        <p class="clearfix price-product">$350 <span class="total-product-cart-son">(x1)</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="relative border no-border-l no-border-r total-cart-header">
                                <p class="bold clear-margin">Subtotal:</p>
                                <p class=" clear-margin bold">$700</p>
                            </div>
                            <div class="relative btn-cart-header">
                                <a href="#" class="uppercase bold animate-default">view cart</a>
                                <a href="#" class="uppercase bold button-hover-red animate-default">checkout</a>
                            </div>
                        </div>
                        <div class="mask-search absolute clearfix" onclick="hiddenBoxSearchMobile()"></div>
                        <div class="clearfix box-search-mobile">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <a class="menu-vertical hidden-md hidden-lg" onclick="showMenuMobie()">
                        <span class="animate-default"><i class="fa fa-list" aria-hidden="true"></i> all categories</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="menu-header-v3 hidden-ipx">
            <div class="container">
                <div class="row">
                    <!-- Menu Page -->
                    <div class="menu-header full-width">
                        <ul class="clear-margin">
                            <li onclick="showMenuHomeV3()"><a class="animate-default" href="#"><i class="fa fa-list" aria-hidden="true"></i> all categories</a></li>
                            <li class="title-hover-red">
                                <a class="animate-default" href="#">home</a>
                                <ul class="sub-menu mega-menu">
                                    <li class="relative">
                                        <a class="animate-default center-vertical-image" href="home_v1.html"><img src="img/home_1_menu-min.png" alt=""></a>
                                        <p><a href="home_v1.html">Home 1</a></p>
                                    </li>
                                    <li class="relative">
                                        <a class="animate-default center-vertical-image" href="home_v2.html"><img src="img/home_2_menu-min.png" alt=""></a>
                                        <p><a href="home_v2.html">Home 2</a></p>
                                    </li>
                                    <li class="relative">
                                        <a class="animate-default center-vertical-image" href="home_v3.html"><img src="img/home_3_menu-min.png" alt=""></a>
                                        <p><a href="home_v3.html">Home 3</a></p>
                                    </li>
                                </ul>
                            </li>
                            <li class="title-hover-red">
                                <a class="animate-default" href="#">shop</a>
                                <div class="sub-menu mega-menu-v2">
                                    <ul>
                                        <li>Catgory Type</li>
                                        <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v1.html">Category v1</a></li>
                                        <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v1_2.html">Category v1.2</a></li>
                                        <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v2.html">Category v2</a></li>
                                        <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v2_2.html">Category v2.2</a></li>
                                        <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v3.html">Category v3</a></li>
                                        <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v3_2.html">Category v3.2</a></li>
                                        <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v4.html">Category v4</a></li>
                                        <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v4_2.html">Category v4.2</a></li>
                                    </ul>
                                    <ul>
                                        <li>Single Product Type</li>
                                        <li class="title-hover-red"><a class="animate-default clear-padding" href="product_v1.html">Product Single 1</a></li>
                                        <li class="title-hover-red"><a class="animate-default clear-padding" href="product_v2.html">Product Single 2</a></li>
                                        <li class="title-hover-red"><a class="animate-default clear-padding" href="product_v3.html">Product Single 3</a></li>
                                    </ul>
                                    <ul>
                                        <li>Order Page</li>
                                        <li class="title-hover-red"><a class="animate-default clear-padding" href="cartpage.html">Cart Page</a></li>
                                        <li class="title-hover-red"><a class="animate-default clear-padding" href="checkout.html">Checkout</a></li>
                                        <li class="title-hover-red"><a class="animate-default clear-padding" href="compare.html">Compare</a></li>
                                        <li class="title-hover-red"><a class="animate-default clear-padding" href="quickview.html">QuickView</a></li>
                                        <li class="title-hover-red"><a class="animate-default clear-padding" href="trackyourorder.html">Track Order</a></li>
                                        <li class="title-hover-red"><a class="animate-default clear-padding" href="wishlist.html">WishList</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="title-hover-red">
                                <a class="animate-default" href="#">pages</a>
                                <ul>
                                    <li class="title-hover-red"><a class="animate-default" href="about.html">About Us</a></li>
                                    <li class="title-hover-red"><a class="animate-default" href="contact.html">Contact</a></li>
                                    <li class="title-hover-red"><a class="animate-default" href="404.html">404</a></li>
                                </ul>
                            </li>
                            <li class="title-hover-red">
                                <a class="animate-default" href="#">Blog</a>
                                <ul>
                                    <li class="title-hover-red"><a class="animate-default" href="blog.html">Blog Category</a></li>
                                    <li class="title-hover-red"><a class="animate-default" href="blogdetail.html">Blog Detail</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- End Menu Page -->
                </div>
            </div>
        </div>
        <div class="clearfix menu_more_header menu-web menu-bg-white">
            <ul>
                <li><a href="#"><img src="img/icon_hot_gray.png" alt="Icon Hot Deals" /> <p>Hot Deals</p></a></li>
                <li><a href="#"><img src="img/icon_food_gray.png" alt="Icon Food" /> <p>Food</p></a></li>
                <li><a href="#"><img src="img/icon_mobile_gray.png" alt="Icon Mobile & Tablet" /> <p>Mobile & Tablet</p></a></li>
                <li><a href="#"><img src="img/icon_electric_gray.png" alt="Icon Electric Appliances" /> <p>Electric Appliances</p></a></li>
                <li><a href="#"><img src="img/icon_computer_gray.png" alt="Icon Electronics & Technology" /> <p>Electronics & Technology</p></a></li>
                <li><a href="#"><img src="img/icon_fashion_gray.png" alt="Icon Fashion" /> <p>Fashion</p></a></li>
                <li><a href="#"><img src="img/icon_health_gray.png" alt="Icon Health & Beauty" /> <p>Health & Beauty</p></a></li>
                <li><a href="#"><img src="img/icon_mother_gray.png" alt="Icon Mother & Baby" /> <p>Mother & Baby</p></a></li>
                <li><a href="#"><img src="img/icon_book_gray.png" alt="Icon Books & Stationery" /> <p>Books & Stationery</p></a></li>
                <li><a href="#"><img src="img/icon_home_gray.png" alt="Icon Home & Life" /> <p>Home & Life</p></a></li>
                <li><a href="#"><img src="img/icon_sport_gray.png" alt="Icon Sports & Outdoors" /> <p>Sports & Outdoors</p></a></li>
                <li><a href="#"><img src="img/icon_auto_gray.png" alt="Icon Auto & Moto" /> <p>Auto & Moto</p></a></li>
                <li><a href="#"><img src="img/icon_voucher_gray.png" alt="Icon Voucher Service" /> <p>Voucher Service</p></a></li>
            </ul>
        </div>
        <div class="header-ontop">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="clearfix logo">
                            <a href="#"><img alt="Logo" src="img/logo.png" /></a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="menu-header">
                            <ul class="main__menu clear-margin">
                                <li class="title-hover-red">
                                    <a class="animate-default" href="#">home</a>
                                    <ul class="sub-menu mega-menu">
                                        <li class="relative">
                                            <a class="animate-default center-vertical-image" href="home_v1.html"><img src="img/home_1_menu-min.png" alt=""></a>
                                            <p><a href="home_v1.html">Home 1</a></p>
                                        </li>
                                        <li class="relative">
                                            <a class="animate-default center-vertical-image" href="home_v2.html"><img src="img/home_2_menu-min.png" alt=""></a>
                                            <p><a href="home_v2.html">Home 2</a></p>
                                        </li>
                                        <li class="relative">
                                            <a class="animate-default center-vertical-image" href="home_v3.html"><img src="img/home_3_menu-min.png" alt=""></a>
                                            <p><a href="home_v3.html">Home 3</a></p>
                                        </li>
                                    </ul>
                                </li>
                                <li class="title-hover-red">
                                    <a class="animate-default" href="#">shop</a>
                                    <div class="sub-menu mega-menu-v2">
                                        <ul>
                                            <li>Catgory Type</li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v1.html">Category v1</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v1_2.html">Category v1.2</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v2.html">Category v2</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v2_2.html">Category v2.2</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v3.html">Category v3</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v3_2.html">Category v3.2</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v4.html">Category v4</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v4_2.html">Category v4.2</a></li>
                                        </ul>
                                        <ul>
                                            <li>Single Product Type</li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="product_v1.html">Product Single 1</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="product_v2.html">Product Single 2</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="product_v3.html">Product Single 3</a></li>
                                        </ul>
                                        <ul>
                                            <li>Order Page</li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="cartpage.html">Cart Page</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="checkout.html">Checkout</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="compare.html">Compare</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="quickview.html">QuickView</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="trackyourorder.html">Track Order</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="wishlist.html">WishList</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="title-hover-red">
                                    <a class="animate-default" href="#">pages</a>
                                    <ul>
                                        <li class="title-hover-red"><a class="animate-default" href="about.html">About Us</a></li>
                                        <li class="title-hover-red"><a class="animate-default" href="contact.html">Contact</a></li>
                                        <li class="title-hover-red"><a class="animate-default" href="404.html">404</a></li>
                                    </ul>
                                </li>
                                <li class="title-hover-red">
                                    <a class="animate-default" href="#">Blog</a>
                                    <ul>
                                        <li class="title-hover-red"><a class="animate-default" href="blog.html">Blog Category</a></li>
                                        <li class="title-hover-red"><a class="animate-default" href="blogdetail.html">Blog Detail</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header Box -->
    <!-- Content Box -->
    <div class="relative full-width">
        <!-- Breadcrumb -->
        <div class="container-web relative">
            <div class="container">
                <div class="row">
                    <div class="breadcrumb-web">
                        <ul class="clear-margin">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">All Products</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb -->
        <!-- Content Category -->
        <div class="relative container-web">
            <div class="container">
                <div class="row ">
                    <!-- Sider Bar -->
                    <div class="col-md-3 relative right-padding-default clear-padding" id="slide-bar-category">
                        <div class="col-md-12 col-sm-12 col-xs-12 sider-bar-category border bottom-margin-default">
                            <p class="title-siderbar bold">CATEGORIES</p>
                            <ul class="clear-margin list-siderbar">
                                @if($categories_all)
                                    @foreach($categories_all as $category)
                                        <li><a href="{{route('display.category.product',$category->id)}}">{{$category->name}}</a></li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                        <div class="col-sm-12 col-sm-12 col-xs-12 sider-bar-category border bottom-margin-default">
                            <p class="title-siderbar bold">BRANDS</p>
                            <ul class="check-box-custom clear-margin clear-margin">
                                <li>
                                    <label>Apple  (465)
                                        <input type="checkbox" >
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label>Asus  (344)
                                        <input type="checkbox" >
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label>Audio-Technica  (136)
                                        <input type="checkbox" >
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label>Belkin  (121)
                                        <input type="checkbox" >
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label>BlueStone  (258)
                                        <input type="checkbox" >
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label>Brother  (119)
                                        <input type="checkbox" >
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label>Canon  (205)
                                        <input type="checkbox" >
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label>China OEM  (113)
                                        <input type="checkbox" >
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label>Comet  (330)
                                        <input type="checkbox" >
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 relative border bottom-margin-default sider-bar-category">
                            <div class="relative border no-border-t no-border-l no-border-r bottom-padding-default">
                                <p class="title-siderbar bold">price</p>
                                <div class="range-slider">
                                    <input value="50" min="0" max="1000" class="multi-range" type="range">
                                    <p class="text-range">Range: <span class="number-range"></span></p>
                                </div>
                            </div>
                            <div class="relative border no-border-t no-border-l no-border-r bottom-padding-default">
                                <p class="title-siderbar bold top-padding-default">color</p>
                                <ul class="check-box-custom list-color clearfix clear-margin">
                                    <li>
                                        <label>
                                            <input type="checkbox" >
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" >
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" >
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" >
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" >
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" >
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" >
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" >
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" >
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" >
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" >
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" >
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <div class="relative">
                                <p class="title-siderbar bold top-padding-default">size</p>
                                <ul class="check-box-custom clear-margin">
                                    <li>
                                        <label>S
                                            <input type="checkbox" >
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>M
                                            <input type="checkbox" >
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>L
                                            <input type="checkbox" >
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>XL
                                            <input type="checkbox" >
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>XXL
                                            <input type="checkbox" >
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>XXXL
                                            <input type="checkbox" >
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="bottom-margin-default banner-siderbar col-md-12 col-sm-12 col-xs-12 clear-padding clearfix">
                            <div class="overfollow-hidden banners-effect5 relative">
                                <img src="img/banner_siderbar-min.png" alt="Siderbar" />
                                <a href="#"></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Sider Bar Box -->
                    <!-- Content Category -->
                    <div class="col-md-9 relative clear-padding">
                        <div class="col-sm-12 col-xs-12 relative overfollow-hidden clear-padding button-show-sidebar">
                            <p onclick="showSideBar()"><span class="ti-filter"></span> Sidebar</p>
                        </div>
                        <div class="banner-top-category-page bottom-margin-default effect-bubba zoom-image-hover overfollow-hidden relative full-width">
                            <img src="{{asset('app/img/image_banner_category_1-min.png')}}" alt=""/>
                            <a href="#"></a>
                        </div>
                        <div class="bar-category bottom-margin-default border no-border-r no-border-l no-border-t">
                            <div class="row">
                                <div class="col-md-5 col-sm-5 col-xs-4">
                                    <p class="title-category-page clear-margin">Electronic</p>
                                </div>
                                <div class="col-md-5 col-sm-5 col-xs-8 right-category-bar float-right relative">
                                    <p class=" float-left">Showing 1–20 of 75 results</p>
                                    <a href="#" class=" float-left active-view-bar"><span class="icon-bar-category border ti-layout-grid3"></span></a>
                                    <a href="#" class=" float-left"><span class="icon-bar-category border ti-layout-list-thumb"></span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Content Category -->
                        <div class="relative clearfix">
                            @foreach($categories as $category)
                                @foreach($category['product'] as $product)
                            <div class="col-md-12 clear-padding border no-border-t no-border-l no-border-r product-category bottom-margin-default product-category-list relative">
                                <div class="image-product relative overfollow-hidden">
                                    <div class="center-vertical-image">
                                        <img src="{{asset($product['image'])}}" style="width: 270px;height: 270px;" alt="Product">
                                    </div>
                                    <a href="#"></a>
                                    <ul class="option-product animate-default clear-margin">
                                        <li class="relative"><a href="#"><i class="data-icon data-icon-ecommerce icon-ecommerce-bag"></i></a></li>
                                        <li class="relative"><a href="#"><i class="data-icondata-icon-basic icon-basic-heart" aria-hidden="true"></i></a></li>
                                        <li class="relative"><a href="javascript:;" ><i class="data-icon data-icon-basic icon-basic-magnifier" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <div class="relative overfollow-hidden info-product-list">
                                    <h3 class="title-product clearfix full-width title-hover-black"><a href="#">{{$product['name']}}</a></h3>
                                    <div class="clearfix ranking-product-category ranking-color">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <p class="clearfix price-product"><span class="price-old">$700</span>{{$product['price']}}</p>
                                    <p class="intro-product-category">{{$product['description']}}</p>
                                    <div class="relative button-product-list clearfix">
                                        <ul class="clear-margin">
                                            <li class="button-hover-red"><a href="#" class="animate-default">Add to Cart</a></li>
                                            <li><a href="#" class="animate-default"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                            <li><a href="#" class="animate-default"><i class="fa fa-signal" aria-hidden="true"></i></a></li>
                                            <li><a href="#" class="animate-default"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                                @endforeach
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="pagging relative">
                                <ul>
                                    <li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i> First</a></li>
                                    <li class="active-pagging"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li class="dots-pagging">. . .</li>
                                    <li><a href="#">102</a></li>
                                    <li><a href="#">Last <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Product Content Category -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Sider Bar -->
    </div>
    <!-- End Content Box -->
    <!-- Support -->
    <div class=" support-box full-width bg-red support_box_v2">
        <div class="container-web">
            <div class=" container">
                <div class="row">
                    <div class=" support-box-info relative col-md-3 col-sm-3 col-xs-6">
                        <img src="img/icon_free_ship_white-min.png" alt="Icon Free Ship" class="absolute" />
                        <p>free shipping</p>
                        <p>on order over $500</p>
                    </div>
                    <div class=" support-box-info relative col-md-3 col-sm-3 col-xs-6">
                        <img src="img/icon_support_white-min.png" alt="Icon Supports" class="absolute">
                        <p>support</p>
                        <p>life time support 24/7</p>
                    </div>
                    <div class=" support-box-info relative col-md-3 col-sm-3 col-xs-6">
                        <img src="img/icon_patner_white-min.png" alt="Icon partner" class="absolute">
                        <p>help partner</p>
                        <p>help all aspects</p>
                    </div>
                    <div class=" support-box-info relative col-md-3 col-sm-3 col-xs-6">
                        <img src="img/icon_phone_table_white-min.png" alt="Icon Phone Tablet" class="absolute">
                        <p>contact with us</p>
                        <p>+07 (0) 7782 9137</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content Box -->
    <!-- Footer Box -->
    <footer class="relative full-width">
        <div class=" top-footer full-width">
            <div class="clearfix container-web relative">
                <div class=" container">
                    <div class="row">
                        <div class="clearfix col-md-9 col-sm-12 clear-padding col-xs-12">
                            <div class="clearfix text-subscribe">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <p>sign up for newsletter</p>
                                <p>Get updates on discount & counpons.</p>
                            </div>
                            <div class="clearfix form-subscribe">
                                <input type="text" name="email-subscribe" placeholder="Enter your email . . .">
                                <button class="animate-default button-hover-red">subscribe</button>
                            </div>
                        </div>
                        <div class="clearfix col-md-3 col-sm-12 col-xs-12 clear-padding social-box text-right">
                            <a href="#"><img src="img/social_tw-min.png" alt="Icon Social Twiter"></a>
                            <a href="#"><img src="img/social_fa-min.png" alt="Icon Social Facebook"></a>
                            <a href="#"><img src="img/social_int-min.png" alt="Icon Social Instagram"></a>
                            <a href="#"><img src="img/social_yt-min.png" alt="Icon Social Youtube" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix container-web relative">
            <div class=" container clear-padding">
                <div class="row">
                    <div class="clearfix col-md-3 col-sm-6 col-xs-12 text-footer">
                        <p>my account</p>
                        <ul class="list-footer">
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">My Cart</a></li>
                            <li><a href="#">My Wishlist</a></li>
                            <li><a href="#">My Compare</a></li>
                        </ul>
                    </div>
                    <div class="clearfix col-md-3 col-sm-6 col-xs-12 text-footer">
                        <p>information</p>
                        <ul class="list-footer">
                            <li><a href="#">Information</a></li>
                            <li><a href="#">Orders History</a></li>
                            <li><a href="#">My Wishlist</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Site Map</a></li>
                        </ul>
                    </div>
                    <div class="clearfix col-md-3 col-sm-6 col-xs-12 text-footer">
                        <p>our services</p>
                        <ul class="list-footer">
                            <li><a href="#">Product Recall</a></li>
                            <li><a href="#">Gift Vouchers</a></li>
                            <li><a href="#">Returns And Exchanges</a></li>
                            <li><a href="#">Shipping Options</a></li>
                            <li><a href="#">Terms Of Use</a></li>
                        </ul>
                    </div>
                    <div class="clearfix col-md-3 col-sm-6 col-xs-12 text-footer">
                        <p>contact us</p>
                        <ul class="icon-footer">
                            <li><i class="fa fa-home" aria-hidden="true"></i> 262 Milacina Mrest, Behansed, Paris</li>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i> contact@yourcompany.com</li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i> 070-7782-9137</li>
                            <li><i class="fa fa-fax" aria-hidden="true"></i> 070-7782-9138</li>
                            <li><i class="fa fa-clock-o" aria-hidden="true"></i> 09:00 AM - 18:00 PM</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=" bottom-footer full-width">
            <div class="clearfix container-web">
                <div class=" container">
                    <div class="row">
                        <div class="clearfix col-md-7 clear-padding copyright">
                            <p class="clear-margin">Copyright © 2018 by EngoCreative. All Rights Reserved.</p>
                        </div>
                        <div class="clearfix footer-icon-bottom col-md-5 float-right clear-padding">
                            <div class="icon_logo_footer float-right">
                                <img src="img/image_payment_footer-min.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- End Footer Box -->
<script src="{{asset('app/js/jquery-3.3.1.min.js')}}" defer=""></script>
<script src="{{asset('app/js/bootstrap.min.js')}}" defer=""></script>
<script src="{{asset('app/js/multirange.js')}}" defer=""></script>
<script src="{{asset('app/js/owl.carousel.min.js')}}" defer=""></script>
<script src="{{asset('app/js/sync_owl_carousel.js')}}" defer=""></script>
<script src="{{asset('app/js/scripts.js')}}" defer=""></script>
</body>
</html>
