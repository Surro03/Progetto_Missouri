<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "comunications")]
class ECommunication {

    // ATTRIBUTES
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $idCommunication;

     #[ORM\Column(type: "string", length: 255)]
    private string $text;

     #[ORM\Column(type: "datetime")]
    private DateTime $creationDate;

     #[ORM\Column(type: "integer")]
    private int $studentId;

     #[ORM\Column(type: "string", length: 255)]
    private string $subject;

    // RELATIONSHIPS


    // Constructor
    public function __construct(string $subject, string $text, int $studentId) {
        $this->subject = $subject;
        $this->text = $text;
        $this->studentId = $studentId;
        $this->setCreationDate();
    }

    // Static getter
    public static function getEntity(): string {
        return self::$entity;
    }

    // Getters
    public function getId(): int {
        return $this->idCommunication;
    }

    public function getText(): string {
        return $this->text;
    }

    public function getCreationDate(): DateTime {
        return $this->creationDate;
    }

    public function getCreationDateStr(): string {
        return $this->creationDate->format('Y-m-d H:i:s');
    }

    public function getStudentId(): int {
        return $this->studentId;
    }

    public function getSubject(): string {
        return $this->subject;
    }

    public function isBanned(): bool {
        return $this->removed;
    }

    // Setters
    public function setCommunicationId(int $id): void {
        $this->idCommunication = $id;
    }

    public function setCreationDateManually(DateTime $dateTime): void {
        $this->creationDate = $dateTime;
    }

    public function setBan(bool $removed): void {
        $this->removed = $removed;
    }

    private function setCreationDate(): void {
        $this->creationDate = new DateTime("now", new DateTimeZone('Europe/Rome'));
    }

    // String representation
    public function __toString(): string {
        return "ID Studente: " . $this->idUser . "\n" . 
               "ID Communicazione: " . $this->idCommunication . "\n" . 
               "Creato in data: " . $this->creationDate->format('d/m/Y') . "\n" .
               "Argomento: " . $this->subject . "\n" .
               "Testo: " . $this->text . "\n";
    }
}