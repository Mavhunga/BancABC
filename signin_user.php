<?php
session_start();

include ("include/connection.php");

if (isset($_POST['sign_in'])) {

  $email = htmlentities(mysqli_real_escape_string($con,$_POST['email']));
  $pass = htmlentities(mysqli_real_escape_string($con,$_POST['pass']));


  $select_user = "SELECT id FROM staff WHERE email='$email' AND pass='$pass'";

  $query = mysqli_query($con,$select_user);
  $check_user = mysqli_num_rows($query);

  if($check_user == 1){


echo "<script>window.open('home.php?user_name=$name?email=$email','_self')</script>";
// echo $user_id = mysql_result($query,0,'id');


  }else{
    echo "
    <div class='alert alert-danger'><strong>Check your email and password.</strong></div>
         ";
  }


}




 ?>
