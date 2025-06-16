<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


#[ORM\MappedSuperclass]
abstract class EInteraval {

     #[ORM\Column(type: "datetime")]
    private DateTime $start;

     #[ORM\Column(type: "datetime")]
    private DateTime $end;
//Constructor
    public function __construct(DateTime $start, DateTime $end) {
        if ($start > $end) {
            throw new InvalidArgumentException("Start date must be before end date.");
        }
        $this->start = $start;
        $this->end = $end;
    }
// Static getter
    public static function getEntity(): string {
        return self::$entity;
    }
// Getters
    public function getStart(): DateTime {
        return $this->start;
    }
    public function getEnd(): DateTime {
        return $this->end;
    }
// Setters
    public function setStart(DateTime $start): void {
        if ($start > $this->end) {
            throw new InvalidArgumentException("Start date must be before end date.");
        }
        $this->start = $start;
    }
    public function setEnd(DateTime $end): void {
        if ($end < $this->start) {
            throw new InvalidArgumentException("End date must be after start date.");
        }
        $this->end = $end;
    }
}