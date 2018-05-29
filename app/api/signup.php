<?php
header( 'Location: /');
include_once "connect.php";

$username = $_POST['username'];
$password = $_POST['password'];
$password_confirm = $_POST['password-confirm'];

if(isset($username) && isset($password) && isset($password_confirm)) {
  if($password == $password_confirm) {
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $db = pdoConnect();
    $stmt = $db->prepare("SELECT * FROM uers where name=:username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    if($stmt->rowCount == 0) {
      $stmt = $db->prepare("INSERT INTO users (name, hash) VALUES (:username, :hash)");
      $stmt->bindParam(':username', $username);
      $stmt->bindParam(':hash', $hash);
      $stmt->execute();
    }
  }
}
?>
