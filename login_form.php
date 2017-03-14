<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>Order setup</title>
  <link href="style.css" rel="stylesheet" type="text/css">
  <script language = "javascript" type="text/javascript" src = "setup_form.js.js"></script>
</head>

<body>
  <section>
    <p><img src='Dominos_banner.gif' alt="Domino's Banner" style="height:105px;"></p>
    <a href="order_form.php">Order Form</a> | <a href="update_inventory.php">Inventory</a> | <a href='login_form.php'>Log In</a>
  </section>
  <form enctype="multipart/form-data" method="post" action="setup.php">
    <p><input type='text' name='username' placeholder="Username"></p>
    <p><input type='text' name='password' placeholder="Password"></p>
  <input type="submit" value="Log In"></form>
<form method="post" action="signup_form.php"><input type="submit" value="Create Account"></form>
</body>
</html>
