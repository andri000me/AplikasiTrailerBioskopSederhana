<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="container">
	<div class="header">
		<div id="gambar">
			<img src="image/header.gif" width="600">
		</div>
		<div id="menu">
		<ul>
			<li><a href="index.php">HOME</a></li>
			<li><a href="pg_playnow.php">PLAYING NOW</a></li>
			<li><a href="pg_comingsoon.php">COOMING SOON</a></li>
			<li><a href="info.php">INFO</a></li>
		</ul>
		</div>
		
	</div>
	<div class="content">
		<table width="956" border="0">
    <tr>
      <td width="178">
		<h3 align="center">Selamat Datang Di Web Ini</h3>
      &nbsp; Di Web ini anda dapat melakukan pemesanan tiket tanpa harus mengantri membentuk deretan seperti ular
			saat diriliskan film terbaru.
	  </td>
      <td width="420" valign="top"><h3 align="left"></h3>
			<script src="js/jquery-1.8.0.min.js"></script>
			<script src="js/headline.js"></script>
			<script type="text/javascript"> 
				$(document).ready(function(){
					// untuk permulaan, tampilkan content nomor 1 '#slideAwal'
					bukaContent($('#slideAwal'),'div1');			
				});
			</script>
			<table width="420" height="250" border="0">
				 <tr>
					<td>
				
				<div id="divContent">
				  <div id="div1">
					 <img src="image/1.jpg" align="left" width="420" height="400" /> 
				  </div>
				  <div id="div2">
					 <img src="image/2.jpg" align="left" width="420" height="400"/> 
				  </div>
				  <div id="div3">
					 <img src="image/3.jpg" align="left" width="420" height="400" /> 
				  </div>
				  <div id="div4">
					 <img src="image/4.jpg" align="left" width="420" height="400" /> 
				  </div>
				</div>
				<div id="divTrigger">
				  <a href="javascript:;" onClick="bukaContent(this,'div1')" id="slideAwal">1</a>
				  <a href="javascript:;" onClick="bukaContent(this,'div2')">2</a>
				  <a href="javascript:;" onClick="bukaContent(this,'div3')">3</a>
				  <a href="javascript:;" onClick="bukaContent(this,'div4')">4</a>
				</div>
				</td>
				 </tr>
			</table>
	  </td>
      <td width="344" valign="top">
	  <div class="sidebar">
	<table width="344" height="403" border="0" >
		<tr>
		  <td height="100" valign="center" bgcolor="#999999" align="center"><ul>
		  <form action="search.php"method="POST">
			<input class="cari"type="text"name="search"placeholder="Cari disini..."/>
			<input class="btn_cari"type="submit"name="cari"value="Q"/>
		</form>
		  <p>&nbsp;</br>
		  <?php
		 session_start();
	if (empty($_SESSION['namauser'])){
		echo "<a href='kerangka/formlogin.php'><button type='submit' name='login'>Sign In</button></a>";
		echo "<a href='kerangka/daftar.php'><button type='submit' name='daftar'>Daftar Acount</button></td>
		  </td>";
	}else{
		echo "<form action='logout.php' method='POST'><button type='submit'>LogOut</button></form>";
		$id_user = $_SESSION['namauser'];
		echo"$_SESSION[namalengkap]";
	}
	?> 
		</tr>
		<tr>
		  <td height="300" bgcolor="#999999"><img src="image/promo.jpg" height="295" width="344"></td>
		</tr>
    </table>
		</div>
    </td>
    </tr>
		</table>
	<p>&nbsp;
	<h1 align="center">PLAYING</h1>
	<div align="center">
	<table>
		<tr>
	<?php
		include"now_playing.php";
	?>
	</tr>
	</table>
	</div>
	</div>
	<div class="footer" align="center">
		<font color="#CCCCCC">Copy Defi Dwi W &copy;13_XIIRPL A </font>
	</div>
</div>
</body>
</html>