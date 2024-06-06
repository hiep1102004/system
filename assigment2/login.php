<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" style="background-color: #F2F2F2; padding: 20px;">
    <p><input type="text" name="txtuser" placeholder="Username" style="margin-bottom: 10px;"></p>
    <p><input type="password" name="txtpass" placeholder="Password" style="margin-bottom: 10px;"></p>
    <input type="submit" value="Đăng nhập" name="btnsend" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; cursor: pointer;">
</form>

    <?php
    if(isset($_POST['btnsend'])){
        $username = $_POST['txtuser'];
        $password = $_POST['txtpass'];
    
       
        if(empty($username) || empty($password)){
            echo "Please enter both username and password.";
        } else {
            setcookie('user', $username, time() + 3600*60 );
            header("location: trangchu.php");
        }
    }
    
    ?>
    
</body>
</html>

