<?php
	session_start();
	if(!isset($_SESSION['name'])){
		echo "Access not allowed.";
		exit;
	}else{
		include("session.php");
		mysql_connect("Localhost","thewhole_root","mexico1") or die("Can not connect rigth now. Try it later!!!");
		mysql_select_db("thewhole_testsite");
		$result = mysql_query("select * from users");
		while($row = mysql_fetch_array($result)){
			echo "name: ".$row['name']." Email: ".$row['email']." Tiny Url:".$row['tiny']."<br/>";
		}
		$registered = mysql_affected_rows();
		mysql_close();
		echo "Done! Records readed: ".$registered;
	}
?>