<?php
require_once(dirname(__FILE__) . '/../config.php');

class db {	
	public function __construct() {
        $this->pdo = $this->getDBH($GLOBALS['host'], $GLOBALS['db'], $GLOBALS['user'], $GLOBALS['pass']);
    }

	private function getDBH($host, $db, $user, $pass){
		$DBH = new PDO("mysql:host={$host};dbname={$db};", $user, $pass);
		$DBH->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		return $DBH;
	}
}