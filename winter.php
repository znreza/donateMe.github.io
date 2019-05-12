

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Winter Donation</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<?php
include("connect2.php");
 session_start();
  //echo "Hello";
 $user_email=$_SESSION['email'];  
$name="select * from userlogin WHERE Email='$user_email'";  
 $run=mysqli_query($dbcon,$name);
 while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
           $user_id = $row[0];
            $user_name=$row[1] . " " .$row[2];    
           
            
            //echo "Hello";
        }
    
 
?>

<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="home.php">Home</a>
                    </li>
                     <li >
                        <a href="about.php" class="dropdown-toggle" >About <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li >
                                <a href='#C1'>Motivation</a>
                            </li>
                            <li>
                                <a href='#C2'>Volunteers</a>
                            </li>
                            <li>
                                <a href='#C3'>Archive</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="events.php">Events</a>
                    </li>
                    <li class="dropdown">
                        <a href="support.php" class="dropdown-toggle" >Support Us <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="volun.php">Volunteery</a>
                            </li>
                            <li>
                                <a href="fund.php">Fund Raising</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li >
                        <a href="blog.php" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li >
                                <a href="blog.php">Author List</a>
                            </li>
                            <li>
                                <a href="blog.php">Topic List</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li >
                        <a href="contact.php" >Contact </a>
                        
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <br>
<div class="container">
    <div class="row">
    <img src="logo2.jpg" style= "width: 100px; height: 100px" alt="">

    <div id="set">
        <li style= "width: 100px;
    height: 100px;"><a href="logout.php" class="round green">Logout<span class="round">See You Soon!!</span></a></li>
</div>
</div>
</div>
<br>
<div class = "container">
    <div id ="set">
<p><?php echo $user_name; ?></p>
</div>
</div>
<br>
 <div class="container">

<div class="row">
            <div class="col-lg-12">
                
                <ol class="breadcrumb">
                    <li class="active"><a href="index.php">All-in-one Donation Box</a></li>
                    
                    <li><a href="winter.php">Winter Donation</a>
                    </li>
                    
                </ol>
            </div>
        </div>

                   
                       
               
                <h2>Winter Donation</h2>
                <p>If you have ever wanted to bring smile on the face of any human being or creature and raise your hand 
                    towards them, then you have come to the right place. This is not only a page but a medium with a noble 
                    intention to distribute your care and assistance to the needy ones.</p>
            
     

</div>


<div class="container">
    <form action="" method="POST">
        <table>
     <div id ="textarea" name = "textlikho">
   <tr><td colspan="5"> <textarea name="comment" rows="7" cols="100" id = "txt" style= "font-family: sans-serif"  >

    </textarea></td></tr>
    </div>
    <br>
    <tr><td colspan="2"><input class= "textbox" type="submit" id="#shareButton" name = "submit" style="font-size: 25px; color: black" value="Comment"></td></tr>
</table>
</form>
<br>


<?php
include("connect2.php");
 if(isset($_POST['submit'])) {
$name=$user_name;
$comment=$_POST['comment'];
$id = $user_id;
$postdate = date("Y-m-d") ;
//$submit=$_POST['submit'];
//if($submit)
//{
if($comment)
{
$insert="INSERT INTO userpost (UserId,Upost,Udate) VALUES ('$id','$comment','$postdate') ";
 $run=mysqli_query($dbcon,$insert);  
 if($run)
 {
//echo "<meta HTTP-EQUIV='REFRESH' content='0; url=index2.php'>";
    $getquery="SELECT * FROM userpost ORDER BY '$id'";
    $run2=mysqli_query($dbcon,$getquery);  
          
          
while($row=mysqli_fetch_array($run2))
{
//$id=$rows['id'];
//$name=$row[0];
$comment=$row[1];
echo $name . '<br/>' . '<br/>' . $comment . '<br/>' . '<br/>' . $postdate . '<br/>' . '<br/>' .'<hr size="1"/>'; 
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
</div>
<script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

        
</body>



</html>

