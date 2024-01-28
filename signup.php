<?php
$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partials/_dbconnect.php';
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $contact = $_POST["contact"];
    $city = $_POST["city"];
    $address = $_POST["address"];

    $existSql = "SELECT * FROM `info` WHERE email = '$email' ";
    $result = mysqli_query($con, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if ($numExistRows > 0) {
        $showError = "User Already Exists";
    }
    $exists=false;
    if ($exists==false) {
        $sql = "INSERT INTO `info` ( name, email, password, contact, city, address) VALUES ('$name', '$email', '$password', '$contact', '$city', '$address')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            $showAlert = true;
        }
    }
}
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
        <li><a href="/foodstore/login.php"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Login</a></li>          
        <li><a href="/foodstore/signup.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Sign Up</a></li>           
        <li><a href="/foodstore/contact.php"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> Contact Us</a></li>        
        <li><a href="/foodstore/about.php"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span> About Us</a></li>           
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </div>
</nav> 
<?php
if ($showAlert) {
    echo '<div class="alert alert-success" role="alert">
<a href="#" class="alert-link">Your account is created and you can login</a>
</div>';
}

if ($showError){
  echo '<div class="alert alert-danger" role="alert">
  <a href="#" class="alert-link">Error! User Already Exists</a></div>';
}
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6 col-md-5">
            <img src="https://tse4.mm.bing.net/th?id=OIP.-Nnajj3-Qnuu5uWZSHjMhQAAAA&pid=Api&P=0&w=1000&h=600" alt="">
        </div>

        <div class="col-sm-6 col-md-4">
            <h1>SIGN UP</h1>
            <form method="POST">
                 <div class="form-group">
                    <label for="name"></label>
                    <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
                 </div>
                 <div class="form-group">
                    <label for="email"></label>
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email" required pattern="[a-z0-9._%+_]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                 </div>
                 <div class="form-group">
                    <label for="password"></label>
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                 </div>
                 <div class="form-group">
                    <label for="contact"></label>
                    <input type="tel" class="form-control" id="contact" placeholder="Contact" name="contact" required pattern=".{6,}">
                 </div>
                 <div class="form-group">
                    <label for="city"></label>
                    <input type="text" class="form-control" id="city" placeholder="City" name="city" required>
                 </div>
                 <div class="form-group">
                    <label for="address"></label>
                    <input type="text" class="form-control" id="address" placeholder="Address" name="address" required>
                 </div>
                 <button type="submit" class="btn btn-primary btn-centre">Submit</button>
            </form>
        </div>
    </div>
</div>
          
  <div class="container-fluid" style="color: white; background-color: black; outline: 2px solid black;">
    <div class="row">
      <div class="col-md-4" ><h5>Information</h5><a href="/foodstore/about.php">About Us</a><br>
         <a href="/foodstore/contact.php">Contact Us</a></div>    
      <div class="col-md-4" ><h5>My Account</h5><h6>Login <br> Sign Up</h6></div>   
      <div class="col-md-4" ><h5>Contact Us</h5><h6>91-9988776655</h6></div>     
    </div>
  </div>
</body>
</html>