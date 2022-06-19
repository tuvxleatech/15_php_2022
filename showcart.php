<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php include('user/components/head.php') ?>
</head>
<script>
    function suasoluong(id) {
        var f = document.getElementById('suasl');
        document.getElementById('id').value = id;
        f.submit();
    }
</script>
<?php
session_start();
?>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- header start -->
    <?php include('user/components/header.php') ?>
    <!-- header end -->
    <!-- shopping-cart-area start -->
    <div class="cart-main-area pt-95 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1 class="cart-heading">Giỏ hàng</h1>
                    <form action="#">
                        <div class="table-content table-responsive">
                            <?php
                            //lấy giỏ hàng
                            if (isset($_SESSION['cart'])) {
                                $cart = $_SESSION['cart'];
                            ?>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên hàng</th>
                                            <th>Hình ảnh</th>
                                            <th>Số lượng</th>
                                            <th>Đơn giá</th>
                                            <th>Thành tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $count = 0;
                                        $total_money = 0;
                                        $total_quantity = 0; ?>
                                        <?php foreach ($cart as $id => $item) : ?>
                                            <?php
                                            $count++;
                                            $total_quantity += $item['quantity'];
                                            $total_money += $item['quantity'] * $item['price'];
                                            ?>
                                            <tr>
                                                <td><?= $count ?></td>
                                                <td><?= $item['name'] ?></td>
                                                <td><img src="public/images/<?php echo $item['image'] ?>" class="cart-image" alt=""></td>
                                                <td class="product-quantity">
                                                    <button class="btn btn-secondary btn-update-quantity" data-id="<?php echo $id ?>" data-type="0">-</button>
                                                    <span class="span-quantity"><?php echo $item['quantity'] ?></span>
                                                    <button class="btn btn-secondary btn-update-quantity" data-id="<?php echo $id ?>" data-type="1">+</button>
                                                </td>
                                                <td><?= number_format($item['price']) ?></td>
                                                <td><?= number_format($item['quantity'] * $item['price']) ?></td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            <?php
                            } else {
                                echo 'Không có hàng trong giỏ';
                            }
                            ?>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="coupon-all">
                                    <div class="coupon2">
                                        <button class="button-primary"><a href="reset_cart.php">Xóa tất cả sản phẩm</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (isset($_SESSION['cart'])) { ?>
                            <div class="row">
                                <div class="col-md-5 ml-auto">
                                    <div class="cart-page-total">
                                        <h2>Tổng</h2>
                                        <ul>
                                            <li>Số sản phẩm: <span>
                                                    <?php
                                                    if (isset($total_quantity)) {
                                                        echo $total_quantity;
                                                    } else echo 0;
                                                    ?>
                                                </span></li>
                                            <li>Tổng tiền: <span>
                                                    <?php
                                                    if (isset($total_money)) {
                                                        echo number_format($total_money);
                                                    } else echo 0;
                                                    ?>
                                                </span></li>
                                        </ul>
                                        <a href="checkout.php">Đặt hàng</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- shopping-cart-area end -->
    <?php include('user/components/footer.php') ?>
    <!-- modal -->
    <div class="modal fade" id="exampleCompare" tabindex="-1" role="dialog" aria-hidden="true">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="pe-7s-close" aria-hidden="true"></span>
        </button>
        <div class="modal-dialog modal-compare-width" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="#">
                        <div class="table-content compare-style table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>
                                            <a href="#">Remove <span>x</span></a>
                                            <img src="user/assets/img/cart/4.jpg" alt="">
                                            <p>Blush Sequin Top </p>
                                            <span>$75.99</span>
                                            <a class="compare-btn" href="#">Add to cart</a>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>Description </h4>
                                        </td>
                                        <td class="compare-dec compare-common">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has beenin the stand ard dummy text ever since the 1500s, when an unknown printer took a galley</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>Sku </h4>
                                        </td>
                                        <td class="product-none compare-common">
                                            <p>-</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>Availability </h4>
                                        </td>
                                        <td class="compare-stock compare-common">
                                            <p>In stock</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>Weight </h4>
                                        </td>
                                        <td class="compare-none compare-common">
                                            <p>-</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>Dimensions </h4>
                                        </td>
                                        <td class="compare-stock compare-common">
                                            <p>N/A</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>brand </h4>
                                        </td>
                                        <td class="compare-brand compare-common">
                                            <p>HasTech</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>color </h4>
                                        </td>
                                        <td class="compare-color compare-common">
                                            <p>Grey, Light Yellow, Green, Blue, Purple, Black </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>size </h4>
                                        </td>
                                        <td class="compare-size compare-common">
                                            <p>XS, S, M, L, XL, XXL </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title"></td>
                                        <td class="compare-price compare-common">
                                            <p>$75.99 </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- all js here -->
    <?php include('user/components/link_footer.php') ?>
    <script>
        $(document).ready(function() {

            $(".btn-update-quantity").click(function() {
                const btn = $(this);
                let id = $(this).data('id');
                let type = $(this).data('type');
                $.ajax({
                        url: 'update_quantity.php',
                        type: 'GET',
                        data: {
                            id,
                            type
                        },
                    })
                    .done(function() {
                        let parent_tr = btn.parents('tr');
                        let price = parseInt(parent_tr.find(".span-price").text().replace(/,/g, ''));
                        let quantity = parent_tr.find(".span-quantity").text();

                        if (type === 1) {
                            quantity++;
                        } else {
                            quantity--;
                        }
                        if (quantity === 0) {
                            parent_tr.remove()
                        } else {
                            parent_tr.find(".span-quantity").text(quantity);
                            let sum = price * quantity;
                            parent_tr.find('.span-sum').text(sum.format());
                        }
                        getTotal()
                    })
            });
        })
    </script>
</body>

</html>