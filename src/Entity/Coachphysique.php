<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coachphysique
 *
 * @ORM\Table(name="coachphysique")
 * @ORM\Entity
 */
class Coachphysique
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="addresseSallesport", type="string", length=254, nullable=true, options={"default"="NULL"})
     */
    private $addressesallesport = 'NULL';

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

    public function getAddressesallesport(): ?string
    {
        return $this->addressesallesport;
    }

    public function setAddressesallesport(?string $addressesallesport): self
    {
        $this->addressesallesport = $addressesallesport;

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
