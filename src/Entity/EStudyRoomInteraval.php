<?php

namespace src\Entity;

use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity]
#[ORM\Table(name: "studyRoomInteravals")]
class EStudyRoomInteraval extends EInteraval{

    public function __construct(DateTime $start, DateTime $end) {
        parent::__construct($start, $end);
            }

}