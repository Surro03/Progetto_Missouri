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

    public function __construct(int $seatId) {
        $this->seatId = $seatId;
        $this->isAvailable = True;
    }

    public function getSeatId(): int {
        return $this->seatId;
    }

    public function isAvailable(): bool {
        return $this->isAvailable;
    }

    public function setOccupied(): void{
        if(!$this->isAvailable){
            throw new ErrorException("Il posto è già occupato.");
        }
        else{
        $this->isAvailable = False;
        }
    }
    
    public function setAvailable(): void{
        if($this->isAvailable){
            throw new ErrorException("Il posto è già libero.");
        }
        else{
        $this->isAvailable = True;
        }
    }
}