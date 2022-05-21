<?php

$conn = new mysqli("localhost", "root", "159753", "cursophp");
if($conn->connect_error){
    echo "Error: " . $con->connect_error;
    exit;
}
$result = $conn->query("SELECT * FROM tb1 ORDER BY deslogin");
while ($row = $result->fetch_array()){
    var_dump($row);
}
?>