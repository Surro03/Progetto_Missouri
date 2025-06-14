<?php
require_once 'config.php';

class FDataBase {

    private static $instance;
    private $dbconnection;
 /**The construct is private since this is a singleton class*/
    private function __construct() {

        try {
			$this->dbconnection = new PDO("mysql:dbname=".DB_NAME.";host=".DB_HOST."; charset=utf8;", DB_USER, DB_PASS);;

		} catch (PDOException $e) {
			echo "Error detected: " . $e->getMessage();
			die;
        }
    }
/** Verifies if an instance of the class already exists, if not creare a new one */
    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new FDatabase();
        }
        return self::$instance;
    }

}