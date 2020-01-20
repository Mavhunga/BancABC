<?php

require "connection.php";

$acc = $_POST["account"];



$sq = "SELECT * FROM clients WHERE account_number like '".$acc."';";
 $result = mysqli_query($con,$sq);

 if($result ->num_rows > 0){
   while ($row = mysqli_fetch_assoc($result))
    {
      // echo " account IntlBreakIterator";
    $name =  $row['name'];
    $idnum =  $row['id_num'];
    $address =  $row['address'];
    $phone =  $row['phone'];
    $account_number =  $row['account_number'];
    $username =  $row['username'];
    $pass =  $row['pass'];
    $gender =  $row['gender'];
    $date =  $row['date_'];
    $bal =  $row['balance'];

    $insert = "INSERT INTO blockeduser (name,id_num	,address,phone,account_number,username,pass,gender,date_,balance)
                             VALUES ('".$name."','".$idnum."','".$address."','".$phone."',
      '".$account_number."','".$username."','".$pass."','".$gender."','".$date."','".$bal."')";
    $query = mysqli_query($con, $insert);


      if ($query) {
        //  echo "<script>alert('Congratulation .$name, account has been created successfully')</script>";

          $inse = "DELETE FROM clients WHERE account_number='$account_number'";
          $query = mysqli_query($con, $inse);

            if ($query) {
                echo "Congratulation account has been blocked successfully";

            }else {
              echo "Cdololo";
            }

      }


    }
}else {
echo "hakuna account";
}
 ?>
