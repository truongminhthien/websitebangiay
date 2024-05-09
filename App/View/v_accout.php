<?php require_once "v_header.php";?>


<?php
// echo '<pre>';
// var_dump($_SESSION['user']);
// echo '</pre>';
?>



<!-- BREADCRUMBS SETCTION START -->
<div class="breadcrumbs-section plr-200 mb-80">
    <div class="breadcrumbs overlay-bg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumbs-inner">
                        <h1 class="breadcrumbs-title">Tài Khoản Của Tôi</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="index.html">Trang chủ</a></li>
                            <li>Tài Khoản của tôi</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMBS SETCTION END -->

<!-- Start page content -->
<div id="page-content" class="page-wrapper">

    <!-- LOGIN SECTION START -->
    <div class="login-section mb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <?php
if (isset($_SESSION['thongbao'])) {
    echo ' <div class="alert alert-success">' . $_SESSION['thongbao'] . ' </div>';
    unset($_SESSION['thongbao']);
}?>
                    <div class="my-account-content" id="accordion2">
                        <!-- My Personal Information -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion2" href="#personal_info">Thông tin
                                        cá nhân của tôi</a>
                                </h4>
                            </div>

                            <div id="personal_info" class="panel-collapse collapse <?=$data['thongtin']?> "
                                role="tabpanel">
                                <div class="panel-body">
                                    <form action="<?=BASE_PATH?>/user/update" method="post">
                                        <div class="new-customers">
                                            <div class="p-30">

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <input type="text" value="<?=$_SESSION['user']['tentk']?> "
                                                            name="ten" placeholder="">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="sodienthoai"
                                                            value="<?=$_SESSION['user']['sodienthoai']?>">
                                                    </div>
                                                </div>
                                                <input type="text" value="<?=$_SESSION['user']['email']?> " name="email"
                                                    placeholder="">
                                                <input type="text" value="<?=$_SESSION['user']['diachi']?> "
                                                    name="diachi" placeholder="">
                                                <textarea class="custom-textarea" placeholder="Ghi chú.."></textarea>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <button class="submit-btn-1 mt-20 btn-hover-1" type="submit"
                                                            name="submit1" value="register">Lưu</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- My shipping address -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion2" href=" #my_shipping">Đổi mật
                                        khẩu</a>
                                </h4>
                            </div>
                            <div id="my_shipping" class="panel-collapse collapse " role="tabpanel">
                                <div class="panel-body">
                                    <form action="<?=BASE_PATH?>/user/update" method="post" class="form"
                                        onsubmit="return checkPassword()">
                                        <div class="new-customers p-30">
                                            <p id="error-message"></p>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="password" placeholder="Mật khẩu mới" name="matkhau"
                                                        required id="matkhau">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="password" placeholder="Nhập lại mật khẩu mới" required
                                                        id="nhaplaimatkhau">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <button class="submit-btn-1 mt-20 btn-hover-1" type="submit"
                                                        id="submitBtn" name="submit2">Lưu</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- My billing details -->
                        <!-- <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion2" href="#billing_address">My
                                        billing details</a>
                                </h4>
                            </div>
                            <div id="billing_address" class="panel-collapse collapse" role="tabpanel">
                                <div class="panel-body">
                                    <form action="#">
                                        <div class="billing-details p-30">
                                            <input type="text" placeholder="Your Name Here...">
                                            <input type="text" placeholder="Email address here...">
                                            <input type="text" placeholder="Phone here...">
                                            <input type="text" placeholder="Company neme here...">
                                            <select class="custom-select">
                                                <option value="defalt">country</option>
                                                <option value="c-1">Australia</option>
                                                <option value="c-2">Bangladesh</option>
                                                <option value="c-3">Unitd States</option>
                                                <option value="c-4">Unitd Kingdom</option>
                                            </select>
                                            <select class="custom-select">
                                                <option value="defalt">State</option>
                                                <option value="c-1">Melbourne</option>
                                                <option value="c-2">Dhaka</option>
                                                <option value="c-3">New York</option>
                                                <option value="c-4">London</option>
                                            </select>
                                            <select class="custom-select">
                                                <option value="defalt">Town/City</option>
                                                <option value="c-1">Victoria</option>
                                                <option value="c-2">Chittagong</option>
                                                <option value="c-3">Boston</option>
                                                <option value="c-4">Cambridge</option>
                                            </select>
                                            <textarea class="custom-textarea"
                                                placeholder="Your address here..."></textarea>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <button class="submit-btn-1 mt-20 btn-hover-1" type="submit"
                                                        value="register">Save</button>
                                                </div>
                                                <div class="col-md-6">
                                                    <button class="submit-btn-1 mt-20 btn-hover-1 f-right"
                                                        type="reset">Clear</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> -->
                        <!-- My Order info -->
                        <!-- <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion2" href="#My_order_info">My Order
                                        info</a>
                                </h4>
                            </div>
                            <div id="My_order_info" class="panel-collapse collapse" role="tabpanel">
                                <div class="panel-body">
                                    <form action="#">
                                        <div class="payment-details p-30">
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
                                            <button class="submit-btn-1 mt-20 btn-hover-1" type="submit"
                                                value="register">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> -->
                        <!-- Payment Method -->
                        <!-- <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion2"
                                        href="#My_payment_method">Payment Method</a>
                                </h4>
                            </div>
                            <div id="My_payment_method" class="panel-collapse collapse" role="tabpanel">
                                <div class="panel-body">
                                    <form action="#">
                                        <div class="new-customers p-30">
                                            <select class="custom-select">
                                                <option value="defalt">Card Type</option>
                                                <option value="c-1">Master Card</option>
                                                <option value="c-2">Paypal</option>
                                                <option value="c-3">Paypal</option>
                                                <option value="c-4">Paypal</option>
                                            </select>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" placeholder="Card Number">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" placeholder="Card Security Code">
                                                </div>
                                                <div class="col-sm-6">
                                                    <select class="custom-select">
                                                        <option value="defalt">Month</option>
                                                        <option value="c-1">January</option>
                                                        <option value="c-2">February</option>
                                                        <option value="c-3">March</option>
                                                        <option value="c-4">April</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <select class="custom-select">
                                                        <option value="defalt">Year</option>
                                                        <option value="c-4">2017</option>
                                                        <option value="c-1">2016</option>
                                                        <option value="c-2">2015</option>
                                                        <option value="c-3">2014</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <button class="submit-btn-1 mt-20 btn-hover-1" type="submit"
                                                        value="register">pay now</button>
                                                </div>
                                                <div class="col-md-4">
                                                    <button class="submit-btn-1 mt-20 btn-hover-1" type="submit"
                                                        value="register">cancel order</button>
                                                </div>
                                                <div class="col-md-4">
                                                    <button class="submit-btn-1 mt-20 f-right btn-hover-1" type="submit"
                                                        value="register">continue</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGIN SECTION END -->
</div>
<!-- End page content -->
<?php require_once "v_footer.php";?>