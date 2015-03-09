<?php
if(!isset($_COOKIE['user_name']))
{
 header("location:index.php");
}
$server="localhost";
$uname="root";
$pwd="";
$db="eveman";
$connect=mysql_connect($server,$uname,$pwd) or die(mysql_error());
mysql_select_db($db,$connect) or die(mysql_error());
$query="SELECT * FROM active WHERE flag=1";
$handle=mysql_query($query,$connect);
$res=mysql_fetch_array($handle);
$date = $res['date'];
$dsplit = explode("-",$date);
?>
<html>
<head>
<style>
#green
{
 color:green;
}
#orange
{
 color:orange;
}
#red
{
 color:red;
}
}
</style>
</head>
<h2>Name Of Event:</h2>
<?php echo $res['name'] ; ?><br/>
<h2>Event Description:</h2>
<?php echo $res['description']; ?><br/>
<h2>Date:</h2><?php echo $dsplit[0]; ?>
                  <?php echo $dsplit[1]; ?>
	               <?php echo $dsplit[2]; ?><br/>
<h2>Time:</h2><br/><?php echo $res['hr']; ?>
                   <?php echo $res['min']; ?>
<?php echo $res['meridian']; ?><br/>
<h2>Permission:</h2><br/><?php echo $res['perm']; ?><br />


<!-- ANNOUNCEMENTS -->
<h2>Announcements</h2><br/>
<?php
	$id = $res['event_id'];
    $query1 = "SELECT * FROM ann WHERE event_id='$id' ";
	$ans1 = mysql_query($query1) or die(mysql_error());
	$res1 = mysql_fetch_assoc($ans1);
    $date = $res1['o1date'];
	$dsplit = explode("-",$date);
?>

<!-- OPTION 1 -->
<h3>Date:</h3>		   <?php echo $dsplit[0]; ?>
                   <?php echo $dsplit[1]; ?>
	               <?php echo $dsplit[0]; ?><br/>
Building<br/>
<?php echo $res1['o1b']; ?><br/>
Morning<br/><?php 
                if(strcmp($res1['co1p1m'],"yes")==0){
                echo"<p id='green'>";
								echo $res1['o1p1m'];
								echo "</p>";
								}
                else if(strcmp($res1['co1p1m'],"no")==0){
                echo "<p id='red'>";
                echo $res1['o1p1m'];
                echo "</p>";
                }
                else{
                echo "<p id='orange'>";
                echo $res1['o1p1m'];
                echo "</p>";
                }
              ?>
            <?php if(strcmp($res1['co1p2m'],"yes")==0){
                echo"<p id='green'>";
                echo $res1['o1p2m'];
                echo "</p>";
                }
                else if(strcmp($res1['co1p2m'],"no")==0){
                echo "<p id='red'>";
                echo $res1['o1p2m'];
                echo "</p>";
                }
                else{
                echo "<p id='orange'>";
                echo $res1['o1p2m'];
                echo "</p>";
                } ?><br/>
Evening<br/><?php if(strcmp($res1['co1p1e'],"yes")==0){
                echo"<p id='green'>";
                echo $res1['o1p1e'];
                echo "</p>";
                }
                else if(strcmp($res1['co1p1e'],"no")==0){
                echo "<p id='red'>";
                echo $res1['o1p1e'];
                echo "</p>";
                }
                else{
                echo "<p id='orange'>";
                echo $res1['o1p1e'];
                echo "</p>";
                } ?>
            <?php if(strcmp($res1['co1p2e'],"yes")==0){
                echo"<p id='green'>";
                echo $res1['o1p2e'];
                echo "</p>";
                }
                else if(strcmp($res1['co1p2e'],"no")==0){
                echo "<p id='red'>";
                echo $res1['o1p2e'];
                echo "</p>";
                }
                else{
                echo "<p id='orange'>";
                echo $res1['o1p2e'];
                echo "</p>";
                } ?>


<!-- OPTION 2 -->
<?php
$date = $res1['o2date'];
$dsplit = explode("-",$date);
?>
<h3>Date:</h3>		<?php echo $dsplit[2]; ?>
                    <?php echo $dsplit[1]; ?>
	                <?php echo $dsplit[0]; ?><br/>

Building<br/><?php echo $res1['o2b']; ?><br/>
Morning<br/><?php if(strcmp($res1['co2p1m'],"yes")==0){
                echo"<p id='green'>";
                echo $res1['o2p1m'];
                echo "</p>";
                }
                else if(strcmp($res1['co2p1m'],"no")==0){
                echo "<p id='red'>";
                echo $res1['o2p1m'];
                echo "</p>";
                }
                else{
                echo "<p id='orange'>";
                echo $res1['o2p1m'];
                echo "</p>";
                }?>
            <?php if(strcmp($res1['co2p2m'],"yes")==0){
                echo"<p id='green'>";
                echo $res1['o2p2m'];
                echo "</p>";
                }
                else if(strcmp($res1['co2p2m'],"no")==0){
                echo "<p id='red'>";
                echo $res1['o2p2m'];
                echo "</p>";
                }
                else{
                echo "<p id='orange'>";
                echo $res1['o2p2m'];
                echo "</p>";
                } ?> <br/>
Evening<br/><?php if(strcmp($res1['co2p1e'],"yes")==0){
                echo"<p id='green'>";
                echo $res1['o2p1e'];
                echo "</p>";
                }
                else if(strcmp($res1['co2p1e'],"no")==0){
                echo "<p id='red'>";
                echo $res1['o2p1e'];
                echo "</p>";
                }
                else{
                echo "<p id='orange'>";
                echo $res1['o2p1e'];
                echo "</p>";
                } ?>
            <?php if(strcmp($res1['co2p2e'],"yes")==0){
                echo"<p id='green'>";
                echo $res1['o2p2e'];
                echo "</p>";
                }
                else if(strcmp($res1['co2p2e'],"no")==0){
                echo "<p id='red'>";
                echo $res1['o2p2e'];
                echo "</p>";
                }
                else{
                echo "<p id='orange'>";
                echo $res1['o2p2e'];
                echo "</p>";
                } ?>


<!-- OPTION 3 -->
<?php
$date = $res1['o3date'];
$dsplit = explode("-",$date);
?>
<h3>Date:			      <?php echo $dsplit[2]; ?>
                    <?php echo $dsplit[1]; ?>
                    <?php echo $dsplit[0]; ?><br/></h3>
Building<br/><?php echo $res1['o3b']; ?><br/>
<h2>Morning</h2><br/><?php if(strcmp($res1['co3p1m'],"yes")==0){
                echo"<p id='green'>";
                echo $res1['o3p1m'];
                echo "</p>";
                }
                else if(strcmp($res1['co3p1m'],"no")==0){
                echo "<p id='red'>";
                echo $res1['o3p1m'];
                echo "</p>";
                }
                else{
                echo "<p id='orange'>";
                echo $res1['o3p1m'];
                echo "</p>";
                } ?>
                <?php if(strcmp($res1['co3p2m'],"yes")==0){
                echo"<p id='green'>";
                echo $res1['o3p2m'];
                echo "</p>";
                }
                else if(strcmp($res1['co3p2m'],"no")==0){
                echo "<p id='red'>";
                echo $res1['o3p2m'];
                echo "</p>";
                }
                else{
                echo "<p id='orange'>";
                echo $res1['o3p2m'];
                echo "</p>";
                } ?><br/>
<h2>Evening</h2><br/><?php if(strcmp($res1['co3p1e'],"yes")==0){
                echo"<p id='green'>";
                echo $res1['o3p1e'];
                echo "</p>";
                }
                else if(strcmp($res1['co3p1e'],"no")==0){
                echo "<p id='red'>";
                echo $res1['o3p1e'];
                echo "</p>";
                }
                else{
                echo "<p id='orange'>";
                echo $res1['o3p1e'];
                echo "</p>";
                } ?>
                <?php if(strcmp($res1['co3p2e'],"yes")==0){
                echo"<p id='green'>";
                echo $res1['o3p2e'];
                echo "</p>";
                }
                else if(strcmp($res1['co3p2e'],"no")==0){
                echo "<p id='red'>";
                echo $res1['o3p2e'];
                echo "</p>";
                }
                else{
                echo "<p id='orange'>";
                echo $res1['o3p2e'];
                echo "</p>";
                } ?>


<!-- OPTION 4 -->
<?php
$date = $res1['o3date'];
$dsplit = explode("-",$date);
?>
<h3>Date:			<?php echo $dsplit[2]; ?>
                   <?php echo $dsplit[1]; ?>
	               <?php echo $dsplit[0]; ?><br/></h3>
Building<br/><?php echo $res1['o4b']; ?><br/>
Morning<br/><?php if(strcmp($res1['co4p1m'],"yes")==0){
                echo"<p id='green'>";
                echo $res1['o4p1m'];
                echo "</p>";
                }
                else if(strcmp($res1['co4p1m'],"no")==0){
                echo "<p id='red'>";
                echo $res1['o4p1m'];
                echo "</p>";
                }
                else{
                echo "<p id='orange'>";
                echo $res1['o4p1m'];
                echo "</p>";
                } ?>
            <?php if(strcmp($res1['co4p2m'],"yes")==0){
                echo"<p id='green'>";
                echo $res1['o4p2m'];
                echo "</p>";
                }
                else if(strcmp($res1['co4p2m'],"no")==0){
                echo "<p id='red'>";
                echo $res1['o4p2m'];
                echo "</p>";
                }
                else{
                echo "<p id='orange'>";
                echo $res1['o4p2m'];
                echo "</p>";
                } ?><br/>
Evening<br/><?php if(strcmp($res1['co4p1e'],"yes")==0){
                echo"<p id='green'>";
                echo $res1['o4p1e'];
                echo "</p>";
                }
                else if(strcmp($res1['co4p1e'],"no")==0){
                echo "<p id='red'>";
                echo $res1['o4p1e'];
                echo "</p>";
                }
                else{
                echo "<p id='orange'>";
                echo $res1['o4p1e'];
                echo "</p>";
                } ?>
            <?php if(strcmp($res1['co4p2e'],"yes")==0){
                echo"<p id='green'>";
                echo $res1['o4p2e'];
                echo "</p>";
                }
                else if(strcmp($res1['co4p2e'],"no")==0){
                echo "<p id='red'>";
                echo $res1['o4p2e'];
                echo "</p>";
                }
                else{
                echo "<p id='orange'>";
                echo $res1['o4p2e'];
                echo "</p>";
                } ?>



<h2>Event Day</h2><br/>
Volunteer1<br/><?php echo $res['v1']; ?>:::<?php echo $res['pc1']; ?><br/> 
Volunteer2<br/><?php echo $res['v2']; ?>:::<?php echo $res['pc2']; ?><br/> 
Volunteer3<br/><?php echo $res['v3']; ?>:::<?php echo $res['pc3']; ?><br/>
Volunteer4<br/><?php echo $res['v4']; ?>:::<?php echo $res['pc4']; ?><br/>
Volunteer5<br/><?php echo $res['v5']; ?>:::<?php echo $res['pc5']; ?><br/>
<h2>Result</h2>
Event Turnout:<br/>
<?php echo $res['num']; ?><br/>
Feedback:<br/>
<?php echo $res['feedback']; ?>