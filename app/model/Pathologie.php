<?php

class Pathologie {
	private $_idP, $_meridien, $_type, $_desc;

	public function __construct($meridien, $type, $desc) {
		$this->_meridien = $meridien;
		$this->_type = $type;
		$this->_desc = $desc;
	}

	public function getIdP() {
		return $this->_idP;
	}

	public function setIdP($idP) {
		$this->_idP = $idP;
	}

	public function getMeridien() {
		return $this->_meridien;
	}

	public function setMeridien($meridien) {
		$this->_meridien = $meridien;
	}

	public function getType() {
		return $this->_type;
	}

	public function setType($type) {
		$this->_type = $type;
	}

	public function getDesc() {
		return $this->_desc;
	}

	public function setDesc($desc) {
		$this->_desc = $desc;
	}
}