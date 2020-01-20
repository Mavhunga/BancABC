
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Home-Banc ABC</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">

<script src="jquery-3.4.1.min.js"></script>
  <!-- Your custom styles (optional) -->

  <link rel="stylesheet" href="css/home.css">

  <body>

<div class="container-fluid">
<nav class="navbar navbar-default">
  <div class="navbar-header">
       <a class="navbar-brand" href="infor.php">Bank ABC</a>
     </div>
</nav>

<?php

$date = date("D-M-Y");
$time = date("h:m:sa");
 ?>

<div class="row">
<div class="col-md-6"><h4 class="d_label">Todays Date : <span class="label label-default"> <?php echo $date ; ?> </span></h1> </div>
</div>


<div class="row">
<div class="col-md-6"><h4 class="d_label">Todays Time : <span class="label label-default">  <?php echo $time ; ?></span></h1> </div>
</div>


<div class="row">
  <div class="col-md-2"></div>
  <a href="register.php"><button class="btn btn-default div1 " type="button"> Register Staff</button></a>
  <a href="viewstaff.php"><button class="btn btn-primary div1" type="button" name="button">View Staff</button></a>
  <a href="viewclient.php"><button class="btn btn-success div1" type="button" name="button">View Clients</button></a>
  <div class="col-md-4"></div>
</div>

<div class="row">
  <div class="col-md-2"></div>
  <a href="clients.php"><button class="btn btn-info    div1" type="button" name="button">Block User</button></a>
  <a href="transactions.php"><button class="btn btn-warning div1" type="button" name="button">Transaction Histroy</button></a>
  <a href="generateAcc.php"><button class="btn btn-danger  div1" type="button" name="button">Generate Accounts</button></a>
  <div class="col-md-4"></div>
</div>


<div class="row">
  <div class="col-md-2"></div>
  <a href="saff.php"><button class="btn btn-info    div1" type="button" name="button">Staff</button></a>
  <a href="report.php"><button class="btn btn-warning div1" type="button" name="button">Reports</button></a>
    <a href="viewblockedacc.php"><button class="btn btn-danger div1" type="button" name="button">Blocked Accounts</button></a>

  <div class="col-md-4"></div>
</div>


</div>

  </body>
</html>
