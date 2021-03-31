<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Programmesportif
 *
 * @ORM\Table(name="programmesportif")
 * @ORM\Entity
 */
class Programmesportif
{
    /**
     * @var int
     *
     * @ORM\Column(name="idProgramme", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprogramme;

    public function getIdprogramme(): ?int
    {
        return $this->idprogramme;
    }


}
