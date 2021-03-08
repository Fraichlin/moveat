<?php

namespace App\Entity;

use App\Repository\RendezVousRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RendezVousRepository::class)
 */
class RendezVous
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="integer")
     */
    private $statut;

    /**
     * @ORM\ManyToOne(targetEntity=Membre::class, inversedBy="rendezVouses")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idMembre;

    /**
     * @ORM\ManyToOne(targetEntity=Coach::class, inversedBy="rendezVouses")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idCoach;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getStatut(): ?int
    {
        return $this->statut;
    }

    public function setStatut(int $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getIdMembre(): ?Membre
    {
        return $this->idMembre;
    }

    public function setIdMembre(?Membre $idMembre): self
    {
        $this->idMembre = $idMembre;

        return $this;
    }

    public function getIdCoach(): ?Coach
    {
        return $this->idCoach;
    }

    public function setIdCoach(?Coach $idCoach): self
    {
        $this->idCoach = $idCoach;

        return $this;
    }
}
