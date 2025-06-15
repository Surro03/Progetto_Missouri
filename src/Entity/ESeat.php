<?php

namespace src\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\MappedSuperclass]
abstract class ESeat {

    #[ORM\Id]
    #[ORM\Column(type: "integer")]
    protected int $seatId;

    #[ORM\Column(type: 'boolean')]
    protected bool $isAvailable;

    public function __construct(int $seatId, bool $isAvailable = true) {
        $this->seatId = $seatId;
        $this->isAvailable = $isAvailable;
    }

    public function getSeatId(): int {
        return $this->seatId;
    }

    public function isOccupied(): bool {
        return $this->isAvailable;
    }

    public function setOccupied(bool $status): void {
        $this->isAvailable = $status;
    }
}