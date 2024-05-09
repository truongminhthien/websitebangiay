<?php require_once "v_header.php";?>

<?php
// echo '<pre>';
// var_dump($_SESSION['user']['email']);
// echo '</pre>';
$html_dscart = '';
$html_dssp = '';
foreach ($data['ds_cart'] as $index => $value) {
    $k = '';
    for ($i = 1; $i <= 10; $i++) {
        $f = $value['SoLuongMua'] == $i ? 'selected' : '';
        $k .= ' <option value="' . $i . '" ' . $f . ' >' . $i . '</option>';
    }
    // echo '<pre>';
    // var_dump($value);
    // echo '</pre>';
    $html_dscart .= '   <tr>
    <td class="product-thumbnail">
        <div class="pro-thumbnail-img">
            <img src="' . BASE_PATH . '/Public/img/product/' . $value['hinhsp'] . '" alt="">
        </div>
        <div class="pro-thumbnail-info text-left">
            <h6 class="product-title-2">
                <a href="#">' . $value['tensp'] . '</a>
            </h6>
            <p>Thương hiệu: ' . $value['brand'] . '</p>
            <p>Thể loại: ' . $value['tentheloai'] . '</p>

        </div>
    </td>
    <td class="product-price">$' . number_format($value['giasp'], 2, '.', '.') . '</td>
    <td class="product-quantity">
        <select name="" id="" data-id="' . $value['id_sp'] . '">
        ' . $k . '

        </select>
    </td>
    <td class="product-subtotal"></td>
    <td class="product-remove">
        <a href="' . BASE_PATH . '/xoa/' . $index . '"><i class="zmdi zmdi-close"></i></a>
    </td>
</tr>';

    $html_dssp .= '                                                    <tr>
<td class="td-title-1">' . $value['tensp'] . ($value['SoLuongMua'] == 1 ? '' : ' x ' . $value['SoLuongMua']) . '</td>
<td class="td-title-2 giasp ">$' . number_format(($value['giasp'] * $value['SoLuongMua']), 2, '.', '') . '</td>
</tr>';
}
?>

<div class="breadcrumbs-section mb-80">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb p-30">
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Giỏ Hàng</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Start page content -->
<section id="page-content" class="page-wrapper">

    <!-- SHOP SECTION START -->
    <div class="shop-section mb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-12">
                    <ul class="cart-tab">
                        <li>
                            <a class="<?=$data['giohang']?>" href="<?=BASE_PATH . '/cart'?>">
                                <span>01</span>
                                giỏ hàng
                            </a>
                        </li>
                        <li>
                            <a class="<?=$data['thanhtoan']?>" href="<?=BASE_PATH . '/checkout'?>">
                                <span>02</span>
                                Thanh toán
                            </a>
                        </li>
                        <li>
                            <a class="" href="#order-complete" data-toggle="tab">
                                <span>03</span>
                                Order complete
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-10 col-sm-12">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!-- shopping-cart start -->
                        <div class="tab-pane <?=$data['giohang']?>" id="shopping-cart">
                            <div class="shopping-cart-content">
                                <form action="#" method="post">
                                    <div class="table-content table-responsive mb-50">
                                        <table class="text-center">
                                            <thead>
                                                <tr>
                                                    <th class="product-thumbnail">sản phẩm</th>
                                                    <th class="product-price">giá</th>
                                                    <th class="product-quantity">Số lượng</th>
                                                    <th class="product-subtotal">tổng tiền</th>
                                                    <th class="product-remove">xóa</th>
                                                </tr>
                                            </thead>
                                            <tbody id="sanpham">
                                                <!-- tr -->
                                                <?=$html_dscart?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-6">
                                            <div class="payment-details box-shadow p-30 mb-50">
                                                <h6 class="widget-title border-left mb-20">chi tiết thanh toán</h6>
                                                <table>
                                                    <tr>
                                                        <td class="td-title-1">Tổng phụ</td>
                                                        <td class="td-title-2">$00.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-title-1">Ước tính giao hàng và sử lý</td>
                                                        <td class="td-title-2">$00.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-title-1">Thuế</td>
                                                        <td class="td-title-2">$00.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="order-total">Tổng thanh toán</td>
                                                        <td class="order-total-price"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding-top: 30px;"><button type="submit"
                                                                name="submit"
                                                                class="submit-btn-1 black-bg btn-hover-2">Thanh
                                                                toán</button></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- shopping-cart end -->
                        <!-- checkout start -->
                        <div class="tab-pane <?=$data['thanhtoan']?>" id="checkout">
                            <div class="checkout-content box-shadow p-30">
                                <form action="#" method="post">
                                    <div class="row">
                                        <!-- billing details -->
                                        <div class="col-md-6">
                                            <div class="billing-details pr-10">
                                                <?php if (isset($_SESSION['user'])): ?>
                                                <h6 class="widget-title border-left mb-20">Thông tin của bạn</h6>
                                                <input type="text" placeholder="họ và tên"
                                                    value="<?=isset($_SESSION['user']['tentk']) ? $_SESSION['user']['tentk'] : ''?>"
                                                    name="ten" placeholder="họ và tên">
                                                <input type="text" name="sodienthoai" placeholder="số điện thoại"
                                                    value="<?=isset($_SESSION['user']['sodienthoai']) ? $_SESSION['user']['sodienthoai'] : ''?>">
                                                <input type="text" placeholder="email"
                                                    value="<?=isset($_SESSION['user']['email']) ? $_SESSION['user']['email'] : ''?>"
                                                    name="email">
                                                <input type="text" placeholder="địa chỉ"
                                                    value="<?=isset($_SESSION['user']['diachi']) ? $_SESSION['user']['diachi'] : ''?>"
                                                    name="diachi">
                                                <?php else: ?>
                                                <h6 class="widget-title border-left mb-20">Thông tin của bạn</h6>

                                                <p>Nếu bạn có tài khoản với chúng tôi, vui lòng <a
                                                        href="<?=BASE_PATH . '/login'?>">Đăng nhập
                                                        tài khoản tại đây.</a></p>
                                                <input type="text" placeholder="họ và tên" name="ten"
                                                    placeholder="họ và tên">
                                                <input type="text" name="sodienthoai" placeholder="số điện thoại">
                                                <input type="text" placeholder="email" name="email">
                                                <input type="text" placeholder="địa chỉ" name="diachi">
                                                <?php endif;?>

                                            </div>
                                            <div class="billing-details pr-10">

                                                <h6 class="widget-title border-left mb-20"> <input type="radio"
                                                        id="javascript" name="nguoinhan" value="nguoinhan"> Xác nhận
                                                    thông tin người nhận</h6>
                                                <input type="text" name="tennn" placeholder="Tên người nhận">
                                                <input type="text" name="sdtnn" placeholder="Số điện thoại">
                                                <input type="text" name="diachinn" placeholder="Địa chỉ">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <!-- our order -->
                                            <div class="payment-details pl-10 mb-50">
                                                <h6 class="widget-title border-left mb-20">Đặt hàng</h6>
                                                <table id="dssanpham">
                                                    <?=$html_dssp?>
                                                    <tr>
                                                        <td class="td-title-1">Tổng phụ</td>
                                                        <td class="td-title-2 tongphu">$00.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-title-1">Ước tính giao hàng và sử lý</td>
                                                        <td class="td-title-2">$00.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-title-1">Thuế</td>
                                                        <td class="td-title-2">$00.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="order-total">Tổng thanh toán</td>
                                                        <td class="order-total-price tongthanhtoan"></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <!-- payment-method -->
                                            <div class="payment-method">
                                                <h6 class="widget-title border-left mb-20">Phương thức thanh toán</h6>
                                                <div id="accordion">
                                                    <div class="panel">
                                                        <h4 class="payment-title box-shadow">
                                                            <input type="radio" id="javascript" name="thanhtoan"
                                                                value="1">
                                                            Thanh toán khi nhận hàng
                                                        </h4>
                                                    </div>
                                                    <div class="panel">
                                                        <h4 class="payment-title box-shadow">
                                                            <input type="radio" id="javascript" name="thanhtoan"
                                                                value="2"> MOMO
                                                        </h4>
                                                    </div>
                                                    <div class="panel">
                                                        <h4 class="payment-title box-shadow">
                                                            <input type="radio" id="javascript" name="thanhtoan"
                                                                value="3">
                                                            paypal
                                                        </h4>
                                                        <div id="collapseThree" class="panel-collapse collapse">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- payment-method end -->
                                            <button class="submit-btn-1 mt-30 btn-hover-1" type="submit" name="submit">
                                                Đặt hàng</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- checkout end -->
                        <!-- order-complete start -->
                        <div class="tab-pane" id="order-complete">
                            <div class="order-complete-content box-shadow">
                                <div class="thank-you p-30 text-center">
                                    <h6 class="text-black-5 mb-0">Thank you. Your order has been received.</h6>
                                </div>
                                <div class="order-info p-30 mb-10">
                                    <ul class="order-info-list">
                                        <li>
                                            <h6>order no</h6>
                                            <p>m 2653257</p>
                                        </li>
                                        <li>
                                            <h6>order no</h6>
                                            <p>m 2653257</p>
                                        </li>
                                        <li>
                                            <h6>order no</h6>
                                            <p>m 2653257</p>
                                        </li>
                                        <li>
                                            <h6>order no</h6>
                                            <p>m 2653257</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="row">
                                    <!-- our order -->
                                    <div class="col-md-6">
                                        <div class="payment-details p-30">
                                            <h6 class="widget-title border-left mb-20">our order</h6>
                                            <table>
                                                <tr>
                                                    <td class="td-title-1">Dummy Product Name x 2</td>
                                                    <td class="td-title-2">$1855.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="td-title-1">Dummy Product Name</td>
                                                    <td class="td-title-2">$555.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="td-title-1">Cart Subtotal</td>
                                                    <td class="td-title-2">$2410.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="td-title-1">Shipping and Handing</td>
                                                    <td class="td-title-2">$15.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="td-title-1">Vat</td>
                                                    <td class="td-title-2">$00.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="order-total">Order Total</td>
                                                    <td class="order-total-price">$2425.00</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="bill-details p-30">
                                            <h6 class="widget-title border-left mb-20">billing details</h6>
                                            <ul class="bill-address">
                                                <li>
                                                    <span>Address:</span>
                                                    28 Green Tower, Street Name, New York City, USA
                                                </li>
                                                <li>
                                                    <span>email:</span>
                                                    info@companyname.com
                                                </li>
                                                <li>
                                                    <span>phone : </span>
                                                    (+880) 19453 821758
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="bill-details pl-30">
                                            <h6 class="widget-title border-left mb-20">billing details</h6>
                                            <ul class="bill-address">
                                                <li>
                                                    <span>Address:</span>
                                                    28 Green Tower, Street Name, New York City, USA
                                                </li>
                                                <li>
                                                    <span>email:</span>
                                                    info@companyname.com
                                                </li>
                                                <li>
                                                    <span>phone : </span>
                                                    (+880) 19453 821758
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- order-complete end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOP SECTION END -->

</section>
<!-- End page content -->

<?php require_once "v_footer.php";?>