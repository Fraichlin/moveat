<?php

namespace App\Entity;

use App\Repository\ProgrammeNutritionnelRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProgrammeNutritionnelRepository::class)
 */
class ProgrammeNutritionnel
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
     * @ORM\OneToOne(targetEntity=ProgrammeGeneral::class, inversedBy="programmeNutritionnel", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $idProgGn;

    /**
     * @ORM\ManyToMany(targetEntity=Repas::class, mappedBy="idProgNtr")
     */
    private $repas;

    public function __construct()
    {
        $this->repas = new ArrayCollection();
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

    public function getIdProgGn(): ?ProgrammeGeneral
    {
        return $this->idProgGn;
    }

    public function setIdProgGn(ProgrammeGeneral $idProgGn): self
    {
        $this->idProgGn = $idProgGn;

        return $this;
    }

    /**
     * @return Collection|Repas[]
     */
    public function getRepas(): Collection
    {
        return $this->repas;
    }

    public function addRepa(Repas $repa): self
    {
        if (!$this->repas->contains($repa)) {
            $this->repas[] = $repa;
            $repa->addIdProgNtr($this);
        }

        return $this;
    }

    public function removeRepa(Repas $repa): self
    {
        if ($this->repas->removeElement($repa)) {
            $repa->removeIdProgNtr($this);
        }

        return $this;
    }
}
