<?php

require_once 'EGymSeat.php';

class EGym {
    private int $gymId;
    private array $gymSeatList;

    public function __construct(int $gymId, array $gymSeatList = []) {
        $this->gymId = $gymId;
        $this->gymSeatList = $gymSeatList;
    }

    public function getGymId(): int {
        return $this->gymId;
    }

    public function getGymSeatList(): array {
        return $this->gymSeatList;
    }

    public function setGymSeatList(array $gymSeatList): void {
        $this->gymSeatList = $gymSeatList;
    }
}
?>
