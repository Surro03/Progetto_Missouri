<?php

abstract class EPosto {
    protected int $idPosto;
    protected bool $occupato;

    public function __construct(int $idPosto, bool $occupato = false) {
        $this->idPosto = $idPosto;
        $this->occupato = $occupato;
    }

    public function getIdPosto(): int {
        return $this->idPosto;
    }

    public function getOccupato(): bool {
        return $this->$occupato;
    }

    public function setOccupato(bool $stato): void {
        $this->$occupato = $occupato;
    }
}