<?php

class EPostoPalestra extends EPosto {

    private int $idPalestra;

    public function __construct(int $idPosto, int $idPalestra, bool $Stato) {
    ::parent __construct($idPosto, $occupato)
        $this->idPalestra = $idPalestra;
       
    }

 public function getIdPalestra(): int {
        return $this->idPalestra;
    }

    public function setIDPalestra(int $idPalestra): void {
        $this->idPalestra = $idPalestra;
    }

}

?>





























?>