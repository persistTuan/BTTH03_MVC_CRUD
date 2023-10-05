<?php
    class TheLoai{
        private $id;
        private $tenTheLoai;

        public function __construct( $tenTheLoai,$id = null){
            $this->id = $id;
            $this->tenTheLoai = $tenTheLoai;
        }
    

        public function getId(){
            return $this->id;
        }
        public function getTenTheLoai(){
            return $this->tenTheLoai;
        }
    }


?>