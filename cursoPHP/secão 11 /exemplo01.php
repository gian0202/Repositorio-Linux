<?php

$conn = new mysqli("localhost", "root", "159753", "cursophp");
if($conn->connect_error){
    echo "Error: " . $con->connect_error;
    exit;
}

$stmt = $conn->prepare("INSERT INTO tb1 (deslogin, dessenha) VALUES (?, ?)");
$stmt->bind_param("ss", $login, $pass);
$login = "user";
$pass = "1234";
$stmt -> execute();
$login = "Gian";
$pass = "159753";
$stmt->execute();
?>