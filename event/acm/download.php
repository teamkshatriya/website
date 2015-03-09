<?php 
require 'headers.php';
if(!isset($_COOKIE['user_name']))
{
 header("location:index.php");
}
if(!upload_reset())
{
	header("location:index.php");
}
?>
<html>
<body>
<?php
$query = "SELECT link FROM $tname WHERE eflag=1";
							$query_row = mysql_query("$query") or die(mysql_error());
							while($res = mysql_fetch_assoc($query_row)){
								$ans = $res['link'];
							}
?>
<a href="upload/<?php echo $ans;?>">download</a>
</body>
</html>