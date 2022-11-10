<?php
$admin = true;
require "./controller/userC.php";
require "./controller/controllerEvent.php";
require "./controller/categoryC.php";
$userC = new userC();
$eventC = new eventC();
$categoryC = new categoryC();

if ($admin) {
    if (!isset($_GET['url'])) {
        header('location:index.php?url=admin');
    }
    // error_reporting(0);
    $url = $_GET['url'];
    include './view/admin/headerAdmin.php';
    switch ($url) {
        case 'clienMange':
            if (isset($_GET['act'])) {
                $act = $_GET['act'];
                switch ($act) {
                    case 'del':
                        $id_user = $_GET['id_user'];
                        $userC->delUser($id_user);
                        break;
                }
            }
            $user = new userC();
            $dataUser = $user->getAllUser();
            include './view/admin/khachhang.php';
            break;
        case 'event':
            $event = new eventC();
            $dataEvent = $event->getAllEvent();
            include './view/admin/event.php';
            break;
        case 'hoadon':
            include './view/admin/hoadon.php';
            break;
        case 'category':
            $dataCategory = $categoryC->getAllCategory();
            if (isset($_GET['act'])) {
                $act = $_GET['act'];
                switch ($act) {
                    case 'del':
                        $id_category = $_GET['id_category'];
                        $categoryC->delCategory($id_category);
                        break;
                }
            }
            include './view/admin/loaisp.php';
            break;
        case 'formcategory':
            include './view/admin/themloai.php';
            break;
        case 'comment_user':
            include './view/admin/comment.php';
            break;
        case 'admin':
            $amoutUser = $userC->amoutUser();
            include './view/admin/admin.php';
        default:

            break;
    }
    include './view/admin/footerAdmin.php';
}
