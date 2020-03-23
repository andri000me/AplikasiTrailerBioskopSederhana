<?php
include "../koneksi/koneksi.php";
function anti_injection($data){
  $filter = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter;
}

$username = $_POST['username'];
$pass     = md5($_POST['password']);

$login=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM user WHERE username='$username' AND password='$pass'");
$ketemu=mysqli_num_rows($login);
$r=mysqli_fetch_array($login);

// Apabila username dan password ditemukan
if ($ketemu > 0){
  session_start();
  
  $_SESSION[id_user]  = $r[id_user];
  $_SESSION[namalengkap]  = $r[nama];
  $_SESSION[namauser]     = $r[username];

  echo "<script>alert('Selamat Datang $_SESSION[namalengkap]'); window.location = '../index.php'</script>";
  header('location:../index.php');
}
else{
 echo "<script>alert('Login Gagal, username atau password anda salah'); window.location = 'formlogin.php'</script>";
}
//}
?>
