<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Programme
 *
 * @ORM\Table(name="programme", uniqueConstraints={@ORM\UniqueConstraint(name="PROGRAMME_PK", columns={"idProgramme"})}, indexes={@ORM\Index(name="ASSOCIATION5_FK", columns={"idProgGen"})})
 * @ORM\Entity
 */
class Programme
{
    /**
     * @var int
     *
     * @ORM\Column(name="idProgramme", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprogramme;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=254, nullable=true, options={"default"="NULL"})
     */
    private $nom = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=254, nullable=true, options={"default"="NULL"})
     */
    private $type = 'NULL';

    /**
     * @var \Programmegeneral
     *
     * @ORM\ManyToOne(targetEntity="Programmegeneral")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idProgGen", referencedColumnName="idProgGen")
     * })
     */
    private $idproggen;

    public function getIdprogramme(): ?int
    {
        return $this->idprogramme;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getIdproggen(): ?Programmegeneral
    {
        return $this->idproggen;
    }

    public function setIdproggen(?Programmegeneral $idproggen): self
    {
        $this->idproggen = $idproggen;

        return $this;
    }


}
