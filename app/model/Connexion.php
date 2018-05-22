<?php

class Connexion {
	private $_host = "localhost:8001"; // à compléter
	private $_user ="user";
	private $_dbname = "acuDb";
	private $_pwd ="password";
	private static $_connexion, $_instance;

	public function __construct() {
		self::$_connexion = new PDO('mysql:host='.$this->_host.';dbname='.$this->_dbname.';charset=utf8', $this->_user, $this->_pwd);
	}

	private function __clone(){}

	public static function getInstance(){
		if (!isset(self::$_instance)) {
			self::$_instance = new self;
		}
		return self::$_instance;
	}

	public function getConnexion() {
		return self::$_connexion;
	}
}