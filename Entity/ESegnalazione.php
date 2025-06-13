<?php

class ESegnalazione{

    //attributi
    private $idSegnalazione;
    private $testo;
    private DateTime $data_creazione;
    private $idutente;
    private $argomento;
    private static $entity = ESegnalazione::class;

    //costruttori
    public function __construct($argomento, $testo, $idutente, $idSegnalazione)
    {
        $this->argomento = $argomento;
        $this->testo = $testo;
        $this->utente = $utente;
        $this->idSegnalazione = $idSegnalazione;
        $this->setTime();
    }

    //metodi
    public static function getEntity(): string
    {
        return self::$entity;
    }

    public function getId()
    {
        return $this->idSegnalazione;
    }

    public function setId($id)
    {
        $this->idSegnalazione = $id;
    }

    public function gettesto()
    {
        return $this->testo;
    }

    public function getTime()
    {
        return $this->data_creazione;
    }

    private function setTime()
    {
        $this->data_creazione = new DateTime("now");
    }

    public function getTimeStr()
    {
        return $this->data_creazione->format('Y-m-d H:i:s');
    }

    public function setCreationTime(DateTime $dateTime){
        $this->data_creazione = $dateTime;
    }

    public function isBanned(): bool
    {
        return $this->removed;
    }

    public function setBan(bool $removed): void
    {
        $this->removed = $removed;
    }

    public function getutente()
    {
        return $this->utente;
    }

    public function getIdSegnalazione()
    {
        return $this->idSegnalazione;
    }   

    public function __toString(): string 
    {
        return "Utente: " . $this->idutente . "\n" . 
        "ID CSegnalazione: " . $this->idSegnalazione . "\n" . 
        "Creata in data: " . $this->data_creazione->format('d/m/Y') . "\n" .
        "Argomento: " . $this->argomento . "\n";
        "Testo: " . $this->testo . "\n";
    }
}