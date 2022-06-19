<?php
include("../../services/connect.php");
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ABC SHOP</title>
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
    <!-- header start -->
    <?php include('header.php') ?>
    <div class="container">
        <div id="content">
            <?php
            $cate_id = $_GET['cate_id'];
            $manu_id = $_GET['manu_id'];
            $sql =  "SELECT * FROM categories WHERE id =  '$cate_id'";
            $rs  = mysqli_query($connect, $sql);
            $r = mysqli_fetch_assoc($rs);
            if (empty($manu_id)) {
            ?>
                <h4><?= $r['name'] ?> / <a href="index.php">TRANG CHỦ</a></h4>
                <div class="tab-content">
                    <div class="tab-pane active show fade" id="home1" role="tabpanel">
                        <div class="custom-row">
                            <?php
                            $sql3 =  "SELECT * FROM products WHERE id_category =  '$cate_id'";
                            $rs3  = mysqli_query($connect, $sql3);
                            while ($r3 = mysqli_fetch_assoc($rs3)) {
                            ?>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper" style="text-align: center;">
                                        <div class="product-img">
                                            <a href="#" style="display:block;">
                                                <img style="width:90%; height:90%;" src="<?= $r3['image'] ?>" alt="">
                                            </a>
                                            <span><?= -$r3['discount'] ?>%</span>
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
                                            <a href="product-details.html" style="display:block;">
                                                <h4><?= $r3['name'] ?></h4>
                                                <div style=" text-decoration: line-through;"><?= number_format($r3['price']) ?><span style="text-decoration: underline;"><sup>đ</sup></span></div>
                                                <div style="color:red;font-weight: bold;font-size: 18px;"><?= number_format($r3['price'] * (1 - $r3['discount'] / 100)) ?><span style="text-decoration: underline;"><sup>đ</sup></span></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            <?php
            } else {
                $sql2 =  "SELECT * FROM manufacturers WHERE id =  '$manu_id'";
                $rs2  = mysqli_query($connect, $sql2);
                $r2 = mysqli_fetch_assoc($rs2);
            ?>
                <h4><?= $r['name'] ?> : <?= $r2['name'] ?> / <a href="index.php">TRANG CHỦ</a></h4>
                <div class="tab-content">
                    <div class="tab-pane active show fade" id="home1" role="tabpanel">
                        <div class="custom-row">
                            <?php
                            $sql3 =  "SELECT * FROM products WHERE id_category =  '$cate_id' AND id_manufacturer  = '$manu_id'";
                            $rs3  = mysqli_query($connect, $sql3);
                            while ($r3 = mysqli_fetch_assoc($rs3)) {
                            ?>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper" style="text-align: center;">
                                        <div class="product-img">
                                            <a href="#" style="display:block;">
                                                <img style="width:90%; height:90%;" src="<?= $r3['image'] ?>" alt="">
                                            </a>
                                            <span><?= -$r3['discount'] ?>%</span>
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
                                            <a href="product-details.html" style="display:block;">
                                                <h4><?= $r3['name'] ?></h4>
                                                <div style=" text-decoration: line-through;"><?= number_format($r3['price']) ?><span style="text-decoration: underline;"><sup>đ</sup></span></div>
                                                <div style="color:red;font-weight: bold;font-size: 18px;"><?= number_format($r3['price'] * (1 - $r3['discount'] / 100)) ?><span style="text-decoration: underline;"><sup>đ</sup></span></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>
                        </div>
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
                                <span class="old">$120.00 </span>
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