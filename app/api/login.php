<?php
header( 'Location: /');
include_once "connect.php";

$username = $_POST['username'];
$password = $_POST['password'];

if(isset($username) && isset($password)) {
  $hash = password_hash($password, PASSWORD_DEFAULT);
  $db = pdoConnect();
  $stmt = $db->prepare("SELECT * FROM users where name=:username");
  $stmt->bindParam(':username', $username);
  $stmt->execute();
  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
  if($stmt->rowCount() == 1) {
    $hash = $rows[0]['hash'];
    if(password_verify($password, $hash)){
      $_SESSION['username'] = $username;
    }
  }
}
?>

