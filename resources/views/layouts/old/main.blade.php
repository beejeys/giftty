<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Giftty</title>
    <meta name="description" content="">
    <meta name="robots" content="noindex, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.ico')}}">


    <!-- CSS files
    ============================================ -->

    <!-- Boostrap stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/pe-icon-7-stroke.css')}}">

    <!-- Plugins stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">

    <!-- Master stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

    <!-- modernizr JS
    ============================================ -->
    <script src="{{asset('assets/js/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>

    <!--[if lt IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please upgrade your browser to improve your experience.</p>
    <![endif]-->

    <!-- Start of Whole Site Wrapper with mobile menu support -->
    <div id="whole" class="whole-site-wrapper">

        <!-- Start of Newsletter Popup -->
        <div id="newsletter_popup" class="newsletter-popup">
            <div class="popup-container">
                <div class="popup-close">
                    <span class="p-close"><span>X</span></span>
                </div> <!-- end of popup-close -->

                <div class="popup-area text-center">
                    <h2>Subscribe to our Newsletter</h2>
                    <div class="popup-body">
                        <p>Subscribe to the Giftty mailing list to receive updates on new arrivals, special offers and other discount information.</p>
                        <div class="subscribe-form-group">
                            <form action="#">
                                <div class="input-group">
                                    <input type="text" placeholder="Enter your email address" required>
                                    <button class="default-btn secondary" type="submit">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div> <!-- end of popup-body -->

                    <div class="popup-footer">
                        <div class="form-check">
                            <div class="custom-checkbox">
                                <input class="form-check-input" type="checkbox" id="cancel_popup">
                                <span class="checkmark"></span>
                                <label class="form-check-label" for="cancel_popup">Don't show this popup again</label>
                            </div>
                        </div>
                    </div> <!-- end of popup-footer -->
                </div> <!-- end of popup-area -->
            </div> <!-- end of popup-container -->
        </div>
        <!-- End of Newsletter Popup -->

        <!-- Start of Header -->
        <header class="header bgc-white header-type-1">
			<div class="top-bar">
				<div class="container">
					<div class="row">
						<div class="col-12 order-2 col-sm-12 order-sm-2 col-md-8 order-md-1 align-self-center">
							<p>Mid-season sale up to 20% OFF. Use code "SALEOFF20"</p>
						</div>
						<div class="col-12 order-1 col-sm-12 order-sm-1 col-md-4 order-md-2">
                            <ul class="list-inline">
                                <li class="currency list-inline-item">
                                    <div class="btn-group">
                                        <button class="btn-link dropdown-toggle"> USD $<i class="fa fa-angle-down"></i></button>
                                        <div class="dropdown-menu">
                                            <ul>
                                               <li><a href="#">Euro €</a></li>
                                               <li><a href="#" class="current">USD $</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="language list-inline-item">
                                    <div class="btn-group">
                                        <button class="btn-link dropdown-toggle">English <i class="fa fa-angle-down"></i></button>
                                        <div class="dropdown-menu">
                                            <ul>
                                               <li><a href="#" class="current"><img src="{{asset('assets/images/icons/en-gb.png')}}" alt="Icons"> English</a></li>
                                               <li><a href="#"><img src="{{asset('assets/images/icons/fr-fr.png')}}" alt="Icons"> Français</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
						</div>
					</div>
				</div> <!-- end of container -->
			</div> <!-- end of top-bar -->

			<div class="header-area">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-6 order-2 col-sm-6 order-sm-2 col-md-4 order-md-1 col-lg-3">
                            <div class="header-search-area">
                            	<form action="#">
                            		<div class="input-group">
			                            <input type="text" class="form-control" placeholder="Search entire store here ...">
			                            <div class="input-group-append">
			                            	<button class="header-search-btn" type="submit"><i class="pe-7s-search"></i></button>
			                            </div>
                            		</div>
	                            </form>
                            </div>
						</div>
						<div class="col-12 order-1 col-sm-12 order-sm-1 col-md-4 order-md-2 col-lg-6">
                            <div class="logo">
                                <a href="index.html"><img src="{{asset('assets/images/logo.png')}}" alt="Logo" class="img-fluid"></a>
                            </div>
						</div>
						<div class="col-6 order-3 col-sm-6 col-md-4 col-lg-3">
                            <div class="header-cart-area">
                                <div class="header-cart">
                                    <div class="btn-group">
                                        <button class="btn-link dropdown-toggle icon-cart">
                                            <i class="pe-7s-shopbag"></i>
                                            <span class="count-style">2</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <div class="shopping-cart-content">
                                                <ul class="list-unstyled">
                                                    <li class="single-cart-item media">
                                                        <div class="shopping-cart-img mr-4">
                                                            <a href="#">
                                                                <img class="img-fluid" alt="Cart Item" src="{{asset('assets/images/cart/cart-1.jpg')}}">
                                                                <span class="product-quantity">1x</span>
                                                            </a>
                                                        </div>
                                                        <div class="shopping-cart-title media-body">
                                                            <h4><a href="#">Rival Field Messenger</a></h4>
                                                            <p class="cart-price">$120.00</p>
                                                            <div class="product-attr">
                                                                <span>Size: S</span>
                                                                <span>Color: Black</span>
                                                            </div>
                                                        </div>
                                                        <div class="shopping-cart-delete">
                                                            <a href="#"><i class="ion ion-md-close"></i></a>
                                                        </div>
                                                    </li>
                                                    <li class="single-cart-item media">
                                                        <div class="shopping-cart-img mr-4">
                                                            <a href="#">
                                                                <img class="img-fluid" alt="Cart Item" src="{{asset('assets/images/cart/cart-2.jpg')}}">
                                                                <span class="product-quantity">2x</span>
                                                            </a>
                                                        </div>
                                                        <div class="shopping-cart-title media-body">
                                                            <h4><a href="#">Fusion Backpack</a></h4>
                                                            <p class="cart-price">$200.00</p>
                                                            <div class="product-attr">
                                                                <span>Color: White</span>
                                                                <span>Accessories: Yes</span>
                                                            </div>
                                                        </div>
                                                        <div class="shopping-cart-delete">
                                                            <a href="#"><i class="ion ion-md-close"></i></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="shopping-cart-total">
                                                    <h4>Sub-Total : <span>$320.00</span></h4>
                                                    <h4>Total : <span>$320.00</span></h4>
                                                </div>
                                                <div class="shopping-cart-btn">
                                                    <a class="default-btn" href="cart.html">view cart</a>
                                                    <a class="default-btn" href="checkout.html">checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <ul class="list-inline">
                                    <li class="top-links list-inline-item">
                                        <div class="btn-group">
                                            <button class="btn-link dropdown-toggle"><i class="pe-7s-config"></i></button>
                                            <div class="dropdown-menu">
                                                <ul>
                                                   <li><a href="register.html">Register</a></li>
                                                   <li><a href="{{url('seller/login')}}">Login</a></li>
                                                   <li><a href="my-account.html">My Account</a></li>
                                                   <li><a href="wishlist.html">Wishlist</a></li>
                                                   <li><a href="checkout.html">Checkout</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div> <!-- end of header-cart-area -->
						</div>
					</div>
				</div> <!-- end of container -->
			</div> <!-- end of header-top -->



            <!-- Start of Main and Mobile Navigation -->
            <div class="main-nav-area bgc-white">
                <div class="container">
                    <nav id="main_nav" class="stellarnav">
                        <ul>
                            <li><a href="index.html"><span>Home</span></a>
                                <ul>
                                    <li><a href="index.html">Home Page 1</a></li>
                                    <li><a href="index-2.html">Home Page 2</a></li>
                                    <li><a href="index-3.html">Home Page 3</a></li>
                                    <li><a href="index-4.html">Home Page 4</a></li>
                                    <li><a href="index-5.html">Home Page 5</a></li>
                                </ul>
                            </li>
                            <li class="mega" data-columns="4"><a href="shop-grid.html"><span>Shop</span></a>
                                <ul class="mega-container">
                                    <li><a href="#" class="mega-menu-title"><h3>Shop pages 01</h3></a>
                                        <ul>
                                            <li><a href="shop-grid.html">Shop Grid</a></li>
                                            <li><a href="shop-list.html">Shop List</a></li>
                                            <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" class="mega-menu-title"><h3>Shop pages 02</h3></a>
                                        <ul>
                                            <li><a href="shop-fullwidth.html">Shop Full Width</a></li>
                                            <li><a href="single-product.html">Single Product Page</a></li>
                                            <li><a href="compare.html">Product Compare</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" class="mega-menu-title"><h3>Shop pages 03</h3></a>
                                        <ul>
                                            <li><a href="cart.html">Cart Page</a><li>
                                            <li><a href="checkout.html">Checkout Page</a></li>
                                            <li><a href="wishlist.html">Wishlist Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="last"><a href="#" class="mega-menu-title"><h3>Shop pages 04</h3></a>
                                        <ul>
                                            <li><a href="my-account.html">My Account</a></li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="register.html">Register</a></li>
                                        </ul>
                                    </li>
                                    <li class="fullwidth-banner">
                                    	<a href="#"><img src="{{asset('assets/images/banners/menu-banner.jpg')}}" alt="Menu Banner"></a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="blog.html"><span>Blog Pages</span></a>
                                <ul>
                                    <li><a href="blog.html">Blog Full Width</a></li>
                                    <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                    <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="faqs.html"><span>Utility Pages</span></a>
                                <ul>
                                    <li><a href="faqs.html">FAQs Page</a></li>
                                    <li><a href="404.html">404 Page</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html"><span>About Us</span></a></li>
                            <li><a href="contact.html"><span>Contact Us</span></a></li>
                        </ul>
                    </nav>
                </div> <!-- end of container -->
            </div>
            <!-- End of Main and Mobile Navigation -->
        </header>
        <!-- End of Header -->

        <div class="fixed-header-space"></div> <!-- empty placeholder div for Fixed Menu bar height-->

        <!-- Start of Main Content Wrapper -->
        <main id="content" class="main-content-wrapper">

            <!-- Start of Primary Slider Section -->
            <section class="primary-slider-section mb0 pos-r">
                <div id="primary_slider" class="swiper-container slider-type-1">

                    <!-- Slides -->
                    <div class="swiper-wrapper">
                        <div class="swiper-slide bg-img-wrapper">
                            <div class="slide-inner image-placeholder">
                                <img src="{{asset('assets/images/slider/home-1/slide-1.jpg')}}" class="visually-hidden" alt="Slider Image">                          
                                <div class="slide-progress"></div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="slide-content layer-animation-1">
                                                <p class="promo-title"><span>limited edition</span> Sale Offer 20% Off This Week</p>
                                                <h1 class="main-title"><span>Giftty Amazing</span> <span>Sport Sneakers 2018</span></h1>
                                                <p class="subtitle">Light knit upper adapts to the shape of your foot for flexible and natural movement.</p>
                                                <div class="slide-button">
                                                    <a class="default-btn" href="shop-grid.html" title="Shop Now">Shop Now</a>
                                                </div>
                                            </div> <!-- end of slide-content -->
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end of slider-inner -->
                        </div> <!-- end of swiper-slide -->

                        <div class="swiper-slide bg-img-wrapper">
                            <div class="slide-inner image-placeholder">
                                <img src="{{asset('assets/images/slider/home-1/slide-2.jpg')}}" class="visually-hidden" alt="Slider Image">
                                <div class="slide-progress"></div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="slide-content layer-animation-2">
                                                <p class="promo-title"><span>limited edition</span> Sale Offer 20% Off This Week</p>
                                                <h1 class="main-title"><span>Giftty Air Zoom</span> <span>Mariah Flyknit Racer</span></h1>
                                                <p class="subtitle">The Nike Air Zoom Pegasus 34 Men's Running Shoe features an updated, lighter Flymesh material that helps reduce heat build-up when you run.</p>
                                                <div class="slide-button">
                                                    <a class="default-btn" href="shop-grid.html" title="Shop Now">Shop Now</a>
                                                </div>
                                            </div> <!-- end of slide-content -->
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end of slider-inner -->
                        </div> <!-- end of swiper-slide -->

                        <div class="swiper-slide bg-img-wrapper">
                            <div class="slide-inner image-placeholder">
                                <img src="{{asset('assets/images/slider/home-1/slide-3.jpg')}}" class="visually-hidden" alt="Slider Image">
                                <div class="slide-progress"></div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="slide-content white-scheme layer-animation-3">
                                                <p class="promo-title"><span>Hot Sale OFF</span> Sale Offer 60% Off This Week</p>
                                                <h1 class="main-title"><span>Top 20% Sale</span> <span>Black History Month</span></h1>
                                                <p class="subtitle">The collection grows each year with original stories and design features, influenced by Abalia's employees.</p>
                                                <div class="slide-button">
                                                    <a class="default-btn secondary" href="shop-grid.html" title="Shop Now">Shop Now</a>
                                                </div>
                                            </div> <!-- end of slide-content -->
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end of slider-inner -->
                        </div> <!-- end of swiper-slide -->
                    </div> <!-- end of swiper-slide -->

                    <!-- Slider Navigation -->
                    <div class="swiper-arrow next slide"><i class="fa fa-angle-right"></i></div>
                    <div class="swiper-arrow prev slide"><i class="fa fa-angle-left"></i></div>

                    <!-- Slider Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </section>
            <!-- End of Primary Slider Section -->
            
            <!-- Start of Support Section -->
            <section class="support-section mb0">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-sm-6 col-md-3 col-lg-3 feature-box">
                            <div class="feature-content">
                                <h2>Free Shipping</h2>
                                <p>Free shipping on all order</p>
                            </div>
                        </div> <!-- end of feaure-box -->

                        <div class="col-12 col-sm-6 col-md-3 col-lg-3 feature-box">
                            <div class="feature-content">
                                <h2>Money Return</h2>
                                <p>30 days for free return</p>
                            </div>
                        </div> <!-- end of feaure-box -->

                        <div class="col-12 col-sm-6 col-md-3 col-lg-3 feature-box">
                            <div class="feature-content">
                                <h2>Online Support</h2>
                                <p>Support 24 hours a day</p>
                            </div>
                        </div> <!-- end of feaure-box -->

                        <div class="col-12 col-sm-6 col-md-3 col-lg-3 feature-box">
                            <div class="feature-content">
                                <h2>Deals &amp; Promotions</h2>
                                <p>Price savings, discounts, coupons</p>
                            </div>
                        </div> <!-- end of feaure-box -->
                    </div>
                </div>
            </section>
            <!-- End of Support Section -->

            <!-- Start of Banner Section -->
            <div class="banner-section mb-half">
                <div class="container">
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4">
                            <div class="promo-banner hover-effect-1">
                                <a href="#">
                                    <img src="{{asset('assets/images/banners/banner-1.jpg')}}" alt="Promo Banner">
                                </a>
                            </div> <!-- end of promo-banner -->
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4">
                            <div class="promo-banner hover-effect-1">
                                <a href="#">
                                    <img src="{{asset('assets/images/banners/banner-2.jpg')}}" alt="Promo Banner">
                                </a>
                            </div> <!-- end of promo-banner -->
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="promo-banner hover-effect-1">
                                <a href="#">
                                    <img src="{{asset('assets/images/banners/banner-3.jpg')}}" alt="Promo Banner">
                                </a>
                            </div> <!-- end of promo-banner -->
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div>
            <!-- End of Banner Section -->

			<!-- Start of New Arrivals Section -->
            <section class="new-arrivals-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12">
                            <div class="section-title">
                                <h2>New Trending Products</h2>
                                <p class="subtitle">Accumsan vitae pede lacus ut ullamcorper sollicitudin quisque libero est</p>
                            </div>
                        </div>
                    </div> <!-- end of row -->

                    <div class="row product-row">
                    	<div class="col-12 col-sm-12 col-md-12">
	                    	<div class="new-products pos-r">
                                <div class="element-carousel anime-element" data-visible-slide="4" data-loop="false" data-space-between="0" data-speed="1000">

                                    <!-- Slides -->
                                    <div class="swiper-wrapper">
                                        <article class="swiper-slide product-layout">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                    	<div class="label-product label-sale">-20%</div>
                                                        <div class="label-product label-new">New</div>
                                                        <a href="single-product.html">
                                                            <img src="{{asset('assets/images/products/new/product-1.jpg')}}" alt="Compete Track Tote" title="Compete Track Tote">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
	                                                    	<div class="product-manufacturer">
	                                                    		<a href="#">Studio Design</a>
	                                                    	</div>
	                                                        <div class="product-ratings">
	                                                            <div class="rating-box">
	                                                                <ul class="rating d-flex">
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
	                                                                </ul>
	                                                            </div>
	                                                        </div>
	                                                    </div>
                                                        <h4 class="product-name"><a href="single-product.html">Compete Track Tote</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-old">$54.65</span>
                                                            <span class="price-new">$43.72</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </article> <!-- end of product-layout -->

                                        <article class="swiper-slide product-layout">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-new">New</div>
                                                        <a href="single-product.html">
                                                            <img src="{{asset('assets/images/products/new/product-2.jpg')}}" alt="Fusion Backpack" title="Fusion Backpack">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
	                                                    	<div class="product-manufacturer">
	                                                    		<a href="#">Graphic Corner</a>
	                                                    	</div>
	                                                        <div class="product-ratings">
	                                                            <div class="rating-box">
	                                                                <ul class="rating d-flex">
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
	                                                                </ul>
	                                                            </div>
	                                                        </div>
	                                                    </div>
                                                        <h4 class="product-name"><a href="single-product.html">Fusion Backpack</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-new">$55.70</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </article> <!-- end of product-layout -->

                                        <article class="swiper-slide product-layout">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-new">New</div>
                                                        <a href="single-product.html">
                                                            <img src="{{asset('assets/images/products/new/product-3.jpg')}}" alt="Rival Field Messenger 6" title="Rival Field Messenger 6">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
	                                                    	<div class="product-manufacturer">
	                                                    		<a href="#">Graphic Corner</a>
	                                                    	</div>
	                                                        <div class="product-ratings">
	                                                            <div class="rating-box">
	                                                                <ul class="rating d-flex">
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                </ul>
	                                                            </div>
	                                                        </div>
	                                                    </div>
                                                        <h4 class="product-name"><a href="single-product.html">Rival Field Messenger 6</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-new">$54.40</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </article> <!-- end of product-layout -->

                                        <article class="swiper-slide product-layout">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-new">New</div>
                                                        <a href="single-product.html">
                                                            <img src="{{asset('assets/images/products/new/product-4.jpg')}}" alt="Rival Field Messenger" title="Rival Field Messenger">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
	                                                    	<div class="product-manufacturer">
	                                                    		<a href="#">Graphic Corner</a>
	                                                    	</div>
	                                                        <div class="product-ratings">
	                                                            <div class="rating-box">
	                                                                <ul class="rating d-flex">
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
	                                                                </ul>
	                                                            </div>
	                                                        </div>
	                                                    </div>
                                                        <h4 class="product-name"><a href="single-product.html">Rival Field Messenger</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-new">$67.50</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </article> <!-- end of product-layout -->

                                        <article class="swiper-slide product-layout">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-new">New</div>
                                                        <a href="single-product.html">
                                                            <img src="{{asset('assets/images/products/new/product-5.jpg')}}" alt="Crown Summit Backpack" title="Crown Summit Backpack">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
	                                                    	<div class="product-manufacturer">
	                                                    		<a href="#">Graphic Corner</a>
	                                                    	</div>
	                                                        <div class="product-ratings">
	                                                            <div class="rating-box">
	                                                                <ul class="rating d-flex">
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
	                                                                </ul>
	                                                            </div>
	                                                        </div>
	                                                    </div>
                                                        <h4 class="product-name"><a href="single-product.html">Crown Summit Backpack</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-new">$78.90</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </article> <!-- end of product-layout -->

                                        <article class="swiper-slide product-layout">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-new">New</div>
                                                        <a href="single-product.html">
                                                            <img src="{{asset('assets/images/products/new/product-6.jpg')}}" alt="Rival Field Messenger" title="Rival Field Messenger">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
	                                                    	<div class="product-manufacturer">
	                                                    		<a href="#">Graphic Corner</a>
	                                                    	</div>
	                                                        <div class="product-ratings">
	                                                            <div class="rating-box">
	                                                                <ul class="rating d-flex">
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
	                                                                </ul>
	                                                            </div>
	                                                        </div>
	                                                    </div>
                                                        <h4 class="product-name"><a href="single-product.html">Rival Field Messenger</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-new">$54.50</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </article> <!-- end of product-layout -->

                                        <article class="swiper-slide product-layout">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                    	<div class="label-product label-sale">-7%</div>
                                                        <div class="label-product label-new">New</div>
                                                        <a href="single-product.html">
                                                            <img src="{{asset('assets/images/products/new/product-7.jpg')}}" alt="Strive Shoulder Pack" title="Strive Shoulder Pack">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
	                                                    	<div class="product-manufacturer">
	                                                    		<a href="#">Graphic Corner</a>
	                                                    	</div>
	                                                        <div class="product-ratings">
	                                                            <div class="rating-box">
	                                                                <ul class="rating d-flex">
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                </ul>
	                                                            </div>
	                                                        </div>
	                                                    </div>
                                                        <h4 class="product-name"><a href="single-product.html">Strive Shoulder Pack</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-old">$76.40</span>
                                                            <span class="price-new">$71.05</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </article> <!-- end of product-layout -->

                                        <article class="swiper-slide product-layout">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <div class="label-product label-new">New</div>
                                                        <a href="single-product.html">
                                                            <img src="{{asset('assets/images/products/new/product-8.jpg')}}" alt="Wayfarer Messenger Bag" title="Wayfarer Messenger Bag">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
	                                                    	<div class="product-manufacturer">
	                                                    		<a href="#">Studio Design</a>
	                                                    	</div>
	                                                        <div class="product-ratings">
	                                                            <div class="rating-box">
	                                                                <ul class="rating d-flex">
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                </ul>
	                                                            </div>
	                                                        </div>
	                                                    </div>
                                                        <h4 class="product-name"><a href="single-product.html">Wayfarer Messenger Bag</a></h4>
                                                        <p class="product-price">
                                                            <span class="price-new">$65.40</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </article> <!-- end of product-layout -->
                                    </div> <!-- end of swiper-wrapper -->

                                    <!-- Slider Navigation -->
                                    <div class="swiper-arrow next"><i class="fa fa-angle-right"></i></div>
                                    <div class="swiper-arrow prev"><i class="fa fa-angle-left"></i></div>
                                </div> <!-- end of element-carousel -->
                            </div> <!-- end of new-products -->
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </section>
            <!-- End of New Arrivals Section -->

            <!-- Start of Promo Banner Section -->
            <section class="promo-banner-section bg-img-wrapper">
            	<div class="image-placeholder pos-r">
	                <div class="container">
	                    <div class="row">
	                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
	                            <div class="banner-with-text">
	                                <img src="{{asset('assets/images/backgrounds/bg-banner.jpg')}}" class="visually-hidden" alt="Promo Banner">
									<div class="promo-text">
										<h1>Hurry Up!</h1>
										<h2><span>Hurry Up!</span> Daily Deal Of The Day</h2>
										<p>Abdul, a young, widowed Muslim man, needed to leave Syria and not be delayed by the authorities in getting to Europe. The best way to do this, he reasoned, was to acquire another family as cover, and he found one. It was all a sham, however, just a means to an end.</p>
										<a href="#" class="default-btn large">Discover Now</a>
									</div>
	                            </div> <!-- end of promo-banner -->
	                        </div>
	                    </div> <!-- end of row -->
	                </div> <!-- end of container -->
	            </div> <!-- end of image-placeholder -->
            </section>
            <!-- End of Promo Banner Section -->

            <!-- Start of Categories Section -->
            <section class="categories-section">
				<div class="container">
					<div class="row">
						<div class="col-12 col-sm-12 col-md-12">
                            <div class="section-title">
                                <h2>Our Categories</h2>
                                <p class="subtitle">Consequat magna, massa vel suspendisse morbi aliquam faucibus ligula ante ipsum ac nulla.</p>
                            </div>
						</div>
					</div> <!-- end of row -->

                    <div class="row product-row">
                        <div class="col-12 col-sm-12 col-md-12">

                            <!-- Nav Pills -->
                            <ul class="nav nav-pills justify-content-center" id="our_categories" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="nav_shop_new" data-toggle="pill" href="#shop_new" role="tab" aria-controls="shop_new" aria-selected="true">Shop New</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="nav_shop_shoes" data-toggle="pill" href="#shop_shoes" role="tab" aria-controls="shop_shoes" aria-selected="false">Sneakers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="nav_shop_bags" data-toggle="pill" href="#shop_bags" role="tab" aria-controls="shop_bags" aria-selected="false">Backpacks</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="nav_shop_glasses" data-toggle="pill" href="#shop_glasses" role="tab" aria-controls="shop_glasses" aria-selected="false">Sunglasses</a>
                                </li>
                            </ul> <!-- end of nav -->

                            <!-- Tab Contents -->
                            <div class="tab-content" id="our_categories_contents">
                                <div class="tab-pane show active anime-tab" id="shop_new" role="tabpanel" aria-labelledby="nav_shop_new">
			                    	<div class="new-products pos-r">
		                                <div class="element-carousel" data-visible-slide="4" data-loop="false" data-space-between="0" data-speed="1000">

		                                    <!-- Slides -->
		                                    <div class="swiper-wrapper">
		                                        <article class="swiper-slide product-layout">
		                                            <div class="product-thumb">
		                                                <div class="product-inner">
		                                                    <div class="product-image">
		                                                    	<div class="label-product label-sale">-7%</div>
		                                                        <div class="label-product label-new">New</div>
		                                                        <a href="single-product.html">
		                                                            <img src="{{asset('assets/images/products/new/product-7.jpg')}}" alt="Strive Shoulder Pack" title="Strive Shoulder Pack">
		                                                        </a>
		                                                        <div class="action-links">
		                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
		                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
		                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
		                                                            <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
		                                                        </div>
		                                                    </div> <!-- end of product-image -->

		                                                    <div class="product-caption">
		                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
			                                                    	<div class="product-manufacturer">
			                                                    		<a href="#">Graphic Corner</a>
			                                                    	</div>
			                                                        <div class="product-ratings">
			                                                            <div class="rating-box">
			                                                                <ul class="rating d-flex">
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                </ul>
			                                                            </div>
			                                                        </div>
			                                                    </div>
		                                                        <h4 class="product-name"><a href="single-product.html">Strive Shoulder Pack</a></h4>
		                                                        <p class="product-price">
		                                                            <span class="price-old">$76.40</span>
		                                                            <span class="price-new">$71.05</span>
		                                                        </p>
		                                                    </div><!-- end of product-caption -->
		                                                </div><!-- end of product-inner -->
		                                            </div><!-- end of product-thumb -->
		                                        </article> <!-- end of product-layout -->

		                                        <article class="swiper-slide product-layout">
		                                            <div class="product-thumb">
		                                                <div class="product-inner">
		                                                    <div class="product-image">
		                                                        <div class="label-product label-new">New</div>
		                                                        <a href="single-product.html">
		                                                            <img src="{{asset('assets/images/products/new/product-8.jpg')}}" alt="Wayfarer Messenger Bag" title="Wayfarer Messenger Bag">
		                                                        </a>
		                                                        <div class="action-links">
		                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
		                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
		                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
		                                                            <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
		                                                        </div>
		                                                    </div> <!-- end of product-image -->

		                                                    <div class="product-caption">
		                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
			                                                    	<div class="product-manufacturer">
			                                                    		<a href="#">Studio Design</a>
			                                                    	</div>
			                                                        <div class="product-ratings">
			                                                            <div class="rating-box">
			                                                                <ul class="rating d-flex">
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                </ul>
			                                                            </div>
			                                                        </div>
			                                                    </div>
		                                                        <h4 class="product-name"><a href="single-product.html">Wayfarer Messenger Bag</a></h4>
		                                                        <p class="product-price">
		                                                            <span class="price-new">$65.40</span>
		                                                        </p>
		                                                    </div><!-- end of product-caption -->
		                                                </div><!-- end of product-inner -->
		                                            </div><!-- end of product-thumb -->
		                                        </article> <!-- end of product-layout -->

		                                        <article class="swiper-slide product-layout">
		                                            <div class="product-thumb">
		                                                <div class="product-inner">
		                                                    <div class="product-image">
		                                                        <div class="label-product label-new">New</div>
		                                                        <a href="single-product.html">
		                                                            <img src="{{asset('assets/images/products/new/product-4.jpg')}}" alt="Rival Field Messenger" title="Rival Field Messenger">
		                                                        </a>
		                                                        <div class="action-links">
		                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
		                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
		                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
		                                                            <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
		                                                        </div>
		                                                    </div> <!-- end of product-image -->

		                                                    <div class="product-caption">
		                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
			                                                    	<div class="product-manufacturer">
			                                                    		<a href="#">Graphic Corner</a>
			                                                    	</div>
			                                                        <div class="product-ratings">
			                                                            <div class="rating-box">
			                                                                <ul class="rating d-flex">
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
			                                                                </ul>
			                                                            </div>
			                                                        </div>
			                                                    </div>
		                                                        <h4 class="product-name"><a href="single-product.html">Rival Field Messenger</a></h4>
		                                                        <p class="product-price">
		                                                            <span class="price-new">$67.50</span>
		                                                        </p>
		                                                    </div><!-- end of product-caption -->
		                                                </div><!-- end of product-inner -->
		                                            </div><!-- end of product-thumb -->
		                                        </article> <!-- end of product-layout -->

		                                        <article class="swiper-slide product-layout">
		                                            <div class="product-thumb">
		                                                <div class="product-inner">
		                                                    <div class="product-image">
		                                                        <div class="label-product label-new">New</div>
		                                                        <a href="single-product.html">
		                                                            <img src="{{asset('assets/images/products/new/product-5.jpg')}}" alt="Crown Summit Backpack" title="Crown Summit Backpack">
		                                                        </a>
		                                                        <div class="action-links">
		                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
		                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
		                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
		                                                            <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
		                                                        </div>
		                                                    </div> <!-- end of product-image -->

		                                                    <div class="product-caption">
		                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
			                                                    	<div class="product-manufacturer">
			                                                    		<a href="#">Graphic Corner</a>
			                                                    	</div>
			                                                        <div class="product-ratings">
			                                                            <div class="rating-box">
			                                                                <ul class="rating d-flex">
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
			                                                                </ul>
			                                                            </div>
			                                                        </div>
			                                                    </div>
		                                                        <h4 class="product-name"><a href="single-product.html">Crown Summit Backpack</a></h4>
		                                                        <p class="product-price">
		                                                            <span class="price-new">$78.90</span>
		                                                        </p>
		                                                    </div><!-- end of product-caption -->
		                                                </div><!-- end of product-inner -->
		                                            </div><!-- end of product-thumb -->
		                                        </article> <!-- end of product-layout -->

		                                        <article class="swiper-slide product-layout">
		                                            <div class="product-thumb">
		                                                <div class="product-inner">
		                                                    <div class="product-image">
		                                                        <div class="label-product label-new">New</div>
		                                                        <a href="single-product.html">
		                                                            <img src="{{asset('assets/images/products/new/product-6.jpg')}}" alt="Rival Field Messenger" title="Rival Field Messenger">
		                                                        </a>
		                                                        <div class="action-links">
		                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
		                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
		                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
		                                                            <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
		                                                        </div>
		                                                    </div> <!-- end of product-image -->

		                                                    <div class="product-caption">
		                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
			                                                    	<div class="product-manufacturer">
			                                                    		<a href="#">Graphic Corner</a>
			                                                    	</div>
			                                                        <div class="product-ratings">
			                                                            <div class="rating-box">
			                                                                <ul class="rating d-flex">
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
			                                                                </ul>
			                                                            </div>
			                                                        </div>
			                                                    </div>
		                                                        <h4 class="product-name"><a href="single-product.html">Rival Field Messenger</a></h4>
		                                                        <p class="product-price">
		                                                            <span class="price-new">$54.50</span>
		                                                        </p>
		                                                    </div><!-- end of product-caption -->
		                                                </div><!-- end of product-inner -->
		                                            </div><!-- end of product-thumb -->
		                                        </article> <!-- end of product-layout -->

		                                        <article class="swiper-slide product-layout">
		                                            <div class="product-thumb">
		                                                <div class="product-inner">
		                                                    <div class="product-image">
		                                                    	<div class="label-product label-sale">-20%</div>
		                                                        <div class="label-product label-new">New</div>
		                                                        <a href="single-product.html">
		                                                            <img src="{{asset('assets/images/products/new/product-1.jpg')}}" alt="Compete Track Tote" title="Compete Track Tote">
		                                                        </a>
		                                                        <div class="action-links">
		                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
		                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
		                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
		                                                            <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
		                                                        </div>
		                                                    </div> <!-- end of product-image -->

		                                                    <div class="product-caption">
		                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
			                                                    	<div class="product-manufacturer">
			                                                    		<a href="#">Studio Design</a>
			                                                    	</div>
			                                                        <div class="product-ratings">
			                                                            <div class="rating-box">
			                                                                <ul class="rating d-flex">
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
			                                                                </ul>
			                                                            </div>
			                                                        </div>
			                                                    </div>
		                                                        <h4 class="product-name"><a href="single-product.html">Compete Track Tote</a></h4>
		                                                        <p class="product-price">
		                                                            <span class="price-old">$54.65</span>
		                                                            <span class="price-new">$43.72</span>
		                                                        </p>
		                                                    </div><!-- end of product-caption -->
		                                                </div><!-- end of product-inner -->
		                                            </div><!-- end of product-thumb -->
		                                        </article> <!-- end of product-layout -->

		                                        <article class="swiper-slide product-layout">
		                                            <div class="product-thumb">
		                                                <div class="product-inner">
		                                                    <div class="product-image">
		                                                        <div class="label-product label-new">New</div>
		                                                        <a href="single-product.html">
		                                                            <img src="{{asset('assets/images/products/new/product-2.jpg')}}" alt="Fusion Backpack" title="Fusion Backpack">
		                                                        </a>
		                                                        <div class="action-links">
		                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
		                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
		                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
		                                                            <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
		                                                        </div>
		                                                    </div> <!-- end of product-image -->

		                                                    <div class="product-caption">
		                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
			                                                    	<div class="product-manufacturer">
			                                                    		<a href="#">Graphic Corner</a>
			                                                    	</div>
			                                                        <div class="product-ratings">
			                                                            <div class="rating-box">
			                                                                <ul class="rating d-flex">
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
			                                                                </ul>
			                                                            </div>
			                                                        </div>
			                                                    </div>
		                                                        <h4 class="product-name"><a href="single-product.html">Fusion Backpack</a></h4>
		                                                        <p class="product-price">
		                                                            <span class="price-new">$55.70</span>
		                                                        </p>
		                                                    </div><!-- end of product-caption -->
		                                                </div><!-- end of product-inner -->
		                                            </div><!-- end of product-thumb -->
		                                        </article> <!-- end of product-layout -->

		                                        <article class="swiper-slide product-layout">
		                                            <div class="product-thumb">
		                                                <div class="product-inner">
		                                                    <div class="product-image">
		                                                        <div class="label-product label-new">New</div>
		                                                        <a href="single-product.html">
		                                                            <img src="{{asset('assets/images/products/new/product-3.jpg')}}" alt="Rival Field Messenger 6" title="Rival Field Messenger 6">
		                                                        </a>
		                                                        <div class="action-links">
		                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
		                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
		                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
		                                                            <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
		                                                        </div>
		                                                    </div> <!-- end of product-image -->

		                                                    <div class="product-caption">
		                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
			                                                    	<div class="product-manufacturer">
			                                                    		<a href="#">Graphic Corner</a>
			                                                    	</div>
			                                                        <div class="product-ratings">
			                                                            <div class="rating-box">
			                                                                <ul class="rating d-flex">
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                </ul>
			                                                            </div>
			                                                        </div>
			                                                    </div>
		                                                        <h4 class="product-name"><a href="single-product.html">Rival Field Messenger 6</a></h4>
		                                                        <p class="product-price">
		                                                            <span class="price-new">$54.40</span>
		                                                        </p>
		                                                    </div><!-- end of product-caption -->
		                                                </div><!-- end of product-inner -->
		                                            </div><!-- end of product-thumb -->
		                                        </article> <!-- end of product-layout -->
		                                    </div> <!-- end of swiper-wrapper -->

		                                    <!-- Slider Navigation -->
		                                    <div class="swiper-arrow next"><i class="fa fa-angle-right"></i></div>
		                                    <div class="swiper-arrow prev"><i class="fa fa-angle-left"></i></div>
		                                </div> <!-- end of element-carousel -->
		                            </div> <!-- end of new-products -->
                                </div> <!-- end of tab-pane -->

                                <div class="tab-pane anime-tab" id="shop_shoes" role="tabpanel" aria-labelledby="nav_shop_shoes">
			                    	<div class="new-products pos-r">
		                                <div class="element-carousel" data-visible-slide="4" data-loop="false" data-space-between="0" data-speed="1000">

		                                    <!-- Slides -->
		                                    <div class="swiper-wrapper">
		                                        <article class="swiper-slide product-layout">
		                                            <div class="product-thumb">
		                                                <div class="product-inner">
		                                                    <div class="product-image">
		                                                    	<div class="label-product label-sale">-20%</div>
		                                                        <div class="label-product label-new">New</div>
		                                                        <a href="single-product.html">
		                                                            <img src="{{asset('assets/images/products/new/product-9.jpg')}}" alt="Compete Track Tote" title="Compete Track Tote">
		                                                        </a>
		                                                        <div class="action-links">
		                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
		                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
		                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
		                                                            <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
		                                                        </div>
		                                                    </div> <!-- end of product-image -->

		                                                    <div class="product-caption">
		                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
			                                                    	<div class="product-manufacturer">
			                                                    		<a href="#">Studio Design</a>
			                                                    	</div>
			                                                        <div class="product-ratings">
			                                                            <div class="rating-box">
			                                                                <ul class="rating d-flex">
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
			                                                                </ul>
			                                                            </div>
			                                                        </div>
			                                                    </div>
		                                                        <h4 class="product-name"><a href="single-product.html">Compete Track Tote</a></h4>
		                                                        <p class="product-price">
		                                                            <span class="price-old">$54.65</span>
		                                                            <span class="price-new">$43.72</span>
		                                                        </p>
		                                                    </div><!-- end of product-caption -->
		                                                </div><!-- end of product-inner -->
		                                            </div><!-- end of product-thumb -->
		                                        </article> <!-- end of product-layout -->

		                                        <article class="swiper-slide product-layout">
		                                            <div class="product-thumb">
		                                                <div class="product-inner">
		                                                    <div class="product-image">
		                                                        <div class="label-product label-new">New</div>
		                                                        <a href="single-product.html">
		                                                            <img src="{{asset('assets/images/products/new/product-10.jpg')}}" alt="Fusion Backpack" title="Fusion Backpack">
		                                                        </a>
		                                                        <div class="action-links">
		                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
		                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
		                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
		                                                            <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
		                                                        </div>
		                                                    </div> <!-- end of product-image -->

		                                                    <div class="product-caption">
		                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
			                                                    	<div class="product-manufacturer">
			                                                    		<a href="#">Graphic Corner</a>
			                                                    	</div>
			                                                        <div class="product-ratings">
			                                                            <div class="rating-box">
			                                                                <ul class="rating d-flex">
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
			                                                                </ul>
			                                                            </div>
			                                                        </div>
			                                                    </div>
		                                                        <h4 class="product-name"><a href="single-product.html">Fusion Backpack</a></h4>
		                                                        <p class="product-price">
		                                                            <span class="price-new">$55.70</span>
		                                                        </p>
		                                                    </div><!-- end of product-caption -->
		                                                </div><!-- end of product-inner -->
		                                            </div><!-- end of product-thumb -->
		                                        </article> <!-- end of product-layout -->

		                                        <article class="swiper-slide product-layout">
		                                            <div class="product-thumb">
		                                                <div class="product-inner">
		                                                    <div class="product-image">
		                                                        <div class="label-product label-new">New</div>
		                                                        <a href="single-product.html">
		                                                            <img src="{{asset('assets/images/products/new/product-11.jpg')}}" alt="Rival Field Messenger 6" title="Rival Field Messenger 6">
		                                                        </a>
		                                                        <div class="action-links">
		                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
		                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
		                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
		                                                            <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
		                                                        </div>
		                                                    </div> <!-- end of product-image -->

		                                                    <div class="product-caption">
		                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
			                                                    	<div class="product-manufacturer">
			                                                    		<a href="#">Graphic Corner</a>
			                                                    	</div>
			                                                        <div class="product-ratings">
			                                                            <div class="rating-box">
			                                                                <ul class="rating d-flex">
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                </ul>
			                                                            </div>
			                                                        </div>
			                                                    </div>
		                                                        <h4 class="product-name"><a href="single-product.html">Rival Field Messenger 6</a></h4>
		                                                        <p class="product-price">
		                                                            <span class="price-new">$54.40</span>
		                                                        </p>
		                                                    </div><!-- end of product-caption -->
		                                                </div><!-- end of product-inner -->
		                                            </div><!-- end of product-thumb -->
		                                        </article> <!-- end of product-layout -->

		                                        <article class="swiper-slide product-layout">
		                                            <div class="product-thumb">
		                                                <div class="product-inner">
		                                                    <div class="product-image">
		                                                    	<div class="label-product label-sale">-7%</div>
		                                                        <div class="label-product label-new">New</div>
		                                                        <a href="single-product.html">
		                                                            <img src="{{asset('assets/images/products/new/product-12.jpg')}}" alt="Strive Shoulder Pack" title="Strive Shoulder Pack">
		                                                        </a>
		                                                        <div class="action-links">
		                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
		                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
		                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
		                                                            <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
		                                                        </div>
		                                                    </div> <!-- end of product-image -->

		                                                    <div class="product-caption">
		                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
			                                                    	<div class="product-manufacturer">
			                                                    		<a href="#">Graphic Corner</a>
			                                                    	</div>
			                                                        <div class="product-ratings">
			                                                            <div class="rating-box">
			                                                                <ul class="rating d-flex">
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                </ul>
			                                                            </div>
			                                                        </div>
			                                                    </div>
		                                                        <h4 class="product-name"><a href="single-product.html">Strive Shoulder Pack</a></h4>
		                                                        <p class="product-price">
		                                                            <span class="price-old">$76.40</span>
		                                                            <span class="price-new">$71.05</span>
		                                                        </p>
		                                                    </div><!-- end of product-caption -->
		                                                </div><!-- end of product-inner -->
		                                            </div><!-- end of product-thumb -->
		                                        </article> <!-- end of product-layout -->

		                                        <article class="swiper-slide product-layout">
		                                            <div class="product-thumb">
		                                                <div class="product-inner">
		                                                    <div class="product-image">
		                                                        <div class="label-product label-new">New</div>
		                                                        <a href="single-product.html">
		                                                            <img src="{{asset('assets/images/products/new/product-13.jpg')}}" alt="Wayfarer Messenger Bag" title="Wayfarer Messenger Bag">
		                                                        </a>
		                                                        <div class="action-links">
		                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
		                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
		                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
		                                                            <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
		                                                        </div>
		                                                    </div> <!-- end of product-image -->

		                                                    <div class="product-caption">
		                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
			                                                    	<div class="product-manufacturer">
			                                                    		<a href="#">Studio Design</a>
			                                                    	</div>
			                                                        <div class="product-ratings">
			                                                            <div class="rating-box">
			                                                                <ul class="rating d-flex">
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                </ul>
			                                                            </div>
			                                                        </div>
			                                                    </div>
		                                                        <h4 class="product-name"><a href="single-product.html">Wayfarer Messenger Bag</a></h4>
		                                                        <p class="product-price">
		                                                            <span class="price-new">$65.40</span>
		                                                        </p>
		                                                    </div><!-- end of product-caption -->
		                                                </div><!-- end of product-inner -->
		                                            </div><!-- end of product-thumb -->
		                                        </article> <!-- end of product-layout -->

		                                        <article class="swiper-slide product-layout">
		                                            <div class="product-thumb">
		                                                <div class="product-inner">
		                                                    <div class="product-image">
		                                                        <div class="label-product label-new">New</div>
		                                                        <a href="single-product.html">
		                                                            <img src="{{asset('assets/images/products/new/product-1.jpg')}}" alt="Rival Field Messenger" title="Rival Field Messenger">
		                                                        </a>
		                                                        <div class="action-links">
		                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
		                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
		                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
		                                                            <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
		                                                        </div>
		                                                    </div> <!-- end of product-image -->

		                                                    <div class="product-caption">
		                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
			                                                    	<div class="product-manufacturer">
			                                                    		<a href="#">Graphic Corner</a>
			                                                    	</div>
			                                                        <div class="product-ratings">
			                                                            <div class="rating-box">
			                                                                <ul class="rating d-flex">
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
			                                                                </ul>
			                                                            </div>
			                                                        </div>
			                                                    </div>
		                                                        <h4 class="product-name"><a href="single-product.html">Rival Field Messenger</a></h4>
		                                                        <p class="product-price">
		                                                            <span class="price-new">$67.50</span>
		                                                        </p>
		                                                    </div><!-- end of product-caption -->
		                                                </div><!-- end of product-inner -->
		                                            </div><!-- end of product-thumb -->
		                                        </article> <!-- end of product-layout -->

		                                        <article class="swiper-slide product-layout">
		                                            <div class="product-thumb">
		                                                <div class="product-inner">
		                                                    <div class="product-image">
		                                                        <div class="label-product label-new">New</div>
		                                                        <a href="single-product.html">
		                                                            <img src="{{asset('assets/images/products/new/product-2.jpg')}}" alt="Crown Summit Backpack" title="Crown Summit Backpack">
		                                                        </a>
		                                                        <div class="action-links">
		                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
		                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
		                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
		                                                            <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
		                                                        </div>
		                                                    </div> <!-- end of product-image -->

		                                                    <div class="product-caption">
		                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
			                                                    	<div class="product-manufacturer">
			                                                    		<a href="#">Graphic Corner</a>
			                                                    	</div>
			                                                        <div class="product-ratings">
			                                                            <div class="rating-box">
			                                                                <ul class="rating d-flex">
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
			                                                                </ul>
			                                                            </div>
			                                                        </div>
			                                                    </div>
		                                                        <h4 class="product-name"><a href="single-product.html">Crown Summit Backpack</a></h4>
		                                                        <p class="product-price">
		                                                            <span class="price-new">$78.90</span>
		                                                        </p>
		                                                    </div><!-- end of product-caption -->
		                                                </div><!-- end of product-inner -->
		                                            </div><!-- end of product-thumb -->
		                                        </article> <!-- end of product-layout -->

		                                        <article class="swiper-slide product-layout">
		                                            <div class="product-thumb">
		                                                <div class="product-inner">
		                                                    <div class="product-image">
		                                                        <div class="label-product label-new">New</div>
		                                                        <a href="single-product.html">
		                                                            <img src="{{asset('assets/images/products/new/product-10.jpg')}}" alt="Rival Field Messenger" title="Rival Field Messenger">
		                                                        </a>
		                                                        <div class="action-links">
		                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
		                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
		                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
		                                                            <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
		                                                        </div>
		                                                    </div> <!-- end of product-image -->

		                                                    <div class="product-caption">
		                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
			                                                    	<div class="product-manufacturer">
			                                                    		<a href="#">Graphic Corner</a>
			                                                    	</div>
			                                                        <div class="product-ratings">
			                                                            <div class="rating-box">
			                                                                <ul class="rating d-flex">
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
			                                                                </ul>
			                                                            </div>
			                                                        </div>
			                                                    </div>
		                                                        <h4 class="product-name"><a href="single-product.html">Rival Field Messenger</a></h4>
		                                                        <p class="product-price">
		                                                            <span class="price-new">$54.50</span>
		                                                        </p>
		                                                    </div><!-- end of product-caption -->
		                                                </div><!-- end of product-inner -->
		                                            </div><!-- end of product-thumb -->
		                                        </article> <!-- end of product-layout -->
		                                    </div> <!-- end of swiper-wrapper -->

		                                    <!-- Slider Navigation -->
		                                    <div class="swiper-arrow next"><i class="fa fa-angle-right"></i></div>
		                                    <div class="swiper-arrow prev"><i class="fa fa-angle-left"></i></div>
		                                </div> <!-- end of element-carousel -->
		                            </div> <!-- end of new-products -->
                                </div> <!-- end of tab-pane -->

                                <div class="tab-pane anime-tab" id="shop_bags" role="tabpanel" aria-labelledby="nav_shop_bags">
			                    	<div class="new-products pos-r">
		                                <div class="element-carousel" data-visible-slide="4" data-loop="false" data-space-between="0" data-speed="1000">

		                                    <!-- Slides -->
		                                    <div class="swiper-wrapper">
		                                        <article class="swiper-slide product-layout">
		                                            <div class="product-thumb">
		                                                <div class="product-inner">
		                                                    <div class="product-image">
		                                                    	<div class="label-product label-sale">-7%</div>
		                                                        <div class="label-product label-new">New</div>
		                                                        <a href="single-product.html">
		                                                            <img src="{{asset('assets/images/products/new/product-3.jpg')}}" alt="Strive Shoulder Pack" title="Strive Shoulder Pack">
		                                                        </a>
		                                                        <div class="action-links">
		                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
		                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
		                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
		                                                            <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
		                                                        </div>
		                                                    </div> <!-- end of product-image -->

		                                                    <div class="product-caption">
		                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
			                                                    	<div class="product-manufacturer">
			                                                    		<a href="#">Graphic Corner</a>
			                                                    	</div>
			                                                        <div class="product-ratings">
			                                                            <div class="rating-box">
			                                                                <ul class="rating d-flex">
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                </ul>
			                                                            </div>
			                                                        </div>
			                                                    </div>
		                                                        <h4 class="product-name"><a href="single-product.html">Strive Shoulder Pack</a></h4>
		                                                        <p class="product-price">
		                                                            <span class="price-old">$76.40</span>
		                                                            <span class="price-new">$71.05</span>
		                                                        </p>
		                                                    </div><!-- end of product-caption -->
		                                                </div><!-- end of product-inner -->
		                                            </div><!-- end of product-thumb -->
		                                        </article> <!-- end of product-layout -->

		                                        <article class="swiper-slide product-layout">
		                                            <div class="product-thumb">
		                                                <div class="product-inner">
		                                                    <div class="product-image">
		                                                        <div class="label-product label-new">New</div>
		                                                        <a href="single-product.html">
		                                                            <img src="{{asset('assets/images/products/new/product-8.jpg')}}" alt="Wayfarer Messenger Bag" title="Wayfarer Messenger Bag">
		                                                        </a>
		                                                        <div class="action-links">
		                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
		                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
		                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
		                                                            <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
		                                                        </div>
		                                                    </div> <!-- end of product-image -->

		                                                    <div class="product-caption">
		                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
			                                                    	<div class="product-manufacturer">
			                                                    		<a href="#">Studio Design</a>
			                                                    	</div>
			                                                        <div class="product-ratings">
			                                                            <div class="rating-box">
			                                                                <ul class="rating d-flex">
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                </ul>
			                                                            </div>
			                                                        </div>
			                                                    </div>
		                                                        <h4 class="product-name"><a href="single-product.html">Wayfarer Messenger Bag</a></h4>
		                                                        <p class="product-price">
		                                                            <span class="price-new">$65.40</span>
		                                                        </p>
		                                                    </div><!-- end of product-caption -->
		                                                </div><!-- end of product-inner -->
		                                            </div><!-- end of product-thumb -->
		                                        </article> <!-- end of product-layout -->

		                                        <article class="swiper-slide product-layout">
		                                            <div class="product-thumb">
		                                                <div class="product-inner">
		                                                    <div class="product-image">
		                                                        <div class="label-product label-new">New</div>
		                                                        <a href="single-product.html">
		                                                            <img src="{{asset('assets/images/products/new/product-15.jpg')}}" alt="Rival Field Messenger" title="Rival Field Messenger">
		                                                        </a>
		                                                        <div class="action-links">
		                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
		                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
		                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
		                                                            <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
		                                                        </div>
		                                                    </div> <!-- end of product-image -->

		                                                    <div class="product-caption">
		                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
			                                                    	<div class="product-manufacturer">
			                                                    		<a href="#">Graphic Corner</a>
			                                                    	</div>
			                                                        <div class="product-ratings">
			                                                            <div class="rating-box">
			                                                                <ul class="rating d-flex">
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
			                                                                </ul>
			                                                            </div>
			                                                        </div>
			                                                    </div>
		                                                        <h4 class="product-name"><a href="single-product.html">Rival Field Messenger</a></h4>
		                                                        <p class="product-price">
		                                                            <span class="price-new">$67.50</span>
		                                                        </p>
		                                                    </div><!-- end of product-caption -->
		                                                </div><!-- end of product-inner -->
		                                            </div><!-- end of product-thumb -->
		                                        </article> <!-- end of product-layout -->

		                                        <article class="swiper-slide product-layout">
		                                            <div class="product-thumb">
		                                                <div class="product-inner">
		                                                    <div class="product-image">
		                                                    	<div class="label-product label-sale">-20%</div>
		                                                        <div class="label-product label-new">New</div>
		                                                        <a href="single-product.html">
		                                                            <img src="{{asset('assets/images/products/new/product-6.jpg')}}" alt="Compete Track Tote" title="Compete Track Tote">
		                                                        </a>
		                                                        <div class="action-links">
		                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
		                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
		                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
		                                                            <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
		                                                        </div>
		                                                    </div> <!-- end of product-image -->

		                                                    <div class="product-caption">
		                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
			                                                    	<div class="product-manufacturer">
			                                                    		<a href="#">Studio Design</a>
			                                                    	</div>
			                                                        <div class="product-ratings">
			                                                            <div class="rating-box">
			                                                                <ul class="rating d-flex">
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
			                                                                </ul>
			                                                            </div>
			                                                        </div>
			                                                    </div>
		                                                        <h4 class="product-name"><a href="single-product.html">Compete Track Tote</a></h4>
		                                                        <p class="product-price">
		                                                            <span class="price-old">$54.65</span>
		                                                            <span class="price-new">$43.72</span>
		                                                        </p>
		                                                    </div><!-- end of product-caption -->
		                                                </div><!-- end of product-inner -->
		                                            </div><!-- end of product-thumb -->
		                                        </article> <!-- end of product-layout -->

		                                        <article class="swiper-slide product-layout">
		                                            <div class="product-thumb">
		                                                <div class="product-inner">
		                                                    <div class="product-image">
		                                                        <div class="label-product label-new">New</div>
		                                                        <a href="single-product.html">
		                                                            <img src="{{asset('assets/images/products/new/product-4.jpg')}}" alt="Fusion Backpack" title="Fusion Backpack">
		                                                        </a>
		                                                        <div class="action-links">
		                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
		                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
		                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
		                                                            <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
		                                                        </div>
		                                                    </div> <!-- end of product-image -->

		                                                    <div class="product-caption">
		                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
			                                                    	<div class="product-manufacturer">
			                                                    		<a href="#">Graphic Corner</a>
			                                                    	</div>
			                                                        <div class="product-ratings">
			                                                            <div class="rating-box">
			                                                                <ul class="rating d-flex">
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
			                                                                </ul>
			                                                            </div>
			                                                        </div>
			                                                    </div>
		                                                        <h4 class="product-name"><a href="single-product.html">Fusion Backpack</a></h4>
		                                                        <p class="product-price">
		                                                            <span class="price-new">$55.70</span>
		                                                        </p>
		                                                    </div><!-- end of product-caption -->
		                                                </div><!-- end of product-inner -->
		                                            </div><!-- end of product-thumb -->
		                                        </article> <!-- end of product-layout -->

		                                        <article class="swiper-slide product-layout">
		                                            <div class="product-thumb">
		                                                <div class="product-inner">
		                                                    <div class="product-image">
		                                                        <div class="label-product label-new">New</div>
		                                                        <a href="single-product.html">
		                                                            <img src="{{asset('assets/images/products/new/product-7.jpg')}}" alt="Rival Field Messenger 6" title="Rival Field Messenger 6">
		                                                        </a>
		                                                        <div class="action-links">
		                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
		                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
		                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
		                                                            <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
		                                                        </div>
		                                                    </div> <!-- end of product-image -->

		                                                    <div class="product-caption">
		                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
			                                                    	<div class="product-manufacturer">
			                                                    		<a href="#">Graphic Corner</a>
			                                                    	</div>
			                                                        <div class="product-ratings">
			                                                            <div class="rating-box">
			                                                                <ul class="rating d-flex">
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                </ul>
			                                                            </div>
			                                                        </div>
			                                                    </div>
		                                                        <h4 class="product-name"><a href="single-product.html">Rival Field Messenger 6</a></h4>
		                                                        <p class="product-price">
		                                                            <span class="price-new">$54.40</span>
		                                                        </p>
		                                                    </div><!-- end of product-caption -->
		                                                </div><!-- end of product-inner -->
		                                            </div><!-- end of product-thumb -->
		                                        </article> <!-- end of product-layout -->

		                                        <article class="swiper-slide product-layout">
		                                            <div class="product-thumb">
		                                                <div class="product-inner">
		                                                    <div class="product-image">
		                                                        <div class="label-product label-new">New</div>
		                                                        <a href="single-product.html">
		                                                            <img src="{{asset('assets/images/products/new/product-14.jpg')}}" alt="Crown Summit Backpack" title="Crown Summit Backpack">
		                                                        </a>
		                                                        <div class="action-links">
		                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
		                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
		                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
		                                                            <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
		                                                        </div>
		                                                    </div> <!-- end of product-image -->

		                                                    <div class="product-caption">
		                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
			                                                    	<div class="product-manufacturer">
			                                                    		<a href="#">Graphic Corner</a>
			                                                    	</div>
			                                                        <div class="product-ratings">
			                                                            <div class="rating-box">
			                                                                <ul class="rating d-flex">
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
			                                                                </ul>
			                                                            </div>
			                                                        </div>
			                                                    </div>
		                                                        <h4 class="product-name"><a href="single-product.html">Crown Summit Backpack</a></h4>
		                                                        <p class="product-price">
		                                                            <span class="price-new">$78.90</span>
		                                                        </p>
		                                                    </div><!-- end of product-caption -->
		                                                </div><!-- end of product-inner -->
		                                            </div><!-- end of product-thumb -->
		                                        </article> <!-- end of product-layout -->

		                                        <article class="swiper-slide product-layout">
		                                            <div class="product-thumb">
		                                                <div class="product-inner">
		                                                    <div class="product-image">
		                                                        <div class="label-product label-new">New</div>
		                                                        <a href="single-product.html">
		                                                            <img src="{{asset('assets/images/products/new/product-3.jpg')}}" alt="Rival Field Messenger" title="Rival Field Messenger">
		                                                        </a>
		                                                        <div class="action-links">
		                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
		                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
		                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
		                                                            <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
		                                                        </div>
		                                                    </div> <!-- end of product-image -->

		                                                    <div class="product-caption">
		                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
			                                                    	<div class="product-manufacturer">
			                                                    		<a href="#">Graphic Corner</a>
			                                                    	</div>
			                                                        <div class="product-ratings">
			                                                            <div class="rating-box">
			                                                                <ul class="rating d-flex">
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
			                                                                </ul>
			                                                            </div>
			                                                        </div>
			                                                    </div>
		                                                        <h4 class="product-name"><a href="single-product.html">Rival Field Messenger</a></h4>
		                                                        <p class="product-price">
		                                                            <span class="price-new">$54.50</span>
		                                                        </p>
		                                                    </div><!-- end of product-caption -->
		                                                </div><!-- end of product-inner -->
		                                            </div><!-- end of product-thumb -->
		                                        </article> <!-- end of product-layout -->
		                                    </div> <!-- end of swiper-wrapper -->

		                                    <!-- Slider Navigation -->
		                                    <div class="swiper-arrow next"><i class="fa fa-angle-right"></i></div>
		                                    <div class="swiper-arrow prev"><i class="fa fa-angle-left"></i></div>
		                                </div> <!-- end of element-carousel -->
		                            </div> <!-- end of new-products -->
                            	</div> <!-- end of tab-pane -->

                            	<div class="tab-pane anime-tab" id="shop_glasses" role="tabpanel" aria-labelledby="nav_shop_glasses">
			                    	<div class="new-products pos-r">
		                                <div class="element-carousel" data-visible-slide="4" data-loop="false" data-space-between="0" data-speed="1000">

		                                    <!-- Slides -->
		                                    <div class="swiper-wrapper">
		                                        <article class="swiper-slide product-layout">
		                                            <div class="product-thumb">
		                                                <div class="product-inner">
		                                                    <div class="product-image">
		                                                        <div class="label-product label-new">New</div>
		                                                        <a href="single-product.html">
		                                                            <img src="{{asset('assets/images/products/new/product-5.jpg')}}" alt="Rival Field Messenger" title="Rival Field Messenger">
		                                                        </a>
		                                                        <div class="action-links">
		                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
		                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
		                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
		                                                            <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
		                                                        </div>
		                                                    </div> <!-- end of product-image -->

		                                                    <div class="product-caption">
		                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
			                                                    	<div class="product-manufacturer">
			                                                    		<a href="#">Graphic Corner</a>
			                                                    	</div>
			                                                        <div class="product-ratings">
			                                                            <div class="rating-box">
			                                                                <ul class="rating d-flex">
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
			                                                                </ul>
			                                                            </div>
			                                                        </div>
			                                                    </div>
		                                                        <h4 class="product-name"><a href="single-product.html">Rival Field Messenger</a></h4>
		                                                        <p class="product-price">
		                                                            <span class="price-new">$67.50</span>
		                                                        </p>
		                                                    </div><!-- end of product-caption -->
		                                                </div><!-- end of product-inner -->
		                                            </div><!-- end of product-thumb -->
		                                        </article> <!-- end of product-layout -->

		                                        <article class="swiper-slide product-layout">
		                                            <div class="product-thumb">
		                                                <div class="product-inner">
		                                                    <div class="product-image">
		                                                    	<div class="label-product label-sale">-20%</div>
		                                                        <div class="label-product label-new">New</div>
		                                                        <a href="single-product.html">
		                                                            <img src="{{asset('assets/images/products/new/product-16.jpg')}}" alt="Compete Track Tote" title="Compete Track Tote">
		                                                        </a>
		                                                        <div class="action-links">
		                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
		                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
		                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
		                                                            <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
		                                                        </div>
		                                                    </div> <!-- end of product-image -->

		                                                    <div class="product-caption">
		                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
			                                                    	<div class="product-manufacturer">
			                                                    		<a href="#">Studio Design</a>
			                                                    	</div>
			                                                        <div class="product-ratings">
			                                                            <div class="rating-box">
			                                                                <ul class="rating d-flex">
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
			                                                                </ul>
			                                                            </div>
			                                                        </div>
			                                                    </div>
		                                                        <h4 class="product-name"><a href="single-product.html">Compete Track Tote</a></h4>
		                                                        <p class="product-price">
		                                                            <span class="price-old">$54.65</span>
		                                                            <span class="price-new">$43.72</span>
		                                                        </p>
		                                                    </div><!-- end of product-caption -->
		                                                </div><!-- end of product-inner -->
		                                            </div><!-- end of product-thumb -->
		                                        </article> <!-- end of product-layout -->

		                                        <article class="swiper-slide product-layout">
		                                            <div class="product-thumb">
		                                                <div class="product-inner">
		                                                    <div class="product-image">
		                                                        <div class="label-product label-new">New</div>
		                                                        <a href="single-product.html">
		                                                            <img src="{{asset('assets/images/products/new/product-17.jpg')}}" alt="Fusion Backpack" title="Fusion Backpack">
		                                                        </a>
		                                                        <div class="action-links">
		                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
		                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
		                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
		                                                            <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
		                                                        </div>
		                                                    </div> <!-- end of product-image -->

		                                                    <div class="product-caption">
		                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
			                                                    	<div class="product-manufacturer">
			                                                    		<a href="#">Graphic Corner</a>
			                                                    	</div>
			                                                        <div class="product-ratings">
			                                                            <div class="rating-box">
			                                                                <ul class="rating d-flex">
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
			                                                                </ul>
			                                                            </div>
			                                                        </div>
			                                                    </div>
		                                                        <h4 class="product-name"><a href="single-product.html">Fusion Backpack</a></h4>
		                                                        <p class="product-price">
		                                                            <span class="price-new">$55.70</span>
		                                                        </p>
		                                                    </div><!-- end of product-caption -->
		                                                </div><!-- end of product-inner -->
		                                            </div><!-- end of product-thumb -->
		                                        </article> <!-- end of product-layout -->

		                                        <article class="swiper-slide product-layout">
		                                            <div class="product-thumb">
		                                                <div class="product-inner">
		                                                    <div class="product-image">
		                                                    	<div class="label-product label-sale">-7%</div>
		                                                        <div class="label-product label-new">New</div>
		                                                        <a href="single-product.html">
		                                                            <img src="{{asset('assets/images/products/new/product-3.jpg')}}" alt="Strive Shoulder Pack" title="Strive Shoulder Pack">
		                                                        </a>
		                                                        <div class="action-links">
		                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
		                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
		                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
		                                                            <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
		                                                        </div>
		                                                    </div> <!-- end of product-image -->

		                                                    <div class="product-caption">
		                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
			                                                    	<div class="product-manufacturer">
			                                                    		<a href="#">Graphic Corner</a>
			                                                    	</div>
			                                                        <div class="product-ratings">
			                                                            <div class="rating-box">
			                                                                <ul class="rating d-flex">
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                </ul>
			                                                            </div>
			                                                        </div>
			                                                    </div>
		                                                        <h4 class="product-name"><a href="single-product.html">Strive Shoulder Pack</a></h4>
		                                                        <p class="product-price">
		                                                            <span class="price-old">$76.40</span>
		                                                            <span class="price-new">$71.05</span>
		                                                        </p>
		                                                    </div><!-- end of product-caption -->
		                                                </div><!-- end of product-inner -->
		                                            </div><!-- end of product-thumb -->
		                                        </article> <!-- end of product-layout -->

		                                        <article class="swiper-slide product-layout">
		                                            <div class="product-thumb">
		                                                <div class="product-inner">
		                                                    <div class="product-image">
		                                                        <div class="label-product label-new">New</div>
		                                                        <a href="single-product.html">
		                                                            <img src="{{asset('assets/images/products/new/product-8.jpg')}}" alt="Wayfarer Messenger Bag" title="Wayfarer Messenger Bag">
		                                                        </a>
		                                                        <div class="action-links">
		                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
		                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
		                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
		                                                            <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
		                                                        </div>
		                                                    </div> <!-- end of product-image -->

		                                                    <div class="product-caption">
		                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
			                                                    	<div class="product-manufacturer">
			                                                    		<a href="#">Studio Design</a>
			                                                    	</div>
			                                                        <div class="product-ratings">
			                                                            <div class="rating-box">
			                                                                <ul class="rating d-flex">
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                </ul>
			                                                            </div>
			                                                        </div>
			                                                    </div>
		                                                        <h4 class="product-name"><a href="single-product.html">Wayfarer Messenger Bag</a></h4>
		                                                        <p class="product-price">
		                                                            <span class="price-new">$65.40</span>
		                                                        </p>
		                                                    </div><!-- end of product-caption -->
		                                                </div><!-- end of product-inner -->
		                                            </div><!-- end of product-thumb -->
		                                        </article> <!-- end of product-layout -->

		                                        <article class="swiper-slide product-layout">
		                                            <div class="product-thumb">
		                                                <div class="product-inner">
		                                                    <div class="product-image">
		                                                        <div class="label-product label-new">New</div>
		                                                        <a href="single-product.html">
		                                                            <img src="{{asset('assets/images/products/new/product-7.jpg')}}" alt="Rival Field Messenger 6" title="Rival Field Messenger 6">
		                                                        </a>
		                                                        <div class="action-links">
		                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
		                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
		                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
		                                                            <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
		                                                        </div>
		                                                    </div> <!-- end of product-image -->

		                                                    <div class="product-caption">
		                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
			                                                    	<div class="product-manufacturer">
			                                                    		<a href="#">Graphic Corner</a>
			                                                    	</div>
			                                                        <div class="product-ratings">
			                                                            <div class="rating-box">
			                                                                <ul class="rating d-flex">
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                </ul>
			                                                            </div>
			                                                        </div>
			                                                    </div>
		                                                        <h4 class="product-name"><a href="single-product.html">Rival Field Messenger 6</a></h4>
		                                                        <p class="product-price">
		                                                            <span class="price-new">$54.40</span>
		                                                        </p>
		                                                    </div><!-- end of product-caption -->
		                                                </div><!-- end of product-inner -->
		                                            </div><!-- end of product-thumb -->
		                                        </article> <!-- end of product-layout -->

		                                        <article class="swiper-slide product-layout">
		                                            <div class="product-thumb">
		                                                <div class="product-inner">
		                                                    <div class="product-image">
		                                                        <div class="label-product label-new">New</div>
		                                                        <a href="single-product.html">
		                                                            <img src="{{asset('assets/images/products/new/product-14.jpg')}}" alt="Crown Summit Backpack" title="Crown Summit Backpack">
		                                                        </a>
		                                                        <div class="action-links">
		                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
		                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
		                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
		                                                            <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
		                                                        </div>
		                                                    </div> <!-- end of product-image -->

		                                                    <div class="product-caption">
		                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
			                                                    	<div class="product-manufacturer">
			                                                    		<a href="#">Graphic Corner</a>
			                                                    	</div>
			                                                        <div class="product-ratings">
			                                                            <div class="rating-box">
			                                                                <ul class="rating d-flex">
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
			                                                                </ul>
			                                                            </div>
			                                                        </div>
			                                                    </div>
		                                                        <h4 class="product-name"><a href="single-product.html">Crown Summit Backpack</a></h4>
		                                                        <p class="product-price">
		                                                            <span class="price-new">$78.90</span>
		                                                        </p>
		                                                    </div><!-- end of product-caption -->
		                                                </div><!-- end of product-inner -->
		                                            </div><!-- end of product-thumb -->
		                                        </article> <!-- end of product-layout -->

		                                        <article class="swiper-slide product-layout">
		                                            <div class="product-thumb">
		                                                <div class="product-inner">
		                                                    <div class="product-image">
		                                                        <div class="label-product label-new">New</div>
		                                                        <a href="single-product.html">
		                                                            <img src="{{asset('assets/images/products/new/product-3.jpg')}}" alt="Rival Field Messenger" title="Rival Field Messenger">
		                                                        </a>
		                                                        <div class="action-links">
		                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
		                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
		                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
		                                                            <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
		                                                        </div>
		                                                    </div> <!-- end of product-image -->

		                                                    <div class="product-caption">
		                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
			                                                    	<div class="product-manufacturer">
			                                                    		<a href="#">Graphic Corner</a>
			                                                    	</div>
			                                                        <div class="product-ratings">
			                                                            <div class="rating-box">
			                                                                <ul class="rating d-flex">
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
			                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
			                                                                </ul>
			                                                            </div>
			                                                        </div>
			                                                    </div>
		                                                        <h4 class="product-name"><a href="single-product.html">Rival Field Messenger</a></h4>
		                                                        <p class="product-price">
		                                                            <span class="price-new">$54.50</span>
		                                                        </p>
		                                                    </div><!-- end of product-caption -->
		                                                </div><!-- end of product-inner -->
		                                            </div><!-- end of product-thumb -->
		                                        </article> <!-- end of product-layout -->
		                                    </div> <!-- end of swiper-wrapper -->

		                                    <!-- Slider Navigation -->
		                                    <div class="swiper-arrow next"><i class="fa fa-angle-right"></i></div>
		                                    <div class="swiper-arrow prev"><i class="fa fa-angle-left"></i></div>
		                                </div> <!-- end of element-carousel -->
		                            </div> <!-- end of new-products -->
                        		</div> <!-- end of tab-pane -->
                            </div> <!-- end of tab-content -->
                        </div>
                    </div> <!-- end of row -->
				</div> <!-- end of container -->
        	</section>
        	<!-- End of Categories Section -->

            <!-- Start of Instagram Section -->
            <section class="instagram-section">
				<div class="container">
					<div class="row">
						<div class="col-12 col-sm-12 col-md-12">
                            <div class="section-title type-2 pt-full top-bordered">
                                <h2>Follow us On Instagram</h2>
                                <p class="subtitle">Consequat magna, massa vel suspendisse morbi aliquam faucibus ligula ante ipsum ac nulla.</p>
                            </div>
						</div>
					</div> <!-- end of row -->

					<div class="row">
                        <div class="col-12 col-sm-12 col-md-12">
                            <div class="instagram-container">
                                <!-- Slides -->
                                <div id="instagram_feed" class="swiper-wrapper image-popup">
                            	</div> <!-- end of swiper-wrapper -->
                            </div> <!-- end of instagram-carousel -->
    						<div class="follow-link">
    							<a href="https://www.instagram.com/themeitems/" target="_blank">Follow us On Instagram</a>
    						</div>
                        </div>
					</div> <!-- end of row -->
				</div> <!-- end of container -->
			</section>
			<!-- End of Instagram Section -->
        </main>
        <!-- End of Main Content Wrapper -->

        <!-- Start of Footer -->
        <footer id="colophon" class="bgc-secondary pt-full">

            <!-- Footer Widgets Area -->
            <div class="footer-widgets-area">
                <div class="container">
                    <div class="footer-inner">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                                <aside class="widget-container">
                                    <div class="widget-content">
                                    	<div class="footer-logo mb-half">
                                    		<img src="{{asset('assets/images/footer-logo.png')}}" alt="Footer Logo">
                                    	</div>
                                        <p>We are a team of designers and developers that create high quality Magento, Prestashop, Opencart.</p>
                                        <div class="footer-contact">
                                            <p><span>Address:</span>6688Princess Road, London, Greater London BAS 23JK, UK</p>
                                            <p><span>Phone:</span><a href="#">(012) 800 456 789-987</a></p>
                                            <p><span>Email:</span><a href="#">support@example.com</a></p>
                                        </div>
                                    </div> <!-- end of widget-content -->
                                </aside> <!-- end of widget-container -->
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 order-md-3 col-lg-2 order-lg-2">
                                <aside class="widget-container">
                                    <h4 class="widgettitle">Products</h4>
                                    <div class="widget-content">
                                        <div class="widgetized-menu">
                                            <ul class="list-unstyled">
                                                <li><a href="#">Prices drop</a></li>
                                                <li><a href="#">New Products</a></li>
                                                <li><a href="#">Best Sales</a></li>
                                                <li><a href="#">Contact Us</a></li>
                                                <li><a href="#">Login</a></li>
                                            </ul>
                                        </div>
                                    </div> <!-- end of widget-content -->
                                </aside> <!-- end of widget-container -->
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 order-md-4 col-lg-2 order-lg-3">
                                <aside class="widget-container">
                                    <h4 class="widgettitle">Our Company</h4>
                                    <div class="widget-content">
                                        <div class="widgetized-menu">
                                            <ul class="list-unstyled">
                                                <li><a href="#">About Us</a></li>
                                                <li><a href="#">Site Map</a></li>
                                                <li><a href="#">Stores</a></li>
                                                <li><a href="#">Terms &amp; Conditions</a></li>
                                                <li><a href="#">My Account</a></li>
                                            </ul>
                                        </div>
                                    </div> <!-- end of widget-content -->
                                </aside> <!-- end of widget-container -->
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 order-md-2 col-lg-4 order-lg-4">
                                <aside class="widget-container">
                                    <h4 class="widgettitle">Sign up for our newsletter</h4>
                                    <div class="widget-content">
                                        <div class="newsletter-widget">
                                            <p>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</p>
                                            <form class="mc-subscribe-form">
                                                <div class="input-group">
                                                    <input type="email" autocomplete="off" placeholder="Your Email Address" required>
                                                    <button class="default-btn" type="submit">Sign Up</button>
                                                </div>
                                            </form> <!-- end of form -->

                                            <div class="mailchimp-alerts">
                                                <div class="mailchimp-submitting"></div>
                                                <div class="mailchimp-success"></div>
                                                <div class="mailchimp-error"></div>
                                            </div><!-- end of mailchimp-alerts -->
                                        </div>
                                    </div> <!-- end of widget-content -->
                                </aside> <!-- end of widget-container -->

                                <aside class="widget-container">
                                    <div class="widget-content">
                                        <div class="social-widget mt-half">
	                                        <div class="socials d-flex align-items-center justify-content-center justify-content-md-start">
	                                            <ul class="list-inline">
	                                                <li class="list-inline-item"><a href="#" class="bg-facebook" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
	                                                <li class="list-inline-item"><a href="#" class="bg-twitter" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
	                                                <li class="list-inline-item"><a href="#" class="bg-gplus" title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i></a></li>
	                                                <li class="list-inline-item"><a href="#" class="bg-pinterest" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a></li>
	                                                <li class="list-inline-item"><a href="#" class="bg-instagram" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
	                                                <li class="list-inline-item"><a href="#" class="bg-linkedin" title="Linked In" target="_blank"><i class="fa fa-linkedin"></i></a></li>
	                                            </ul>
	                                        </div>
                                        </div>
                                    </div> <!-- end of widget-content -->
                                </aside> <!-- end of widget-container -->
                            </div>
                        </div> <!-- end of row -->
                    </div> <!-- end of footer-inner -->
                </div> <!-- end of container -->
            </div> <!-- end of footer-widgets-area -->

            <!-- Footer Copyright -->
            <div class="footer-copyright">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <p class="copyright-text">&copy; {{date('Y')}} Giftty.ca. All rights are reserved.</p>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="footer-payment">
								<a href="#"><img src="{{asset('assets/images/icons/payment.png')}}" alt="Payment Icons"></a>
                            </div>
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div> <!-- end of footer-copyright -->
        </footer>
        <!-- End of Footer -->

        <!-- Quick View Content Start -->
        <div class="product-quick-view">
            <div class="container">
                <!-- Start of Modal -->
                <div class="modal fade" id="product_quick_view">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div> <!-- end of modal-header -->

                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-7">
                                        <div class="product-gallery">
                                            <div class="gallery-with-thumbs" data-nav-center="false">
                                                <div class="product-image-container">
                                                    <div class="product-full-image main-slider image-popup">

                                                        <!-- Slides -->
                                                        <div class="swiper-wrapper">
                                                            <figure class="swiper-slide">
                                                                <a href="assets/images/products/single/product-1.jpg" data-size="600x600">
                                                                    <img src="{{asset('assets/images/products/single/product-1.jpg')}}" alt="Product Image">
                                                                    <div class="image-overlay"><i class="fa fa-search-plus"></i></div>
                                                                </a>
                                                                <figcaption class="visually-hidden">
                                                                    <span>Product Image</span>
                                                                </figcaption>
                                                            </figure>
                                                            <figure class="swiper-slide">
                                                                <a href="assets/images/products/single/product-2.jpg" data-size="600x600">
                                                                    <img src="{{asset('assets/images/products/single/product-2.jpg')}}" alt="Product Image">
                                                                    <div class="image-overlay"><i class="fa fa-search-plus"></i></div>
                                                                </a>
                                                                <figcaption class="visually-hidden">
                                                                    <span>Product Image</span>
                                                                </figcaption>
                                                            </figure>
                                                            <figure class="swiper-slide">
                                                                <a href="assets/images/products/single/product-3.jpg" data-size="600x600">
                                                                    <img src="{{asset('assets/images/products/single/product-3.jpg')}}" alt="Product Image">
                                                                    <div class="image-overlay"><i class="fa fa-search-plus"></i></div>
                                                                </a>
                                                                <figcaption class="visually-hidden">
                                                                    <span>Product Image</span>
                                                                </figcaption>
                                                            </figure>
                                                            <figure class="swiper-slide">
                                                                <a href="assets/images/products/single/product-4.jpg" data-size="600x600">
                                                                    <img src="{{asset('assets/images/products/single/product-4.jpg')}}" alt="Product Image">
                                                                    <div class="image-overlay"><i class="fa fa-search-plus"></i></div>
                                                                </a>
                                                                <figcaption class="visually-hidden">
                                                                    <span>Product Image</span>
                                                                </figcaption>
                                                            </figure>
                                                            <figure class="swiper-slide">
                                                                <a href="assets/images/products/single/product-5.jpg" data-size="600x600">
                                                                    <img src="{{asset('assets/images/products/single/product-5.jpg')}}" alt="Product Image">
                                                                    <div class="image-overlay"><i class="fa fa-search-plus"></i></div>
                                                                </a>
                                                                <figcaption class="visually-hidden">
                                                                    <span>Product Image</span>
                                                                </figcaption>
                                                            </figure>
                                                            <figure class="swiper-slide">
                                                                <a href="assets/images/products/single/product-6.jpg" data-size="600x600">
                                                                    <img src="{{asset('assets/images/products/single/product-6.jpg')}}" alt="Product Image">
                                                                    <div class="image-overlay"><i class="fa fa-search-plus"></i></div>
                                                                </a>
                                                                <figcaption class="visually-hidden">
                                                                    <span>Product Image</span>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                    </div> <!-- end of product-full-image -->
                                                </div>
                                                
                                                <div class="product-thumb-container">
                                                    <div class="product-thumb-image pos-r">
                                                        <div class="nav-slider">
                                                            <!-- Slides -->
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <img src="{{asset('assets/images/products/single/product-thumb-1.jpg')}}" alt="Product Thumbnail Image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="{{asset('assets/images/products/single/product-thumb-2.jpg')}}" alt="Product Thumbnail Image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="{{asset('assets/images/products/single/product-thumb-3.jpg')}}" alt="Product Thumbnail Image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="{{asset('assets/images/products/single/product-thumb-4.jpg')}}" alt="Product Thumbnail Image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="{{asset('assets/images/products/single/product-thumb-5.jpg')}}" alt="Product Thumbnail Image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="{{asset('assets/images/products/single/product-thumb-6.jpg')}}" alt="Product Thumbnail Image">
                                                                </div>
                                                            </div>

                                                            <!-- Navigation -->
                                                            <div class="swiper-arrow next"><i class="fa fa-angle-down"></i></div>
                                                            <div class="swiper-arrow prev"><i class="fa fa-angle-up"></i></div>
                                                        </div>
                                                    </div> <!-- end of product-thumb-image -->
                                                </div>
                                            </div> <!-- end of gallery-with-thumbs -->
                                        </div> <!-- end of product-gallery -->
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-5">
                                        <div class="product-details">
                                            <h3 class="product-name">Cas Meque Metus</h3>
                                            <div class="product-ratings">
                                                <ul class="rating d-flex">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                            <div class="product-price">
                                                <p class="d-flex align-items-center">
                                                    <span class="price-old">$54.65</span>
                                                    <span class="price-new">$43.72</span>
                                                    <span class="price-discount">-20%</span>
                                                </p>
                                            </div>
                                            <div class="product-description">
                                                <p>Regular fit, round neckline, short sleeves. Made of extra long staple pima cotton.</p>
                                            </div>
                                            <form action="#" class="product-actions">
                                                <h3>Available Options</h3>
                                                <div class="product-size-color d-flex">
                                                    <div class="product-size">
                                                        <label>Size</label>
                                                        <select class="nice-select">
                                                            <option>S</option>
                                                            <option>M</option>
                                                            <option>L</option>
                                                        </select>
                                                    </div>
                                                    <div class="product-color">
                                                        <label>color</label>
                                                        <ul class="color-list">
                                                           <li>
                                                                <a class="white" href="#"></a>
                                                            </li>
                                                            <li>
                                                                <a class="orange active" href="#"></a>
                                                            </li>
                                                            <li>
                                                                <a class="paste" href="#"></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-stock">
                                                    <label>Quantity</label>
                                                    <ul class="d-flex flex-wrap align-items-center">
                                                        <li class="box-quantity">
                                                            <div class="cart-input">
                                                                <input class="cart-input-box" type="text" value="0">
                                                                <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                                <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <button type="button" class="default-btn">Add to Cart</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="wishlist-compare">
                                                    <button class="btn-wishlist" type="button" title="Add to Wishlist">Add to Wishlist</button>
                                                    <button class="btn-compare" type="button" title="Add to Compare">Add to Compare</button>
                                                </div>
                                            </form>
                                        </div> <!-- end of product-details -->
                                    </div>
                                </div> <!-- end of row -->
                            </div> <!-- end of modal-body -->

                            <div class="modal-footer justify-content-start">
                                <div class="social-sharing d-flex align-items-center">
                                    <span>Share</span>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#" class="bg-facebook" data-toggle="tooltip" data-position="top" data-original-title="Facebook" target="_blank"><i class="fa fa-facebook"></i><span>Share</span></a></li>
                                        <li class="list-inline-item"><a href="#" class="bg-twitter" data-toggle="tooltip" data-position="top" data-original-title="Twitter" target="_blank"><i class="fa fa-twitter"></i><span>Tweet</span></a></li>
                                        <li class="list-inline-item"><a href="#" class="bg-gplus" data-toggle="tooltip" data-position="top" data-original-title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i><span>Google+</span></a></li>
                                        <li class="list-inline-item"><a href="#" class="bg-pinterest" data-toggle="tooltip" data-position="top" data-original-title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i><span>Pinterest</span></a></li>
                                    </ul>
                                </div>
                            </div> <!-- end of modal-footer -->
                        </div> <!-- end of modal-content -->
                    </div> <!-- end of modal-dialog -->
                </div> <!-- end of modal -->
            </div> <!-- end of container -->
        </div>
        <!-- Quick View Content End -->

        <!-- Start of Scroll to Top -->
        <div id="to_top">
            <i class="ion ion-ios-arrow-forward"></i>
            <i class="ion ion-ios-arrow-forward"></i>
        </div>
        <!-- End of Scroll to Top -->
    </div>
    <!-- End of Whole Site Wrapper -->

    <!-- Initializing Photoswipe -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                    <button class="pswp__button pswp__button--share" title="Share"></button>
                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                </button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                </button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Photoswipe -->


    <!-- JS
    ============================================ -->

    <!-- jQuery JS -->
    <script src="{{asset('assets/js/jquery.1.12.4.min.js')}}"></script>

    <!-- Popper JS -->
    <script src="{{asset('assets/js/popper.min.js')}}"></script>

    <!-- Bootstrap JS -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

    <!-- Plugins JS -->
    <script src="{{asset('assets/js/plugins.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('assets/js/main.js')}}"></script>

</body>
</html>