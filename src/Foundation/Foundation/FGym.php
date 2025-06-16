<?php
class FGym {
    private static $table = "gyms";

    private static $value = "( :gymSeatList, :gymId)";

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

    public static function bind($smtm,EGym $gym) {
        $stmt->bindValue(":gymID", $gym->getGymId(), PDO::PARAM_INT);

    }  

}