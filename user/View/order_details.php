<?php
include("../../services/connect.php");
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php include('components/head.php') ?>
</head>

<body>
    <?php
        session_start(); 
        include("../../services/connect.php");
    ?>
    <!-- header start -->
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
        </div>
    </div>
    <!-- header end -->

     <!-- body start -->
     <body>
        <?php
            //lấy id của bản ghi cần xem
            $id = $_GET['order_id'];
            $id = 1;
            $sql = "SELECT * FROM order_product WHERE id_order = '$id'"; 
            
            $rs = mysqli_query($connect,$sql);
        ?>
        <div class="cart-main-area pt-95 pb-100">
        <br><br><br><br><br><br><br>    
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6">
                    <h1 class="cart-heading">Chi tiết hóa đơn</h1>
                    <form action="#">
                        <div class="table-content table-responsive">
                            <?php
                            //lấy giỏ hàng
                            if (isset($_SESSION['user'])) {  
                            ?>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Mô tả</th>    
                                            <th>Số lượng</th>
                                            <th>Đơn giá</th>
                                            <th>Thành tiền</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $count = 0;
                                        $total = 0;
                                         while($row = mysqli_fetch_assoc($rs)){
                                            $product_id = $row['id_product'];
                                            $sql2 = "SELECT * FROM products WHERE id= '$product_id'";
                                            $rs2 = mysqli_query($connect,$sql2);
                                            $row2 = mysqli_fetch_assoc($rs2);
                                            $count++;
                                        ?>
                                          <tr>
                                            <td><?=$count?></td>
                                            <td><?=$row2['name']?></td>
                                            <td><?=$row2['description']?></td>
                                            <td><?=$row['quantity']?></td>
                                            <th><?=number_format($row2['price']*( 100-$row2['discount'] )/100)?></th>
                                            <td><?=number_format($row['quantity']*$row2['price']*( 100-$row2['discount'] )/100)?></td>
                                            <?php
                                                $total += ($row['quantity']*$row2['price']*( 100-$row2['discount'] )/100);
                                            ?>
                                          </tr>
                                        <?php  
                                            // close while()  
                                          }
                                        ?>
                                         <tr>
                                            <td colspan="5"><strong>Tổng tiền</strong></td>
                                            <td><b id="tongTien"><?= number_format($total) ?></b></td>
                                        </tr>
                                    </tbody>
                                </table>
                            <?php
                            } else {
                                echo 'Đăng nhập để xem lại lịch sử mua hàng';
                            }
                            ?>
                        </div>
                        <div class="row">
                            <div class="col-md-5 ml-auto">
                                <div class="cart-page-total">
                                    <a href="index.php">Trở về trang chủ</a>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

     </body>

     <!-- footer start -->
     <?php
        include('footer.php');
    ?>
    
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


</html>


