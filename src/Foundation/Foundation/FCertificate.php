<?php
class FCertificate {
    private static $table = "certificates";

    private static $value = "(:idStudent, :idCertificate, :release_Date, :expiration_Date)";

    private static $key = "idCertificate";

    

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

}