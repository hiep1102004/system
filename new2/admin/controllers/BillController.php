<?php
function listBill() {
$listbill=getAllBill();
    require_once './views/bill/list.php';
    
}

function detailBill($id)  {

    $billProDetail= billDetailPro($id);
    $bill=billDetail($id);
    require_once './views/bill/detail.php';
    
}