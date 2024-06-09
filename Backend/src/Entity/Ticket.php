<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\TicketRepository;
use Doctrine\ORM\Mapping as ORM;

#[ApiResource]
#[ORM\Entity(repositoryClass: TicketRepository::class)]
class Ticket
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?address $address = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?sneaker $sneaker = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAddress(): ?address
    {
        return $this->address;
    }

    public function setAddress(?address $address): static
    {
        $this->address = $address;

        return $this;
    }

    public function getSneaker(): ?sneaker
    {
        return $this->sneaker;
    }

    public function setSneaker(?sneaker $sneaker): static
    {
        $this->sneaker = $sneaker;

        return $this;
    }
}
