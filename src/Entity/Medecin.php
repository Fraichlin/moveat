<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medecin
 *
 * @ORM\Table(name="medecin")
 * @ORM\Entity
 */
class Medecin
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="addresseCabinet", type="string", length=254, nullable=true, options={"default"="NULL"})
     */
    private $addressecabinet = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="specialite", type="string", length=254, nullable=true, options={"default"="NULL"})
     */
    private $specialite = 'NULL';

    /**
     * @var \Coach
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Coach")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCoach", referencedColumnName="idCoach")
     * })
     */
    private $idcoach;

    public function getAddressecabinet(): ?string
    {
        return $this->addressecabinet;
    }

    public function setAddressecabinet(?string $addressecabinet): self
    {
        $this->addressecabinet = $addressecabinet;

        return $this;
    }

    public function getSpecialite(): ?string
    {
        return $this->specialite;
    }

    public function setSpecialite(?string $specialite): self
    {
        $this->specialite = $specialite;

        return $this;
    }

    public function getIdcoach(): ?Coach
    {
        return $this->idcoach;
    }

    public function setIdcoach(?Coach $idcoach): self
    {
        $this->idcoach = $idcoach;

        return $this;
    }


}
