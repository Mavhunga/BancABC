<?php
include 'include/connection.php';

$query = "select * from clients";
$result = mysqli_query($con,$query);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>View Staff-Banc ABC</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">

<script src="jquery-3.4.1.min.js"></script>
  <!-- Your custom styles (optional) -->

  <link rel="stylesheet" href="css/table.css">

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
  <div class="col-md-5"></div>
  <div class="col-md-6">
  <form class="" action="searchclient.php" method="post">
    <input type="text" name="txtid" value="" placeholder="enter id" required autocomplete="off" autofocus="TRUE">
    <div class="form-group">
      <button type="submit" name="search_client" class="btn btn-warning btn-lg">Search</button>
    </div>


  </form>

  </div>
</div>


<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10 table-responsive">
    <table class="table table-striped table-hover table-condensed " algin="centre">
      <thead>
        <h1 align="center" colour:white >Clients Members</h1>
      </thead>
      <tr>

      <th>ID</th>
      <th>NAME</th>
      <th>ID NUMBER</th>
      <th>ADDRESS</th>
      <th>PHONE</th>
      <th>ACCOUNT NUMBER</th>
      <th>USERNAME</th>
      <th>GENDER</th>
      <th>DATE</th>
        <th>BALANCE</th>
      </tr>

<?php
while ($row = mysqli_fetch_assoc($result))
 {
  # code...
 ?>
      <tr class="active" >
      <td><?php  echo $row['id']; ?></td>
      <td><?php  echo $row['name']; ?></td>
      <td><?php  echo $row['id_num']; ?></td>
      <td><?php  echo $row['address']; ?></td>
      <td><?php  echo $row['phone']; ?></td>
      <td><?php  echo $row['account_number']; ?></td>
      <td><?php  echo $row['username']; ?></td>
      <td><?php  echo $row['gender']; ?></td>
      <td><?php  echo $row['date_']; ?></td>
      <td><?php  echo $row['balance']; ?></td>
      </tr>
      <?php
}
       ?>

    </table>

  </div>
<div class="col-md-1"></div>
</div>

<a href="home.php"><button type="button" name="button" class="btn btn-success">Dasboard</button></a>
</div>

  </body>
</html>
