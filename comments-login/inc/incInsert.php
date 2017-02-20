<?php
session_start();
// Ubacujem koment u bazu preko formData()
include "connection.php";
$comment = $_POST['comment'];
$name = $_POST['username'];
$date = $_POST['date'];

// echo "$comment $username $date";
$insert = "INSERT INTO comments VALUES (null, '$comment', '$name', '$date')";
$query = mysqli_query($db,$insert);

 ?>
