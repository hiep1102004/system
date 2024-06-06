<?php 

function contact(){
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $title = $_POST['title'];
        $body = $_POST['body'];
        $date = date('Y-m-d');
        insertContact($name, $email,$phone,$address,$title,$body,$date);

        echo"
            <script>
            setTimeout(function send(){
             
             Swal.fire(
                 'Successful!',
                 'successful!',
                 'success'
             )
         },1000)
            </script>";
    }

    require_once './client/views/contact/contact.php';
}