<?php
        include("connect2.php");  
          session_start();
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
                $_SESSION['pin']=$eid;//here session is used and value of $user_email store in $_SESSION.  
           //header('Location: home.php');
                $insertdate = "insert into postdate (Eyear,Emonth) VALUE ('$year','$month')";
               // $insertdate - "insert into postdate (Eyear,Emonth) VALUE ('$year','$month')"
                $run3=mysqli_query($dbcon,$insertdate);  
                 if(($run3)){
                 // echo "<script>window.open('events.php','_self')</script>";  
                  header('Location: home.php');
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


<?php
        include("connect2.php");  
         // session_start();
        if($_POST['erecord']=='Go') 
        {  
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
            // echo "hpise";
                  echo "<script>window.open('events.php','_self')</script>";  
            } 

             else  
            {  
              echo "<script>alert('Query is Unsuccessful! Try Again')</script>";  
             // echo "<script>window.open('login.php','_self')</script>";  
            }  
          }
           
        //}  
?>


