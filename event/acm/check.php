<?php

require('db.php');
require('get_table.php');
echo "user";
if(isset($_POST['user_name']) && $_POST['password'])
{
echo "user";
 $user_name = mysql_real_escape_string($_POST['user_name']);
 $password = mysql_real_escape_string($_POST['password']);
 $flag = 0;
 $query = "SELECT user_name,password FROM users WHERE checks=1 ";
 $ans = mysql_query($query) or die(mysql_error());
  
 while($result = mysql_fetch_assoc( $ans ))
 {
  //echo $result['user_name'];
  if($result['user_name']==$user_name && $result['password']==$password)
  {
		$flag = 1;
  }
 }
 
 //FLAG CHECKS FOR VALID USERNAME AND PASS
 if($flag == 1)
    {
	    //unset($_SESSION['username']);
	    //$_SESSION['loggedon'] = date("M d Y H:i:s");
		//Successful Authentication of the user ....
		$expire=time()+30*60;
        setcookie("user_name", $_POST['user_name'], $expire);
		setcookie("desig", $_POST['desig'], $expire);
		$query = "SELECT uflag FROM users WHERE user_name='$user_name' AND password='$password' ";//uflag = 1=>Approved by admin..
		$query_row = mysql_query($query) or die(mysql_error());
		$ans = -1;
		while($res = mysql_fetch_assoc($query_row))
		{
		  $ans = $res['uflag'];
		}
//ANS CHECKS IF USER HAS BEEN VALIDATED FOR AUTHOR ACCESS .
        if($ans==1)
		{
		$user = "SELECT ftime FROM users WHERE user_name='$user_name'" ;//ftime = 1=>First time user
		$user_rows = mysql_query($user);
		$fans = -1;
		while($res1 = mysql_fetch_assoc($user_rows))
		{
			$fans = $res1['ftime']; 
		}
		if($_POST['desig']=="author")
		{
			if($fans == 1)
			{//If the user logins for the first time ..
				header("location:event.php");
				exit;
			}
			else
			{
				header("location:options.php?user_name=$user_name");
			}
		}
		
		else if($_POST['desig']=="member")
		{
			header("location:view.php");
			exit;
		}
		
		
		
    }
	else//If uflag = 0 and login as author or member redirect to view,php
	{
	  header("location:view.php");
	}
}
else
{
 header("location:index.php?msg='invalid'");
}
}
else//Empty input box
{
header("location:index.php?msg='empty'");
exit; 

}
?>