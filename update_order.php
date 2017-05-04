<?php
session_start();
include 'dbattributes.php';
$dbh = new PDO("mysql:host=".DBHOST.";port=".DBPORT.";dbname=".DBNAME.";charset=utf8mb4", DBUSER, DBPASS);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$table = 'orders';
$query = $dbh->prepare("UPDATE $table SET c132529=:c132529, c132530=:c132530, c132531=:c132531, c132532=:c132532,
                                          c132546=:c132546, c132551=:c132551, c132543=:c132543, c132541=:c132541,
                                          c132540=:c132540, c102605=:c102605, c102603=:c102603, c121751=:c121751,
                                          c102604=:c102604, c102656=:c102656, c114532=:c114532, c114230=:c114230,
                                          c102659=:c102659, c101891=:c101891, c112259=:c112259 WHERE orderNumber = :orderNumber");

$query->execute(array(":c132529" => $_POST['132529'], ":c132530" => $_POST['132530'], ":c132531" => $_POST['132531'], ":c132532" => $_POST['132532'],
                      ":c132546" => $_POST['132546'], ":c132551" => $_POST['132551'], ":c132543" => $_POST['132543'],
                      ":c132541" => $_POST['132541'], ":c132540" => $_POST['132540'], ":c102605" => $_POST['102605'],
                      ":c102603" => $_POST['102603'], ":c121751" => $_POST['121751'], ":c102604" => $_POST['102604'],
                      ":c102656" => $_POST['102656'], ":c114532" => $_POST['114532'], ":c114230" => $_POST['114230'],
                      ":c102659" => $_POST['102659'], ":c101891" => $_POST['101891'], ":c112259" => $_POST['112259'], ":orderNumber" => $_SESSION['orderNumber']));

header('Location: order_page.php');
?>
