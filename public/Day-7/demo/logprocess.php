<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = mysqli_query($conn, "SELECT * FROM tablename WHERE email=$email AND password=$password");
$rows = mysqli_fetch_assoc($sql);
$num = mysqli_num_rows($sql);

if ($num == 1) {
    // proced with password is correct
} else {
    // alert to display incorrect credentials
}

?>