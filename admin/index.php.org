<html>
<head>
<title>LOGIN Admin</title>
<style type="text/css"/>
<!--
.button{
width:100px;
height:50px;
border:0px solid blue;
border-radius:6px;
background:#CFF939;
font-size:20px;
font-family:Times New Roman;
}
.button:hover{
background:#F0CC67;
box-shadow:1px 1px 20px 1px #888888;
}
.font{
	color:#F0CC67;	
}
.textbox{
	width:200px;
	height:40px;
	font-family:Roboto;
	font-size:19px;
	text-decoration:none;
	border-radius:3px;
	border:0px;	
}
.textbox:hover{
	width:200px;
	height:40px;
	box-shadow:1px 1px 20px 1px #888888;
}
.table{
background:rgba(32, 30, 30, 0.67) none repeat scroll 0% 0%;
width:45%;
height:auto;
margin:100px;
padding:20px;
float:center;
border-radius:10px;
box-shadow:1px 1px 20px 1px #888888;
}
@media (min-width: 768px) and (max-width: 991px){	
	.container {
		width: 100%;
	}
	.button {
		width:50px;
		height:25px;
		border:0px solid blue;
		border-radius:6px;
		background:#CFF939;
		font-size:10px;
		font-family:Times New Roman;
		Color:#fffffff;
		

	}
	.textbox{
	width:90px;
	height:15px;
	font-family:Roboto;
	font-size:8px;
	text-decoration:none;
	border-radius:3px;
	border:0px;	
}
.textbox:hover{
	width:91px;
	height:15px;
	box-shadow:1px 1px 20px 1px #888888;
}
	.right {
		clear: both;
		padding: 1% 4%;
		width: auto;
		float: none;
	}	
}
-->
</style>
</head>
<body bgcolor="#dcdcdc"  align="center" no-repeat x />
<div class="fixed-bg">
<div align="center" class="containlogin">

	<div class="table" align="center">
		<div>
		<h1 class="font">LOGIN ADMIN</h1>
		</div>

	<form action="login.php" method="POST">
		<table>
			</br>
		</br>
			<tr>
				<td><h3 class="font">Username :</h3></td>
				<td><input type="text" name="username" class="textbox" placeholder="  username   " required/></td></br>
			</tr>
			<tr>
			<td></td>
			</tr>
			<tr>
				<td><h3 class="font">Password :</h3></td>
				<td><input type="password"  class="textbox" name="password" placeholder="  password  " required/></td>
			</tr>
		</table>
		</br>
				<input type="submit" value="Masuk" class="button"/>
		</br>
		</br>
			</br>
		</br>
			</br>
		</br>
	</form>


	
	</div>
</div>
</div>

</body>

</html>