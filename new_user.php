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

  if($name == ''){
  echo "<script>alert('We can not verify your name')</script>";
}
if (strlen($pass)<5) {
  echo "<script>alert('Password should be minimum of 8 characters')</script>";
  exit();
}


$check_email = "select * from staff where email='$email'";
$run_email = mysqli_query($con,$check_email);

$check = mysqli_num_rows($run_email);

if($check==1){
    echo "<script>alert('Email already exists ,please try again !.')</script>";
      echo "<script>window.open('register.php','_self')</script>";
      exit();
}else {
  $insert = "INSERT INTO staff (name,pass,email,positon,gender,address,date_,time_)
                           VALUES ('".$name."','".$pass."','".$email."','".$position."',
    '".$gender."','".$address."','".$date."','".$time."')";

    $query = mysqli_query($con, $insert);

    if ($query) {
        echo "<script>alert('Congratulation .$name, account has been created successfully')</script>";
        echo "<script>window.open('register.php','_self')</script>";
    }else {

     //echo "Error: " . $query . "<br>" . $con->error;
     $insert = "INSERT INTO staff (name,pass,email,position,gender,address,date_,time_)
                              VALUES ('".$name."','".$pass."','".$email."','".$position."',
       '".$gender."','".$address."','".$date."','".$time."')";

       $query = mysqli_query($con, $insert);

       if ($query) {
           echo "<script>alert('Congratulation .$name, account has been created successfully')</script>";
           echo "<script>window.open('register.php','_self')</script>";
       }else {

      //  echo "Error: " . $query . "<br>" . $con->error;
        echo "<script>alert(' Registration failed ,try again !')</script>";
        echo "<script>window.open('register.php','_self')</script>";
       }

    }

}

  }

 ?>
