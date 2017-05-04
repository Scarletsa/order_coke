<?php $_SESSION['orderNumber'] = $_GET['orderNumber'];?>
<form method="post" action="update_order.php" id="signup">
  <div class="header">
      <h3>Order Form</h3>
  </div>
  <div class="sep"></div>
    <table>
    <tr><td>2-Liters (Cases of 8)</td><td><?php echo "Order number: ".$_SESSION['orderNumber'];?></td><td>20oz (Cases of 24)</td></tr>
      <tr><td><input type="number" name="132530" min="0" <?php echo "value=".$order[132530]; ?> ></td>
        <td><img src="images/cocacola.png" alt="Coke" height="54" width="54"></td>
      <td><input type="number" name="102603" min="0" <?php echo "value=".$order[102603];?>></td></tr>
      <tr><td><input type="number" name="132532" min="0" <?php echo "value=".$order[132532];?>></td>
        <td><img src="images/dietcoke.png" alt="Diet Coke" height="54" width="54"></td>
      <td><input type="number" name="102604" min="0" <?php echo "value=".$order[102604];?>></td></tr>
      <tr><td><input type="number" name="132529" min="0" <?php echo "value=".$order[132529];?>></td>
        <td><img src="images/cherrycoke.jpg" alt="Cherry Coke" height="54" width="54"></td>
      <td><input type="number" name="102605" min="0" <?php echo "value=".$order[102605];?>></td></tr>
      <tr><td><input type="number" name="132531" min="0" <?php echo "value=".$order[132531];?>></td>
        <td><img src="images/cokezero.png" alt="COke Zero" height="54" width="54"></td>
      <td><input type="number" name="121751" min="0" <?php echo "value=".$order[121751]?>></td></tr>
      <tr><td><input type="number" name="132541" min="0" <?php echo "value=".$order[132541]?>></td>
        <td><img src="images/barqs.png" alt="Barqs" height="54" width="54"></td>
      <td><input type="number" name="102659" min="0" <?php echo "value=".$order[102659]?>></td></tr>
      <tr><td><input type="number" name="132540" min="0" <?php echo "value=".$order[132540]?>></td>
        <td><img src="images/sprite.png" alt="Sprite" height="54" width="54"></td>
      <td><input type="number" name="101891" min="0" <?php echo "value=".$order[101891]?>></td></tr>
      <tr><td><input type="number" name="132543" min="0" <?php echo "value=".$order[132543]?>></td>
        <td><img src="images/fanta.png" alt="Fanta Orange" height="54" width="54"></td>
      <td><input type="number" name="114230" min="0" <?php echo "value=".$order[114230]?>></td></tr>
      <tr><td><input type="number" name="132546" min="0" <?php echo "value=".$order[132546]?>></td>
        <td><img src="images/melloyello.png" alt="Mello Yello" height="54" width="54"></td>
      <td><input type="number" name="102656" min="0" <?php echo "value=".$order[102656]?>></td></tr>
      <tr><td><input type="number" name="132551" min="0" <?php echo "value=".$order[132551]?>></td>
        <td><img src="images/minutemaid.png" alt="Minute Maid Lemonade" height="54" width="54"></td>
      <td><input type="number" name="114532" min="0" <?php echo "value=".$order[114532]?>></td></tr>
        <tr><td>N/A</td><td><img src="images/dasani.png" alt="Dasani" height="54" width="54"></td>
      <td><input type="number" name="112259" min="0" <?php echo "value=".$order[112259]?>></td></tr>
  </table>
  <input type="submit" value="Update order">
  <a href="delete_process.php" style="text-decoration:none"><input type="button" value="Delete order"></a>
  </form>
