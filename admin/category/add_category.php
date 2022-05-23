<?php
session_start();
require('../connect.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Tất cả thể loại</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico">

    <!-- third party css -->
    <link href="../../assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- third party css end -->

    <!-- App css -->
    <link href="../../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/css/app-creative.min.css" rel="stylesheet" type="text/css" id="light-style" />
    <link href="../../assets/css/app-creative-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />
</head>

<body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        <?php include("../modules/left_sideBar.php"); ?>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                <!-- Topbar Start -->
                <?php include("../modules/header.php"); ?>
                <!-- end Topbar -->

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">


                                </div>
                                <h4 class="page-title">Thêm mới một thể loại</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-lg-10 ">
                           
                            <form method="post">
                                <div class="card col-6 offset-3">
                                    <div class="card-header">
                                        Thêm một thể loại
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="nameCategory">Tên thể loại</label>
                                            <input type="text" class="form-control" name="nameCategory" id="nameCategory" aria-describedby="helpId" placeholder="Tên thể loại">
                                        </div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        <button type="submit" class="btn btn-success">add</button>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                        <a href="../category/index.php" class="btn btn-info">List</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <?php
                if (isset($_POST['nameCategory'])) {
                    $name = $_POST['nameCategory'];
                    $sql = "INSERT INTO categories(name) VALUES ('$name')";
                    mysqli_query($connect, $sql);
                    mysqli_close($connect);
                }
                ?>

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
    <?php include("../modules/rightBar.php"); ?>

    <div class="rightbar-overlay"></div>
    <!-- /Right-bar -->

    <!-- bundle -->
    <script src="../../assets/js/vendor.min.js"></script>
    <script src="../../assets/js/app.min.js"></script>

    <!-- < script src = " https://unpkg.com/sweetalert/dist/sweetalert.min.js " > < /script >  -->
    <!-- third party js -->
    <script src="../../assets/js/vendor/apexcharts.min.js"></script>
    <script src="../../assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../../assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
    <!-- third party js ends -->

    <!-- demo app -->
    <script src="../../assets/js/pages/demo.dashboard.js"></script>
    <!-- end demo js-->
</body>

</html>