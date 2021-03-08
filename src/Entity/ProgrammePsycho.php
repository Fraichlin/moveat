<?php

namespace App\Entity;

use App\Repository\ProgrammePsychoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProgrammePsychoRepository::class)
 */
class ProgrammePsycho
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
     * @ORM\OneToOne(targetEntity=ProgrammeGeneral::class, inversedBy="programmePsycho", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $idProgGn;

    /**
     * @ORM\ManyToMany(targetEntity=Article::class, mappedBy="idProgPsy")
     */
    private $articles;

    public function __construct()
    {
        $this->articles = new ArrayCollection();
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
     * @return Collection|Article[]
     */
    public function getArticles(): Collection
    {
        return $this->articles;
    }

    public function addArticle(Article $article): self
    {
        if (!$this->articles->contains($article)) {
            $this->articles[] = $article;
            $article->addIdProgPsy($this);
        }

        return $this;
    }

    public function removeArticle(Article $article): self
    {
        if ($this->articles->removeElement($article)) {
            $article->removeIdProgPsy($this);
        }

        return $this;
    }
}
