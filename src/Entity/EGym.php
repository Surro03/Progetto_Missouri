<?php
namespace src\Entity;

use Doctrine\ORM\Mapping as ORM;

require_once 'EGymSeat.php';
#[ORM\Entity]
#[ORM\Table(name: "gyms")]
class EGym {

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]

    #[ORM\Column(type: "integer")]
    private int $gymId;

    #[ORM\Column(type: "json", nullable: true)]
    private array $gymSeatList;

    public function __construct(int $gymId, array $gymSeatList = []) {
        $this->gymId = $gymId;
        $this->gymSeatList = $gymSeatList;
    }

    public function getGymId(): int {
        return $this->gymId;
    }

    public function getGymSeatList(): array {
        return $this->gymSeatList;
    }

    public function setGymSeatList(array $gymSeatList): void {
        $this->gymSeatList = $gymSeatList;
    }
}
?>
