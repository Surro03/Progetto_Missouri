<?php
class FReport {
    private static $table = "reports";

    private static $value = "( :text, :ceationDate, :userId, :topic, :removed, :reportId)";

    private static $key = "reportId";

    

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

    public static function bind($smtm,EReport $Report) {
        $stmt->bindValue(":idCommunicaton", $Report->getIdReport(), PDO::PARAM_INT);
        $stmt->bindValue(":text", $Report->getText(), PDO::PARAM_STR);
        $stmt->bindValue(":crationDate",$Report->getCreationDate(), PDO::PARAM_STR);
        $stmt->bindValue(":userId", $Report->getUserId(), PDO::PARAM_INT);
        $stmt->bindValue(":topic", $Report->getTopic(), PDO::PARAM_STR);
        $stmt->bindValue(":removed", $Report->isRemoved(), PDO::PARAM_BOOL);
        $stmt->bindValue(":reportId", $Report->getReportId(), PDO::PARAM_INT);
}
}