<?php 
session_start();
header('Content-type: application/json');
include_once "connect.php";
if(isset($_SESSION['user_name'])){
  $db = pdoConnect();
  $stmt = $db->prepare("SELECT idP FROM patho");
  $stmt->execute();
  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $json = json_encode($rows);

  echo($json);
}
?>
