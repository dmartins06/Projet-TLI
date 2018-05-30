<?php
header( 'Location: /recherche');
include_once "connect.php";

if(isset($_POST['keyword'])) {
  $keyword= '%'.$_POST['keyword'].'%';
  $db = pdoConnect();
  $_SESSION['keyword'] = $db->quote($_POST['keyword']);
  $stmt = $db->prepare("
SELECT keywords.name as 'keyword', sy.desc as 'symptome', pa.desc as 'pathologie' FROM `keywords`
INNER JOIN keySympt ks on ks.idK = keywords.idK
RIGHT JOIN symptome sy on sy.idS = ks.idK
INNER JOIN symptPatho sP on sy.idS = sP.idP
INNER JOIN patho pa on sP.idP = pa.idP

where keywords.name LIKE :name  or sy.desc LIKE :name2 or pa.desc LIKE :name3 

GROUP by sy.desc"
);
  $stmt->bindParam(':name', $keyword);
  $stmt->bindParam(':name2', $keyword);
  $stmt->bindParam(':name3', $keyword);
  $stmt->execute();
  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $_SESSION['pathologies'] = $rows;
}
?>

