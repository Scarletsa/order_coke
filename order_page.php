<?php
session_start();
include 'logout_header.php';
include 'pull_data.php';
?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>Coke Order Form</title>
  <link href="style.css" rel="stylesheet" type="text/css">
  <link href='http://fonts.googleapis.com/css?family=Cookie|Cuprum' rel='stylesheet' type='text/css'>
</head>

<body>
  <div class="box">
  <div id="verticalSpace">
    <?php
    include 'display_uploads.php';
    include 'scan.php';
    include 'choose_form.php';
    ?>
</div>
</div>
</body>
</html>
