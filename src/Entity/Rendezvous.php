<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rendezvous
 *
 * @ORM\Table(name="rendezvous", indexes={@ORM\Index(name="ASSOCIATION3_FK", columns={"idCoach"}), @ORM\Index(name="ASSOCIATION4_FK", columns={"idMembre"})})
 * @ORM\Entity
 */
class Rendezvous
{
    /**
     * @var int
     *
     * @ORM\Column(name="idMembre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idmembre;

    /**
     * @var int
     *
     * @ORM\Column(name="idCoach", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idcoach;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $date = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="statut", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $statut = NULL;

    public function getIdmembre(): ?int
    {
        return $this->idmembre;
    }

    public function getIdcoach(): ?int
    {
        return $this->idcoach;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getStatut(): ?int
    {
        return $this->statut;
    }

    public function setStatut(?int $statut): self
    {
        $this->statut = $statut;

        return $this;
    }


}
