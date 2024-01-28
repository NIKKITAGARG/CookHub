<?php
require 'partials/_dbconnect.php';
$email = $_POST['email'];
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+).*(\.[a-z]{2,3})$";
if (!preg_match($regex_email, $email)){
    echo "Incorrect email";
}$password = $_POST['password'];
$email = mysqli_real_escape_string($con, $email);





?>