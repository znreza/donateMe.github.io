<?php
/*$host ='localhost';
$user = 'root';
$pass = '';
$mysql_db = "donation";
if(!@mysql_connect($host,$user,$pass)||!@mysql_select_db($mysql_db))
{
	echo "Sorry! The connection is down :(";
	die();
}
*/

$dbcon=mysqli_connect("localhost","a5798722_znr","donation5848");  
mysqli_select_db($dbcon,"a5798722_donatio");  

?>