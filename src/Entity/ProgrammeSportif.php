<?php

namespace App\Entity;

use App\Repository\ProgrammeSportifRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProgrammeSportifRepository::class)
 */
class ProgrammeSportif
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
     * @ORM\OneToOne(targetEntity=ProgrammeGeneral::class, inversedBy="programmeSportif", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $idProgGn;

    /**
     * @ORM\ManyToMany(targetEntity=Exercice::class, mappedBy="idProgSpr")
     */
    private $exercices;

    public function __construct()
    {
        $this->exercices = new ArrayCollection();
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
     * @return Collection|Exercice[]
     */
    public function getExercices(): Collection
    {
        return $this->exercices;
    }

    public function addExercice(Exercice $exercice): self
    {
        if (!$this->exercices->contains($exercice)) {
            $this->exercices[] = $exercice;
            $exercice->addIdProgSpr($this);
        }

        return $this;
    }

    public function removeExercice(Exercice $exercice): self
    {
        if ($this->exercices->removeElement($exercice)) {
            $exercice->removeIdProgSpr($this);
        }

        return $this;
    }
}
