<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\MappedSuperclass]
abstract class EUser {

     #[ORM\Column(type: "string", length: 255)]
    protected string $email;

     #[ORM\Column(type: "string", length: 255)]
    protected string $passwordHash;

    public function __construct(string $email, string $password) {
        $this->email = $email;
        $this->setPassword($password); // Save the password as a hashed string
    }

    // Getter for email
    public function getEmail(): string {
        return $this->email;
    }

    // Setter for email
    public function setEmail(string $email): void {
        $this->email = $email;
    }

    // Setter for password (hashed)
    public function setPassword(string $password): void {
        $this->passwordHash = password_hash($password, PASSWORD_DEFAULT);
    }

    // Check if the provided password matches the saved hash
    public function verifyPassword(string $password): bool {
        return password_verify($password, $this->passwordHash);
    }

    // For debug (without showing the password)
    public function __toString(): string {
        return "User: $this->email";
    }
}
?>
