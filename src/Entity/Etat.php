<?php

namespace App\Entity;

use App\Repository\EtatRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EtatRepository::class)
 */
class Etat
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $acro;

    /**
     * @ORM\Column(type="string", length=35)
     */
    private $libelle;

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
}
