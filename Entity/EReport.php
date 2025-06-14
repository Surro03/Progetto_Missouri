<?php

class EReport {

    // Attributes
    private $reportId;
    private $text;
    private DateTime $creationDate;
    private $userId;
    private $topic;
    private static $entity = EReport::class;
    private $removed = false; // initialized to avoid undefined errors
    private $user;

    // Constructor
    public function __construct($topic, $text, $user, $reportId) {
        $this->topic = $topic;
        $this->text = $text;
        $this->user = $user;
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
