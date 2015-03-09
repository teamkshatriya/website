<?php 
 require 'db.php';
 if(isset($_COOKIE['user_name']))
 {//For returning users ..
    echo $_COOKIE['user_name'];
    $user_name =  $_COOKIE['user_name'];
	if($_COOKIE['desig']=="author")
	{
		$user = "SELECT ftime FROM users WHERE user_name='$user_name'" ;
		$user_rows = mysql_query($user);
		$fans = -1;
		while($res1 = mysql_fetch_assoc($user_rows))
		{
			$fans = $res1['ftime']; 
		}
		if($fans == 1)
		{
			header("location:event.php");
		}
		else
		{
			header("location:options.php?user_name=$user_name");
		}
	}            
	else if($_COOKIE['desig']=="member")
	{
	 header("location:view.php");
	}
 }
 
 ?>
<html>
<head>
<style>
#box
{
 width:400px;
 height:400px;
 border:1px solid rgba(0,0,0,0.4);
 border-radius:10px;
 margin:0 auto;
 margin-top:180px;
 background-image:url('background.jpg');
 text-align:center;
 font-size:16px;
 padding:20px;
}
#green{
	color:green;
	}
#submit
{
 float:left;
 width:100px;
 height:30px;
 font-size:20px;
 margin-left:160px;
 margin-top:40px;
}
</style>
</head>
<body>
<div id="box">
<form action="check.php" method="POST" >
Username:<input type="text" name="user_name" size="30" /><br/>
Password:<input type="password" name="password" size="30" /><br/><br/><br/>
<form action="redirect.php" method="POST" >
<input type="radio" name="desig" value="author" checked="true" />AUTHOR
<input type="radio" name="desig" value="member"  />MEMBER<br/><br/><br/>
<a href="register.php">REGISTER</a>
<p id="green">
<?php
 
if(isset($_GET['msg']))
{
 $val=$_GET['msg'];
	 if(strcmp($val,"invalid"))
	echo "OOPS !! The credentials seem to be fuzzy.."; 
	else if($val=='password')
	echo "The password is empty.";
	else if(strcmp($val,"empty"))
	echo "The fields appear to be empty..";
	
} 

?> </p>
<br/><br/><input type="submit" name="submit" value="submit" id="submit" />
</div>
</form>
</body>
</html>