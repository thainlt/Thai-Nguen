<?php
session_start();
header('location:account.php');
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'asm2');
$name = $_POST['user'];
$pass = $_POST['password'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$repass = $_POST['password'];
$s = " select * from asm2 where name = '$name'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if ($num==1) {
	echo "Username Already Taken";
}elseif($pass!=$repass) {
	echo"Password Not Matched";
}else{
	$reg= " insert into asm2(name, password, email, phonenumber) values ('$name','$pass','$email','$phonenumber')";
	mysqli_query($con, $reg);
	echo" Register Confirm";	
}
?>