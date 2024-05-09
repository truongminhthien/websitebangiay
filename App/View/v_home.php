<?php require_once "v_header.php";?>
<?php

$banner = $data['banner'];
$html_banner1 = '';

foreach ($banner as $value) {
    if ($value['vitri'] == 1) {
        $html_banner1 .= '<div class="col-md-12">
       <div class="layer-1">
           <div class="slider-img">
               <img src="Public/img/slider/slider-2/' . $value['hinhbanner'] . '" alt="">
           </div>
           <div class="slider-info gray-bg">
               <div class="slider-info-inner">
                   <h1 class="slider-title-1 text-uppercase text-black-1">' . $value['tieude'] . '
                   </h1>
                   <div class="slider-brief text-black-2">
                       <p>' . $value['noidung'] . '
                       </p>
                   </div>
                   <a href="#" class="button extra-small button-black">
                       <span class="text-uppercase">Mua ngay</span>
                   </a>
               </div>
           </div>
       </div>
   </div>';
    }
    if ($value['vitri'] == 2) {
        $tieude2 = $value['tieude'];
        $noidung2 = $value['noidung'];
        $hinhbanner2 = $value['hinhbanner'];
    } elseif ($value['vitri'] == 3) {
        $tieude3 = $value['tieude'];
        $hinhbanner3 = $value['hinhbanner'];
    } else {
        $tieude2 = '';
        $noidung2 = '';
        $hinhbanner2 = '';
        $tieude3 = '';
        $hinhbanner3 = '';
    }
}

$dsxemnhieu = $data['dsxemnhieu'];
$html_dsxemnhieu = "";
foreach ($dsxemnhieu as $value) {
    $html_dsxemnhieu .= '
    <div class="col-xs-12">
    <div class="product-item">
    <div class="product-img">
        <a href="' . BASE_PATH . '/product/detail/' . $value['id_sp'] . '">
            <img src="' . BASE_PATH . '/Public/img/product/' . $value['hinhsp'] . '" alt="" />
        </a>
    </div>
    <div class="product-info">
        <h6 class="product-title">
            <a href="' . BASE_PATH . '/product/detail/' . $value['id_sp'] . '">' . $value['tensp'] . '</a>
        </h6>
        <div class="pro-rating">
            <p><strong>' . $value['luotxem'] . '</strong> lượt xem</p>
        </div>
        <h3 class="pro-price">$' . number_format($value['giasp'], 2, ',', '.') . '</h3>
        <ul class="action-button">
            <li>
                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
            </li>
            <li>
                <a href="#" data-toggle="modal" data-target="#productModal" title="Quickview"><i
                        class="zmdi zmdi-zoom-in"></i></a>
            </li>
            <li>
                <a href="" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
            </li>
            <li>
            <a  class="add-to-cart" data-id="' . $value['id_sp'] . '" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>

            </li>
        </ul>
    </div>
    </div>
    </div>';
}
$dsspmoi = $data['dsspmoi'];
$html_dsspmoi = '';
foreach ($dsspmoi as $value) {
    $html_dsspmoi .= '      <div class="col-md-3 col-sm-4 col-xs-12">
    <div class="product-item">
        <div class="product-img">
            <a href="' . BASE_PATH . '/product/detail/' . $value['id_sp'] . '">
                <img src="Public/img/product/' . $value['hinhsp'] . '" alt="" />
            </a>
        </div>
        <div class="product-info">
            <h6 class="product-title">
                <a href="' . BASE_PATH . '/product/detail/' . $value['id_sp'] . '">' . $value['tensp'] . '</a>
            </h6>
            <div class="pro-rating">
            <p><strong>' . $value['luotxem'] . '</strong> lượt xem</p>
        </div>
            <h3 class="pro-price">$ ' . number_format($value['giasp'], 2, ',', '.') . '</h3>
            <ul class="action-button">
                <li>
                    <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target="#productModal"
                        title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                </li>
                <li>
                    <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                </li>
                <li>
                    <a href="#" title="Add to cart"><i
                            class="zmdi zmdi-shopping-cart-plus"></i></a>
                </li>
            </ul>
        </div>
    </div>
    </div>';
}

$dssptheloai = $data['dssptheloai'];
$html_dssptheloai = '';
foreach ($dssptheloai as $value) {
    $html_dssptheloai .= '
    <div class="col-xs-12">
    <div class="product-item">
    <div class="product-img">
        <a href="' . BASE_PATH . '/product/detail/' . $value['id_sp'] . '">
            <img src="Public/img/product/' . $value['hinhsp'] . '" alt="" />
        </a>
    </div>
    <div class="product-info">
        <h6 class="product-title">
            <a href="' . BASE_PATH . '/product/detail/' . $value['id_sp'] . '">' . $value['tensp'] . '</a>
        </h6>
        <div class="pro-rating">
            <p><strong>' . $value['luotxem'] . '</strong> lượt xem</p>
        </div>
        <h3 class="pro-price">$' . number_format($value['giasp'], 2, ',', '.') . '</h3>
        <ul class="action-button">
            <li>
                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
            </li>
            <li>
                <a href="#" data-toggle="modal" data-target="#productModal" title="Quickview"><i
                        class="zmdi zmdi-zoom-in"></i></a>
            </li>
            <li>
                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
            </li>
            <li>
                <a onlick="add_product_cart(' . $value['id_sp'] . ', 1)" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
            </li>
        </ul>
    </div>
    </div>
    </div>';
}
?>
<!-- START SLIDER AREA -->
<div class="slider-area  plr-185  mb-80">
    <div class="container-fluid">
        <div class="slider-content">
            <div class="row">
                <div class="active-slider-1 slick-arrow-1 slick-dots-1">
                    <!-- layer Start -->
                    <?=$html_banner1?>
                    <!-- layer end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SLIDER AREA -->

<!-- Start page content -->
<section id="page-content" class="page-wrapper">



    <!-- FEATURED PRODUCT SECTION START -->
    <div class="featured-product-section mb-50">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-left mb-40">
                        <h2 class="uppercase">Sản Phẩm Tiêu Biểu</h2>
                        <h6>Sự lựa chọn tối ưu cho những người yêu thể thao.</h6>
                    </div>
                </div>
            </div>
            <div class="featured-product">
                <div class="row active-featured-product slick-arrow-2">
                    <!-- product-item start -->
                    <?=$html_dsxemnhieu?>
                    <!-- product-item end -->
                </div>
            </div>
        </div>
    </div>
    <!-- FEATURED PRODUCT SECTION END -->

    <!-- BANNER-SECTION START -->
    <div class="banner-section ptb-60">
        <div class="container">
            <div class="row">
                <!-- banner-item start -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="banner-item banner-3">
                        <div class="banner-img">
                            <a href="#"><img src="Public/img/banner/<?=$hinhbanner2?>" alt=""></a>
                        </div>
                        <div class="banner-info">
                            <h3 class="banner-title-2"><a href="#"><?=$tieude2?></a></h3>
                            <div class="banner-featured">
                                <p><?=$noidung2?></p>
                            </div>
                            <div class="btn banner-button btn-default">
                                <a href="#">Khám phá <i class="zmdi zmdi-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- banner-item end -->
                <!-- banner-item start -->
                <div class="col-md-6 hidden-sm col-xs-12">
                    <div class="banner-item banner-4">
                        <div class="banner-img">
                            <a href="#"><img src="Public/img/banner/<?=$hinhbanner3?>" alt=""></a>
                        </div>
                        <h3 class="banner-title-2"><a href="#"><?=$tieude3?></a></h3>
                        <div class="btn banner-button btn-default">
                            <a href="#">Mua ngay <i class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- banner-item end -->
            </div>
        </div>
    </div>
    <!-- BANNER-SECTION END -->

    <!-- PRODUCT TAB SECTION START -->
    <div class="product-tab-section mb-50">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="section-title text-left mb-40">
                        <h2 class="uppercase">Sản Phẩm Mới</h2>
                        <h6>Trải nghiệm sự thoải mái và phong cách với Giày Sneaker Infinite Comfort.</h6>
                    </div>
                </div>
            </div>
            <div class="product-tab">
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- popular-product start -->
                    <div class="tab-pane active" id="popular-product">
                        <div class="row">
                            <!-- product-item start -->
                            <?=$html_dsspmoi?>
                            <!-- product-item end -->
                        </div>
                    </div>
                    <!-- popular-product end -->
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT TAB SECTION END -->

    <!-- FEATURED PRODUCT SECTION START -->
    <div class="featured-product-section mb-50">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-left mb-40">
                        <h2 class="uppercase"><?=$dssptheloai[0]['tentheloai']?></h2>
                        <h6>Khám phá và đắm chìm trong thế giới đa dạng của chúng tôi.</h6>
                    </div>
                </div>
            </div>
            <div class="featured-product">
                <div class="row active-featured-product slick-arrow-2">
                    <!-- product-item start -->
                    <?=$html_dssptheloai?>
                </div>
            </div>
        </div>
    </div>
    <!-- FEATURED PRODUCT SECTION END -->

    <!-- BY BRAND SECTION START-->
    <div class="by-brand-section mb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-left mb-40">
                        <h2 class="uppercase">Thương Hiệu</h2>
                        <h6>Thương hiệu đại diện đồng hành cùng chúng tôi.</h6>
                    </div>
                </div>
            </div>
            <div class="by-brand-product">
                <div class="row active-by-brand slick-arrow-2">
                    <!-- single-brand-product start -->
                    <?=$html_brand?>
                    <!-- single-brand-product end -->
                </div>
            </div>
        </div>
    </div>
    <!-- BY BRAND SECTION END -->
</section>
<!-- End page content -->

<?php require_once "v_footer.php";?>