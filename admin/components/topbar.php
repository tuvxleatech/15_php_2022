<?php
$actual_link = "$_SERVER[REQUEST_URI]";
if ($actual_link === "/15_php_2022/admin/" || $actual_link === "/15_php_2022/admin/index.php") {
    $src_assets = "";
} else {
    $src_assets = "../";
}
?>
<div class="navbar-custom">
    <ul class="list-unstyled topbar-right-menu float-right mb-0">
        <li class="dropdown notification-list d-lg-none">
            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <i class="dripicons-search noti-icon"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
            </div>
        </li>
        <li class="dropdown notification-list topbar-dropdown">
            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <img src="<?php echo $src_assets ?>assets/images/flags/us.jpg" alt="user-image" class="mr-0 mr-sm-1" height="12">
                <span class="align-middle d-none d-sm-inline-block">Tiếng việt</span> <i class="mdi mdi-chevron-down d-none d-sm-inline-block align-middle"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu">

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <img src="<?php echo $src_assets ?>assets/images/flags/germany.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">German</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <img src="<?php echo $src_assets ?>assets/images/flags/italy.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Italian</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <img src="<?php echo $src_assets ?>assets/images/flags/spain.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Spanish</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <img src="<?php echo $src_assets ?>assets/images/flags/russia.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Russian</span>
                </a>

            </div>
        </li>

        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <i class="dripicons-bell noti-icon"></i>
                <span class="noti-icon-badge"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                <!-- item-->
                <div class="dropdown-item noti-title">
                    <h5 class="m-0">
                        <span class="float-right">
                            <a href="javascript: void(0);" class="text-dark">
                                <small>Xóa tất cả</small>
                            </a>
                        </span>Thông báo
                    </h5>
                </div>

                <div style="max-height: 230px;" data-simplebar>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-primary">
                            <i class="mdi mdi-comment-account-outline"></i>
                        </div>
                        <p class="notify-details">Caleb Flakelar đã nhận xét về Admin
                            <small class="text-muted">1 phút truóc</small>
                        </p>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-info">
                            <i class="mdi mdi-account-plus"></i>
                        </div>
                        <p class="notify-details">Người dùng mới đã đăng ký.
                            <small class="text-muted">5 giờ trước</small>
                        </p>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon">
                            <img src="<?php echo $src_assets ?>assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" />
                        </div>
                        <p class="notify-details">Xuân Hoàng</p>
                        <p class="text-muted mb-0 user-msg">
                            <small>Chào! Bạn khỏe không? Còn cuộc họp tiếp theo của chúng ta thì sao</small>
                        </p>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon">
                            <img src="<?php echo $src_assets ?>assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" />
                        </div>
                        <p class="notify-details">Duy Khương</p>
                        <p class="text-muted mb-0 user-msg">
                            <small>Ồ ! quản trị viên này có vẻ tốt và thiết kế tuyệt vời</small>
                        </p>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-info">
                            <i class="mdi mdi-heart"></i>
                        </div>
                        <p class="notify-details">Văn Hùng thích
                            <b>Admin</b>
                            <small class="text-muted">13 ngày trước</small>
                        </p>
                    </a>
                </div>

                <!-- All-->
                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                    Xem tất cả
                </a>

            </div>
        </li>

        <li class="dropdown notification-list d-none d-sm-inline-block">
            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <i class="dripicons-view-apps noti-icon"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg p-0">

                <div class="p-2">
                    <div class="row no-gutters">
                        <div class="col">
                            <a class="dropdown-icon-item" href="#">
                                <img src="<?php echo $src_assets ?>assets/images/brands/slack.png" alt="slack">
                                <span>Slack</span>
                            </a>
                        </div>
                        <div class="col">
                            <a class="dropdown-icon-item" href="#">
                                <img src="<?php echo $src_assets ?>assets/images/brands/github.png" alt="Github">
                                <span>GitHub</span>
                            </a>
                        </div>
                        <div class="col">
                            <a class="dropdown-icon-item" href="#">
                                <img src="<?php echo $src_assets ?>assets/images/brands/dribbble.png" alt="dribbble">
                                <span>Dribbble</span>
                            </a>
                        </div>
                    </div>

                    <div class="row no-gutters">
                        <div class="col">
                            <a class="dropdown-icon-item" href="#">
                                <img src="<?php echo $src_assets ?>assets/images/brands/bitbucket.png" alt="bitbucket">
                                <span>Bitbucket</span>
                            </a>
                        </div>
                        <div class="col">
                            <a class="dropdown-icon-item" href="#">
                                <img src="<?php echo $src_assets ?>assets/images/brands/dropbox.png" alt="dropbox">
                                <span>Dropbox</span>
                            </a>
                        </div>
                        <div class="col">
                            <a class="dropdown-icon-item" href="#">
                                <img src="<?php echo $src_assets ?>assets/images/brands/g-suite.png" alt="G Suite">
                                <span>G Suite</span>
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </li>

        <li class="notification-list">
            <a class="nav-link right-bar-toggle" href="javascript: void(0);">
                <i class="dripicons-gear noti-icon"></i>
            </a>
        </li>

        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <span class="account-user-avatar">
                    <img src="<?php echo $src_assets ?>assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                </span>
                <span>
                    <span class="account-user-name"><?php echo $_SESSION['admin']['name'] ?></span>
                    <span class="account-position">Founder</span>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                <!-- item-->
                <div class=" dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Xin chào !</h6>
                </div>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="mdi mdi-account-circle mr-1"></i>
                    <span>Trang cá nhân</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="mdi mdi-account-edit mr-1"></i>
                    <span>Cài đặt</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="mdi mdi-lifebuoy mr-1"></i>
                    <span>Hỗ trợ</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="mdi mdi-lock-outline mr-1"></i>
                    <span>Lock Screen</span>
                </a>

                <!-- item-->
                <a href="../logout.php" class="dropdown-item notify-item">
                    <i class="mdi mdi-logout mr-1"></i>
                    <span>Đăng xuất</span>
                </a>

            </div>
        </li>

    </ul>
    <button class="button-menu-mobile open-left disable-btn">
        <i class="mdi mdi-menu"></i>
    </button>
    <div class="app-search dropdown d-none d-lg-block">
        <form>
            <div class="input-group">
            </div>
    </div>

    </form>

    <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
        <!-- item-->
        <div class="dropdown-header noti-title">
            <h5 class="text-overflow mb-2">Found <span class="text-danger">17</span> results</h5>
        </div>

        <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item notify-item">
            <i class="uil-notes font-16 mr-1"></i>
            <span>Analytics Report</span>
        </a>

        <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item notify-item">
            <i class="uil-life-ring font-16 mr-1"></i>
            <span>How can I help you?</span>
        </a>

        <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item notify-item">
            <i class="uil-cog font-16 mr-1"></i>
            <span>User profile settings</span>
        </a>

        <!-- item-->
        <div class="dropdown-header noti-title">
            <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
        </div>

        <div class="notification-list">
            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
                <div class="media">
                    <img class="d-flex mr-2 rounded-circle" src="<?php echo $src_assets ?>assets/images/users/avatar-2.jpg" alt="Generic placeholder image" height="32">
                    <div class="media-body">
                        <h5 class="m-0 font-14">Erwin Brown</h5>
                        <span class="font-12 mb-0">UI Designer</span>
                    </div>
                </div>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
                <div class="media">
                    <img class="d-flex mr-2 rounded-circle" src="<?php echo $src_assets ?>assets/images/users/avatar-5.jpg" alt="Generic placeholder image" height="32">
                    <div class="media-body">
                        <h5 class="m-0 font-14">Jacob Deo</h5>
                        <span class="font-12 mb-0">Developer</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
</div>