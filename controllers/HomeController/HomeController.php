<?php
    class HomeController{
        public function index() {
            // lấy data từ serviceBaiHat
            include_once "{$_SERVER['DOCUMENT_ROOT']}/BTTH03/lib/MySql.php";
            include_once "{$_SERVER['DOCUMENT_ROOT']}/BTTH03/services/BaiHatService.php";
            include_once "{$_SERVER['DOCUMENT_ROOT']}/BTTH03/services/TheLoaiService.php";
            $theLoaiService = new TheLoaiService();
            $baiHatService = new BaiHatService();
            $dataBaiHats = $baiHatService->getAllBaiHats();
            // trả về cho view home page Index.php
            include_once "{$_SERVER['DOCUMENT_ROOT']}/BTTH03/views/Home/index.php";
        }
    }

    
?>