<?php
class FUser {
    private static $table = "users";

    private static $value = "(:email, :passwordHash, :userId)";

    private static $key = "userId";

    

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