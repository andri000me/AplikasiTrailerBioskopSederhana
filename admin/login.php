<?php
include("../koneksi/koneksi.php");
$username = $_POST['username'];
$password = $_POST['password'];

if(empty($username)){
	echo"<script> alert('Username dan Password anda salah !')</script>";
	echo"<meta http-equiv='refresh' content='1 url=admin.php'/>";
}else if(empty($password)){
	echo"<script> alert('Username dan Password anda salah !')</script>";
	echo"<meta http-equiv='refresh' content='1 url=admin.php'/>";
}else{
	session_start();
	$login = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM admin WHERE username='$username' and password='$password'");
	if (mysqli_num_rows($login) > 0 ){
		$_SESSION['username']=$username;
		header("location:homeAdmin.php");
	}else{
		echo"<script> alert('Username dan Password anda salah !')</script>";
		echo"<meta http-equiv='refresh' content='1 url=admin.php'/>";
	}
}
?>