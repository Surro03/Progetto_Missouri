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
            self::$instance = new FDataBase();
        }
        return self::$instance;
    }
      /**
     *  Method to close the database connection
     */
    public function closeDBConnnetcion() {
        static::$istance = null;
    }
  /**
     *  Method to return the PDO
     */
    public static function getDb(){
        return self::$dbconnection;
    }
/**
     *  Method to store an object in the database
     * @param String $class is the class name of the object entity we want to store
     * @param Object $object is the object we want to store
     */
    public function storeObject($class,$obj){
        try{
            $this->$dbconnention::beginTransaction();
            $query = "INSERT INTO " . $class::getTable() . " VALUES " . $class::getValue();
            $stmt = $this->dbconnection->prepare($query);
            $class::bind($stmt, $obj);
            $stmt->execute();
            $this->dbconnection::commit();
            $id= $this->dbconnection->lastInsertId();
            return $id;
        }catch (PDOException $e) {
            $this->dbconnection::rollBack();
            echo "ERROR: " . $e->getMessage();
            return null;
        }
        }
        
    }