<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArticleRepository::class)
 */
class Article
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
    private $theme;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $photo;

    /**
     * @ORM\ManyToMany(targetEntity=ProgrammePsycho::class, inversedBy="articles")
     */
    private $idProgPsy;

    public function __construct()
    {
        $this->idProgPsy = new ArrayCollection();
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

    public function getTheme(): ?string
    {
        return $this->theme;
    }

    public function setTheme(string $theme): self
    {
        $this->theme = $theme;

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
     * @return Collection|ProgrammePsycho[]
     */
    public function getIdProgPsy(): Collection
    {
        return $this->idProgPsy;
    }

    public function addIdProgPsy(ProgrammePsycho $idProgPsy): self
    {
        if (!$this->idProgPsy->contains($idProgPsy)) {
            $this->idProgPsy[] = $idProgPsy;
        }

        return $this;
    }

    public function removeIdProgPsy(ProgrammePsycho $idProgPsy): self
    {
        $this->idProgPsy->removeElement($idProgPsy);

        return $this;
    }
}
