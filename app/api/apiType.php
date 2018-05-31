<?php
	header('Content-type: application/json');
	include_once "connect.php";
	  $db = pdoConnect();
	  $prepare = $db->prepare("SELECT codeType, nameType FROM typePatho;");
	  $prepare->execute();
	  $rows = $prepare->fetchAll(PDO::FETCH_ASSOC);
	  $_SESSION['types'] = $rows;
	  $json = json_encode($rows);
	  echo($json);
?>

