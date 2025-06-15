<?php
class FReport {
    private static $table = "reports";

    private static $value = "(:reportId, :text, :ceationDate, :userId, :topic, :removed, :userId)";

    private static $key = "gymId";

    

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