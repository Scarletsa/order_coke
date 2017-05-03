<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Order setup</title>
  <link href="style.css" rel="stylesheet" type="text/css">
  <link href="../bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Cookie|Cuprum' rel='stylesheet' type='text/css'>
</head>
<body>
<?php include 'logout_header.php';?>
<div class="box">
<div id="verticalSpace">
<form action='upload_process.php' method='POST' enctype='multipart/form-data'>
  <div class="header">
      <h3>Upload</h3>
  </div>
  <div class="sep"></div>
<input type='file' name='userFile'><br>
<input type='submit' name='upload_btn' value='Upload'>
</form>
</div>
</div>
</body>
</html>
