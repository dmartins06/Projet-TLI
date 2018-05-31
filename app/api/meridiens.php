<?php 
header('Content-type: application/json');
include_once "connect.php";
$db = pdoConnect();
$stmt = $db->prepare("SELECT * FROM meridien");
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($rows);

echo($json);
?>
