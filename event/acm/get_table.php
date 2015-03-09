<?php
$tname = '';
$get_name_query = "SELECT name FROM active WHERE flag=1";
$get_name_rows = mysql_query($get_name_query) or die (mysql_error());
while( $res = mysql_fetch_assoc($get_name_rows))
{
	$tname = $res['name'];
}
?>