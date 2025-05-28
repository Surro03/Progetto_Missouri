<?php


require_once 'ETavolo.php';

class ESalaStudio {
    private int $idSalaStudio;
    private DateTime $orarioApertura;
    private DateTime $orarioChiusura;

    private array $listaTavoli;

    public function __construct(int $idSalaStudio, DateTime $orarioApertura, DateTime $orarioChiusura, array $listaTavoli = []) {
        $this->idSalaStudio = $idSalaStudio;
        $this->orarioApertura = $orarioApertura;
        $this->orarioChiusura = $orarioChiusura;
        $this->listaTavoli = $listaTavoli;
    }

    public function getIdSalaStudio(): int {
        return $this->idSalaStudio;
    }

    public function setIdSalaStudio(int $IdSalaStudio): void {
        $this->IdSalaStudio = $IdSalaStudio;
    }

    public function getOrarioApertura(): DateTime {
        return $this->orarioApertura;
    }

    public function setOrarioApertura(DateTime $orarioApertura): void {
        $this->orarioApertura = $orarioApertura;
    }

    public function getOrarioChiusura(): DateTime {
        return $this->orarioChiusura;
    }

    public function setOrarioChiusura(DateTime $orarioChiusura): void {
        $this->orarioChiusura = $orarioChiusura;
    }

    public function getListaTavoli(): array {
        return $this->listaTavoli;
    }

    public function setListaTavoli(array $listaTavoli): void {
        $this->listaTavoli = $listaTavoli;
    }

    public function aggiungiTavolo(ETavolo $tavolo): void {
        $this->listaTavoli[] = $tavolo;
    }

 
}


















?>