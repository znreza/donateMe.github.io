<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ADMINPOST</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>
<div class ="container">
    
   <br>
<form action="events.php" method="post" >

Post Here: 
 <div id ="textarea" >
    <textarea rows="7" cols="100" id = "txt" style= "font-family: sans-serif" name="pin"  >

    </textarea>
    </div>
    <br>
   
<input class="textbox" style="width: 100px; height: 50px" type="submit" value="Post" name="post"  > 
</form>
<br>
 <form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload: <br>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>


</div>

</body>
</html>