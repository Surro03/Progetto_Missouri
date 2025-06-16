<?php
namespace src\Entity;

use Doctrine\ORM\Mapping as ORM;

require_once('EStudent.php');

#[ORM\Entity]
#[ORM\Table(name: "certificates")]
class ECertificate  {
    //attributi
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $idCertificate;

    #[ORM\Column(type: "integer")]
    private int $idStudent;
    
    #[ORM\Column(type: "datetime")]
    private DateTime $release_Date;

    #[ORM\Column(type: "datetime")]
    private DateTime $expiration_Date;

//Constructor
    public function __construct(Estudent $student,$idcertificate,$release_date,$expiration_date)
    {
        $this->idStudent = $student->getMatricola();
        $this->idCertificate = $idcertificate;
        $this->release_Date = $release_date;
        $this->expiration_Date = $expiration_date;

    }
    // Static getter
    public static function getEntity(): string {
        return self::$entity;
    }
    // Getters
    public function getIdStudent(): int {
        return $this->idStudent;
    }

    public function getIdCertificate(): int {
        return $this->idCertificate;
    }

    public function getReleaseDate(): DateTime {
        return $this->release_Date;
    }

    public function getExpirationDate(): DateTime {
        return $this->expiration_Date;
    }

    // Setters
    public function setIdStudent(int $idStudent): void {
        $this->idStudent = $idStudent;
    }

    public function setIdCertificate(int $idCertificate): void {
        $this->idCertificate = $idCertificate;
    }

    public function setReleaseDate(DateTime $release_Date): void {
        $this->release_Date = $release_Date;
    }

    public function setExpirationDate(DateTime $expiration_Date): void {
        $this->expiration_Date = $expiration_Date;
    }

    // Method to check if the certificate is expired
    public function isExpired(): bool {
        $today = new DateTime('now', new DateTimeZone('Europe/Rome'));
        return $this->expiration_Date < $today;
    }

    // String representation
    public function __toString(): string {
        return "ID Studente: " . $this->idStudent . "\n" . 
               "ID Certificato: " . $this->idCertificate . "\n" . 
               "Rilasciato in data: " . $this->release_Date->format('Y-m-d') . "\n" .
               "Scade in data: " . $this->expiration_Date->format('Y-m-d');
    }
}