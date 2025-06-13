<?php
class ESegreteria extends EUtente {
    
    private int $id;

    public function __construct(int $idSegreteria, string $email, string $password) {
        parent::__construct($email, $password); 
        $this->idSegreteria = $idSegreteria;
    }

    public function getId(): int {
        return $this->idSegreteria;
    }

    public function setId(int $idSegreteria): void {
        $this->idSegreteria = $idSegreteria;
    }

    public function __toString(): string {
        return "Segreteria ID: $this->idSegreteria\nEmail: $this->email";
    }
}

?>