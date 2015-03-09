<?php
require 'headers.php';
require 'db.php';
require 'get_table.php';
if(!isset($_COOKIE['user_name']))
{
 header("location:logout.php");
}
$Query = "SELECT  event_id FROM `$tname` WHERE name='$tname'";
$Query_res = mysql_query($Query) or die(mysql_error());
while($Res=mysql_fetch_assoc($Query_res))
{
 $id = $Res['event_id'];
}
$query = "SELECT * FROM ann WHERE event_id=$id";
$res_query = mysql_query($query) or die(mysql_error());
$res = mysql_fetch_assoc($res_query);
/*if(!upload_reset())
{
	header("location:logout.php");
}*/

?>
<?php
if(isset($_POST['action']))
{
    if(($_POST['action'] == "upload"))
    {
	  if (file_exists("upload/" . $_FILES["docu"]["name"]))
	  {
		$user_name = $_COOKIE['user_name'];
		header("location:logout.php");
	  }
	}
}
?>	  
<html>
<body>
<form method = "POST" action = "upload.php" enctype="multipart/form-data">
<input type="checkbox" name="cbox1" value="yes"  />Attendance<br/>
<input type="checkbox" name="cbox2" value="yes"  />Permissions<br/>
<input type="checkbox" name="cbox3" value="yes"  />Documentation<br/>
<input type="checkbox" name="cbox4" value="yes"  />Pre-Checks<br/>
<h2>Announcemects</h2><br/>
<ul>
    <!-- OPTION 1 -->
	<?php
	if($res['o1b'])
	{
	if($res['o1p1m'] || $res['o1p2m'] || $res['o1p1e'] || $res['o1p2e'])
	echo "Building:".$res['o1b'];
	if($res['o1p1m'] || $res['o1p2m'])
	{
		echo "<li><b>Morning</b></li><br />";
	}
	if($res['o1p1m'])
	{
		echo "<li>".$res['o1p1m'];
		echo "<input type='radio' name='co1p1m' value='yes'/>Yes  <input type='radio' name='co1p1m' value='no'/>No";
		echo "</li><br/>";
	}
	if($res['o1p2m'])
	{
		echo "<li>".$res['o1p2m'];
		echo "<input type='radio' name='co1p2m' value='yes'/>Yes  <input type='radio' name='co1p2m' value='no'/>No";
		echo "</li><br/>";
	}
	if($res['o1p1e'] || $res['o1p2e'])
	{
		echo "<li><b>Evening</b></li><br />";
	}
	if($res['o1p1e'])
	{
		echo "<li>".$res['o1p1e'];
		echo "<input type='radio' name='co1p1e' value='yes'/>Yes  <input type='radio' name='co1p1e' value='no'/>No";
		echo "</li><br/>";
	}
	if($res['o1p2e'])
	{
		echo "<li>".$res['o1p2e'];
		echo "<input type='radio' name='co1p2e' value='yes'/>Yes  <input type='radio' name='co1p2e' value='no'/>No";
		echo "</li><br/>";
	}
	}
	?>
	
	<!-- OPTION 2 -->
	
	<?php
	if($res['o2b'])
	{
	if($res['o2p1m'] || $res['o2p2m'] || $res['o2p1e'] || $res['o2p2e'])
	echo "Building:".$res['o2b'];
	if($res['o2p1m'] || $res['o2p2m'])
	{
		echo "<li><b>Morning</b></li><br />";
	}
	if($res['o2p1m'])
	{
		echo "<li>".$res['o2p1m'];
		echo "<input type='radio' name='co2p1m' value='yes'/>Yes  <input type='radio' name='co2p1m' value='no'/>No";
		echo "</li><br/>";
	}
	if($res['o2p2m'])
	{
		echo "<li>".$res['o2p2m'];
		echo "<input type='radio' name='co2p2m' value='yes'/>Yes  <input type='radio' name='co2p2m' value='no'/>No";
		echo "</li><br/>";
	}
	if($res['o2p1e'] || $res['o2p2e'])
	{
		echo "<li><b>Evening</b></li><br />";
	}
	if($res['o2p1e'])
	{
		echo "<li>".$res['o2p1e'];
		echo "<input type='radio' name='co2p1e' value='yes'/>Yes  <input type='radio' name='co2p1e' value='no'/>No";
		echo "</li><br/>";
	}
	if($res['o2p2e']){
		echo "<li>".$res['o2p2e'];
		echo "<input type='radio' name='co2p2e' value='yes'/>Yes  <input type='radio' name='co2p2e' value='no'/>No";
		echo "</li><br/>";
	}
	}
	?>
	
	<!-- OPTION 3 -->
	
	<?php
	if($res['o3b'])
	{
	if($res['o3p1m'] || $res['o3p2m'] || $res['o3p1e'] || $res['o3p2e'])
	echo "Building:".$res['o3b'];
	if($res['o3p1m'] || $res['o3p2m'])
	{
		echo "<li><b>Morning</b></li><br />";
	}
	if($res['o3p1m'])
	{
		echo "<li>".$res['o3p1m'];
		echo "<input type='radio' name='co3p1m' value='yes'/>Yes  <input type='radio' name='co3p1m' value='no'/>No";
		echo "</li><br/>";
	}
	if($res['o3p2m'])
	{
		echo "<li>".$res['o3p2m'];
		echo "<input type='radio' name='co3p2m' value='yes'/>Yes  <input type='radio' name='co3p2m' value='no'/>No";
		echo "</li><br/>";
	}
	if($res['o3p1e'] || $res['o3p2e'])
	{
		echo "<li><b>Evening</b></li><br />";
	}
	if($res['o3p1e'])
	{
		echo "<li>".$res['o3p1e'];
		echo "<input type='radio' name='co3p1e' value='yes'/>Yes  <input type='radio' name='co3p1e' value='no'/>No";
		echo "</li><br/>";
	}
	if($res['o3p2e'])
	{
        echo "<li>".$res['o3p2e'];
		echo "<input type='radio' name='co3p2e' value='yes'/>Yes  <input type='radio' name='co3p2e' value='no'/>No";
		echo "</li><br/>";
	}
	}
	?>
	
	<!-- OPTION 4 -->
	
	<?php
	if($res['o4b'])
	{
	if($res['o4p1m'] || $res['o4p2m'] || $res['o4p1e'] || $res['o4p2e'])
	echo "Building:".$res['o2b'];
	if($res['o4p1m'] || $res['o4p2m'])
	{
		echo "<li><b>Morning</b></li><br />";
	}
	if($res['o4p1m'])
	{
		echo "<li>".$res['o4p1m'];
		echo "<input type='radio' name='co4p1m' value='yes'/>Yes  <input type='radio' name='co4p1m' value='no'/>No";
		echo "</li><br/>";
	}
	if($res['o4p2m'])
	{
		echo "<li>".$res['o4p2m'];
		echo "<input type='radio' name='co4p2m' value='yes'/>Yes  <input type='radio' name='co4p2m' value='no'/>No";
		echo "</li><br/>";
	}
	if($res['o4p1e'] || $res['o4p2e'])
	{
		echo "<li><b>Evening</b></li><br />";
	}
	if($res['o4p1e'])
	{
		echo "<li>".$res['o4p1e'];
		echo "<input type='radio' name='co4p1e' value='yes'/>Yes  <input type='radio' name='co4p1e' value='no'/>No";
		echo "</li><br/>";
	}
	if($res['o4p2e'])
	{
		echo "<li>".$res['o4p2e'];
		echo "<input type='radio' name='co4p2e' value='yes'/>Yes  <input type='radio' name='co4p2e' value='no'/>No";
		echo "</li><br/>";
	}
	}
	?>
File:<input type="file" name="docu" id="docu"><br>
<input type="hidden" name="action" value="upload" />
<input type="submit" value ="Submit" /><br/>
</form>
</body>
</html>