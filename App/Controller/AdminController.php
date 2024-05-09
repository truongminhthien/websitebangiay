<?php
namespace App\Controller;

use App\Model\AdminModel;
use App\Model\CatalogModel;

class AdminController extends BaseController
{
    private $admintmodel;
    private $danhmuctmodel;
    public function __construct()
    {
        $this->admintmodel = new AdminModel;
        $this->danhmuctmodel = new CatalogModel;

    }

    public function index()
    {
        $this->data['v_adminindex'] = 'v_adminindex';
        $this->randerViewadmin("v_adminlayout", $this->titlepage, $this->data);
    }
    public function quanlydanhmuc()
    {
        $this->data["theloai"] = $this->danhmuctmodel->laytheloai();

        $url = isset($_GET['url']) ? "/" . rtrim($_GET['url'], '/') : '/index';
        $url_array = explode("/", $url);

        $xoa = array_search('xoadm', $url_array);
        if ($xoa !== false) {
            if (count($url_array) > 0) {
                $id = $url_array[count($url_array) - 1];
            }
            $tc = $this->admintmodel->xoadm($id);
            if ($tc == 0) {
                header('location: ' . BASE_PATH . '/quanlydanhmuc');
            }
        }
        $xoa = array_search('xoatl', $url_array);
        if ($xoa !== false) {
            if (count($url_array) > 0) {
                $id = $url_array[count($url_array) - 1];
            }
            $tc = $this->admintmodel->xoadm($id);
            if ($tc == 0) {
                header('location: ' . BASE_PATH . '/quanlydanhmuc');
            }
        }

        $this->data['themdm'] = null;
        $this->data['themtl'] = null;
        $this->data['v_adminindex'] = 'v_admincatalog';
        $this->randerViewadmin("v_adminlayout", $this->titlepage, $this->data);
    }

    public function themdanhmuc()
    {
        $this->data["theloai"] = $this->danhmuctmodel->laytheloai();

        if (isset($_POST['submit'])) {
            $ten = $_POST['ten'];
            $this->admintmodel->themdm(0, $ten);
            header('location: ' . BASE_PATH . '/quanlydanhmuc');
        }
        $this->data['themdm'] = '1';
        $this->data['themtl'] = null;
        $this->data['v_adminindex'] = 'v_admincatalog';
        $this->randerViewadmin("v_adminlayout", $this->titlepage, $this->data);
    }
    public function suadanhmuc()
    {
        $this->data["theloai"] = $this->danhmuctmodel->laytheloai();

        $url = isset($_GET['url']) ? "/" . rtrim($_GET['url'], '/') : '/index';
        $url_array = explode("/", $url);

        $sua = array_search('sua', $url_array);
        if ($sua !== false) {
            if (count($url_array) > 0) {
                $id = $url_array[count($url_array) - 1];
            }
            $this->data['tendmid'] = $this->danhmuctmodel->laytheloaiid($id);
            if (isset($_POST['submit'])) {
                $ten = $_POST['ten'];
                $tc = $this->admintmodel->suadm($id, $ten);
                if ($tc == 0) {
                    header('location: ' . BASE_PATH . '/sua/' . $id);
                }
            }

        }
        $this->data['themdm'] = '2';
        $this->data['themtl'] = null;

        $this->data['v_adminindex'] = 'v_admincatalog';
        $this->randerViewadmin("v_adminlayout", $this->titlepage, $this->data);
    }

    public function suatheloai()
    {
        $this->data["theloai"] = $this->danhmuctmodel->laytheloai();

        $url = isset($_GET['url']) ? "/" . rtrim($_GET['url'], '/') : '/index';
        $url_array = explode("/", $url);

        $sua = array_search('suatl', $url_array);
        if ($sua !== false) {
            if (count($url_array) > 0) {
                $id = $url_array[count($url_array) - 1];
            }
            $this->data['tentlid'] = $this->danhmuctmodel->laytheloaiid($id);
            if (isset($_POST['submit'])) {
                $ten = $_POST['ten'];
                $tc = $this->admintmodel->suadm($id, $ten);
                if ($tc == 0) {
                    header('location: ' . BASE_PATH . '/sua/' . $id);
                }
            }

        }
        $this->data['themdm'] = null;
        $this->data['themtl'] = '2';

        $this->data['v_adminindex'] = 'v_admincatalog';
        $this->randerViewadmin("v_adminlayout", $this->titlepage, $this->data);
    }
    public function themtheloai()
    {

        $this->data["theloai"] = $this->danhmuctmodel->laytheloai();

        if (isset($_POST['submit'])) {
            $giatri = $_POST['id'];
            $ten = $_POST['ten'];

            $this->admintmodel->themdm($giatri, $ten);
            // header('location: ' . BASE_PATH . '/quanlydanhmuc');
        }
        $this->data['themtl'] = '1';
        $this->data['themdm'] = null;
        $this->data['v_adminindex'] = 'v_admincatalog';
        $this->randerViewadmin("v_adminlayout", $this->titlepage, $this->data);

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
