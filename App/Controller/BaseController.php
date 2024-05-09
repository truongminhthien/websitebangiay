<?php
namespace App\Controller;

class BaseController
{
    protected $data = [];
    protected $titlepage = "";

    public function randerView($viewpage, $titlepage, $data)
    {
        $viewfile = 'App/View/' . $viewpage . '.php';

        if (is_file($viewfile)) {
            include $viewfile;
        } else {
            echo 'trang này ko ton tai';
        }
    }
    public function randerViewadmin($viewpage, $titlepage, $data)
    {
        $viewfile = 'App/View/admin/' . $viewpage . '.php';

        if (is_file($viewfile)) {
            include $viewfile;
        } else {
            echo 'trang này ko ton tai';
        }
    }
}
