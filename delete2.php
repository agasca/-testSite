<?php
	session_start();
	if(!isset($_SESSION['name'])){
		echo "Access not allowed.";
		exit;
	}else{
		include("session.php");
		mysql_connect("Localhost","thewhole_root","mexico1") or die("Can not connect rigth now. Try it later!!!");
		mysql_select_db("thewhole_testsite");
		$result = mysql_query("delete from users where id='".$_REQUEST['id']."'");
		echo "The user has been deleted";
		mysql_close();
	}
?>