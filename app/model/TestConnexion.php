<?php

require_once("Connexion.php");
require_once("Pathologie.php");

class TestConnexion {
	private $_bdd, $_meridien, $_pathoList;

	public function __construct($meridien) {
		$this->_bdd = Connexion::getInstance;
		$this->_meridien = $meridien;
		$this->_pathoList = [];

		$query = $this->_bdd->getConnexion()->prepare('
			SELECT * 
			FROM patho p
			INNER JOIN meridien m ON p.mer = m.code
			WHERE patho.mer=?
		');
		$query->execute([$meridien]);
		$i=0;
		while ($data=$query->fetch(PDO::FETCH_ASSOC)) {
			$patho = new Pathologie($data['mer'],$data['type'],$data['desc']);
			$patho->setIdP($data['idP']);

			$this->_pathoList[$i] = $patho;
			$i++;
		}
	}

	public function getPathoList() {
		return $this->_pathoList;
	}
}