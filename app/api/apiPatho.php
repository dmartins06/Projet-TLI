<?php
	header( 'Location: /search');
	include_once "connect.php";

	if(isset($_POST['type'])) {
	  $type= $_POST['type'];
	  $db = pdoConnect();
	  #$_SESSION['keyword'] = $db->quote($_POST['keyword']);
	  $stmt = $db->prepare("SELECT p.desc as 'pathologie'
	  						FROM patho p
  							INNER JOIN typePatho tp ON p.type = tp.codeType
							WHERE p.type = :name ;");
	  $stmt->bindParam(':name', $type);
	  #$stmt->bindParam(':name2', $keyword);
	  #$stmt->bindParam(':name3', $keyword);
	  $stmt->execute();
	  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
	  $_SESSION['pathologies'] = $rows;
	}

?>