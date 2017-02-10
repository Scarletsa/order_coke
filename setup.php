<?php
  

  if($_SERVER['REQUEST_METHOD'] == 'post') {
    $fileToMove = $_FILES['inventory_upload'];
    $destination = "./upload/" . $_FILES['inventory_upload']['name'];
    if (move_uploaded_file($fileToMove, $destination)) {
      echo "Yay!"
    } else {
      echo "It didn't work..."
    }
  }
$_FILES

?>
