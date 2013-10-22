<?php
	session_start();
	if(!isset($_SESSION['name'])){
		echo "Access not allowed.";
		exit;
	}else{
		include("session.php");
		echo "<h3>Choose an Id to edit:</h3><p>";
		mysql_connect("Localhost","thewhole_root","mexico1") or die("Can not connect rigth now. Try it later!!!");
		mysql_select_db("thewhole_testsite");
		//pagination
		$per_page = 6;	
		$pages_query = mysql_query("select count('id') from users");
		$pages = ceil(mysql_result($pages_query, 0) / $per_page);
		$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
		$start = ($page - 1) * $per_page;
		$query = mysql_query("select * from users  LIMIT $start, $per_page");
		//pagination
		//$result = mysql_query("select * from users");	CHG00
		echo "<table width=\"90%\" align=center border=2>";
		echo "<tr>
		<td width=\"40%\" align=center bgcolor=\"#69B4ED\">ID</td>
		<td width=\"40%\" align=center bgcolor=\"#69B4ED\">NAME</td>
		<td width=\"40%\" align=center bgcolor=\"#69B4ED\">EMAIL</td>
		<td width=\"40%\" align=center bgcolor=\"#69B4ED\">URL</td>
		<td width=\"40%\" align=center bgcolor=\"#69B4ED\">Tiny URL</td>
		<td width=\"40%\" align=center bgcolor=\"#69B4ED\">QR</td>
		</tr>";
		//while($row=mysql_fetch_array($result)){	//CHG00
		while($row=mysql_fetch_assoc($query)){	//pagination
			$id=$row['id'];
			$name=$row['name'];
			$email=$row['email'];
			$password=$row['password'];
			$url=$row['url'];
			$tinyurl=$row['tiny'];
			$qr=$row['qr'];
			echo 
			"<tr><td align=center><a href=\"edit.php?ids=$id&names=$name&emails=$email&passwords=$password\">$id</a></td><td>$name</td><td>$email</td><td>$url</td><td>$tinyurl</td><td>$qr</td></tr>";
		}
		echo "</table>";
		//pagination
		$prev = $page - 1;
		$next = $page + 1;
		echo "<center>";
		if(!($page<=1)){
			echo "<a href='update.php?page=$prev'>Prev</a> ";	
		}
		if($pages>=1){
			for($x=1;$x<=$pages;$x++){
				//echo '<a href="?page='.$x.'">'.$x.'</a> ';
				echo ($x == $page) ? '<b><a href="?page='.$x.'">'.$x.'</a></b> ' : '<a href="?page='.$x.'">'.$x.'</a> ';
			}
		}
		if(!($page>=$pages)){
			echo "<a href='update.php?page=$next'>Next</a> ";
		}	
		echo "</center>";
		//pagination
		mysql_close();
	}
?>