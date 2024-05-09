<?php
namespace App\Controller;

use App\Model\CatalogModel;
use App\Model\ProductModel;

class HomeController extends BaseController
{
    private $productmodel;
    private $danhmuctmodel;
    public function __construct()
    {
        $this->productmodel = new ProductModel;
        $this->danhmuctmodel = new CatalogModel;
    }

    public function index()
    {
        $this->titlepage = "Trang Chủ Website Bán Hàng";
        // $this->data["danhmuc"] = $this->danhmuctmodel->laydanhmuc();
        $this->data["theloai"] = $this->danhmuctmodel->laytheloai();
        $this->data["banner"] = $this->danhmuctmodel->laybanner();
        $this->data["dsxemnhieu"] = $this->productmodel->laysanpham(1, 1, 7, '', 0);
        $this->data["dsspmoi"] = $this->productmodel->laysanpham(1, 0, 8, '', 0);
        $this->data["dssptheloai"] = $this->productmodel->laysanpham(2, '', 8, '', 0);

        $this->randerView("v_home", $this->titlepage, $this->data);
    }

    public function lienhe()
    {
        $this->titlepage = "Trang Chủ Website Bán Hàng";
        $this->data["theloai"] = $this->danhmuctmodel->laytheloai();
        require_once 'App/Model/mailer.php';

        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $tieude = $_POST['tieude'];
            $noidung = $_POST['message'];
            $thanhcong = sendMail($email, $tieude, $noidung);
            if ($thanhcong == 0) {
                $_SESSION['thongbao'] = 'Liên hệ thành công. Chúng tôi sẽ liên hệ bạn sớm nhất.';
            }
        }
        $this->randerView("v_contact", $this->titlepage, $this->data);

    }
}
