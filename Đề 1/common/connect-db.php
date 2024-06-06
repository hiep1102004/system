<?php 

$host         = 'localhost';
$port         = '3306';
$dbname       = 'mvc';
$username     = 'root';
$password     = '';

try {
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $PDOException) {
    echo "Kết nối thất bại: " . $PDOException->getMessage();
    die;
}
