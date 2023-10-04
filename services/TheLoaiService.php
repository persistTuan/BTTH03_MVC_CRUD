<?php
    include "{$_SERVER['DOCUMENT_ROOT']}/BTTH03/models/TheLoai.php";
    include_once "{$_SERVER['DOCUMENT_ROOT']}/BTTH03/lib/MySql.php";

    class TheLoaiService {
        public function getTenTheLoai($idTheLoai) : string{
            return MySql::select("select tenTheLoai from theloai where id = '$idTheLoai'")[0][0];
        }
    }
?>