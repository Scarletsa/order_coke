<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>Order setup</title>
  <link href="style.css" rel="stylesheet" type="text/css">
  <link href="../bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Cookie|Cuprum' rel='stylesheet' type='text/css'>
</head>
<body>
<?php
if (isset($_SESSION['user']) && $_SESSION['user'] != NULL) {
  include 'logout_header.php';
} else {
  include 'login_header.php';
} ?>
  <div class="box">
  <div id="verticalSpace">
  <form enctype="multipart/form-data" method="post" action="login_process.php" id="signup">
    <div class="header">
        <h3>Guide</h3>
    </div>
    <div class="sep"></div>
  </div>
</div>
</body>
</html>
