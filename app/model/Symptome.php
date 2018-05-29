<?php

class Symptome {
	private $_idS, $_desc;

	public function __construct($desc) {
		$this->_desc = $desc;
	}

	public function getIdS() {
		return $this->_idS;
	}

	public function getDesc() {
		return $this->_desc;
	}

	public function setDesc($desc) {
		$this->_desc = $desc;
	}
}