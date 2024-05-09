<?php require_once "v_header.php";?>
<?php
$sanphamshop = $data['sanphamshop'];
$html_sanphamshop = '';
foreach ($sanphamshop as $value) {
    $html_sanphamshop .= '  <div class="col-md-4 col-sm-4 col-xs-12">
    <div class="product-item">
        <div class="product-img">
            <a href="' . BASE_PATH . '/product/detail/' . $value['id_sp'] . '">
                <img src="' . BASE_PATH . '/Public/img/product/' . $value['hinhsp'] . '" alt="" />
            </a>
        </div>
        <div class="product-info">
            <h6 class="product-title">
                <a href="' . BASE_PATH . '/product/detail/' . $value['id_sp'] . '">' . $value['tensp'] . ' </a>
            </h6>
            <div class="pro-rating">
            <p><strong>' . $value['luotxem'] . '</strong> lượt xem</p>
            </div>
            <h3 class="pro-price">$' . number_format($value['giasp'], 2, ',', '.') . '</h3>
            <ul class="action-button">
                <li>
                    <a href="#" title="Wishlist"><i
                            class="zmdi zmdi-favorite"></i></a>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target="#productModal"
                        title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                </li>
                <li>
                    <a href="#" title="Compare"><i
                            class="zmdi zmdi-refresh"></i></a>
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
?>
<?php
$html_danhmuc = '';
$l = 0;
// Biến đếm
foreach ($theloai as $value) {
    $so = number_format($value['giatri'], 1, ',', '.'); // Định dạng số
    $parts = explode(',', $so);
    $html_theloai = '';
    if ($parts[1] == 0) {
        if ($parts[0] == 2) {
            $class = 'open';
        } else {
            $class = 'closed';
        }
        $l++;
        foreach ($theloai as $key) {
            $so = number_format($key['giatri'], 1, ',', '.');
            $parts = explode(',', $so);
            if ($parts[0] == $l && $parts[1] != 0) {
                $html_theloai .= '<li><a href="' . BASE_PATH . '/product/idcatalog/' . $key['id_tl'] . '">' . $key['tentheloai'] . '</a></li>';
            }
        }
        $html_danhmuc .= '<li class="' . $class . '"><a href="#">' . $value["tentheloai"] . '</a>
        <ul>' . $html_theloai . '

        </ul>
        </li>';
    }

}

?>
<div class="breadcrumbs-section mb-80">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb p-30">
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Sản Phẩm</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Start page content -->
<div id="page-content" class="page-wrapper">

    <!-- SHOP SECTION START -->
    <div class="shop-section mb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-md-push-3 col-sm-12">
                    <div class="shop-content">
                        <!-- shop-option start -->
                        <div class="shop-option box-shadow mb-30 clearfix">
                            <div class=" f-left">
                                <span>
                                    <h3><?=$data['thongbao']?></h3>
                                </span>

                            </div>

                            <!-- short-by -->
                            <div class="showing f-right text-right">
                                <span>Đang hiển thị : <?=date('Y-m-d')?></span>
                            </div>
                        </div>
                        <!-- shop-option end -->
                        <!-- Tab Content start -->
                        <div class="tab-content">
                            <!-- grid-view -->
                            <div role="tabpanel" class="tab-pane active" id="grid-view">
                                <div class="row">
                                    <!-- product-item start -->
                                    <?=$html_sanphamshop?>
                                    <!-- product-item end -->

                                </div>
                            </div>
                        </div>
                        <!-- shop-pagination start -->
                        <ul class="shop-pagination box-shadow text-center ptblr-10-30">
                            <li><a href="#"><i class="zmdi zmdi-chevron-left"></i></a></li>
                            <li><a href="#">01</a></li>
                            <li><a href="#">02</a></li>
                            <li><a href="#">03</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">05</a></li>
                            <li class="active"><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
                        </ul>
                        <!-- shop-pagination end -->
                    </div>
                </div>
                <div class="col-md-3 col-md-pull-9 col-sm-12">
                    <!-- widget-search -->
                    <aside class="widget-search mb-30">
                        <form action="#">
                            <input type="text" placeholder="Search here...">
                            <button type="submit"><i class="zmdi zmdi-search"></i></button>
                        </form>
                    </aside>
                    <!-- widget-categories -->
                    <aside class="widget widget-categories box-shadow mb-30">
                        <h6 class="widget-title border-left mb-20">Categories</h6>
                        <div id="cat-treeview" class="product-cat">
                            <ul>
                                <?=$html_danhmuc?>

                            </ul>
                        </div>
                    </aside>
                    <!-- shop-filter -->
                    <aside class="widget shop-filter box-shadow mb-30">
                        <h6 class="widget-title border-left mb-20">Giá:</h6>
                        <div class="price_filter">
                            <div class="price_slider_amount">
                                <input type="submit" value="Thây Đổi :" />
                                <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                            </div>
                            <div id="slider-range"></div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOP SECTION END -->

</div>
<!-- End page content -->
<?php require_once "v_footer.php";?>