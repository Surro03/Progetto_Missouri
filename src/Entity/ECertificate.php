<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

require_once('EStudent.php');

#[ORM\Entity]
#[ORM\Table(name: "certificates")]
class ECertificate  {
    // ATTRIBUTES
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $idCertificate;
    
    #[ORM\Column(type: "datetime")]
    private DateTime $release_Date;

    #[ORM\Column(type: "datetime")]
    private DateTime $expiration_Date;

// RELATIONSHIPS
    #[ORM\OneToOne(inversedBy: "certificate", targetEntity: EStudent::class)]
    #[ORM\JoinColumn(name: "studentId", referencedColumnName: "studentId")]
    private EStudent $student;


//Constructor
    public function __construct(EStudent $student,$idcertificate,$release_date,$expiration_date)
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
    public function getStudentId(): int {
        return $this->studentId;
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
    public function setStudentId(int $studentId): void {
        $this->studentId = $studentId;
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
        return "ID Studente: " . $this->studentId . "\n" . 
               "ID Certificato: " . $this->idCertificate . "\n" . 
               "Rilasciato in data: " . $this->release_Date->format('Y-m-d') . "\n" .
               "Scade in data: " . $this->expiration_Date->format('Y-m-d');
    }
}