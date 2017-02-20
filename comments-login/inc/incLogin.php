<?php
session_start(); //  uvek u vrhu

include "connection.php";
$username = $_POST['username'];
$password = $_POST['password'];

// echo "$username $password";
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$query = mysqli_query($db,$sql);

$num_rows = mysqli_num_rows($query);
$fetch_id = mysqli_fetch_assoc($query)['username'];
// echo "$fetch_id";
if ($num_rows == 1) {
  $_SESSION['id'] = $fetch_id;
  echo json_encode($_SESSION['id']);
  header('Location: ../index.php');
}

 ?>
