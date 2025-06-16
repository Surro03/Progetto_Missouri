<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;


#[ORM\Entity]
#[ORM\Table(name: 'studyRooms')]
class EStudyRoom{
    // ATTRIBUTES
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "studyRoomId", type: 'integer')]
    private int $studyRoomId;

    #[ORM\Column(name: "openingTime", type: 'datetime')]
    private \DateTime $openingTime;

    #[ORM\Column(name: "closingTime", type: 'datetime')]
    private \DateTime $closingTime;

    // RELATIONSHIPS
    #[ORM\OneToMany(mappedBy: "studyRoom", targetEntity: EStudyRoomReservation::class)]
    private Collection $studyRoomReservations;

    #[ORM\OneToMany(mappedBy: "studyRoom", targetEntity: ETable::class)]
    private Collection $tableList;
//Constructor
    public function __construct(int $studyRoomId, DateTime $openingTime, DateTime $closingTime, array $tableList = []) {
        $this->studyRoomId = $studyRoomId;
        $this->openingTime = $openingTime;
        $this->closingTime = $closingTime;
        $this->tableList = $tableList;
    }
 // Static entity name getter
    public static function getEntity(): string {
        return self::$entity;
    }
 //Getters and Setters
    public function getStudyRoomId(): int
    {
        return $this->studyRoomId;
    }

    public function setStudyRoomId(int $studyRoomId): void
    {
        $this->studyRoomId = $studyRoomId;
    }

    public function getTableList(): Collection
    {
        return $this->tableList;
    }

    public function setTableList(Collection $tableList): void
    {
        $this->tableList = $tableList;
    }

    public function addTable(ETable $table): void
    {
        if (!$this->tableList->contains($table)) {
            $this->tableList[] = $table;
        }
    }

    public function getOpeningTime(): \DateTime
    {
        return $this->openingTime;
    }

    public function setOpeningTime(\DateTime $openingTime): void
    {
        $this->openingTime = $openingTime;
    }

    public function getClosingTime(): \DateTime
    {
        return $this->closingTime;
    }

    public function setClosingTime(\DateTime $closingTime): void
    {
        $this->closingTime = $closingTime;
    }
}
