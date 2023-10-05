<?php
    include "{$_SERVER['DOCUMENT_ROOT']}/BTTH03/models/TheLoai.php";
    include_once "{$_SERVER['DOCUMENT_ROOT']}/BTTH03/lib/MySql.php";

    class TheLoaiService {
        public function getTenTheLoai($idTheLoai) : string{
            return MySql::select("select tenTheLoai from theloai where id = '$idTheLoai'")[0][0];
        }

        public function __call($name, $arguments) {
            echo "funtion {$name} không tồn tại, hãy check lại trong đối tượng ". get_class($this);
        }
        public function getAllTheLoai(){
           $data =  MySql::select("select * from theloai order by id desc");
           if($data != false){
                $theLoais = array();
                foreach($data as $row){
                    $theLoais[] = new TheLoai( $row['tenTheLoai'], $row['id']);
                }
                return $theLoais;
           }
           return array();
        }

        public function UpdateTheLoai(TheLoai $theLoai){
            $id = $theLoai->getId();
            $tenTheLoai = $theLoai->getTenTheLoai();
            return MySql::Update("update TheLoai set tenTheLoai = '$tenTheLoai' where id = '$id'");
        }
        public function InserTheLoai($theLoai){
            $tenTheLoai = $theLoai->getTenTheLoai();
            return MySql::Insert("INSERT INTO TheLoai(tenTheLoai) VALUES ('$tenTheLoai')");
        }
        public function DeleteTheLoai($id){
            return MySql::Delete("delete from TheLoai where id = '$id)'");
        }
    }
?>