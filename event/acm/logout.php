<?php
require 'db.php';
if($_COOKIE['user_name'])
{
$expire=time()-30;
setcookie("user_name", $_POST['user_name'], $expire);
setcookie("desig", $_POST['desig'], $expire);
header("location:index.php");
exit;
}
?>