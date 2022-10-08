<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
    <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <div class="container-fluid p-5 bg-primary text-green text-center"> 
</div><br> <br> <br> <br>
<div class="Container-fluid p-5  text-center"> 

<h2><a class="nav-link disabled" href="Software.html"> SOFTWARE  </a> </h2> <br> <br> <br>
<h2><a class="nav-link disabled" href="video/sender/sender.html"> Live Session</a> </h2>  <br> <br> <br>
<h2> <a class="nav-link disabled" href="lecture.html">Lecture </a></h2> 
</div>
</div>
</div>
</body>
</html>



