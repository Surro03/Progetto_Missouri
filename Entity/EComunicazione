<?php

class Comunicazione{

    //attributi
    private $idComunicazione;
    private $testo;
    private DateTime $data_creazione;
    private $idutente;
    private $argomento;
    private static $entity = EComunicazione::class;

    //costruttori
    public function __construct($testo, $idutente, $idComunicazione)
    {
        $this->testo = $testo;
        $this->utente = $utente;
        $this->idComunicazione = $idComunicazione;
        $this->setTime();
    }

    //metodi
    public static function getEntity(): string
    {
        return self::$entity;
    }

    public function getId()
    {
        return $this->idComunicazione;
    }

    public function setId($id)
    {
        $this->idComunicazione = $id;
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

    public function getIdComunicazione()
    {
        return $this->idComunicazione;
    }   
}