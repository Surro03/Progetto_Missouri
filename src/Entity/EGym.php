<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

require_once 'EGymSeat.php';
#[ORM\Entity]
#[ORM\Table(name: "gyms")]
class EGym {

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "gymId", type: "integer")]
    private int $gymId;

// RELATIONSHIPS
#[ORM\OneToMany(mappedBy: "gym", targetEntity: EGymSeat::class, cascade: ["persist", "remove"])]
    private Collection $gymSeatList;

    // Constructor
    public function __construct() {
        $this->gymSeatList = new ArrayCollection();
    }
    // Getters
    public function getGymId(): int {
        return $this->gymId;
    }
    public function getGymSeatList(): Collection {
        return $this->gymSeatList;
    }
    // Setters
    public function setGymId(int $gymId): void {
        $this->gymId = $gymId;
    }
    public function setGymSeatList(Collection $gymSeatList): void {
        $this->gymSeatList = $gymSeatList;
    }
    // Add a seat to the gym
    public function addGymSeat(EGymSeat $gymSeat): void {
        if (!$this->gymSeatList->contains($gymSeat)) {
            $this->gymSeatList[] = $gymSeat;
            $gymSeat->setGym($this); // Set the gym for the seat
        }
    }

}
?>
