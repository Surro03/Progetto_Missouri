<?php

//require_once 'ETable.php';

#[ORM\Entity]
#[ORM\Table(name: 'studyRooms')]
class EStudyRoom {

    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    private static int $studyRoomId;

    #[ORM\Id]
    #[ORM\Column(type: 'datetime')]
    private DateTime $openingTime;

    #[ORM\Id]
    #[ORM\Column(type: 'datetime')]
    private DateTime $closingTime;

    #[ORM\Id]
    #[ORM\Column(type: "json", nullable: true)]
    private array $tableList;
//Constructor
    public function __construct(int $studyRoomId, DateTime $openingTime, DateTime $closingTime, array $tableList = []) {
        $this->studyRoomId = $studyRoomId;
        $this->openingTime = $openingTime;
        $this->closingTime = $closingTime;
        $this->tableList = $tableList;
    }
 // Static entity name getter
    public static function getEntity(): string {
        return self::$entity;
    }
    //Getters and Setters
    public function getStudyRoomId(): int {
        return $this->studyRoomId;
    }

    public function setStudyRoomId(int $studyRoomId): void {
        $this->studyRoomId = $studyRoomId;
    }

    public function getTableList(): array {
        return $this->tableList;
    }

    public function setTableList(array $tableList): void {
        $this->tableList = $tableList;
    }

    public function getOpeningTime(): DateTime {
        return $this->openingTime;
    }

    public function setOpeningTime(DateTime $openingTime): void {
        $this->openingTime = $openingTime;
    }

    public function getClosingTime(): DateTime {
        return $this->closingTime;
    }

    public function setClosingTime(DateTime $closingTime): void {
        $this->closingTime = $closingTime;
    }

    public function addTable(ETable $table): void {
        $this->tableList[] = $table;
    }
}


















?>