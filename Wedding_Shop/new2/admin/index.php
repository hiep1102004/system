<?php
ob_start();
session_start();
require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
require 'vendor/autoload.php';
require_once '../common/connect-db.php';
require_once '../common/helper.php';
require_once '../global.php';
date_default_timezone_set('Asia/Ho_Chi_Minh');
require_file ('./controllers/');
require_file ('./models/');
require_once './views/header.php';
$act = $_GET['act'] ?? null;
match ($act) {
    'logout' => logout(),

    'dssp' => productList(),
    'addsp' => productAdd(),
    'editsp' => productEdit($_GET['id']),
    'ctsp' => productDetail($_GET['id']),
    'xoasp' => productDelete($_GET['id']),
    'upsp' => productUpdate(),
    'export' => productExport(),
    'import' => productImport(),

    'dsdm' => categoryList(),
    'adddm'=> categoryAdd(),
    'xoadm'=> categoryDelete($_GET['id']),
    'editdm'=> categoryDetail($_GET['id']),
    'updm'=> categoryUpdate(),

    'dsbv' =>  baiVietAll(),
    'ctbv' =>  baiVietDetail(),
    'addbv' => addBaiViet(),
    'delbv' => delBaiViet(),
    'editbv' => editBaiViet(),
    'upbv' => upBaiViet(),

    'dslh' => contactAll(),
    'ctlh' => contactDetail($_GET['id']),

    'dsacc'=> accoutList(),
    'ctacc'=> accoutDetail($_GET['id']),

    

    'dsbill'=> listBill(),
    'ctbill'=> detailBill($_GET['id']),
    
    
    //  'ctsp' => productDetail($_GET['id']),
     default => trangChu(),
};
//aaa



require_once './views/footer.php';
require_once '../common/disconnect-db.php';
ob_end_flush();