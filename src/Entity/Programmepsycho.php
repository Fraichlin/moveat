<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Programmepsycho
 *
 * @ORM\Table(name="programmepsycho")
 * @ORM\Entity
 */
class Programmepsycho
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
