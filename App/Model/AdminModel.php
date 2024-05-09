<?php
// namespace app\model;
namespace App\Model;

class AdminModel extends DatabaseModel
{
    private $db;
    public function __construct()
    {
        $this->db = new DatabaseModel;

    }
    public function themdm($giatri, $ten)
    {
        $sql = "INSERT INTO `theloai`( `giatri`, `tentheloai`) VALUES ($giatri,'$ten');`";
        $this->db->pdo_execute($sql);
        return 0;
    }
    public function xoadm($id)
    {
        $sql = "DELETE FROM `theloai` WHERE id_tl = $id ;";
        $this->db->pdo_execute($sql);

        return 0;
    }
    public function suadm($id, $ten)
    {
        $sql = "UPDATE `theloai` SET `tentheloai`='$ten' WHERE id_tl = $id ;";
        $this->db->pdo_execute($sql);
        return 0;
    }
    // public function laybanner()
    // {
    //     $sql = " SELECT * FROM `banner` ";
    //     return $this->db->get_all($sql);
    // }

}
