<?php
	include "header.php";
?>

<div class="content">
<?php
include "../koneksi/koneksi.php";
$id_film = $_GET['id_film'];
$query = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM film WHERE id_film ='$id_film'");
if($row=mysqli_fetch_array($query)){
?>
		<h1><?php echo $row['judul'];  ?></h1>
		<div class="ijo" style="height:5px;width:100%;"></div>
		<table width="80%" border="0">
		  <tr>
			<td width="30%" rowspan="8" valign="top"><img src="../image/<?php echo $row['gambar']; ?>" width="94%" style="padding:5px;" /></td>
			<td width="19%" height="21">Sutradara</td>
			<td width="51%"><?php echo $row['sutradara']; ?></td>
		  </tr>
		  <tr>
			<td height="21">Jenis Film</td>
			<td><?php echo $row['jenis_film']; ?></td>
		  </tr>
		  <tr>
			<td height="21">Durasi</td>
			<td><?php echo $row['durasi']; ?></td>
		  </tr>
		  <tr>
			<td height="21" colspan="2">Synopsis</td>
		  </tr>
		  <tr>
			<td height="21"></td>
			<td><?php echo $row['sinopsis']; ?></td>
		  </tr>
		  <tr>
		    <td></td>
			<td>
			</td>
		  </tr>
		  <tr>
		    <td>
<?php
session_start();
if(!empty($_SESSION["id_user"])){
	
$ex=$row['tgl_tayang'];
$ex2=$row['sampai_dengan'];
$tgl=date("Y-m-d");
	if($ex<=$tgl){
		if($ex2>=$tgl){
?>

<?php			
		}else{
?>
			<center>
			<a href="#?id_film=<?php echo $id_film; ?>&tgl_tayang"><button type="submit" >Film Ini Telah Diputar</button></a>
			</center>

<?php
		}
	}else{
	?>
			<center>
			<a href="#?id_film=<?php echo $id_film; ?>&tgl_tayang"><button type="submit" >ComingSoon</button></a>
			</center>

<?php	
	}
}
?>
			</td>
		  </tr>
		</table>  
<?php
}
?>
</div>

<?php
	include "footer.php";
?>