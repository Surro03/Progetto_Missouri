<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;


enum reservationType: string {
    case individual = 'individual';
    case group = 'group';
}

#[ORM\Entity]
#[ORM\Table(name: "studyRoomReservations")]
class EStudyRoomReservation extends EReservation{


    // ATTRIBUTES
    #[ORM\Column(type: "string", enumType: reservationType::class)]
    private reservationType $reservationType;

    // RELATIONSHIPS
    #[ORM\ManyToOne(targetEntity: EStudent::class, inversedBy: "studyRoomReservation")]
    #[ORM\JoinColumn(name: "studentId", referencedColumnName: "studentId", nullable: false)]
    private EStudent $student;

    #[ORM\ManyToOne(targetEntity: EStudyRoom::class, inversedBy: "studyRoomReservations")]
    #[ORM\JoinColumn(name: "studyRoomId", referencedColumnName: "studyRoomId", nullable: false)]
    private EStudyRoom $studyRoom;



// RELATIONSHIP WITH EStudyRoomSeat
    #[ORM\OneToMany(mappedBy: "studyRoomReservation", targetEntity: EStudyRoomSeat::class)]
    private Collection $studyRoomSeats;


    // Constructor
   public function __construct(
        int $reservationId,
        int $studentId,
        \DateTimeInterface $reservationDay,
        \DateTimeInterface $startTime,
        \DateTimeInterface $endTime,
        bool $result,
        reservationType $reservationType) {
        
         // Call the parent constructor

        parent::__construct( $reservationId,
         $studentId,
         $reservationDay,
         $startTime,
         $endTime,
         $result);
         $this->reservationType = $reservationType;
    }

     // Getters

     public function getReservationType(): reservationType {
         return $this->reservationType;
     }
     // Setters
     public function setReservationType(reservationType $reservationType): void {
         $this->reservationType = $reservationType;
     }
}










?>

