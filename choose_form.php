<?php
if (isset($_SESSION['error']) && $_SESSION['error'] != NULL){
 echo $_SESSION['error'];
} elseif ((isset($_GET['orderNumber']) && $_GET['orderNumber'] != NULL) && $_SESSION['files'] != NULL) {
   $array = pull($_GET['orderNumber']);
   foreach ($array as $subArray) {
     foreach ($subArray as $key=>$value) {
     $newKey = substr($key, 1);;
     $order[$newKey] = $value;
     }
   }
   include 'order_form_populated.php';
} else {
 if (isset($_SESSION['files']) && $_SESSION['files'] != NULL) {
   include 'parse_colas.php';
   $total = 0;
   foreach ($_SESSION['estimate'] as $id => $quantity) {
     $total += $quantity;
   }
 }
   include 'order_form.php';
}
?>
