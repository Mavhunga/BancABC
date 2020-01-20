<?php
require "connection.php";

$sender_name = $_POST["sender_name"];
$sender_acc = $_POST["sender_acc"];
$receiver_name = $_POST["receiver_name"];
$receiver_ban = $_POST["receiver_ban"];
$receiver_ac = $_POST["receiver_ac"];
$amount = $_POST["amount"];
$date = date("D-M-Y");
$time = date("h:m:sa");



//check account if exits
$check_acc_number = "select * from clients where account_number='$sender_acc'";
$run_bank_acc_number = mysqli_query($con,$check_acc_number);
$check_bank = mysqli_num_rows($run_bank_acc_number);

if ($check_bank == 1) {
//  echo "Account exist";


  $balance = "SELECT balance FROM clients where account_number='$sender_acc'";
  $res = $con -> query($balance);

if  ($res -> num_rows > 0) {
while ($row = $res->fetch_assoc()) {
    $bal = $row['balance'];
    echo "Current Balance is :".$bal;

    if ($bal >= $amount) {
    echo " you can perform transaction";
    $sql = "INSERT INTO transaction (	s_name,s_account_number,r_name,r_bank	,r_ac_num,amount,date_,time_) VALUES('".$sender_name."','".$sender_acc."','".$receiver_name."','".$receiver_ban."','".$receiver_ac."','".$amount."','".$date."','".$time."')";
    $result = mysqli_query($con,$sql);
    if ($result) {
  //  echo " mari yabasa boss";
      //update balance
      $ans= $bal - $amount;
      $sq = "UPDATE clients SET balance = $ans WHERE account_number='$sender_acc'";
      if ($con->query($sq) === TRUE) {
        echo " Currence balance is :". $ans;
      }else {
        echo "Error updating record: " . $con->error;
      }
    }else {
    echo " mari yaramba kuenda murungu";
    }
    }else {
      echo "  you can not transact above the remaining float";
    }
}
}




}else {
  echo "Account do not exist";
}



 ?>
