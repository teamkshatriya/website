<?php

require 'headers.php';
if(!isset($_COOKIE['user_name']))
{
 header("location:index.php");
}
/*
if(upload_reset())
{
	header("location:logout.php");
}*/

$reset = upload_reset();
$user_name = $_COOKIE['user_name'];
//If the user_name is not set then
//the user cannot get into the management system. 
?>
<html>
<body>
<p>Hello <?php echo "$user_name !!"; ?></p>
<ul>
	<li><a href="view.php">View</a></li>
	<li><a href="edit.php">Edit</a></li>
	<li><a href = "check_mark.php">Check Marks</li>
	<li><a href="logout.php">LogOut</a></li>
</ul>
</body>	
</html>
