<?php
	session_start();
	$expire = time()-86400;
	if(!(isset($_SESSION['name']))){
		session_destroy();
		echo "Session has been destroyed.<br/>Please wait a moment.";			
	}else{
		setcookie('testsite', $_SESSION['name'], $expire);
		session_destroy();
		echo "Session and Cookies are destroyed.<br/>Please wait a moment.";			
		}
	//	header("Refresh: 2; url=home.php");
	sleep(2);
	{
	printf("<script>location.href='home.php'</script>");
	}
?>