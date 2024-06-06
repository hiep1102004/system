<?php
require 'connect.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="Delete from product where Product_id= $id";
    if($conn->query($sql)){
        header("location: quanlysp.php");
    }else{

    }

}else{
    header("location: quanlysp.php");
}
?>