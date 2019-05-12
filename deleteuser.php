<?php  
 
include("connect2.php");  
$delete_id=$_GET['del'];  
$delete_query="delete  from userlogin WHERE UserId='$delete_id'";//delete query  
$run=mysqli_query($dbcon,$delete_query);  
if($run)  
{  
//javascript function to open in the same window   
    echo "<script>window.open('viewadmin.php?deleted=user has been deleted','_self')</script>";  
}  
  
?>  