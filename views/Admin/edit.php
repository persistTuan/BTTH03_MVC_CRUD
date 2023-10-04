<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body class="p-4">

    <div class="container-fluid">

        <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
            include "{$_SERVER['DOCUMENT_ROOT']}/BTTH03/views/Share/_header.php"; 
            $tokenArray = json_decode($_GET['token'], true);
        ?>
        <div class="menu">
            <h2>Sửa thông tin Bài Hát</h2>
            <form  method="post" action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/BTTH03/public/index.php?controller=AdminController&action=EditBaiHat" class="clearfix">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Mã bài hát</span>
                    <input name="id" readonly value="<?= $tokenArray['id'] ?>" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Tên bài hát</span>
                    <input name="tenBaiHat" value="<?= $tokenArray['tenBaiHat'] ?>" type="text" class="form-control tenTheLoai" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Ca Sĩ</span>
                    <input name="caSi" value="<?= $tokenArray['caSi'] ?>" type="text" class="form-control tenTheLoai" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Id thể loại</span>
                    <input name="idTheLoai" value="<?= $tokenArray['idTheLoai'] ?>" type="text" class="form-control tenTheLoai" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="buttton"> 
                    <a class="btn btn-warning float-end" href="../admin/category.php">Quay lại</a>
                    <button name="submitLuuLai" type="submit" class="btn-save btn btn-success float-end me-2" >Lưu lại</button>
                </div>
            </form>

        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>