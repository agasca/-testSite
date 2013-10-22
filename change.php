<?php
session_start();
if (isset($_POST['submit'])) {
    $mypic = $_FILES['newupload']['name'];
    $temp = $_FILES['newupload']['tmp_name'];
    $type = $_FILES['newupload']['type'];
    mysql_connect("Localhost","thewhole_root","mexico1") or die("Can not connect rigth now. Try it later!!!");
    mysql_select_db("thewhole_testsite");
    $id = $_REQUEST['id'];
    $newname = mysql_real_escape_string($_REQUEST['newname']);
    $newemail = mysql_real_escape_string($_REQUEST['newemail']);
    $newpassword = mysql_real_escape_string($_REQUEST['newpassword']);
	$newurl = mysql_real_escape_string($_REQUEST['newurl']);
	$newtinyurl = mysql_real_escape_string($_REQUEST['newtinyurl']);
	$newqr = mysql_real_escape_string($_REQUEST['newqr']);

    if ($newname && $newemail && $newpassword) {
        if (preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $newemail)) {
            if (strlen($newpassword) > 3) {
                if($_SESSION['name']=='agasca'){
                    mysql_query("UPDATE users SET name='$newname', email='$newemail' WHERE id='$id'");
                    $md5 = md5($newpassword);
                    mysql_query("UPDATE users SET password='$md5' WHERE id='$id'");
                }else{
                    mysql_query("UPDATE users SET url='$newurl', tiny='$newtinyurl', qr='$newqr' WHERE id='$id'");
				}
                if (($type == "image/jpeg") || ($type == "image/jpg") || ($type == "image/bmp")) {
                    /*
					$dir = "profiles/" . $_SESSION['name'] . "/images";
                    $files = 0;
                    $handle = opendir($dir);
                    while (($file = readdir($handle)) != FALSE) {
                        if ($file != "." && $file != ".." && $file != "Thumbs.db") {
                            unlink($dir . "/" . $file);
                            $files++;
                        } 
                    } 
                    closedir($handle);
                    sleep(1);
                    rename("profiles/" . $_SESSION['name'] . "", "profiles/$newname");
					*/
                    move_uploaded_file($temp, "profiles/$newname/images/$mypic");
                    echo "You values have been updated succesfully.";
					//header("Refresh: 1; url=logout.php");
					sleep(3);
					{
					printf("<script>location.href='update.php'</script>");
					}					
                } 
                else {
                    echo "The picture has to be a jpeg, jpg o bmp file";
                }
            } 
            else {
                echo "The password needs to be larger than 3 characters!";
            }
        } 
        else {
            echo "Please type a valid email!";
        }
    } 
    else {
        echo "Please complete the form!";
    }
}
echo "<br/>Access not allowed.";
//header("Refresh: 1; url=logout.php");
sleep(2);
{
printf("<script>location.href='logout.php'</script>");
} 
?>