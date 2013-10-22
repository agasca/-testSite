<html>
<head>
	<title>Welcome</title>
</head>
<body>
	<h1><center>Register Form</center></h1>
	<hr>
	<form ENCTYPE="multipart/form-data" method="post" action="insertAG.php" />
		<table border="0" width="30%" />
			<tr><td >Name</td><td ><input type="text" name="name" maxlength="30"/></td></tr>
			<tr><td >Email</td><td ><input type="text" name="email" maxlength="30"/></td></tr>
			<tr><td >Password</td><td ><input type="password" name="password" maxlength="8"/></td></tr>
			<tr><td >Confirm Password</td><td ><input type="password" name="cpassword" maxlength="8"/></td></tr>
		<input type="hidden" name="MAX_FILE_SIZE" value="100000">
		</table>
		<br/>
		Must choose your picture:<input type="file" name="upload"><p>
		<input type="submit" name="submit" value="Register" />
	</form>
</body>
</html>