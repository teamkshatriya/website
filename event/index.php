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
<style type="text/css">
	*{margin:0;padding:0;}
	body{
		background:url("background.JPG");
	}
	@font-face{
		font-family:catull;
		src:url('Roboto-Condensed.ttf');
	}
	#navbar
	{
		border:1px black solid;
		height:30px;
	}
	#maindiv{
		background: url("div.png");
		width:800px;
		height: 500px;
		margin:0 auto;
		margin-top:60px;
	}
	#signin{
		color: #00aeef;
		height:30px;
		width:200px;
		margin-left:60px;
		text-align: center;
		margin-top: 10px;
		font-size: 38px;
		font-family: catull;
		
	}
	#register{
		width:200px;
		height: 30px;
		font-size: 38px;
		float: right;
		margin-right: 60px;
		margin-top: 428px;
		text-align: center;
		font-family: catull;
		color: #00aeef;
		bottom:0;
	}
	#form{
		display: block;
		width:300px;
		height: 300px;
		border:1px black solid;
		position: absolute;
		margin:0 auto;
		margin-top:60px;
		margin-left: 270px;
		padding:5px;
		font-family: catull;
		line-height: 29px;
	}
	#form input[type="text"],input[type="password"]
		{ 
			width: 250px;
			background-color: rgba(255, 255, 255, 0.4); 
			border: 1px solid rgba(122, 192, 0, 0.15); 
			padding: 7px;  
			color: #4b4b4b; 
			font-size: 14px; 
			border-radius: 5px; 
			margin-bottom: 15px; 
			margin-top: -7px;
		}
		#form input:focus
		{ 
		border: 1px solid #ff5400; 
		background-color: #00aeef;
		opacity:0.5; 
		}
		#form input[type="submit"]
		{ 
			background: #00aeef; 
			display: inline-block; 
			padding: 5px; 
			color: #fbf7f7; 
			text-decoration: none; 
			font-weight: bold; 
			-moz-border-radius: 5px; 
			-webkit-border-radius: 5px; 
			border-radius: 5px; 
			box-shadow: 0 1px 10px #999; 
			text-shadow: 0 -1px 1px #222; 
			border: none; 
			position: relative; 
			cursor: pointer; 
			font-size: 14px; 
			opacity:0.6;
			font-family:roboto,Verdana, Geneva, sans-serif;
			transition:opacity 0.2s ease-in;
			-moz-transition:opacity 0.2s ease-in;
			-webkit-transition:opacity 0.2s ease-in;
		}
		#form input.button:hover{
			opacity:1;
		}
</style>
<body>
	<div id="navbar">
	</div>
	<div id="maindiv">
		<div id="signin">
			SIGN-IN
		</div>
		<div id="form">
			<form action="check.php" method="POST" >
			Username:<input type="text" name="user_name" size="30" /><br/>
			Password:<input type="password" name="password" size="30" /><br/>
			<div id="selection">
			<input type="radio" name="desig" value="author" checked="true" />Author
			<input type="radio" name="desig" value="member"  />Member<br/>
			</div>
			<input type="submit" name="submit" value="Submit" id="submit" />
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
		</form>
		</div>
		<a href="register.php"><div id="register">REGISTER</div></a>
	</div>
</body>
</html>