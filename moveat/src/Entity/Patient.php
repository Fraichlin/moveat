<?php

namespace App\Entity;

use App\Repository\PatientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PatientRepository::class)
 */
class Patient
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
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="integer")
     */
    private $age;

    /**
     * @ORM\Column(type="float")
     */
    private $taille;

    /**
     * @ORM\Column(type="float")
     */
    private $poid;

    /**
     * @ORM\OneToMany(targetEntity=ProgramNutri::class, mappedBy="Patient")
     */
    private $programNutris;

    public function __construct()
    {
        $this->programNutris = new ArrayCollection();
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getTaille(): ?float
    {
        return $this->taille;
    }

    public function setTaille(float $taille): self
    {
        $this->taille = $taille;

        return $this;
    }

    public function getPoid(): ?float
    {
        return $this->poid;
    }

    public function setPoid(float $poid): self
    {
        $this->poid = $poid;

        return $this;
    }

    /**
     * @return Collection|ProgramNutri[]
     */
    public function getProgramNutris(): Collection
    {
        return $this->programNutris;
    }

    public function addProgramNutri(ProgramNutri $programNutri): self
    {
        if (!$this->programNutris->contains($programNutri)) {
            $this->programNutris[] = $programNutri;
            $programNutri->setPatient($this);
        }

        return $this;
    }

    public function removeProgramNutri(ProgramNutri $programNutri): self
    {
        if ($this->programNutris->removeElement($programNutri)) {
            // set the owning side to null (unless already changed)
            if ($programNutri->getPatient() === $this) {
                $programNutri->setPatient(null);
            }
        }

        return $this;
    }
    public function bmi()
    {
        $bmip = $this->get('request')->request->get('$poid');
        $bmit = $this->get('request')->request->get('$taille');
        $bmi = $bmip/$bmit^2;
        return $bmi;
    }
}
