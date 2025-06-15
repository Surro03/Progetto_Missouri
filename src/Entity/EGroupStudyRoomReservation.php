<?php

#[ORM\Entity]
#[ORM\Table(name: "groupStudyRoomReservations")]
class EGroupStudyRoomReservation extends EReservation{


   public function __construct(
   
        int $reservationId,
        int $studentId,
        \DateTimeInterface $reservationDay,
        \DateTimeInterface $startTime,
        \DateTimeInterface $endTime,
        bool $result){
        
        parent::__construct($reservationId, $studentId,
         $reservationDay,
         $startTime,
         $endTime,
         $result);
     
    }



}









?>