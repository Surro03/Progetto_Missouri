<?php
class FTable {
    private static $table = "tables";

    private static $value = "(:studyRoomId, :seatList, :tableId)";

    private static $key = "tableId";

    

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