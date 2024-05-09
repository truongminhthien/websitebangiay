<?php
namespace App\Controller;

use App\Model\CatalogModel;
use App\Model\UserModel;

class UserController extends BaseController
{
    private $UserModel;
    private $danhmuctmodel;

    public function __construct()
    {

        $this->UserModel = new UserModel;
        $this->danhmuctmodel = new CatalogModel;

    }

    public function register()
    {
        $this->titlepage = "Dang ki tai khoan";
        $this->data["theloai"] = $this->danhmuctmodel->laytheloai();

        if (isset($_POST['submit'])) {
            // header('location: ' . BASE_PATH . '/login');

            $ho = $_POST['ho'];
            $ten = $ho . ' ' . $_POST['ten'];
            $dienthoai = $_POST['sodienthoai'];
            $diachi = $_POST['diachi'];
            $email = $_POST['email'];
            $matkhau = $_POST['matkhau'];

            $dangki = $this->UserModel->insertUser($matkhau, $ten, $diachi, $email, '1', $dienthoai);
            if ($dangki == 0) {
                $_SESSION['thongbao'] = 'Bạn Đăng Kí Tài Khoản Thành Công';
                header('location: ' . BASE_PATH . '/login');
            }
        }
        $this->randerView("v_register", $this->titlepage, $this->data);

    }
    public function login()
    {
        $this->titlepage = "Đăng Nhập";
        $this->data["theloai"] = $this->danhmuctmodel->laytheloai();

        if (isset($_POST['submit'])) {
            $phone = $_POST['sodienthoai'];
            $password = $_POST['matkhau'];
            $dangnhap = $this->UserModel->getUserByPhoneAndPassword(1, $phone, $password, '');
            if ($dangnhap) {
                $_SESSION['user'] = $dangnhap;
                header('location: ' . BASE_PATH);
            } else {
                $_SESSION['loi'] = 'Số điện thoại hoặc mật khẩu không đúng.';
            }
        }
        $this->randerView("v_login", $this->titlepage, $this->data);
    }
    public function accout()
    {
        $this->titlepage = "Tài khoản của bạn";
        $this->data["theloai"] = $this->danhmuctmodel->laytheloai();
        $_SESSION['user'] = $this->UserModel->getUserByPhoneAndPassword(2, '', '', $_SESSION['user']['id_tk']);

        $this->data['thongtin'] = 'in';

        $this->randerView("v_accout", $this->titlepage, $this->data);

    }
    public function updateaction()
    {
        if (isset($_POST['submit1'])) {
            $ten = $_POST['ten'];
            $sodienthoai = $_POST['sodienthoai'];
            $email = $_POST['email'];
            $diachi = $_POST['diachi'];
            $idtk = $_SESSION['user']['id_tk'];
            $update = $this->UserModel->updateuser(1, $ten, $sodienthoai, $email, $diachi, '', $idtk);
            if ($update == 0) {
                $_SESSION['thongbao'] = 'Cập nhật thông tin Thành Công!';
                header('location: ' . BASE_PATH . '/user');
            }
        }

        if (isset($_POST['submit2'])) {
            $ten = '';
            $sodienthoai = '';
            $email = '';
            $diachi = '';
            $matkhau = $_POST['matkhau'];
            $idtk = $_SESSION['user']['id_tk'];
            $update = $this->UserModel->updateuser(2, $ten, $sodienthoai, $email, $diachi, $matkhau, $idtk);
            if ($update == 0) {
                $_SESSION['thongbao'] = 'Cập nhật thông tin Thành Công';
                header('location: ' . BASE_PATH . '/user');
            }
        }
    }
    public function dangxuat()
    {
        unset($_SESSION['user']);
        header('location: ' . BASE_PATH);
    }

}
