<?php
session_start(); ?>

<header>
    <div class="header-area">
        <div class="header-left-sidebar">
            <div class="logo">
                <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
            </div>
            <div class="main-menu menu-hover">
                <nav>
                    <ul>
                        <li><a href="category-view.php?cate_id=1&&manu_id=0">LAPTOP</a>
                            <ul class="single-dropdown">
                                <li><a href="category-view.php?cate_id=1&&manu_id=1">Apple</a></li>
                                <li><a href="category-view.php?cate_id=1&&manu_id=4">Dell</a></li>
                                <li><a href="category-view.php?cate_id=1&&manu_id=5">Asus</a></li>
                            </ul>
                        </li>
                        <li><a href="category-view.php?cate_id=2&&manu_id=0">SMART WATCH</a>
                            <ul class="single-dropdown">
                                <li><a href="category-view.php?cate_id=2&&manu_id=1">Apple</a></li>
                                <li><a href="category-view.php?cate_id=2&&manu_id=2">Samsung</a></li>
                                <li><a href="category-view.php?cate_id=2&&manu_id=3">Xiaomi</a></li>
                            </ul>
                        </li>
                        <li><a href="category-view.php?cate_id=3&&manu_id=0">MOBILE</a>
                            <ul class="single-dropdown">
                                <li><a href="category-view.php?cate_id=3&&manu_id=1">Apple</a></li>
                                <li><a href="category-view.php?cate_id=3&&manu_id=2">Samsung</a></li>
                                <li><a href="category-view.php?cate_id=3&&manu_id=3">Xiaomi</a></li>
                            </ul>
                        </li>
                        <li><a href="category-view.php?cate_id=4&&manu_id=0">TABLET</a>
                            <ul class="single-dropdown">
                                <li><a href="category-view.php?cate_id=4&&manu_id=1">Apple</a></li>
                                <li><a href="category-view.php?cate_id=4&&manu_id=2">Samsung</a></li>
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
                        <input placeholder="Tìm kiểm sản phẩm" type="text">
                        <button>
                            <i class="ti-search"></i>
                        </button>
                    </form>
                </div>
                <div class="header-login">
                    <?php if (!isset($_SESSION['user'])) { ?>
                        <ul>
                            <li><a href="login.php">Đăng nhập</a></li>
                            <li><a href="register.php">Đăng ký</a></li>
                        </ul>
                    <?php } else { ?>
                        <ul>
                            <li><a href="profile.php">Xin Chào, <?php echo $_SESSION['user']['name'] ?></a></li>
                            <li><a href="logout.php">Đăng xuất</a></li>
                        </ul>
                    <?php } ?>
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

                        <li class="cart-space">
                            <div class="cart-sub">
                                <h4>Tổng</h4>
                            </div>
                            <div class="cart-price">
                                <h4>$240.00</h4>
                            </div>
                        </li>
                        <li class="cart-btn-wrapper">
                            <a class="cart-btn btn-hover" href="showcart.php">giỏ hàng</a>
                            <a class="cart-btn btn-hover" href="checkout.php">thanh toán</a>
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
                            <li><a href="contact.html"> Contact </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="slider-area ">
                <div class="slider-active owl-carousel">
                    <div class="single-slider single-slider-hm1 bg-img height-100vh" style="background-image: url(assets/img/slider/Slider2.jpg);background-size:60% 60%;background-repeat : no-repeat;background-position:10px;">
                        <div class="slider-content slider-animation slider-content-style-1 slider-animated-1">
                            <h1 style="color:yellow" class="animated">Fashion</h1>
                            <p style="color: yellow " class="animated">Find your favorite device model. </p>
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
                                <img class="tilter" src="assets/img/slider/Slider4.jpg" alt="" style="background-color:yellow">
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