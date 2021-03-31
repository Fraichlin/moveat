<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Psychotherapeute
 *
 * @ORM\Table(name="psychotherapeute")
 * @ORM\Entity
 */
class Psychotherapeute
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCoach", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcoach;

    public function getIdcoach(): ?int
    {
        return $this->idcoach;
    }


}
