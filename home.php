<?php
if(isset($_COOKIE['testsite'])){
	header('Location: enter.php');
}else{
	echo "
	<html>
		<head>
			<title>Formulario Aviso Privacidad</title>
			    <style type='text/css'>
					body {color: #666666;}
			    </style>			
		</head>
		<body>
			
			<center>
				<form method='post' action='login.php' />
					<table border='0' width='30%' />
						<tr><td >Usuario</td><td ><input type='text' name='name' maxlength='30'/></td></tr>
						<tr><td >Password</td><td ><input type='password' name='password' maxlength='8'/></td></tr>
						<tr><td >Recordar acceso?</td><td ><input type='checkbox' name='remember' />Cookies ser&aacute;n utilizadas</td></tr>
					</table>
					<p><input type='submit' name='submit' value='log in' /><p>
				</form>
				<br/>
				<h1><center>Aviso de Privacidad</center></h1>
				<a href='form.php'>Crear AVISO?</a>
				<p align=\"center\" style=\"width:40%;\">AVISO DE PRIVACIDAD. De conformidad con la Ley Federal de Protecci�n de Datos Personales en posesi�n de los
				 particulares el tratamiento de sus datos personales ser�n de uso exclusivamente personal y sin fines de divulgaci�n o utilizaci�n comercial.</p>
				<br/>
				<table height='200px' width='1016' border='0'>
				  <tr>
					<td width='276'><div align='center'>Llene el formulario, confirme el Captcha </div></td>
					<td width='356'><div align='center'>Realice el pago del proceso $49 MXN </div></td>
					<td width='370'><div align='center'>Copie y pegue la URL en sus correos y p&aacute;gina WEB </div></td>
				  </tr>
			</center>
		</body>
	</html>";
}
?>
