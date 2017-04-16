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
    <p>What day of the week do you place your delivery?
      <select name="order-day" id="order-day">
        <option value="Monday">Monday</option>
        <option value="Tuesday">Tuesday</option>
        <option value="Wednesday">Wednesday</option>
        <option value="Thursday">Thursday</option>
        <option value="Friday">Friday</option>
        <option value="Saturday">Saturday</option>
        <option value="Sunday">Sunday</option>
      </select></p>

    <p>What day of the week does the product get delivered?
      <select name="delivery-day" id="delivery-day">
        <option value="Monday">Monday</option>
        <option value="Tuesday">Tuesday</option>
        <option value="Wednesday">Wednesday</option>
        <option value="Thursday">Thursday</option>
        <option value="Friday">Friday</option>
        <option value="Saturday">Saturday</option>
        <option value="Sunday">Sunday</option>
      </select></p>

      <!--
      <div class="container">
      <div class="contr"><h2>Select a file to set up inventory and click Upload</h2></div>
      <div class="upload_form_cont">
      <form id="upload_form" enctype="multipart/form-data" method="post" action="upload.php">
      <div>
      <div><input type="file" name="inventory_upload" id="inventory_upload" onchange="fileSelected();" /></div>
      </div>
      <div>
      <input type="button" value="Upload" onclick="startUploading()" />
      </div>
      <div id="fileinfo">
      <div id="filename"></div>
      <div id="filesize"></div>
      <div id="filetype"></div>
      <div id="filedim"></div>
      </div>
      <div id="error">You sho uld select valid image files only!</div>
      <div id="error2">An error occurred while uploading the file</div>
      <div id="abort">The upload has been canceled by the user or the browser dropped the connection</div>
      <div id="warnsize">Your file is very big. We can't accept it. Please select more small file</div>
      <div id="progress_info">
      <div id="progress"></div>
      <div id="progress_percent">&nbsp;</div>
      <div class="clear_both"></div>
      <div>
      <div id="speed">&nbsp;</div>
      <div id="remaining">&nbsp;</div>
      <div id="b_transfered">&nbsp;</div>
      <div class="clear_both"></div>
      </div>
      <div id="upload_response"></div>
      </div>
      </form>
      <img id="preview" />
      </div>
    </div>
  -->

  <input type="submit" value="Sign Up!"><input type="button" value="Clear">
</div>
</form>
</div>
</div>
</body>
</html>
