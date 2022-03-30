<?php

namespace App\Entity;

use App\Repository\BookRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BookRepository::class)]
class Book
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: Car::class, inversedBy: 'books')]
    #[ORM\JoinColumn(nullable: false)]
    private $id_car;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'books')]
    #[ORM\JoinColumn(nullable: false)]
    private $id_user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCar(): ?Car
    {
        return $this->id_car;
    }

    public function setIdCar(?Car $id_car): self
    {
        $this->id_car = $id_car;

        return $this;
    }

    public function getIdUser(): ?User
    {
        return $this->id_user;
    }

    public function setIdUser(?User $id_user): self
    {
        $this->id_user = $id_user;

        return $this;
    }
}
