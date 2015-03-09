<?php
mysql_connect("localhost","root","");
mysql_select_db("sample");
$query = "SELECT name FROM  WHERE flag=1";
$query_row = mysql_query("$query") or die(mysql_error());
$ans = '';
while($res = mysql_fetch_assoc($query_row))
{
	$ans = $res['name'];
}
mysql_free_result($query_row);
?>
<?php
mysql_connect("localhost","root","");
mysql_select_db("reg");
echo "done";
echo $ans;
$query1 = "INSERT INTO web (name) VALUES('$ans')";
mysql_query($query1) or die(mysql_error());
echo $ans;
?>