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
  <section>
    <p><img src='Dominos_banner.gif' alt="Domino's Banner" style="height:105px;"></p>
    <a href="order_form.php">Order Form</a> | <a href="update_inventory.php">Inventory</a> | <a href='login_form.php'>Log In</a>
  </section>
  <div class="box">
  <div id="verticalSpace">
  <form enctype="multipart/form-data" method="post" action="login_process.php" id="signup">
    <div class="header">
        <h3>Log In</h3>
    </div>
    <div class="sep"></div>
    <div class="inputs">
    <input type='text' name='username' placeholder="Username" autofocus>
    <input type='text' name='password' placeholder="Password">
    <br>
    <input type="submit" value="Log In">
    <input type="button" value="Create Account" onclick="location.href='signup_form.php'";>
  </div>
  </form>
  </div>
</div>
</body>
</html>
