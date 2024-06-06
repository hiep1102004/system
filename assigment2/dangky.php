<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ĐĂNG KÝ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        form {
            max-width: 300px;
            margin: 0 auto;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>ĐĂNG KÝ</h1>

    <?php
    $username = $email = $password = $confirm_password = '';
    $usernameErr = $emailErr = $passwordErr = $confirmPasswordErr = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (empty($_POST['username'])) {
            $usernameErr = 'moi nhap ten';
        } else {
            $username = test_input($_POST['username']);
        }

        if (empty($_POST['email'])) {
            $emailErr = 'email kong de trong';
        } else {
            $email = test_input($_POST['email']);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = 'email phai dung dinh dang';
            }
        }
        if (empty($_POST['password'])) {
            $passwordErr = 'khong duoc de trong password';
        } else {
            $password = test_input($_POST['password']);
        }

        if (empty($_POST['confirm_password'])) {
            $confirmPasswordErr = 'khong de trong';
        } else {
            $confirm_password = test_input($_POST['confirm_password']);
            if ($password !== $confirm_password) {
                $confirmPasswordErr = 'nhap lai phai giong password';
            }
        }

 
        if (empty($usernameErr) && empty($emailErr) && empty($passwordErr) && empty($confirmPasswordErr)) {
 
            header('Location: index.php');
            exit();
        }
    }

    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?php echo $username; ?>">
        <span class="error"><?php echo $usernameErr; ?></span><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>">
        <span class="error"><?php echo $emailErr; ?></span><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" value="<?php echo $password; ?>">
        <span class="error"><?php echo $passwordErr; ?></span><br>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" value="<?php echo $confirm_password; ?>">
        <span class="error"><?php echo $confirmPasswordErr; ?></span><br>

        <input type="submit" value="ĐĂNG KÝ">
    </form>

</body>
</html>
