<?php

class EPostoSalaStudio extends EPosto {

    private int $IDTavolo;

    public function __construct( int $IDTavolo) {
         parent::__construct($occupato, $idPosto);
        $this->IDTavolo = $IDTavolo;
        
    }

    public function getIDTavolo(): int {
        return $this->IDTavolo;
    }





   
}





?>