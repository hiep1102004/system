<?php
// function checkuser(){
//     $sql = "SELECT * FROM taikhoan WHERE user='" .$user."' AND password='" .$password."' ";
//     $sp = pdo_query_one($sql);
//     return $sp;
// }

function checkUser($username,$password){
        try {
    
            $sql = " SELECT id_user,username,address,password,fullname,email,phone_number,image_user,tb_users.role,tb_role.name_role FROM `tb_users` JOIN tb_role ON tb_users.role = tb_role.id_role  WHERE username = '$username' AND password = '$password'";
    
            $stmt = $GLOBALS['conn']->prepare($sql);
          
            $stmt->execute();
    
            return   $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }


function addAccout($username,$password){
    try {
    
        $sql = "INSERT INTO tb_users(username,password) VALUES ('$username','$password')";
        
        $stmt = $GLOBALS['conn']->prepare($sql);
        
        $stmt->execute();
        
        return   $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        echo 'ERROR: ' . $e->getMessage();
        die;
    }
}

