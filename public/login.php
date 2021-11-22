<?php

include("connect.php");

$email = $_POST['email'];
$password = md5($_POST['password']);

$sql = mysqli_query($conn, "select * from login_details where email = '".$email."'");
$rows=mysqli_fetch_assoc($sql);
$num=mysqli_num_rows($sql);

if($num == 1) {
    echo ("<script LANGUAGE='JavaScript'>window.alert('Login Successful...');window.location.href='dashboard.php';</script>");
}else{
    echo ("<script LANGUAGE='JavaScript'>window.alert('Login Failed...');window.location.href='login.html';</script>");
}


?>