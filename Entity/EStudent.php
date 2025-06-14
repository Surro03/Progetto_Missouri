<?php

class EStudent extends EUser {
    private string $firstName;
    private string $lastName;
    private string $studentId;
    private DateTime $birthDate;

    public function __construct(string $firstName, string $lastName, string $email, string $studentId, string $password, string $birthDate) {
        parent::__construct($email, $password); // Call the parent class constructor
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->studentId = $studentId;
        $this->birthDate = new DateTime($birthDate);
    }

    public function getFirstName(): string {
        return $this->firstName;
    }

    public function getLastName(): string {
        return $this->lastName;
    }

    public function getStudentId(): string {
        return $this->studentId;
    }

    public function getBirthDate(): DateTime {
        return $this->birthDate;
    }

    public function setFirstName(string $firstName): void {
        $this->firstName = $firstName;
    }

    public function setLastName(string $lastName): void {
        $this->lastName = $lastName;
    }

    public function setStudentId(string $studentId): void {
        $this->studentId = $studentId;
    }

    public function setBirthDate(string $date): void {
        $this->birthDate = new DateTime($date);
    }

    public function __toString(): string {
        return "Student: $this->firstName $this->lastName\n
        Email: $this->email\n
        Student ID: $this->studentId";
    }
}
?>
