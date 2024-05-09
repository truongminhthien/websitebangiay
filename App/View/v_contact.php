<?php require_once 'v_header.php';?>
<div class="breadcrumbs-section mb-80">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb p-30">
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Liên Hệ</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- GOOGLE MAP SECTION START -->
<div class="google-map-section">
    <div class="container-fluid">
        <div class="google-map plr-185">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9319.751946493783!2d106.62951193054768!3d10.851583329091419!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752b6c59ba4c97%3A0x535e784068f1558b!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1708665156705!5m2!1svi!2s"
                width="600" height="450" style="width: 100%;border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
<!-- GOOGLE MAP SECTION END -->

<!-- MESSAGE BOX SECTION START -->
<div class="message-box-section mt-50 mb-80">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="message-box box-shadow white-bg">
                    <?php
if (isset($_SESSION['thongbao'])) {
    echo ' <div class="alert alert-success">' . $_SESSION['thongbao'] . ' </div>';
    unset($_SESSION['thongbao']);
}?>
                    <form id="contact-form" action="" method="post">
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="blog-section-title border-left mb-30">gữi email</h4>
                            </div>

                            <div class="col-md-12">
                                <input type="text" name="email" placeholder="Email của bạn" required>
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="tieude" placeholder="Tiêu Đề" required>
                            </div>
                            <div class="col-md-12">
                                <textarea class="custom-textarea" name="message" placeholder="Nội dung"
                                    required></textarea>
                                <button class="submit-btn-1 mt-30 btn-hover-1" type="submit" name="submit">Gữi</button>
                            </div>
                        </div>
                    </form>
                    <p class="form-messege"></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MESSAGE BOX SECTION END -->

<?php require_once 'v_footer.php';?>