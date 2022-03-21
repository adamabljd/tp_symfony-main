<?php

namespace App\Entity;

use App\Repository\FilmRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'sb_films')]
#[ORM\Entity(repositoryClass: FilmRepository::class)]
class Film
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 200)]
    private $nom;

    #[ORM\Column(type: 'integer' , options: ["comment"=>"annee de sortie"])]
    private $annee;

    #[ORM\Column(type: 'boolean' , options: ["default"=>"true"])]
    private $enstock;

    #[ORM\Column(type: 'float')]
    private $prix;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $quantite;

    /**
    * Film constructor.
    */
    public function __construct()
    {
        $this->enstock = true;
        $this->quantite = null;
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAnnee(): ?int
    {
        return $this->annee;
    }

    public function setAnnee(int $annee): self
    {
        $this->annee = $annee;

        return $this;
    }

    public function getEnstock(): ?bool
    {
        return $this->enstock;
    }

    public function setEnstock(bool $enstock): self
    {
        $this->enstock = $enstock;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(?int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }
}
