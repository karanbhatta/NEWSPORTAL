<?php
error_reporting(1);
if ($_SERVER['HTTP_HOST'] == 'localhost')
{
$HostName="localhost";
$UserName="root";
$PassWord="";
$DatabaseName="news_portal";

mysqli_connect("$HostName", "$UserName", "$PassWord") or die(mysqli_error());
mysqli_select_db("$DatabaseName") or die(mysqli_error());	

}
else
{
$HostName="localhost";
$UserName="root";
$PassWord="";
$DatabaseName="news_portal";

mysqli_connect("$HostName", "$UserName", "$PassWord") or die(mysqli_error());
mysqli_select_db("$DatabaseName") or die(mysqli_error());	
}

?>