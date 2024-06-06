<?php
function productList()
{

    $productAll = getAllProduct();

    require_once './client/views/product/list.php';
}

function productDetail()
{
    $id = $_GET['id'];
    $product = getProductDetail($id);

    $product ? require_once './client/views/product/detail.php' : e404();
}

function productCategory($id) {
    
    $dm = spdm($id);
    require_once './client/views/category/list.php';
}

