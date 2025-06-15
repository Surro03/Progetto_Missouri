<?php
class FStudyRoom {
    private static $table = "studyrooms";

    private static $value = "(:studyRoomId, :openingTime, :closingTime, :tableList)";

    private static $key = "studyRoomId";

    

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