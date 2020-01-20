<?php

require "connection.php";

$name = $_POST["name"];
$idnum = $_POST["idnum"];
$address = $_POST["address"];
$phone = $_POST["phoni"];
$acc = $_POST["acc"];
$user = $_POST["username"];
$pass = $_POST["password"];
$gender = $_POST["gender"];
$date = date("D-M-Y");
$time = date("h:m:sa");
$balance = "0";



$sq = "SELECT * FROM generateacc WHERE account_number = '$acc' AND name = '$name' ";
 $result = mysqli_query($con,$sq);
 if(mysqli_num_rows($result)>0)
  {

    $sq = "SELECT * FROM generateacc WHERE  id_num-'$idnum' ";
     $result = mysqli_query($con,$sq);
     if(mysqli_num_rows($result)>0)
      {
        //echo "account is threr";

        $sql = "INSERT INTO clients (name	,id_num	,address	,phone	,account_number,	username	,pass,	gender	,date_,balance) VALUES('".$name."','".$idnum."','".$address."','".$phone."','".$acc."','".$user."' ,'".$pass."','".$gender."','".$date."','".$balance."')";

        if(mysqli_query($con,$sql)){
         echo "Account Successfully Created..";
       }else {
          echo "Registration failed...Contact Service Provider";
         }

      }

  }else{
echo "Sorry Account Does Not Exist";
  }





 ?>
