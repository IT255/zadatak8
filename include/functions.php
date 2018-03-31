<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'config.php';

//function addUsers($name, $lName, $userName, $pass, $email){
//    global $conn;
//    
//    $stmt = $conn->prepare("INSERT INTO users( name, lastname, username, password, email )  VALUES(?, ?, ?, ?, ?)");
//  try{
//    $stmt->execute(array( $name, $lName, $userName, md5($pass), $email));
//  }
//  catch(PDOException $e) {
//    echo $e->getMessage();
//  }
//}
//addUsers("Primer2", "Prex","ttt", "alex", "a@a.com");

function checkUsers($username, $pass){
      global $conn;
      $stmt = $conn->prepare(" SELECT * FROM users WHERE username = ? AND password = ?");
        try{
            $stmt -> execute(array($username, md5($pass)));
            //$sql = $stmt->fetchAll(PDO::FETCH_ASSOC); 
            if($stmt->fetchColumn() > 0){
                
                return 1;
            }else{
                echo 'No';
               
            }
        } catch (PDOException $ex) {
                echo $ex->getMessage();
        }
}

//checkUsers("ttt", "alex");

function checkIfUserExists($username){
     global $conn;
      $stmt = $conn->prepare(" SELECT * FROM users WHERE username = ?");
        try{
            $stmt -> execute(array($username));
            //$sql = $stmt->fetchAll(PDO::FETCH_ASSOC); 
            if($stmt->fetchColumn() > 0){
              
                return true;
            }else{
               
                return false;
            }
        } catch (PDOException $ex) {
                echo $ex->getMessage();
        }
}



function addUsers($name, $lName, $userName, $pass, $email){
    global $conn;
    
if(!checkIfUserExists($userName)){
    //global $conn;
    $stmt = $conn->prepare("INSERT INTO users( name, lastname, username, password, email )  VALUES(?, ?, ?, ?, ?)");
  try{
    $stmt->execute(array( $name, $lName, $userName, md5($pass), $email));
  }
  catch(PDOException $e) {
    echo $e->getMessage();
  }
    echo "Ne";
}else {
    echo 'Korisnik vec postoji!';
}
}


function checkUsernamePassword($username, $password){
      global $conn;
      $stmt = $conn->prepare(" SELECT * FROM users WHERE username = ? AND password = ?");
        try{
            $stmt -> execute(array($username, $password));
            //$sql = $stmt->fetchAll(PDO::FETCH_ASSOC); 
            if($stmt->fetchColumn() > 0){
               
                return 1;
            }else{
                
                return 0;
            }
        } catch (PDOException $ex) {
                echo $ex->getMessage();
        }
}


//addUsers("Primer","Primera","primer.primer","test123", "e@w.com");
//echo checkUsernamePassword("primer.primer","test123");
