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
<div class="container" style="margin-left: 500px; margin-right: 500px;">
<div class="table-bordered">
<table class="table table-bordered">
  <div class="row">
    <div class="col-sm-6 col-md-3">
        <h3>Item number</h3>
    </div>
    <div class="col-sm-6 col-md-3">
        <h3>Price</h3>
    </div>
  </div>
</table>
</div>
</div>
</body>
</html>