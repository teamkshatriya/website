<?php
if($_POST['desig']=="author" || $_POST['desig']=="co-author" )
{
  header("location:main_login.php");
  exit;
}
else if($_POST['desig']=="register")
{
  header("location:register.php");
  exit;
}
else
{
  header("location:view.php");
  exit;
}
?>