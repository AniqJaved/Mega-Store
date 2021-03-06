@extends('layouts.frontend')
@section('content')
    <div class="clearfix menu_more_header menu-web menu-bg-white">
        <ul>
            <li><a href="#"><img src="{{asset('app/img/icon_hot_gray.png')}}" alt="Icon Hot Deals" /> <p>Hot Deals</p></a></li>
            <li><a href="#"><img src="{{asset('app/img/icon_food_gray.png')}}" alt="Icon Food" /> <p>Food</p></a></li>
            <li><a href="#"><img src="{{asset('app/img/icon_mobile_gray.png')}}" alt="Icon Mobile & Tablet" /> <p>Mobile & Tablet</p></a></li>
            <li><a href="#"><img src="{{asset('app/img/icon_electric_gray.png')}}" alt="Icon Electric Appliances" /> <p>Electric Appliances</p></a></li>
            <li><a href="#"><img src="{{asset('app/img/icon_computer_gray.png')}}" alt="Icon Electronics & Technology" /> <p>Electronics & Technology</p></a></li>
            <li><a href="#"><img src="{{asset('app/img/icon_fashion_gray.png')}}" alt="Icon Fashion" /> <p>Fashion</p></a></li>
            <li><a href="#"><img src="{{asset('app/img/icon_health_gray.png')}}" alt="Icon Health & Beauty" /> <p>Health & Beauty</p></a></li>
            <li><a href="#"><img src="{{asset('app/img/icon_mother_gray.png')}}" alt="Icon Mother & Baby" /> <p>Mother & Baby</p></a></li>
            <li><a href="#"><img src="{{asset('app/img/icon_book_gray.png')}}" alt="Icon Books & Stationery" /> <p>Books & Stationery</p></a></li>
            <li><a href="#"><img src="{{asset('app/img/icon_home_gray.png')}}" alt="Icon Home & Life" /> <p>Home & Life</p></a></li>
            <li><a href="#"><img src="{{asset('app/img/icon_sport_gray.png')}}" alt="Icon Sports & Outdoors" /> <p>Sports & Outdoors</p></a></li>
            <li><a href="#"><img src="{{asset('app/img/icon_auto_gray.png')}}" alt="Icon Auto & Moto" /> <p>Auto & Moto</p></a></li>
            <li><a href="#"><img src="{{asset('app/img/icon_voucher_gray.png')}}" alt="Icon Voucher Service" /> <p>Voucher Service</p></a></li>
        </ul>
    </div>
    <div class="header-ontop">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="clearfix logo">
                        <a href="#"><img alt="Logo" src="{{asset('app/img/logo.png')}}" /></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="menu-header">
                        <ul class="main__menu clear-margin">
                            <li class="title-hover-red">
                                <a class="animate-default" href="#">home</a>
                                <ul class="sub-menu mega-menu">
                                    <li class="relative">
                                        <a class="animate-default center-vertical-image" href="home_v1.html"><img src="{{asset('app/img/home_1_menu-min.png')}}" alt=""></a>
                                        <p><a href="home_v1.html">Home 1</a></p>
                                    </li>
                                    <li class="relative">
                                        <a class="animate-default center-vertical-image" href="home_v2.html"><img src="{{asset('app/img/home_2_menu-min.png')}}" alt=""></a>
                                        <p><a href="home_v2.html">Home 2</a></p>
                                    </li>
                                    <li class="relative">
                                        <a class="animate-default center-vertical-image" href="home_v3.html"><img src="{{asset('app/img/home_3_menu-min.png')}}" alt=""></a>
                                        <p><a href="home_v3.html">Home 3</a></p>
                                    </li>
                                </ul>
                            </li>
                            <li class="title-hover-red">
                                <a class="animate-default" href="#">shop</a>
                                <div class="sub-menu mega-menu-v2">
                                    <ul>
                                        <li>Category Type</li>
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
@endsection

@section('main-content')
    <!-- Content Box -->
    <div class="relative clearfix full-width">
        <!-- Menu & Slide -->
        <div class="clearfix container-web relative">
            <div class=" container relative">
                <div class="row">
                    <div class=" relative menu-slide col-lg-12 clear-padding bottom-margin-15-default">
                        <!-- Menu -->
                        <div class=" menu-web relative menu-bg-white border no-border-t">
                            <ul>
                                <li><a href="#"><img src="{{asset('app/img/icon_hot_gray.png')}}" alt="Icon Hot Deals" /> <p>Hot Deals</p></a></li>
                                <li><a href="#"><img src="{{asset('app/img/icon_food_gray.png')}}" alt="Icon Food" /> <p>Food</p></a></li>
                                <li><a href="#"><img src="{{asset('app/img/icon_mobile_gray.png')}}" alt="Icon Mobile & Tablet" /> <p>Mobile & Tablet</p></a></li>
                                <li><a href="#"><img src="{{asset('app/img/icon_electric_gray.png')}}" alt="Icon Electric Appliances" /> <p>Electric Appliances</p></a></li>
                                <li><a href="#"><img src="{{asset('app/img/icon_computer_gray.png')}}" alt="Icon Electronics & Technology" /> <p>Electronics & Technology</p></a></li>
                                <li><a href="#"><img src="{{asset('app/img/icon_fashion_gray.png')}}" alt="Icon Fashion" /> <p>Fashion</p></a></li>
                                <li><a href="#"><img src="{{asset('app/img/icon_health_gray.png')}}" alt="Icon Health & Beauty" /> <p>Health & Beauty</p></a></li>
                                <li><a href="#"><img src="{{asset('app/img/icon_mother_gray.png')}}" alt="Icon Mother & Baby" /> <p>Mother & Baby</p></a></li>
                                <li><a href="#"><img src="{{asset('app/img/icon_book_gray.png')}}" alt="Icon Books & Stationery" /> <p>Books & Stationery</p></a></li>
                                <li><a href="#"><img src="{{asset('app/img/icon_home_gray.png')}}" alt="Icon Home & Life" /> <p>Home & Life</p></a></li>
                                <li><a href="#"><img src="{{asset('app/img/icon_sport_gray.png')}}" alt="Icon Sports & Outdoors" /> <p>Sports & Outdoors</p></a></li>
                                <li><a href="#"><img src="{{asset('app/img/icon_auto_gray.png')}}" alt="Icon Auto & Moto" /> <p>Auto & Moto</p></a></li>
                                <li><a href="#"><img src="{{asset('app/img/icon_voucher_gray.png')}}" alt="Icon Voucher Service" /> <p>Voucher Service</p></a></li>
                            </ul>
                        </div>
                        <!-- Slide -->
                        <div class="clearfix slide-box-home slide-v3 relative top-margin-15-default left-margin-15-default">
                            <div class="clearfix slide-home owl-carousel owl-theme">
                                <div class="item"><a href="#"><img src="{{asset('app/img/slide_v3.jpg')}}" style="width: 685px;height: 385px;" alt="Banner Home V3"></a></div>
                                <div class="item"><a href="#"><img src="{{asset('app/img/banner_v3_1-min.jpg')}}" style="width: 685px;height: 385px;" alt="Banner Home V3"></a></div>
                            </div>
                        </div>
                        <div class="category-image top-margin-15-default left-margin-15-default float-left border">
                            <div class="owl-carousel owl-theme">
                                <div class=" category-image-slide relative full-width">
                                    <div class="clearfix effect-hover-zoom overfollow-hidden img-categorys-slide center-vertical-image relative">
                                        <img class="animate-default" src="img/image_slide_top_1-min.png" alt="Image Shore" />
                                        <a href="#"></a>
                                    </div>
                                    <a href="#">
                                        <p class="uppercase bold">Mobile</p>
                                    </a>
                                </div>
                                <div class=" category-image-slide relative full-width">
                                    <div class="clearfix effect-hover-zoom overfollow-hidden img-categorys-slide center-vertical-image relative">
                                        <img class="animate-default" src="img/image_slide_top_2-min.png" alt="Image Shore" />
                                        <a href="#"></a>
                                    </div>
                                    <a href="#">
                                        <p class="uppercase bold">Accessory</p>
                                    </a>
                                </div>
                                <div class=" category-image-slide relative full-width">
                                    <div class="clearfix effect-hover-zoom overfollow-hidden img-categorys-slide center-vertical-image relative">
                                        <img class="animate-default" src="{{asset('app/img/image_slide_top_3-min.jpg')}}" style="width: 120px;height: 120px;" alt="Image Shore" />
                                        <a href="#"></a>
                                    </div>
                                    <a href="#">
                                        <p class="uppercase bold">Camera</p>
                                    </a>
                                </div>
                                <div class=" category-image-slide relative full-width">
                                    <div class="clearfix effect-hover-zoom overfollow-hidden img-categorys-slide center-vertical-image relative">
                                        <img class="animate-default" src="img/image_shore.png" alt="Image Shore" />
                                        <a href="#"></a>
                                    </div>
                                    <a href="#">
                                        <p class="uppercase bold">Shoes</p>
                                    </a>
                                </div>
                                <div class=" category-image-slide relative full-width">
                                    <div class="clearfix effect-hover-zoom overfollow-hidden img-categorys-slide center-vertical-image relative">
                                        <img class="animate-default" src="img/image_slide_top_4-min.png" alt="Image Shore" />
                                        <a href="#"></a>
                                    </div>
                                    <a href="#">
                                        <p class="uppercase bold">Bags</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix box-banner-small-v3 top-margin-15-default left-margin-15-default box-banner-small">
                            <div class="effect-layla banner-v3-home center-vertical-image zoom-image-hover relative bottom-margin-15-default">
                                <img src="img/banner_slide_v3.png" alt="">
                                <a href="#"></a>
                            </div>
                            <div class="effect-layla banner-v3-home center-vertical-image zoom-image-hover relative">
                                <img src="img/banner_slide_v3_1-min.png" alt="">
                                <a href="#"></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Menu & Slide -->
                </div>
            </div>
        </div>
        <!-- Box Banner Percent 3 -->
        <div class=" banner-percent-3 container-web">
            <div class=" container">
                <div class="row">
                    <div class="banner-pecent-3-top bottom-margin-15-default display-table">
                        <div class="effect-bubba zoom-image-hover overfollow-hidden float-left relative right-margin-15-default ">
                            <img src="img/banner_percent_3.png" class="" alt="Banner Percent" />
                            <a href="#"></a>
                        </div>
                        <div class="effect-bubba zoom-image-hover overfollow-hidden float-left relative">
                            <img src="img/banner_pecent_3_1-min.png" class="" alt="Banner Percent" />
                            <a href="#"></a>
                        </div>
                        <div class="effect-bubba zoom-image-hover overfollow-hidden float-left relative left-margin-15-default">
                            <img src="img/banner_pecent_3_2-min.png" class="" alt="Banner Percent" />
                            <a href="#"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Percent 3 -->
        <!-- List Logo Top -->
        <div class="container-web">
            <div class="container">
                <div class="row list-logo-top-v3">
                    <ul class="clear-margin border-collapsed-box">
                        <li class="border-collapsed-element"><a href="#"><img src="img/logo_3.png" alt="Logo"></a></li>
                        <li class="border-collapsed-element"><a href="#"><img src="img/logo_7.png" alt="Logo"></a></li>
                        <li class="border-collapsed-element"><a href="#"><img src="img/logo_4.png" alt="Logo"></a></li>
                        <li class="border-collapsed-element"><a href="#"><img src="img/logo_8.png" alt="Logo"></a></li>
                        <li class="border-collapsed-element"><a href="#"><img src="img/logo_5.png" alt="Logo"></a></li>
                        <li class="border-collapsed-element"><a href="#"><img src="img/logo_9.png" alt="Logo"></a></li>
                        <li class="border-collapsed-element"><a href="#"><img src="img/logo_6.png" alt="Logo" /></a></li>
                        <li class="border-collapsed-element"><a href="#"><img src="img/logo_10.png" alt="Logo" /></a></li>
                        <li class="border-collapsed-element"><a href="#"><img src="img/logo_1.png" alt="Logo" /></a></li>
                        <li class="border-collapsed-element"><a href="#"><img src="img/logo_11.png" alt="Logo" /></a></li>
                        <li class="border-collapsed-element"><a href="#"><img src="img/logo_2.png" alt="Logo" /></a></li>
                        <li class="border-collapsed-element"><a href="#"><img src="img/logo_12.png" alt="Logo" /></a></li>
                        <li class="border-collapsed-element"><a href="#"><img src="img/logo_13-min.png" alt="Logo"></a></li>
                        <li class="border-collapsed-element"><a href="#"><img src="img/logo_14-min.png" alt="Logo"></a></li>
                        <li class="border-collapsed-element"><a href="#"><img src="img/logo_4.png" alt="Logo"></a></li>
                        <li class="border-collapsed-element"><a href="#"><img src="img/logo_15-min.png" alt="Logo"></a></li>
                        <li class="border-collapsed-element"><a href="#"><img src="img/logo_16-min.png" alt="Logo"></a></li>
                        <li class="border-collapsed-element"><a href="#"><img src="img/logo_17-min.png" alt="Logo"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End List Logo Top -->
        <!-- Product Box -->
        <div class="top-margin-default container-web">
            <div class=" container">
                <div class="row">
                    <div class="clearfix title-box title-box-v3 full-width">
                        <div class="clearfix name-title-box title-category title-green-bd relative">
                            <img src="img/icon_food_color.png" alt="Icon Food" class="absolute">
                            <p class="text-default-color">fresh food</p>
                        </div>
                        <div class="clearfix menu-title-box capitalize">
                            <ul>
                                <li><a href="javascript:;" onclick="showBoxCateHomeByID('#confectionery','.box-food-content')">Confectionery</a></li>
                                <li><a href="javascript:;" onclick="showBoxCateHomeByID('#milk-cream','.box-food-content')">Milk & Cream</a></li>
                                <li><a href="javascript:;" onclick="showBoxCateHomeByID('#dry-food','.box-food-content')">Dry Food</a></li>
                                <li><a href="javascript:;" onclick="showBoxCateHomeByID('#vegetables','.box-food-content')">Vegetables</a></li>
                                <li><a href="javascript:;" onclick="showBoxCateHomeByID('#drinks','.box-food-content')">Drinks</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=" bottom-margin-default full-width">
                        <!-- Banner Home V3 -->
                        <div class="effect-bubba zoom-image-hover overfollow-hidden banner-category banner-category-v3 float-left relative border no-border-t no-border-l no-border-r">
                            <img src="img/banner_home_v3-min.png" alt="Banner Home V3">
                            <a href="#"></a>
                        </div>
                        <!-- List Product V3 -->
                        <div class="clearfix box-content-product-home-v3 float-left relative">
                            <div class="box-food-content relative animate-default active-box-category hidden-content-box border-collapsed-box" id="confectionery">
                                <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_9-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Endeavor Daytrip Backpack</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_15-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Impulse Duffle</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_10-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">MH01-Black</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_8-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Wayfarer Messenger Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_16-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">MH02-Black09</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_17-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Voyage Yoga Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                            <div class="box-food-content relative animate-default hidden-content-box border-collapsed-box" id="milk-cream">
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_8-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Wayfarer Messenger Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_16-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">MH02-Black09</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_9-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Endeavor Daytrip Backpack</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_15-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Impulse Duffle</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_10-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">MH01-Black</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_17-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Voyage Yoga Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                            <div class="box-food-content relative animate-default hidden-content-box border-collapsed-box" id="dry-food">
                                <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_9-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Endeavor Daytrip Backpack</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_8-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Wayfarer Messenger Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_16-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">MH02-Black09</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_15-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Impulse Duffle</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_10-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">MH01-Black</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_17-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Voyage Yoga Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                            <div class="box-food-content relative animate-default hidden-content-box border-collapsed-box" id="vegetables">
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_15-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Impulse Duffle</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_10-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">MH01-Black</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_9-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Endeavor Daytrip Backpack</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_8-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Wayfarer Messenger Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_16-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">MH02-Black09</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_17-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Voyage Yoga Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                            <div class="box-food-content relative animate-default hidden-content-box border-collapsed-box" id="drinks">
                                <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_9-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Endeavor Daytrip Backpack</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_10-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">MH01-Black</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_8-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Wayfarer Messenger Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_16-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">MH02-Black09</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_17-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Voyage Yoga Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_15-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Impulse Duffle</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- List Logo V3 -->
                        <div class=" clear-padding list-logo-category-v2 list-logo-category full-width border no-border-t">
                            <ul>
                                <li><a href="#"><img src="img/logo_3.png" alt="Logo"></a></li>
                                <li><a href="#"><img src="img/logo_4.png" alt="Logo"></a></li>
                                <li><a href="#"><img src="img/logo_5.png" alt="Logo"></a></li>
                                <li><a href="#"><img src="img/logo_6.png" alt="Logo"></a></li>
                                <li><a href="#"><img src="img/logo_1.png" alt="Logo"></a></li>
                                <li><a href="#"><img src="img/logo_2.png" alt="Logo"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Product Box -->
        <!-- Banner Full With -->
        <div class="clearfix relative full-width bottom-margin-default">
            <div class="clearfix container-web">
                <div class=" container banner_full_width">
                    <div class="row overfollow-hidden banners-effect5 relative">
                        <img src="img/banner_full_w.png" alt="Banner Full Width . . .">
                        <a href="#"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Full With -->
        <!-- Product Box -->
        <div class=" container-web">
            <div class=" container">
                <div class="row">
                    <div class="clearfix title-box title-box-v3 full-width">
                        <div class="clearfix name-title-box title-category title-jungle-green-bd relative">
                            <img src="{{asset('app/img/icon_phone_color.png')}}" alt="Icon Food" class="absolute">
                            <p class="text-default-color">mobile & tablet</p>
                        </div>
                        <div class="clearfix menu-title-box capitalize">
                            <ul>
                                <li><a onclick="showBoxCateHomeByID('#smart-phone','.box-mobile-content')" href="javascript:;">Smart phone</a></li>
                                <li><a onclick="showBoxCateHomeByID('#tablet','.box-mobile-content')" href="javascript:;">Tablet</a></li>
                                <li><a onclick="showBoxCateHomeByID('#smart-watch','.box-mobile-content')" href="javascript:;">Smart Watch</a></li>
                                <li><a onclick="showBoxCateHomeByID('#case','.box-mobile-content')" href="javascript:;">Case</a></li>
                                <li><a onclick="showBoxCateHomeByID('#gadget','.box-mobile-content')" href="javascript:;">Gadget</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=" bottom-margin-default full-width">
                        <!-- Banner Home V3 -->
                        <div class="effect-bubba zoom-image-hover overfollow-hidden banner-category banner-category-v3 float-left relative border no-border-t no-border-l no-border-r">
                            <img src="img/banner_home_v3_1-min.png" alt="Banner Home V3">
                            <a href="#"></a>
                        </div>
                        <!-- List Product V3 -->
                        <div class="clearfix box-content-product-home-v3 float-left relative">
                            <div class="box-mobile-content border-collapsed-box animate-default hidden-content-box active-box-category" id="smart-phone">
                                <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_4-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Cras tempus molestie</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_5-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Mauris varius</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_6-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Printed Summer Dress</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_7-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Sprite Yoga Straps1</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_18-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Voyage Yoga Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_19-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Printed Summer Dress</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                            <div class="box-mobile-content border-collapsed-box animate-default hidden-content-box" id="tablet">
                                <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_4-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Cras tempus molestie</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_7-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Sprite Yoga Straps1</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_18-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Voyage Yoga Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_5-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Mauris varius</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_6-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Printed Summer Dress</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_19-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Printed Summer Dress</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                            <div class="box-mobile-content border-collapsed-box animate-default hidden-content-box" id="smart-watch">
                                <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_4-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Cras tempus molestie</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_18-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Voyage Yoga Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_19-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Printed Summer Dress</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_5-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Mauris varius</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_6-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Printed Summer Dress</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_7-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Sprite Yoga Straps1</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                            <div class="box-mobile-content border-collapsed-box animate-default hidden-content-box" id="case">
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_7-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Sprite Yoga Straps1</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_18-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Voyage Yoga Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_4-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Cras tempus molestie</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_5-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Mauris varius</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_6-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Printed Summer Dress</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_19-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Printed Summer Dress</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                            <div class="box-mobile-content border-collapsed-box animate-default hidden-content-box" id="gadget">
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_6-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Printed Summer Dress</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_7-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Sprite Yoga Straps1</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_4-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Cras tempus molestie</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_5-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Mauris varius</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_18-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Voyage Yoga Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_19-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Printed Summer Dress</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- List Logo V3 -->
                        <div class=" clear-padding list-logo-category-v2 list-logo-category full-width border no-border-t">
                            <ul>
                                <li><a href="#"><img src="img/logo_3.png" alt="Logo"></a></li>
                                <li><a href="#"><img src="img/logo_4.png" alt="Logo"></a></li>
                                <li><a href="#"><img src="img/logo_5.png" alt="Logo"></a></li>
                                <li><a href="#"><img src="img/logo_6.png" alt="Logo"></a></li>
                                <li><a href="#"><img src="img/logo_1.png" alt="Logo"></a></li>
                                <li><a href="#"><img src="img/logo_2.png" alt="Logo"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Product Box -->
        <!-- Banner Full With -->
        <div class="clearfix relative full-width bottom-margin-default">
            <div class="clearfix container-web">
                <div class=" container banner_full_width">
                    <div class="row relative banners-effect5 overfollow-hidden">
                        <img src="img/banner_full_w_1.png" alt="Banner Full Width . . .">
                        <a href="#"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Full With -->
        <!-- Product Box -->
        <div class=" container-web">
            <div class=" container">
                <div class="row">
                    <div class="clearfix title-box title-box-v3 full-width">
                        <div class="clearfix name-title-box title-category title-turquoise-bd relative">
                            <img src="img/icon_electric_color.png" alt="Icon Food" class="absolute">
                            <p class="text-default-color">electric</p>
                        </div>
                        <div class="clearfix menu-title-box capitalize">
                            <ul>
                                <li><a onclick="showBoxCateHomeByID('#television','.box-electric-content')" href="javascript:;">television</a></li>
                                <li><a onclick="showBoxCateHomeByID('#laptop','.box-electric-content')" href="javascript:;">laptop</a></li>
                                <li><a onclick="showBoxCateHomeByID('#camera','.box-electric-content')" href="javascript:;">camera</a></li>
                                <li><a onclick="showBoxCateHomeByID('#audio','.box-electric-content')" href="javascript:;">audio</a></li>
                                <li><a onclick="showBoxCateHomeByID('#accessories','.box-electric-content')" href="javascript:;">Accessories</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=" bottom-margin-default full-width">
                        <!-- Banner Home V3 -->
                        <div class="effect-bubba zoom-image-hover overfollow-hidden banner-category banner-category-v3 float-left relative border no-border-t no-border-l no-border-r">
                            <img src="img/banner_home_v3_2-min.png" alt="Banner Home V3">
                            <a href="#"></a>
                        </div>
                        <!-- List Product V3 -->
                        <div class="clearfix box-content-product-home-v3 float-left relative">
                            <div class="border-collapsed-box active-box-category hidden-content-box box-electric-content animate-default" id="television">
                                <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_11-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Orange Shopper</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_12-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Red Travel Handbag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_13-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Sample Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_14-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Dark Flower Shoe</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_20-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Prestige Lite Heels</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_21-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Metropolis Classy</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                            <div class="border-collapsed-box hidden-content-box box-electric-content animate-default" id="laptop">
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_13-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Sample Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_14-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Dark Flower Shoe</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_11-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Orange Shopper</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_12-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Red Travel Handbag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_20-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Prestige Lite Heels</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_21-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Metropolis Classy</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                            <div class="border-collapsed-box hidden-content-box box-electric-content animate-default" id="camera">
                                <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_11-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Orange Shopper</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_20-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Prestige Lite Heels</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_21-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Metropolis Classy</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_12-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Red Travel Handbag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_13-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Sample Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_14-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Dark Flower Shoe</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                            <div class="border-collapsed-box hidden-content-box box-electric-content animate-default" id="audio">
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_13-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Sample Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_14-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Dark Flower Shoe</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_11-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Orange Shopper</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_12-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Red Travel Handbag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_20-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Prestige Lite Heels</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_21-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Metropolis Classy</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                            <div class="border-collapsed-box hidden-content-box box-electric-content animate-default" id="accessories">
                                <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_11-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Orange Shopper</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_13-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Sample Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_14-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Dark Flower Shoe</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_20-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Prestige Lite Heels</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_12-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Red Travel Handbag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_21-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Metropolis Classy</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" clear-padding list-logo-category-v2 list-logo-category full-width border no-border-t">
                            <ul>
                                <li><a href="#"><img src="img/logo_3.png" alt="Logo"></a></li>
                                <li><a href="#"><img src="img/logo_4.png" alt="Logo"></a></li>
                                <li><a href="#"><img src="img/logo_5.png" alt="Logo"></a></li>
                                <li><a href="#"><img src="img/logo_6.png" alt="Logo"></a></li>
                                <li><a href="#"><img src="img/logo_1.png" alt="Logo"></a></li>
                                <li><a href="#"><img src="img/logo_2.png" alt="Logo"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Product Box -->
        <!-- Banner Half Website -->
        <div class=" relative banner-half-web full-width bottom-margin-default">
            <div class="clearfix container-web">
                <div class=" container">
                    <div class="row">
                        <div class="clearfix content-left col-md-6 col-sm-6 col-xs-12 zoom-image-hover overfollow-hidden">
                            <div class="overfollow-hidden effect-oscar relative">
                                <img class="max-width" src="img/banner_halt.png" alt="Banner . . ." />
                                <a href="#"></a>
                            </div>
                        </div>
                        <div class="clearfix content-right col-md-6 col-sm-6 col-xs-12 zoom-image-hover overfollow-hidden">
                            <div class="overfollow-hidden effect-oscar relative">
                                <img class="max-width" src="img/banner_percent_2.png" alt="Banner . . ." />
                                <a href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Category Percent 2 -->
        <div class=" full-width category-percent-two bottom-margin-default">
            <div class="clearfix container-web">
                <div class=" container">
                    <div class="row">
                        <div class=" clearfix content-left col-md-6 col-sm-6">
                            <!-- Title Product -->
                            <div class="clearfix title-box full-width border">
                                <div class="clearfix name-title-box title-category title-gold-bg relative">
                                    <img src="img/icon_fashion.png" alt="Icon Fashion" class="absolute" />
                                    <p>fashion</p>
                                </div>
                                <div class="clearfix menu-title-box">
                                    <p class="view-all-product-category title-hover-red"><a href="#" class="animate-default">view all</a></p>
                                </div>
                            </div>
                            <div class=" banner-percent-product zoom-image-hover overfollow-hidden effect-oscar relative">
                                <img src="img/banner_product_percent.png" class="max-width" alt="Image . . ." />
                                <a href="#"></a>
                            </div>
                            <!-- Content Product Box -->
                            <div class="clearfix product-percent-content border-collapsed-box full-width">
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_1-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Voyage Yoga Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_2-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">MH02-Black09</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_3-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Impulse Duffle2</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_4-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Rival Field Messenger</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_5-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Impulse Duffle</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_6-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Rival Field Messenger</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" clearfix content-right col-md-6 col-sm-6">
                            <!-- Title Product -->
                            <div class="clearfix title-box full-width border">
                                <div class="clearfix name-title-box title-category title-violet-bg relative">
                                    <img src="img/icon_health.png" alt="Icon Health & Beauty" class="absolute" />
                                    <p>health & beauty</p>
                                </div>
                                <div class="clearfix menu-title-box">
                                    <p class="view-all-product-category title-hover-red"><a href="#" class="animate-default">view all</a></p>
                                </div>
                            </div>
                            <div class=" banner-percent-product zoom-image-hover overfollow-hidden effect-oscar relative">
                                <img src="img/banner_p_2_1.png" class="max-width" alt="Image . . ." />
                                <a href="#"></a>
                            </div>
                            <!-- Content Product Box -->
                            <div class="clearfix product-percent-content border-collapsed-box full-width">
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_7-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Cras sed quam</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_8-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Cras tempus molestie</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_9-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Nullam lectus</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_10-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">expedita lirope</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_11-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">corrupti</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_12-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">accusamus odiote</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Product Category Percent 2 -->
        <!-- Product Category Percent 2 -->
        <div class=" full-width category-percent-two bottom-margin-default">
            <div class="clearfix container-web">
                <div class=" container">
                    <div class="row">
                        <div class=" clearfix content-left col-md-6 col-sm-6">
                            <!-- Title Product -->
                            <div class="clearfix title-box full-width border">
                                <div class="clearfix name-title-box title-category title-magenta-bg relative">
                                    <img src="img/icon_mother.png" alt="Icon Mother" class="absolute">
                                    <p>mother & baby</p>
                                </div>
                                <div class="clearfix menu-title-box">
                                    <p class="view-all-product-category title-hover-red"><a href="#" class="animate-default">view all</a></p>
                                </div>
                            </div>
                            <div class=" banner-percent-product overfollow-hidden zoom-image-hover effect-oscar relative">
                                <img src="img/banner_p_2_2.png" class="max-width" alt="Image . . ." />
                                <a href="#"></a>
                            </div>
                            <!-- Content Product Box -->
                            <div class="clearfix product-percent-content border-collapsed-box full-width">
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_13-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Aliquam Consequat</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_14-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Aliquam Consequat</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_15-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Cas Meque Metus</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_16-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Donec Ac Tempus</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_17-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Donec Non Est</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_18-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Letraset Sheets</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" clearfix content-right col-md-6 col-sm-6">
                            <!-- Title Product -->
                            <div class="clearfix title-box full-width border">
                                <div class="clearfix name-title-box title-category title-orchild-bg relative">
                                    <img src="img/icon_auto.png" alt="Icon Auto" class="absolute">
                                    <p>auto & moto</p>
                                </div>
                                <div class="clearfix menu-title-box">
                                    <p class="view-all-product-category title-hover-red"><a href="#" class="animate-default">view all</a></p>
                                </div>
                            </div>
                            <div class=" banner-percent-product overfollow-hidden zoom-image-hover effect-oscar relative">
                                <img src="img/banner_p_2_3.png" class="max-width" alt="Image . . ." />
                                <a href="#"></a>
                            </div>
                            <!-- Content Product Box -->
                            <div class="clearfix product-percent-content border-collapsed-box full-width">
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_19-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Fusce Aliquam</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_20-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Canmentum bar risus</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_21-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Ecurna sceleriq</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_22-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Odales enimn</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_23.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Placerat ultriciesus</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_24.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Placerat ligula</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Product Category Percent 2 -->
        <!-- Banner Full With -->
        <div class=" relative full-width bottom-margin-default">
            <div class="clearfix container-web">
                <div class=" container banner_full_width">
                    <div class="row overfollow-hidden banners-effect5 relative">
                        <img src="img/banner_full_width_v3-min.png" alt="Banner Full Width . . .">
                        <a href="#"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Full With -->
    </div>
    <!-- End Content Box -->
@endsection

@section('footer')
    <footer class=" bg-gray full-width border no-border-r no-border-l footer-v3 no-border-b">
        <div class="clearfix container-web relative">
            <div class=" container clear-padding">
                <div class="row">
                    <!-- Support -->
                    <div class="clearfix support-box support-box-v3 full-width">
                        <div class="container-web clearfix">
                            <div class=" container ">
                                <div class="row">
                                    <div class=" support-box-info relative col-md-3 col-sm-3 col-xs-6">
                                        <img src="{{asset('app/img/icon_free_ship.png')}}" alt="Icon Free Ship" class="float-left" />
                                        <p class="float-left">free shipping</p>
                                        <p class="float-left">on order over $500</p>
                                    </div>
                                    <div class=" support-box-info relative col-md-3 col-sm-3 col-xs-6">
                                        <img src="{{asset('app/img/icon_support.png')}}" alt="Icon Supports" class="float-left">
                                        <p class="float-left">support</p>
                                        <p class="float-left">life time support 24/7</p>
                                    </div>
                                    <div class=" support-box-info relative col-md-3 col-sm-3 col-xs-6">
                                        <img src="{{asset('app/img/icon_patner.png')}}" alt="Icon partner" class="float-left">
                                        <p class="float-left">help partner</p>
                                        <p class="float-left">help all aspects</p>
                                    </div>
                                    <div class=" support-box-info relative col-md-3 col-sm-3 col-xs-6">
                                        <img src="{{asset('app/img/icon_phone_big.png')}}" alt="Icon Phone Tablet" class="float-left">
                                        <p class="float-left">contact with us</p>
                                        <p class="float-left">+07 (0) 7782 9137</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Support Box -->
                </div>
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
        <!-- Box Social -->
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
                            <a href="#"><img src="{{asset('app/img/social_tw-min.png')}}" alt="Icon Social Twiter"></a>
                            <a href="#"><img src="{{asset('app/img/social_fa-min.png')}}" alt="Icon Social Facebook"></a>
                            <a href="#"><img src="{{asset('app/img/social_int-min.png')}}" alt="Icon Social Instagram"></a>
                            <a href="#"><img src="{{asset('app/img/social_yt-min.png')}}" alt="Icon Social Youtube" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Box Social -->
        <div class=" bottom-footer full-width">
            <div class="clearfix container-web">
                <div class=" container">
                    <div class="row">
                        <div class="clearfix col-md-7 clear-padding copyright">
                            <p>Copyright ?? 2018 by EngoCreative. All Rights Reserved.</p>
                        </div>
                        <div class="clearfix footer-icon-bottom col-md-5 float-right clear-padding">
                            <div class="icon_logo_footer float-right">
                                <img src="{{asset('app/img/image_payment_footer-min.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection
