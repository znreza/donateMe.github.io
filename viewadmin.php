<html>  
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>View Users</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>  
<style>  
    .login-panel {  
        margin-top: 80px;  
    }  
    .table {  
        margin-top: 50px;  
  
    }  
  
</style>  
  
<body>  
<div class="container">  
    <div class="row">
<li style= "width: 150px;
    height: 100px;"><a href="adminpost.php" class="round green">Post</a></li>
    <li style= "width: 150px;
    height: 100px;"><a href="login.php" class="round green">Delete Post</a></li>
<li style= "width: 150px;
    height: 100px;"><a href="login.php" class="round green">Edit Post</a></li>


</div>

<div class="table-scrol">  
    <h1 align="center">All the Users</h1>  
  
<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
  
  
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  
  
            <th>User Id</th>  
            <th>User Name</th>  
            <th>User E-mail</th>  
            <th>User Password</th>  
            <th>Delete User</th>  
        </tr>  
        </thead>  
  
        <?php  
        include("connect2.php");  
        $view_users_query="select * from userlogin";//select query for viewing users.  
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.  
  
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
            $user_id=$row[0];  
            $user_name=$row[1] . " " .$row[2];  
            $user_email=$row[3];  
            $user_pass=$row[4];  
  
  
  
        ?>  
  
        <tr>  
<!--here showing results in the table -->  
            <td><?php echo $user_id;  ?></td>  
            <td><?php echo $user_name;  ?></td>  
            <td><?php echo $user_email;  ?></td>  
            <td><?php echo $user_pass;  ?></td>  
            <td><a href="deleteuser.php?del=<?php echo $user_id ?>"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->  
        </tr>  
  
        <?php } ?>  
  
    </table>  
        </div>  
</div>  
  
 
</body>  
  
</html>