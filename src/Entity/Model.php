<?php

namespace App\Entity;

use App\Repository\ModelRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ModelRepository::class)]
class Model
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: Manufacturer::class, inversedBy: 'models')]
    #[ORM\JoinColumn(nullable: false)]
    private $id_manufacturer;

    #[ORM\ManyToOne(targetEntity: ModelType::class, inversedBy: 'models')]
    #[ORM\JoinColumn(nullable: false)]
    private $id_model_type;

    #[ORM\Column(type: 'string', length: 50)]
    private $name;

    #[ORM\OneToMany(mappedBy: 'id_model', targetEntity: Car::class)]
    private $cars;

    public function __construct()
    {
        $this->cars = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdManufacturer(): ?Manufacturer
    {
        return $this->id_manufacturer;
    }

    public function setIdManufacturer(?Manufacturer $id_manufacturer): self
    {
        $this->id_manufacturer = $id_manufacturer;

        return $this;
    }

    public function getIdModelType(): ?ModelType
    {
        return $this->id_model_type;
    }

    public function setIdModelType(?ModelType $id_model_type): self
    {
        $this->id_model_type = $id_model_type;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, Car>
     */
    public function getCars(): Collection
    {
        return $this->cars;
    }

    public function addCar(Car $car): self
    {
        if (!$this->cars->contains($car)) {
            $this->cars[] = $car;
            $car->setIdModel($this);
        }

        return $this;
    }

    public function removeCar(Car $car): self
    {
        if ($this->cars->removeElement($car)) {
            // set the owning side to null (unless already changed)
            if ($car->getIdModel() === $this) {
                $car->setIdModel(null);
            }
        }

        return $this;
    }

    public function __toString() {
        return $this->name;
    }
}
