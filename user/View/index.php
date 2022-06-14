<?php
    include("../../connect.php");    
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fashion - eCommerce HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- all css here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="assets/css/bundle.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- header start -->
    <header>
        <div class="header-area">
            <div class="header-left-sidebar">
                <div class="logo">
                    <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                </div>
                <div class="main-menu menu-hover">
                    <nav>
                        <ul>
                            <li><a href="Categories_view.php?Cate_id=1&&Manu_id=0">LAPTOP</a>
                                <ul class="single-dropdown">
                                    <li><a href="Categories_view.php?Cate_id=1&&Manu_id=1">Apple</a></li>
                                    <li><a href="Categories_view.php?Cate_id=1&&Manu_id=4">Dell</a></li>
                                    <li><a href="Categories_view.php?Cate_id=1&&Manu_id=5">Asus</a></li>
                                </ul>
                            </li>
                            <li><a href="Categories_view.php?Cate_id=2&&Manu_id=0">SMART WATCH</a>
                                <ul class="single-dropdown">
                                    <li><a href="Categories_view.php?Cate_id=2&&Manu_id=1">Apple</a></li>
                                    <li><a href="Categories_view.php?Cate_id=2&&Manu_id=2">Samsung</a></li>
                                    <li><a href="Categories_view.php?Cate_id=2&&Manu_id=3">Xiaomi</a></li>
                                </ul>
                            </li>
                            <li><a href="Categories_view.php?Cate_id=3&&Manu_id=0">MOBILE</a>
                                <ul class="single-dropdown">
                                    <li><a href="Categories_view.php?Cate_id=3&&Manu_id=1">Apple</a></li>
                                    <li><a href="Categories_view.php?Cate_id=3&&Manu_id=2">Samsung</a></li>
                                    <li><a href="Categories_view.php?Cate_id=3&&Manu_id=3">Xiaomi</a></li>
                                </ul>
                            </li>
                            <li><a href="Categories_view.php?Cate_id=4&&Manu_id=0">TABLET</a>
                                <ul class="single-dropdown">
                                    <li><a href="Categories_view.php?Cate_id=4&&Manu_id=1">Apple</a></li>
                                    <li><a href="Categories_view.php?Cate_id=4&&Manu_id=2">Samsung</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="header-right-sidebar">
                <div class="header-search-cart-login">
                    <div class="logo">
                        <a href="index.php">
                            <img src="assets/img/logo/logo.png" alt="">
                        </a>
                    </div>
                    <div class="header-search">
                        <form action="#">
                            <input placeholder="Search What you want" type="text">
                            <button>
                                <i class="ti-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="header-login">
                        <ul>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Reg</a></li>
                        </ul>
                    </div>
                    <div class="header-cart cart-res">
                        <a class="icon-cart" href="#">
                            <i class="ti-shopping-cart"></i>
                            <span class="shop-count pink">02</span>
                        </a>
                        <ul class="cart-dropdown">
                            <li class="single-product-cart">
                                <div class="cart-img">
                                    <a href="#"><img src="assets/img/cart/1.jpg" alt=""></a>
                                </div>
                                <div class="cart-title">
                                    <h5><a href="#"> Bits Headphone</a></h5>
                                    <h6><a href="#">Black</a></h6>
                                    <span>$80.00 x 1</span>
                                </div>
                                <div class="cart-delete">
                                    <a href="#"><i class="ti-trash"></i></a>
                                </div>
                            </li>
                            <li class="single-product-cart">
                                <div class="cart-img">
                                    <a href="#"><img src="assets/img/cart/2.jpg" alt=""></a>
                                </div>
                                <div class="cart-title">
                                    <h5><a href="#"> Bits Headphone</a></h5>
                                    <h6><a href="#">Black</a></h6>
                                    <span>$80.00 x 1</span>
                                </div>
                                <div class="cart-delete">
                                    <a href="#"><i class="ti-trash"></i></a>
                                </div>
                            </li>
                            <li class="single-product-cart">
                                <div class="cart-img">
                                    <a href="#"><img src="assets/img/cart/3.jpg" alt=""></a>
                                </div>
                                <div class="cart-title">
                                    <h5><a href="#"> Bits Headphone</a></h5>
                                    <h6><a href="#">Black</a></h6>
                                    <span>$80.00 x 1</span>
                                </div>
                                <div class="cart-delete">
                                    <a href="#"><i class="ti-trash"></i></a>
                                </div>
                            </li>
                            <li class="cart-space">
                                <div class="cart-sub">
                                    <h4>Subtotal</h4>
                                </div>
                                <div class="cart-price">
                                    <h4>$240.00</h4>
                                </div>
                            </li>
                            <li class="cart-btn-wrapper">
                                <a class="cart-btn btn-hover" href="#">view cart</a>
                                <a class="cart-btn btn-hover" href="#">checkout</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mobile-menu-area clearfix d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">
                            <ul class="menu-overflow">
                                <li><a href="#">HOME</a>
                                    <ul>
                                        <li><a href="index.html">Fashion</a></li>
                                        <li><a href="index-fashion-2.html">Fashion style 2</a></li>
                                        <li><a href="index-fruits.html">Fruits</a></li>
                                        <li><a href="index-book.html">book</a></li>
                                        <li><a href="index-electronics.html">electronics</a></li>
                                        <li><a href="index-electronics-2.html">electronics style 2</a></li>
                                        <li><a href="index-food.html">food & drink</a></li>
                                        <li><a href="index-furniture.html">furniture</a></li>
                                        <li><a href="index-handicraft.html">handicraft</a></li>
                                        <li><a href="index-smart-watch.html">smart watch</a></li>
                                        <li><a href="index-sports.html">sports</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">pages</a>
                                    <ul>
                                        <li><a href="about-us.html">about us</a></li>
                                        <li><a href="menu-list.html">menu list</a></li>
                                        <li><a href="login.html">login</a></li>
                                        <li><a href="register.html">register</a></li>
                                        <li><a href="cart.html">cart page</a></li>
                                        <li><a href="checkout.html">checkout</a></li>
                                        <li><a href="wishlist.html">wishlist</a></li>
                                        <li><a href="contact.html">contact</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">shop</a>
                                    <ul>
                                        <li><a href="shop-grid-2-col.html"> grid 2 column</a></li>
                                        <li><a href="shop-grid-3-col.html"> grid 3 column</a></li>
                                        <li><a href="shop.html">grid 4 column</a></li>
                                        <li><a href="shop-grid-box.html">grid box style</a></li>
                                        <li><a href="shop-list-1-col.html"> list 1 column</a></li>
                                        <li><a href="shop-list-2-col.html">list 2 column</a></li>
                                        <li><a href="shop-list-box.html">list box style</a></li>
                                        <li><a href="product-details.html">tab style 1</a></li>
                                        <li><a href="product-details-2.html">tab style 2</a></li>
                                        <li><a href="product-details-3.html"> tab style 3</a></li>
                                        <li><a href="product-details-4.html">sticky style</a></li>
                                        <li><a href="product-details-5.html">sticky style 2</a></li>
                                        <li><a href="product-details-6.html">gallery style</a></li>
                                        <li><a href="product-details-7.html">gallery style 2</a></li>
                                        <li><a href="product-details-8.html">fixed image style</a></li>
                                        <li><a href="product-details-9.html">fixed image style 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">BLOG</a>
                                    <ul>
                                        <li><a href="blog.html">blog 3 colunm</a></li>
                                        <li><a href="blog-2-col.html">blog 2 colunm</a></li>
                                        <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                        <li><a href="blog-details-sidebar.html">blog details 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html"> Contact  </a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="slider-area ">
                    <div class="slider-active owl-carousel">
                        <div class="single-slider single-slider-hm1 bg-img height-100vh" style="background-image: url(assets/img/slider/Slider2.jpg);background-size:60% 60%;background-repeat : no-repeat;background-position:10px;">
                            <div class="slider-content slider-animation slider-content-style-1 slider-animated-1">
                                <h1 style = "color:yellow" class="animated">Fashion</h1>
                                <p style = "color: yellow " class="animated">Find your favorite device model. </p>
                            </div>
                            <div class="position-slider-img">
                                <div class="slider-img-1">
                                    <img src="assets/img/slider/ " alt="">
                                </div>
                                <div class="slider-img-2">
                                    <img class="tilter" src="assets/img/slider/Slider3.jpg" alt="">
                                </div>
                                <div class="slider-img-3">
                                    <img src="assets/img/slider/8.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="single-slider single-slider-hm1 bg-img height-100vh" style="background-image: url(assets/img/slider/Slider1.jpg);background-size:40% 50%;background-repeat : no-repeat;background-position:300px;">
                            <div class="slider-content slider-animation slider-content-style-1 slider-animated-2">
                                <h1 class="animated">Young</h1>
                                <p class="animated">Explore in your own style. </p>
                            </div>
                            <div class="position-slider-img">
                                <div class="slider-img-1">
                                    <img src="assets/img/slider/ " alt="">
                                </div>
                                <div class="slider-img-4 slider-mrg">
                                    <img class="tilter" src="assets/img/slider/Slider4.jpg" alt="" style = "background-color:yellow">
                                </div>
                                <div class="slider-img-3">
                                    <img src="assets/img/slider/8.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->
    <!-- banner area start -->
    <div class="banner-area" >
        <div class="row no-gutters">
            <div class="col-md-4">
                <div class="single-banner">
                    <a href="#id1"><img style = "height:300px" src="assets/img/banner/banner2.png" alt=""></a>
                    <div class="banner-content banner-content-style1">
                        <h2><span style = "color:white;">PRIMIUM</span></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-banner">
                    <a href="#id1"><img style = "height:300px" src="assets/img/banner/banner3.png" alt=""></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-banner">
                    <a href="Categories_view.php?Cate_id=1&&Manu_id=5"><img style = "height:300px" src="assets/img/banner/banner1.png" alt=""></a>
                    <div class="banner-content banner-content-style1">
                        <h2><span style = "color:white;">TREND<br>2022</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner area end -->
    <!-- product area start -->
    <div class="product-area pt-115 pb-120">
        <div class="pl-100 pr-100">
            <div class="container-fluid">
                <div class="section-title text-center mb-60">
                    <h2>New Products</h2>
                </div>
                <div class="product-style">
                    <div class="custom-row">
                        <?php
                            $sql = "SELECT * FROM products ORDER BY id DESC";
                            $rs = mysqli_query($connect,$sql);                      
                            $count = 0;
                            while($count < 8){
                                $r = mysqli_fetch_assoc($rs);
                                $count++;
                        ?>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper" style = "text-align: center;">
                                        <div class="product-img">
                                            <a href="#" style = "display:block;">
                                                <img style = "width:70%; height:70%;" src="<?=$r['image']?>" alt="">
                                            </a>
                                            <span><?=-$r['discount']?>%</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <a href="product-details.html" style = "display:block;"><h4><?=$r['name']?></h4>
                                            <div style = " text-decoration: line-through;"><?=number_format($r['price'])?><span style = "text-decoration: underline;"><sup>đ</sup></span></div>
                                            <div style = "color:red;font-weight: bold;font-size: 18px;"><?=number_format($r['price'] * (1 - $r['discount']/100))?><span style = "text-decoration: underline;"><sup>đ</sup></span></div></a>
                                        </div>
                                    </div>
                                </div>
                    <?php
                            }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner area two end -->
    <!-- all products area start -->
    <span id = "id1"></span>
    <div class="all-products-area pt-115 pb-50">
        <div class="pl-100 pr-100">
            <div class="container-fluid">
                <div class="section-title text-center mb-60">
                    <h2>All Products</h2>
                </div>
                <div class="product-style">
                    <div class="product-tab-list text-center mb-95 nav product-menu-mrg" role="tablist">
                        <a class="active" href="#home1" data-toggle="tab" role="tab" aria-selected="true" aria-controls="home1">
                            <h4>all</h4>
                        </a>
                        <a href="#home2" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home2">
                            <h4>Laptop</h4>
                        </a>
                        <a href="#home3" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home3">
                            <h4>Smart Watch</h4>
                        </a>
                        <a href="#home4" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home4">
                            <h4>Mobile</h4>
                        </a>
                        <a href="#home5" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home5">
                            <h4>Tablet</h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active show fade" id="home1" role="tabpanel">
                            <div class="custom-row">
                                <?php
                                    $sql2 = "SELECT * FROM products";
                                    $rs2 = mysqli_query($connect,$sql2);
                                    while($r2 = mysqli_fetch_assoc($rs2)){
                                ?>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper" style = "text-align: center;">
                                        <div class="product-img">
                                            <a href="#" style = "display:block;">
                                                <img style = "width:70%; height:70%;" src="<?=$r2['image']?>" alt="">
                                            </a>
                                            <span><?=-$r2['discount']?>%</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <a href="product-details.html" style = "display:block;"><h4><?=$r2['name']?></h4>
                                            <div style = " text-decoration: line-through;"><?=number_format($r2['price'])?><span style = "text-decoration: underline;"><sup>đ</sup></span></div>
                                            <div style = "color:red;font-weight: bold;font-size: 18px;"><?=number_format($r2['price'] * (1 - $r2['discount']/100))?><span style = "text-decoration: underline;"><sup>đ</sup></span></div></a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="home2" role="tabpanel">
                            <div class="custom-row">
                                <?php
                                    $sql2 = "SELECT * FROM products WHERE id_category = '1'";
                                    $rs2 = mysqli_query($connect,$sql2);
                                    while($r2 = mysqli_fetch_assoc($rs2)){
                                ?>
                                <div class="custom-col-5 custom-col-style mb-65">
                                <div class="product-wrapper" style = "text-align: center;">
                                        <div class="product-img">
                                            <a href="#" style = "display:block;">
                                                <img style = "width:70%; height:70%;" src="<?=$r2['image']?>" alt="">
                                            </a>
                                            <span><?=-$r2['discount']?>%</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <a href="product-details.html" style = "display:block;"><h4><?=$r2['name']?></h4>
                                            <div style = " text-decoration: line-through;"><?=number_format($r2['price'])?><span style = "text-decoration: underline;"><sup>đ</sup></span></div>
                                            <div style = "color:red;font-weight: bold;font-size: 18px;"><?=number_format($r2['price'] * (1 - $r2['discount']/100))?><span style = "text-decoration: underline;"><sup>đ</sup></span></div></a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="home3" role="tabpanel">
                            <div class="custom-row">
                                <?php
                                    $sql2 = "SELECT * FROM products WHERE id_category = '2'";
                                    $rs2 = mysqli_query($connect,$sql2);
                                    while($r2 = mysqli_fetch_assoc($rs2)){
                                ?>
                                <div class="custom-col-5 custom-col-style mb-65">
                                <div class="product-wrapper" style = "text-align: center;">
                                        <div class="product-img">
                                            <a href="#" style = "display:block;">
                                                <img style = "width:70%; height:70%;" src="<?=$r2['image']?>" alt="">
                                            </a>
                                            <span><?=-$r2['discount']?>%</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <a href="product-details.html" style = "display:block;"><h4><?=$r2['name']?></h4>
                                            <div style = " text-decoration: line-through;"><?=number_format($r2['price'])?><span style = "text-decoration: underline;"><sup>đ</sup></span></div>
                                            <div style = "color:red;font-weight: bold;font-size: 18px;"><?=number_format($r2['price'] * (1 - $r2['discount']/100))?><span style = "text-decoration: underline;"><sup>đ</sup></span></div></a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="home4" role="tabpanel">
                            <div class="custom-row">
                                <?php
                                    $sql2 = "SELECT * FROM products WHERE id_category = '3'";
                                    $rs2 = mysqli_query($connect,$sql2);
                                    while($r2 = mysqli_fetch_assoc($rs2)){
                                ?>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper" style = "text-align: center;">
                                        <div class="product-img">
                                            <a href="#" style = "display:block;">
                                                <img style = "width:70%; height:70%;" src="<?=$r2['image']?>" alt="">
                                            </a>
                                            <span><?=-$r2['discount']?>%</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <a href="product-details.html" style = "display:block;"><h4><?=$r2['name']?></h4>
                                            <div style = " text-decoration: line-through;"><?=number_format($r2['price'])?><span style = "text-decoration: underline;"><sup>đ</sup></span></div>
                                            <div style = "color:red;font-weight: bold;font-size: 18px;"><?=number_format($r2['price'] * (1 - $r2['discount']/100))?><span style = "text-decoration: underline;"><sup>đ</sup></span></div></a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="home5" role="tabpanel">
                        <div class="custom-row">
                                <?php
                                    $sql2 = "SELECT * FROM products WHERE id_category = '4'";
                                    $rs2 = mysqli_query($connect,$sql2);
                                    while($r2 = mysqli_fetch_assoc($rs2)){
                                ?>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper" style = "text-align: center;">
                                        <div class="product-img">
                                            <a href="#" style = "display:block;">
                                                <img style = "width:70%; height:70%;" src="<?=$r2['image']?>" alt="">
                                            </a>
                                            <span><?=-$r2['discount']?>%</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <a href="product-details.html" style = "display:block;"><h4><?=$r2['name']?></h4>
                                            <div style = " text-decoration: line-through;"><?=number_format($r2['price'])?><span style = "text-decoration: underline;"><sup>đ</sup></span></div>
                                            <div style = "color:red;font-weight: bold;font-size: 18px;"><?=number_format($r2['price'] * (1 - $r2['discount']/100))?><span style = "text-decoration: underline;"><sup>đ</sup></span></div></a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- all products area end -->
    <!-- brand logo area start -->
    <div class="brand-logo-area pl-100 pr-100">
        <div class="ptb-135 gray-bg">
            <div class="brand-logo-active owl-carousel">
                <div class="single-brand">
                    <img src="assets/img/brand-logo/1.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="assets/img/brand-logo/2.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="assets/img/brand-logo/1.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="assets/img/brand-logo/3.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="assets/img/brand-logo/4.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="assets/img/brand-logo/5.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="assets/img/brand-logo/6.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- insta feed end -->
    <footer class="footer-area">
        <div class="footer-top-area bg-img pt-105 pb-65" data-overlay="9">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-3">
                        <div class="footer-widget mb-40">
                            <h3 class="footer-widget-title">Custom Service</h3>
                            <div class="footer-widget-content">
                                <ul>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="register.html">My Account</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="#">Support</a></li>
                                    <li><a href="#">Track</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-3">
                        <div class="footer-widget mb-40">
                            <h3 class="footer-widget-title">Categories</h3>
                            <div class="footer-widget-content">
                                <ul>
                                    <li><a href="shop.html">Dress</a></li>
                                    <li><a href="shop.html">Shoes</a></li>
                                    <li><a href="shop.html">Shirt</a></li>
                                    <li><a href="shop.html">Baby Product</a></li>
                                    <li><a href="shop.html">Mans Product</a></li>
                                    <li><a href="shop.html">Leather</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="footer-widget mb-40">
                            <h3 class="footer-widget-title">Contact</h3>
                            <div class="footer-newsletter">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is dummy.</p>
                                <div id="mc_embed_signup" class="subscribe-form pr-40">
                                    <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                        <div id="mc_embed_signup_scroll" class="mc-form">
                                            <input type="email" value="" name="EMAIL" class="email" placeholder="Enter Your E-mail" required>
                                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                            <div class="mc-news" aria-hidden="true">
                                                <input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value="">
                                            </div>
                                            <div class="clear">
                                                <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="footer-contact">
                                    <p><span><i class="ti-location-pin"></i></span> 77 Seventh avenue USA 12555. </p>
                                    <p><span><i class=" ti-headphone-alt "></i></span> +88 (015) 609735 or +88 (012) 112266</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom black-bg ptb-20">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="copyright">
                            <p>
                                Copyright ©
                                <a href="https://hastech.company/">HasTech</a> 2018 . All Right Reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="pe-7s-close" aria-hidden="true"></span>
        </button>
        <div class="modal-dialog modal-quickview-width" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="qwick-view-left">
                        <div class="quick-view-learg-img">
                            <div class="quick-view-tab-content tab-content">
                                <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                    <img src="assets/img/quick-view/l1.jpg" alt="">
                                </div>
                                <div class="tab-pane fade" id="modal2" role="tabpanel">
                                    <img src="assets/img/quick-view/l2.jpg" alt="">
                                </div>
                                <div class="tab-pane fade" id="modal3" role="tabpanel">
                                    <img src="assets/img/quick-view/l3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="quick-view-list nav" role="tablist">
                            <a class="active" href="#modal1" data-toggle="tab" role="tab" aria-selected="true" aria-controls="home1">
                                <img src="assets/img/quick-view/s1.jpg" alt="">
                            </a>
                            <a href="#modal2" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home2">
                                <img src="assets/img/quick-view/s2.jpg" alt="">
                            </a>
                            <a href="#modal3" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home3">
                                <img src="assets/img/quick-view/s3.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="qwick-view-right">
                        <div class="qwick-view-content">
                            <h3>Handcrafted Supper Mug</h3>
                            <div class="price">
                                <span class="new">$90.00</span>
                                <span class="old">$120.00  </span>
                            </div>
                            <div class="rating-number">
                                <div class="quick-view-rating">
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                                <div class="quick-view-number">
                                    <span>2 Ratting (S)</span>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do tempor incididun ut labore et dolore magna aliqua. Ut enim ad mi , quis nostrud veniam exercitation .</p>
                            <div class="quick-view-select">
                                <div class="select-option-part">
                                    <label>Size*</label>
                                    <select class="select">
                                        <option value="">- Please Select -</option>
                                        <option value="">900</option>
                                        <option value="">700</option>
                                    </select>
                                </div>
                                <div class="select-option-part">
                                    <label>Color*</label>
                                    <select class="select">
                                        <option value="">- Please Select -</option>
                                        <option value="">orange</option>
                                        <option value="">pink</option>
                                        <option value="">yellow</option>
                                    </select>
                                </div>
                            </div>
                            <div class="quickview-plus-minus">
                                <div class="cart-plus-minus">
                                    <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                </div>
                                <div class="quickview-btn-cart">
                                    <a class="btn-hover-black" href="#">add to cart</a>
                                </div>
                                <div class="quickview-btn-wishlist">
                                    <a class="btn-hover" href="#"><i class="pe-7s-like"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- all js here -->
    <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/ajax-mail.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>