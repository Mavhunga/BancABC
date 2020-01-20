<?php

require "connection.php";


// $user = $_POST["username"];
// $pass = $_POST["password"];


  $sql = "SELECT * FROM clients WHERE username='Taffy' AND pass='123456'";
  $results = mysqli_query($con,$sql);

 

  if (mysqli_num_rows($results) > 0) {

 echo "true";

  }else{

 echo "fail";

  }



 ?>
