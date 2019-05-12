<?php
require 'connect2.php';
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>All-in-one Donation Box</title>

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


    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide ">
        <!-- Indicators -->
        <ol class="carousel-indicators ">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('slide6.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Sometimes a small thing you do can mean everything in another person's life</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('slide7.jpg');"></div>
                <div class="carousel-caption">
                    <h2>You only live once, but if you do it right once is enough</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('slide8.jpg');"></div>
                <div class="carousel-caption">
                    <h2>If you haven't charity in your heart, you have the worst kind of heart disease</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
<style>
figcaption { 
   
    text-align: left;
    color: black;
    margin-bottom: 5px;
}


</style>
<body>

    
  
     

    <br><br>
<center>
<img src="logo2.jpg" style= "width: 200px; height: 200px" alt="">
</center>
    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div >
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to All-in-one Donation Box
                </h1>
                 <p>If you have ever wanted to bring smile on the face of any human being or creature and raise your hand 
                    towards them, then you have come to the right place. This is not only a page but a medium with a noble 
                    intention to distribute your care and assistance to the needy ones.</p>
                      <hr>  
            </div>
            
        
           
           
        </div>
        <!-- /.row -->
<center>

<ul>
  <li style= "width: 100px;
    height: 100px;"><a href="login.php" class="round green">Login<span class="round">If you already have an account.</span></a></li>
  <li style= "width: 100px;
    height: 100px;"><a href="signup.php" class="round red">Sign Up<span class="round">Create an account of your own. </span></a></li>
    
</ul> 

</center>
        <!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Choose Your Categories</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="winter.php">
                    <img class="img-responsive img-portfolio img-hover" src="wintercr.jpg" alt="Winter Donation">
                <figcaption>Winter Aid</figcaption>

                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="medical.php">
                    <img class="img-responsive img-portfolio img-hover" src="medcr.jpg" alt="Health">
                <figcaption>Health and Medical</figcaption>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="education.php">
                    <img class="img-responsive img-portfolio img-hover" src="teachingcr.jpg" alt="">
                    <figcaption>Education</figcaption>
                </a>
            </div>
            
            
            <div class="col-md-4 col-sm-7">
                <a href="animal.php">
                    <img class="img-responsive img-portfolio img-hover" src="petcr.jpg" alt="">
                    <figcaption>Animal Care</figcaption>
                </a>
            </div>

            <div class="col-md-4 col-sm-6">
                <a href="child.php">
                    <img class="img-responsive img-portfolio img-hover" src="childcr.jpg" alt="">
                    <figcaption>Child Care</figcaption>
                </a>
            </div>





            <div class="col-md-4 col-sm-6">
                <a href="volunteery.php">
                    <img class="img-responsive img-portfolio img-hover" src="voluncr.jpg" alt="">
                    <figcaption>Volunteery</figcaption>
                </a>
            </div>

            
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        
        <!-- /.row -->


        <!-- Call to Action Section -->
       

      

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

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
