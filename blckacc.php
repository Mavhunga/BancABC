<?php
include ("include/connection.php");

if(isset($_POST['reg_up'])){

  $name = htmlentities(mysqli_real_escape_string($con,$_POST['user_name']));
  $idnum = htmlentities(mysqli_real_escape_string($con,$_POST['idnum']));
  $address = htmlentities(mysqli_real_escape_string($con,$_POST['adre']));
  $phone = htmlentities(mysqli_real_escape_string($con,$_POST['phon']));
  $acc = htmlentities(mysqli_real_escape_string($con,$_POST['acc']));
  $user = htmlentities(mysqli_real_escape_string($con,$_POST['user']));
  $pass = htmlentities(mysqli_real_escape_string($con,$_POST['pas']));
  $gender = htmlentities(mysqli_real_escape_string($con,$_POST['gend']));
  $date= htmlentities(mysqli_real_escape_string($con,$_POST['da']));
  $blnc = htmlentities(mysqli_real_escape_string($con,$_POST['balance']));



  $insert = "INSERT INTO blockeduser (name,id_num	,address,phone,account_number,username,pass,gender,date_,balance)
                           VALUES ('".$name."','".$idnum."','".$address."','".$phone."',
    '".$acc."','".$user."','".$pass."','".$gender."','".$date."','".$blnc."')";
  $query = mysqli_query($con, $insert);


    if ($query) {
      //  echo "<script>alert('Congratulation .$name, account has been created successfully')</script>";

        $inse = "DELETE FROM clients WHERE id='$id'";
        $query = mysqli_query($con, $inse);

          if ($query) {
              echo "<script>alert('Congratulation account has been blocked successfully')</script>";
              echo "<script>window.open('clients.php','_self')</script>";
          }

    }

}



 ?>
