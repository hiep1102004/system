<?php

function baiVietAll()
{
    $data = getBaiVietAll();
    // viewArray($data);
    require_once("./Views/Post/list.php");
}

function addBaiViet(){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $tittle = $_POST['tittle'];
        $content = $_POST['content'];
        $img = upload();
        $date = date("Y-m-d");

        insertBaiViet($tittle, $content, $date, $img);
    }

    require_once("./Views/Post/add.php");
}

function delBaiViet(){
    $id= $_GET['iddel'];
    deleteBaiViet($id);
    
    $data = getBaiVietAll();
    // viewArray($data);
    require_once("./Views/Post/list.php");
}
function baiVietDetail(){
    $id = $_GET['id'];
    $data = getBaiVietDetail($id);
    // viewArray($data);
    extract($data);
    // viewArray($data);
    require_once("./Views/Post/detail.php");
}
function editBaiViet(){
    $id = $_GET['idedit'];
    $data = getBaiVietDetail($id);
    // viewArray($data);
    extract($data);
    require_once("./Views/Post/update.php");
}

function upBaiViet(){
    if ($_SERVER['REQUEST_METHOD']=== 'POST') {
        $id = $_POST['id'];
        $tittle = $_POST['tittle'];
        $content = $_POST['content'];
        if (!empty($_FILES['image']['name'])) {
            $img = upload();
        }else{
            $img = $_POST['anhcu'];
        }

        updateBaiViet($id,$tittle, $content, $img) ;
       
    }
    $data = getBaiVietAll();
    // viewArray($data);
    require_once("./Views/Post/list.php");
}

