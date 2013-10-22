<?php 
	session_start(); 
	include("session.php");
?>
<html>
<head>
	<title>Search</title>
</head>
<body>
	<center>
		<form method="GET" action="search.php">
			<input type="text" name="search">
			<input type="submit" name="submit" value="Search database">
		</form>
	</center>
	<hr>
	<u>Results:</u>
</body>
</html>
<?php
	if(!isset($_SESSION['name'])){
		echo "Access denied.";
		exit;
	}else{
		if(isset($_REQUEST['submit'])){	//the buttom was click
			mysql_connect("Localhost","thewhole_root","mexico1") or die("Can not connect rigth now. Try it later!!!");
			mysql_select_db("thewhole_testsite");			
			$search = mysql_real_escape_string($_GET['search']);	
			$terms = explode(" ", $search);	//makes an Array with words delimited
			$query = "select * from users where ";
			$i = 0;
			foreach ($terms as $each) {
				$i++;
				if($i==1){

					$query .= "name like '%$each%' ";
				}else{
					$query .= "or name like '%$each%' ";
				}
			}
			$query = mysql_query($query);
			$num = mysql_num_rows($query);
			if($num>0 && $search !=""){
				echo "$num record(s) found for <b>$search</b>!";
				while($row = mysql_fetch_assoc($query)){
					$id = $row['id'];
					$name = $row['name'];
					$email = $row['email'];
					$password = $row['password'];
					echo "<h3>Name: $name (id: $id)</h3>Email: $email<hr width='3%' align='left'><br/>";
				}
				mysql_close();
			}else{
				echo "No results found";
			}	
		}else{
			echo "Please type any word";
		}
	}
?>