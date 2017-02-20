<?php
session_start();
if (isset($_SESSION['id'])) {
  $id = 'Logged as <strong>'. $_SESSION['id'] .'</strong>';
  $log = '<a href="inc/incLogout.php" class="btn btn-info" >Logout</a>';
  $addComment = '<button class="add_comment btn btn-success btn-xs add_btn">Unesi komentar &raquo;</button>';
}else {
// header('Location: login.php');
$id = 'Welcome guest';
$log = '<a href="login.php" class="btn btn-success" >Login</a> <a href="register.php" class="btn btn-warning" >Register</a>';
$addComment = '';
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
  <title>Pictures and comments</title>
</head>
<body>
  <div class="jumbotron text-center">
    <h1><?php echo $id ?></h1>
    <?php echo $log ?>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-4 col-md-3">
        <div class="panel panel-primary comment_panel">
          <div class="panel-heading">
            <h2 class="panel-title">Moj grad
              <span class="pull-right">by Filip</span>
            </h2>
          </div>
          <div class="panel-body">
            <img src="images/picture-1.jpg" alt="Picture">
          </div>
          <div id="comments_field" class="panel-footer">
            <?php echo $addComment ?>

            <script id="template" type="comment/template">
              <article>
                <small><em>{{username}}</em></small><small class="pull-right"><time><em>{{date}}</em></time></small>
                <p>{{text_comment}}</p>
              </article>
            </script>

          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="js/main.js" charset="utf-8"></script>
</body>
</html>
