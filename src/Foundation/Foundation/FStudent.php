<?php
class FStudent {
    private static $table = "students";

    private static $value = "(:firstName, :lastName, birthDate,:email,:passwordHash,:userId,:studentId)";

    private static $key = "studentId";

    

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