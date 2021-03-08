<?php

namespace App\Entity;

use App\Repository\ExerciceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ExerciceRepository::class)
 */
class Exercice
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="float")
     */
    private $calories;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $photoOuGif;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\ManyToMany(targetEntity=ProgrammeSportif::class, inversedBy="exercices")
     */
    private $idProgSpr;

    public function __construct()
    {
        $this->idProgSpr = new ArrayCollection();
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

    public function getCalories(): ?float
    {
        return $this->calories;
    }

    public function setCalories(float $calories): self
    {
        $this->calories = $calories;

        return $this;
    }

    public function getPhotoOuGif(): ?string
    {
        return $this->photoOuGif;
    }

    public function setPhotoOuGif(string $photoOuGif): self
    {
        $this->photoOuGif = $photoOuGif;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return Collection|ProgrammeSportif[]
     */
    public function getIdProgSpr(): Collection
    {
        return $this->idProgSpr;
    }

    public function addIdProgSpr(ProgrammeSportif $idProgSpr): self
    {
        if (!$this->idProgSpr->contains($idProgSpr)) {
            $this->idProgSpr[] = $idProgSpr;
        }

        return $this;
    }

    public function removeIdProgSpr(ProgrammeSportif $idProgSpr): self
    {
        $this->idProgSpr->removeElement($idProgSpr);

        return $this;
    }
}
