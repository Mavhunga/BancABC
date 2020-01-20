<?php
include ("include/connection.php");

if(isset($_POST['btncreate'])){

  $name = htmlentities(mysqli_real_escape_string($con,$_POST['txtname']));
  $idn = htmlentities(mysqli_real_escape_string($con,$_POST['txtid']));
  $acc = htmlentities(mysqli_real_escape_string($con,$_POST['txtacc']));

  $date = date("D-M-Y");
  $time = date("h:m:sa");


  $insert = "INSERT INTO generateacc (name,id_num,account_number,date_,time_)
                           VALUES ('".$name."','".$idn."','".$acc."','".$date."','".$time."')";

    $query = mysqli_query($con, $insert);

    if ($query) {
        echo "<script>alert('Congratulation ,account has been created successfully')</script>";
        echo "<script>window.open('generateAcc.php','_self')</script>";
    }else{

      //  echo "Error: " . $query . "<br>" . $con->error;
        echo "<script>alert(' Registration failed ,try again !')</script>";
        echo "<script>window.open('register.php','_self')</script>";
       }

    }





 ?>
