<?php

include 'include/connection.php';

$num_com = "SELECT * FROM clients";
$result = mysqli_query($con,$num_com);
$total = mysqli_num_rows($result);


echo "<script>alert('Total number of clients today is : $total Thank You !!!...')</script>";
 echo "<script>window.open('clients.php','_self')</script>";
$con->close();

 ?>
 
