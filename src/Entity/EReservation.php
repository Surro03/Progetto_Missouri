<?php

namespace src\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\MappedSuperclass]
abstract class EReservation {
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $reservationId;

    #[ORM\Column(type: "integer")]
    private int $studentId;

    #[ORM\Column( type: "datetime")]
    private DateTime $reservationDay;

    #[ORM\Column( type: "datetime")]
    private DateTime $startTime;

    #[ORM\Column( type: "datetime")]
    private TimeInterface $endTime;

    #[ORM\Column(type: "boolean")]
    private bool $result;

    // --- Getters e setters

    public function __construct(
        int $reservationId,
        int $studentId,
        \DateTimeInterface $reservationDay,
        \DateTimeInterface $startTime,
        \DateTimeInterface $endTime,
        bool $result
    ) {
        $this->reservationId = $reservationId;
        $this->studentId = $studentId;
        $this->reservationDay = $reservationDay;
        $this->startTime = $startTime;
        $this->endTime = $endTime;
        $this->result = $result;
    }

    public function getReservationDay(): \DateTimeInterface
    {
        return $this->reservationDay;
    }

    public function setReservationDay(\DateTimeInterface $reservationDay): void
    {
        $this->reservationDay = $reservationDay;
    }

    public function getStartTime(): \DateTimeInterface
    {
        return $this->startTime;
    }

    public function setStartTime(\DateTimeInterface $startTime): void
    {
        $this->startTime = $startTime;
    }

    public function getEndTime(): \DateTimeInterface
    {
        return $this->endTime;
    }

    public function setEndTime(\DateTimeInterface $endTime): void
    {
        $this->endTime = $endTime;
    }

    public function getResult(): bool
    {
        return $this->result;
    }

    public function setResult(bool $result): void
    {
        $this->result = $result;
    }
}




?>