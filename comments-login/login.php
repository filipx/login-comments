<?php
session_start();
if (isset($_SESSION['id'])) {
  $id = $_SESSION['id'];
}else {
  $id = 'guest';
  $log = '<a href="register.php" class="btn btn-warning btn-block btn-lg">Register &raquo;</a>';
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
  <title>Login</title>
</head>
<body>
  <div class="jumbotron text-center">
    <h1>Log in <?php echo $id ?></h1>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-4 col-sm-offset-2">
        <form action="inc/incLogin.php" method="POST">
          <input type="text" name="username" placeholder="username" class="form-control"><br>
          <input type="text" name="password" placeholder="password" class="form-control"><br>
          <input type="submit" value="submit" class="btn btn-success form-control">
        </form>
      </div>

      <div class="col-sm-2 col-sm-offset-1">
        <?php echo $log ?>
      </div>
    </div>
  </div>

</body>
</html>
