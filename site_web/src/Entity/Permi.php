<?php

namespace App\Entity;

use App\Repository\PermiRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PermiRepository::class)]
class Permi
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $NumeroPermi = null;

    #[ORM\Column(length: 255)]
    private ?string $TypeVehicule = null;

    #[ORM\Column]
    private ?int $NEPH = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroPermi(): ?int
    {
        return $this->NumeroPermi;
    }

    public function setNumeroPermi(int $NumeroPermi): self
    {
        $this->NumeroPermi = $NumeroPermi;

        return $this;
    }

    public function getTypeVehicule(): ?string
    {
        return $this->TypeVehicule;
    }

    public function setTypeVehicule(string $TypeVehicule): self
    {
        $this->TypeVehicule = $TypeVehicule;

        return $this;
    }

    public function getNEPH(): ?int
    {
        return $this->NEPH;
    }

    public function setNEPH(int $NEPH): self
    {
        $this->NEPH = $NEPH;

        return $this;
    }
}