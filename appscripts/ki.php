<<?php

require "connection.php";

// $user = $_POST["username"];
// $pass = $_POST["password"];


$query = mysqli_query($con,"SELECT * FROM clients WHERE username='taffy' AND pass='123456' ");

if (mysqli_num_rows($query)) {

  $data = mysqli_fetch_assoc($query);

  $name = $data["name"];
  $account_number = $data["account_number"];
  // $id_number = $data["id_number"];
  // $addres= $data["address"];
  // $phone = $data["phone"];
  // $balance = $data["balance"];


  echo json_encode(["status"=>"ok","message"=>["name"=>$name],["account_number"=>$account_number]]);

}else{



  echo json_encode(["status"=>"no"]);
}



exit();

 ?>
