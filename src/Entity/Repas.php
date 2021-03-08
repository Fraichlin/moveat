<?php

namespace App\Entity;

use App\Repository\RepasRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RepasRepository::class)
 */
class Repas
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
    private $type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $photo;

    /**
     * @ORM\ManyToMany(targetEntity=ProgrammeNutritionnel::class, inversedBy="repas")
     */
    private $idProgNtr;

    public function __construct()
    {
        $this->idProgNtr = new ArrayCollection();
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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * @return Collection|ProgrammeNutritionnel[]
     */
    public function getIdProgNtr(): Collection
    {
        return $this->idProgNtr;
    }

    public function addIdProgNtr(ProgrammeNutritionnel $idProgNtr): self
    {
        if (!$this->idProgNtr->contains($idProgNtr)) {
            $this->idProgNtr[] = $idProgNtr;
        }

        return $this;
    }

    public function removeIdProgNtr(ProgrammeNutritionnel $idProgNtr): self
    {
        $this->idProgNtr->removeElement($idProgNtr);

        return $this;
    }
}
