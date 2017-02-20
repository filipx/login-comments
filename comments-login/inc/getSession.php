<?php
// Uzimam samo name trenutno ulogovanog korisnika iz sesije
  session_start();
  if (isset($_SESSION['id'])) {
    $name = ['username'=>$_SESSION['id']];
    echo json_encode($name);
  }

 ?>
