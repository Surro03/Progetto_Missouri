<?php
class FGymSeat {
    private static $table = "gymseats";

    private static $value = "(:gymId, :isAvailable, :seatId)";

    private static $key = "seatId";

    

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


    public static function bind($stmt, EGymSeat $gymseat) {
        $stmt->bindValue(":gymId", $gymseat->getGymId(), PDO::PARAM_INT);
        $stmt->bindValue(":isAvailable", $gymseat->isAvailable(), PDO::PARAM_BOOL);
        $stmt->bindValue(":seatId", $gymseat->getSeatId(), PDO::PARAM_INT);
    }
}