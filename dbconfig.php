<?php 

$host="192.168.10.146";
$username="adminosms";
$password="123";
$db_name="osms";
$tbl_name="userinfo";
$connection=mysqli_connect($host,$username,$password);
if(!$connection)
{
	die("connction fail".mysqli_connect_error());
}

if($connection)
{
	echo "connected";
}

$db_select= mysqli_select_db($connection,$db_name);
if(!$db_select)
{
	die("selection fail".mysqli_connect_error());
}

?>

