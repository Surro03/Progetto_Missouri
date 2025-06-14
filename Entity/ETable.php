<?php

class ETable {

    private int $tableId;
    private int $studyRoomId;
    private array $seatList;

    public function __construct(int $tableId, int $studyRoomId, array $seatList = []) {
        $this->tableId = $tableId;
        $this->studyRoomId = $studyRoomId;
        $this->seatList = $seatList;
    }

    public function getTableId(): int {
        return $this->tableId;
    }

    public function setTableId(int $tableId): void {
        $this->tableId = $tableId;
    }

    public function getStudyRoomId(): int {
        return $this->studyRoomId;
    }

    public function setStudyRoomId(int $studyRoomId): void {
        $this->studyRoomId = $studyRoomId;
    }

    public function getSeatList(): array {
        return $this->seatList;
    }

    public function setSeatList(array $seatList): void {
        $this->seatList = $seatList;
    }
}

?>
