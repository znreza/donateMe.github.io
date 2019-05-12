	<?php
	   ob_start();
	   session_start();
	   require 'connect2.php';
	?>

	


	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ADMIN</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	      
	        <style>


           
    .login-panel {  
        margin-top: 80px;  
  }

      </style>  
	         
	         
	         
	     
	      
	   </head>
		
	   <body>
	      <div class = "container">
	      <h1>ALL-IN-ONE DONATION BOX</h1> 
	      <div >
	         
	         <?php
	            $msg = '';
	            
	            if (isset($_POST['login']) && !empty($_POST['username']) 
	               && !empty($_POST['password'])) {
					
	               if ($_POST['username'] == 'admin' && 
	                  $_POST['password'] == 'php123') {
	                  $_SESSION['valid'] = true;
	                  $_SESSION['timeout'] = time();
	                  $_SESSION['username'] = 'admin';

	                  header('Location: viewadmin.php');
	                  //echo 'You have entered valid use name and password';
	               }else {
	                  $msg = 'Wrong username or password';
	               }
	            }
	         ?>
	     </div>
	      </div> <!-- /container -->
	      
	      <div class = "container">
	      <div class="row">  
        <div class="col-md-4 col-md-offset-4">  
            <div class="login-panel panel panel-success"> 
            	<div class="panel-body">  
	         <form class = "form-signin" role = "form" 
	            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method = "POST">
	            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
	            <input type = "username" class = "form-control" 
	               name = "username" placeholder = "username = admin" 
	               required ></br>
	            <input type = "password" class = "form-control"
	               name = "password" placeholder = "password = php123" required>
	               <br><br>
	            <input class = "form-control"  type="submit"
	               name = "login" value = "Login"></input>

	         </form>
			
	         </div>
	         </div>
	         </div>
	     </div>


	      </div> 
	      
	   </body>
	</html>