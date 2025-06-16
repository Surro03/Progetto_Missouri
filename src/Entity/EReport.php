<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "reports")]
class EReport {

    // Attributes
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $reportId;

    #[ORM\Column(type: "string", length: 255)]
    private string $text;

    #[ORM\Column(type: "datetime")]
    private DateTime $creationDate;

    #[ORM\Column(type: "integer")]
    private int $userId;

    #[ORM\Column(type: "string", length: 255)]
    private string $topic;

    #[ORM\Column(type: "boolean")]
    private $removed = false; // initialized to avoid undefined errors

    // Relationships
    #[ORM\OneToOne(inversedBy: "report", targetEntity: EStudent::class)]
    #[ORM\JoinColumn(name: "studentId", referencedColumnName: "studentId", nullable: false)]
    private ?EStudent $student = null;

    // Constructor
    public function __construct($topic, $text, $reportId, $userId ) {
        $this->topic = $topic;
        $this->text = $text;
        $this->userId = $userId;
        $this->reportId = $reportId;
        $this->setTime();
    }

     // Static entity name getter
    public static function getEntity(): string {
        return self::$entity;
    }
    //Setters
    private function setTime() {
        $this->creationDate = new DateTime("now");
    }

    public function setReportId($id) {
        $this->reportId = $id;
    }

    public function setText(string $text): void {
        $this->text = $text;
    }
    
    public function setUserId(int $userId): void {
        $this->userId = $userId;
    }
    
    public function setCreationTime(DateTime $dateTime): void {
        $this->creationDate = $dateTime;
    }

    public function setTopic(string $topic): void {
        $this->topic = $topic;
    }
//Getters
    public function getReportId() {
        return $this->reportId;
    }
   
    public function getCreationTime(): DateTime {
        return $this->creationDate;
    }
  
    public function getText() {
        return $this->text;
    }

    public function getTopic() {
        return $this->topic;
    }

    public function getUserId(): int {
        return $this->userId;
    }
    
    public function getCreationTimeStr(): string {
        return $this->creationDate->format('Y-m-d H:i:s');
    }

    //Status methods
    public function isRemoved(): bool {
        return $this->removed;
    }

    public function Remove(): void {
        $this->removed = true;
    }

    public function Restore(): void {
        $this->removed = true;
    }

    // ToString method
    public function __toString(): string {
        return "User: " . $this->userId . "\n" .
               "Report ID: " . $this->reportId . "\n" .
               "Created on: " . $this->creationDate->format('d/m/Y') . "\n" .
               "Topic: " . $this->topic . "\n" .
               "Text: " . $this->text . "\n";
    }
}
?>
