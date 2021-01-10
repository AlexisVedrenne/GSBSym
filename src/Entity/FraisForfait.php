<?php

namespace App\Entity;

use App\Repository\FraisForfaitRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FraisForfaitRepository::class)
 */
class FraisForfait
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $acro;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $libelle;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    private $montant;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAcro(): ?string
    {
        return $this->acro;
    }

    public function setAcro(string $acro): self
    {
        $this->acro = $acro;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getMontant(): ?string
    {
        return $this->montant;
    }

    public function setMontant(string $montant): self
    {
        $this->montant = $montant;

        return $this;
    }
}
