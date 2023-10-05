<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    class BaiHat{
        private $id;
        private $tenBaiHat;
        private $caSi;
        private $idTheloai;

        public function __construct( $tenBaiHat, $caSi, $idTheloai, $id = null){
            $this->tenBaiHat = $tenBaiHat;
            $this->caSi = $caSi;
            $this->idTheloai = $idTheloai;
            $this->id = $id;
        }

        public function getId(){
            return $this->id;
        }
        public function getTenBaiHat(){
            return $this->tenBaiHat;
        }
        public function getCaSi(){
            return $this->caSi;
        }
        public function getIdTheloai(){
            return $this->idTheloai;
        }
    }
?>