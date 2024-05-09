<?php
namespace App\Controller;

use App\Model\CatalogModel;
use App\Model\ProductModel;
use App\Model\UserModel;

class ProductController extends BaseController
{
    private $UserModel;
    private $productmodel;
    private $danhmuctmodel;

    public function __construct()
    {
        $this->productmodel = new ProductModel;
        $this->UserModel = new UserModel;
        $this->danhmuctmodel = new CatalogModel;
    }
    public function productdetail()
    {
        $this->titlepage = "Chi tiết sản phẩm";
        $this->data["theloai"] = $this->danhmuctmodel->laytheloai();

        $url = isset($_GET['url']) ? "/" . rtrim($_GET['url'], '/') : '/index';
        $url_array = explode("/", $url);
        if (count($url_array) > 0) {
            $id = $url_array[count($url_array) - 1];
        } else {
            $id = "";
        }

        $this->data["dssptheloai"] = $this->productmodel->laysanpham(2, '', 3, '', 0);

        $this->data['chitietsp'] = $this->productmodel->laysanpham(3, '', 8, $id, 0);
        $this->randerView("v_product_detail", $this->titlepage, $this->data);
    }
    public function shop()
    {
        $this->titlepage = "Tất cả các sản phẩm";
        $this->data["theloai"] = $this->danhmuctmodel->laytheloai();
        $this->data['sanphamshop'] = $this->productmodel->laysanpham(1, 0, 9, 0, 0);
        $this->data['thongbao'] = 'Tất cả các sản phẩm';

        $url = isset($_GET['url']) ? "/" . rtrim($_GET['url'], '/') : '/index';
        $url_array = explode("/", $url);
        $id = array_search('idcatalog', $url_array);
        $keyword_sreach = array_search('sreach', $url_array);

        // var_dump($url_array);
        if ($id > 0) {
            $id = $url_array[count($url_array) - 1];
            $this->data['sanphamshop'] = $this->productmodel->laysanpham(4, 0, 9, $id, 0);
            $this->data['thongbao'] = 'Tất cả các sản phẩm của <strong>' . $this->data['sanphamshop'][0]['tentheloai'] . '</strong>';
        }

        if ($keyword_sreach !== false && isset($url_array[$keyword_sreach + 1])) {
            $keyword_sreach = $url_array[$keyword_sreach + 1];
            $this->data['sanphamshop'] = $this->productmodel->laysanpham(5, 0, 9, 0, $keyword_sreach);
            $this->data['thongbao'] = 'Tất cả các sản phẩm của <strong>' . $keyword_sreach . '</strong>';
        }
        $this->randerView("v_shop", $this->titlepage, $this->data);

    }

}
