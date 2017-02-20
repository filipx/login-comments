<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
  <title>Register</title>
</head>
<body>
  <div class="jumbotron text-center">
    <h1>Register</h1>
    <a href="login.php" class="btn btn-success" >&laquo; Login</a>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-4 col-sm-offset-2">
        <form action="inc/incRegister.php" method="POST">
          <input type="text" name="username" placeholder="username" class="form-control"><br>
          <input type="text" name="password" placeholder="password" class="form-control"><br>
          <input type="submit" value="Register" class="btn btn-warning form-control">
        </form>
      </div>

      <div class="col-sm-4">
        <blockquote>
          <p>Please register, so you could carry on.</p>
        </blockquote>

      </div>
    </div>
  </div>

</body>
</html>
