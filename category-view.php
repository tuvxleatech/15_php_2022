<?php
include("services/connect.php");
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php include('user/components/head.php') ?>
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
                                                <img style="width:90%; height:90%;" src="public/images/<?= $r3['image'] ?>" alt="">
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
    <?php include('user/components/footer.php') ?>
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
                                    <img src="user/assets/img/quick-view/l1.jpg" alt="">
                                </div>
                                <div class="tab-pane fade" id="modal2" role="tabpanel">
                                    <img src="user/assets/img/quick-view/l2.jpg" alt="">
                                </div>
                                <div class="tab-pane fade" id="modal3" role="tabpanel">
                                    <img src="user/assets/img/quick-view/l3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="quick-view-list nav" role="tablist">
                            <a class="active" href="#modal1" data-toggle="tab" role="tab" aria-selected="true" aria-controls="home1">
                                <img src="user/assets/img/quick-view/s1.jpg" alt="">
                            </a>
                            <a href="#modal2" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home2">
                                <img src="user/assets/img/quick-view/s2.jpg" alt="">
                            </a>
                            <a href="#modal3" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home3">
                                <img src="user/assets/img/quick-view/s3.jpg" alt="">
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
    <?php include('user/components/link_footer.php') ?>
</body>

</html>