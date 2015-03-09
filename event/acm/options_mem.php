<?php
$user_name=$_COOKIE['user_name'];
require 'headers.php';
if(!isset($_COOKIE['user_name']))
{
 header("location:index.php");
}
/*
if(!upload_reset())
{
	header("location:index.php");
}
*/
//If the user_name is not set then
//the user cannot get into the management system. 
?>
<html>
<body>
<p>Hello <?php echo "$user_name !!"; ?></p>
<ul>
	<li><a href="view.php">View</a></li>
	<li><a href="logout.php">LogOut</a></li>
</ul>
</body>	
</html>
