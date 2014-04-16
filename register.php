<?php
$con = mysql_connect("localhost","root","12345");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("assignment3", $con);

$sql="INSERT INTO user (username, password)
VALUES
('$_POST[name2]','$_POST[password2]')";

if (!mysql_query($sql,$con))
{
  die('Error: ' . mysql_error());
  }
$username = $_POST["name2"];
$password = $_POST["password2"];
$sql="INSERT INTO user (username, password)
VALUES
('$username','$password')" or die (mysql_error());
setcookie('mycookie_name',$username);
setcookie('count',0);
header("location: main.php");

?>