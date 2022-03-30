<?php

namespace App\Entity;

use App\Repository\TestRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TestRepository::class)]
class Test
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'date')]
    private $day;

    #[ORM\Column(type: 'time')]
    private $time;

    #[ORM\ManyToOne(targetEntity: Car::class, inversedBy: 'tests')]
    #[ORM\JoinColumn(nullable: false)]
    private $id_car;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'tests')]
    #[ORM\JoinColumn(nullable: false)]
    private $id_user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDay(): ?\DateTimeInterface
    {
        return $this->day;
    }

    public function setDay(\DateTimeInterface $day): self
    {
        $this->day = $day;

        return $this;
    }

    public function getTime(): ?\DateTimeInterface
    {
        return $this->time;
    }

    public function setTime(\DateTimeInterface $time): self
    {
        $this->time = $time;

        return $this;
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
