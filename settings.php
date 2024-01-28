<?php
$showAlert = false;
$err = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partials/_dbconnect.php';
    $password = $_POST["password"];
    $npassword = $_POST["npassword"];
    $cpassword = $_POST["cpassword"];
    $exists=false;
    if ($exists==false) {
        $sql = "INSERT INTO `passchng` ( password, npassword, cpassword) VALUES ('$password', '$npassword', '$cpassword')";
        $result = mysqli_query($con, $sql);
        if ($result && $npassword==$cpassword) {
            $showAlert = true;
        }
        if ($npassword!=$cpassword){
            $err=true;
        }
    }
}
if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $password = $_POST['password'];
  $email_search = "SELECT * FROM info WHERE password= '$password' ";
  $query = mysqli_query($con, $password_search);
  $password_count = mysqli_num_rows($query);
  if($password_count){
    $password_pass = mysqli_fetch_assoc($query);
    $db_pass = $password_pass['password'];
    $pass_decode = password_verify($password, $db_pass);
    if($pass_decode){
      echo "login successful";
    }
    else{ echo "Incorrect password";}
    

  }
  else{echo "Invalid Email";
  }}
  


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOOD STORE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid" style="background-color: black;">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">FOOD STORE</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
      </form>
      <ul class="nav navbar-nav navbar-right">                     
        <li><a href="/foodstore/cart.php"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Cart</a></li>           
        <li><a href="/foodstore/settings.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Settings</a></li>        
        <li><a href="/foodstore/logout.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</a></li>           
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </div>
</nav>
<?php
if ($showAlert) {
    echo '<div class="alert alert-success" role="alert">
<a href="/foodstore/index.php" class="alert-link">Your password has successfully changed.</a>
</div>';
}
if ($err) {
  echo '<div class="alert alert-danger" role="alert">
  <a href="/foodstore/settings.php" class="alert-link"> Your password do not match.</a></div>';
}
?>
<div class="container">
    <div class="row" style="margin-left: 100px;">
        <div class="col-sm-6 col-md-4">
        <h2>CHANGE PASSWORD</h2>
        <form method="POST">
        <div class="form-group">
           <label for="password"></label>
           <input type="password" class="form-control" id="password" placeholder="Old Password" name="password" required>
        </div>
        <div class="form-group">
           <label for="npassword"></label>
           <input type="password" class="form-control" id="npassword" placeholder="New Password" name="npassword" required>
        </div>
        <div class="form-group">
           <label for="cpassword"></label>
           <input type="password" class="form-control" id="cpassword" placeholder="Retype New Password" name="cpassword" required>
           <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <button type="submit" class="btn btn-primary btn-centre">Submit</button>
        </form>
        </div>
    </div>
</div>
</body>
</html>''