<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>

<body>
    <?php include "{$_SERVER['DOCUMENT_ROOT']}/BTTH03/views/Share/_header.php"; ?>

    <div class="menu">
        <a class="btn btn-success" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/BTTH03/views/Admin/insertTheLoai.php">Thêm mới</a>
        <?php
        if (isset($_GET['message'])) :
        ?>
            <div class="alert alert-danger mt-2"><?= $_GET['message'] ?></div>
        <?php endif; ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Tên Thể Loại</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($dataTheLoais as $dataTheLoai) :
                        $id = $dataTheLoai->getId();
                        $tenTheLoai = $dataTheLoai->getTenTheLoai();
                        // $href_edit_category = "{$_SERVER['DOCUMENT_ROOT']}/BTTH03/controller/AdminController/AdminController.php?controller=AdminController&action=editTheLoai";
                        // $href_delete_category = "{$_SERVER['DOCUMENT_ROOT']}/BTTH03/AdminController.php?controller=AdminController&action=deleteTheLoai";
                        $token = array('id'=>$id,'tenTheLoai'=>$tenTheLoai);   
                        $json_token = json_encode($token); 
                ?>
                    <tr>
                        <td scope="row"><?= $id ?></td>
                        <td scope="row"><?= $tenTheLoai ?></td>
                        <td scope="row"><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/BTTH03/views/Admin/editTheLoai.php?token=<?= urlencode($json_token); ?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                        <td scope="row"><button data-bs-toggle="modal" data-bs-target="#modalId<?= $id; ?>"><i class="fa-solid fa-trash"></i></button></td>
                    </tr>

                    <!-- Modal Body -->
                    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->

                    <div class="modal fade" id="modalId<?= $id; ?>" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalTitleId">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure want delete this....?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/BTTH03/public/index.php?controller=AdminController&action=deleteTheLoai&idTheLoai=<?=$id?>" class="btn btn-primary">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Optional: Place to the bottom of scripts -->
                    <script>
                        const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
                    </script>
                <?php endforeach ?>

            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>