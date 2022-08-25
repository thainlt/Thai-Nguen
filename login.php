<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'asm2');
$name = $_POST['user'];
$pass = $_POST['password'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$repass = $_POST['repassword']; 
$s = " select * from asm2 where name = '$name' && password = '$pass'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if ($num==1) {
    $_SESSION['user'] = $name;
    $_SESSION['phonenumber'] = $phonenumber;
    header('location:landingpageafterlogin.php');
}else{
    header('location:account.php');
}
?>