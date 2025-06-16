<?php
class FCommunication {
    private static $table = "communications";

    private static $value = "( :text, :creationDate, :idUser, :subject, :idCommunication)";

    private static $key = "idCommunication";

    

    public function __construct() {
        // Constructor can be used for initialization if needed
    }
    
    public static function getTable() {
        return self::$table;
    }
    public static function getValue() {
        return self::$value;
    }
    public static function getKey() {
        return self::$key;
    }
    public static function getClass(){
        return self::class;
    }

    
    public static function bind($smtm,ECommunication $communication) {
        $stmt->bindValue(":idCommunicaton", $communication->getIdCommunication(), PDO::PARAM_INT);
        $stmt->bindValue(":text", $communication->getText(), PDO::PARAM_STR);
        $stmt->bindValue(":crationDate",$communication->getCreationDate(), PDO::PARAM_STR);
        $stmt->bindValue(":idUser", $communication->getIdUser(), PDO::PARAM_INT);
        $stmt->bindValue(":subject", $communication->getSubject(), PDO::PARAM_STR);
    }  

}
