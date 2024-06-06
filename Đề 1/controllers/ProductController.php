<?php 

function productList() {

    $data['productAll'] = getAllProduct();

    showViewClient('./views/product/list.php', $data);
}

function productDetail($id) {

    $data['product'] = $product = getProductByID($id);
    
    $product ? showViewClient('./views/product/detail.php', $data) : e404();
}