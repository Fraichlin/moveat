<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Repas
 *
 * @ORM\Table(name="repas", uniqueConstraints={@ORM\UniqueConstraint(name="REPAS_PK", columns={"idRepas"})}, indexes={@ORM\Index(name="ASSOCIATION7_FK", columns={"idProgramme"})})
 * @ORM\Entity
 */
class Repas
{
    /**
     * @var int
     *
     * @ORM\Column(name="idRepas", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrepas;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idProgramme", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idprogramme = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=254, nullable=true, options={"default"="NULL"})
     */
    private $nom = 'NULL';

    /**
     * @var float|null
     *
     * @ORM\Column(name="calories", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $calories = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=254, nullable=true, options={"default"="NULL"})
     */
    private $type = 'NULL';

    public function getIdrepas(): ?int
    {
        return $this->idrepas;
    }

    public function getIdprogramme(): ?int
    {
        return $this->idprogramme;
    }

    public function setIdprogramme(?int $idprogramme): self
    {
        $this->idprogramme = $idprogramme;

        return $this;
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

    public function getCalories(): ?float
    {
        return $this->calories;
    }

    public function setCalories(?float $calories): self
    {
        $this->calories = $calories;

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


}
