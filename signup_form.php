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
  <?php include 'login_header.php';?>
  <div class="box">
    <div id="verticalSpace">
  <form enctype="multipart/form-data" method="post" action="signup_process.php" id="signup">
    <div class="header">
        <h3>Sign Up</h3>
    </div>
    <div class="sep"></div>
    <div class="inputs">
    <input type='text' name='first_name' placeholder="First Name" autofocus><br>
    <input type='text' name='last_name' placeholder="Last Name"><br>
    <input type='email' name=email placeholder="Email"><br>
    <input type='text' name='username' placeholder="Username"><br>
    <input type='password' name='password' placeholder="Password"><br>
    <input type='password' name='password_validation' placeholder="Validate Password"><br>
    <input type='text' name='store_number' placeholder="Store Number"><br>
  <input type="submit" value="Sign Up!">
</div>
</form>
</div>
</div>
</body>
</html>
