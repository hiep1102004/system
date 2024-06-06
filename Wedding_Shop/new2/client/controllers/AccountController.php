<?php

function login(){
    if (isset($_POST['dangnhap']) && ($_POST['dangnhap'] > 0)){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $checkuser = checkUser($username,$password);
        if (is_array($checkuser)) {
           $_SESSION['username'] = $checkuser;
            if (isset($_SESSION['username'])) {
                extract($_SESSION['username']);
                if ($checkuser['role'] == 2) {
                    header("Location:../../../../admin/index.php");
                    // echo "hello";
                } else{
                    header('Location:../../../../index.php');
                    // echo "hello";
                }
            }else{
                echo "Hello";
            }
       }
   
    }
    require_once './client/views/taikhoan/login.php';
}
function register() {
    if (isset($_POST['register']) && ($_POST['register'] > 0)) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        addAccout($username,$password);

        echo"
            <script>
            setTimeout(function send(){
             
             Swal.fire(
                 'Successful!',
                 'Register successful!',
                 'success'
             )
         },1000)
            </script>";

            require_once './client/views/taikhoan/login.php';
        // $thongbao = 'Successful account register';
    }
}


function myaccount() {
    

    require_once './client/views/taikhoan/myaccount.php';
}
function out() {
    
    session_unset();
header('Location:index.php');
}



// function editAcc() {
    
//     if (isset($_POST['gui']) && ($_POST['gui'] > 0)) {
//         $username = $_POST['username'];
//         $email = $_POST['email'];
//         $address = $_POST['address'];
//         $fullname = $_POST['fullname'];
//         $phone_number = $_POST['phone_number'];
//         $id_user = $_POST['id_user'];
//         update_taikhoan($id, $user, $email, $address, $tel, $fullname);
//         $_SESSION['user'] = checkuser2($user);
//         header('Location:index.php?act=profile');
//         // $thongbao = 'Successful account update';
//     }
//     require_once './client/views/taikhoan/edit.php';
// }