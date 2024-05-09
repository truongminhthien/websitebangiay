<?php
// namespace app\model;
namespace App\Model;

class ProductModel extends DatabaseModel
{
    private $db;
    public function __construct()
    {
        $this->db = new DatabaseModel;

    }
    public function laysanpham($chon, $view, $limit, $id, $keyword_sreach)
    {
        switch ($chon) {
            case '1':
                $sql = "SELECT * FROM `sanpham`";
                if ($view > 0) {
                    $sql .= " order by luotxem desc limit " . $limit;
                } else {
                    $sql .= " order by id_sp desc limit " . $limit;
                }
                return $this->db->get_all($sql);

                break;
            case '2':
                $sql = "SELECT * FROM `sanpham` INNER JOIN (SELECT * FROM theloai  WHERE giatri <> ROUND(giatri) ORDER BY RAND()
                LIMIT 1) AS tl ON tl.id_tl = sanpham.id_tl;";
                if ($limit > 0) {
                    $sql .= "  limit " . $limit;
                }
                return $this->db->get_all($sql);

                break;
            case '3':
                $sql = "SELECT * FROM `sanpham` WHERE id_sp = $id;";
                return $this->db->get_one($sql);
                break;
            case '4':
                $sql = "SELECT * FROM `sanpham` sp INNER JOIN theloai tl on sp.id_tl = tl.id_tl WHERE tl.id_tl = $id LIMIT $limit";
                return $this->db->get_all($sql);
                break;
            case '5':
                $sql = "SELECT * FROM `sanpham` WHERE tensp LIKE '%$keyword_sreach%' LIMIT $limit";
                return $this->db->get_all($sql);
                break;
            default:

                break;
        }
    }
}
