<?php
require_once 'Config/funtion.php';
require_once 'Config/config.php';

if (isset($_POST['submit']) && $_POST['tukhoa'] != "") {
    $tukhoa = create_slug($_POST['tukhoa'], 1);
    header('location: ' . BASE_PATH . '/product/sreach/' . $tukhoa);
} else {
    header('location:' . BASE_PATH . '/');

}
