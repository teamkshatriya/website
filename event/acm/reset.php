<?php
function upload_reset()
{
$user_name = $_COOKIE['user_name']; 
require 'db.php';
require 'get_table.php';
if($tname != "")
{

         $query = "SELECT link FROM `$tname` WHERE name='$tname' ";
		 $query_row = mysql_query($query) or die(mysql_error());
		 $ans = '';
		 $reset = 0;
		 while($res = mysql_fetch_assoc($query_row))
		 {
		   $ans = $res['link'];
		 }
		 if($ans)
		 {   
		 	$users = "SELECT uflag FROM users WHERE user_name = '$user_name'";
			$users_row = mysql_query($users) or die(mysql_error());
			while($res = mysql_fetch_assoc($users_row))
			{
			  $uans = $res['uflag'];
			
			  if($uans==1)
			  {
				$reset = 0;
			    mysql_query("UPDATE users SET uflag='0'") or die(mysql_error());
				return $reset;
			  }
			}
		}
		else
		{
		    $users = "SELECT uflag FROM users WHERE user_name='$user_name'";
			$users_row = mysql_query($users) or die(mysql_error());
			while($res = mysql_fetch_assoc($users_row))
			{
			  $uans = $res['uflag'];
				if($uans==1)
				{
				$reset = 1;
				return $reset;
				}
		   }
		}
}
}
?>