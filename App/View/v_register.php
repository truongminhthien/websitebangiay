<?php require_once "v_header.php";?>
<!-- BREADCRUMBS SETCTION START -->
<div class="breadcrumbs-section plr-200 mb-80">
    <div class="breadcrumbs overlay-bg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumbs-inner">
                        <h1 class="breadcrumbs-title">Đăng ký tài khoản</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="index.html">Trang chủ</a></li>
                            <li>Đăng ký</li>
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
                    <div class="new-customers">
                        <form action="" method="post" class="form" onsubmit="return checkPassword()">
                            <h6 class=" widget-title border-left mb-50">Khách Hàng Mới</h6>
                            <p id="error-message"></p>
                            <div class="login-account p-30 box-shadow">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" name="ho" placeholder="Họ" id="ho" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="ten" placeholder="Tên" id="ten" required>
                                    </div>
                                </div>
                                <input type="text" placeholder="Số điện thoại" name="sodienthoai" id="sodienthoai"
                                    required>
                                <input type="text" placeholder="Email của bạn" name="email" id="email" required>
                                <input type="text" placeholder="Địa chỉ của bạn" name="diachi" id="diachi" required>

                                <input type="password" placeholder="Mật khẩu" id="matkhau" name="matkhau" required>
                                <input type="password" placeholder="Nhập lại mật khẩu" id="nhaplaimatkhau" required>
                                <div class="row">
                                    <div class="col-md-6">
                                        <button class="submit-btn-1 mt-20 btn-hover-1" type="submit" name="submit"
                                            id="submitBtn">Đăng ký</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGIN SECTION END -->

</div>
<!-- End page content -->




<?php require_once "v_footer.php";?>