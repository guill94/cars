<?php

namespace App\Entity;

use App\Repository\CarRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CarRepository::class)]
class Car
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: Model::class, inversedBy: 'cars')]
    #[ORM\JoinColumn(nullable: false)]
    private $id_model;

    #[ORM\ManyToOne(targetEntity: EnergyType::class, inversedBy: 'cars')]
    #[ORM\JoinColumn(nullable: false)]
    private $id_energy_type;

    #[ORM\ManyToOne(targetEntity: Color::class, inversedBy: 'cars')]
    #[ORM\JoinColumn(nullable: false)]
    private $id_color;

    #[ORM\Column(type: 'float')]
    private $fiscal_power;

    #[ORM\Column(type: 'float')]
    private $real_power;

    #[ORM\Column(type: 'string', length: 15)]
    private $registration;

    #[ORM\Column(type: 'boolean')]
    private $booking;

    #[ORM\OneToMany(mappedBy: 'id_car', targetEntity: Test::class)]
    private $tests;

    #[ORM\OneToMany(mappedBy: 'id_car', targetEntity: Book::class)]
    private $books;

    #[ORM\Column(type: 'float')]
    private $price;

    public function __construct()
    {
        $this->tests = new ArrayCollection();
        $this->books = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdModel(): ?model
    {
        return $this->id_model;
    }

    public function setIdModel(?model $id_model): self
    {
        $this->id_model = $id_model;

        return $this;
    }

    public function getIdEnergyType(): ?EnergyType
    {
        return $this->id_energy_type;
    }

    public function setIdEnergyType(?EnergyType $id_energy_type): self
    {
        $this->id_energy_type = $id_energy_type;

        return $this;
    }

    public function getIdColor(): ?Color
    {
        return $this->id_color;
    }

    public function setIdColor(?Color $id_color): self
    {
        $this->id_color = $id_color;

        return $this;
    }

    public function getFiscalPower(): ?float
    {
        return $this->fiscal_power;
    }

    public function setFiscalPower(float $fiscal_power): self
    {
        $this->fiscal_power = $fiscal_power;

        return $this;
    }

    public function getRealPower(): ?float
    {
        return $this->real_power;
    }

    public function setRealPower(float $real_power): self
    {
        $this->real_power = $real_power;

        return $this;
    }

    public function getRegistration(): ?string
    {
        return $this->registration;
    }

    public function setRegistration(string $registration): self
    {
        $this->registration = $registration;

        return $this;
    }

    public function getBooking(): ?bool
    {
        return $this->booking;
    }

    public function setBooking(bool $booking): self
    {
        $this->booking = $booking;

        return $this;
    }

    /**
     * @return Collection<int, Test>
     */
    public function getTests(): Collection
    {
        return $this->tests;
    }

    public function addTest(Test $test): self
    {
        if (!$this->tests->contains($test)) {
            $this->tests[] = $test;
            $test->setIdCar($this);
        }

        return $this;
    }

    public function removeTest(Test $test): self
    {
        if ($this->tests->removeElement($test)) {
            // set the owning side to null (unless already changed)
            if ($test->getIdCar() === $this) {
                $test->setIdCar(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Book>
     */
    public function getBooks(): Collection
    {
        return $this->books;
    }

    public function addBook(Book $book): self
    {
        if (!$this->books->contains($book)) {
            $this->books[] = $book;
            $book->setIdCar($this);
        }

        return $this;
    }

    public function removeBook(Book $book): self
    {
        if ($this->books->removeElement($book)) {
            // set the owning side to null (unless already changed)
            if ($book->getIdCar() === $this) {
                $book->setIdCar(null);
            }
        }

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }
}
