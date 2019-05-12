    <?php
/*include("connect2.php");
 //session_start();
  //echo "Hello";
// $eid =$_POST['pin'];  
$id = $eid;
//echo $eid;
$getpost="select * from eventrecord WHERE Eid='$id'";  
$postdate = date("Y-m-d") ;
/*$arrayDate = date_parse($date);
              $year = $arrayDate["year"]; 
              $month = $arrayDate["month"]; */
 /*$run=mysqli_query($dbcon,$getpost);
 while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
           
            $adminpost=$row[1] ;    
          // $postdate = $row[2];
            
            //echo "Hello";
        }
   
 */
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>EVENTS</title>

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


<?php
        include("connect2.php");  
        //  session_start();
        if(isset($_POST['post']))  
        {  
            $adpost=$_POST['pin'];  
            $date = date("Y-m-d") ;

           $arrayDate = date_parse($date);
              $year = $arrayDate["year"]; 
              $month = $arrayDate["month"]; 
            
            $getpost="insert into eventrecord (Epost,Edate) VALUE ('$adpost','$date')";    
          
            $run=mysqli_query($dbcon,$getpost);  
          
            if(($run))  
            {  
               
            $select = "select * from eventrecord WHERE Epost = '$adpost' ";
           $run2=mysqli_query($dbcon,$select);  

            if($row=mysqli_fetch_array($run2)) {
             // $getid = ;
              $eid = $row[0];
               // $_POST['pin']=$eid;//here session is used and value of $user_email store in $_SESSION.  
           //header('Location: home.php');
                $insertdate = "insert into postdate (Eyear,Emonth) VALUE ('$year','$month')";
                $run3=mysqli_query($dbcon,$insertdate);  
                 if(($run3)){
                 // echo "<script>window.open('events.php','_self')</script>";  
                 // header('Location: home.php');

                    $getpost="select * from eventrecord WHERE Eid='$eid'";  
$postdate = date("Y-m-d") ;
/*$arrayDate = date_parse($date);
              $year = $arrayDate["year"]; 
              $month = $arrayDate["month"]; */
 $run=mysqli_query($dbcon,$getpost);
 while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
           
            $adminpost=$row[1] ;    
          // $postdate = $row[2];
            
            //echo "Hello";
        }
            } 
           
          }
          }
       // }
            else  
            {  
              echo "<script>alert('Post is Unsuccessful! Try Again')</script>";  
             // echo "<script>window.open('login.php','_self')</script>";  
            }  
        }  
?>


    <body>

        <!-- Navigation -->
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
                            <a href="about.php" class="dropdown-toggle"  >About <b class="caret"></b></a>
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
                            <a href="blog.php" class="dropdown-toggle" >Blog <b class="caret"></b></a>
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
                </div>            <!-- /.navbar-collapse -->
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
        <!-- Page Content -->
        

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <br>
        <!-- Page Content -->
        <div class="container">

            <!-- Page Heading/Breadcrumbs -->
            <div class="row">
                <div class="col-lg-12">
                    
                    <ol class="breadcrumb">
                        <li><a href="events.php">Events</a>
                        </li>
                        <li class="active"><a href="index.php">All-in-one Donation Box</li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <!-- Content Row -->
            <div class="row">
                <!-- Sidebar Column -->
                <div class="col-md-3" >
                    <div class="list-group" >
                        <a href="winter.php" class="list-group-item">Winter Donation</a>
                        <a href="medical.php" class="list-group-item">Health & Medical</a>
                        <a href="education.php" class="list-group-item">Education</a>
                        <a href="child.php" class="list-group-item">Child Care</a>
                        <a href="animal.php" class="list-group-item">Pet & Animal</a>
                        <a href="volunteery.php" class="list-group-item">Volunteery</a>
                        <a href="others.php" class="list-group-item">Others</a>
                    </div>
                </div>
                <!-- Content Column -->
                <div class="col-md-9">
                    <h2>Bulletin</h2>
                   
                   
                   <p><?php echo $adminpost ?> </p>
                   <p><?php echo $postdate ?> </p>
                  

    <div>
      
                      <h2>Event Records</h2>  
    </div>
                </div>




            
            <div class="row">


     <form role = "form" method="POST" action="">       <!-- /.row -->
    <select name = "year" id = "select" >
        <option  style="display:none">Choose year</option>
        <option value="Y2016">2016</option>

      </select>

       
    <select name = "monthto" id = "select" >
        <option  style="display:none">To</option>
        <option value="1">January</option>
        <option value="2">February</option>
        <option value="3">March</option>
        <option value="4">April</option>
        <option value="5">May</option>
        <option value="6">June</option>
        <option value="7">July</option>
        <option value="8">August</option>
        <option value="9">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
      </select>

    <select name = "monthfrom" id = "select" >
    <option  style="display:none">From</option>
        <option value="1">January</option>
        <option value="2">February</option>
        <option value="3">March</option>
        <option value="4">April</option>
        <option value="5">May</option>
        <option value="6">June</option>
        <option value="7">July</option>
        <option value="8">August</option>
        <option value="9">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
      </select>
 
     <input  style="width: 50px; height: 30px" type="submit" value="Go" name="erecord" > 
    </form>
       </div>     
    </div>



<div class="table-responsive" ><!--this is used for responsive display in mobile and other devices-->  
  
  
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed" >  
        <thead>  
  
        <tr>  
  
            <th>Date</th>  
            <th>Post</th>  
             
        </tr>  
        </thead>  
  
        <?php  
        include("connect2.php");  
         if(isset($_POST['erecord'])) {
        $year=$_POST['year'];  
           $to = $_POST['monthto'];  
           $from = $_POST['monthfrom'];  
//echo $to;
//Echo $from;
         
            
            $getpost="select eventrecord.Epost, eventrecord.Edate FROM eventrecord INNER JOIN postdate
                      ON eventrecord.Eid = postdate.PEid WHERE Emonth BETWEEN '$to' AND '$from' ";    
          
            $run=mysqli_query($dbcon,$getpost);  
          
            if(($run))  
            {  
  
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
            //$user_id=$row[0];  
            $date=$row[1] ; 
            $post=$row[0];  
           // $user_pass=$row[4];  
  
  
  
        ?>  
  
        <tr>  
<!--here showing results in the table -->  
            
            <td><?php echo $date;  ?></td>  
            <td><?php echo $post;  ?></td>  
           
        </tr>  
  
        <?php }
        }
    }?> 

    


 
  
    </table>  
        </div>  

     <!-- Footer -->
           <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p style="font-size: 15px">Copyright &copy; Zarreen Naowal Reza 2016</p>
                    </div>
                </div>
            </footer>

        </div>
        <!-- /.container -->

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

    </body>

     

    </html>