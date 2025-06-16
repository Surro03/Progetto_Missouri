<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'studyRoomSeats')]
class EStudyRoomSeat extends ESeat {

    
    // RELATIONSHIPS
     #[ORM\OneToMany(mappedBy: "studyRoom", targetEntity: ETable::class)]
        private Collection $tableList;

        #[ORM\ManyToOne(targetEntity: ETable::class, inversedBy: "studyRoomSeat")]
        #[ORM\JoinColumn(name: "tableId", referencedColumnName: "tableId", nullable: false)]
        private ETable $table;

    #[ORM\ManyToOne(targetEntity: EStudyRoomReservation::class, inversedBy: 'studyRoomSeats')]
    #[ORM\JoinColumn(name: 'reservation_id', referencedColumnName: 'reservationId', nullable: false)]
    private EStudyRoomReservation $studyRoomReservation;

    // Constructor
    public function __construct(int $seatId, bool $isAvailable, int $tableId) {
        parent::__construct($seatId, $isAvailable);
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
