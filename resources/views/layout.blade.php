<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home || The Paddy88</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

    <!-- All css files are included here -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="{{asset('frontend/css/core.css')}}">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="{{asset('frontend/css/shortcode/shortcodes.css')}}">
    <!-- Theme main style -->
    <link rel="stylesheet" href="{{asset('frontend/style.css')}}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    <!-- User style -->
    <link rel="stylesheet" href="{{asset('frontend/css/custom.css')}}">



    <!-- Modernizr JS -->
    <script src="{{asset('frontend/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
    <!-- Body main wrapper start -->
    <div class="wrapper">
        <!-- Start of header area -->
        <header>
            <div class="header-top gray-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5 hidden-xs">
                            <div class="header-top-left">
                                <ul class="header-top-style text-capitalize mr-25">
                                    <li><a href="{{URL::to('/show-cart')}}"><span class="mr-10">My Cart</span><i class="fa fa-angle-down"></i></a>
                                        <ul class="ul-style my-account box-shadow white-bg">
                                            <!-- <li><a href="my-account.html">My Account</a></li>
                                            <li><a href="wishlist.html">My Wishlist</a></li> -->
                                            <li><a href="{{URL::to('/show-cart')}}">My Cart</a></li>
                                            
                                            <?php
                                            $customer_id=Session::get('customer_id');
                                             ?>   
                                             <?php if($customer_id !=NULL){?>
                                                    <li><a href="{{URL::to('/checkout')}}">Checkout</a></li>
                                            <?php }else{?>
                                                    <li><a href="{{URL::to('/login-check')}}">Checkout</a></li>
                                            <?php } ?>

                                            
                                             
                                        </ul>
                                    </li>
                                </ul>
                                <!-- <ul class="header-top-style pl-10">
                                    <li>
                                        
                                        <a href="#"><span class="mr-10">{{Session::get('customer_name')}}</span><i class="fa fa-angle-down"></i></a>
                                    </li>
                                </ul> -->
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <div class="header-top-middle">
                                <ul class="header-top-style">
                                    <li>
                                        <?php
                                            $customer_id=Session::get('customer_id');
                                        ?>

                                       <?php if($customer_id !=NULL){?>
                                            <a href="{{URL::to('/customer-logout')}}"><i class="fa fa-lock"></i>
                                                <span>Logout</span>
                                            </a>
                                        <?php }else{?>
                                           <a href="{{URL::to('/login-check')}}"><i class="fa fa-lock"></i>
                                                <span>Login</span>
                                            </a> <?php } ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-6">
                            <div class="header-top-right">
                                <span class="mr-20"><a href="#"><img alt="" src="{{asset('frontend/images/header/search-icon.png')}}"></a></span>
                                <span><input type="text" class="pl-10" placeholder="Search..."></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <div class="row header-middle-content">
                        <div class="col-md-5 col-sm-4 hidden-xs">
                            <div class="service-inner mt-10">
                                <span class="service-img b-img">
                                    <img alt="" src="{{asset('frontend/images/service.png')}}">
                                </span>
                                <span class="service-content ml-15"><strong>+60 (016) 6700169</strong><br><!-- We are open 9 am - 10pm --></span>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-12">
                            <div class="header-logo text-center">
                                <a href="{{URL::to('/')}}"><img alt="" src="{{asset('frontend/images/logo.png')}}"></a>
                            </div>
                        </div>
                        <div class="col-md-offset-0 col-md-5 col-sm-offset-0 col-sm-4 col-xs-offset-3 col-xs-6">
                            <div class="shopping-cart">
                                <a href="{{url('/show-cart')}}">
                                    <span class="shopping-cart-control">
                                        <img alt="" src="{{asset('frontend/images/shop.png')}}">
                                    </span>
                                    <!-- <span class="cart-size-value"><strong>Cart</strong><br></span> -->
                                </a>                          
                            </div>
                        </div>
                        <nav class="primary-menu">
                            <ul class="header-top-style text-uppercase">
                                <li>
                                    <a href="{{URL::to('/')}}">home</a>
                                </li>
                                 <li><a href="about.html">about</a></li>
                                <li class="mega-container">
                                    <a href="#" class="menu-tag">OUR PRODUCT</a>
                                    <div class="megamenu-area ul-style box-shadow white-bg">
                                        <div class="mega-inner ptb-30">
                                            <h6 class="mega-title text-uppercase"><strong>category</strong></h6>
                                            <ul class="text-capitalize forge-list">
                                                <?php
                                                $all_published_category=DB::table('tbl_category')
                                                                        ->where('publication_status',1)
                                                                        ->get();
                                                foreach ($all_published_category as $v_category) {                        
                                            ?>
                                                <li><a href="{{URL::to('/product_by_category/'.$v_category->category_id)}}">{{$v_category->category_name}}</a></li>
                                            <?php }?>
                                            </ul>
                                        </div>
                                        <div class="mega-inner ptb-30">
                                            <h6 class="mega-title text-uppercase"><strong>brands</strong></h6>
                                            <ul class="text-capitalize forge-list">
                                               <?php
                                                $all_published_manufacture=DB::table('tbl_manufacture')
                                                                        ->where('publication_status',1)
                                                                        ->get();
                                                    foreach ($all_published_manufacture as $v_manufacture) {?>
                                                    <li><a href="{{URL::to('/product_by_manufacture/'.$v_manufacture->manufacture_id)}}">{{$v_manufacture->manufacture_name}}</a></li>
                                                <?php }?>
                                            </ul>
                                        </div>

                                        <!-- <div class="mega-inner ptb-40">
                                            <h6 class="mega-title text-uppercase"><strong>materials</strong></h6>
                                            <ul class="text-capitalize forge-list">
                                                <li><a href="shop.html">cotton</a></li>
                                                <li><a href="shop.html">cotton blends</a></li>
                                                <li><a href="shop.html">lilen</a></li>
                                                <li><a href="shop.html">polister</a></li>
                                                <li><a href="shop.html">polister blends</a></li>
                                                <li><a href="shop.html">jeans</a></li>
                                            </ul>
                                        </div> -->
                                        <!-- <div class="mega-inner mega-img b-img ptb-40">
                                            <img alt="" src="{{asset('frontend/images/header/header-menu.jpg')}}">
                                        </div> -->
                                    </div>
                                </li>
                               
                                <li><a href="{{URL::to('/shop')}}">shop</a></li>
                                <li>
                                    <a href="#">Pages</a>
                                    <ul class="ul-style dropdown box-shadow white-bg forge-list text-capitalize">
                                        <!-- <li><a href="404.html">404 Page</a></li> -->
                                        <li><a href="about.html">About</a></li>         
                                        <li><a href="{{url('/show-cart')}}">Cart</a></li>
                                        <!-- <li><a href="checkout.html">checkout</a></li> -->
                                                             <?php
                                                             $customer_id=Session::get('customer_id');
                                                          ?> 
                                                         <?php if($customer_id !=NULL){?>
                                                                <li> <a href="{{URL::to('/checkout')}}">Checkout</a></li>
                                                         <?php }else{?>
                                                           <li> <a href="{{URL::to('/login-check')}}">Checkout</a></li>
                                                         <?php } ?>
                                        <li><a href="contact.html">Contact</a></li>
                                        <!-- <li><a href="order-complete.html">Order Complete</a></li> -->
                                        <li><a href="{{url('/shop')}}">Shop</a></li>
                                        <!-- <li><a href="my-account.html">My Account</a></li> -->
                                        <li><a href="{{url('/login-check')}}">Login</a></li>
                                        <!-- <li><a href="product-details.html">Product Details</a></li> -->
                                        <!-- <li><a href="wishlist.html">Wishlist</a></li> -->
                                    </ul>
                                </li>
                                
                                <!-- <li>
                                    <a href="#">blog</a>
                                    <ul class="ul-style dropdown box-shadow white-bg forge-list text-capitalize">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-details.html">Single Blog</a></li>
                                    </ul>
                                </li> -->
                                <!-- <li><a href="contact.html">contact</a></li> -->
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul>
                                        <li><a href="about.html">about</a></li>
                                        <li><a href="shop.html">Man</a>
                                            <ul>
                                                <li><a href="#">Categories</a>
                                                    <ul>
                                                        <li><a href="shop.html">men’s collection</a></li>
                                                        <li><a href="shop.html">women’s collection</a></li>
                                                        <li><a href="shop.html">kid’s collection</a></li>
                                                        <li><a href="shop.html">bag’s collection</a></li>
                                                        <li><a href="shop.html">shoes collection</a></li>
                                                        <li><a href="shop.html">accessories</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Brands</a>
                                                    <ul>
                                                        <li><a href="shop.html">zara</a></li>
                                                        <li><a href="shop.html">walmart</a></li>
                                                        <li><a href="shop.html">arong</a></li>
                                                        <li><a href="shop.html">rong</a></li>
                                                        <li><a href="shop.html">velloci</a></li>
                                                        <li><a href="shop.html">dolce &amp; gabbana</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">materials</a>
                                                    <ul>
                                                        <li><a href="shop.html">cotton</a></li>
                                                        <li><a href="shop.html">cotton blends</a></li>
                                                        <li><a href="shop.html">lilen</a></li>
                                                        <li><a href="shop.html">polister</a></li>
                                                        <li><a href="shop.html">polister blends</a></li>
                                                        <li><a href="shop.html">jeans</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Categories 2</a>
                                                    <ul>
                                                        <li><a href="shop.html">men’s collection</a></li>
                                                        <li><a href="shop.html">women’s collection</a></li>
                                                        <li><a href="shop.html">kid’s collection</a></li>
                                                        <li><a href="shop.html">bag’s collection</a></li>
                                                        <li><a href="shop.html">shoes collection</a></li>
                                                        <li><a href="shop.html">accessories</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="shop.html">woman</a>
                                            <ul>
                                                <li><a href="#">Categories</a>
                                                    <ul>
                                                        <li><a href="shop.html">men’s collection</a></li>
                                                        <li><a href="shop.html">women’s collection</a></li>
                                                        <li><a href="shop.html">kid’s collection</a></li>
                                                        <li><a href="shop.html">bag’s collection</a></li>
                                                        <li><a href="shop.html">shoes collection</a></li>
                                                        <li><a href="shop.html">accessories</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Brands</a>
                                                    <ul>
                                                        <li><a href="shop.html">zara</a></li>
                                                        <li><a href="shop.html">walmart</a></li>
                                                        <li><a href="shop.html">arong</a></li>
                                                        <li><a href="shop.html">rong</a></li>
                                                        <li><a href="shop.html">velloci</a></li>
                                                        <li><a href="shop.html">dolce &amp; gabbana</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">materials</a>
                                                    <ul>
                                                        <li><a href="shop.html">cotton</a></li>
                                                        <li><a href="shop.html">cotton blends</a></li>
                                                        <li><a href="shop.html">lilen</a></li>
                                                        <li><a href="shop.html">polister</a></li>
                                                        <li><a href="shop.html">polister blends</a></li>
                                                        <li><a href="shop.html">jeans</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Pages</a>
                                            <ul>
                                                <li><a href="404.html">404 Page</a></li>
                                                <li><a href="about.html">About</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="checkout.html">checkout</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="order-complete.html">Order Complete</a></li>
                                                <li><a href="shop.html">Shop Full Wide</a></li>
                                                <li><a href="shop-leftside-bar.html">Shop Left Sidebar</a></li>
                                                <li><a href="shop-rightside-bar.html">Shop Right Sidebar</a></li>
                                                <li><a href="my-account.html">My Account</a></li>
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="product-details.html">Product Details</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop.html">shop</a></li>
                                        <li><a href="blog.html">Blog</a>
                                            <ul>
                                                <li><a href="blog.html">Blog Full</a></li>
                                                <li><a href="blog-leftside-bar.html">Blog Left sidebar</a></li>
                                                <li><a href="blog-rightside-bar.html">Blog Right sidebar</a></li>
                                                <li><a href="blog-details.html">Single Blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>      
            <!-- Mobile Menu End -->        
        </header>
        <!-- End of header area -->
        

            @yield('content')


            <!-- Start Blog Area -->
            <!-- <div class="blog-testimonial-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="section-title text-center mb-35">
                                <h2 class="text-uppercase"><strong>NEWS FROM THE BLOG</strong></h2>
                                <p class="text-defualt">FROM THE BLOG</p>
                                <img src="{{asset('frontend/images/section-border.png')}}" alt="">
                            </div>
                            <div class="blog-carousel indicator-style-two">
                                <div class="single-blog blog-bg">
                                    <div class="blog-img b-img">
                                        <a href="blog-details.html">
                                            <img alt="" src="{{asset('frontend/images/blog/1.jpg')}}">
                                        </a>
                                    </div>
                                    <div class="blog-text p-20">
                                        <h4 class="text-uppercase text-defualt">
                                            <a href="blog-details.html">FASHION &amp; FUSHION</a>
                                        </h4>
                                        <ul class="blog-list">
                                            <li><a href="#">january 05</a></li>
                                            <li><a href="#">Fashion</a></li>
                                        </ul>
                                        <p>SELAMAT MENYAMBUT HARI KEMERDEKA</p>
                                        <a class="btn-read-more text-uppercase text-defualt" href="blog-details.html">read mroe</a>
                                        <ul class="blog-list bottom">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-comments"></i>
                                                    12 Comments
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="text-defualt">
                                                    <i class="fa fa-heart"></i>
                                                    50 Likes
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-blog blog-bg">
                                    <div class="blog-img b-img">
                                        <a href="blog-details.html">
                                            <img alt="" src="{{asset('frontend/images/blog/1.jpg')}}">
                                        </a>
                                    </div>
                                    <div class="blog-text p-20">
                                        <h4 class="text-uppercase text-defualt">
                                            <a href="blog-details.html">FASHION &amp; FUSHION</a>
                                        </h4>
                                        <ul class="blog-list">
                                            <li><a href="#">january 05</a></li>
                                            <li><a href="#">Fashion</a></li>
                                        </ul>
                                        <p>SELAMAT MENYAMBUT HARI KEMERDEKA</p>
                                        <a class="btn-read-more text-uppercase text-defualt" href="blog-details.html">read mroe</a>
                                        <ul class="blog-list bottom">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-comments"></i>
                                                    12 Comments
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="text-defualt">
                                                    <i class="fa fa-heart"></i>
                                                    50 Likes
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-blog blog-bg">
                                    <div class="blog-img b-img">
                                        <a href="blog-details.html">
                                            <img alt="" src="{{asset('frontend/images/blog/1.jpg')}}">
                                        </a>
                                    </div>
                                    <div class="blog-text p-20">
                                        <h4 class="text-uppercase text-defualt">
                                            <a href="blog-details.html">FASHION &amp; FUSHION</a>
                                        </h4>
                                        <ul class="blog-list">
                                            <li><a href="#">january 05</a></li>
                                            <li><a href="#">Fashion</a></li>
                                        </ul>
                                        <p>SELAMAT MENYAMBUT HARI KEMERDEKA</p>
                                        <a class="btn-read-more text-uppercase text-defualt" href="blog-details.html">read mroe</a>
                                        <ul class="blog-list bottom">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-comments"></i>
                                                    12 Comments
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="text-defualt">
                                                    <i class="fa fa-heart"></i>
                                                    50 Likes
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-blog blog-bg">
                                    <div class="blog-img b-img">
                                        <a href="blog-details.html">
                                            <img alt="" src="{{asset('frontend/images/blog/1.jpg')}}">
                                        </a>
                                    </div>
                                    <div class="blog-text p-20">
                                        <h4 class="text-uppercase text-defualt">
                                            <a href="blog-details.html">FASHION &amp; FUSHION</a>
                                        </h4>
                                        <ul class="blog-list">
                                            <li><a href="#">january 05</a></li>
                                            <li><a href="#">Fashion</a></li>
                                        </ul>
                                        <p>SELAMAT MENYAMBUT HARI KEMERDEKA</p>
                                        <a class="btn-read-more text-uppercase text-defualt" href="blog-details.html">read mroe</a>
                                        <ul class="blog-list bottom">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-comments"></i>
                                                    12 Comments
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="text-defualt">
                                                    <i class="fa fa-heart"></i>
                                                    50 Likes
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="section-title text-center mb-35">
                                <h2 class="text-uppercase"><strong>WHAT CLIENTS SAY</strong></h2>
                                <p class="text-defualt">TESTIMONIALS</p>
                                <img src="{{asset('frontend/images/section-border.png')}}" alt="">
                            </div>
                            <div class="testimonial-list indicator-style">
                                <div class="testimonial-inner">
                                    <div class="single-testimonial blog-bg mb-20">
                                        <div class="testimonial-img">
                                            <a href="#">
                                                <img src="{{asset('frontend/images/client/1.png')}}" alt="">
                                            </a>
                                        </div>
                                        <div class="testimonial-content">
                                            <h5 class="text-uppercase text-defualt">TENGKU FAZRINA,<span>Head of Ideas</span></h5>
                                            <p class="m-0">SELAMAT HARI KEMARDEKAAN </p>
                                        </div>
                                    </div>
                                    <div class="single-testimonial blog-bg">
                                        <div class="testimonial-img">
                                            <a href="#">
                                                <img src="{{asset('frontend/images/client/2.png')}}" alt="">
                                            </a>
                                        </div>
                                        <div class="testimonial-content">
                                            <h5 class="text-uppercase text-defualt">THOMAS ALBERT,<span>Head of Ideas</span></h5>
                                            <p class="m-0">SELAMAT HARI KEMARDEKAAN </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-inner">
                                    <div class="single-testimonial blog-bg mb-20">
                                        <div class="testimonial-img">
                                            <a href="#">
                                                <img src="{{asset('frontend/images/client/2.png')}}" alt="">
                                            </a>
                                        </div>
                                        <div class="testimonial-content">
                                            <h5 class="text-uppercase text-defualt">THOMAS ALBERT,<span>Head of Ideas</span></h5>
                                            <p class="m-0">SELAMAT HARI KEMARDEKAAN </p>
                                        </div>
                                    </div>
                                    <div class="single-testimonial blog-bg">
                                        <div class="testimonial-img">
                                            <a href="#">
                                                <img src="{{asset('frontend/images/client/1.png')}}" alt="">
                                            </a>
                                        </div>
                                        <div class="testimonial-content">
                                            <h5 class="text-uppercase text-defualt">THOMAS ALBERT,<span>Head of Ideas</span></h5>
                                            <p class="m-0">SELAMAT HARI KEMARDEKAAN </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- End Blog Area -->


            <!-- Start Brand Area -->
           <!--  <div class="brand-area pb-90">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title text-center mb-35">
                                <h2 class="text-uppercase"><strong>OUR BRAND</strong></h2>
                                <p class="text-defualt">BRAND</p>
                                <img alt="" src="{{asset('frontend/images/section-border.png')}}">
                            </div>
                            <div class="brand-carousel">
                                <div class="col-md-12">
                                    <div class="single-brand text-center">
                                        <a href="#">
                                            <img src="{{asset('frontend/images/brand/1.png')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-brand text-center">
                                        <a href="#">
                                            <img src="{{asset('frontend/images/brand/2.png')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-brand text-center">
                                        <a href="#">
                                            <img src="{{asset('frontend/images/brand/3.png')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-brand text-center">
                                        <a href="#">
                                            <img src="{{asset('frontend/images/brand/4.png')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-brand text-center">
                                        <a href="#">
                                            <img src="{{asset('frontend/images/brand/5.png')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-brand text-center">
                                        <a href="#">
                                            <img src="{{asset('frontend/images/brand/1.png')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-brand text-center">
                                        <a href="#">
                                            <img src="{{asset('frontend/images/brand/2.png')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-brand text-center">
                                        <a href="#">
                                            <img src="{{asset('frontend/images/brand/3.png')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- End Brand Area -->
        </section>


        
        <!-- End page content -->
        <!-- Start footer area -->
        <footer id="footer" class="footer-area">
            <div class="footer-top-area text-center ptb-40">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="footer-top-content">
                                <a href="index.html">
                                    <img src="{{asset('frontend/images/footer/logo.png')}}" alt="">
                                </a>
                                <p class="pb-30">The Paddy88 is the best ecommerce site for bundle in the world</p>
                                <!-- <ul class="social-icon">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-middle-area footer-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="single-footer-inner">
                                <h5 class="footer-title text-white">CONTACT</h5>
                                <ul class="footer-contact">
                                    <li class="contact-icon">
                                        <img alt="" src="{{asset('frontend/images/footer/icon/1.png')}}">
                                    </li>
                                    <li class="footer-text text-ash">
                                        <p>UiTM Arau,</p>
                                        <p>Perlis</p>
                                    </li>
                                </ul>
                                <ul class="footer-contact">
                                    <li class="contact-icon">
                                        <img alt="" src="{{asset('frontend/images/footer/icon/2.png')}}">
                                    </li>
                                    <li class="footer-text text-ash">
                                        <p>Telephone : (801) 4256  9856</p>
                                        <p>Telephone : (801) 4256  9658</p>
                                    </li>
                                </ul>
                                <ul class="footer-contact">
                                    <li class="contact-icon">
                                        <img alt="" src="{{asset('frontend/images/footer/icon/3.png')}}">
                                    </li>
                                    <li class="footer-text text-ash">
                                        <p>Email : info@thepaddy88.com</p>
                                        <p>Web : www.thepaddy88.com</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <div class="single-footer-inner">
                                <h5 class="footer-title text-white">CONTACT</h5>
                                <ul class="footer-menu">
                                    <li><a href="{{URL::to('/')}}">Home</a></li>
                                    <li><a href="about.html">About us</a></li>
                                    <li><a href="contact.html">Contact us</a></li>
                                    <!-- <li><a href="blog.html">Our blog</a></li>
                                    <li><a href="#">Support centre</a></li>
                                    <li><a href="#">Privacy policy</a></li> -->
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="col-md-2 col-sm-3">
                            <div class="single-footer-inner">
                                <h5 class="footer-title text-white">SUPPORT</h5>
                                <ul class="footer-menu">
                                    <li><a href="#">Delivery information</a></li>
                                    <li><a href="3">Order tracking</a></li>
                                    <li><a href="#">Return product</a></li>
                                    <li><a href="#">Gift card</a></li>
                                    <li><a href="#">Home delivery</a></li>
                                    <li><a href="#">Online support</a></li>
                                </ul>
                            </div>
                        </div> -->
                        <div class="col-md-5 col-sm-9">
                            <!-- <h2 class="footer-title">LATEST TWEETS</h2>
                            <div class="tweet-list">
                                <ul class="left-tweet">
                                    <li class="tweet-inner clearfix">
                                        <div class="tweet-img">
                                            <a href="#">
                                                <img alt="" src="{{asset('frontend/images/footer/tweet/2.jpg')}}">
                                            </a>
                                        </div>
                                        <div class="tweet-text">
                                            <a href="#">Forge is the best ecommerce elt</a>
                                            <p>Jan 25, 2016</p>
                                        </div>
                                    </li>
                                    <li class="tweet-inner clearfix">
                                        <div class="tweet-img">
                                            <a href="#">
                                                <img alt="" src="{{asset('frontend/images/footer/tweet/2.jpg')}}">
                                            </a>
                                        </div>
                                        <div class="tweet-text">
                                            <a href="#">Forge is the best ecommerce elt</a>
                                            <p>Jan 25, 2016</p>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="left-tweet">
                                    <li class="tweet-inner clearfix">
                                        <div class="tweet-img">
                                            <a href="#">
                                                <img alt="" src="{{asset('frontend/images/footer/tweet/2.jpg')}}">
                                            </a>
                                        </div>
                                        <div class="tweet-text">
                                            <a href="#">Forge is the best ecommerce elt</a>
                                            <p>Jan 25, 2016</p>
                                        </div>
                                    </li>
                                    <li class="tweet-inner clearfix">
                                        <div class="tweet-img">
                                            <a href="#">
                                                <img alt="" src="{{asset('frontend/images/footer/tweet/2.jpg')}}">
                                            </a>
                                        </div>
                                        <div class="tweet-text">
                                            <a href="#">Forge is the best ecommerce elt</a>
                                            <p>Jan 25, 2016</p>
                                        </div>
                                    </li>
                                </ul> -->
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="copyright">
                                <p>Copyright <i class="fa fa-copyright"></i> 2019 <span>The Paddy88</a></span> . </p>
                            </div>
                        </div>
                        <!-- <div class="col-md-5 hidden-sm hidden-xs">
                            <nav>
                                <ul class="footer-bottom-menu">
                                    <li><a href="#">Site Map</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="wishlist.html">Wish List</a></li>
                                    <li><a href="#">Newsletter</a></li>
                                </ul>
                            </nav>
                        </div> -->
                        <!-- <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="payment-method b-img">
                                <img alt="" src="{{asset('frontend/images/footer/footer-bottom.png')}}">
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </footer>
        <!-- End footer area -->               
    </div>
    <!-- Body main wrapper end -->    

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="{{asset('frontend/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- Bootstrap framework js -->
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <!-- All js plugins included in this file. -->
    <script src="{{asset('frontend/js/plugins.js')}}"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="{{asset('frontend/js/main.js')}}"></script>

</body>

</html>