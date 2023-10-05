<div class="header d-flex justify-content-between align-items-center mt-3">
    <div class="container-left d-flex justify-content-between align-items-center">
        <a href="../musiclife/index.php"><img src=".." alt="ảnh logo" class="img-fluid"></a>
        
        <ul class="nav">
            <li class="nav-item">
                <a class="text-dark nav-link btn btn-light btn-trangChu" aria-current="page" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/BTTH03/public/index.php">Trang chủ</a>
            </li>
            <li class="nav-item">
                <a class="text-dark nav-link btn btn-light btn-dangNhap" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/BTTH03/public/index.php?action=theLoai">Quanr lí Thể Loại</a>
            </li>
        </ul>
    </div>
    <div class="container-right">
        <form action="">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="nội dung cần tìm"
                    aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-outline-success" type="button" id="button-addon2">Button</button>
            </div>
        </form>
    </div>
</div>