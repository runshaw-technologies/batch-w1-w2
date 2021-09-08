<?php 

include("config.php");

$email = $_POST['email'];
$password = MD5($_POST['password']);

$sql = mysqli_query($conn, "SELECT * FROM students WHERE email = '".$email."' ");
$rows = mysqli_fetch_assoc($sql);
$num = mysqli_num_rows($sql);

if ($num == 1) {
    echo ("<script LANGUAGE='JavaScript'>window.alert('Login Successful...');window.location.href='dashboard.php';</script>");
} else {
    echo ("<script LANGUAGE='JavaScript'>window.alert('Username and Password is invalid...');window.location.href='index.php';</script>");
}

?>