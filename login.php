<?php
session_start();
if($_POST){
	mysql_connect("Localhost","thewhole_root","mexico1") or die("Can not connect rigth now. Try it later!!!");
	mysql_select_db("thewhole_testsite");
	$_SESSION['name'] = mysql_real_escape_string($_POST['name']);
	$_SESSION['password'] = mysql_real_escape_string(md5($_POST['password']));
	//$name = $_POST['name'];
	//$password = md5($_POST['password']);
	//if($name && $password){
	if($_SESSION['name'] && $_SESSION['password']){
		//$query = mysql_query("select * from users where name = '$name'");
		$query = mysql_query("select * from users where name = '".$_SESSION['name']."'");
		$numrows = mysql_num_rows($query);
		if($numrows!=0){
			while($row = mysql_fetch_assoc($query)){
				$dbname = $row['name'];
				$dbpassword = $row['password'];
			}
			//if($name==$dbname){
			if($_SESSION['name']==$dbname){
				//if($password==$dbpassword){
				if($_SESSION['password']==$dbpassword){
					//echo "Welcome.";
					//header("location: users.php");	//session
					if(($_POST['remember']) == 'on'){
						$expire = time() + 86400;	//24 hrs
						setcookie('testsite', $_POST['name'], $expire);	//create cookie with the user name
					}
					//header("location: enter.php");	
					sleep(2);
					{
					printf("<script>location.href='enter.php'</script>");
					}
				}else{
					echo "Confirm password again.";
				}
			}else{
				echo "Confirm name again";
			}
		}else{
			echo "Not registered.";
		}
		mysql_close();
	}else{
		echo "Please type:<br/>Name and Password.";
	}
}else{
	echo "Access not allowed.";
	exit;
}
?>