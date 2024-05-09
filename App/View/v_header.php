<?php

// $danhmuc = $data["danhmuc"];
$theloai = $data["theloai"];
$html_brand = '';
foreach ($theloai as $value) {
    $so = number_format($value['giatri'], 1, ',', '.'); // Định dạng số
    $parts = explode(',', $so);
    if ($parts[1] == 0) {
        $html_brand .= '
    <div class="col-xs-12">
    <div class="single-brand-product">
        <a href="single-product.html"><img src="Public/img/brand/' . $value['hinh'] . '" alt=""></a>
        <h3 class="brand-title text-gray">
            <a href="#">' . $value['tentheloai'] . '</a>
        </h3>
    </div>
</div>';
    }

}
$html_danhmuc = '';
foreach ($theloai as $value) {
    if ($value['giatri'] == 0) {
        $html_theloai = '';
        foreach ($theloai as $key) {
            if ($value['id_tl'] == $key['giatri']) {
                $html_theloai .= '<li><a href="' . BASE_PATH . '/product/idcatalog/' . $key['id_tl'] . '">' . $key['tentheloai'] . '</a></li>';
            }
        }
        $html_danhmuc .= '
        <ul class="single-mega-item">
            <li class="menu-title">' . $value['tentheloai'] . '</li>
            ' . $html_theloai . '
        </ul>';
    }
}
// unset($_SESSION['cart']);
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
// $so = number_format($value['giatri'], 1, ',', '.'); // Định dạng số
// $parts = explode(',', $so);
// $html_theloai = '';
// if ($parts[1] == 0) {
// $l++;
// foreach ($theloai as $key) {
// $so = number_format($key['giatri'], 1, ',', '.');
// $parts = explode(',', $so);
// if ($parts[0] == $l && $parts[1] != 0) {
// $html_theloai .= '<li><a href="' . BASE_PATH . '/product/idcatalog/' . $key['id_tl'] . '">' . $key['tentheloai'] .
// '</a></li>';
// }
// }

// }
// echo '<pre>';
// var_dump($_SESSION['cart']);
// echo '</pre>';

// unset($_SESSION['cart']);
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Subash || Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/icon/favicon.png">

    <!-- All CSS Files -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="<?=BASE_PATH?>/Public/css/bootstrap.min.css">
    <!-- Nivo-slider css -->
    <link rel="stylesheet" href="<?=BASE_PATH?>/Public/lib/css/nivo-slider.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="<?=BASE_PATH?>/Public/css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="<?=BASE_PATH?>/Public/css/shortcode/shortcodes.css">

    <!-- Theme main style -->
    <link rel="stylesheet" href="<?=BASE_PATH?>/Public/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="<?=BASE_PATH?>/Public/css/responsive.css">
    <!-- Template color css -->
    <!-- <link href="Public/css/color/color-core.css" data-style="styles" rel="stylesheet"> -->
    <!-- User style -->
    <link rel="stylesheet" href="<?=BASE_PATH?>/Public/css/custom.css">

    <!-- Modernizr JS -->
    <script src="<?=BASE_PATH?>/Public/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Body main wrapper start -->


    <!-- START HEADER AREA -->
    <header class="header-area header-wrapper">
        <!-- header-top-bar -->
        <div class="header-top-bar plr-185">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 hidden-xs">
                        <div class="call-us">
                            <p class="mb-0 roboto">(+84) 01234-567890</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="top-link clearfix">
                            <ul class="link f-right">
                                <?php
if (isset($_SESSION['user'])) {
    echo '<li><a href="' . BASE_PATH . '/user"><i class="zmdi zmdi-account"></i>Tài Khoản </a></li>';
    echo '<li><a href="' . BASE_PATH . '/favorite"><i class="zmdi zmdi-favorite"></i>Yêu Thích</a></li>';
    echo '<li><a href="' . BASE_PATH . '/logout"><i class="zmdi zmdi-lock"></i>Đăng xuất</a></li>';

} else {
    echo '<li><a href="' . BASE_PATH . '/login"><i class="zmdi zmdi-account"></i>Tài Khoản </a></li>';
    echo '<li><a href="' . BASE_PATH . '/login"><i class="zmdi zmdi-favorite"></i> Yêu Thích </a></li>';
    echo '<li><a href="' . BASE_PATH . '/login"><i class="zmdi zmdi-lock"></i>Đăng Nhập </a></li>';

}

?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-middle-area -->
        <div id="sticky-header" class="header-middle-area plr-185 sticky">
            <div class="container-fluid">
                <div class="full-width-mega-dropdown">
                    <div class="row">
                        <!-- logo -->
                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <div class="logo">
                                <a href="<?=BASE_PATH?>/index">
                                    <img src="<?=BASE_PATH?>/Public/img/logo/VINATECH 2.png" alt="main logo">
                                </a>
                            </div>
                        </div>
                        <!-- primary-menu -->
                        <div class="col-md-8 hidden-sm hidden-xs">
                            <nav id="primary-menu">
                                <ul class="main-menu text-center">
                                    <li><a href="<?=BASE_PATH?>/index">Trang Chủ</a></li>
                                    <li class="mega-parent"><a href="<?=BASE_PATH?>/product">Sản Phẩm</a>
                                        <div class="mega-menu-area clearfix">
                                            <div class="mega-menu-link f-left">
                                                <?=$html_danhmuc?>
                                            </div>
                                            <div class="mega-menu-photo f-left">
                                                <a href="#">
                                                    <img src="<?=BASE_PATH?>/Public/img/mega-menu/image 10.png"
                                                        alt="mega menu image">
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="about.html">Nike</a>
                                    </li>
                                    <li>
                                        <a href="about.html">Adidas</a>
                                    </li>
                                    <li>
                                        <a href="about.html">Giới Thiệu</a>
                                    </li>
                                    <li>
                                        <a href="<?=BASE_PATH?>/contact">Liên Hệ</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- header-search & total-cart -->
                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <div class="search-top-cart  f-right">
                                <!-- header-search -->
                                <div class="header-search f-left">
                                    <div class="header-search-inner">
                                        <button class="search-toggle">
                                            <i class="zmdi zmdi-search"></i>
                                        </button>
                                        <form action="sreach.php" method="post">
                                            <div class="top-search-box">
                                                <input type="text" name="tukhoa"
                                                    placeholder="Tìm kiếm sản phẩm ở đây...">
                                                <button type="submit" name="submit">
                                                    <i class="zmdi zmdi-search"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- total-cart -->
                                <div class="total-cart f-left">
                                    <div class="total-cart-in">
                                        <div class="cart-toggler">
                                            <a href="<?=BASE_PATH?>/cart">
                                                <span
                                                    class="cart-quantity"><?=sprintf("%02d", count($_SESSION['cart']))?></span><br>
                                                <span class="cart-icon">
                                                    <i class="zmdi zmdi-shopping-cart-plus"></i>
                                                </span>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER AREA -->

    <!-- START MOBILE MENU AREA -->
    <div class="mobile-menu-area hidden-lg hidden-md">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li><a href="index.html">Home</a>
                                    <ul>
                                        <li>
                                            <a href="index.html">Home Version 1</a>
                                        </li>
                                        <li>
                                            <a href="index-2.html">Home Version 2</a>
                                        </li>
                                        <li>
                                            <a href="index-3.html">Home Version 3</a>
                                        </li>
                                        <li>
                                            <a href="index-4.html">Home 4 Animated Text</a>
                                        </li>
                                        <li>
                                            <a href="index-5.html">Home 5 Animated Text Ovlerlay</a>
                                        </li>
                                        <li>
                                            <a href="index-6.html">Home 6 Background Video</a>
                                        </li>
                                        <li>
                                            <a href="index-7.html">Home 7 BG-Video Ovlerlay</a>
                                        </li>
                                        <li>
                                            <a href="index-8.html">Home 8 Boxed-1</a>
                                        </li>
                                        <li>
                                            <a href="index-9.html">Home 9 Gradient</a>
                                        </li>
                                        <li>
                                            <a href="index-10.html">Home 10 Boxed-2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="shop.html">Products</a>
                                </li>
                                <li><a href="#">Pages</a>
                                    <ul>
                                        <li>
                                            <a href="shop.html">Shop</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar.html">Shop Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="shop-right-sidebar.html">Shop Right Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="shop-list.html">Shop List</a>
                                        </li>
                                        <li>
                                            <a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="single-product.html">Single Product</a>
                                        </li>
                                        <li>
                                            <a href="single-product-left-sidebar.html">Single Product Left
                                                Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="single-product-no-sidebar.html">Single Product No Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="cart.html">Shopping Cart</a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html">Wishlist</a>
                                        </li>
                                        <li>
                                            <a href="checkout.html">Checkout</a>
                                        </li>
                                        <li>
                                            <a href="order.html">Order</a>
                                        </li>
                                        <li>
                                            <a href="login.html">Login</a>
                                        </li>
                                        <li>
                                            <a href="My-account.html">My Account</a>
                                        </li>
                                        <li>
                                            <a href="about.html">About us</a>
                                        </li>
                                        <li>
                                            <a href="404.html">404</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="blog.html">Blog</a>
                                    <ul>
                                        <li>
                                            <a href="blog.html">Blog</a>
                                        </li>
                                        <li>
                                            <a href="blog-left-sidebar.html">Blog Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog-right-sidebar.html">Blog Right Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog-2.html">Blog style 2</a>
                                        </li>
                                        <li>
                                            <a href="blog-2-left-sidebar.html">Blog 2 Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog-2-right-sidebar.html">Blog 2 Right Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="single-blog.html">Blog Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="about.html">About Us</a>
                                </li>
                                <li>
                                    <a href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MOBILE MENU AREA -->

    <div class="wrapper">