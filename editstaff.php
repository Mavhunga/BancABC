<?php
include ("include/connection.php");

if(isset($_POST['reg_up'])){

  $name = htmlentities(mysqli_real_escape_string($con,$_POST['user_name']));
  $pass = htmlentities(mysqli_real_escape_string($con,$_POST['user_pass']));
  $email = htmlentities(mysqli_real_escape_string($con,$_POST['user_email']));
  $position = htmlentities(mysqli_real_escape_string($con,$_POST['user_position']));
  $gender = htmlentities(mysqli_real_escape_string($con,$_POST['user_gender']));
  $address = htmlentities(mysqli_real_escape_string($con,$_POST['user_address']));
  $date = date("D-M-Y");
  $time = date("h:m:sa");
//  $password_hash = md5($pass);

if (strlen($pass)<5) {
  echo "<script>alert('Password should be minimum of 8 characters')</script>";
  exit();
}else {
  $insert = "UPDATE staff SET id= '".$id."',
                             name= '".$name."',
                            pass='".$pass."',
                             email='".$email."',
                             positon='".$position."',
                             gender='".$gender."',
                             address='".$address."',
                             date_='".$date."',
                             time_='".$time."'

                        WHERE id= '".$id."'";



    $query = mysqli_query($con, $insert);

    if ($query) {
        echo "<script>alert('Congratulation account has been updated successfully')</script>";
        echo "<script>window.open('viewstaff.php','_self')</script>";
    }
}

  }

 ?>
