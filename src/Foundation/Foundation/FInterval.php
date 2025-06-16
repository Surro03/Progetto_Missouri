<?php
class FInterval  {
    private static $table = "intervals";

    private static $value = "( :start, :end, :intervalId)";

    private static $key = "intervalId";

    

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
    
public static function bind($stmt, EInterval $interval) {
        $stmt->bindValue(":start", $interval->getStart(), PDO::PARAM_STR);
        $stmt->bindValue(":end", $interval->getEnd(), PDO::PARAM_STR);
        $stmt->bindValue(":intervalId", $interval->getIntervalId(), PDO::PARAM_INT);
    }
}