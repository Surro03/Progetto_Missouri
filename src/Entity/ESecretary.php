<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "secretaries")]
class ESecretary extends EUser {

    #[ORM\Id]
    #[ORM\Column(type: "integer")]
    private int $secretaryId;

    public function __construct(int $secretaryId, string $email, string $password) {
        parent::__construct($email, $password); 
        $this->secretaryId = $secretaryId;
    }

    public function getId(): int {
        return $this->secretaryId;
    }

    public function setId(int $secretaryId): void {
        $this->secretaryId = $secretaryId;
    }

    public function __toString(): string {
        return "Secretary ID: $this->secretaryId\nEmail: $this->email";
    }
}
?>
