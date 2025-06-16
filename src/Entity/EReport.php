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

    private static $entity = EReport::class;
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

    // ID getter/setter
    public function getId() {
        return $this->reportId;
    }

    public function setId($id) {
        $this->reportId = $id;
    }

    // Text getter
    public function getText() {
        return $this->text;
    }

    // Date getters/setters
    public function getTime(): DateTime {
        return $this->creationDate;
    }

    private function setTime() {
        $this->creationDate = new DateTime("now");
    }

    public function getTimeStr(): string {
        return $this->creationDate->format('Y-m-d H:i:s');
    }

    public function setCreationTime(DateTime $dateTime): void {
        $this->creationDate = $dateTime;
    }

    // Ban/Removed status
    public function isBanned(): bool {
        return $this->removed;
    }

    public function setBan(bool $removed): void {
        $this->removed = $removed;
    }

    // User getter
    public function getUser() {
        return $this->user;
    }

    public function getReportId() {
        return $this->reportId;
    }

    // Debug output
    public function __toString(): string {
        return "User: " . $this->userId . "\n" .
               "Report ID: " . $this->reportId . "\n" .
               "Created on: " . $this->creationDate->format('d/m/Y') . "\n" .
               "Topic: " . $this->topic . "\n" .
               "Text: " . $this->text . "\n";
    }
}
?>
