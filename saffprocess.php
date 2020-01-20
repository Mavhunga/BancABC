<?php
include 'include/connection.php';

if (isset($_GET['id'])) {

 $id = $_GET['id'];
 $sql = "SELECT * FROM staff WHERE id = $id";
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
      <label for="">Username</label>
      <input type="text" name="user_name" class="form-control" value=<?php echo $row['name']; ?> >
    </div>
    <div class="form-group">
      <label for="">Password</label>
      <input type="text" name="user_pass" class="form-control" value=<?php echo $row['pass']; ?> >
    </div>
    <div class="form-group">
      <label for="">Email Address</label>
      <input type="email" name="user_email" class="form-control" value=<?php echo $row['email']; ?> >
    </div>
    <div class="form-group">
      <label for="">Position</label>
    <select class="form-control" name="user_position" value=<?php echo $row['position']; ?> >
      <option disabled="">Select a Position</option>
      <option>Admin</option>
      <option>Receiptionist</option>
      <option>Human Resource</option>
      <option>Accounts</option>
      <option>IT Support</option>
    </select>
    </div>
    <div class="form-group">
      <label for="">Gender</label>
    <select class="form-control" name="user_gender" value=<?php echo $row['gender']; ?> >
      <option disabled="">Select Gender</option>
      <option>Male</option>
      <option>Female</option>
      <option>Others</option>
    </select>
    </div>
    <div class="form-group">
      <label for="">Address</label>
      <input type="text" name="user_address" class="form-control" value=<?php echo $row['address']; ?>><br>

    </div>


    <div class="form-group">
      <button type="submit" name="reg_up" class="btn btn-block btn-lg"> Edit</button>
    </div>

         <?php  include("editstaff.php");  ?>
  </form>
<div class="text-center small" style="color:#fff;">
Go back <a href="saff.php"> Dashboard !!</a>
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
