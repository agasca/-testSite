<?php
	session_start();
	if(!isset($_SESSION['name'])){
		echo "Access not allowed.";
		exit;
	}else{
		include("session.php");
		echo "
			<html>
			<head>
				<title></title>
			</head>
			<body>
				<h3>Edici&oacute;n de usurario: ".$_REQUEST['names']."</h3>
				<form ENCTYPE='multipart/form-data' method='POST' action='change.php'>
					<table border='0' width='60%'>
						<tr><td width='15%'>Name: </td><td><input type='text' name='newname' value='".$_REQUEST['names']."'> </td></tr>
						<tr><td width='15%'>Email: </td><td><input type='text' name='newemail' value='".$_REQUEST['emails']."'> </td></tr>
						<tr><td width='20%'>New password: </td><td><input type='password' name='newpassword' value=''> </td></tr>
						<tr><td width='15%'>URL: </td><td><input type='text' name='newurl' value=''> </td></tr>						
						<tr><td width='15%'>Tiny URL: </td><td><input type='text' name='newtinyurl' value=''> </td></tr>
						<tr><td width='15%'>QR: </td><td><input type='text' name='newqr' value=''> </td></tr>
					</table>
					<p>
					Must select a picture:<input type='file' name='newupload'/><p>			
					<input type='submit' name='submit' value='Guardar & actualizar' />
					<input type='hidden' name='id' value='".$_REQUEST['ids']."'>
				</form>
			</body>
			</html>";
		}
?>