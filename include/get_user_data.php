<?php
//$con = mysqli_connect("localhost" , "terryteck" , "pabha" ,"mychat");
include 'connection.php';
$user = "SELECT * FROM clients";

$run_user = mysqli_query($con,$user);

  $row = mysqli_fetch_array($run_user);

while ($row_user=mysqli_fetch_array($run_user)) {
  $name = $row['name'];
  $email = $row['email'];
  $meter_number = $row['meter_number'];
  $address = $row['address'];

echo $name ;
echo $email;
echo $meter_number;
echo $address;


}

 ?>
