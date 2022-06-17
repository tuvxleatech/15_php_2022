<?php
include("../../services/connect.php");
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php include('components/head.php') ?>
</head>

<body>
    <!-- header start -->
    <?php include('header.php') ?>
    <!-- header end -->
    <!-- banner area start -->
    <div class="banner-area">
        <div class="row no-gutters">
            <div class="col-md-4">
                <div class="single-banner">
                    <a href="#id1"><img style="height:300px" src="assets/img/banner/banner2.png" alt=""></a>
                    <div class="banner-content banner-content-style1">
                        <h2><span style="color:white;">PRIMIUM</span></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-banner">
                    <a href="#id1"><img style="height:300px" src="assets/img/banner/banner3.png" alt=""></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-banner">
                    <a href="Categories_view.php?cate_id=1&&manu_id=5"><img style="height:300px" src="assets/img/banner/banner1.png" alt=""></a>
                    <div class="banner-content banner-content-style1">
                        <h2><span style="color:white;">TREND<br>2022</span></h2>
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
                    <h2>Sản phẩm mới</h2>
                </div>
                <div class="product-style">
                    <div class="custom-row">
                        <?php
                        $sql = "SELECT * FROM products ORDER BY id DESC";
                        $rs = mysqli_query($connect, $sql);
                        $count = 0;
                        while ($count < 8) {
                            $r = mysqli_fetch_assoc($rs);
                            $count++;
                        ?>
                            <div class="custom-col-5 custom-col-style mb-65">
                                <div class="product-wrapper" style="text-align: center;">
                                    <div class="product-img">
                                        <a href="product-detail.php?id=<?= $r['id'] ?>" style="display:block;">
                                            <img style="width:70%; height:70%;" src="<?= $r['image'] ?>" alt="">
                                        </a>
                                        <span><?= -$r['discount'] ?>%</span>
                                        <div class="product-action">
                                            <a class="animate-left" title="Add To Cart" href="cart.php?id=<?= $r['id'] ?>&name=<?= $r['name'] ?>&price=<?= $r['price'] * (100 - $r['discount']) / 100 ?>">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <a href="product-details.html" style="display:block;">
                                            <h4><?= $r['name'] ?></h4>
                                            <div style=" text-decoration: line-through;"><?= number_format($r['price']) ?><span style="text-decoration: underline;"><sup>đ</sup></span></div>
                                            <div style="color:red;font-weight: bold;font-size: 18px;"><?= number_format($r['price'] * (1 - $r['discount'] / 100)) ?><span style="text-decoration: underline;"><sup>đ</sup></span></div>
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
        </div>
    </div>
    <!-- banner area two end -->
    <!-- all products area start -->
    <span id="id1"></span>
    <div class="all-products-area pt-115 pb-50">
        <div class="pl-100 pr-100">
            <div class="container-fluid">
                <div class="section-title text-center mb-60">
                    <h2>Tất cả sản phẩm</h2>
                </div>
                <div class="product-style">
                    <div class="product-tab-list text-center mb-95 nav product-menu-mrg" role="tablist">
                        <a class="active" href="#home1" data-toggle="tab" role="tab" aria-selected="true" aria-controls="home1">
                            <h4>Tất cả</h4>
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
                                $sql2 = "SELECT * FROM products LIMIT 10";
                                $rs2 = mysqli_query($connect, $sql2);
                                while ($r2 = mysqli_fetch_assoc($rs2)) {
                                ?>
                                    <div class="custom-col-5 custom-col-style mb-65">
                                        <div class="product-wrapper" style="text-align: center;">
                                            <div class="product-img">
                                                <a href="product-detail.php?id=<?= $r2['id'] ?>" style="display:block;">
                                                    <img style="width:70%; height:70%;" src="<?= $r2['image'] ?>" alt="">
                                                </a>
                                                <span><?= -$r2['discount'] ?>%</span>
                                                <div class="product-action">
                                                    <a class="animate-left" title="Add Laptop To Cart" href="cart.php?id=<?= $r['id'] ?>&name=<?= $r['name'] ?>&price=<?= $r['price'] * (100 - $r['discount']) * 0.01 ?>">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                    <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a href="product-details.html" style="display:block;">
                                                    <h4><?= $r2['name'] ?></h4>
                                                    <div style=" text-decoration: line-through;"><?= number_format($r2['price']) ?><span style="text-decoration: underline;"><sup>đ</sup></span></div>
                                                    <div style="color:red;font-weight: bold;font-size: 18px;"><?= number_format($r2['price'] - ($r2['price'] * $r2['discount'] / 100))  ?><span style="text-decoration: underline;"><sup>đ</sup></span></div>
                                                </a>
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
                                $rs2 = mysqli_query($connect, $sql2);
                                while ($r2 = mysqli_fetch_assoc($rs2)) {
                                ?>
                                    <div class="custom-col-5 custom-col-style mb-65">
                                        <div class="product-wrapper" style="text-align: center;">
                                            <div class="product-img">
                                                <a href="#" style="display:block;">
                                                    <img style="width:70%; height:70%;" src="<?= $r2['image'] ?>" alt="">
                                                </a>
                                                <span><?= -$r2['discount'] ?>%</span>
                                                <div class="product-action">
                                                    <a class="animate-left" title="Add To Cart" href="cart.php?id=<?= $r2['id'] ?>&name=<?= $r2['name'] ?>&price=<?= $r['price'] * (100 - $r['discount']) * 0.01 ?>">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                    <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a href="product-details.html" style="display:block;">
                                                    <h4><?= $r2['name'] ?></h4>
                                                    <div style=" text-decoration: line-through;"><?= number_format($r2['price']) ?><span style="text-decoration: underline;"><sup>đ</sup></span></div>
                                                    <div style="color:red;font-weight: bold;font-size: 18px;"><?= number_format($r2['price'] * (1 - $r2['discount'] / 100)) ?><span style="text-decoration: underline;"><sup>đ</sup></span></div>
                                                </a>
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
                                $rs2 = mysqli_query($connect, $sql2);
                                while ($r2 = mysqli_fetch_assoc($rs2)) {
                                ?>
                                    <div class="custom-col-5 custom-col-style mb-65">
                                        <div class="product-wrapper" style="text-align: center;">
                                            <div class="product-img">
                                                <a href="#" style="display:block;">
                                                    <img style="width:70%; height:70%;" src="<?= $r2['image'] ?>" alt="">
                                                </a>
                                                <span><?= -$r2['discount'] ?>%</span>
                                                <div class="product-action">
                                                    <a class="animate-left" title="Add To Cart" href="cart.php?id=<?= $r2['id'] ?>&name=<?= $r2['name'] ?>&price=<?= $r['price'] * (100 - $r['discount']) * 0.01 ?>">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                    <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a href="product-details.html" style="display:block;">
                                                    <h4><?= $r2['name'] ?></h4>
                                                    <div style=" text-decoration: line-through;"><?= number_format($r2['price']) ?><span style="text-decoration: underline;"><sup>đ</sup></span></div>
                                                    <div style="color:red;font-weight: bold;font-size: 18px;"><?= number_format($r2['price'] * (1 - $r2['discount'] / 100)) ?><span style="text-decoration: underline;"><sup>đ</sup></span></div>
                                                </a>
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
                                $rs2 = mysqli_query($connect, $sql2);
                                while ($r2 = mysqli_fetch_assoc($rs2)) {
                                ?>
                                    <div class="custom-col-5 custom-col-style mb-65">
                                        <div class="product-wrapper" style="text-align: center;">
                                            <div class="product-img">
                                                <a href="#" style="display:block;">
                                                    <img style="width:70%; height:70%;" src="<?= $r2['image'] ?>" alt="">
                                                </a>
                                                <span><?= -$r2['discount'] ?>%</span>
                                                <div class="product-action">
                                                    <a class="animate-left" title="Add To Cart" href="cart.php?id=<?= $r2['id'] ?>&name=<?= $r2['name'] ?>&price=<?= $r['price'] * (100 - $r['discount']) * 0.01 ?>">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                    <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a href="product-details.html" style="display:block;">
                                                    <h4><?= $r2['name'] ?></h4>
                                                    <div style=" text-decoration: line-through;"><?= number_format($r2['price']) ?><span style="text-decoration: underline;"><sup>đ</sup></span></div>
                                                    <div style="color:red;font-weight: bold;font-size: 18px;"><?= number_format($r2['price'] * (1 - $r2['discount'] / 100)) ?><span style="text-decoration: underline;"><sup>đ</sup></span></div>
                                                </a>
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
                                $rs2 = mysqli_query($connect, $sql2);
                                while ($r2 = mysqli_fetch_assoc($rs2)) {
                                ?>
                                    <div class="custom-col-5 custom-col-style mb-65">
                                        <div class="product-wrapper" style="text-align: center;">
                                            <div class="product-img">
                                                <a href="product-detai.php" style="display:block;">
                                                    <img style="width:70%; height:70%;" src="<?= $r2['image'] ?>" alt="">
                                                </a>
                                                <span><?= -$r2['discount'] ?>%</span>
                                                <div class="product-action">
                                                    <a class="animate-left" title="Add To Cart" href="cart.php?id=<?= $r2['id'] ?>&name=<?= $r2['name'] ?>&price=<?= $r['price'] * (100 - $r['discount']) * 0.01 ?>">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                    <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a href="product-details.html" style="display:block;">
                                                    <h4><?= $r2['name'] ?></h4>
                                                    <div style=" text-decoration: line-through;"><?= number_format($r2['price']) ?><span style="text-decoration: underline;"><sup>đ</sup></span></div>
                                                    <div style="color:red;font-weight: bold;font-size: 18px;"><?= number_format($r2['price'] * (1 - $r2['discount'] / 100)) ?><span style="text-decoration: underline;"><sup>đ</sup></span></div>
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
                    <div class="pagination-style mt-20 text-center">
                        <ul>
                            <li>
                                <a href="#"><i class="ti-angle-left"></i></a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">19</a></li>
                            <li class="active">
                                <a href="#"><i class="ti-angle-right"></i></a>
                            </li>
                        </ul>
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
    <?php include('footer.php') ?>
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
                                    <a class="btn-hover-black" href="cart.php?id=<?= $r2['id'] ?>&name=<?= $r2['name'] ?>&price=<?= $r['price'] * (100 - $r['discount']) / 100 ?>">add to cart</a>
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