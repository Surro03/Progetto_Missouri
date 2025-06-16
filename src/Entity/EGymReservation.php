<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "gymReservations")]

class EGymReservation extends EReservation{
//RELATIONSHIPS
#[ORM\OneToOne(targetEntity: EStudent::class, inversedBy: "gymReservation")]
#[ORM\JoinColumn(name: "studentId", referencedColumnName: "studentId", nullable: false)]
private EStudent $student;

#[ORM\ManyToOne(targetEntity: EGymSeat::class)]
#[ORM\JoinColumn(name: "gymSeatId", referencedColumnName: "seatId", nullable: false)]
private EGymSeat $gymSeat;

   public function __construct(
   
        int $reservationId,
        int $studentId,
        \DateTimeInterface $reservationDay,
        \DateTimeInterface $startTime,
        \DateTimeInterface $endTime,
        bool $result) {
        
        parent:: __construct( $reservationId,
         $studentId,
         $reservationDay,
         $startTime,
         $endTime,
         $result);
        }

}
?>