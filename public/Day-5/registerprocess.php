<?php 

include("config.php");

$name = $_POST['name'];
$email = $_POST['email'];
$password = MD5($_POST['password']);

$sql = "INSERT INTO students(name, email, password) VALUES('".$name."','".$email."','".$password."')";

if (mysqli_query($conn, $sql)) {
    echo ("<script LANGUAGE='JavaScript'>window.alert('Registration Successful...');window.location.href='thankyou.php';</script>");
}

?>
