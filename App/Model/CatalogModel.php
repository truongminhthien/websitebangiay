<?php
// namespace app\model;
namespace App\Model;

class CatalogModel extends DatabaseModel
{
    private $db;
    public function __construct()
    {
        $this->db = new DatabaseModel;

    }
    // public function laydanhmuc()
    // {
    //     $sql = "SELECT * FROM `danhmuc`";
    //     return $this->db->get_all($sql);
    // }
    public function laytheloai()
    {
        $sql = "SELECT * FROM `theloai`";
        return $this->db->get_all($sql);
    }

    public function laytheloaiid($id)
    {
        $sql = "SELECT * FROM `theloai` where id_tl = $id";
        return $this->db->get_all($sql);
    }
    public function laybanner()
    {
        $sql = " SELECT * FROM `banner` ";
        return $this->db->get_all($sql);
    }

}
