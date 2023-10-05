<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    include_once "{$_SERVER['DOCUMENT_ROOT']}/BTTH03/services/BaiHatService.php";
    include_once "{$_SERVER['DOCUMENT_ROOT']}/BTTH03/services/TheLoaiService.php";
    class AdminController{
    
        public function editBaiHat() {
            if(isset($_POST['submitLuuLai'])){
                $baiHatService = new BaiHatService();
                $check = $baiHatService->UpdateBaiHat(new BaiHat($_POST['id'], $_POST['tenBaiHat'], $_POST['caSi'], $_POST['idTheLoai']));
                $mes = $check?"success":"error";
                header("location:http://localhost/BTTH03/public/index.php?mes=$mes");exit();
            }
            else{
                echo "bạn chưa thực hiện editing";
            }
            
        }
        public function editTheLoai() {
            if(isset($_POST['submitTheLoai_LuuLai'])){
                $theLoaiService = new TheLoaiService();
                $check = $theLoaiService->UpdateTheLoai(new TheLoai($_POST['id'], $_POST['tenTheLoai']));
                $mes = $check?"success":"error";
                header("location:http://localhost/BTTH03/public/index.php?action=theLoai&mes=$mes");exit();
            }
            else{
                echo "bạn chưa thực hiện editing";
            }
            
        }

        public function deleteBaiHat(){
            if(isset($_GET['idBaiHat'])){
                $baiHatService = new BaiHatService();
                $check = $baiHatService->deleteBaiHat($_GET['idBaiHat']);
                $mes = $check?"success":"error";
                header("location:http://localhost/BTTH03/public/index.php?mes=$mes");exit();
            }
        }
        public function deleteTheLoai(){
            if(isset($_GET['idTheLoai'])){
                $theLoaiService = new TheLoaiService();
                $check = $theLoaiService->deleteTheLoai($_GET['idTheLoai']);
                $mes = $check?"success":"error";
                header("location:http://localhost/BTTH03/public/index.php?action=theLoai&mes=$mes");exit();
            }
            else{
                echo "Bạn chưa thực hiện delete";
            }
        }
        public function insertBaiHat(){
            if(isset($_POST['submit_insertBaiHat'])){
                $baiHatService = new BaiHatService();
                $check = $baiHatService->InserBaiHat(new BaiHat($_POST['id'], $_POST['tenBaiHat'], $_POST['caSi'], $_POST['idTheLoai']));
                $mes = $check?"success":"error";
                header("location:http://localhost/BTTH03/public/index.php?mes=$mes");exit();
            }
            else{
                echo "Bạn chưa thực hiện inserting";
            }
        }
        public function insertTheLoai(){
            if(isset($_POST['submit_insertTheLoai'])){
                $theLoaiService = new TheLoaiService();
                $check = $theLoaiService->InserTheLoai( new TheLoai($_POST['tenTheLoai']) );
                $mes = $check?"success":"error";
                header("location:http://localhost/BTTH03/public/theLoai.php?mes=$mes");exit();
            }
            else{
                echo "Bạn chưa thực hiện inserting";
            }
        }
    }

    
?>