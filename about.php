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
<?php if (isset($_SESSION['user']) && $_SESSION['user'] != NULL) {
  include 'logout_header.php';
} else {
  include 'login_header.php';
} ?>
  <div class="box">
  <div id="verticalSpace">
  <form enctype="multipart/form-data" method="post" action="login_process.php" id="signup">
    <div class="header">
        <h3>About</h3>
    </div>
    <div class="sep"></div>
    <br>
    <p>This site was created for a web development class as a project that
      demonstrates CRUD functionality with databases. It was also useful for
      doing the actual ordering for my store and using it as a test to get
      the projections dialed in. Please check out the guide page to see how
      this site should be used!</p>
  </div>
</div>
</body>
</html>
