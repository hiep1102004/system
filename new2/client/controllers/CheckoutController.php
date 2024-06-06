<?php
function checkout(){
    require_once './client/views/chekcout/checkout.php';
}


function bill(){
    // debug($_POST);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $phone_number = $_POST['phone_number'];
        $email = $_POST['email_address'];
        $date = date('Y-m-d');
        if (!empty($_SESSION['username']['id_user'])) {
            $id_user = $_SESSION['username']['id_user'];
        }else{
            $id_user = null;
        }
        $idbill = insertBill($name, $address, $phone_number, $email,$date,$id_user);

        foreach ($_SESSION['mycart'] as $product) {
            $idpro = $product['id'];
            $img = $product['anh_sp'];
            $name = $product['ten_sp'];
            $price = $product['gia_sp'];
            $soluong = $product['so_luong'];
            $total = $soluong * $price;
            insertBillDetail($idpro,$img,$name,$price,$total,$soluong,$idbill);
        }
        unset($_SESSION['mycart']);
    }

    require_once './client/views/chekcout/bill.php';
}