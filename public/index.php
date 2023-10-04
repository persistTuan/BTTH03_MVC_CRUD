<?php
ini_set('display_e  rrors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$controller = isset($_GET['controller'])?ucfirst((string)$_GET['controller']) : 'HomeController';
$action = isset($_GET['action'])?$_GET['action'] : 'index';
// echo "$controller - $action";
if($controller == 'HomeController'){
    include_once "{$_SERVER['DOCUMENT_ROOT']}/BTTH03/controllers/HomeController/HomeController.php";
    $homeController = new HomeController();
    $homeController->$action();
}
else if ($controller == "AdminController"){
    include_once "{$_SERVER['DOCUMENT_ROOT']}/BTTH03/controllers/AdminController/AdminController.php";
    $adminController = new AdminController();
    $adminController->$action();
    // $adminController->$action( new BaiHat($_POST['id'], $_POST['tenBaiHat'], $_POST['caSi'], $_POST['idTheLoai']) );
    // call_user_func_array([$adminController, $action], array(new BaiHat($_POST['id'], $_POST['tenBaiHat'], $_POST['caSi'], $_POST['idTheLoai'])));

}
else{
    echo "Error không tồn tại url";
}

?>