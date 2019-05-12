<?php
include("connect2.php");
 if(isset($_POST['submit'])) {
$name=$_POST['name'];
$comment=$_POST['comment'];
//$submit=$_POST['submit'];
//if($submit)
//{
if($name&&$comment)
{
$insert="INSERT INTO userpost (UDate,Upost) VALUES ('$name','$comment') ";
 $run=mysqli_query($dbcon,$insert);  
 if($run)
 {
//echo "<meta HTTP-EQUIV='REFRESH' content='0; url=index2.php'>";
 	$getquery="SELECT * FROM userpost ";
    $run2=mysqli_query($dbcon,$getquery);  
          
          
while($row=mysqli_fetch_array($run2))
{
//$id=$rows['id'];
$name=$row[0];
$comment=$row[1];
echo $name . '<br/>' . '<br/>' . $comment . '<br/>' . '<br/>' . '<hr size="1"/>'; 
}
}
}
else
{
echo "please fill out all fields";
}
//}
}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comment box</title>
</head>
 
<body>
<center>
<form action="index2.php" method="POST">
<table>
<tr><td>Name: <br><input type="text" name="name"/></td></tr>
<tr><td colspan="2">Comment: </td></tr>
<tr><td colspan="5"><textarea name="comment" rows="10" cols="50"></textarea></td></tr>
<tr><td colspan="2"><input type="submit" name="submit" value="Comment"></td></tr>
</table>
</form>

<?php
/*include("connect2.php");
/*$dbLink = mysql_connect("mysql host name", "mysql username", "mysql password");
    mysql_query("SET character_set_results=utf8", $dbLink);
    mb_language('uni');
    mb_internal_encoding('UTF-8');
 echo $comment;
//$getquery="SELECT * FROM userpost ORDER BY UserId DESC";
    $getquery="SELECT * FROM userpost WHERE Upost = $comment";
    $run=mysqli_query($dbcon,$getquery);  
          
          
while($row=mysql_fetch_array($run))
{
//$id=$rows['id'];
$name=$row[1];
$comment=$row[2];
echo $name . '<br/>' . '<br/>' . $comment . '<br/>' . '<br/>' . '<hr size="1"/>'
;}

?>
 
</body>
</html>*/
?>