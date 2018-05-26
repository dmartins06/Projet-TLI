<?php
session_start();
header('Content-type: application/json');
include_once "connect.php";

$name = $_POST['name'];
$hash= $_POST['hash'];

if(isset($name) && isset($hash)) {
  $db = pdoConnect();
  $stmt = $db->prepare("SELECT id FROM users where name=:name and hash=:hash");
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':hash', $hash);
  $stmt->execute();
  if($stmt->rowCount() == 1) {
    $_SESSION['user_name'] = $name;
    echo("a");
  }
}
?>

