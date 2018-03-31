<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'include/functions.php';
if(isset($_POST['submit'])){
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

if(!empty($name) && !empty($prezime)&&!empty($username)&&!empty($password)){
    addUsers($name,$lastname,$username,$password, $email);
    echo "Uspešna registracija";
    header("Location: login.php");
    echo 'Nije prazno';
    } else{
     echo '<div class=" container alert alert-danger">
            <strong>Neuspesno!!</strong> Nisu uneseni svi podaci!.
          </div>';
    }
}
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
          width: 500px;
      }
  </style>
</head>
<body>

    
    
<div class="container">
    <h2 class="text-center">Registration Form</h2>
  <form action="register.php" method="POST">
      <div class="form-group">
      <label for="email">Name:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="name">
     </div>
        <div class="form-group">
      <label for="email">Last Name:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="lastname">
     </div>
      <div class="form-group">
      <label for="email">Username:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="username">
     </div>
    <div class="form-group">
      <label for="email">Password:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="password">
    </div>
    <div class="form-group">
      <label for="pwd">Email:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="email">
    </div>
      <button type="submit" name="submit" class="btn btn-default">Submit</button>
      <a href="index.php" class=" btn btn-default">Back</a>
  </form>
</div>

</body>
</html>







