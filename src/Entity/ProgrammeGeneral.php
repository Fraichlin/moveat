<?php

namespace App\Entity;

use App\Repository\ProgrammeGeneralRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProgrammeGeneralRepository::class)
 */
class ProgrammeGeneral
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
    private $titre;

    /**
     * @ORM\OneToMany(targetEntity=Membre::class, mappedBy="idProgGn")
     */
    private $membres;

    /**
     * @ORM\OneToOne(targetEntity=ProgrammeNutritionnel::class, mappedBy="idProgGn", cascade={"persist", "remove"})
     */
    private $programmeNutritionnel;

    /**
     * @ORM\OneToOne(targetEntity=ProgrammeSportif::class, mappedBy="idProgGn", cascade={"persist", "remove"})
     */
    private $programmeSportif;

    /**
     * @ORM\OneToOne(targetEntity=ProgrammePsycho::class, mappedBy="idProgGn", cascade={"persist", "remove"})
     */
    private $programmePsycho;

    public function __construct()
    {
        $this->membres = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * @return Collection|Membre[]
     */
    public function getMembres(): Collection
    {
        return $this->membres;
    }

    public function addMembre(Membre $membre): self
    {
        if (!$this->membres->contains($membre)) {
            $this->membres[] = $membre;
            $membre->setIdProgGn($this);
        }

        return $this;
    }

    public function removeMembre(Membre $membre): self
    {
        if ($this->membres->removeElement($membre)) {
            // set the owning side to null (unless already changed)
            if ($membre->getIdProgGn() === $this) {
                $membre->setIdProgGn(null);
            }
        }

        return $this;
    }

    public function getProgrammeNutritionnel(): ?ProgrammeNutritionnel
    {
        return $this->programmeNutritionnel;
    }

    public function setProgrammeNutritionnel(ProgrammeNutritionnel $programmeNutritionnel): self
    {
        // set the owning side of the relation if necessary
        if ($programmeNutritionnel->getIdProgGn() !== $this) {
            $programmeNutritionnel->setIdProgGn($this);
        }

        $this->programmeNutritionnel = $programmeNutritionnel;

        return $this;
    }

    public function getProgrammeSportif(): ?ProgrammeSportif
    {
        return $this->programmeSportif;
    }

    public function setProgrammeSportif(ProgrammeSportif $programmeSportif): self
    {
        // set the owning side of the relation if necessary
        if ($programmeSportif->getIdProgGn() !== $this) {
            $programmeSportif->setIdProgGn($this);
        }

        $this->programmeSportif = $programmeSportif;

        return $this;
    }

    public function getProgrammePsycho(): ?ProgrammePsycho
    {
        return $this->programmePsycho;
    }

    public function setProgrammePsycho(ProgrammePsycho $programmePsycho): self
    {
        // set the owning side of the relation if necessary
        if ($programmePsycho->getIdProgGn() !== $this) {
            $programmePsycho->setIdProgGn($this);
        }

        $this->programmePsycho = $programmePsycho;

        return $this;
    }
}
