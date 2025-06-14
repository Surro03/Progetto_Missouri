<?php

class EStudyRoomSeat extends ESeat {

    private int $tableId;

    public function __construct(int $seatId, bool $status, int $tableId) {
        parent::__construct($seatId, $status);
        $this->tableId = $tableId;
    }

    public function getTableId(): int {
        return $this->tableId;
    }

    public function setTableId(int $tableId): void {
        $this->tableId = $tableId;
    }
}

?>
