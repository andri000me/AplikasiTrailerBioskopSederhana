<?php
$localhost = "localhost";
$host = "root";
$pass = "";
$db = "bioskop";
$konek = ($GLOBALS["___mysqli_ston"] = mysqli_connect($localhost, $host, $pass)) or die ("Koneksi Error");
mysqli_select_db($GLOBALS["___mysqli_ston"], $db);
?>