<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Programmegeneral
 *
 * @ORM\Table(name="programmegeneral", uniqueConstraints={@ORM\UniqueConstraint(name="PROGRAMMEGENERAL_PK", columns={"idProgGen"})})
 * @ORM\Entity
 */
class Programmegeneral
{
    /**
     * @var int
     *
     * @ORM\Column(name="idProgGen", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idproggen;

    /**
     * @var string|null
     *
     * @ORM\Column(name="titre", type="string", length=254, nullable=true, options={"default"="NULL"})
     */
    private $titre = 'NULL';

    public function getIdproggen(): ?int
    {
        return $this->idproggen;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }


}
