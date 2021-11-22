<?php

include("connect.php");
$name = $_POST['name'];
$email = $_POST['email'];
$city = $_POST['city'];
$zip = $_POST['zip'];
$password = md5($_POST['password']);

$e = mysqli_query($conn,"select email from login_details where email = '".$email."'");
$u = mysqli_query($conn,"select name from login_details where name = '".$name."'");

if(mysqli_num_rows($e) > 0) {
    echo ("<script LANGUAGE='JavaScript'>window.alert('EmailID already exists...');window.location.href='register.html';</script>");
}
else if(mysqli_num_rows($u) > 0) {
    echo ("<script LANGUAGE='JavaScript'>window.alert('User already exists...');window.location.href='register.html';</script>");
}
else{
    $sql = mysqli_query($conn,"insert into login_details(name, email, city, zip, password) values('".$name."','".$email."','".$city."','".$zip."','".$password."')");
    echo ("<script LANGUAGE='JavaScript'>window.alert('Registered Successfully...');window.location.href='login.html';</script>");
}



?>