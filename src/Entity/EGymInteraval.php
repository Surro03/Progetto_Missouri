<?php

namespace src\Entity;

use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity]
#[ORM\Table(name: "gymInteravals")]
 class EGymInteraval extends EInteraval {

    
    public function __construct(DateTime $start, DateTime $end) {
     parent::__construct($start, $end);
        if ($start > $end) {
            throw new InvalidArgumentException("Start date must be before end date.");
        }
    }
    
}