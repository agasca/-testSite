<?php
	$epoch = time(); 
	$dt = new DateTime("@$epoch");  // convert UNIX timestamp to PHP DateTime
	if(!isset($_SESSION['name']) && isset($_COOKIE['testsite'])){ //no session name but have a cookie then set a session name
		$_SESSION['name'] = $_COOKIE['testsite']; //session with name of user 
		echo "Not a session, but re-assigned<br/>";
		//echo $_SESSION['name'];
		//header("Refresh: 2; url=logout.php");
	}
	if(isset($_SESSION['name'])){
		$dir="profiles/".$_SESSION['name']."/images";
		$open = opendir($dir);
		while(($files = readdir($open)) != FALSE){
			//echo $files;
			if($files != "." && $files != ".." && $files != "Thumbs.db"){
				echo "<img border='1px' width='70' height='70' src='$dir/$files'>&nbsp";
			}
		}
		echo "<b>".$_SESSION['name']."'s</b> session<br/> UTC: ".$dt->format('Y-m-d H:i:s')."<br/><a href='logout.php'>Logout</a>";
		//echo "UTC: ".$dt->format('Y-m-d H:i:s')."<br/><a href='logout.php'>Logout</a>";
		include('links.php');
	}else{
		//header("Refresh: 2; url=logout.php");
		sleep(2);
		{
		printf("<script>location.href='logout.php'</script>");
		}
	}
?>