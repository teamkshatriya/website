<?php
require 'db.php';
require 'get_table.php';
require 'reset.php';
if(!isset($_COOKIE['user_name']))
{
 header("location:index.php");
}

if(!upload_reset())
{
	header("location:logout.php");
}
$reset = upload_reset();
    $query = "SELECT * FROM active ";
	$ans = mysql_query($query) or die(mysql_error());
	$res = mysql_fetch_assoc($ans);
    $date = $res['date'];
	$dsplit = explode("-",$date);
    $id = $res['event_id'];	
	?>
<html>
<body>
<form action="update.php" method="post" >
<h2>Name of Event:</h2><br/><input type="text" value="<?php 
														echo $res['name']; 
														?>" name="name" size="30" maxlength="30" /><br/>
<h2>Event Description:</h2><br/><textarea name="desc" rows="5" cols="60" ><?php 
														echo $res['description']; 
														?> </textarea><br/>
<h2>Date:</h2><br/><input type="text" name="day" value="<?php 
														echo $dsplit[2]; 
														?>"maxlength="2" size="2" placeholder="dd" />
                   <input type="text" name="month" value="<?php 
														echo $dsplit[1]; 
														?>"maxlength="2" size="2" placeholder="mm" />
	               <input type="text" name="year" value="<?php 
														echo $dsplit[0]; 
														?>"maxlength="4" size="4" placeholder="yyyy" /><br/>
<h2>Time:</h2><br/><input type="text" value="<?php 
														echo $res['hr']; 
														?>" name="hour" maxlength="2" size="2" placeholder="hr" />
                   <input type="text" name="min" value="<?php 
														echo $res['min']; 
														?>" maxlength="2" size="2" placeholder="min" />
<select name="meridian" >
<option selected>am</option>
<option>pm</option>
</select><br/>
<h2>Permission:</h2><br/><input type="text" value="<?php 
														echo $res['perm']; 
														?>" name="perm" /><br />


<!-- ANNOUNCEMENTS -->
<h2>Announcements</h2><br/>
<?php
$query1 = "SELECT * FROM ann WHERE event_id='$id' ";
	$ans1 = mysql_query($query1) or die(mysql_error());
	$res1 = mysql_fetch_assoc($ans1);
    $date = $res1['o1date'];
	$dsplit = explode("-",$date);
?>

<!-- OPTION 1 -->
<h3>Date:			<input type="text" name="o1day" maxlength="2" size="2" placeholder="dd" value="<?php echo $dsplit[2]; ?>" />
                   <input type="text" name="o1month" maxlength="2" size="2" placeholder="mm" value="<?php echo $dsplit[1]; ?>" />
	               <input type="text" name="o1year" maxlength="4" size="4" placeholder="yyyy" value="<?php echo $dsplit[0]; ?>" /><br/></h3>
Building<br/><select name="o1b" >
<option selected><?php echo $res1['o1b']; ?></option>
<option>TT</option>
<option>MB</option>
<option>SMV</option>
</select><br/>
Morning<br/><input type="text" name="o1p1m" size="30" value="<?php echo $res1['o1p1m']; ?>" />
            <input type="text" name="o1p2m" size="30" value="<?php echo $res1['o1p2m'];  ?>" /><br/>
Evening<br/><input type="text" name="o1p1e" size="30" value="<?php echo $res1['o1p1e'];  ?>" />
            <input type="text" name="o1p2e" size="30" value="<?php echo $res1['o1p2e'];  ?>" />


<!-- OPTION 2 -->
<?php
$date = $res1['o2date'];
$dsplit = explode("-",$date);
?>
<h3>Date:			<input type="text" name="o2day" maxlength="2" size="2" placeholder="dd" value="<?php echo $dsplit[2]; ?>"  />
                   <input type="text" name="o2month" maxlength="2" size="2" placeholder="mm" value="<?php echo $dsplit[1]; ?>" />
	               <input type="text" name="o2year" maxlength="4" size="4" placeholder="yyyy" value="<?php echo $dsplit[0]; ?>" /><br/></h3>

Building<br/><select name="o2b" >
<option selected><?php echo $res1['o2b']; ?></option>
<option>TT</option>
<option>MB</option>
<option>SMV</option>
</select><br/>
Morning<br/><input type="text" name="o2p1m" size="30" value="<?php echo $res1['o2p1m']; ?>" />
            <input type="text" name="o2p2m" size="30" value="<?php echo $res1['o2p2m']; ?>" /> <br/>
Evening<br/><input type="text" name="o2p1e" size="30" value="<?php echo $res1['o2p1e']; ?>" />
            <input type="text" name="o2p2e" size="30" value="<?php echo $res1['o2p2e']; ?>" />


<!-- OPTION 3 -->
<?php
$date = $res1['o3date'];
$dsplit = explode("-",$date);
?>
<h3>Date:			<input type="text" name="o3day" maxlength="2" size="2" placeholder="dd" value="<?php echo $dsplit[2]; ?>" />
                   <input type="text" name="o3month" maxlength="2" size="2" placeholder="mm" value="<?php echo $dsplit[1]; ?>" />
	               <input type="text" name="o3year" maxlength="4" size="4" placeholder="yyyy" value="<?php echo $dsplit[0]; ?>" /><br/></h3>
Building<br/><select name="o3b" >
<option selected><?php echo $res1['o3b']; ?></option>
<option>TT</option>
<option>MB</option>
<option>SMV</option>
</select><br/>
Morning<br/><input type="text" name="o3p1m" size="30" value="<?php echo $res1['o3p1m']; ?>" />
            <input type="text" name="o3p2m" size="30" value="<?php echo $res1['o3p2m']; ?>" /><br/>
Evening<br/><input type="text" name="o3p1e" size="30" value="<?php echo $res1['o3p1e']; ?>" />
            <input type="text" name="o3p2e" size="30" value="<?php echo $res1['o3p2e']; ?>" />


<!-- OPTION 4 -->
<?php
$date = $res1['o3date'];
$dsplit = explode("-",$date);
?>
<h3>Date:			<input type="text" name="o4day" maxlength="2" size="2" placeholder="dd" value="<?php echo $dsplit[2]; ?>" />
                   <input type="text" name="o4month" maxlength="2" size="2" placeholder="mm" value="<?php echo $dsplit[1]; ?>" />
	               <input type="text" name="o4year" maxlength="4" size="4" placeholder="yyyy" value="<?php echo $dsplit[0]; ?>" /><br/></h3>
Building<br/><select name="o4b" >
<option selected><?php echo $res1['o4b']; ?></option>
<option>TT</option>
<option>MB</option>
<option>SMV</option>
</select><br/>
Morning<br/><input type="text" name="o4p1m" size="30" value="<?php echo $res1['o4p1m']; ?>" />
            <input type="text" name="o4p2m" size="30" value="<?php echo $res1['o4p2m']; ?>" /><br/>
Evening<br/><input type="text" name="o4p1e" size="30" value="<?php echo $res1['o4p1e']; ?>" />
            <input type="text" name="o4p2e" size="30" value="<?php echo $res1['o4p2e']; ?>" />



<h2>Event Day</h2><br/>
Volunteer1<br/><input type="text" name="v1" value="<?php echo $res['v1']; ?>" />:::<input type ="text" name="pc1" value="<?php echo $res['pc1']; ?>"/><br/> 
Volunteer2<br/><input type="text" name="v2" value="<?php echo $res['v2']; ?>" />:::<input type ="text" name="pc2" value="<?php echo $res['pc2']; ?>"/><br/> 
Volunteer3<br/><input type="text" name="v3" value="<?php echo $res['v3']; ?>"/>:::<input type ="text" name="pc3" value="<?php echo $res['pc3']; ?>"/><br/>
Volunteer4<br/><input type="text" name="v4" value="<?php echo $res['v4']; ?>"/>:::<input type ="text" name="pc4" value="<?php echo $res['pc4']; ?>"/><br/>
Volunteer5<br/><input type="text" name="v5" value="<?php echo $res['v5']; ?>"/>:::<input type ="text" name="pc5" value="<?php echo $res['pc5']; ?>"/><br/>
<h2>Result</h2>
Event Turnout:<br/>
<input type="text" name="num" /><br/>
Feedback:<br/>
<textarea name="feedback" rows="5" cols="60" ></textarea>

<br/><br/><input type="submit" value="Edit"/>
 
</form>
</body>
</html>