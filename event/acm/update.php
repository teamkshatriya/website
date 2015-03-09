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

if(isset($_POST['name']))
{
    $name = $_POST['name'];
	//$id = "INSERT INTO id (name) VALUES ('{$name}')";
	//mysql_query($id,$con) or die(mysql_error());
	
	$id_fetch = "SELECT event_id FROM id WHERE name='$name'";
	$query_id = mysql_query($id_fetch,$con);
    $result_id = mysql_fetch_array($query_id);	
	$res=$result_id['event_id'];
	$date = $_POST['year'] . '-' . $_POST['month'] . '-' . $_POST['day'];
	$desc = $_POST['desc'];
	$hr = $_POST['hour'];
	$min = $_POST['min'];
	$perm = $_POST['perm'];
	$meri = $_POST['meridian'];
    $v1 = $_POST['v1'];
	$v2 = $_POST['v2'];
	$v3 = $_POST['v3'];
	$v4 = $_POST['v4'];
	$v5 = $_POST['v5'];
	$pc1 = $_POST['pc1'];
	$pc2 = $_POST['pc2'];
	$pc3 = $_POST['pc3'];
	$pc4 = $_POST['pc4'];
	$pc5 = $_POST['pc5'];
	$num = $_POST['num'];
	$feedback = $_POST['feedback'];
	$query = "UPDATE `$name` SET 
	         event_id=$res,name='$name',perm='$perm',
			 description='$desc',hr=$hr,min=$min,
			 date=$date,meridian='$meri',
			 v1='$v1',v2='$v2',v3='$v3',v4='$v4',v5='$v5',
			 pc1='$pc1',pc2='$pc2',pc4='$pc3',pc4='$pc4',pc5='$pc5',
			 num=$num,feedback='$feedback'";
	mysql_query($query,$con) or die(mysql_error());
		
	
	//ANNOUNCEMENTS TABLE....
   
    //---OPTION 1---    
	
	$o1date = $_POST['o1year'] . '-' . $_POST['o1month'] . '-' . $_POST['o1day'];
	
	$o1p1m = $_POST['o1p1m'];
	
	$o1p2m = $_POST['o1p2m'];
	$o1p1e = $_POST['o1p1e'];
	$o1p2e = $_POST['o1p2e'];
	$o1b = $_POST['o1b']; 
	
	
	
        //---OPTION 2---    
	
	$o2date = $_POST['o2year'] . '-' . $_POST['o2month'] . '-' . $_POST['o2day'];
	
	$o2p1m = $_POST['o2p1m'];
	
	$o2p2m = $_POST['o2p2m'];
	$o2p1e = $_POST['o2p1e'];
	$o2p2e = $_POST['o2p2e'];
	$o2b = $_POST['o2b']; 
	
	    //---OPTION 3---    
	
	$o3date = $_POST['o3year'] . '-' . $_POST['o3month'] . '-' . $_POST['o3day'];
	
	$o3p1m = $_POST['o3p1m'];
	
	$o3p2m = $_POST['o3p2m'];
	$o3p1e = $_POST['o3p1e'];
	$o3p2e = $_POST['o3p2e'];
	$o3b = $_POST['o3b']; 
	
	    //---OPTION 4---    
	
	$o4date = $_POST['o4year'] . '-' . $_POST['o4month'] . '-' . $_POST['o4day'];
	
	$o4p1m = $_POST['o4p1m'];
	
	$o4p2m = $_POST['o4p2m'];
	$o4p1e = $_POST['o4p1e'];
	$o4p2e = $_POST['o4p2e'];
	$o4b = $_POST['o4b']; 
	
	
$query_ann = "UPDATE ann SET o1date='$o1date',o1b='$o1b',o1p1m='$o1p1m',o1p2m='$o1p2m',o1p1e='$o1p1e',o1p2e='$o1p2e',
							 o2date='$o2date',o2b='$o2b',o2p1m='$o2p1m',o2p2m='$o2p2m',o2p1e='$o2p1e',o2p2e='$o2p2e',
							 o3date='$o3date',o3b='$o3b',o3p1m='$o3p1m',o3p2m='$o3p2m',o3p1e='$o3p1e',o3p2e='$o3p2e',
							 o4date='$o4date',o4b='$o4b',o4p1m='$o4p1m',o4p2m='$o4p2m',o4p1e='$o4p1e',o4p2e='$o4p2e'
							 WHERE event_id=$res";
    mysql_query($query_ann,$con);    
	
    $query = " UPDATE active SET 
	           event_id='$res',
			   name='$name',
			   perm='$perm',
			   description='$desc',
			   hr='$hr',
			   min='$min',
			   date='$date',
			   meridian='$meri',
			   num=$num,
			   feedback='$feedback'
			   WHERE flag=1 ";
    mysql_query($query,$con) or die(mysql_error());
	
	
}
/*function date2mysql($year, $month, $day) {
  return checkdate($month, $day, $year) ? "$year-$month-$day" :
false;
}*/
//$show = "DESCRIBE `$name`";
	//$val = mysql_query($show) or die(mysql_error()); 
	//echo $val;
	$user_name = $_COOKIE['user_name'];
header("location:options.php?user_name=$user_name");
?>
