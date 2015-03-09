<?php
require 'headers.php';
if(!isset($_COOKIE['user_name']))
{
 header("location:index.php");
}
/*
if(!upload_reset())
{
	header("location:logout.php");
}
*/



if(isset($_POST['name']))
{
    $name = $_POST['name'];
	$id = "INSERT INTO id (name) VALUES ('{$name}')";
	mysql_query($id,$con) or die(mysql_error());
	
	$id_fetch = "SELECT event_id FROM id WHERE name='$name'";
	$query_id = mysql_query($id_fetch);
    $result_id = mysql_fetch_array($query_id);	
	$res=$result_id['event_id'];
	
	$sql = "CREATE TABLE `$name` (
	                              event_id INT(10) NOT NULL AUTO_INCREMENT, 
								  PRIMARY KEY(event_id),
								 `name` VARCHAR(30) NOT NULL,
								 `description` VARCHAR(300) NOT NULL,
								 `perm` VARCHAR(30) NOT NULL,
								  `date` DATE NOT NULL,
								  hr INT(2) NOT NULL,
								  min INT(2) NOT NULL,
								 `meridian` VARCHAR(2) NOT NULL,
								 `attendance` VARCHAR(40),
								  enum INT(3),
								  num INT(3),
								 `feedback` VARCHAR(300),
								  doc_file longblob NOT NULL,
								  eflag INT NOT NULL DEFAULT '1',
								  `link` VARCHAR(80) NOT NULL,
								  `not_done` VARCHAR(40) ,
								  `v1` VARCHAR(40),
								  `v2` VARCHAR(40),
								  `v3` VARCHAR(40),
								  `v4` VARCHAR(40),
								  `v5` VARCHAR(40),
								  `pc1` VARCHAR(40),
								  `pc2` VARCHAR(40),
								  `pc3` VARCHAR(40),
								  `pc4` VARCHAR(40),
								  `pc5` VARCHAR(40))";
	mysql_query($sql,$con) or die(mysql_error()); 
	
	if(isset($_POST['basics']{
		$date = $_POST['year'] . '-' . $_POST['month'] . '-' . $_POST['day'];
		$desc = $_POST['desc'];
		$hr = $_POST['hour'];
		$min = $_POST['min'];
	$perm = $_POST['perm'];
	$meri = $_POST['meridian'];
	}
	
	$enum = $_POST['enum'];
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
	$num = 0;
	$feedback = "";
	$link = 0;
	$query = "INSERT INTO `$name` 
	         (event_id,name,perm,description,hr,min,date,meridian,enum,v1,v2,v3,v4,v5,pc1,pc2,pc3,pc4,pc5) 
			 VALUES 
			 ('{$res}','{$name}','{$perm}','{$desc}',{$hr},{$min},'{$date}','{$meri}','{$enum}','$v1','$v2','$v3','$v4','$v5',
			  '$pc1','$pc2','$pc3','$pc4','$pc5')";
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
	
	
	$query_ann = "INSERT INTO ann (event_id,o1date,o1b,o1p1m,o1p2m,o1p1e,o1p2e,
	                                        o2date,o2b,o2p1m,o2p2m,o2p1e,o2p2e,
											o3date,o3b,o3p1m,o3p2m,o3p1e,o3p2e,
											o4date,o4b,o4p1m,o4p2m,o4p1e,o4p2e) 
	              VALUES
                  ('$res','$o1date','$o1b','$o1p1m','$o1p2m','$o1p1e','$o1p2e'
				         ,'$o2date','$o2b','$o2p1m','$o2p2m','$o2p1e','$o2p2e'
						 ,'$o3date','$o3b','$o3p1m','$o3p2m','$o3p1e','$o3p2e'
						 ,'$o4date','$o4b','$o4p1m','$o4p2m','$o4p1e','$o4p2e'
						 )";
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
			   v1='$v1',
			   v2='$v2',
			   v3='$v3',
			   v4='$v4',
			   v5='$v5',
			   pc1='$pc1',
			   pc2='$pc2',
			   pc3='$pc3',
			   pc4='$pc4',
			   pc5='$pc5',
			   num=$num,
			   feedback='$feedback'
			   WHERE flag=1 ";
    mysql_query($query,$con) or die(mysql_error());
	
	
}

$user_name = $_COOKIE['user_name'];
mysql_query("UPDATE users SET ftime=0");
$user_name = $_COOKIE['user_name'];
header("location:options.php?user_name=$user_name");
exit;
/*function date2mysql($year, $month, $day) {
  return checkdate($month, $day, $year) ? "$year-$month-$day" :
false;
}*/
//$show = "DESCRIBE `$name`";
	//$val = mysql_query($show) or die(mysql_error()); 
	//echo $val;
?>