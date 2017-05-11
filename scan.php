<?php
try {
$dir = __DIR__.DIRECTORY_SEPARATOR.'userdata/'.$_SESSION['storeNumber'];
} catch (exception $e) {
  $_SESSION['error'] = "You haven't uploaded anything yet!";
}
$files = scandir($dir, 1);
if (sizeof($files) == 2) {
  $_SESSION['error'] = "You haven't uploaded anything yet!";
  $_SESSION['files'] = NULL;
} elseif (sizeof($files) == 3) {
  for ($i = 0; $i < 3; $i++) {
    $_SESSION['files'][0] = $files[$i];
  }
} elseif (sizeof($files) == 4) {
  for ($i = 0; $i < sizeof($files); $i++) {
    $_SESSION['files'][$i] = $files[$i];
  }
  $_SESSION['files'][2] = $files[1];
} else {
  for ($i = 0; $i < 3; $i++) {
    $_SESSION['files'][$i] = $files[$i];
  }
}
?>
