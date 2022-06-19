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
    <!-- header end -->
    <!-- banner area start -->
    <div class="banner-area">
        <div class="row no-gutters">
            <div class="col-md-4">
                <div class="single-banner">
                    <a href="#id1"><img style="height:300px" src="user/assets/img/banner/banner2.png" alt=""></a>
                    <div class="banner-content banner-content-style1">
                        <h2><span style="color:white;">PRIMIUM</span></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-banner">
                    <a href="#id1"><img style="height:300px" src="user/assets/img/banner/banner3.png" alt=""></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-banner">
                    <a href="Categories_view.php?cate_id=1&&manu_id=5"><img style="height:300px" src="user/assets/img/banner/banner1.png" alt=""></a>
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
                                            <img style="width:70%; height:70%;" src="public/images/<?= $r['image'] ?>" alt="">
                                        </a>
                                        <span><?= -$r['discount'] ?>%</span>
                                        <div class="product-action">
                                            <?php if (isset($_SESSION['user'])) { ?>
                                                <a class="btn-add-to-cart animate-left" title="Add To Cart" data-id="<?php echo $r['id'] ?>">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="btn-view-detail animate-right" title="Quick View" data-id="<?php echo $r['id'] ?>" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            <?php } else { ?>
                                                <a class="animate-left" title="Đăng nhập" href="login.php">
                                                    <i class=" pe-7s-next"></i>
                                                </a>
                                            <?php } ?>
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
                                                    <img style="width:70%; height:70%;" src="public/images/<?= $r2['image'] ?>" alt="">
                                                </a>
                                                <span><?= -$r2['discount'] ?>%</span>
                                                <div class="product-action">
                                                    <?php if (isset($_SESSION['user'])) { ?>
                                                        <a class="btn-add-to-cart animate-left" title="Add To Cart" data-id="<?php echo $r2['id'] ?>">
                                                            <i class="pe-7s-cart"></i>
                                                        </a>
                                                        <a class="btn-view-detail animate-right" title="Quick View" data-id="<?php echo $r2['id'] ?>" data-toggle="modal" data-target="#exampleModal" href="#">
                                                            <i class="pe-7s-look"></i>
                                                        </a>
                                                    <?php } else { ?>
                                                        <a class="animate-left" title="Đăng nhập" href="login.php">
                                                            <i class=" pe-7s-next"></i>
                                                        </a>
                                                    <?php } ?>
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
                                                    <?php if (isset($_SESSION['user'])) { ?>
                                                        <a class="btn-add-to-cart animate-left" title="Add To Cart" data-id="<?php echo $r['id'] ?>">
                                                            <i class="pe-7s-cart"></i>
                                                        </a>
                                                        <a class="btn-view-detail animate-right" title="Quick View" data-id="<?php echo $r['id'] ?>" data-toggle="modal" data-target="#exampleModal" href="#">
                                                            <i class="pe-7s-look"></i>
                                                        </a>
                                                    <?php } else { ?>
                                                        <a class="animate-left" title="Đăng nhập" href="login.php">
                                                            <i class=" pe-7s-next"></i>
                                                        </a>
                                                    <?php } ?>
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
                                                    <?php if (isset($_SESSION['user'])) { ?>
                                                        <a class="btn-add-to-cart animate-left" title="Add To Cart" data-id="<?php echo $r['id'] ?>">
                                                            <i class="pe-7s-cart"></i>
                                                        </a>
                                                        <a class="btn-view-detail animate-right" title="Quick View" data-id="<?php echo $r['id'] ?>" data-toggle="modal" data-target="#exampleModal" href="#">
                                                            <i class="pe-7s-look"></i>
                                                        </a>
                                                    <?php } else { ?>
                                                        <a class="animate-left" title="Đăng nhập" href="login.php">
                                                            <i class=" pe-7s-next"></i>
                                                        </a>
                                                    <?php } ?>
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
                                                    <?php if (isset($_SESSION['user'])) { ?>
                                                        <a class="btn-add-to-cart animate-left" title="Add To Cart" data-id="<?php echo $r['id'] ?>">
                                                            <i class="pe-7s-cart"></i>
                                                        </a>
                                                        <a class="btn-view-detail animate-right" title="Quick View" data-id="<?php echo $r['id'] ?>" data-toggle="modal" data-target="#exampleModal" href="#">
                                                            <i class="pe-7s-look"></i>
                                                        </a>
                                                    <?php } else { ?>
                                                        <a class="animate-left" title="Đăng nhập" href="login.php">
                                                            <i class=" pe-7s-next"></i>
                                                        </a>
                                                    <?php } ?>
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
                                                    <?php if (isset($_SESSION['user'])) { ?>
                                                        <a class="btn-add-to-cart animate-left" title="Add To Cart" data-id="<?php echo $r['id'] ?>">
                                                            <i class="pe-7s-cart"></i>
                                                        </a>
                                                        <a class="btn-view-detail animate-right" title="Quick View" data-id="<?php echo $r['id'] ?>" data-toggle="modal" data-target="#exampleModal" href="#">
                                                            <i class="pe-7s-look"></i>
                                                        </a>
                                                    <?php } else { ?>
                                                        <a class="animate-left" title="Đăng nhập" href="login.php">
                                                            <i class=" pe-7s-next"></i>
                                                        </a>
                                                    <?php } ?>
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
                    <img src="user/assets/img/brand-logo/1.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="user/assets/img/brand-logo/2.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="user/assets/img/brand-logo/1.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="user/assets/img/brand-logo/3.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="user/assets/img/brand-logo/4.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="user/assets/img/brand-logo/5.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="user/assets/img/brand-logo/6.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- insta feed end -->
    <?php include('user/components/footer.php') ?>

    <!-- modal -->
    <?php include('user/components/modal_product.php') ?>
    <!-- all js here -->
    <?php include('user/components/link_footer.php') ?>
    <script>
        function convertNumberToCurrency(number) {
            const result = number.toLocaleString('it-IT', {
                style: 'currency',
                currency: 'VND'
            })
            return result;

        }
        $(document).ready(function() {
            // thêm sản phẩm vào giỏ hàng
            $(".btn-add-to-cart").click(function() {
                let id = $(this).data('id');
                $.ajax({
                        url: 'add_to_cart.php',
                        type: 'GET',
                        data: {
                            id
                        },
                    })
                    .done(function(response) {
                        $.notify(response + " vào giỏ hàng", "success");
                    })
            })

            // show modal chi tiết sản phẩm
            $(".btn-view-detail").click(function() {

                let id = $(this).data('id');
                $.ajax({
                        url: 'view_detail_modal.php',
                        type: 'GET',
                        data: {
                            id
                        },
                    })
                    .done(function(response) {
                        const product = JSON.parse(response)
                        console.log(product['name'])
                        $(".title-modal").text(product['name']);
                        $(".modal-quantity").text(`Số lượng: ${product['quantity']}`);
                        $(".title-price-old").text(convertNumberToCurrency(product['price']));
                        $(".title-price-new").text(convertNumberToCurrency(product['price'] - (product['price'] * product['discount'] / 100)));
                        $(".title-desc").text(product['description']);
                        $(".modal-image").attr("src", `public/images/${product['image']}`);
                        $(".modal-link").attr("href", `product-detail.php?id=${product['id']}`)
                    })
            })
        })

        <?php if (isset($_SESSION['login_success'])) { ?>
            $.notify('Đăng nhập thành công !', 'success');

        <?php unset($_SESSION['login_success']);
        } ?>
    </script>

</body>

</html>