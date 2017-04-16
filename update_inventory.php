<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>Coke Order Form</title>
  <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
  <?php include 'logout_header.php';?>
  <div class="box">
  <div id="verticalSpace">
  <form method="post" action="update.php">
    <div class="header">
        <h3>Update Inventory</h3>
    </div>
    <div class="sep"></div>
  <table>
    <tr><td>2-Liters</td><td>Outlet #: 600329928</td><td>20 ounces</td></tr>
    <tr><td>Cases: <input type="number" id="coke_case_2L" min="0" value="0"> Bottles: <input type="number" id="coke_bottle_2L" min="0" value="0"></td>
      <td><img src="images/cocacola.png" alt="Coke" height="54" width="54"></td>
      <td>Cases: <input type="number" id="coke_case_20oz" min="0" value="0"> Bottles: <input type="number" id="coke_bottle_20oz" min="0" value="0"></td></tr>
    <tr><td>Cases: <input type="number" id="diet_coke_case_2L" min="0" value="0"> Bottles: <input type="number" id="diet_coke_bottle_2L" min="0" value="0"></td>
      <td><img src="images/dietcoke.png" alt="Diet Coke" height="54" width="54"></td>
      <td>Cases: <input type="number" id="diet_coke_case_20oz" min="0" value="0"> Bottles: <input type="number" id="diet_coke_bottle_20oz" min="0" value="0"></td></tr>
    <tr><td>Cases: <input type="number" id="cherry_coke_case_2L" min="0" value="0"> Bottles: <input type="number" id="cherry_coke_bottle_2L" min="0" value="0"></td>
      <td><img src="images/cherrycoke.jpg" alt="Cherry Coke" height="54" width="54"></td>
      <td>Cases: <input type="number" id="cherry_coke_case_20oz" min="0" value="0"> Bottles: <input type="number" id="cherry_coke_bottle_20oz" min="0" value="0"></td></tr>
    <tr><td>Cases: <input type="number" id="coke_zero_case_2L" min="0" value="0"> Bottles: <input type="number" id="coke_zero_bottle_2L" min="0" value="0"></td>
      <td><img src="images/cokezero.png" alt="COke Zero" height="54" width="54"></td>
      <td>Cases: <input type="number" id="coke_zero_case_20oz" min="0" value="0"> Bottles: <input type="number" id="coke_zero_bottle_20oz" min="0" value="0"></td></tr>
    <tr><td>Cases: <input type="number" id="root_beer_case_2L" min="0" value="0"> Bottles: <input type="number" id="root_beer_bottle_2L" min="0" value="0"></td>
      <td><img src="images/barqs.png" alt="Barqs" height="54" width="54"></td>
      <td>Cases: <input type="number" id="root_beer_case_20oz" min="0" value="0"> Bottles: <input type="number" id="root_beer_bottle_20oz" min="0" value="0"></td></tr>
    <tr><td>Cases: <input type="number" id="sprite_case_2L" min="0" value="0"> Bottles: <input type="number" id="sprite_bottle_2L" min="0" value="0"></td>
      <td><img src="images/sprite.png" alt="Sprite" height="54" width="54"></td>
      <td>Cases: <input type="number" id="sprite_case_20oz" min="0" value="0"> Bottles: <input type="number" id="sprite_bottle_20oz" min="0" value="0"></td></tr>
    <tr><td>Cases: <input type="number" id="fanta_orange_case_2L" min="0" value="0"> Bottles: <input type="number" id="fanta_orange_bottle_2L" min="0" value="0"></td>
      <td><img src="images/fanta.png" alt="Fanta Orange" height="54" width="54"></td>
      <td>Cases: <input type="number" id="fanta_orange_case_20oz" min="0" value="0"> Bottles: <input type="number" id="fanta_orange_bottle_20oz" min="0" value="0"></td></tr>
    <tr><td>Cases: <input type="number" id="mello_yellow_case_2L" min="0" value="0"> Bottles: <input type="number" id="mello_yellow_bottle_2L" min="0" value="0"></td>
      <td><img src="images/melloyello.png" alt="Mello Yello" height="54" width="54"></td>
      <td>Cases: <input type="number" id="mello_yellow_case_20oz" min="0" value="0"> Bottles: <input type="number" id="mello_yellow_bottle_20oz" min="0" value="0"></td></tr>
    <tr><td>Cases: <input type="number" id="minutemaid_lemonade_case_2L" min="0" value="0"> Bottles: <input type="number" id="minutemaid_lemonade_bottle_2L" min="0" value="0"></td>
      <td><img src="images/minutemaid.png" alt="Minute Maid Lemonade" height="54" width="54"></td>
      <td>Cases: <input type="number" id="minutemaid_lemonade_case_20oz" min="0" value="0"> Bottles: <input type="number" id="minutemaid_lemonade_bottle_20oz" min="0" value="0"></td></tr>
    <tr><td>N/A</td><td><img src="images/dasani.png" alt="Dasani" height="54" width="54"></td>
      <td>Cases: <input type="number" id="dasani_water_case_20oz" min="0" value="0"> Bottles: <input type="number" id="dasani_water_bottle_20oz" min="0" value="0"></td></tr>

  </table>
  <input type="submit" value="Update Inventory"><input type="button" value="Clear">
</form>
</div>
</div>
</body>
</html>
