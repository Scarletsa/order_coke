<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>Coke Order Form</title>
  <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
  <section>
    <p><img src='Dominos_banner.gif' alt="Domino's Banner" style="height:105px;"></p>
    <a href="order_form.php">Order Form</a> | <a href="update_inventory.php">Inventory</a> | <a href='login_form.php'>Log In</a>
  </section>
  <form method="post" action="update.php">
  <table>

    <tr><td>2-Liters</td><td>Outlet #: 600329928</td><td>20 ounces</td></tr>
    <tr><td>Cases: <input type="number" id="coke_case_2L" min="0" value="0"> Bottles: <input type="number" id="coke_bottle_2L" min="0" value="0"></td>
      <td>Coke</td>
      <td>Cases: <input type="number" id="coke_case_20oz" min="0" value="0"> Bottles: <input type="number" id="coke_bottle_20oz" min="0" value="0"></td></tr>
    <tr><td>Cases: <input type="number" id="diet_coke_case_2L" min="0" value="0"> Bottles: <input type="number" id="diet_coke_bottle_2L" min="0" value="0"></td>
      <td>Diet Coke</td>
      <td>Cases: <input type="number" id="diet_coke_case_20oz" min="0" value="0"> Bottles: <input type="number" id="diet_coke_bottle_20oz" min="0" value="0"></td></tr>
    <tr><td>Cases: <input type="number" id="cherry_coke_case_2L" min="0" value="0"> Bottles: <input type="number" id="cherry_coke_bottle_2L" min="0" value="0"></td>
      <td>Cherry Coke</td>
      <td>Cases: <input type="number" id="cherry_coke_case_20oz" min="0" value="0"> Bottles: <input type="number" id="cherry_coke_bottle_20oz" min="0" value="0"></td></tr>
    <tr><td>Cases: <input type="number" id="coke_zero_case_2L" min="0" value="0"> Bottles: <input type="number" id="coke_zero_bottle_2L" min="0" value="0"></td>
      <td>Coke Zero</td>
      <td>Cases: <input type="number" id="coke_zero_case_20oz" min="0" value="0"> Bottles: <input type="number" id="coke_zero_bottle_20oz" min="0" value="0"></td></tr>
    <tr><td>Cases: <input type="number" id="root_beer_case_2L" min="0" value="0"> Bottles: <input type="number" id="root_beer_bottle_2L" min="0" value="0"></td>
      <td>Root Beer</td>
      <td>Cases: <input type="number" id="root_beer_case_20oz" min="0" value="0"> Bottles: <input type="number" id="root_beer_bottle_20oz" min="0" value="0"></td></tr>
    <tr><td>Cases: <input type="number" id="sprite_case_2L" min="0" value="0"> Bottles: <input type="number" id="sprite_bottle_2L" min="0" value="0"></td>
      <td>Sprite</td>
      <td>Cases: <input type="number" id="sprite_case_20oz" min="0" value="0"> Bottles: <input type="number" id="sprite_bottle_20oz" min="0" value="0"></td></tr>
    <tr><td>Cases: <input type="number" id="fanta_orange_case_2L" min="0" value="0"> Bottles: <input type="number" id="fanta_orange_bottle_2L" min="0" value="0"></td>
      <td>Fanta Orange</td>
      <td>Cases: <input type="number" id="fanta_orange_case_20oz" min="0" value="0"> Bottles: <input type="number" id="fanta_orange_bottle_20oz" min="0" value="0"></td></tr>
    <tr><td>Cases: <input type="number" id="mello_yellow_case_2L" min="0" value="0"> Bottles: <input type="number" id="mello_yellow_bottle_2L" min="0" value="0"></td>
      <td>Mello Yellow</td>
      <td>Cases: <input type="number" id="mello_yellow_case_20oz" min="0" value="0"> Bottles: <input type="number" id="mello_yellow_bottle_20oz" min="0" value="0"></td></tr>
    <tr><td>Cases: <input type="number" id="minutemaid_lemonade_case_2L" min="0" value="0"> Bottles: <input type="number" id="minutemaid_lemonade_bottle_2L" min="0" value="0"></td>
      <td>Minutemaid Lemonade</td>
      <td>Cases: <input type="number" id="minutemaid_lemonade_case_20oz" min="0" value="0"> Bottles: <input type="number" id="minutemaid_lemonade_bottle_20oz" min="0" value="0"></td></tr>
    <tr><td>N/A</td><td>Dasani water</td>
      <td>Cases: <input type="number" id="dasani_water_case_20oz" min="0" value="0"> Bottles: <input type="number" id="dasani_water_bottle_20oz" min="0" value="0"></td></tr>

  </table>
  <input type="submit" value="Update Inventory"><input type="button" value="Clear">
</form>
</body>
</html>
