<?php

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'studyRoomSeats')]
class EStudyRoomSeat extends ESeat {

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private int $tableId;

    public function __construct(int $seatId, bool $status, int $tableId) {
        parent::__construct($seatId, $status);
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
