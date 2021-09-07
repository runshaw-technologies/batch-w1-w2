<?php

include("config.php");

$emailid = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO students(email, password) VALUES('".$emailid."','".$password."')";

if(mysqli_query($conn, $sql)) {
    header("Refresh:0.1; url:thankyou.html");
} else {
    header("Refresh:0.1; url:index.html");
}
$conn -> close();

?>