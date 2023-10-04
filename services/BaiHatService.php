<?php
    include_once "{$_SERVER['DOCUMENT_ROOT']}/BTTH03/models/BaiHat.php";
    include_once "{$_SERVER['DOCUMENT_ROOT']}/BTTH03/lib/MySql.php";
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    class BaiHatService{
        public function __call($name, $arguments) {
            echo "funtion {$name} không tồn tại, hãy check lại trong đối tượng ". get_class($this);
        }
        public function getAllBaiHats(){
            try{
                $pdo = new PDO("mysql:host=127.0.0.1:3307;dbname=quanlibaihat", "root", "140103");
                $sql = "select * from baihat order by id desc";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                $data = $stmt->fetchAll();
                $baiHats = Array();
                foreach($data as $row){
                    $baiHats[] = new BaiHat($row["id"], $row["tenBaiHat"], $row["caSi"], $row['idTheLoai']);
                }
                return $baiHats;
            }catch(PDOException $e){
                // echo "error". $e->getMessage();
                return array();
            }
        }

        // public function getBaiHatById($)

        public function UpdateBaiHat(BaiHat $baiHat){
            $id = $baiHat->getId();
            $tenBaiHat = $baiHat->getTenBaiHat();
            $caSi = $baiHat->getCaSi();
            $idTheLoai = $baiHat->getIdTheLoai();
            return MySql::Update("update baihat set tenBaiHat = '$tenBaiHat', caSi = '$caSi', idTheLoai = '$idTheLoai' where id = '$id'");
        }
        public function InserBaiHat($baiHat){
            $tenBaiHat = $baiHat->getTenBaiHat();
            $caSi = $baiHat->getCaSi();
            $idTheLoai = $baiHat->getIdTheLoai();
            return MySql::Insert("INSERT INTO baihat(tenBaiHat, casi, idTheLoai) VALUES ('$tenBaiHat', '$caSi', '$idTheLoai')");
        }
        public function DeleteBaiHat($baiHat){
            return MySql::Delete("delete from baihat where id = '$baiHat->getId()'");
        }
    }
?>