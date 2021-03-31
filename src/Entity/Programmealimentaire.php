<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Programmealimentaire
 *
 * @ORM\Table(name="programmealimentaire")
 * @ORM\Entity
 */
class Programmealimentaire
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
