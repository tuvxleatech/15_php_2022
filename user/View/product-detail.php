<?php
require('../../services/connect.php');
$id = $_GET['id'];
$sql = "SELECT * FROM `products` WHERE id = $id";
$result = mysqli_query($connect, $sql);
$product = mysqli_fetch_array($result);
$id_manufacturer = $product['id_manufacturer'];
$sql = "SELECT * FROM `products` WHERE id_manufacturer = $id_manufacturer LIMIT 3";

$related_products = mysqli_query($connect, $sql);
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <?php include('components/head.php') ?>
  <style>
    .notifyjs-foo-base {
      opacity: 0.85;
      width: 200px;
      background: #F5F5F5;
      padding: 5px;
      border-radius: 10px;
    }

    .notifyjs-foo-base .title {
      width: 100px;
      float: left;
      margin: 10px 0 0 10px;
      text-align: right;
    }

    .notifyjs-foo-base .buttons {
      width: 70px;
      float: right;
      font-size: 9px;
      padding: 5px;
      margin: 2px;
    }

    .notifyjs-foo-base button {
      font-size: 9px;
      padding: 5px;
      margin: 2px;
      width: 60px;
    }
  </style>
</head>

<body>
  <!--[if lt IE 8]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
      </p>
    <![endif]-->
  <!-- header start -->
  <?php include('components/header.php') ?>
  <!-- header end -->
  <div class="breadcrumb-area">
    <div class="container">
      <div class="breadcrumb-content text-center">
        <h2 class="text-dark">Chi tiết sản phẩm</h2>
        <button class="btn btn-success btn-test"></button>

      </div>
    </div>
  </div>
  <div class="product-details ptb-100 pb-90">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-7 col-12">
          <div class="product-details-img-content">
            <div class="product-details-tab mr-35 product-details-tab2">
              <div class="product-details-small nav mr-10 product-details-2" role="tablist">
                <a class="active mb-10" href="#pro-details1" data-toggle="tab" role="tab" aria-selected="true">
                  <img src="assets/img/product-details/s5.jpg" alt="" />
                </a>
                <a class="mb-10" href="#pro-details2" data-toggle="tab" role="tab" aria-selected="true">
                  <img src="assets/img/product-details/s6.jpg" alt="" />
                </a>
                <a class="mb-10" href="#pro-details3" data-toggle="tab" role="tab" aria-selected="true">
                  <img src="assets/img/product-details/s7.jpg" alt="" />
                </a>
                <a class="mb-10" href="#pro-details4" data-toggle="tab" role="tab" aria-selected="true">
                  <img src="assets/img/product-details/s8.jpg" alt="" />
                </a>
              </div>
              <div class="product-details-large tab-content">
                <div class="tab-pane active show fade" id="pro-details1" role="tabpanel">
                  <div class="easyzoom easyzoom--overlay is-ready">
                    <a href="assets/img/product-details/bl1.jpg">
                      <img src="<?php echo $product['image'] ?>" alt="" />
                    </a>
                  </div>
                </div>
                <div class="tab-pane fade" id="pro-details2" role="tabpanel">
                  <div class="easyzoom easyzoom--overlay is-ready">
                    <a href="assets/img/product-details/bl2.jpg">
                      <img src="assets/img/product-details/l6-details-2.jpg" alt="" />
                    </a>
                  </div>
                </div>
                <div class="tab-pane fade" id="pro-details3" role="tabpanel">
                  <div class="easyzoom easyzoom--overlay is-ready">
                    <a href="assets/img/product-details/bl3.jpg">
                      <img src="assets/img/product-details/l7-details-2.jpg" alt="" />
                    </a>
                  </div>
                </div>
                <div class="tab-pane fade" id="pro-details4" role="tabpanel">
                  <div class="easyzoom easyzoom--overlay is-ready">
                    <a href="assets/img/product-details/bl4.jpg">
                      <img src="assets/img/product-details/l8-details-2.jpg" alt="" />
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-5 col-12">
          <div class="product-details-content">
            <h3><?php echo $product['name'] ?></h3>
            <div class="rating-number">
              <div class="quick-view-rating">
                <i class="pe-7s-star red-star"></i>
                <i class="pe-7s-star red-star"></i>
                <i class="pe-7s-star"></i>
                <i class="pe-7s-star"></i>
                <i class="pe-7s-star"></i>
              </div>
              <div class="quick-view-number">
                <span>2 Ratting (S)</span>
              </div>
            </div>
            <div class="details-price">
              <span><?php echo number_format($product['price']) ?>VND</span>
            </div>
            <p>
              <?php echo ($product['description']) ?>
            </p>

            <div class="quickview-plus-minus">
              <div class="cart-plus-minus">
                <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box" />
              </div>
              <div class="quickview-btn-cart">
                <a class="btn-hover-black" href="#">Thêm vào giỏ hàng</a>
              </div>
              <div class="quickview-btn-wishlist">
                <a class="btn-hover" href="#"><i class="pe-7s-like"></i></a>
              </div>
            </div>
            <div class="product-details-cati-tag mt-35">
              <ul>
                <li class="categories-title">Danh mục:</li>
                <li><a href="#">fashion</a></li>
                <li><a href="#">electronics</a></li>
                <li><a href="#">toys</a></li>
                <li><a href="#">food</a></li>
                <li><a href="#">jewellery</a></li>
              </ul>
            </div>
            <div class="product-details-cati-tag mtb-10">
              <ul>
                <li class="categories-title">Tags :</li>
                <li><a href="#">fashion</a></li>
                <li><a href="#">electronics</a></li>
                <li><a href="#">toys</a></li>
                <li><a href="#">food</a></li>
                <li><a href="#">jewellery</a></li>
              </ul>
            </div>
            <div class="product-share">
              <ul>
                <li class="categories-title">Chia sẻ :</li>
                <li>
                  <a href="#">
                    <i class="icofont icofont-social-facebook"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="icofont icofont-social-twitter"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="icofont icofont-social-pinterest"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="icofont icofont-social-flikr"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="product-description-review-area pb-90">
    <div class="container">
      <div class="product-description-review text-center">
        <div class="description-review-title nav" role="tablist">
          <a class="active" href="#pro-dec" data-toggle="tab" role="tab" aria-selected="true">Mô cả sản phẩm</a>
          <a href="#pro-review" data-toggle="tab" role="tab" aria-selected="false"> Đánh giá (0) </a>
        </div>
        <div class="description-review-text tab-content">
          <div class="tab-pane active show fade" id="pro-dec" role="tabpanel">
            <p>
              <?php echo $product['description'] ?>
            </p>
          </div>
          <div class="tab-pane fade" id="pro-review" role="tabpanel">
            <a href="#">Be the first to write your review!</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- product area start -->
  <div class="product-area pb-95">
    <div class="container">
      <div class="section-title-3 text-center mb-50">
        <h2>Sản phẩm liên quan</h2>
      </div>
      <div class="product-style">
        <div class="related-product-active owl-carousel">
          <?php foreach ($related_products as $related_product) : ?>
            <div class="product-wrapper">
              <div class="product-img">
                <a href="product-detail.php?id=<?php echo $related_product['id'] ?>">
                  <img src="<?php echo $related_product['image'] ?>" alt="" />
                </a>
                <span>hot</span>
                <div class="product-action">
                  <a class="animate-left" title="Wishlist" href="#">
                    <i class="pe-7s-like"></i>
                  </a>
                  <a class="animate-top" title="Add To Cart" href="#">
                    <i class="pe-7s-cart"></i>
                  </a>
                  <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                    <i class="pe-7s-look"></i>
                  </a>
                </div>
              </div>
              <div class="product-content">
                <h4><a href="product-detail.php?id=<?php echo $related_product['id'] ?>"><?php echo $related_product['name'] ?></a></h4>
                <span><?php echo number_format($related_product['price'] - $related_product['price'] * $related_product['discount'] / 100)  ?>VND</span>
              </div>
            </div>
          <?php endforeach ?>
        </div>
      </div>
    </div>
  </div>
  <!-- product area end -->
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
                  <img src="assets/img/quick-view/l1.jpg" alt="" />
                </div>
                <div class="tab-pane fade" id="modal2" role="tabpanel">
                  <img src="assets/img/quick-view/l2.jpg" alt="" />
                </div>
                <div class="tab-pane fade" id="modal3" role="tabpanel">
                  <img src="assets/img/quick-view/l3.jpg" alt="" />
                </div>
              </div>
            </div>
            <div class="quick-view-list nav" role="tablist">
              <a class="active" href="#modal1" data-toggle="tab" role="tab">
                <img src="assets/img/quick-view/s1.jpg" alt="" />
              </a>
              <a href="#modal2" data-toggle="tab" role="tab">
                <img src="assets/img/quick-view/s2.jpg" alt="" />
              </a>
              <a href="#modal3" data-toggle="tab" role="tab">
                <img src="assets/img/quick-view/s3.jpg" alt="" />
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
                  <span>2 Đánh giá (S)</span>
                </div>
              </div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adip elit, sed do tempor incididun ut labore et dolore magna
                aliqua. Ut enim ad mi , quis nostrud veniam exercitation .
              </p>
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
                  <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box" />
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
                      <img src="assets/img/cart/4.jpg" alt="" />
                      <p>Blush Sequin Top</p>
                      <span>$75.99</span>
                      <a class="compare-btn" href="#">Add to cart</a>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="compare-title">
                      <h4>Description</h4>
                    </td>
                    <td class="compare-dec compare-common">
                      <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        beenin the stand ard dummy text ever since the 1500s, when an unknown printer took a galley
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td class="compare-title">
                      <h4>Sku</h4>
                    </td>
                    <td class="product-none compare-common">
                      <p>-</p>
                    </td>
                  </tr>
                  <tr>
                    <td class="compare-title">
                      <h4>Availability</h4>
                    </td>
                    <td class="compare-stock compare-common">
                      <p>In stock</p>
                    </td>
                  </tr>
                  <tr>
                    <td class="compare-title">
                      <h4>Weight</h4>
                    </td>
                    <td class="compare-none compare-common">
                      <p>-</p>
                    </td>
                  </tr>
                  <tr>
                    <td class="compare-title">
                      <h4>Dimensions</h4>
                    </td>
                    <td class="compare-stock compare-common">
                      <p>N/A</p>
                    </td>
                  </tr>
                  <tr>
                    <td class="compare-title">
                      <h4>brand</h4>
                    </td>
                    <td class="compare-brand compare-common">
                      <p>HasTech</p>
                    </td>
                  </tr>
                  <tr>
                    <td class="compare-title">
                      <h4>color</h4>
                    </td>
                    <td class="compare-color compare-common">
                      <p>Grey, Light Yellow, Green, Blue, Purple, Black</p>
                    </td>
                  </tr>
                  <tr>
                    <td class="compare-title">
                      <h4>size</h4>
                    </td>
                    <td class="compare-size compare-common">
                      <p>XS, S, M, L, XL, XXL</p>
                    </td>
                  </tr>
                  <tr>
                    <td class="compare-title"></td>
                    <td class="compare-price compare-common">
                      <p>$75.99</p>
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
  <script src="/scripts/js/jquery.min.js"></script>
  <script src="/bootstrap/js/notify.js"></script>
  <script>
    $(document).ready(function() {
      $(".btn-test").click(function() {
        $.notify("Hello World");
      })
    });
  </script>
</body>

</html>