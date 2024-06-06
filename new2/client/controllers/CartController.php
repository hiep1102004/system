<?php
function cart()
{   
    // viewArray($_SESSION['mycart']);
    require_once './client/views/cart/cart.php';
}

function addCart(){
    // viewArray($_POST);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $ten_sp = $_POST['name'];
        $gia_sp = $_POST['price'];
        $anh_sp = $_POST['image'];
        if (isset($_POST['so_luong']) && ($_POST['so_luong'])) {
            $sl = $_POST['so_luong'];
        } else {
            $sl = 1;
        }
        $index  = array_search($id, array_column($_SESSION['mycart'], 'id'));
        if ($index !== false) {
            $_SESSION['mycart'][$index]['so_luong'] += $sl;
        } else {
            $spadd = [
                'id' => $id,
                'anh_sp' => $anh_sp,
                'ten_sp' => $ten_sp,
                'gia_sp' => $gia_sp,
                'so_luong' => $sl
                ];
            array_push($_SESSION['mycart'], $spadd);
        }
    }

    require_once './client/views/cart/cart.php';
}

function delCart(){
    if (isset($_GET['idcart'])) {
        $id = $_GET['idcart'];
        $index  = array_search($id, array_column($_SESSION['mycart'], 'id'));
        unset($_SESSION['mycart'][$index]);
    } else {
        $_SESSION['mycart'] = [];
    }
    //  var_dump($_SESSION['mycart']);
    echo '<script> location.replace("index.php?act=cart"); </script>';
    require_once './client/views/cart/cart.php';
}

function upCart(){
    

    require_once './client/views/cart/cart.php';
}

