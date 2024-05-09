<?php
namespace App\Model;

class CartModel extends DatabaseModel
{
    private $db;
    public function __construct()
    {
        $this->db = new DatabaseModel;
    }

    public function layspgiohang($id)
    {
        $sql = "SELECT * FROM `sanpham` s INNER JOIN theloai t ON s.id_tl = t.id_tl INNER JOIN (SELECT id_tl AS id_brand , tentheloai AS brand FROM `theloai` WHERE giatri = 0) g ON t.giatri = g.id_brand WHERE s.id_sp = $id";
        return $this->db->get_one($sql);
    }
}
