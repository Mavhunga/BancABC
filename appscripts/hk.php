<?php

require "connection.php";

$user = $_POST["username"];
$pass = $_POST["password"];

$query = mysqli_query($con,"SELECT * FROM clients WHERE username='$user' AND pass='$pass' ");


if(mysqli_num_rows($query)>0){

  $row = mysqli_fetch_assoc($query);
  $name = $row[1];
  $code = "true";
  array_push($response,array("true"=>$code,"name"=>$name));
}


 ?>
