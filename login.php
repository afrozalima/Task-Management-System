<?php

if (isset($_POST['$username']) && isset($_POST['$password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $con=new mysqli('localhost','root','1234','form');
  if($con){
    //echo "Connection successful";
    $sql="insert into 'data' (username,password)values('$username','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "Data inserted successfully";
    }
    else{
        die(mysqli_error($con));
    }

    }
 else{
    die(mysqli_error($con));
 }
   
  /*  $validUsername = "user";
    $validPassword = "pass";

    if ($username === $validUsername && $password === $validPassword) {
        echo "Login successful!";
    } else {
        echo "Invalid username or password.";
    }*/
}


?>
