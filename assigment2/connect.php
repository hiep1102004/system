<?php
$hostname = 'localhost';
$user_data= 'root';
$pass_data = '';
$database = 'as';
$conn = new mysqli($hostname, $user_data, $pass_data, $database);
if($conn){
    echo "Kết nối thành công";
}else{
    echo "Lỗi" . $conn->connect_errno;
}
?>