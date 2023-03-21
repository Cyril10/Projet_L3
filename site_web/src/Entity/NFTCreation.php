<?php

namespace App\Entity;

use App\Repository\NFTCreationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NFTCreationRepository::class)]
class NFTCreation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom = null;

    #[ORM\Column(length: 255)]
    private ?string $Prenom = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $D_naissance = null;

    #[ORM\Column(length: 255)]
    private ?string $Lieu_naissance = null;

   
    public function setID(int $ID): self
    {
        $this->ID = $ID;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getDNaissance(): ?\DateTimeInterface
    {
        return $this->D_naissance;
    }

    public function setDNaissance(\DateTimeInterface $D_naissance): self
    {
        $this->D_naissance = $D_naissance;

        return $this;
    }

    public function getLieuNaissance(): ?string
    {
        return $this->Lieu_naissance;
    }

    public function setLieuNaissance(string $Lieu_naissance): self
    {
        $this->Lieu_naissance = $Lieu_naissance;

        return $this;
    }
}