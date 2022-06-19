<?php
$actual_link = "$_SERVER[REQUEST_URI]";
if ($actual_link === "/15_php_2022/admin/" || $actual_link === "/15_php_2022/admin/index.php") {
    if (str_contains($actual_link, "product")) {
        $url_product = "../product/index.php";
        $url_add_product = "../product/add_product.php";
    } else {
        $url_product = "product/index.php";
        $url_add_product = "product/add_product.php";
    }

    if (str_contains($actual_link, "manufacturer")) {
        $url_manufacturer = "../manufacturer/index.php";
        $url_add_manufacturer = "../manufacturer/add_manufacturer.php";
    } else {
        $url_product = "product/index.php";
        $url_add_product = "product/add_product.php";
    }

    $src_assets = "";
} else {
    if (str_contains($actual_link, "product")) {
        echo 'contain';
        $url_product = "index.php";
        $url_add_product = "add_product.php";
    } else {
        $url_product = "../product/index.php";
        $url_add_product = "../product/add_product.php";
    }

    if (str_contains($actual_link, "manufacturer")) {
        echo 'contain';
        $url_manufacturer = "index.php";
        $url_add_manufacturer = "add_manufacturer.php";
    } else {
        $url_manufacturer = "../manufacturer/index.php";
        $url_add_manufacturer = "../manufacturer/add_manufacturer.php";
    }


    $src_assets = "../";
}


?>
<ul class="metismenu side-nav">
    <li class="side-nav-title side-nav-item">Trang chủ</li>
    <li class="side-nav-item">
        <a href="javascript: void(0);" class="side-nav-link">
            <i class="uil-store"></i>
            <span>Quản lý sản phẩm </span>
            <span class="menu-arrow"></span>
        </a>
        <ul class="side-nav-second-level" aria-expanded="false">
            <li>
                <a href="<?php echo $url_product; ?>">Tất cả sản phẩm</a>
            </li>
            <li>
                <a href="<?php echo $url_add_product; ?>">Thêm sản phẩm mới</a>
            </li>
        </ul>
    </li>
    <li class="side-nav-item">
        <a href="javascript: void(0);" class="side-nav-link">
            <i class="uil-store"></i>
            <span> Quản lý nhà sản xuất </span>
            <span class="menu-arrow"></span>
        </a>
        <ul class="side-nav-second-level" aria-expanded="false">
            <li>
                <a href="<?php echo $url_manufacturer ?>">Tất cả nhà sản xuất</a>
            </li>
            <li>
                <a href="<?php echo $url_add_manufacturer ?>">Thêm nhà sản xuất mới</a>
            </li>
        </ul>
    </li>
    <li class="side-nav-item">
        <a href="javascript: void(0);" class="side-nav-link">
            <i class="uil-store"></i>
            <span> Quản lý nhân viên </span>
            <span class="menu-arrow"></span>
        </a>
        <ul class="side-nav-second-level" aria-expanded="false">
            <li>
                <a href="apps-ecommerce-products.html">Danh sách nhân viên</a>
            </li>
            <li>
                <a href="apps-ecommerce-products-details.html">Thêm mới nhân viên</a>
            </li>
        </ul>
    </li>
    <li class="side-nav-item">
        <a href="javascript: void(0);" class="side-nav-link">
            <i class="uil-store"></i>
            <span> Quản lý khách hàng </span>
            <span class="menu-arrow"></span>
        </a>
        <ul class="side-nav-second-level" aria-expanded="false">
            <li>
                <a href="customer">Danh sách khách hàng</a>
            </li>
        </ul>
    </li>
    <li class="side-nav-item">
        <a href="javascript: void(0);" class="side-nav-link">
            <i class="uil-store"></i>
            <span> Quản lý đơn hàng </span>
            <span class="menu-arrow"></span>
        </a>
        <ul class="side-nav-second-level" aria-expanded="false">
            <li>
                <a href="order">Danh sách đơn hàng</a>
            </li>
        </ul>
    </li>
</ul>