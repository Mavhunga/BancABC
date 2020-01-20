<?php
include 'include/connection.php';

if (isset($_GET['id'])) {

 $id = $_GET['id'];
 $sql = "SELECT * FROM clients WHERE id = $id";
 $result = mysqli_query($con,$sql);
 }
 ?>
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
  <!-- signin stylesheet  -->
  <link rel="stylesheet" href="css/signup.css">

  <body>
<div class="container-fluid">
<nav class="navbar navbar-default">
  <div class="navbar-header">
     <a class="navbar-brand" href="infor.php">Bank ABC</a>
     </div>
</nav>

<?php

while ($row = mysqli_fetch_assoc($result))
 {

 ?>

<div class="signup-form">
  <form class="" action="" method="post">
    <div class="form-header">
      <h2>Staff Details</h2>
      <p>Fill out this form for Our Staff</p>
    </div>
    <div class="form-group">
      <label for="">Name</label>
      <input type="text" name="user_name" class="form-control" value=<?php echo $row['name']; ?> >
    </div>
    <div class="form-group">
      <label for="">ID Number</label>
      <input type="text" name="idnum" class="form-control" value=<?php echo $row['id_num']; ?> >
    </div>
    <div class="form-group">
      <label for="">Address</label>
      <input type="text" name="adre" class="form-control" value=<?php echo $row['address']; ?> >
    </div>

    <div class="form-group">
      <label for="">Phone</label>
      <input type="text" name="phon" class="form-control" value=<?php echo $row['phone']; ?>><br>

    </div>
    <div class="form-group">
      <label for="">Account Number</label>
      <input type="text" name="acc" class="form-control" value=<?php echo $row['account_number']; ?>><br>

    </div>
    <div class="form-group">
      <label for="">Username</label>
      <input type="text" name="user" class="form-control" value=<?php echo $row['username']; ?>><br>

    </div>
    <div class="form-group">
      <label for="">Password</label>
      <input type="text" name="pas" class="form-control" value=<?php echo $row['pass']; ?>><br>

    </div>
    <div class="form-group">
      <label for="">Gender</label>
      <input type="text" name="gend" class="form-control" value=<?php echo $row['gender']; ?>><br>

    </div>
    <div class="form-group">
      <label for="">Date</label>
      <input type="text" name="da" class="form-control" value=<?php echo $row['date_']; ?>><br>

    </div>

    <div class="form-group">
      <label for="">Balance</label>
      <input type="text" name="balance" class="form-control" value=<?php echo $row['balance']; ?>><br>

    </div>


    <div class="form-group">
      <button type="submit" name="reg_up" class="btn btn-block btn-lg"> Block Account</button>
    </div>

         <?php  include("blckacc.php");  ?>
  </form>
<div class="text-center small" style="color:#fff;">
Go back <a href="clients.php"> Dashboard !!</a>
</div>
</div>
<?php
}
 ?>


</div>

<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>

  </body>
</html>
