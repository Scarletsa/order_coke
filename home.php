<?php
session_start();
?>
<!DOCTYPE HTML>
<HTML lang="en">
  <head>
    <meta charset="utf-8">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="../bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Cookie|Cuprum' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <?php if (isset($_SESSION['user']) && $_SESSION['user'] != NULL) {
      include 'logout_header.php';
    } else {
      header('Location: login_form.php');
    } ?>
    <div class="box">
    <div id="verticalSpace">
      <div class="header">
          <h3>Landing page!</h3>
      </div>
      <div class="sep"></div>
    Welcome to my site! Hope you have a good time walking around!

  </div>
  </div>
  </body>
</html>
