<?php 
define("SERVER_SQL_VERSION","mysql");
define("SQL_SERVER","db");
define("SQL_PORT","3306");
define("SQL_USERNAME","root");
define("SQL_PASSWORD","root");
define("SQL_DB_NAME","acuDb");
define("ARGS", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

if(!function_exists('pdoConnect')) {
	function pdoConnect() {
		try{
      
			$db = new PDO(SERVER_SQL_VERSION.':host='.SQL_SERVER.';port='.SQL_PORT.';dbname='.SQL_DB_NAME.'', ''.SQL_USERNAME.'', ''.SQL_PASSWORD.'', ARGS); 
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		}
		catch (PDOException $e) {
			echo $e->getMessage();
		}
		return $db;
	}
} 

?>
