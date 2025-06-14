<?php

require_once 'ETable.php';

class EStudyRoom {
    private int $studyRoomId;
    private DateTime $openingTime;
    private DateTime $closingTime;
    private array $tableList;

    public function __construct(int $studyRoomId, DateTime $openingTime, DateTime $closingTime, array $tableList = []) {
        $this->studyRoomId = $studyRoomId;
        $this->openingTime = $openingTime;
        $this->closingTime = $closingTime;
        $this->tableList = $tableList;
    }

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