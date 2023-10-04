<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    include_once "{$_SERVER['DOCUMENT_ROOT']}/BTTH03/services/BaiHatService.php";
    class AdminController{
        
        public function EditBaiHat() {
            if(isset($_POST['submitLuuLai'])){
                $baiHatService = new BaiHatService();
                $check = $baiHatService->UpdateBaiHat(new BaiHat($_POST['id'], $_POST['tenBaiHat'], $_POST['caSi'], $_POST['idTheLoai']));
                $mes = $check?"success":"error";
                header("location:http://localhost/BTTH03/public/index.php?mes=$mes");exit();
            }
            else{

            }
            
        }

        public function DeleteBaiHat(){
            if(isset($_POST['submitDelete'])){
                $baiHatService = new BaiHatService();
                $check = $baiHatService->DeleteBaiHat(new BaiHat($_POST['id'], $_POST['tenBaiHat'], $_POST['caSi'], $_POST['idTheLoai']));
                $mes = $check?"success":"error";
                header("location:http://localhost/BTTH03/public/index.php?mes=$mes");exit();
            }
            else{
                echo "Bạn chưa thực hiện delete";
            }
        }
        public function InsertBaiHat(){
            if(isset($_POST['submitInsert'])){
                $baiHatService = new BaiHatService();
                $check = $baiHatService->InserBaiHat(new BaiHat($_POST['id'], $_POST['tenBaiHat'], $_POST['caSi'], $_POST['idTheLoai']));
                $mes = $check?"success":"error";
                header("location:http://localhost/BTTH03/public/index.php?mes=$mes");exit();
            }
            else{
                echo "Bạn chưa thực hiện delete";
            }
        }
    }

    
?>