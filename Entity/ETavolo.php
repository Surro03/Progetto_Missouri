<?php

class ETavolo {

    private int $IDTavolo;
    private int $IDSalaStudio;
    private array $ListaPostiSala;

    public function __construct(int $IDTavolo, int $IDSalaStudio, array $ListaPostiSala = []) {
        $this->IDTavolo = $IDTavolo;
        $this->IDSalaStudio = $IDSalaStudio;
        $this->ListaPostiSala = $ListaPostiSala;
    }

   public function getIDTavolo(): int {
        return $this->IDTavolo;
    }

    public function setIDTavolo(int $IDTavolo): void {
        $this->IDTavolo = $IDTavolo;
    }

    public function getIDSalaStudio(): int {
        return $this->IDSalaStudio;
    }

    public function setIDSalaStudio(int $IDSalaStudio): void {
        $this->IDSalaStudio = $IDSalaStudio;
    }

    public function getListaPostiSala(): array {
        return $this->ListaPostiSala;
    }

    public function setListaPostiSala(array $ListaPostiSala): void {
        $this->ListaPostiSala = $ListaPostiSala;
    }




}


?>