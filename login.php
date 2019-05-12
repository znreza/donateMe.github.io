        <?php  
        session_start();//session starts here  
         require 'connect2.php'; 
        ?>  
          
          
          
        <html>  
        <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="">

            <title>Log In</title>

            <!-- Bootstrap Core CSS -->
            <link href="css/bootstrap.min.css" rel="stylesheet">

            <!-- Custom CSS -->
            <link href="css/modern-business.css" rel="stylesheet">

            <!-- Custom Fonts -->
            <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 



        <style>  
            .login-panel {  
                margin-top: 150px;  
          }
        </style>  
          
        <body>  
          
          
 

        <div class="container">  
            <div class="row">  
                <div class="col-md-4 col-md-offset-4">  
                    <div class="login-panel panel panel-success">  
                        <div class="panel-heading">  
                            <h3 class="panel-title">Log In</h3>  
                        </div>  
                        <div class="panel-body">  
                           
                            <form role="form" method="post" action="verifyId.php">  
                                <fieldset>  
                                    <div class="form-group"  >  
                                        <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>  
                                    </div>  
                                    <div class="form-group">  
                                        <input class="form-control" placeholder="Password" name="pass" type="password" value="">  
                                    </div>  
          
          
                                   <input class="btn btn-lg btn-success btn-block" type="submit" value="Login" name="login" >  
          
                                    <!-- Change this to a button or input when using this as a form -->  
                                  <!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->  
                                </fieldset>  
                            </form> 
                          
                        </div>  
                    </div>  
                </div>  
            </div>  
        </div>  
          
          
        </body>  
          
        </html>  
          
       