<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title><!doctype html>
    <!-- Required meta tags -->
  
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->

</head>
<body>
  <div class="container">
    <h1>modals in bootstrap</h1>
    <button class="btn btn-success" role="button" data-target="#mymodel" data-toggle="modal"> Open Signin</button>
  <div id="myModal" class="modal-fade">
    <div class="modal" id="mymodal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"></button>
            <h3 class="text-centre text-primary">Signup</h3>

          </div>
          <div class="modal-body">
            <h2>hgcxgj</h2>

          </div>
        </div>

      </div>

    </div>
    </div> 
  </div>
</body>
</html>







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