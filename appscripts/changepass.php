<?php

require "connection.php";

$account = $_POST["accoutn"];
$oldpas = $_POST["oldpass"];
$newpass = $_POST["newpass"];


//check account if exits
$check_acc_number = "select * from clients where account_number='$account'";
$run_bank_acc_number = mysqli_query($con,$check_acc_number);
$check_bank = mysqli_num_rows($run_bank_acc_number);


//check account if exits
$check_pin = "select * from clients where pass='$oldpas'";
$run_bank_acc_pin = mysqli_query($con,$check_pin);
$check_pin = mysqli_num_rows($run_bank_acc_pin);


if ($check_bank == 1) {
   // echo "Account exist";

   if ($check_pin == 1) {

     $sq = "UPDATE clients SET pass = $newpass WHERE account_number='$account'";
     if ($con->query($sq) === TRUE) {
       echo " Acount Updated zvakanaka";
     }else {
       echo "pata dambudziko mumasai saindapota rambaimuchidzokorodza: " . $con->error;

}
   }else {
     echo "pin dololo";
   }

}else {
echo "account dololo";
}












 ?>
