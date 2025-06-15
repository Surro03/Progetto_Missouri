<?php


require_once __DIR__ . '/bootstrap.php';

echo "Bootstrap caricato correttamente.<br>";

try {
    // Questo fa partire la connessione se necessaria
    $conn = $entityManager->getConnection();
    
    // Esegue una query semplice per forzare l'apertura della connessione
    $conn->executeQuery('SELECT 1');

    echo "✔ Connessione al database riuscita!";
} catch (\Exception $e) {
    echo "❌ Errore nella connessione: " . $e->getMessage();
} 
    
   /*
require_once 'config.php';

class FDataBase {

    private static $instance;
    private $dbconnection;
 /**The construct is private since this is a singleton class
    private function __construct() {

        try {
			$this->dbconnection = new PDO("mysql:dbname=".DB_NAME.";host=".DB_HOST."; charset=utf8;", DB_USER, DB_PASS);;
           
		} catch (PDOException $e) {
			echo "Error detected: " . $e->getMessage();
			die;
        }
    }
 Verifies if an instance of the class already exists, if not creare a new one 
    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new FDataBase();
        }
        return self::$instance;
    }


*/