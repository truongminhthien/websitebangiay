<?php require_once "v_header.php";?>

<!-- BREADCRUMBS SETCTION START -->
<div class="breadcrumbs-section plr-200 mb-80">
    <div class="breadcrumbs overlay-bg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumbs-inner">
                        <h1 class="breadcrumbs-title">Đăng Nhập</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="index.html">Trang chủ</a></li>
                            <li>Đăng Nhập</li>
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
            <div class="row row_login_register">
                <div class="col-md-6">
                    <div class="registered-customers">
                        <?php
if (isset($_SESSION['thongbao'])) {
    echo ' <div class="alert alert-success">' . $_SESSION['thongbao'] . ' </div>';
    unset($_SESSION['thongbao']);
} elseif (isset($_SESSION['loi'])) {
    echo '<div class="alert alert-danger">' . $_SESSION['loi'] . '</div>';
    unset($_SESSION['loi']);
}
?>
                        <!-- <h6 class="widget-title border-left mb-50">REGISTERED CUSTOMERS</h6> -->
                        <form action="" method="post">
                            <div class=" login-account p-30 box-shadow">
                                <p>Nếu bạn không có tài khoản với chúng tôi, vui lòng <a
                                        href="<?=BASE_PATH?>/register">Tạo
                                        tài khoản tại đây.</a></p>
                                <input type="text" name="sodienthoai" placeholder="Số điện thoại của Bạn" required>
                                <input type="password" name="matkhau" placeholder="Mật Khẩu" required>
                                <p><small><a href="#">Quên Mật Khẩu?</a></small></p>
                                <button class="submit-btn-1 btn-hover-1" type="submit" name="submit">Đăng nhập</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- new-customers -->
            </div>
        </div>
    </div>
    <!-- LOGIN SECTION END -->

</div>
<!-- End page content -->
<?php require_once "v_footer.php";?>