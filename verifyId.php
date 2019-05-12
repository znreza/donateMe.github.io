<?php  
          
        include("connect2.php");  
          session_start();
        if(isset($_POST['login']))  
        {  
            $user_email=$_POST['email'];  
            $user_pass=$_POST['pass'];  
          
            $check_user="select * from userlogin WHERE Email='$user_email' AND Password='$user_pass'";  
          
            $run=mysqli_query($dbcon,$check_user);  
          
            if(mysqli_num_rows($run))  
            {  
               

          
                $_SESSION['email']=$user_email;//here session is used and value of $user_email store in $_SESSION.  
           //header('Location: home.php');
                 echo "<script>window.open('home.php','_self')</script>";  
            }  
            else  
            {  
              echo "<script>alert('Email or password is incorrect!')</script>";  
              echo "<script>window.open('login.php','_self')</script>";  
            }  
        }  
       
        ?>


       <?php  
  
include("connect2.php");
session_start();
//make connection here  
if(isset($_POST['register']))  
{  
    $user_fname=$_POST['fname'];
$user_lname=$_POST['lname'];
    //here getting result from the post array after submitting the form.  
    $user_pass=$_POST['pass'];//same  
    $user_email=$_POST['email'];//same  
  
  
    if($user_fname=='')  
    {  
        //javascript use for input checking  
        echo"<script>alert('Please enter the name')</script>";  
exit();//this use if first is not work then other will not show  
    }  

     if($user_lname=='')  
    {  
        //javascript use for input checking  
        echo"<script>alert('Please enter the name')</script>";  
exit();//this use if first is not work then other will not show  
    }  
  
    if($user_pass=='')  
    {  
        echo"<script>alert('Please enter the password')</script>";  
exit();  
    }  
  
    if($user_email=='')  
    {  
        echo"<script>alert('Please enter the email')</script>";  
    exit();  
    }  
//here query check weather if user already registered so can't register again.  
    $check_email_query="select * from userlogin WHERE Email='$user_email'";  
    $run_query=mysqli_query($dbcon,$check_email_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";  
exit();  
    }  
//insert the user into the database.  
    $insert_user="insert into userlogin (Fname,Lname,Password,Email) VALUE ('$user_fname','$user_lname','$user_pass','$user_email')";  
    if(mysqli_query($dbcon,$insert_user))  
    {  
        
        $user_email=$_POST['email'];  
            $user_pass=$_POST['pass'];  
          
            $check_user="select * from userlogin WHERE Email='$user_email' AND Password='$user_pass'";  
          
            $run=mysqli_query($dbcon,$check_user);  
          
            if(mysqli_num_rows($run))  
            {  
               

          
                $_SESSION['email']=$user_email;//here session is used and value of $user_email store in $_SESSION.  
           //header('Location: home.php');
                 echo "<script>window.open('home.php','_self')</script>";  
            }  
            else  
            {  
              echo "<script>alert('Signup Unsuccessful!')</script>";  
              echo "<script>window.open('login.php','_self')</script>";  
            }  
    }  
  
  
  
}  
  
?>