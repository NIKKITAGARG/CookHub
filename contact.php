<?php
if ($_SERVER ["REQUEST_METHOD"]=="POST"){
   include 'partials/_dbconnect.php';
   $email =$_POST["email"];
   $name = $_POST["name"];
   $message = $_POST["message"];

   $sql = "INSERT INTO `contact`(email, name, message) VALUES ('$email', '$name', '$message')";
   $result = mysqli_query($con, $sql);
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

<div class="container-fluid">
    <div class="row">
        <div class="col-md-7">
    <h1>LIVE SUPPORT</h1>
    <h3>24 hours | 7 days a week | 365 days a year Live Technical Support</h3>
    <p>Total Moisture and Available Moisture of Common Food Products. Food. Total Moisture (%) Available Moisture (Aw) Peppers. 92. 0.99. Broccoli. 91. 0.99. Oranges. 87. 0.99. Apples. 84. 0.98. Chicken, raw. 69. 0.99. Beef, raw. 73. 0.99. Beef, cooked. 60. 0.98. Chicken, cooked. 62. 0.91 to 0.98. Bread, commercial. 36. 0.94 to 0.96. Beef jerky. 23 0.80. Jams 30. 0.75 to 0.80. Cocoa. 7 to 10. 0.70. Peanut butter. 2. 0.70
    </p>
        </div>
        <div class="col-md-3">
            <img src="data:image/jpeg;base64,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" alt="">
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <h1>CONTACT US</h1>
        <form method="POST">
        <div class="form-group">
            
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" placeholder="Email" name="email" required pattern="[a-z0-9._%+_]+@[a-z0-9.-]+\.[a-z]{2,3}$">
  </div>
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
  </div>
  <div class="form-group">
    <label for="message">Message</label>
    <input type="text" class="form-control" id="message" style="height: 160px" placeholder="" name="message" required>
  </div>
 <div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
 </div>
       </form>
       </div>
        <div class="col-md-4">
           <h1>Company Information:</h1>
           <p>500 lorem ipsum Dolor sit,<br>22-56-2-9 Sit Amet lorem,<br>USA<br>Phone:(00)222 666 444<br>Fax:(000) 000 00 0<br> Email: info@mycompany.com <br> Follow on: Facebook, Twitter</p>

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