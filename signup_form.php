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
    <a href="order_form.php">Order Form</a> | <a href="update_inventory.php">Inventory</a> | <a href='signup_form.php'>Sign up</a>
  </section>
  <form enctype="multipart/form-data" method="post" action="setup.php">
    <p>First Name: <input type='text' name='first_name'></p>
    <p>Last Name: <input type='text' name='last_name'></p>
    <p>Email Address: <input type='email' name=email></p>
    <p>Username: <input type='text' name='username'></p>
    <p>Password: <input type='text' name='password'></p>
    <p>Validate Password: <input type='text' name='password_validation'>
    <p>Store Number: <input type='text' name='store_number'></p>
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

    <P>Would you like email reminders for: <select name="delivery-day" id="delivery-day">
      <option value="All">All orders</option>
      <option value="Holidays">Orders before holidays</option>
      <option value="Never">None of the orders</option>
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
      <div id="error">You should select valid image files only!</div>
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

  <input type="submit" value="Setup"><input type="button" value="Clear">
</form>
</body>
</html>
