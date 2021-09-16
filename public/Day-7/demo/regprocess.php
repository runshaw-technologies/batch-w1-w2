<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO tablename(name, email, password) VALUES($name, $email, $password)";

if(mysqli_query($conn, $sql)) {
    // alert as Data insert success
} else {
    // Data insert error
}

?>