<!-- Start page content -->

<?php require_once "v_header.php";?>
<?php

$html_danhmuc = '';
foreach ($theloai as $value) {
    if ($value['giatri'] == 0) {
        $html_theloai = '';
        if ($value['giatri'] == 2) {
            $class = 'open';
        } else {
            $class = 'closed';
        }
        foreach ($theloai as $key) {
            if ($value['id_tl'] == $key['giatri']) {
                $html_theloai .= '<li><a href="' . BASE_PATH . '/product/idcatalog/' . $key['id_tl'] . '">' . $key['tentheloai'] . '</a></li>';
            }
        }
        $html_danhmuc .= '<li class="' . $class . '"><a href="">' . $value["tentheloai"] . '</a>
        <ul>' . $html_theloai . '
        </ul>
        </li>';
    }
}
// $html_danhmuc = '';

// foreach ($theloai as $value) {
//     $so = number_format($value['giatri'], 1, ',', '.'); // Định dạng số
//     $parts = explode(',', $so);
//     $html_theloai = '';
//     if ($parts[1] == 0) {
//         if ($parts[0] == 2) {
//             $class = 'open';
//         } else {
//             $class = 'closed';
//         }
//         $l++;
//         foreach ($theloai as $key) {
//             $so = number_format($key['giatri'], 1, ',', '.');
//             $parts = explode(',', $so);
//             if ($parts[0] == $l && $parts[1] != 0) {
//                 $html_theloai .= '<li><a href="' . BASE_PATH . '/product/idcatalog/' . $key['id_tl'] . '">' . $key['tentheloai'] . '</a></li>';
//             }
//         }
//         $html_danhmuc .= '<li class="' . $class . '"><a href="">' . $value["tentheloai"] . '</a>
//         <ul>' . $html_theloai . '

//         </ul>
//         </li>';
//     }

// }
$sptl = $data['dssptheloai'];
$html_splienquan = '';
foreach ($sptl as $value) {
    $html_splienquan .= '   <div class="col-xs-12">
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
?>
<div class="breadcrumbs-section mb-80">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb p-30">
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Sản Phẩm</a></li>


                    <li><a href="#">Chi Tiết Sản Phẩm</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section id="page-content" class="page-wrapper">



    <!-- SHOP SECTION START -->
    <div class="shop-section mb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-md-push-3 col-xs-12">
                    <!-- single-product-area start -->
                    <div class="single-product-area mb-80">
                        <div class="row">
                            <!-- imgs-zoom-area start -->
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <div class="imgs-zoom-area">
                                    <img id="zoom_03"
                                        src="<?=BASE_PATH . '/Public/img/product/' . $data['chitietsp']['hinhsp']?>"
                                        data-zoom-image="<?=BASE_PATH . '/Public/img/product/' . $data['chitietsp']['hinhsp']?>"
                                        alt="">

                                </div>
                            </div>
                            <!-- imgs-zoom-area end -->
                            <!-- single-product-info start -->
                            <div class="col-md-7 col-sm-7 col-xs-12">
                                <div class="single-product-info">
                                    <h3 class="text-black-1"><?=$data['chitietsp']['tensp']?> </h3>
                                    <h6 class="brand-name-2">brand name</h6>
                                    <!-- hr -->
                                    <hr>
                                    <!-- single-product-tab -->
                                    <div class="single-product-tab">
                                        <ul class="reviews-tab mb-20">
                                            <li class="active"><a href="#description" data-toggle="tab">mô tả</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="description">
                                                <p><?=$data['chitietsp']['mota']?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  hr -->
                                    <hr>
                                    <!-- single-pro-color-rating -->
                                    <div class="single-pro-color-rating clearfix">
                                        <div class="sin-pro-color f-left">
                                            <p class="color-title f-left">Giá</p>
                                            <div class="widget-color f-left">
                                                <h4>$<?=number_format($data['chitietsp']['giasp'], 2, ',', '.')?></h4>
                                            </div>
                                        </div>
                                        <div class="pro-rating sin-pro-rating f-right">
                                            <p><strong><?=$data['chitietsp']['luotxem']?></strong> lượt xem</p>
                                        </div>
                                    </div>
                                    <!-- hr -->
                                    <hr>
                                    <!-- plus-minus-pro-action -->
                                    <div class="plus-minus-pro-action">
                                        <div class="sin-plus-minus f-left clearfix">
                                            <p class="color-title f-left">Số lượng</p>
                                            <div class="cart-plus-minus f-left">
                                                <input type="text" value="02" name="qtybutton"
                                                    class="cart-plus-minus-box">
                                            </div>
                                        </div>
                                        <div class="sin-pro-action f-right">
                                            <ul class="action-button">
                                                <li>
                                                    <a href="#" title="Wishlist" tabindex="0"><i
                                                            class="zmdi zmdi-favorite"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#productModal"
                                                        title="Quickview" tabindex="0"><i
                                                            class="zmdi zmdi-zoom-in"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Compare" tabindex="0"><i
                                                            class="zmdi zmdi-refresh"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Add to cart" tabindex="0"><i
                                                            class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-info end -->
                        </div>
                    </div>
                    <!-- single-product-area end -->
                    <div class="related-product-area">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title text-left mb-40">
                                    <h2 class="uppercase">Sản Phẩm <?=$data['dssptheloai'][0]['tentheloai']?></h2>
                                    <h6>Khám phá và đắm chìm trong thế giới đa dạng của chúng tôi.</h6>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="active-related-product">
                                <!-- product-item start -->
                                <?=$html_splienquan?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-md-pull-9 col-xs-12">
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
                </div>
            </div>
        </div>
    </div>
    <!-- SHOP SECTION END -->

</section>
<!-- End page content -->

<?php require_once "v_footer.php";?>