<?php
require_once 'EStudente.php'
class ECertificato  {
    //attributi
    private int $idStudente;
    private int $idcertificato;
    private DateTime $data_rilascio;
    private DateTime $data_scadenza;
//costruttore
    public function __construct(EStudente $studente,$idcertificato,$data_rilascio,$data_scadenza)
    {
        $this->idStudente = $studente->getMatricola();
        $this->idcertificato = $idcertificato;
        $this->data_rilascio = $data_rilascio;
        $this->data_scadenza = $data_scadenza;

    }
//metodi
    
    public function getIdCertificato(): int
    {
        return $this->idcertificato;
    }

    public function getDataRilascio(): DateTime
    {
        return $this->data_rilascio;
    }

    public function getDataScadenza(): DateTime
    {
        return $this->data_scadenza;
    }

    public function getStato(): bool
    {
        return $this->stato;
    }

    }

    public function setIdCertificato(int $idcertificato): void
    {
        $this->idcertificato = $idcertificato;
    }

    public function setDataRilascio(DateTime $data_rilascio): void
    {
        $this->data_rilascio = $data_rilascio;
    }

    public function setDataScadenza(DateTime $data_scadenza): void
    {
        $this->data_scadenza = $data_scadenza;
    }

    public function setStato(bool $stato): void
    {
        $this->stato= $stato;
    }


    public function isScaduto(): bool
    {
        $oggi = new DateTime('now', new DateTimeZone('Europe/Rome'))
        return $this->data_scadenza<$oggi;
    }

   public function __toString(): string 
{
    return "Utente: " . $this->idutente . "\n" . 
           "ID Certificato: " . $this->idcertificato . "\n" . 
           "Rilasciato il: " . $this->data_rilascio->format('d/m/Y') . "\n" .
           "Scade il: " . $this->data_scadenza->format('d/m/Y');
}
}
