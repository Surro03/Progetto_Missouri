<?php


class EPalestra {
    private int $idPalestra;
    private array $ListaPostiPalestra;

    public function __construct(int $idPalestra, array $ListaPostiPalestra = []) {
        $this->idPalestra = $idPalestra;
        $this->ListaPostiPalestra = $ListaPostiPalestra;
    }

    public function getIDPalestra(): int {
        return $this->IDPalestra;
    }


    public function getListaPostiPalestra(): array {
        return $this->ListaPostiPalestra;
    }

    public function setListaPostiPalestra(array $ListaPostiPalestra): void {
        $this->ListaPostiPalestra = $ListaPostiPalestra;
    }


}







?>