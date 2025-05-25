<?php

abstract class Posto {
    protected int $id;
    protected string $stato;

    public function __construct(int $id, string $stato = 'libero') {
        $this->id = $id;
        $this->stato = $stato;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getStato(): string {
        return $this->stato;
    }

    public function setStato(string $stato): void {
        $this->stato = $stato;
    }
}