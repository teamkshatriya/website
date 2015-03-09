<?php
require 'db.php';
require 'get_table.php';
$query = "SELECT  event_id FROM `$tname` WHERE name='$tname'";
$query_res = mysql_query($query) or die(mysql_error());
while($res=mysql_fetch_assoc($query_res))
{
 $id = $res['event_id'];
}
if(isset($_POST['cbox1']))
{
	$cbox1 = $_POST['cbox1']; 
	$query = "UPDATE ann SET c_att='$cbox1' WHERE event_id=$id";
	mysql_query($query) or die(mysql_error());
}

if(isset($_POST['cbox2']))
{
	$cbox2 = $_POST['cbox2'];
	$query = "UPDATE ann SET c_perm='$cbox2' WHERE event_id=$id";
	mysql_query($query) or die(mysql_error());
}

if(isset($_POST['cbox3']))
{
	$cbox3 = $_POST['cbox3'];
	$query = "UPDATE ann SET c_docu='$cbox3' WHERE event_id=$id";
	mysql_query($query) or die(mysql_error());
}

if(isset($_POST['cbox4']))
{
	$cbox4 = $_POST['cbox4'];
	$query = "UPDATE ann SET cpre_check='$cbox4' WHERE event_id=$id";
	mysql_query($query) or die(mysql_error());
}

//OPTION 1---

if(isset($_POST['co1p1m']))
{
	$co1p1m = $_POST['co1p1m'];
	$query = "UPDATE ann SET co1p1m='$co1p1m' WHERE event_id=$id";
	mysql_query($query) or die(mysql_error());
}
if(isset($_POST['co1p2m']))
{
	$co1p2m = $_POST['co1p2m'];
	$query = "UPDATE ann SET co1p2m='$co1p2m' WHERE event_id=$id";
	mysql_query($query) or die(mysql_error());
} 
if(isset($_POST['co1p1e']))
{
	$co1p1e = $_POST['co1p1e'];
	$query = "UPDATE ann SET co1p1e='$co1p1e' WHERE event_id=$id";
	mysql_query($query) or die(mysql_error());
}
if(isset($_POST['co1p2e']))
{
	$co1p2e = $_POST['co1p2e'];
	$query = "UPDATE ann SET co1p2e='$co1p2e' WHERE event_id=$id";
	mysql_query($query) or die(mysql_error());
}

//OPTION 2---

if(isset($_POST['co2p1m']))
{
	$co2p1m = $_POST['co2p1m'];
	$query = "UPDATE ann SET co2p1m='$co2p1m' WHERE event_id=$id";
	mysql_query($query) or die(mysql_error());
}
if(isset($_POST['co2p2m']))
{
	$co2p2m = $_POST['co2p2m'];
	$query = "UPDATE ann SET co2p2m='$co2p2m' WHERE event_id=$id";
	mysql_query($query) or die(mysql_error());
} 
if(isset($_POST['co2p1e']))
{
	$co2p1e = $_POST['co2p1e'];
	$query = "UPDATE ann SET co2p1e='$co2p1e' WHERE event_id=$id";
	mysql_query($query) or die(mysql_error());
}
if(isset($_POST['co2p2e']))
{
	$co2p2e = $_POST['co2p2e'];
	$query = "UPDATE ann SET co2p2e='$co2p2e' WHERE event_id=$id";
	mysql_query($query) or die(mysql_error());
}

//OPTION 3---

if(isset($_POST['co3p1m']))
{
	$co3p1m = $_POST['co3p1m'];
	$query = "UPDATE ann SET co3p1m='$co3p1m' WHERE event_id=$id";
	mysql_query($query) or die(mysql_error());
}
if(isset($_POST['co3p2m']))
{
	$co3p2m = $_POST['co3p2m'];
	$query = "UPDATE ann SET co3p2m='$co3p2m' WHERE event_id=$id";
	mysql_query($query) or die(mysql_error());
} 
if(isset($_POST['co3p1e']))
{
	$co3p1e = $_POST['co3p1e'];
	$query = "UPDATE ann SET co3p1e='$co3p1e' WHERE event_id=$id";
	mysql_query($query) or die(mysql_error());
}
if(isset($_POST['co3p2e']))
{
	$co3p2e = $_POST['co3p2e'];
	$query = "UPDATE ann SET co3p2e='$co3p2e' WHERE event_id=$id";
	mysql_query($query) or die(mysql_error());
}

//OPTION 4---

if(isset($_POST['co4p1m']))
{
	$co4p1m = $_POST['co4p1m'];
	$query = "UPDATE ann SET co4p1m='$co4p1m' WHERE event_id=$id";
	mysql_query($query) or die(mysql_error());
}
if(isset($_POST['co4p2m']))
{
	$co4p2m = $_POST['co4p2m'];
	$query = "UPDATE ann SET co4p2m='$co4p2m' WHERE event_id=$id";
	mysql_query($query) or die(mysql_error());
} 
if(isset($_POST['co4p1e']))
{
	$co4p1e = $_POST['co4p1e'];
	$query = "UPDATE ann SET co4p1e='$co4p1e' WHERE event_id=$id";
	mysql_query($query) or die(mysql_error());
}
if(isset($_POST['co4p2e']))
{
	$co4p2e = $_POST['co4p2e'];
	$query = "UPDATE ann SET co4p2e='$co4p2e' WHERE event_id=$id";
	mysql_query($query) or die(mysql_error());
}

if(isset($_POST['action']))
{
if(($_POST['action'] == "upload"))
{
	if ($_FILES["docu"]["error"] > 0)
	  {
	  //echo "Error: " . $_FILES["docu"]["error"] . "<br>";
	  }
	else
	  {
	  $fname = $_FILES["docu"]["name"];
	  $type = $_FILES["docu"]["type"];
	  $size = $_FILES["docu"]["size"] ;
	  $var = "upload/".$_FILES["docu"]["name"];
	  move_uploaded_file($_FILES["docu"]["tmp_name"],$var);
	  $link = "UPDATE `$tname` SET link='$fname'  "; 
	  mysql_query("$link") or die(mysql_error()); 
	  header("location:logout.php");
	  exit;
	}
}
}
mysql_query("UPDATE users SET uflag='0'") or die(mysql_error());
header("location:logout.php");
exit;
?>