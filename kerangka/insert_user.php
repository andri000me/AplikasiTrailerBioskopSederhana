<?php
include "../koneksi/koneksi.php";
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$usia = $_POST['usia'];
$no_hp = $_POST['no_hp'];

$query = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM user WHERE username='$username'");
			if($row=mysqli_fetch_array($query)){
				echo"<script>alert('Maaf username sudah dipakai!!')</script>";
				echo"<script>document.location='daftar.php'</script>";
			}
			else{
				mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO user VALUES ('$nama','$username','$password','$email','$jenis_kelamin','$usia','$no_hp') ");
					echo"<script>alert('Berhasil mendaftar!!')</script>";
					echo"<script>document.location='../index.php'</script>";
				}
	
?>