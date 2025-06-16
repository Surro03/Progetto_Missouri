<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "tables")]
class ETable
{
    // ATTRIBUTES
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "tableId", type: "integer")]
    private int $tableId;

    #[ORM\Column(name: "seatList", type: "json", nullable: true)]
    private array $seatList;

    // RELATIONSHIPS
    #[ORM\ManyToOne(targetEntity: EStudyRoom::class, inversedBy: "tableList")]
    #[ORM\JoinColumn(name: "studyRoomId", referencedColumnName: "studyRoomId", nullable: false)]
    private EStudyRoom $studyRoom;

    #[ORM\OneToMany(mappedBy: "table", targetEntity: EStudyRoomSeat::class)]
    private Collection $studyRoomSeat;

    public function __construct(array $seatList = [])
    {
        $this->seatList = $seatList;
        $this->studyRoomSeat = new ArrayCollection();
    }

    public function getTableId(): int
    {
        return $this->tableId;
    }

    public function getSeatList(): array
    {
        return $this->seatList;
    }

    public function setSeatList(array $seatList): void
    {
        $this->seatList = $seatList;
    }

    public function getStudyRoom(): EStudyRoom
    {
        return $this->studyRoom;
    }

    public function setStudyRoom(EStudyRoom $studyRoom): void
    {
        $this->studyRoom = $studyRoom;
    }

    public function getStudyRoomSeat(): Collection
    {
        return $this->studyRoomSeat;
    }
}
