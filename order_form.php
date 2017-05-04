<form method="post" action="process_order.php" id="signup">
  <div class="header">
      <h3>Order Form</h3>
  </div>
  <div class="sep"></div>
    <table>
    <tr><td>2-Liters (Cases of 8)</td><td><?php echo "Outlet number: ".$_SESSION['outletNumber'];?></td><td>20oz (Cases of 24)</td></tr>
      <tr><td><input type="number" name="132530" min="0" <?php echo "value=".$_SESSION['estimate'][132530]; ?> ></td>
        <td><img src="images/cocacola.png" alt="Coke" height="54" width="54"></td>
      <td><input type="number" name="102603" min="0" <?php echo "value=".$_SESSION['estimate'][102603];?>></td></tr>
      <tr><td><input type="number" name="132532" min="0" <?php echo "value=".$_SESSION['estimate'][132532];?>></td>
        <td><img src="images/dietcoke.png" alt="Diet Coke" height="54" width="54"></td>
      <td><input type="number" name="102604" min="0" <?php echo "value=".$_SESSION['estimate'][102604];?>></td></tr>
      <tr><td><input type="number" name="132529" min="0" <?php echo "value=".$_SESSION['estimate'][132529];?>></td>
        <td><img src="images/cherrycoke.jpg" alt="Cherry Coke" height="54" width="54"></td>
      <td><input type="number" name="102605" min="0" <?php echo "value=".$_SESSION['estimate'][102605];?>></td></tr>
      <tr><td><input type="number" name="132531" min="0" <?php echo "value=".$_SESSION['estimate'][132531];?>></td>
        <td><img src="images/cokezero.png" alt="COke Zero" height="54" width="54"></td>
      <td><input type="number" name="121751" min="0" <?php echo "value=".$_SESSION['estimate'][121751]?>></td></tr>
      <tr><td><input type="number" name="132541" min="0" <?php echo "value=".$_SESSION['estimate'][132541]?>></td>
        <td><img src="images/barqs.png" alt="Barqs" height="54" width="54"></td>
      <td><input type="number" name="102659" min="0" <?php echo "value=".$_SESSION['estimate'][102659]?>></td></tr>
      <tr><td><input type="number" name="132540" min="0" <?php echo "value=".$_SESSION['estimate'][132540]?>></td>
        <td><img src="images/sprite.png" alt="Sprite" height="54" width="54"></td>
      <td><input type="number" name="101891" min="0" <?php echo "value=".$_SESSION['estimate'][101891]?>></td></tr>
      <tr><td><input type="number" name="132543" min="0" <?php echo "value=".$_SESSION['estimate'][132543]?>></td>
        <td><img src="images/fanta.png" alt="Fanta Orange" height="54" width="54"></td>
      <td><input type="number" name="114230" min="0" <?php echo "value=".$_SESSION['estimate'][114230]?>></td></tr>
      <tr><td><input type="number" name="132546" min="0" <?php echo "value=".$_SESSION['estimate'][132546]?>></td>
        <td><img src="images/melloyello.png" alt="Mello Yello" height="54" width="54"></td>
      <td><input type="number" name="102656" min="0" <?php echo "value=".$_SESSION['estimate'][102656]?>></td></tr>
      <tr><td><input type="number" name="132551" min="0" <?php echo "value=".$_SESSION['estimate'][132551]?>></td>
        <td><img src="images/minutemaid.png" alt="Minute Maid Lemonade" height="54" width="54"></td>
      <td><input type="number" name="114532" min="0" <?php echo "value=".$_SESSION['estimate'][114532]?>></td></tr>
        <tr><td>N/A</td><td><img src="images/dasani.png" alt="Dasani" height="54" width="54"></td>
      <td><input type="number" name="112259" min="0" <?php echo "value=".$_SESSION['estimate'][112259]?>></td></tr>
  </table>
    <?php echo "<br>Suggested order: $total cases.<br><br>"; ?>
  <input type="submit" value="Place order">
  </form>
