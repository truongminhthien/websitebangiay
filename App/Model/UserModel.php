<?php
namespace App\Model;

class UserModel extends DatabaseModel
{
    protected $db;

    public function __construct()
    {
        $this->db = new DatabaseModel;
    }

    public function insertUser($matkhau, $ten, $diachi, $email, $quyen, $dienthoai)
    {
        $sql = "INSERT INTO `taikhoan`(`tentk`, `matkhau`, `sodienthoai`, `email`,`quyen`, `diachi`) VALUES (?,?,?,?,?,?)";
        $this->db->pdo_execute($sql, $ten, $matkhau, $dienthoai, $email, $quyen, $diachi);
        return 0;
    }
    public function getUserByPhoneAndPassword($chon, $phone, $password, $id)
    {
        $sql = "SELECT * FROM `taikhoan`";
        switch ($chon) {
            case '1':
                $sql .= "  WHERE sodienthoai LIKE ? AND matkhau = ?";
                return $this->db->get_one($sql, $phone, $password);
                break;
            case '2':
                $sql .= "  WHERE id_tk = ?";
                return $this->db->get_one($sql, $id);
                break;
            default:
                break;
        }
    }
    public function updateuser($chon, $ten, $sodienthoai, $email, $diachi, $matkhau, $idtk)
    {
        switch ($chon) {
            case '1':
                $sql = "UPDATE `taikhoan` SET `tentk`=?,`sodienthoai`=?,`email`=?,`diachi`=? WHERE id_tk = ?";
                $this->db->pdo_execute($sql, $ten, $sodienthoai, $email, $diachi, $idtk);
                return 0;
                break;
            case '2':
                $sql = "UPDATE `taikhoan` SET `matkhau`=? WHERE id_tk = ?";
                $this->db->pdo_execute($sql, $matkhau, $idtk);
                return 0;
                break;
            default:
                # code...
                break;
        }
    }
}
