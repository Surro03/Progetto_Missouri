<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'gymSeats')]
class EGymSeat extends ESeat {

    // RELATIONSHIPS
    #[ORM\ManyToOne(targetEntity: EGym::class, inversedBy: "gymSeatList")]
    #[ORM\JoinColumn(name: "gymId", referencedColumnName: "gymId", nullable: false)]
    private EGym $gym;

    public function __construct(int $seatId, EGym $gym, bool $status) {
        parent::__construct($seatId, $status);
        $this->gym = $gym;
    }

    public function getGym(): EGym {
        return $this->gym   ;
    }

    public function setGym(EGym $gym): void {
        $this->gym = $gym;
    }
}
?>