<?php
	session_start();
	if(!isset($_POST['submit'])){
		echo "Access not allowed.";
		exit;
	}else{
		$mypic = $_FILES['upload']['name'];
		$temp = $_FILES['upload']['tmp_name'];
		$type = $_FILES['upload']['type'];
		mysql_connect("Localhost","thewhole_root","mexico1") or die("Can not connect rigth now. Try it later!!!");
		mysql_select_db("thewhole_testsite");
		$name = mysql_real_escape_string($_POST['name']);
		$email = mysql_real_escape_string($_POST['email']);
		$password = mysql_real_escape_string($_POST['password']);
		$cpassword = mysql_real_escape_string($_POST['cpassword']);
		if($name && $email && $password && $cpassword){
			if(preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)){
				if(strlen($password)>3){
					if ($password == $cpassword){			
						mysql_connect("Localhost","thewhole_root","mexico1") or die("Can not connect rigth now. Try it later!!!");
						mysql_select_db("thewhole_testsite");
						$username = mysql_query("select name from users where name = '$name'");	//confirm exist only one
						$count = mysql_num_rows($username); //confirm exist only one
						$remail = mysql_query("select email from users where email = '$email'");
						$checkemail = mysql_num_rows($remail);
						if($checkemail!=0){
							echo "This email is already registered";
						}else{
							if($count!=0){	//confirm exist only one
								//include("links.php"); //confirm exist only one
								//die("ERROR: Duplicates are not allowed!"); //confirm exist only one
								echo "Username already Exists!";
							}else{
								if(($type=="image/jpeg") || ($type=="image/jpg") || ($type=="image/bmp")){
									$directory =  "./profiles/$name/images/";
									mkdir($directory, 0777, true);
									//move_uploaded_file($temp, "images/$mypic");
									move_uploaded_file($temp, "profiles/$name/images/$mypic");
									//echo ":) Profile picture<p><img border='1' width='50' height='50' src='images/$mypic'/><p>";
									echo "Profile picture :)<p><img border='1' width='50' height='50' src='profiles/$name/images/$mypic'/><p>";
									$passwordmd5 = md5($password);
									mysql_query("insert into users (name,email,password) values ('$name','$email','$passwordmd5')");
									$registered = mysql_affected_rows();
									
									echo "Done, you are registered!<br/>Affected rows: ".$registered."<br/><a href='logout.php'>Login now</a>";
								}else{
									echo "This file is not allowed";
								}
							}
						}
					}else{
						echo "Password do not match.";
					}
				}else{
					echo "Password length between 4 and 8 characters.";
				}
			}else{
				echo "Please, type a valid Email";
			}
		}else{
			echo "Go back and please fill the blanks.";
		}
		mysql_close();
	}
?>