<?php
    include_once "{$_SERVER['DOCUMENT_ROOT']}/BTTH03/lib/MySql.php";
    class HomeController{
        public function index() {
            // lấy data từ serviceBaiHat
            include_once "{$_SERVER['DOCUMENT_ROOT']}/BTTH03/services/BaiHatService.php";
            $baiHatService = new BaiHatService();
            $dataBaiHats = $baiHatService->getAllBaiHats();
            // trả về cho view home page Index.php
            include_once "{$_SERVER['DOCUMENT_ROOT']}/BTTH03/views/Home/index.php";
        }
        public function theLoai() {
            // lấy data từ serviceTheLoai
            include_once "{$_SERVER['DOCUMENT_ROOT']}/BTTH03/services/TheLoaiService.php";
            $theLoaiService = new TheLoaiService();
            $dataTheLoais = $theLoaiService->getAllTheLoai();
            // trả về cho view home page theloai.php
            include_once "{$_SERVER['DOCUMENT_ROOT']}/BTTH03/views/Home/theLoai.php";
        }
    }

    
?>