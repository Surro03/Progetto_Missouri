<?php

abstract class ESeat {
    protected int $seatId;
    protected bool $occupied;

    public function __construct(int $seatId, bool $occupied = false) {
        $this->seatId = $seatId;
        $this->occupied = $occupied;
    }

    public function getSeatId(): int {
        return $this->seatId;
    }

    public function isOccupied(): bool {
        return $this->occupied;
    }

    public function setOccupied(bool $status): void {
        $this->occupied = $status;
    }
}
