<?php

class Meridien {
	private $_code, $_nom, $_element, $_yin;

	public function __construct($code, $nom, $element, $yin) {
		$this->_code = $code
		$this->_nom = $nom;
		$this->_element = $element;
		$this->_yin = $yin;
	}

	public function getCode() {
		return $this->_code;
	}

	public function setCode($code) {
		$this->_code = $code;
	}

	public function getNom() {
		return $this->_nom;
	}

	public function setNom($nom) {
		$this->_nom = $nom;
	}

	public function getElement() {
		return $this->_element;
	}

	public function setElement($element) {
		$this->_element = $element;
	}

	public function getYin() {
		return $this->_yin;
	}

	public function setYin($yin) {
		$this->_yin = $yin;
	}
}