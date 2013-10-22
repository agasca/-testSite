<?php
	session_start();
	if(!isset($_SESSION['name'])){
		echo "Access not allowed.";
		exit;
	}else{
		include("session.php");
		mysql_connect("Localhost","thewhole_root","mexico1") or die("Can not connect rigth now. Try it later!!!");
		mysql_select_db("thewhole_testsite");
		$result = mysql_query("select * from users where id='".$_REQUEST['ids']."'");
		echo "<table width=\"90%\" align=center border=2>";
		echo "<tr>
		<td width=\"40%\" align=center bgcolor=\"#69B4ED\">ID</td>
		<td width=\"40%\" align=center bgcolor=\"#69B4ED\">NAME</td>
		<td width=\"40%\" align=center bgcolor=\"#69B4ED\">EMAIL</td>
		<td width=\"40%\" align=center bgcolor=\"#69B4ED\">PASSWORD</td>
		</tr>";
		while($row=mysql_fetch_array($result)){
			$id=$row['id'];
			$name=$row['name'];
			$email=$row['email'];
			$password=$row['password'];
			echo 
			"<tr><td align=center>$id</a></td><td>$name</td><td>$email</td><td>$password</td></tr>";
		}
		echo "</table>";
		mysql_close();
	}
?>
<form method="POST" action="delete2.php">
	<p>Are you sure to delete this record?
	<input type="submit" name="submit" value="OK">
	<input type="hidden" name="id" value="<?php echo $_REQUEST['ids'];?>">
	</p>
</form>