<?php
namespace App\Controller;

use App\Model\CartModel;
use App\Model\CatalogModel;
use App\Model\ProductModel;
use App\Model\UserModel;

class CartController extends BaseController
{
    private $productmodel;
    private $danhmuctmodel;
    private $cartmodel;
    private $UserModel;
    public function __construct()
    {
        $this->UserModel = new UserModel;
        $this->productmodel = new ProductModel;
        $this->danhmuctmodel = new CatalogModel;
        $this->cartmodel = new CartModel;
    }

    public function cart()
    {
        $this->titlepage = "Trang Giỏ Hàng";
        $this->data["theloai"] = $this->danhmuctmodel->laytheloai();
        // unset($_SESSION['cart']);
        // $this->data["spgiohang"] = $this->cartmodel->layspgiohang($id);
        $url = isset($_GET['url']) ? "/" . rtrim($_GET['url'], '/') : '/index';
        $url_array = explode("/", $url);
        if (count($url_array) > 0) {
            $index = $url_array[count($url_array) - 1];
        }
        $xoa = array_search('xoa', $url_array);
        if ($xoa !== false) {
            $_SESSION['cart'] = array_values($_SESSION['cart']);
            unset($_SESSION['cart'][$index]);
            header('location: ' . BASE_PATH . '/cart');
        }
        $dssp_donhang = [];
        if (count($_SESSION['cart']) > 0) {
            foreach ($_SESSION['cart'] as $item) {
                // echo '<pre>';
                // var_dump($item);
                // echo '</pre>';
                $sp_donhang = $this->cartmodel->layspgiohang($item['id']);
                $sp_donhang['SoLuongMua'] = $item['SoLuong'];
                array_push($dssp_donhang, $sp_donhang);
            }
        }
        if (isset($_POST['submit'])) {
            header('location: ' . BASE_PATH . '/checkout');
        }
        $this->data['giohang'] = 'active';
        $this->data['thanhtoan'] = '';

        $this->data['ds_cart'] = $dssp_donhang;
        $this->randerView("v_cart", $this->titlepage, $this->data);

    }
    public function addcart()
    {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
        // kiểm tra xem có nhận dữ liệu từ ajax
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // lấy dữ liệu ajax xuống
            $id = $_POST['id'];
            $soluong = $_POST['soluong'];
            if (count($_SESSION['cart']) > 0) { // kiểm tra giỏ hàng
                $addsp = 0;
                foreach ($_SESSION['cart'] as &$item) {
                    if ($item['id'] == $id) {
                        $item['SoLuong'] += $soluong;
                        // echo 0;
                        $addsp = 1;
                        break;
                    }
                }
                if ($addsp == 0) {
                    // echo 1;
                    array_push($_SESSION['cart'], ['id' => $id, 'SoLuong' => $soluong]);
                }
            } else {
                // echo 1;
                array_push($_SESSION['cart'], ['id' => $id, 'SoLuong' => $soluong]);
            }
        }
        // print_r(count($_SESSION['cart']));
    }
    public function update()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // lấy dữ liệu ajax xuống
            $index = $_POST['id'];
            $soluong = $_POST['soluong'];
            foreach ($_SESSION['cart'] as &$item) {
                if ($item['id'] == $index) {
                    $item['SoLuong'] = $soluong;
                    break;
                }
            }
        }
    }
    public function checkout()
    {
        $this->titlepage = "Trang Giỏ Hàng";
        $this->data["theloai"] = $this->danhmuctmodel->laytheloai();

        $dssp_donhang = [];
        if (count($_SESSION['cart']) > 0) {
            foreach ($_SESSION['cart'] as $item) {
                $sp_donhang = $this->cartmodel->layspgiohang($item['id']);
                $sp_donhang['SoLuongMua'] = $item['SoLuong'];
                array_push($dssp_donhang, $sp_donhang);
            }
        }
        // if (isser($_POST['submit'])) {
        //     $ten = $_POST['ten'];
        //     $dienthoai = $_POST['sodienthoai'];
        //     $diachi = $_POST['diachi'];
        //     $email = $_POST['email'];
        //     $matkhau = $_POST['matkhau'];
        //     $dangki = $this->UserModel->insertUser($matkhau, $ten, $diachi, $email, '1', $dienthoai);
        //     if ($dangki == 0) {
        //         $_SESSION['user'] = 'Bạn Đăng Kí Tài Khoản Thành Công';
        //         header('location: ' . BASE_PATH . '/login');
        //     }
        // }
        $this->data['thanhtoan'] = 'active';
        $this->data['giohang'] = '';
        $this->data['ds_cart'] = $dssp_donhang;
        $this->randerView("v_cart", $this->titlepage, $this->data);

    }
}