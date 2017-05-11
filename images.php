<?php
$random = mt_rand(0,1);

$images = ["images/Dominos_banner.gif", "images/coke_banner.jpg"];

echo "<img src='".$images[$random]."' alt='Banner' style='height:105px;'>";
?>
