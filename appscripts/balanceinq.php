<?php

require "connection.php";

$acc = $_POST["account"];



$sq = "SELECT * FROM clients WHERE account_number like '".$acc."';";
 $result = mysqli_query($con,$sq);

 if($result ->num_rows > 0){
   while ($row = mysqli_fetch_assoc($result))
    {
      // echo " account IntlBreakIterator";
      echo $row['balance'];
    }
}else {
echo "hakuna account";
}
 ?>
