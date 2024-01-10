<?php
namespace App\Controller;

use App\Repository\DanseuseRepository;

class DanseuseController{

    function index() {
        $repoDanseuse = new DanseuseRepository();
        $list = $repoDanseuse->getListDanseuses();
        require '../layouts/page/listDanseuse.php';
    }

    function detail($params) {
        $repoDanseuse = new DanseuseRepository();
        $danseuse = $repoDanseuse->getById($params['id']);
        require '../layouts/page/danseuseDetail.php';
    }
}
