<?php

class EGymSeat extends ESeat {

    private int $gymId;

    public function __construct(int $seatId, int $gymId, bool $status) {
        parent::__construct($seatId, $status);
        $this->gymId = $gymId;
    }

    public function getGymId(): int {
        return $this->gymId;
    }

    public function setGymId(int $gymId): void {
        $this->gymId = $gymId;
    }
}
?>