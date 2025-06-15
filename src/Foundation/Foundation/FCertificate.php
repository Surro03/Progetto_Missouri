<?php
class FCertificate {
    private static $table = "certificates";

    private static $value = "(:idStudent, :release_Date, :expiration_Date, :idCertificate)";

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

/**
    * This method binds the parameters of a statement to the values of a ECertificate object:
    * @param PDOStatement $stmt
    * @param ECertificate $certificate is the certificate whose attribute will be inserted in the DB
    */
    public static function bind($smtm,ECertificate $certificate) {
        $stmt->bindValue(":idStudent", $certificate->getIdStudent(), PDO::PARAM_INT);
        $stmt->bindValue(":release_Date", $certificate->getReleaseDate(), PDO::PARAM_STR);
        $stmt->bindValue(":expiration_Date",$certificate->getExpirationDate(), PDO::PARAM_STR);
        $stmt->bindValue(":idCertificate", $certificate->getIdCertificate(), PDO::PARAM_INT);
    }

}