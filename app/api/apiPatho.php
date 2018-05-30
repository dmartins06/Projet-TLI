<?php
	header( 'Location: /recherche');
	include_once "connect.php";

	#if(isset($_POST['keyword'])) {
	  #$keyword= '%'.$_POST['keyword'].'%';
	  $db = pdoConnect();
	  #$_SESSION['keyword'] = $db->quote($_POST['keyword']);
	  $stmt = $db->prepare("SELECT `desc` as 'pathologie' FROM patho;");
	  #$stmt->bindParam(':name', $keyword);
	  #$stmt->bindParam(':name2', $keyword);
	  #$stmt->bindParam(':name3', $keyword);
	  $stmt->execute();
	  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
	  $_SESSION['pathologies'] = $rows;

?>


<?php
	include_once "connect.php";

	#if(isset($_POST['keyword'])) {
	  #$keyword= '%'.$_POST['keyword'].'%';
	  $db = pdoConnect();
	  #$_SESSION['keyword'] = $db->quote($_POST['keyword']);
	  $prepare = $db->prepare("SELECT codeType, nameType FROM typePatho;");
	  #$prepare->bindParam(':name', $keyword);
	  #$prepare->bindParam(':name2', $keyword);
	  #$prepare->bindParam(':name3', $keyword);
	  $prepare->execute();
	  $rows = $prepare->fetchAll(PDO::FETCH_ASSOC);
	  $_SESSION['types'] = $rows;
?>