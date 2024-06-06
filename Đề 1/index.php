<?php 

session_start();

require_once './common/connect-db.php';
require_once './common/helper.php';

require_file('./controllers/');
require_file('./models/');

$action = $_GET['act'] ?? null;

match ($action) {
    'dssp' => productList(),
    'ctsp' => productDetail($_GET['id']),
     default => trangChu()
};

require_once './common/disconnect-db.php';