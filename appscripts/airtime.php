<?php

require "connection.php";

$acc = $_POST["accoutn"];
$phone = $_POST["number"];
$amnt = $_POST["amount"];



//check account if exits
$check_acc_number = "select * from clients where account_number='$acc'";
$run_bank_acc_number = mysqli_query($con,$check_acc_number);
$check_bank = mysqli_num_rows($run_bank_acc_number);

if ($check_bank == 1) {
  //  echo "Account exist";
  $balance = "SELECT balance FROM clients where account_number='$acc'";
  $res = $con -> query($balance);

if ($res -> num_rows > 0) {
  while ($row = $res->fetch_assoc()) {
    $bal = $row['balance'];
    echo "Current Balance is :".$bal;
if ($bal >= $amnt) {
//  echo " you can perform transaction";
echo "You have Successfully bought Airtime :".$amnt ;
    $ans= $bal - $amnt;
      $sq = "UPDATE clients SET balance = $ans WHERE account_number='$acc'";
      if ($con->query($sq) === TRUE) {
        echo " Current balance is :". $ans;
      }else {
        echo "Error updating record: " . $con->error;

}
}
}
}
}


 ?>
