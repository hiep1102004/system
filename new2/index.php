<?php

ob_start();
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
require_once './common/connect-db.php';
require_once './common/helper.php';

require_file ('./client/controllers/');
require_file ('./client/models/');

if (!isset($_SESSION['mycart'])) {
    $_SESSION['mycart'] = [];
}

require_once './client/views/header.php';
$act = $_GET['act'] ?? null;

match ($act) {

    'taikhoan' => login(),

    'register' => register(),

    'blog' => allBlog(),
    'ctbv' =>  baiVietDetail(),

    'abus' =>  aboutUs(),
    'contact' => contact(),
    'cart' => cart(),
    'delCart' => delCart(),
    'addCart' => addCart(),
    'upCart' => upCart(),


    'dssp'=> productList(),

    'ctsp' =>   productDetail(),

    'checkout' =>  checkout(),
    'bill' => bill(),
    'myaccount' => myaccount(),


    'logout' => out(),

    'editacc' => editAcc(),
    

    'dm'=> productCategory($_GET['id']),

    
 


    

    // 'ddd' =>  categoryTop3(),
    

    
     default => trangChu(),
};




require_once './client/views/footer.php';
require_once './common/disconnect-db.php';
ob_end_flush();