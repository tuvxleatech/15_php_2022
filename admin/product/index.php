<?php
session_start();
$title = 'Tất cả sản phẩm';
require("../../services/connect.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('../components/head.php') ?>
</head>

<body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            <!-- LOGO -->
            <?php include('../components/logo.php') ?>
            <!-- END LOGO -->
            <div class="h-100" id="left-side-menu-container" data-simplebar>

                <!--- Sidemenu -->
                <?php
                include("../components/sidemenu.php");
                ?>
                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                <!-- Topbar Start -->
                <?php include('../components/topbar.php') ?>
                <!-- end Topbar -->

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <h4 class="page-title">Tất cả sản phẩm</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row justify-content-center">
                        <table class="table table-striped table-centered mb-0" style="text-align:center">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Nhà Sản Xuất</th>
                                    <th> Danh Mục</th>
                                    <th>Tên Sản Phẩm</th>
                                    <th>Hình Ảnh</th>
                                    <th>Giá</th>
                                    <th>Giảm giá</th>
                                    <th>Số Lượng</th>
                                    <th>Sửa</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "SELECT *,products.name as product_name,products.image as product_image, manufacturers.name as manufacturer_name ,categories.name as category_name FROM products 
                                INNER JOIN `manufacturers` ON products.id_manufacturer = manufacturers.id
                                INNER JOIN `categories` ON products.id_category = categories.id";
                                $rs = mysqli_query($connect, $sql);
                                $count = 0;
                                while ($r = mysqli_fetch_assoc($rs)) {
                                    $count++;
                                ?>
                                    <tr>
                                        <td><?= $count ?></td>
                                        <td><?= $r['manufacturer_name'] ?></td>
                                        <td><?= $r['category_name'] ?></td>
                                        <td style="max-width:200px"><?= $r['product_name'] ?></td>
                                        <td><img src="../../public/images/<?= $r['product_image'] ?>" alt="" style="width: 100px"></td>
                                        <td><?= number_format($r['price']) ?></td>
                                        <td><?= $r['discount'] ?>%</td>
                                        <td><?= $r['quantity'] ?></td>
                                        <td>
                                            <a href="edit_product.php?id=<?= $r['id'] ?>">
                                                <button class="btn btn-warning" style="margin-top:2px;">Sửa</button>
                                            </a>
                                        </td>
                                        <td>
                                            <button class="btn btn-danger" onclick="xoa(<?= $r['id'] ?>)">Xóa</button>

                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>

                        </table>
                        <form action="remove_product.php" method="post" id="xoa">
                            <input type="hidden" id="id" name="id">
                        </form>
                    </div>
                    <script>
                        function xoa(id) {
                            document.getElementById('id').value = id;
                            var form = document.getElementById('xoa');
                            swal({
                                    title: "Bạn chắc chắn?",
                                    text: "Khi đã xóa, bạn sẽ không thể lấy lại được bản ghi!",
                                    icon: "warning",
                                    buttons: true,
                                    dangerMode: true,
                                })
                                .then((willDelete) => {
                                    if (willDelete) {
                                        form.submit();
                                        swal("Bạn đã xóa một bản ghi! " + id, {
                                            icon: "success",
                                        });

                                    } else {
                                        swal("Bản ghi an toàn!");
                                    }
                                });
                        }

                        <?php
                        if ($_SESSION['success'] == "Thêm thành công") { ?>
                            swal("Success", "Thêm sản phẩm thành công", "success");
                        <?php
                        } else if ($_SESSION['success'] == "Sửa thành công") {
                        ?>
                            swal("Success", "Sửa sản phẩm thành công", "success");

                        <?php } ?>
                    </script>
                </div>
                <!-- container -->

            </div>
            <!-- content -->

            <!-- Footer Start -->
            <?php include('../footer.php'); ?>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">

        <div class="rightbar-title">
            <a href="javascript:void(0);" class="right-bar-toggle float-right">
                <i class="dripicons-cross noti-icon"></i>
            </a>
            <h5 class="m-0">Cài đặt</h5>
        </div>

        <div class="rightbar-content h-100" data-simplebar>

            <div class="p-3">
                <div class="alert alert-warning" role="alert">
                    <strong>Tùy chỉnh </strong> bảng màu tổng thể.
                </div>

                <!-- Settings -->
                <h5 class="mt-3">Bảng màu</h5>
                <hr class="mt-1" />

                <div class="custom-control custom-switch mb-1">
                    <input type="radio" class="custom-control-input" name="color-scheme-mode" value="light" id="light-mode-check" checked />
                    <label class="custom-control-label" for="light-mode-check">Chế độ sáng</label>
                </div>

                <div class="custom-control custom-switch mb-1">
                    <input type="radio" class="custom-control-input" name="color-scheme-mode" value="dark" id="dark-mode-check" />
                    <label class="custom-control-label" for="dark-mode-check">Chế độ tối</label>
                </div>
                <button class="btn btn-primary btn-block mt-4" id="resetBtn">Đặt lại về mặc định</button>
            </div> <!-- end padding-->

        </div>
    </div>

    <div class="rightbar-overlay"></div>
    <!-- /Right-bar -->

    <!-- bundle -->
    <script src="../assets/js/vendor.min.js"></script>
    <script src="../assets/js/app.min.js"></script>

    <!-- third party js -->
    <script src="../assets/js/vendor/apexcharts.min.js"></script>
    <script src="../assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
    <!-- third party js ends -->

    <!-- demo app -->
    <script src="../assets/js/pages/demo.dashboard.js"></script>
    <!-- end demo js-->
</body>

</html>