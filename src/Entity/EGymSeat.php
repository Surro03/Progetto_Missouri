<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'gymSeats')]
class EGymSeat extends ESeat {

   *#[ORM\Column(type: "integer", name: "gymId")]
   *private int $gymId;

    // RELATIONSHIPS
    #[ORM\ManyToOne(targetEntity: EGym::class, inversedBy: "gymSeatList")]
    #[ORM\JoinColumn(name: "gymId", referencedColumnName: "gymId", nullable: false)]
    private EGym $gym;
   
//Constructor
    public function __construct($gymId, $seatId) {
        parent::__construct($seatId);
        $this->gymId = $gymId;
    }
//Static getter
  public static function getEntity(): string {
        return self::$entity;
    }
//Getters
    public function getStart(): DateTime {
        return $this->start;
    }
    public function getEnd(): DateTime {
        return $this->end;
    }
//Setters
    public function setGym(EGym $gym): void {
        $this->gym = $gym;
    }
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
?>