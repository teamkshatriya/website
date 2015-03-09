<?php
$server="localhost";
$uname="root";
$pwd="";
$db="eveman";
$connect=mysql_connect($server,$uname,$pwd) or die(mysql_error());
mysql_select_db($db,$connect) or die(mysql_error());
$query = " SELECT event_id,name FROM active WHERE flag=1 ";
$handle=mysql_query($query,$connect);
$fetch=mysql_fetch_array($handle);
$id=$fetch['event_id'];
$name=$fetch['name'];
$num=$_POST['num'];
$points=$_POST['points'];
$query="INSERT INTO result 
        (name,event_id,participant_no,points_to_improve)
		VALUES
		('$name','$id','$num','$points') ";
mysql_query($query,$connect);
?>
<?php
mysql_close($connect);
?>