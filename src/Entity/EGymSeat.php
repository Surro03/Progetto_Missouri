<?php
namespace src\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'gymseats')]
class EGymSeat extends ESeat {

    #[ORM\Id]
    #[ORM\Column(type: "integer")]
    private int $gymId;

    public function __construct(int $seatId, int $gymId, bool $status) {
        parent::__construct($seatId);
        $this->gymId = $gymId;
    }

    public function getGymId(): int {
        return $this->gymId;
    }

    public function setGymId(int $gymId): void {
        $this->gymId = $gymId;
    }
}
?>