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

    <title>HOME</title>

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
                        <a href="about.php" class="dropdown-toggle" data-toggle="dropdown">About <b class="caret"></b></a>
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
                    <li><a href="about.php">About</a>
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
                <h2 id="C1" href="#1">Motivation</h2>
                <p>If you have ever wanted to bring smile on the face of any human being or creature and raise your hand 
                    towards them, then you have come to the right place. This is not only a page but a medium with a noble 
                    intention to distribute your care and assistance to the needy ones.</p>
            </div>

            <div class="col-md-9">
                <h2 id="C2" href="#2">Volunteers</h2>
                <p>If you have ever wanted to bring smile on the face of any human being or creature and raise your hand 
                    towards them, then you have come to the right place. This is not only a page but a medium with a noble 
                    intention to distribute your care and assistance to the needy ones.</p>
            </div>

            <div class="col-md-9">
                <h2 id="C3" href="#3">Archive</h2>
                <p>If you have ever wanted to bring smile on the face of any human being or creature and raise your hand 
                    towards them, then you have come to the right place. This is not only a page but a medium with a noble 
                    intention to distribute your care and assistance to the needy ones.</p>
            </div>
        </div>
        <!-- /.row -->

        <hr>

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
