<?php
$dir = __DIR__.DIRECTORY_SEPARATOR.'userdata/'.$_SESSION['storeNumber'];
$files = scandir($dir, 1);
for ($i = 0; $i < 3; $i++) {
  $_SESSION['files'][$i] = $files[$i];
}
?>
