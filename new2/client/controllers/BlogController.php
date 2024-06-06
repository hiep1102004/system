<?php
function allBlog() {
    $data = getBaiVietAll();
    require_once './client/views/blog/list.php';
}

function baiVietDetail(){
    $id = $_GET['id'];
    $data = getBaiVietDetail($id);
    // viewArray($data);
    extract($data);
    // viewArray($data);
    require_once './client/views/blog/detail.php';
}

function aboutUs(){
    require_once './client/views/about/detail.php';
}