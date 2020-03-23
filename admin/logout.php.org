<?php
include("../koneksi/koneksi.php");
session_start();
session_destroy();
echo"<script>alert('Terima kasih anda berhasil logout !')</script>";
echo"<meta http-equiv='refresh' content='1 url=admin.php'/>";
?>
