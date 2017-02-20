<?php
session_start(); //  uvek u vrhu
include "connection.php";
$username = $_POST['username'];
$password = $_POST['password'];

// echo "$username $password";
$insert = "INSERT INTO users VALUES (null, '$username', '$password')";
$query = mysqli_query($db,$insert);

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($db,$sql);
$num_rows = mysqli_num_rows($result);
$fetch_id = mysqli_fetch_assoc($result)['username'];
// echo "$fetch_id";
if ($num_rows == 1) {
  $_SESSION['id'] = $fetch_id;
  header('Location: ../index.php');
}

 ?>
