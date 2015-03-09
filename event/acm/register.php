<?php
require 'db.php';
$val="null";
if(isset($_POST['username']) && isset($_POST['password']))
{
 $user_name = $_POST['username'];
 $password = $_POST['password'];
 $query="INSERT INTO users (user_name,password)
					VALUES('$user_name','$password')";
		 mysql_query($query) or die(mysql_error());
		 header("location:index.php?val='success'");
}
else if($val != "null")
{
 header("location:register.php?val='fail'");
}
?>
<html>
<body>
<form action="register.php" method="POST" >
<table width="100%" border="0" cellpadding="3" cellspacing="5" bgcolor="#FFFFFF">
<tr>
<td colspan="3"><strong>Register</strong></td>
</tr>
<tr>
<td width="78">Username</td>
<td width="6">:</td>
<td width="294"><input name="username" type="text" id="myusername"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="password" type="password" id="mypassword"></td>
</tr>
<tr>
<td>&nbsp;</td>
<?php
if(isset($_GET['val'])){
 $val=$_GET['val'];
 if($val == 'fail'){
echo "Kindly re-check"; 
} 
}
?>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Create"></td>
</table>
</form>
</body>
</html>