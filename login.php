<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
include("include/functions.php");

if(isset($_POST['submit'])){
$username = ($_POST['username']);
$password = $_POST['password'];
if(!empty($username) && !empty($password)){
if(checkUsernamePassword($username,$password)){
$_SESSION['username'] = $username;
}else{
    echo '<div class=" container alert alert-danger">
            <strong>Wrong!!</strong>Wrong Username/Password Combination!!.
          </div>';
}
}else{
    echo '<div class=" container alert alert-danger">
            <strong>Wrong!!</strong> Please enter all fields!.
          </div>';
}
}
if(isset($_SESSION['username'])){
        echo '<div class=" container alert alert-success">
            <strong>Success!!</strong> You are logged in as ! "'.$_SESSION['username'].'"</div>';
        header("Location: index.php");
}else{
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
      .container{
          margin-top: 150px;
          width: 400px;
      }
  </style>
</head>
<body>
    <h1 class="text-center">Login Page</h1>
    <div class="container text-center">
        <div class="row">
<!--            <div class="col-md-6">-->
                <form action="login.php" method="POST">
      <div class="form-group">
          <label class="text-center" for="username">Username:</label>
          <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username">
     </div>
     
        <div class="form-group">
          <label class="text-center" for="password">Password:</label>
          <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
     </div>
   <button type="submit" name="submit" class="btn btn-default">Login</button>
   <a href="index.php" class=" btn btn-default">Back</a>
</form>
<!--            </div>-->
        </div>
    </div>
 
<?php
}
?>

 </body>
</html>
