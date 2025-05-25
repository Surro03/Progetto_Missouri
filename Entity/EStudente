<?php

class EStudente extends EUtente {
    private string $nome;
    private string $cognome;
    private string $matricola;

    public function __construct(string $nome, string $cognome, string $email, string $matricola, string $password, string $dataDiNascita) {
        parent::__construct($email, $password); // Chiama il costruttore della classe Utente
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->matricola = $matricola;
        $this->dataDiNascita = new DateTime($dataDiNascita);
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getCognome(): string {
        return $this->cognome;
    }

    public function getMatricola(): string {
        return $this->matricola;
    }

     public function getDataDiNascita(): DateTime {
        return $this->dataDiNascita;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function setCognome(string $cognome): void {
        $this->cognome = $cognome;
    }

    public function setMatricola(string $matricola): void {
        $this->matricola = $matricola;
    }
    
      public function setDataDiNascita(string $data): void {
        $this->dataDiNascita = new DateTime($data);
    }


    public function __toString(): string {
        return "Studente: $this->nome $this->cognome\n
        Email: $this->email\n
        Matricola: $this->matricola";
    }
}



?>