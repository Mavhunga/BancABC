<?php
include 'include/connection.php';

if(isset($_POST['search_staff']))
{

 $email = htmlentities(mysqli_real_escape_string($con,$_POST['txtemail']));


 $query = "SELECT * FROM staff where email = '$email'" ;
$result = mysqli_query($con,$query);
}
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
  <div class="col-md-1"></div>
  <div class="col-md-10 table-responsive">
    <table class="table table-striped table-hover table-condensed " algin="centre">
      <thead>
        <h1 align="center" colour:white >Search Result</h1>
      </thead>
      <tr>

      <th>ID</th>
      <th>Name</th>
      <th>Email Address</th>
      <th>Position</th>
      <th>Gender</th>
      <th>Address</th>
      <th>Date</th>
      <th>Time</th>
      </tr>

<?php
if($result ->num_rows > 0){
  while ($row = mysqli_fetch_assoc($result))
   {
    # code...
   ?>
        <tr class="active" >
        <td><?php  echo $row['id']; ?></td>
        <td><?php  echo $row['name']; ?></td>
        <td><?php  echo $row['email']; ?></td>
        <td><?php  echo $row['positon']; ?></td>
        <td><?php  echo $row['gender']; ?></td>
        <td><?php  echo $row['address']; ?></td>
        <td><?php  echo $row['date_']; ?></td>
        <td><?php  echo $row['time_']; ?></td>
        </tr>
        <?php
  }

}else{
  echo "<script>alert('Sorry no record found')</script>";
  echo "<script>window.open('viewstaff.php','_self')</script>";
}

       ?>

    </table>

  </div>
<div class="col-md-1"></div>
</div>

<a href="viewstaff.php"><button type="button" name="button" class="btn btn-success">Dasboard</button></a>
</div>

  </body>
</html>
