<?php

 $con = mysqli_connect("localhost" , "terryteck" , "pabha" ,"bancabc")
 or die("Connection was not established");

// Check connection
 if ($con->connect_error) {
     die("Connection failed: " . $con->connect_error);
 }
 //echo "Connected successfully";
 ?>
