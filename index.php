<?php
ob_start();
$admin = false;
require "./upload/imgur.php";
require "./controller/userC.php";
require "./controller/eventC.php";
require "./controller/categoryC.php";
require "./controller/shopC.php";
require "./controller/commentC.php";
require "./controller/productManagerC.php";
require "./controller/billShopC.php";
$userC = new userC();
$eventC = new eventC();
$categoryC = new categoryC();
$shopC = new shopC();
$commentC = new commentC();
$productManagerC = new ProductManagerC();
$billShopC = new billShopC();


if ($admin) {
    if (!isset($_GET['url'])) {
        header('location:index.php?url=admin');
    }
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
            if (isset($_GET['act'])) {
                $act = $_GET['act'];
                switch ($act) {
                    case 'delEvent':
                        $id_event = $_GET['id_event'];
                        $eventC->deleteEvent($id_event);
                        break;
                    case 'add':
                        var_dump("okkkkkk");
                        break;
                }
            }
            $event = new eventC();
            $dataEvent = $event->getAllEvent();
            include './view/admin/event.php';
            break;
        case 'shop':
            if (isset($_GET['act'])) {
                $act = $_GET['act'];
                switch ($act) {
                    case 'update':
                        $id_shop = $_GET['id_shop'];
                        $dataUpdate = $_POST['dataUpdate'];
                        $find = strpos($dataUpdate, '-');
                        $price = substr($dataUpdate, $find + 1, strlen($dataUpdate));
                        $month = substr($dataUpdate, 0, $find);
                        $check = $shopC->updateShop($id_shop, $month, $price);
                        var_dump($check);
                        if ($check) {
                            $checkLol = $billShopC->inserBill($id_shop, $month, $price, 0);
                            var_dump($checkLol);
                        }
                        break;
                }
            };
            $dataShop = $shopC->getAllShop();
            include './view/admin/shop.php';
            break;
        case 'editShop':
            if (isset($_GET['id_shop'])) {
                $id_shop = $_GET['id_shop'];
            }
            $dataOne = $shopC->getOneShop($id_shop);
            include './view/admin/editEndShop.php';
            break;
        case "infoShop":
            if (isset($_GET['id_shop'])) {
                $id_shop = $_GET['id_shop'];
            }
            $dataOne = $shopC->getOneShop($id_shop);
            include './view/admin/infoShop.php';
            break;
        case "turnover":
            $dataBillShop = $billShopC->getAllBillShop();
            include './view/admin/turnover.php';
            break;
        case "request":
            if (isset($_GET['act'])) {
                $act = $_GET['act'];
                switch ($act) {
                    case 'update':
                        $id_bill = $_GET['id_bill'];
                        $billShopC->updateStatus(0, $id_bill);
                }
            }
            $dataRequest = $billShopC->getAllRequest();
            include './view/admin/request.php';
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
                    case 'add':
                        if (isset($_POST['btnThem'])) {
                            $category_name = $_POST["category_name"];
                            $file_tmp = $_FILES["file"]['tmp_name'];
                            $img_src = upload($file_tmp);
                            $categoryC->insertCategory('8', $category_name, $img_src);
                            break;
                        }
                    case 'update':
                        if (isset($_POST['btnUpdate'])) {
                            $category_name = $_POST["category_name"];
                            $file_tmp = $_FILES["file"]['tmp_name'];
                            $img_src = upload($file_tmp);
                            $id_category = $_GET['id_category'];
                            $categoryC->updateCategory($id_category, $category_name, $img_src);
                            break;
                        }
                }
            }
            include './view/admin/loaisp.php';
            break;
        case 'formcategory':
            include './view/admin/themloai.php';
            break;
        case 'editcategory':
            if (isset($_GET['id_category'])) {
                $id_category = $_GET['id_category'];
                $dataOne = $categoryC->getOneCategory($id_category);
            }
            include './view/admin/FormEditCategory.php';
            break;
        case 'comment_user':
            if (isset($_GET['act'])) {
                $act = $_GET['act'];
                switch ($act) {
                    case 'deleteComment':
                        $id_comment = $_GET['id_comment'];
                        $commentC->deleteComment($id_comment);
                        break;
                }
            }
            $comment = new commentC();
            $dataComment = $commentC->getAllComment();
            include './view/admin/comment.php';
            break;
        case 'admin':
            $amoutUser = $userC->amoutUser();
            $amountCategory = $categoryC->amoutCategoryA();
            $amountShop = $shopC->amoutShop();
            include './view/admin/admin.php';
        default:
            break;
    }
    include './view/admin/footerAdmin.php';
}
// shoppp
$manage = false;
if ($manage) {
    error_reporting(0);
    $url = $_GET['url'];
    include './view/manage/headerManage.php';
    switch ($url) {
        case 'manage':
            include './view/manage/manage.php';
            break;
        case 'add_product':
            if (isset($_GET['act'])) {
                $act = $_GET['act'];
                switch ($act) {
                    case 'add':
                        if (isset($_POST['addproduct'])) {
                            $id_category = $_POST['get_category'];
                            $name_product = $_POST['name_product'];
                            $description_product = $_POST['description_product'];
                            $amount_product = $_POST['amount_product'];
                            $price_product = $_POST['price_product'];
                            $img_product = $_FILES['img_product']['name'];
                            $img_product_tmp = $_FILES['img_product']['tmp_name'];

                            $img_src = upload($img_product_tmp);
                            $show = $productManagerC;

                            $productManagerC->insertNewProductManager(
                                '3',
                                $id_category,
                                $name_product,
                                $description_product,
                                $amount_product,
                                $price_product,
                                $img_src
                            );
                        }
                        break;
                    default:
                        break;
                }
            }

            $getAllDataCategory = $categoryC->getAllCategory();
            include './view/manage/add_product.php';
            break;
        case 'product':
            if (isset($_GET['act'])) {
                $act = $_GET['act'];
                switch ($act) {
                    case 'updateProduct':
                        if (isset($_POST['updateProduct'])) {
                            $id_product = $_GET['id_product'];
                            $name_product = $_POST['name_product'];
                            $description_product = $_POST['description_product'];
                            $amount_product = $_POST['amount_product'];
                            $price_product = $_POST['price_product'];
                            $img_product = $_FILES['img_product']['name'];
                            $img_product_tmp = $_FILES['img_product']['tmp_name'];
                            $img_src = upload($img_product_tmp);
                            $productManagerC->updateProduct($id_product, $name_product, $description_product, $amount_product, $price_product, $img_src);
                        }
                        break;
                    case 'deleteProduct':
                        $id_product = $_GET['id_product'];
                        $productManagerC->deleteProduct($id_product);
                        var_dump($id_product);
                        break;
                    default:
                        break;
                }
            }
            $getAllProducts = $productManagerC->getAllProductById('3');
            include './view/manage/product.php';
            break;
        case 'hoadon':
            include './view/manage/hoadon.php';
            break;
        case 'updateProduct':
            if (isset($_GET['id_product'])) {
                $id_product = $_GET['id_product'];
                $dataProductId = $productManagerC->getProductById($id_product);
            }
            include "./view/manage/updateProduct.php";
            break;
        default:
            break;
    }
    include './view/manage/footerManage.php';
}
$user = true;
if ($user || !$manage || $admin) {
    $showProductSale =  $productManagerC->selectProductsBySales();
    $topNewProducts = $productManagerC->TopTodayProducts();
    $getAllDataCategory = $categoryC->getAllCategory();
    error_reporting(0);
    include "./view/component/header.php";
    $url = $_GET['url'];
    switch ($url) {
        case 'detail-product':
            $id_product = $_GET["id_product"];
            $shopDetail = $productManagerC->pageDetailProduct($id_product);
            break;
        case 'top-sale':
            include "./view/pages/showAllProducts.php";
            $showProductSale =  $productManagerC->selectProductsBySalesAll();
            break; 
            
        case 'show-all-product':
            $getAllProduct = $productManagerC -> getAllProduct();
            include "./view/pages/showAllProducts.php";
            break;
        default:
            include "./view/pages/home.php";
            break;
    }
}
