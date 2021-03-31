<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nutritioniste
 *
 * @ORM\Table(name="nutritioniste")
 * @ORM\Entity
 */
class Nutritioniste
{
    /**
     * @var \Medecin
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Medecin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCoach", referencedColumnName="idCoach")
     * })
     */
    private $idcoach;

    public function getIdcoach(): ?Medecin
    {
        return $this->idcoach;
    }

    public function setIdcoach(?Medecin $idcoach): self
    {
        $this->idcoach = $idcoach;

        return $this;
    }


}
