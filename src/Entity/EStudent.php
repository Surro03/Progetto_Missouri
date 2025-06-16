<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
//TABLE: students
#[ORM\Entity]
#[ORM\Table(name: "students")]

class EStudent extends EUser {
    // ATTRIBUTES
    #[ORM\Id]
    #[ORM\Column(name: "studentId", type: "integer")]
   private int $studentId;

    #[ORM\Column(name: "firstName", type: "string", length: 100)]
    private string $firstName;

    #[ORM\Column(name: "lastName", type: "string", length: 100)]
    private string $lastName;

    #[ORM\Column(name: "birthDate", type: "date")]
    private \DateTimeInterface $birthDate;
    
    //RELATIONSHIPS

     #[ORM\OneToOne(mappedBy: "student", targetEntity: EReport::class, cascade: ["persist", "remove"])]
    private ?EReport $report = null;

    /*#[ORM\OneToOne(mappedBy: "student", targetEntity: ECertificate::class, cascade: ["persist", "remove"])]
    private ?ECertificate $certificate = null; */

    #[ORM\OneToOne(mappedBy: "student", targetEntity: ECertificate::class)]
    private ECertificate $certificate;

    #[ORM\OneToMany(mappedBy: "student", targetEntity: EStudyRoomReservation::class)]
    private Collection $studyRoomReservation;

    #[ORM\OneToOne(mappedBy: "student", targetEntity: EGymReservation::class, cascade: ["persist", "remove"])]
    private ?EGymReservation $gymReservation = null;

    public function __construct(string $firstName, string $lastName, string $email, string $studentId, string $password, string $birthDate) {
        parent::__construct($email, $password); // Call the parent class constructor
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->studentId = $studentId;
        $this->birthDate = new DateTime($birthDate);

        $this->certificates = new ArrayCollection();
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
