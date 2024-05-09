<?php
// namespace app\model;
namespace App\Model;

use PDO;
use PDOException;

class DatabaseModel
{
    private $dbhost = DB_HOST;
    private $dbname = DB_NAME;
    private $dbuser = DB_USER;
    private $dbpass = DB_PASS;
    private $conn;
    private $stmt;

    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=" . $this->dbhost . ";dbname=" . $this->dbname, $this->dbuser, $this->dbpass);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully";
        } catch (PDOException $e) {
            // echo "Connection failed: " . $e->getMessage();
        }
    }

    public function get_all($sql)
    {
        $this->stmt = $this->conn->prepare($sql);
        $this->stmt->execute();
        $this->stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $this->stmt->fetchAll();
    }

    public function get_one($sql)
    {
        $t = array_slice(func_get_args(), 1);
        try {
            $this->stmt = $this->conn->prepare($sql);
            $this->stmt->execute($t);
            $this->stmt->setFetchMode(PDO::FETCH_ASSOC);
            return $this->stmt->fetch();
        } catch (PDOException $e) {
            throw $e;
            // echo "Connection failed: " . $e->getMessage();
        }

    }
    function pdo_execute($sql)
    {
        $sql_args = array_slice(func_get_args(), 1);
        try {
            $this->stmt = $this->conn->prepare($sql);
            $this->stmt->execute($sql_args);
        } catch (PDOException $e) {
            throw $e;
        } finally {
            unset($this->conn);
        }
    }

    public function __destrust()
    {
        unset($this->conn);
    }
}

// public function get_one($sql)
// {
//     $this->stmt = $this->conn->prepare($sql);
//     $this->stmt->execute();
//     $this->stmt->setFetchMode(PDO::FETCH_ASSOC);
//     return $this->stmt->fetch();
// }