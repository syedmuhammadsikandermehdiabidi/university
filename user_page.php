<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="User/style.css">
     <link rel="icon" type="text/css" href="sikander.jpg">


</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>user</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <div class="Container-fluid p-5  text-center"> <br> <br> <br>

<h2> <a  href="video/receiver/receiver.html">Live session</a>  </h2>  <br> <br> <br>
<h2>  <a  href="lecture.html">Lecture </a>  </h2> 
<h2> <a href="Software.html"> software </h2>

</div>
   </div>
</div>



</body>
</html>