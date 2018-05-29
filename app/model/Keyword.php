<?php

class Keyword {
	private $_idK, $_name;

	public function __construct($name) {
		$this->_name = $name;
	}

	public function getIdK() {
		return $this->_idK;
	}

	public function getName() {
		return $this->_name;
	}

	public function setName($name) {
		$this->_name = $name;
	}
}