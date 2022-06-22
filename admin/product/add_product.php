<?php
session_start();
$title = "Thêm sản phẩm mới";
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
                <?php include("../components/sidemenu.php"); ?>
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
                <?php include('../components/topbar.php'); ?>
                <!-- end Topbar -->

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <h4 class="page-title">Thêm sản phẩm</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-lg-10 ">
                            <form action="process_add_product.php" method="post" enctype="multipart/form-data">
                                <table class="table table-striped table-centered mb-0">
                                    <tr>
                                        <th>Danh Mục</th>
                                        <td>
                                            <select name="id_category">
                                                <?php
                                                include("../../services/connect.php");
                                                $sql = "SELECT * FROM categories";
                                                $rs = mysqli_query($connect, $sql);
                                                while ($r = mysqli_fetch_assoc($rs)) {
                                                ?>
                                                    <option value="<?= $r['id'] ?>"><?= $r['name'] ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Nhà Sản Xuất</th>
                                        <td>
                                            <select name="id_manufacturer">
                                                <?php
                                                include("../../services/connect.php");
                                                $sql2 = "SELECT * FROM manufacturers";
                                                $rs2 = mysqli_query($connect, $sql2);
                                                while ($r2 = mysqli_fetch_assoc($rs2)) {
                                                ?>
                                                    <option value="<?= $r2['id'] ?>"><?= $r2['name'] ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Tên Sản Phẩm</th>
                                        <td> <input required type="text" name="product_name" style="width:62%"></td>
                                    </tr>
                                    <tr>
                                        <th>Giá</th>
                                        <td><input type="number" name="price" required min="1000" max="1000000000" step="1000"></td>
                                    </tr>
                                    <tr>
                                        <th>Giảm giá</th>
                                        <td>
                                            <select name="discount">
                                                <option value="0">0%</option>
                                                <option value="10">10%</option>
                                                <option value="20">20%</option>
                                                <option value="30">30%</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Số Lượng</th>
                                        <td><input type="number" name="quantity" required min="1" max="10000" step="1"></td>
                                    </tr>

                                    <tr>
                                        <th>Hình Ảnh</th>
                                        <td><input required type="file" name="img"></td>
                                    </tr>
                                    <tr>
                                        <th>Mô Tả</th>
                                        <td><textarea required name="description" rows="5" cols="60"></textarea></td>
                                    </tr>
                                    <tr>
                                        <th>Hành Động</th>
                                        <td><button type="submit" class="btn btn-primary">Thêm</button></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>

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