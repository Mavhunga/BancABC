<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Login-Bank ABC</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="css/signin.css">
  <body>


    <div class="signin-form">
      <form class="" action="" method="post">
        <div class="form-header">


          <h2>Sign In</h2>
          <p>Login to BAnk ABC</p>
        </div>
        <div class="form-group">
          <label for="">Email</label>
          <input type="email" name="email" class="form-control" placeholder="example@site.com" autocomplete="on" required>
        </div>
        <div class="form-group">
          <label for="">Password</label>
          <input type="password" name="pass" class="form-control" placeholder="password" autocomplete="on" required>
        </div>
        <div class="small">
          Forgot Password ? <a href="forgot_pass.php">Click Here !!!</a>
        </div><br>
        <div class="form-group">
          <button type="submit" name="sign_in" class="btn btn-block btn-lg">Sign in</button>
        </div>
     <?php  include ("signin_user.php");  ?>
      </form>
  <div class="text-center small" style="color:#fff;">
    Don't have an Account?<a href="signup.php">Create one</a>
  </div>
    </div>


  </body>
</html>
