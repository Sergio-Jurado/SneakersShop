<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\AddressRepository;
use Doctrine\ORM\Mapping as ORM;

#[ApiResource]
#[ORM\Entity(repositoryClass: AddressRepository::class)]
class Address
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $streetandnumber = null;

    #[ORM\Column(length: 255)]
    private ?string $flooranddoor = null;

    #[ORM\Column(length: 255)]
    private ?string $city = null;

    #[ORM\Column(length: 255)]
    private ?string $postalcode = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStreetandnumber(): ?string
    {
        return $this->streetandnumber;
    }

    public function setStreetandnumber(string $streetandnumber): static
    {
        $this->streetandnumber = $streetandnumber;

        return $this;
    }

    public function getFlooranddoor(): ?string
    {
        return $this->flooranddoor;
    }

    public function setFlooranddoor(string $flooranddoor): static
    {
        $this->flooranddoor = $flooranddoor;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): static
    {
        $this->city = $city;

        return $this;
    }

    public function getPostalcode(): ?string
    {
        return $this->postalcode;
    }

    public function setPostalcode(string $postalcode): static
    {
        $this->postalcode = $postalcode;

        return $this;
    }
}
